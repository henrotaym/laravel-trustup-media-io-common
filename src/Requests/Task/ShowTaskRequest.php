<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\ShowTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\_Private\TaskRequest;

class ShowTaskRequest extends TaskRequest implements ShowTaskRequestContract
{
    protected ?string $uuid = null;

    /** @return static */
    public function setUuid(string $uuid): ShowTaskRequestContract
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function hasUuid(): bool
    {
        return !!$this->uuid;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}