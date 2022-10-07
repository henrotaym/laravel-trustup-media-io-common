<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\_Private\HasDimensionsContract;

interface ConversionContract extends HasDimensionsContract
{
    public function getUrl(): string;

    public function getName(): string;

    /** @return static */
    public function setName(string $name): ConversionContract;

    /** @return static */
    public function setUrl(string $url): ConversionContract;
}