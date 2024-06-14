<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_order extends Model
{
    use HasFactory;
    protected $table = 'tb_order';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'order_id',
        'catalogue_id',
        'wedding_date',
        'status',
        'user_id'
    ];
}
