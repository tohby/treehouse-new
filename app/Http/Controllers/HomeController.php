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
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        return view('home', compact('portfolios', 'events'));
    }

    public function events(){
        
    }

    public function about(){
        return view('about');

    }

    public function contact(){
        return view('contact');
    }

    public function portfolio(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->get();
        return view('portfolio', compact('portfolios'));
    }

    public function portfolio_show($id){
        $portfolio = Portfolio::find($id);
        return view('portfolio_view', compact('portfolio'));
    }

}
