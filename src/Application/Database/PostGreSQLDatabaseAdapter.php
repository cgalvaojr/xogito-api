<?php

namespace Application\Database\Adapter;

class PostGreSQLDatabaseAdapter implements DatabaseAdapterInterface
{
    private static $instance;

    public function fetch(int $id): array
    {
        // TODO: Implement fetch() method.
    }

    public function fetchAll(): array
    {
        // TODO: Implement fetchAll() method.
    }

    public function update(array $dataSet, int $id): array
    {
        // TODO: Implement update() method.
    }

    public function create(array $dataSet): array
    {
        // TODO: Implement create() method.
    }

    public function connect(): void
    {
        // TODO: Implement connect() method.
    }

    public static function getInstance(): DatabaseAdapterInterface
    {
        if(self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getConfig(): array
    {
        // TODO: Implement getConfig() method.
    }
}