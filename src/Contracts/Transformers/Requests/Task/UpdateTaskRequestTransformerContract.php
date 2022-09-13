<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\UpdateTaskRequestContract;

interface UpdateTaskRequestTransformerContract
{
    public function fromArray(array $attributes): UpdateTaskRequestContract;

    public function toArray(UpdateTaskRequestContract $request): array;
}