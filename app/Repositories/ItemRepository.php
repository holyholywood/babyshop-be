<?php

namespace App\Repositories;

use App\AppData;
use App\Models\Item;

class ItemRepository
{
    public function fetchData($id = null)
    {
        if ($id === null) {
            return Item::all();
        } else {
            return Item::where('id', $id)->first();
        }
    }

    public function fetchAllDatawithPagination(array $columns = ['*'], int $perPage = AppData::DEFAULT_PER_PAGE)
    {
        return Item::select($columns)->paginate($perPage);
    }

    public function SaveOneItem($data)
    {

        return Item::create($data);
    }

    public function editOneItem($id, $updateData)
    {
        return Item::where('id', $id)->update($updateData);
    }

    public function deleteOneItem($id)
    {
        return Item::destroy($id);
    }

    public function addItemQuantity($id, $amount)
    {

        Item::where('id', $id)->increment('quantity', $amount);
    }
}
