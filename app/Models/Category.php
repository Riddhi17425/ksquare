<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'seo_title',
        'seo_desc',
        'seourl',
        'deleted_at',
    ];
    
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id'); // This defines the one-to-many relationship
    }
}
