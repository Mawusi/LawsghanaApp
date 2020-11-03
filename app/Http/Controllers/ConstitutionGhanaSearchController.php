<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterNote;
use App\GhanaArticle;


class ConstitutionGhanaSearchController extends Controller
{
    //
    public function index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();

        $ghana_articles         = GhanaArticle::select('*')
                                ->where('articles', 'LIKE', "%$query%") 
                                ->orderBy('priority')
                                ->get()
                                ->map(function ($row) use ($query) {
                                    $row->articles = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->articles);
                                    return $row;
                                });
        $ghana_articles_count   = $ghana_articles->count(); 
        
        if
            (
            count($ghana_articles) > 0
            )                              
        return view('extenders.all_ghana_constitution_search_page_index', compact('query','footer_notes','ghana_articles','ghana_articles_count'));
        else 
        return view ('extenders.all_ghana_constitution_search_page_not_found', compact('query','footer_notes', 'ghana_articles_count'));
    }

}
