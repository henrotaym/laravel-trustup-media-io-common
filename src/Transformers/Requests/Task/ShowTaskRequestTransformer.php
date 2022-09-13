<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\ShowTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\ShowTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\Traits\IsTaskRequestTransformer;

class ShowTaskRequestTransformer implements ShowTaskRequestTransformerContract
{
    use IsTaskRequestTransformer;

    public function fromArray(array $attributes): ShowTaskRequestContract
    {
        /** @var ShowTaskRequestContract */
        $request = app()->make(ShowTaskRequestContract::class);

        return $this->setRequestCommonAttributes($request, $attributes);
    }

    public function toArray(ShowTaskRequestContract $request): array
    {
        return $this->setArrayCommonAttributes($request);
    }
}