<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\DestroyMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\DestroyMediaRequestTransformerContract;

class DestroyMediaRequestTransformer implements DestroyMediaRequestTransformerContract
{
    public function fromArray(array $attributes): DestroyMediaRequestContract
    {
        /** @var DestroyMediaRequestContract */
        $request = app()->make(DestroyMediaRequestContract::class);

        return $request->setAppKey($attributes['app_key'] ?? null)
            ->setCollection($attributes['collection'] ?? null)
            ->setModelId($attributes['model_id'])
            ->setModelType($attributes['model_type'])
            ->addUuidCollection(collect($attributes['uuids'] ?? []));
    }

    public function toArray(DestroyMediaRequestContract $request): array
    {
        return [
            'model_id' => $request->getModelId(),
            'model_type' => $request->getModelType(),
            'app_key' => $request->getAppKey(),
            'collection' => $request->getCollection(),
            'uuids' => $request->getUuids()->all()
        ];
    }
}