<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'image', 'address', 'ticket_fee', 'start_at', 'end_at' ];
}
