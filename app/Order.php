<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    protected $guarded = [];

    public function product(){
        return $this->belongsTo('App\Portfolio', 'portfolio_id');
    }
}
