<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Models;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\UserContract;

class User implements UserContract
{
    protected int $id;
    protected string $avatar;
    protected string $firstName;
    protected string $lastName;
    protected string $email;

    public function getId(): int
    {
        return $this->id;
    }

    /** @return static */
    public function setId(int $id): UserContract
    {
        $this->id = $id;

        return $this;
    }
    
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /** @return static */
    public function setAvatar(string $avatar): UserContract
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /** @return static */
    public function setFirstName(string $firstName): UserContract
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
    
    /** @return static */
    public function setLastName(string $lastName): UserContract
    {
        $this->lastName = $lastName;

        return $this;
    }

    /** @return static */
    public function setEmail(string $email): UserContract
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): int
    {
        return $this->email;
    }
}