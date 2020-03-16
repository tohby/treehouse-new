<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['title', 'description'];

    public function images(){
        return $this->hasMany('App\PortfolioImages');
    }
}
