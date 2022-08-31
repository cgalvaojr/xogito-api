<?php

namespace Xogito\Application\User;

class UserApplication implements UserApplicationInterface
{
    public function getUserList(): array
    {
        return ['minhas bola' => 'fela da pota'];
        // TODO: Implement getUserList() method.
    }
}