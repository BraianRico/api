<?php

namespace App\services\Implementation;

use App\Models\User;
use App\Services\Interface\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class UserServiceImpl implements UserServiceInterface
{
    private $model;

    function __construct()
    {
        $this->model = new User();
    }
    /**
     * Listar usuarios
     *
     */
    function getUser()
    {
        return $this->model->get();
    }
    function getUserById(int $id)
    {
    }

    /**
     * Crea un nuevo usuario en el sistema
     *
     */
    function postUser(array $user)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->create($user);
    }

    function putUser(array $user, int $id)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->where('id', $id)
            ->first()
            ->fill($user)
            ->save();
    }
    function delUser(int $id)
    {
    }
    function restoreUser(int $id)
    {
    }
}
