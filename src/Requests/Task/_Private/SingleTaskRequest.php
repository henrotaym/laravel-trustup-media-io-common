<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\_Private;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\TaskContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\_Private\SingleTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\_Private\TaskRequest;

abstract class SingleTaskRequest  extends TaskRequest implements SingleTaskRequestContract
{
    protected TaskContract $task;

    /** @return static */
    public function setTask(TaskContract $task): SingleTaskRequestContract
    {
        $this->task = $task;

        return $this;
    }

    public function getTask(): TaskContract
    {
        return $this->task;
    }
}