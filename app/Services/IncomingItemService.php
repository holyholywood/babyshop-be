<?php

namespace App\Services;

use App\Repositories\IncomingItemRepository;


class IncomingItemService
{
    public function getIncomingItem($id = null)
    {
        return (new IncomingItemRepository())->fetchData($id);
    }

    public function StoreIncomingItem($data)
    {
        return (new IncomingItemRepository())->SaveOneIncomingItem(($data));
    }
}
