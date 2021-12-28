<?php

namespace App\service\ìmplementation;

use App\Models\User;
use App\Services\Interface\UserServiceInterface;

class UserServiceImpl implements UserServiceInterface
{
    private $model;

    function __construct()
    {
        $this->model = new User();
    }

    function getUser()
    {
    }
    function getUserById(int $id)
    {
    }
    function postUser(array $user, int $id)
    {
    }
    function putUser(array $user, int $id)
    {
    }
    function delUser(int $id)
    {
    }
    function restoreUser(int $id)
    {
    }
}
