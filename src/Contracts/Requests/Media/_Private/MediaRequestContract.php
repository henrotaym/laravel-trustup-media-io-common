<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\_Private;

interface MediaRequestContract
{
    public function hasCollection(): bool;
    
    public function getCollection(): ?string;

    public function hasAppKey(): bool;
    
    public function getAppKey(): ?string;
    
    public function hasModelType(): bool;

    public function getModelType(): string;

    public function hasModelId(): bool;
    
    public function getModelId(): int;

    /** @return static */
    public function setCollection(?string $collection = null): MediaRequestContract;
    
    /** @return static */
    public function setAppKey(?string $appKey = null): MediaRequestContract;
    
    /** @return static */
    public function setModelType(string $modelType): MediaRequestContract;
    
    /** @return static */
    public function setModelId(int $modelId): MediaRequestContract;
}