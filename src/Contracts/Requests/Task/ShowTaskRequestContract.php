<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\_Private\TaskRequestContract;

interface ShowTaskRequestContract extends TaskRequestContract
{
    /** @return static */
    public function setUuid(string $uuid): ShowTaskRequestContract;

    public function hasUuid(): bool;
    
    public function getUuid(): ?string;
}