<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\StoreTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\StoreTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\_Private\SingleTaskRequestTransformer;

class StoreTaskRequestTransformer extends SingleTaskRequestTransformer implements StoreTaskRequestTransformerContract
{
    public function fromArray(array $attributes): StoreTaskRequestContract
    {
        /** @var StoreTaskRequestContract */
        $request = app()->make(StoreTaskRequestContract::class);
        
        return $this->setRequestFromAttributes($request, $attributes);
    }

    public function toArray(StoreTaskRequestContract $request): array
    {
        return $this->toArrayFromRequest($request);
    }
}