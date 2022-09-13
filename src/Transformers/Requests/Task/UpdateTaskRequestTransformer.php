<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\UpdateTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\UpdateTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\_Private\SingleTaskRequestTransformer;

class UpdateTaskRequestTransformer extends SingleTaskRequestTransformer implements UpdateTaskRequestTransformerContract
{
    public function fromArray(array $attributes): UpdateTaskRequestContract
    {
        /** @var UpdateTaskRequestContract */
        $request = app()->make(UpdateTaskRequestContract::class);
        
        return $this->setRequestFromAttributes($request, $attributes);
    }

    public function toArray(UpdateTaskRequestContract $request): array
    {
        return $this->toArrayFromRequest($request);
    }
}