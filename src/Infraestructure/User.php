<?php
namespace Xogito\Infrastructure;

class User implements InfrastructureInterface
{

    public function create(): int
    {
        // TODO: Implement create() method.
    }

    public function retrieve(int $userId = null): string
    {
        $userList = [
          [
              'name' => 'User',
              'lastName' => 'Test',
              'profile' => 'admin',
          ],
            [
                'name' => 'User2',
                'lastName' => 'Test',
                'profile' => 'user',
            ]
        ];
        return json_encode($userList, JSON_PRETTY_PRINT);

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