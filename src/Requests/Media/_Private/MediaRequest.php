<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\_Private;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\_Private\MediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Enums\Media\MediaCollections;

abstract class MediaRequest implements MediaRequestContract
{
    protected string $modelType;
    protected string $modelId;
    protected bool $explicitelyNotHavingAppKey = false;
    protected ?string $collection = null;
    protected ?string $appKey = null;

    /** @return static */
    public function setCollection(?string $collection = null): MediaRequestContract
    {
        $this->collection = $collection;

        return $this;
    }

    /** @return static */
    public function setMediaCollection(MediaCollections $mediaCollection): MediaRequestContract
    {
        return $this->setCollection($mediaCollection->getName());
    }
    
    /** @return static */
    public function setAppKey(?string $appKey = null): MediaRequestContract
    {
        if (!$appKey):
            $this->explicitelyNotHavingAppKey = true;
        endif;

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
    public function setModelId(string $modelId): MediaRequestContract
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

    /**
     * True if user explicitely asked for not having app key.
     */
    public function isExplicitelyNotHavingAppKey(): bool
    {
        return $this->explicitelyNotHavingAppKey;
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
    
    public function getModelId(): string
    {
        return $this->modelId;
    }
}