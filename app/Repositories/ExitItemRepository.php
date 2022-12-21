<?php

namespace App\Repositories;

use App\AppData;
use App\Models\ExitItem;

class ExitItemRepository
{
    public function fetchData($id = null)
    {
        if ($id === null) {
            return ExitItem::all();
        } else {
            return ExitItem::where('id', $id)->first();
        }
    }

    public function fetchAllDatawithPagination(array $columns = ['*'], int $perPage = AppData::DEFAULT_PER_PAGE)
    {
        return ExitItem::select($columns)->paginate($perPage);
    }

    public function SaveOneExitItem($data)
    {

        return ExitItem::create($data);
    }
}
