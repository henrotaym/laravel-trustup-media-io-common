<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Models;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\UserContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models\UserTransformerContract;

class UserTransformer implements UserTransformerContract
{
    public function fromArray(array $attributes): UserContract
    {
        /** @var UserContract */
        $user = app()->make(UserContract::class);

        return $user
            ->setAvatar($attributes['avatar'])
            ->setEmail($attributes['email'])
            ->setFirstName($attributes['first_name'])
            ->setId($attributes['id'])
            ->setLastName($attributes['last_name'])
        ;
    }

    public function toArray(UserContract $user): array
    {
        return [
            'id' => $user->getId(),
            'avatar' => $user->getAvatar(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'email' => $user->getEmail(),
        ];
    }
}