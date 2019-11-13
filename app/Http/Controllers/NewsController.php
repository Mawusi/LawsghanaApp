<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategory;
use App\NewsContent;

class NewsController extends Controller
{
    public function ghana_index($category, $id){
        // dd($category, $id);
        $newsCategories        = NewsCategory::all();
        $newscategory          = NewsCategory::find(['id' => $id])->toArray()[0];

        //for the 3 diplayed below the carousel
        $latestNewsContents    = NewsContent::where(['news_category' => $category])->orderBy('created_at', 'asc')->paginate(3);
        // for both the carousel and the last part
        // $newsContents          = NewsContent::where(['news_category' => $category])->orderBy('created_at', 'desc')->paginate(5); 
        $newsSelectors         = NewsContent::where(['news_category' => $category])->orderBy('created_at', 'desc')->paginate(5);
        return view('news.ghana_news_homepage', compact('newsCategories','newsContents','latestNewsContents','newsSelectors','newscategory'));
    }

    // Ajax Pagination
    public function fetch_data(Request $request, $category){

        if($request->ajax()){
            $newsSelectors     = NewsContent::where(['news_category' => $category])->orderBy('created_at', 'desc')->paginate(5);          
            return view('news.displayed_all_ghana_news', compact('newsSelectors'))->render();
        }
    }

    //Display of News_Content
    public function news_content($category, $title, $id){
        //dd($category, $title, $id);
        $newsCategories         = NewsCategory::all();
        $newsContents           = NewsContent::where(['news_category' => $category])->orderBy('created_at', 'desc')->paginate(6);
        $newsContent            = NewsContent::find(
            [
                'id' => $id,
                'title' => $title,
                'news_category' => $category
            ])->toArray()[0];

        return view('news.news_content', compact('newsContent','newsContents','newsCategories'));
    }

    
}
