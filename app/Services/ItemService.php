<?php

namespace App\Services;

use App\Repositories\ItemRepository;

class ItemService
{
    public function getAllData()
    {
        return (new ItemRepository())->fetchAllData();
    }
}
