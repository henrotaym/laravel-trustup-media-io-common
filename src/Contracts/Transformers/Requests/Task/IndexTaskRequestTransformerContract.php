<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\IndexTaskRequestContract;

interface IndexTaskRequestTransformerContract
{
    public function fromArray(array $attributes): IndexTaskRequestContract;

    public function toArray(IndexTaskRequestContract $request): array;
}