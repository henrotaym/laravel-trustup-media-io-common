<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\_Private\MediaRequestContract;

interface GetMediaRequestContract extends MediaRequestContract
{
    public function isUsingFirstOnly(): bool;

    /** @return static */
    public function firstOnly(bool $firstOnly = true): GetMediaRequestContract;
}