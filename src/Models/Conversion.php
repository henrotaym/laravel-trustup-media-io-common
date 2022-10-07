<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Models;

use Henrotaym\LaravelTrustupMediaIoCommon\Models\Traits\HasDimensions;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\ConversionContract;

class Conversion implements ConversionContract
{
    use HasDimensions;

    protected string $url;
    protected string $name;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /** @return static */
    public function setName(string $name): ConversionContract
    {
        $this->name = $name;

        return $this;
    }

    /** @return static */
    public function setUrl(string $url): ConversionContract
    {
        $this->url = $url;

        return $this;
    }
}