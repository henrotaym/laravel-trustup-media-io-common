<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media;

use Illuminate\Support\Collection;
use Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\_Private\MediaRequest;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\StoreMediaRequestContract;

class StoreMediaRequest extends MediaRequest implements StoreMediaRequestContract
{
    /** @var Collection<int, StorableMediaContract> */
    protected Collection $media;

    protected bool $queue = true;

    /** @return Collection<int, StorableMediaContract> */
    public function getMedia(): Collection
    {
        return $this->media ?? 
            $this->media = collect();
    }

    public function isUsingQueue(): bool
    {
        return $this->queue;
    }

    /** @return static */
    public function addMedia(StorableMediaContract $media): StoreMediaRequestContract
    {
        $this->getMedia()->push($media);

        return $this;
    }
    
    /**
     * @param Collection<int, StorableMediaContract> $mediaCollection
     * @return static
     */
    public function addMediaCollection(Collection $mediaCollection): StoreMediaRequestContract
    {
        $this->getMedia()->merge($mediaCollection);

        return $this;
    }

    /** @return static */
    public function useQueue(bool $isUsingQueue): StoreMediaRequestContract
    {
        $this->queue = $isUsingQueue;
        
        return $this;
    }
}