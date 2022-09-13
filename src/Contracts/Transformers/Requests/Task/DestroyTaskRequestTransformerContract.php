<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\DestroyTaskRequestContract;

interface DestroyTaskRequestTransformerContract
{
    public function fromArray(array $attributes): DestroyTaskRequestContract;

    public function toArray(DestroyTaskRequestContract $request): array;
}