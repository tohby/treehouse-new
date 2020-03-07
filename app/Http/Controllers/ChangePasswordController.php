<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class ChangePasswordController extends Controller
{
    public function get(){
        return view('auth/change');
    }

    public function change(Request $request){
        $request->validate([
            'password' => 'required',
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $password = $request->input('password');
        $newpass = Hash::make($request->input('new_password'));
        $id = Auth::id();
        $user = User::find($id);
        if (Hash::check($password, $user->password)) {
            $user->password = $newpass;
            $user->save();
        }
        return redirect('/dashboard')->with('success', 'Your password has been updated, stay safe');
    }
}
