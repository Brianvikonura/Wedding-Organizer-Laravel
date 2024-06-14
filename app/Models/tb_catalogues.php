<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_catalogues extends Model
{
    use HasFactory;
    protected $table = 'tb_catalogues';
    protected $primaryKey = 'catalogue_id';
    protected $fillable = [
        'catalogue_id',
        'image',
        'package_name',
        'description',
        'price',
        'category_id',
        'user_id',
    ];
}
