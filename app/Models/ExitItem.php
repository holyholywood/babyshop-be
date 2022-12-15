<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExitItem extends Model
{
    use HasFactory;

    public $table = "exit_items";

    protected $fillable = [
        'transactions_id',
        'items_id',
        'qty'
    ];
}
