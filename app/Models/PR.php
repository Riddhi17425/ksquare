<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PR extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pr';
    
    protected $fillable = [
        'name', 'front_image','description', 'url'
    ];
    
    protected $dates = ['deleted_at'];
}
