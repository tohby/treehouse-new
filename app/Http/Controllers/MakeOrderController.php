<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
Use Alert;

class MakeOrderController extends Controller
{
    public function order(Request $request){
        $request->validate([
            
        ]);

        $order = Order::create([
            
        ]);
        Alert::success('Order sent', 'Thank you for showing interest in our product, we will reach out to you soon.');
        return back();
        // return redirect('/contact');
    }
}
