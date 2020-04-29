<?php

namespace App\Http\Controllers;

use App\Order;
use App\Events\OrderStatusChanged;
use App\Events\OrderCancelled;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('created_at', 'desc')->paginate(20);
        return view('admin/orders/index', compact('orders'));
    }

    public function show($id){
        $order = Order::find($id);
        return view('admin/orders/show', compact('order'));
    }

    public function updateStatus($id){
        $order = Order::find($id);
        event(new OrderStatusChanged($order));

        return back()->with('success', 'Order status has been successfully updated');
    }

    public function cancel($id){
        $order = Order::find($id);
        event(new OrderCancelled($order));

        return back()->with('success', 'Order has been successfully cancelled');
    }
}
