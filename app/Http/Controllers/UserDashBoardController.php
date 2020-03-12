<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashBoardController extends Controller
{
    //
    public function dashboard(){
        

        return view('user_dashboard.dashboard');
    }
}
