<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog'; // Explicitly define the table name

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'publish_date',
        'is_publish',
        'is_delete',
        'image',
        'url',
        'short_description',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_image',
        'status',
        'cta_image',
        'conclusion',
    ]; 
}
