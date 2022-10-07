<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\ConversionContract;

interface ConversionTransformerContract
{
    public function fromArray(array $attributes): ConversionContract;

    public function toArray(ConversionContract $conversion): array;
}