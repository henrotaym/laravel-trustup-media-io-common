<?php

namespace Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Models;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\StorableMediaTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Enums\Media\MediaCollections;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Psr\Http\Message\StreamInterface;

class StorableMediaTransformer implements StorableMediaTransformerContract
{
    public function fromArray(array $attributes): ?StorableMediaContract
    {
        if (! isset($attributes['resource'])) {
            return null;
        }

        if (! $media = $this->fromResource($attributes['resource'])) {
            return null;
        }

        if (isset($attributes['collection']) && $attributes['collection'] instanceof MediaCollections) {
            $attributes['collection'] = $attributes['collection']->value;
        }

        return $media
            ->setCollection($attributes['collection'] ?? null)
            ->setCustomProperties($attributes['custom_properties'] ?? [])
            ->setName($attributes['name'] ?? null);
    }

    /** @param string|UploadedFile|StreamInterface $resource */
    public function fromResource($resource): ?StorableMediaContract
    {
        $media = $this->getNewMedia()
            ->setResource($resource);

        if ($this->isStream($resource)) {
            return $media->setAsStream();
        }

        if ($this->isFile($resource)) {
            return $media->setAsFile();
        }

        if (! is_string($resource)) {
            return null;
        }

        if ($this->isBase64($resource)) {
            return $media->setAsBase64();
        }

        if ($this->isUrl($resource)) {
            return $media->setAsUrl();
        }

        return $media->setAsString();
    }

    public function toArray(StorableMediaContract $media): array
    {
        return [
            'resource' => $media->getResource(),
            'name' => $media->getName(),
            'collection' => $media->getCollection(),
            'custom_properties' => $media->getCustomProperties(),
        ];
    }

    protected function getNewMedia(): StorableMediaContract
    {
        /** @var StorableMediaContract */
        $media = app()->make(StorableMediaContract::class);

        return $media;
    }

    /**
     * Building media based on resource
     */
    protected function isBase64(string $resource): bool
    {
        // strip out data uri scheme information (see RFC 2397)
        if (str_contains($resource, ';base64,')) {
            [$_, $resource] = explode(';', $resource);
            [$_, $resource] = explode(',', $resource);
        }

        // strict mode filters for non-base64 alphabet characters
        $binary = base64_decode($resource, true);

        return $binary !== false
            && base64_encode($binary) === $resource;
    }

    protected function isFile($resource): bool
    {
        return $resource instanceof UploadedFile;
    }

    protected function isUrl(string $resource): bool
    {
        return Str::startsWith($resource, ['http://', 'https://']);
    }

    protected function isStream($resource): bool
    {
        return $resource instanceof StreamInterface;
    }
}
