<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KLanding extends Model
{
    use HasFactory;

    protected $table = 'k_landings';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'pincode',
        'monthly_bill',
    ];
}
