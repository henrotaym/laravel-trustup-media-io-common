<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\ShowTaskRequestContract;

interface ShowTaskRequestTransformerContract
{
    public function fromArray(array $attributes): ShowTaskRequestContract;

    public function toArray(ShowTaskRequestContract $request): array;
}