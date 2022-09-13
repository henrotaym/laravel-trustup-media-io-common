<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\_Private;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\TaskContract;

interface SingleTaskRequestContract extends TaskRequestContract
{
    /** @return static */
    public function setTask(TaskContract $task): SingleTaskRequestContract;

    public function getTask(): TaskContract;
}