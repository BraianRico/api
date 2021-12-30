<?php

namespace App\Http\Controllers;

use App\services\Implementation\UserServiceImpl;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *
     * @var UserServiceImpl
     */
    private $userService;

    /**
     *
     * @var Request
     */
    private $request;

    public function __construct(UserServiceImpl $userService, Request $request)
    {
        $this->userService = $userService;
        $this->request = $request;
    }

    function createUser()
    {
        $response = response("", 201);
        $this->userService->postUser($this->request->all());
        return $response;
    }
}
