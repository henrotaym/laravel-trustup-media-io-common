<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;

interface GetMediaRequestTransformerContract
{
    public function fromArray(array $attributes): GetMediaRequestContract;

    public function toArray(GetMediaRequestContract $request): array;
}