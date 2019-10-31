<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //Display all News
    public function index(){
        return view('news.news_homepage');
    }
}
