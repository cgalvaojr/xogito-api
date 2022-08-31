<?php

namespace Domain\User;

class User implements UserRepositoryInterface
{
    public int $id;
    public string $name;
    public string $lastName;
    public string $password;
    public string $profile;

    public function create(User $user): User
    {
        // TODO: Implement create() method.
    }

    public function update(User $user): User
    {
        // TODO: Implement update() method.
    }

    public function fetch(int $userId): User
    {
        // TODO: Implement fetch() method.
    }

    public function fetchAll(): User
    {
        // TODO: Implement fetchAll() method.
    }
}