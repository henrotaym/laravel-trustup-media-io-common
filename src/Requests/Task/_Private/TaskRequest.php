<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\_Private;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\_Private\TaskRequestContract;

abstract class TaskRequest implements TaskRequestContract
{
    protected string $modelType;
    protected int $modelId;
    protected bool $explicitelyNotHavingAppKey = false;
    protected ?string $appKey = null;
    
    /** @return static */
    public function setAppKey(?string $appKey = null): TaskRequestContract
    {
        if (!$appKey):
            $this->explicitelyNotHavingAppKey = true;
        endif;

        $this->appKey = $appKey;

        return $this;
    }
    
    /** @return static */
    public function setModelType(string $modelType): TaskRequestContract
    {
        $this->modelType = $modelType;

        return $this;
    }
    
    /** @return static */
    public function setModelId(int $modelId): TaskRequestContract
    {
        $this->modelId = $modelId;

        return $this;
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
    
    public function getModelId(): int
    {
        return $this->modelId;
    }
}