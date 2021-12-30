<?php

namespace App\Services\Interface;

interface UserServiceInterface
{


    /**
     *
     * @return void
     */
    function getUser();

    /**
     *
     * @param integer $id
     * @return void
     */
    function getUserById(int $id);

    /**
     *
     * @param array $user
     * @param integer $id
     * @return void
     */
    function postUser(array $user);

    /**
     *
     * @param array $user
     * @param integer $id
     * @return void
     */
    function putUser(array $user, int $id);

    /**
     *
     * @param integer $id
     * @return boolean
     */
    function delUser(int $id);

    /**
     *
     * @param integer $id
     * @return boolean
     */
    function restoreUser(int $id);
}
