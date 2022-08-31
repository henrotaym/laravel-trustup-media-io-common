<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\_Private;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\_Private\MediaRequestContract;

abstract class MediaRequest implements MediaRequestContract
{
    protected string $modelType;
    protected int $modelId;
    protected ?string $collection;
    protected ?string $appKey; 

    /** @return static */
    public function setCollection(?string $collection = null): MediaRequestContract
    {
        $this->collection = $collection;

        return $this;
    }
    
    /** @return static */
    public function setAppKey(?string $appKey = null): MediaRequestContract
    {
        $this->appKey = $appKey;

        return $this;
    }
    
    /** @return static */
    public function setModelType(string $modelType): MediaRequestContract
    {
        $this->modelType = $modelType;

        return $this;
    }
    
    /** @return static */
    public function setModelId(int $modelId): MediaRequestContract
    {
        $this->modelId = $modelId;

        return $this;
    }

    public function hasCollection(): bool
    {
        return !!$this->collection;
    }
    
    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function hasAppKey(): bool
    {
        return !!$this->appKey;
    }
    
    public function getAppKey(): ?string
    {
        return $this->appKey;
    }
    
    public function hasModelType(): bool
    {
        return !!$this->modelType;
    }

    public function getModelType(): string
    {
        return $this->modelType;
    }
    
    public function hasModelId(): bool
    {
        return !!$this->modelId;
    }
    
    public function getModelId(): int
    {
        return $this->modelId;
    }
}