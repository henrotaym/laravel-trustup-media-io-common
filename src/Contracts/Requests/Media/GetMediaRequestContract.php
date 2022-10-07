<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\_Private\MediaRequestContract;

interface GetMediaRequestContract extends MediaRequestContract
{
    public function isUsingFirstOnly(): bool;

    /** @return static */
    public function firstOnly(bool $firstOnly = true): GetMediaRequestContract;

    /** @return static */
    public function setExpectedWidth(?int $width): GetMediaRequestContract;

    /** @return static */
    public function setExpectedHeight(?int $height): GetMediaRequestContract;

    public function getExpectedWidth(): ?int;

    public function getExpectedHeight(): ?int;

    public function hasExpectedWidth(): bool;

    public function hasExpectedHeight(): bool;
}