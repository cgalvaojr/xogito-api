<?php

namespace Xogito\Infrastructure;

use Xogito\Application\UserApplicationInterface;

interface InfrastructureInterface
{
    public function index(int $userId = null): string;
    public function create(): int;
    public function update() : string;
    public function delete(): bool;
}