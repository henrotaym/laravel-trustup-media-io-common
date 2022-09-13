<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\DestroyTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\DestroyTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\_Private\SingleTaskRequestTransformer;

class DestroyTaskRequestTransformer extends SingleTaskRequestTransformer implements DestroyTaskRequestTransformerContract
{
    public function fromArray(array $attributes): DestroyTaskRequestContract
    {
        /** @var DestroyTaskRequestContract */
        $request = app()->make(DestroyTaskRequestContract::class);
        
        return $this->setRequestFromAttributes($request, $attributes);
    }

    public function toArray(DestroyTaskRequestContract $request): array
    {
        return $this->toArrayFromRequest($request);
    }
}