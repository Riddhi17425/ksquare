<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teamslife extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'teamslife';
    
    protected $fillable = [
        'name', 'image','front_image','description', 'activity'
    ];
    
    protected $casts = [
        'image' => 'array',
    ];
    protected $dates = ['deleted_at'];
}

