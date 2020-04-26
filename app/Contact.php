<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;
    
    protected $fillable = ['name', 'email', 'message', 'is_read'];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
