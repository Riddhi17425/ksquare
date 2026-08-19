<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsappLead extends Model
{
    protected $table = 'whatsapp_leads';

    protected $fillable = [
        'phone',
        'message'
    ];

    public $timestamps = false;
}
