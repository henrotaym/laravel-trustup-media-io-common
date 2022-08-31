<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Models\StorableMediaTransformer;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\StoreMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\StorableMediaTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\StoreMediaRequestTransformerContract;

class StoreMediaRequestTransformer implements StoreMediaRequestTransformerContract
{
    protected StorableMediaTransformerContract $storableMediaTransformer;
    
    public function __construct(StorableMediaTransformer $storableMediaTransformer)
    {
        $this->storableMediaTransformer = $storableMediaTransformer;
    }

    public function fromArray(array $attributes): StoreMediaRequestContract
    {
        /** @var StoreMediaRequestContract */
        $request = app()->make(StoreMediaRequestContract::class);

        return $request->setAppKey($attributes['app_key'] ?? null)
            ->setCollection($attributes['collection'] ?? null)
            ->setModelId($attributes['model_id'])
            ->setModelType($attributes['model_type'])
            ->addMediaCollection(
                collect($attributes['files'])->map(fn (array $rawFile) => 
                    $this->storableMediaTransformer->fromArray($rawFile)
                )->filter()
            )->useQueue($attributes['use_queue']);
    }

    public function toArray(StoreMediaRequestContract $request): array
    {
        return [
            'model_id' => $request->getModelId(),
            'model_type' => $request->getModelType(),
            'app_key' => $request->getAppKey(),
            'collection' => $request->getCollection(),
            'files' => $request->getMedia()->map(fn (StorableMediaContract $media) =>
                $this->storableMediaTransformer->toArray($media)
            ),
            'use_queue' => $request->isUsingQueue()
        ];
    }
}