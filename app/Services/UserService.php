<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    public function getUser($id = null)
    {
        return (new UserRepository())->fetchData($id);
    }

    public function storeUser($data)
    {
        return (new UserRepository())->SaveOneUser($data);
    }

    public function updateUser($id, $data)
    {

        return (new UserRepository())->editOneUser($id, $data);
    }

    public function deleteUser($id)
    {
        return (new UserRepository())->deleteOneUser($id);
    }
}
