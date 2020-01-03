<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992Article;
use App\FooterNote;

class SearchController extends Controller
{
    //
    public function search(Request $request){

        $footer_notes   = FooterNote::all();


    	if($request->has('search')){
    		$posts = Post1992Article::search($request->get('search'))->get();	
    	}else{
    		$posts = Post1992Article::get();
        }
        
        if(count($posts) > 0 )
            return view('extenders.search_page_index', compact('posts', 'footer_notes'));
        else 
            return view ('extenders.search_page_not_found', compact('footer_notes'));
    }
}
