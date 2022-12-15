<?php

namespace App\Repositories;

use App\AppData;
use App\Models\Item;

class ItemRepository
{
    public function fetchAllData()
    {
        return Item::all();
    }

    public function fetchAllDatawithPagination(array $columns = ['*'], int $perPage = AppData::DEFAULT_PER_PAGE)
    {
        return Item::select($columns)->paginate($perPage);
    }
}
