<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LifeVideo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'life_videos';

    protected $fillable = [
        'title', 'videolink', 'video'
    ];

    protected $dates = ['deleted_at'];
}
