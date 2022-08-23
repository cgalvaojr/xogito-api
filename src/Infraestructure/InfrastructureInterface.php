<?php

namespace Xogito\Infrastructure;

interface InfrastructureInterface
{
    public function create(): int;
    public function retrieve(int $userId = null): string;
    public function update() : string;
    public function delete(): bool;
}