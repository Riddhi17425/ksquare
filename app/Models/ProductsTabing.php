<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsTabing extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products_tabing';
    
    protected $fillable = [
        'name', 'image', 'description', 'product_id'
    ];

    protected $dates = ['deleted_at'];
}

