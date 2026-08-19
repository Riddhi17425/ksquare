<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuryagharStore extends Model
{
    use HasFactory;
    
    protected $table = 'suryagharStore';
    
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'message',
    ];
}
