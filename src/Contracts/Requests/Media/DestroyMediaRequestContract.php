<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\_Private\MediaRequestContract;
use Illuminate\Support\Collection;

interface DestroyMediaRequestContract extends MediaRequestContract
{
    /** @return static */
    public function addUuid(string $uuid): DestroyMediaRequestContract;
    
    /**
     * @param Collection<int, string>
     * @return static
     */
    public function addUuidCollection(Collection $uuidCollection): DestroyMediaRequestContract;

    public function hasUuids(): bool;
    
    /** @return Collection<int, string> */
    public function getUuids(): Collection;

    public function getModelType(): string;
    
    public function getModelId(): string;
}