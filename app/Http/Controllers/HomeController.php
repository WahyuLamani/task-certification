<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->rules === 'admin'){
            $users = User::where('rules', 'member')->with('certificate')->get();
            return view('home',compact('users'));
        }
        return view('home');
    }
}
