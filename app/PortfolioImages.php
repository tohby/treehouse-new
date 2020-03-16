<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioImages extends Model
{
    protected $fillable = ['image', 'portfolio_id'];

    public function portfolio(){
        return $this->belongsTo('App\Portfolio');
    }
}
