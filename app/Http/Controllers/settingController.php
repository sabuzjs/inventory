<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class settingController extends Controller
{
    public function logout(){
        Auth::logout();
        return view('welcome')->with('success','Logout successfully!');
    }
}
