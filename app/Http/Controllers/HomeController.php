<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Portfolio;
use App\Event;
use App\Order;

class HomeController extends Controller
{
   

    /**
     * Show the application welcome.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('created_at', 'desc')->take(8)->get();
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        return view('home', compact('portfolios', 'events'));
    }

    public function events(){
        $events = Event::orderBy('created_at', 'desc')->paginate(10);
        return view('events', compact('events'));
    }

    public function about(){
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->take(4)->get();
        return view('about', compact('events', 'portfolios'));

    }

    public function architect(){
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->take(4)->get();
        return view('about1', compact('events', 'portfolios'));
    }

    public function artist(){
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->take(4)->get();
        return view('about2', compact('events', 'portfolios'));
    }

    public function painter(){
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->take(4)->get();
        return view('about4', compact('events', 'portfolios'));
    }

    public function sculptor(){
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->take(4)->get();
        return view('about3', compact('events', 'portfolios'));
    }

    public function contact(){
        return view('contact');
    }

    public function portfolio(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->simplePaginate(12);
        return view('portfolio', compact('portfolios'));
    }
    

    public function portfolio_show($id){
        $portfolio = Portfolio::find($id);
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        $portfolios = Portfolio::whereNotIn('id', $portfolio)->orderBy('created_at', 'desc')->take(4)->get();
        return view('portfolio_view', compact('portfolio', 'events', 'portfolios'));
    }

    public function order($id){
        $portfolio = Portfolio::find($id);
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        $portfolios = Portfolio::whereNotIn('id', $portfolio)->orderBy('created_at', 'desc')->take(4)->get();
        return view('order', compact('portfolio', 'portfolios', 'events'));
    }

}
