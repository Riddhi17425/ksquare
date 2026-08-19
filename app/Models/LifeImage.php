<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LifeImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'life_images';
    
    protected $fillable = [
        'title', 'image', 'alt_tag'
    ];
    
    protected $dates = ['deleted_at'];
}

