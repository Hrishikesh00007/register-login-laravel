<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }else{
            echo "not success";
        }
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            "password" => 'required'
        ]);

        if(Auth::attempt($credential)){
            return redirect()->route('dashboard');
        }else{
            echo "wrong user or password";
        }
    }

    public function dashboardPage(){
        if (Auth::check()) {
            return view('dashboard');
        }else{
            redirect()->route('login');
        }
    }

     public function inner(){
        if (Auth::check()) {
            return view('innerpage');
        }else{
            redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

}
