<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\_Private\MediaRequestContract;
use Illuminate\Support\Collection;

interface StoreMediaRequestContract extends MediaRequestContract
{
    /** @return Collection<int, StorableMediaContract> $mediaCollection */
    public function getMedia(): Collection;

    public function isUsingQueue(): bool;

    /** @return static */
    public function addMedia(StorableMediaContract $media): StoreMediaRequestContract;
    
    /**
     * @param Collection<int, StorableMediaContract> $mediaCollection
     * @return static
     */
    public function addMediaCollection(Collection $mediaCollection): StoreMediaRequestContract;

    /** @return static */
    public function useQueue(bool $isUsingQueue): StoreMediaRequestContract;
}