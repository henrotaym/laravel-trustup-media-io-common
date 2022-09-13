<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\Traits;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\_Private\TaskRequestContract;

trait IsTaskRequestTransformer
{
    public function setRequestCommonAttributes(TaskRequestContract $request, array $attributes): TaskRequestContract
    {
        return $request->setAppKey($attributes['app_key'] ?? null)
            ->setModelId($attributes['model_id'])
            ->setModelType($attributes['model_type']);
    }

    public function setArrayCommonAttributes(TaskRequestContract $request): array
    {
        return [
            'app_key' => $request->getAppKey(),
            'model_id' => $request->getModelId(),
            'model_type' => $request->getModelType()
        ];
    }
}