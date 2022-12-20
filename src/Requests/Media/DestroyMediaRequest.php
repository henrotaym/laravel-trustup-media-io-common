<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\DestroyMediaRequestContract;
use Illuminate\Support\Collection;
use Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\_Private\MediaRequest;

class DestroyMediaRequest extends MediaRequest implements DestroyMediaRequestContract
{
    /** @var Collection<int, string> */
    protected Collection $uuids;

    protected string $modelType;
    protected string $modelId;

    /** @return static */
    public function addUuid(string $uuid): DestroyMediaRequestContract
    {
        $this->getUuids()->push($uuid);

        return $this;
    }
    
    /** @return static */
    public function addUuidCollection(Collection $uuidCollection): DestroyMediaRequestContract
    {
        $this->getUuids()->push(...$uuidCollection);

        return $this;
    }

    /** @return Collection<int, string> */
    public function getUuids(): Collection
    {
        return $this->uuids ??
            $this->uuids = collect();
    }

    public function hasUuids(): bool
    {
        return $this->getUuids()->isNotEmpty();
    }

    public function getModelType(): string
    {
        return $this->modelType;
    }

    public function getModelId(): string
    {
        return $this->modelId;
    }
}