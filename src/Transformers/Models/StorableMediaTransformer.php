<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Models;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Psr\Http\Message\StreamInterface;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\StorableMediaTransformerContract;

class StorableMediaTransformer implements StorableMediaTransformerContract
{
    public function fromArray(array $attributes): ?StorableMediaContract
    {
        if (!isset($attributes['resource'])):
            return null;
        endif;

        if (!$media = $this->fromResource($attributes['resource'])):
            return null;
        endif;

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
        
        if ($this->isStream($resource)):
            return $media->setAsStream();
        endif;

        if ($this->isFile($resource)):
            return $media->setAsFile();
        endif;

        if (!is_string($resource)):
            return null;
        endif;

        if ($this->isBase64($resource)):
            return $media->setAsBase64();
        endif;

        if ($this->isUrl($resource)):
            return $media->setAsUrl();
        endif;

        return $media->setAsString();
    }

    public function toArray(StorableMediaContract $media): array
    {
        return [
            'resource' => $media->isFile() ?
                $media->getResource()->get()
                : $media->getResource(),
            'name' => $media->getName() ?:
                ($media->isFile() ?
                    $media->getResource()->getClientOriginalName()
                    : null)
            ,
            'collection' => $media->getCollection(),
            'custom_properties' => $media->getCustomProperties()
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
        if (str_contains($resource, ';base64')):
            [$_, $base64] = explode(';', $resource);
            [$_, $base64] = explode(',', $base64);
        endif;

        // strict mode filters for non-base64 alphabet characters
        $binary = base64_decode($base64, true);

        return $binary !== false
            && base64_encode($binary) === $base64;
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