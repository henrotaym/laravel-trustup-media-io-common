<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models;

interface UserContract
{
    public function getId(): int;

    /** @return static */
    public function setId(int $id): UserContract;
    
    public function getAvatar(): string;

    /** @return static */
    public function setAvatar(string $avatar): UserContract;

    public function getFirstName(): string;

    /** @return static */
    public function setFirstName(string $firstName): UserContract;

    public function getLastName(): string;
    
    /** @return static */
    public function setLastName(string $lastName): UserContract;

    /** @return static */
    public function setEmail(string $email): UserContract;

    public function getEmail(): int;
}