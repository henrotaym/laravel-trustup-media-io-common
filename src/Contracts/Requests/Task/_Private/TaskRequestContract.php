<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\_Private;

interface TaskRequestContract
{
    public function hasAppKey(): bool;

    /**
     * True if user explicitely asked for not having app key.
     */
    public function isExplicitelyNotHavingAppKey(): bool;
    
    public function getAppKey(): ?string;
    
    public function hasModelType(): bool;

    public function getModelType(): string;

    public function hasModelId(): bool;
    
    public function getModelId(): int;
    
    /** @return static */
    public function setAppKey(?string $appKey = null): TaskRequestContract;
    
    /** @return static */
    public function setModelType(string $modelType): TaskRequestContract;
    
    /** @return static */
    public function setModelId(int $modelId): TaskRequestContract;
}