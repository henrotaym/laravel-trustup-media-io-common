<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\_Private;

interface HasDimensionsContract
{
    public function getWitdh(): ?int;

    public function getHeight(): ?int;

    /** @return static */
    public function setWitdh(?int $width): HasDimensionsContract;

    /** @return static */
    public function setHeight(?int $width): HasDimensionsContract;
}