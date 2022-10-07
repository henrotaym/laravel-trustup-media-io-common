<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\_Private;

interface HasDimensionsContract
{
    public function getWidth(): ?int;

    public function getHeight(): ?int;

    /** @return static */
    public function setWidth(?int $width): HasDimensionsContract;

    /** @return static */
    public function setHeight(?int $width): HasDimensionsContract;
}