<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Portfolio;
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
        // $carousels = Carousel::get();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->take(8)->get();
        return view('home', compact('portfolios'));
    }

    public function events(){

    }

    public function portfolio(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->get();
        return view('portfolio');
    }
}
