<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('created_at', 'desc')->paginate(20);
        return view('admin/orders/index', compact('orders'));
    }

    public function show(){

    }

    public function updateStatus(){
        
    }
}
