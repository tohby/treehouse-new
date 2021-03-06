<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Event;
use App\Order;
use App\Portfolio;

class DashboardController extends Controller
{
    public function index(){
        $portfolio = Portfolio::get();
        $messages = Contact::where('is_read', 0)->orderBy('is_read', 'asc')->orderBy('created_at', 'desc')->get();
        $date = today()->format('Y-m-d');
        $events = Event::where('start_at', '>=', $date)->get();
        $orders = Order::where('order_status', 1)->orderBy('created_at', 'desc')->get();
        return view('admin/index', compact('messages', 'portfolio', 'events', 'orders'));
    }
}
