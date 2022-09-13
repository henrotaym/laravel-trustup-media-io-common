<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\TaskContract;

interface TaskTransformerContract
{
    public function fromArray(array $attributes): TaskContract;

    public function toArray(TaskContract $task): array;
}