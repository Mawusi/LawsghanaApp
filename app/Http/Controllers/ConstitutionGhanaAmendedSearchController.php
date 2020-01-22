<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterNote;
use App\GhAmendedArticle;

class ConstitutionGhanaAmendedSearchController extends Controller
{
    //
    public function index_search_amendment(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();

        $ghana_amended_articles         = GhAmendedArticle::select('*')
                                        ->where('articles', 'LIKE', "%$query%") 
                                        ->orderBy('priority')
                                        ->get()
                                        ->map(function ($row) use ($query) {
                                            $row->articles = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->articles);
                                            return $row;
                                        });
        $ghana_amended_articles_count   = $ghana_amended_articles->count();                
                                
        return view('extenders.ghana_amended_constitution_search_page_index', compact('query','footer_notes','ghana_amended_articles','ghana_amended_articles_count'));
    }
}
