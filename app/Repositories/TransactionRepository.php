<?php

namespace App\Repositories;

use App\AppData;
use App\Models\Transaction;

class TransactionRepository
{
    public function fetchData($id = null)
    {
        if ($id === null) {
            return Transaction::all();
        } else {
            return Transaction::where('id', $id)->first();
        }
    }

    public function fetchAllDatawithPagination(array $columns = ['*'], int $perPage = AppData::DEFAULT_PER_PAGE)
    {
        return Transaction::select($columns)->paginate($perPage);
    }

    public function SaveOneTransaction($data)
    {
        return Transaction::create($data);
    }
}
