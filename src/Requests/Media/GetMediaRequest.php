<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\_Private\MediaRequest;
use Illuminate\Support\Collection;

class GetMediaRequest extends MediaRequest implements GetMediaRequestContract
{
    protected bool $isFirstOnly = false;
    protected ?int $expectedHeight = null;
    protected ?int $expectedWidth = null;
    protected ?string $modelType = null;
    protected ?string $modelId = null;

    /**
     * Related uuids.
     * 
     * @return Collection<int, string>
     */
    protected Collection $uuids;

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

    public function getUuids(): Collection
    {
        return $this->uuids ?? 
            $this->uuids = collect();
    }

    public function isUsingUuids(): bool
    {
        return $this->getUuids()->isNotEmpty();
    }

    public function addUuid(string $uuid): GetMediaRequestContract
    {
        $this->getUuids()->push($uuid);

        return $this;
    }

    public function setUuids(Collection $uuids): GetMediaRequestContract
    {
        $this->uuids = $uuids;

        return $this;
    }

    public function addUuids(Collection $uuids): GetMediaRequestContract
    {
        $this->getUuids()->push(...$uuids);

        return $this;
    }

    public function getModelType(): ?string
    {
        return $this->modelType;
    }

    public function getModelId(): ?string
    {
        return $this->modelId;
    }
}