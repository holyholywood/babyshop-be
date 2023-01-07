<?php

namespace App\Repositories;

use App\AppData;
use App\Models\IncomingItem;

class IncomingItemRepository
{
    public function fetchData($id = null)
    {
        if ($id === null) {
            return IncomingItem::all();
        } else {
            return IncomingItem::where('id', $id)->first();
        }
    }

    public function fetchAllDatawithPagination(array $columns = ['*'], int $perPage = AppData::DEFAULT_PER_PAGE)
    {
        return IncomingItem::select($columns)->paginate($perPage);
    }

    public function SaveOneIncomingItem($data)
    {

        (new ItemRepository())->addItemQuantity($data['items_id'], $data['qty']);

        return IncomingItem::create($data);
    }
}
