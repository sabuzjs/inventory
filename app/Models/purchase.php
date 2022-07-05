<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'customers_id',
        'product_id',
        'inventory_id',
        'qtny',
        'type',
    ];
}
