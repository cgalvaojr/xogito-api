<?php

declare(strict_types=1);
namespace Domain\User;

interface UserRepositoryInterface
{
    public function create(User $user): User;
    public function update(User $user): User;
    public function fetch(int $userId): User;
    public function fetchAll(): User;
}