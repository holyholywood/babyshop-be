<?php

namespace App\Services;

use App\Repositories\ExitItemRepository;
use App\Repositories\TransactionRepository;
use Exception;
use Illuminate\Support\Facades\DB;

class TransactionService
{
    public function getTransaction($id = null)
    {
        return (new TransactionRepository())->fetchData($id);
    }

    public function storeTransaction($data)
    {
        $itemData = $data['items'];

        unset($data['items']);



        try {
            DB::beginTransaction();

            $transactionResult =  (new TransactionRepository())->SaveOneTransaction($data);


            for ($i = 0; $i < count($itemData); $i++) {
                $itemData[$i]['transactions_id'] = $transactionResult->id;
            }
            (new ExitItemRepository)->SaveManyExitItem($itemData);

            DB::commit();
        } catch (Exception $err) {

            DB::rollBack();
            return $err->getMessage();
            // return false;
        }

        return  $transactionResult;
    }
}
