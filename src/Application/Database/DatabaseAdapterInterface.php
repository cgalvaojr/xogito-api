<?php
declare(strict_types=1);

namespace Application\Database\Adapter;

interface DatabaseAdapterInterface
{
    public function fetch(int $id): array;
    public function fetchAll(): array;
    public function update(array $dataSet, int $id): array;
    public function create(array $dataSet): array;
    public function connect(): void;
    public static function getInstance(): DatabaseAdapterInterface;
    public function getConfig(): array;

}