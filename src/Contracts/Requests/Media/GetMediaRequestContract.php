<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media;

use Illuminate\Support\Collection;
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

    /**
     * Telling if this request is using uuids.
     * 
     * @return bool
     */
    public function isUsingUuids(): bool;

    /**
     * Getting related uuids.
     * 
     * @return Collection<int, string>
     */
    public function getUuids(): Collection;

    /**
     * Adding a uuid to request.
     * 
     * @param string $uuid
     * @return static
     */
    public function addUuid(string $uuid): GetMediaRequestContract;

    /**
     * Setting related uuids.
     * 
     * @param Collection<int, string> $uuids
     * @return static
     */
    public function setUuids(Collection $uuids): GetMediaRequestContract;

    /**
     * Adding given uuids to request.
     * 
     * @param Collection<int, string> $uuids
     * @return static
     */
    public function addUuids(Collection $uuids): GetMediaRequestContract;

    public function getModelType(): ?string;

    public function getModelId(): ?string;
}