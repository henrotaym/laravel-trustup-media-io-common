<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\DestroyMediaRequestContract;

interface DestroyMediaRequestTransformerContract
{
    public function fromArray(array $attributes): DestroyMediaRequestContract;

    public function toArray(DestroyMediaRequestContract $request): array;
}