<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\UserContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\Traits\HasOptionContract;

interface TaskContract extends HasOptionContract
{
    public function getId(): ?int;

    /** @return static */
    public function setId(int $id): TaskContract;

    public function getUuid(): ?string;

    /** @return static */
    public function setUuid(string $uuid): TaskContract;

    public function getTitle(): string;

    /** @return static */
    public function setTitle(string $title): TaskContract;

    public function isDone(): bool;

    /** @return static */
    public function setIsDone(bool $isDone): TaskContract;

    /** @return static */
    public function setDoneAt(?Carbon $doneAt): TaskContract;

    /** @return static */
    public function getDoneAt(): ?Carbon;

    public function getDueDate(): ?Carbon;

    /** @return static */
    public function setDueDate(Carbon $dueDate): TaskContract;

    public function isHavingDueDateTime(): bool;

    /** @return static */
    public function setIsHavingDueDateTime(bool $hasDueDateTime): TaskContract;

    /** @return Collection<int, UserContract> */
    public function getUsers(): Collection;

    /** 
     * @param Collection<int, UserContract>
     * @return static
     */
    public function setUsers(Collection $users): TaskContract;
}