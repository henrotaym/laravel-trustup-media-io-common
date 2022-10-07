<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\_Private\MediaRequest;

class GetMediaRequest extends MediaRequest implements GetMediaRequestContract
{
    protected bool $isFirstOnly = false;
    protected ?int $expectedHeight = null;
    protected ?int $expectedWidth = null;

    public function isUsingFirstOnly(): bool
    {
        return $this->isFirstOnly;
    }

    /** @return static */
    public function firstOnly(bool $firstOnly = true): GetMediaRequestContract
    {
        $this->isFirstOnly = $firstOnly;

        return $this;
    }

    /** @return static */
    public function setExpectedWidth(?int $width): GetMediaRequestContract
    {
        $this->expectedWidth = $width;
        return $this;
    }

    /** @return static */
    public function setExpectedHeight(?int $height): GetMediaRequestContract
    {
        $this->expectedHeight = $height;
        return $this;
    }

    public function getExpectedWidth(): ?int
    {
        return $this->expectedWidth;
    }

    public function getExpectedHeight(): ?int
    {
        return $this->expectedHeight;
    }

    public function hasExpectedWidth(): bool
    {
        return !!$this->expectedWidth;
    }

    public function hasExpectedHeight(): bool
    {
        return !!$this->expectedHeight;
    }
}