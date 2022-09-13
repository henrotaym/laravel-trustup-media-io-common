<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\StoreTaskRequestContract;

interface StoreTaskRequestTransformerContract
{
    public function fromArray(array $attributes): StoreTaskRequestContract;

    public function toArray(StoreTaskRequestContract $request): array;
}