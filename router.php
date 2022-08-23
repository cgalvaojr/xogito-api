<?php

use Pecee\SimpleRouter\SimpleRouter;
use Xogito\Infrastructure\User;

SimpleRouter::get('/user/{id?}', [User::class, 'retrieve']);