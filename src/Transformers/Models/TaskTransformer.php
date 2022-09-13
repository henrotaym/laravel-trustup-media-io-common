<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Models;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\TaskContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\UserContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models\TaskTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models\UserTransformerContract;

class TaskTransformer implements TaskTransformerContract
{
    protected UserTransformerContract $userTransformer;

    public function __construct(
        UserTransformerContract $userTransformer
    ) {
        $this->userTransformer = $userTransformer;
    }

    public function fromArray(array $attributes): TaskContract
    {
        /** @var TaskContract */
        $task = app()->make(TaskContract::class);

        if ($attributes['id']):
            $task->setId($attributes['id']);
        endif;

        if ($attributes['uuid']):
            $task->setUuid($attributes['uuid']);
        endif;

        return $task->setDueDate($attributes['due_date'])
            ->setTitle($attributes['title'])
            ->setDoneAt($attributes['done_at'] ?? null)
            ->setIsHavingDueDateTime($attributes['is_having_due_date_time'] ?? null)
            ->setOptions($attributes['options'] ?? [])
            ->setUsers(collect($attributes['users'] ?? [])->map(fn(array $rawUser) => 
                $this->userTransformer->fromArray($rawUser)
            ));
    }

    public function toArray(TaskContract $task): array
    {
        return [
            'id' => $task->getId(),
            'uuid' => $task->getUuid(),
            'title' => $task->getTitle(),
            'is_done' => $task->isDone(),
            'done_at' => $task->getDoneAt(),
            'is_having_due_date_time' => $task->isHavingDueDateTime(),
            'users' => $task->getUsers()->map(fn (UserContract $user) =>
                $this->userTransformer->toArray($user)
            ),
        ];
    }
}