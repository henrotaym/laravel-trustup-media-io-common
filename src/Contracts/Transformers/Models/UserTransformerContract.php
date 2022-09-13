<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\UserContract;

interface UserTransformerContract
{
    public function fromArray(array $attributes): UserContract;

    public function toArray(UserContract $user): array;
}