<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //Display Ghana News
    public function ghana_index(){
        return view('news.ghana_news_homepage_testing');
    }

    //Display Ghana News
    public function africa_index(){
        return view('news.africa_news_homepage');
    }

    //Display Ghana News
    public function europe_index(){
        return view('news.europe_news_homepage');
    }

    //Display Ghana News
    public function america_index(){
        return view('news.america_news_homepage');
    }

    //Display Ghana News
    public function asia_index(){
        return view('news.asia_news_homepage');
    }
}
