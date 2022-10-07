<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Models\Traits;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\_Private\HasDimensionsContract;

trait HasDimensions
{
    protected ?int $width;
    protected ?int $height;

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    /** @return static */
    public function setWidth(?int $width): HasDimensionsContract
    {
        $this->width = $width;

        return $this;
    }

    /** @return static */
    public function setHeight(?int $width): HasDimensionsContract
    {
        $this->height = $width;

        return $this;
    }
}