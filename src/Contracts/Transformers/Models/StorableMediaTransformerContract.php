<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;

interface StorableMediaTransformerContract
{
    public function fromArray(array $attributes): ?StorableMediaContract;

    public function fromResource($resource): ?StorableMediaContract;

    public function toArray(StorableMediaContract $media): array;
}