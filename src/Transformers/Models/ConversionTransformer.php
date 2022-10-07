<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Models;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\ConversionContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\ConversionTransformerContract;

class ConversionTransformer implements ConversionTransformerContract
{
    public function fromArray(array $attributes): ConversionContract
    {
        /** @var ConversionContract */
        $conversion = app()->make(ConversionContract::class);

        return $conversion->setUrl($attributes['url'])
            ->setName($attributes['name'])
            ->setWitdh($attributes['width'] ?? null)
            ->setHeight($attributes['height'] ?? null);
    }

    public function toArray(ConversionContract $conversion): array
    {
        return [
            'url' => $conversion->getUrl(),
            'name' => $conversion->getName(),
            'width' => $conversion->getWitdh(),
            "height" => $conversion->getHeight()
        ];
    }
}