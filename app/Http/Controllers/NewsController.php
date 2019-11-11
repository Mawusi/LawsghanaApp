<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategory;
use App\NewsContent;

class NewsController extends Controller
{
    public function ghana_index(){
        $newsCategories        = NewsCategory::all();
        $latestNewsContents    = NewsContent::all();
        $newsContents          = NewsContent::paginate(5);
        return view('news.ghana_news_homepage', compact('newsCategories','newsContents','latestNewsContents'));
    }

    // Ajax Pagination
    public function fetch_data(Request $request){

        if($request->ajax()){
            
            $newsCategories        = NewsCategory::all();
            $newsContents          = NewsContent::paginate(5);
            return view('news.displayed_all_ghana_news', compact('newsCategories','newsContents'))->render();
        }
    }

    public function news_content($category, $title, $id){
        //dd($category, $title, $id);
        $newsCategories         = NewsCategory::all();
        $newsContents          = NewsContent::paginate(5);
        $newsContent            = NewsContent::find(
            [
                'id' => $id,
                'title' => $title,
                'news_category' => $category
            ])->toArray()[0];

        return view('news.news_content', compact('newsContent','newsContents','newsCategories'));
    }

    //Display Africa News
    public function africa_index(){
        $newsCategories        = NewsCategory::all();
        return view('news.africa_news_homepage', compact('newsCategories'));
    }

    //Display Ghana News
    public function europe_index(){
        $newsCategories        = NewsCategory::all();
        return view('news.europe_news_homepage', compact('newsCategories'));
    }

    //Display Ghana News
    public function america_index(){
        $newsCategories        = NewsCategory::all();
        return view('news.america_news_homepage', compact('newsCategories'));
    }

    //Display Ghana News
    public function asia_index(){
        $newsCategories        = NewsCategory::all();
        return view('news.asia_news_homepage', compact('newsCategories'));
    }
}
