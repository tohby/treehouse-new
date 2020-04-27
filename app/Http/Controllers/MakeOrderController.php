<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderSent;
use App\Notifications\OrderReceived;
use App\Events\OrderPlaced;
use App\Order;
Use Alert;

class MakeOrderController extends Controller
{
    public function order(Request $request){
        $request->validate([
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'name' => 'required',
            'note' => 'nullable',
            'address' => 'required',
            'email' => 'required_without:phone',
            'phone' => 'required_without:email',
        ]);
        // create order number
        $latestOrder = Order::orderBy('created_at','DESC')->first();
        if($latestOrder == null){
            $orderId = 0;
        }else{
            $orderId = $latestOrder->id;
        }
        $orderNumber = '#knh'.str_pad($orderId + 1, 7, "0", STR_PAD_LEFT);

        $order = Order::create([
            'order_code' => $orderNumber,
            'portfolio_id' => $request->input('product_id'),
            'order_status' => 1,
            'number_of_products' => $request->input('quantity'),
            'name' => $request->input('name'),
            'note' => $request->input('note'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);
        
        event(new OrderPlaced($order));

        Alert::success('Order sent', 'Thank you for showing interest in our product, we will reach out to you soon.')->showConfirmButton('Dismiss', '#ff6c00');
        return back();
    }
}
