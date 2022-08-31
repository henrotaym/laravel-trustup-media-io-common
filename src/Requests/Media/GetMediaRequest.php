<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\_Private\MediaRequest;

class GetMediaRequest extends MediaRequest implements GetMediaRequestContract
{
    protected bool $isFirstOnly = false;

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
}