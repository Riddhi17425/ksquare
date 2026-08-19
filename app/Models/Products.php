<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'category_id',
        'seo_title',
        'seo_desc',
        'seourl',
        'deleted_at',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // Make sure 'category_id' is the foreign key in your Products table
    }
}
