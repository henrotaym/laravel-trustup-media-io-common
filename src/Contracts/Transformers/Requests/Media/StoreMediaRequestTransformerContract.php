<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\StoreMediaRequestContract;

interface StoreMediaRequestTransformerContract
{
    public function fromArray(array $attributes): StoreMediaRequestContract;

    public function toArray(StoreMediaRequestContract $request): array;
}