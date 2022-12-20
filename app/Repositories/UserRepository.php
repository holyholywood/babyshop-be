<?php

namespace App\Repositories;

use App\AppData;
use App\Models\User;

class UserRepository
{
    public function fetchData($id = null)
    {
        if ($id === null) {
            return User::all();
        } else {
            return User::where('id', $id)->first();
        }
    }

    public function fetchAllDatawithPagination(array $columns = ['*'], int $perPage = AppData::DEFAULT_PER_PAGE)
    {
        return User::select($columns)->paginate($perPage);
    }

    public function SaveOneUser($data)
    {
        return User::create($data);
    }

    public function editOneUser($id, $data)
    {
        return User::where('id', $id)->update($data);
    }

    public function deleteOneUser($id)
    {
        return User::destroy($id);
    }
}
