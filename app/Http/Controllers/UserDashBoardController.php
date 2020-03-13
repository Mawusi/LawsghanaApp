<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashBoardController extends Controller
{
    //
    public function dashboard(){
        return view('user_dashboard.dashboard');
    }

    public function bookmarks(){
        return view('user_dashboard.bookmarks');
    }

    public function downloads(){
        return view('user_dashboard.downloads');
    }
}
