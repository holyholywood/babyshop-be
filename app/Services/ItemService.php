<?php

namespace App\Services;

use App\Repositories\ItemRepository;

class ItemService
{
    public function getItem($id = null)
    {
        return (new ItemRepository())->fetchData($id);
    }

    public function storeItem($data)
    {
        return (new ItemRepository())->SaveOneItem($data);
    }


    public function updateItem($id, $data)
    {

        return (new ItemRepository())->editOneItem($id, $data);
    }

    public function deleteItem($id)
    {
        return (new ItemRepository())->deleteOneItem($id);
    }
}
