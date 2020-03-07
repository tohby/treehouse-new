<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Event;

class HomeController extends Controller
{
   

    /**
     * Show the application welcome.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carousels = Carousel::get();
        return view('home', compact('carousels'));
    }

    public function events(){

    }

    public function portfolio(){

    }
}
