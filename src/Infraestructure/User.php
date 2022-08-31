<?php

namespace Xogito\Infrastructure;

use Xogito\Application\User\UserApplication;

class User implements InfrastructureInterface
{
    private $application;

//    public function __construct(UserApplicationInterface $application)
    //@todo needed to find way of use dependency injection here, unfortunately the current router lib doesn't it.
    public function __construct()
    {
        $this->application = new UserApplication();
    }

    function index(int $userId = null): string
    {
        $userList = $this->application->getUserList();
        return json_encode($userList, JSON_PRETTY_PRINT);
    }

    public function create(): int
    {
        // TODO: Implement create() method.
    }

    public function update(): string
    {
        // TODO: Implement update() method.
    }

    public function delete(): bool
    {
        // TODO: Implement delete() method.
    }
}