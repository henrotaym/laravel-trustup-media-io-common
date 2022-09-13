<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\GetMediaRequestTransformerContract;

class GetMediaRequestTransformer implements GetMediaRequestTransformerContract
{
    public function fromArray(array $attributes): GetMediaRequestContract
    {
        /** @var GetMediaRequestContract */
        $request = app()->make(GetMediaRequestContract::class);

        return $request->setAppKey($attributes['app_key'] ?? null)
            ->setCollection($attributes['collection'] ?? null)
            ->setModelId($attributes['model_id'])
            ->setModelType($attributes['model_type'])
            ->firstOnly($attributes['first_only'] ?? false);
    }

    public function toArray(GetMediaRequestContract $request): array
    {
        return [
            'model_id' => $request->getModelId(),
            'model_type' => $request->getModelType(),
            'app_key' => $request->getAppKey(),
            'collection' => $request->getCollection(),
            'first_only' => $request->isUsingFirstOnly()
        ];
    }
}