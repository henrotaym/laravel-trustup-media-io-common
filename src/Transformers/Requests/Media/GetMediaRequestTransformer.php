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

        if ($modelId = $attributes['model_id'] ?? null)
            $request->setModelId($modelId);

        if ($modelType = $attributes['model_type'] ?? null)
            $request->setModelType($modelType);

        return $request->setAppKey($attributes['app_key'] ?? null)
            ->setCollection($attributes['collection'] ?? null)
            ->firstOnly($attributes['first_only'] ?? false)
            ->setExpectedWidth($attributes['expected_width'] ?? null)
            ->setExpectedHeight($attributes['expected_height'] ?? null)
            ->setUuids(collect($attributes['uuids'] ?? null))
        ;
    }

    public function toArray(GetMediaRequestContract $request): array
    {
        return [
            'model_id' => $request->getModelId(),
            'model_type' => $request->getModelType(),
            'app_key' => $request->getAppKey(),
            'collection' => $request->getCollection(),
            'first_only' => $request->isUsingFirstOnly(),
            'expected_width' => $request->getExpectedWidth(),
            'expected_height' => $request->getExpectedHeight(),
            'uuids' => $request->getUuids()->all()
        ];
    }
}