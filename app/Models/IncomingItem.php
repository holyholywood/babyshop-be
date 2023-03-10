<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingItem extends Model
{
    use HasFactory;

    public $table = "incoming_items";


    protected $fillable = [
        'items_id',
        'qty'
    ];
}
