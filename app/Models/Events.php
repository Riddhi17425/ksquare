<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Events extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'events';

    protected $fillable = [
        'name',
        'activity',
        'description',
        'front_image'
    ];

    protected $casts = [
        'front_image' => 'array',
    ];

    protected $dates = ['deleted_at'];
}
