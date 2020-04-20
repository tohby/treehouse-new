<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'message', 'is_read'];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
