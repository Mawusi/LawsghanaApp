<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992Article;
use App\RegulationArticle;
use App\FooterNote;
use App\AmendedArticle;
use App\AmendRegulationArticle;

class HomeSearchController extends Controller
{
    //
    public function home_search(Request $request){

        $footer_notes   = FooterNote::all();


    	// if($request->has('search')){
    	// 	$posts = Post1992Article::search($request->get('search'))->get();	
    	// }else{
    	// 	$posts = Post1992Article::get();
        // }
        $query=request('search');
        // dd($query);
        
        $query_match= "<font color='blue'>".$query."</font>";
        // dd($query_match);

        $posts          = Post1992Article::select('*')
                        ->where('part', 'LIKE', "%$query%")
                        ->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('post_act','LIKE', "%$query%")
                        ->orderBy('post_act')
                        ->orderBy('priority')
                        ->get()
                        // ->map(function ($row1) use ($query) {
                        //     $row1->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->post_act);
                        //     return $row1;
                        // })
                        ->map(function ($row2) use ($query) {
                            $row2->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->section);
                            return $row2;
                        })
                        ->map(function ($row) use ($query) {
                            $row->content   = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                        });    

        $regulations    = RegulationArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")
                        ->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('regulation_title','LIKE', "%$query%")
                        ->orderBy('regulation_title')
                        ->orderBy('priority')
                        ->get()
                        // ->map(function ($row) use ($query) {
                        //     $row->regulation_title = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->regulation_title);
                        //     return $row;
                        // })
                        ->map(function ($row1) use ($query) {
                            $row1->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->section);
                            return $row1;
                        })
                        ->map(function ($row2) use ($query) {
                            $row2->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->content);
                            return $row2;
                        });

        $amends         = AmendedArticle::select('*')
                        ->where('section', 'LIKE', "%$query%")
                        ->orWhere('content','LIKE', "%$query%")->orWhere('act_title','LIKE', "%$query%")
                        ->orderBy('act_title')
                        ->orderBy('priority')
                        ->get()
                        // ->map(function ($row) use ($query) {
                        //     $row->act_title = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->act_title);
                        //     return $row;
                        // })
                        ->map(function ($row1) use ($query) {
                            $row1->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->section);
                            return $row1;
                        })
                        ->map(function ($row2) use ($query) {
                            $row2->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->content);
                            return $row2;
                        });
                        
        $amends_regs    = AmendRegulationArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")
                        ->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('title','LIKE', "%$query%")
                        ->orderBy('title')
                        ->orderBy('priority')
                        ->get()
                        ->map(function ($row1) use ($query) {
                            $row1->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->section);
                            return $row1;
                        })
                        ->map(function ($row) use ($query) {
                            $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                        });
                        

                        $posts_count   = Post1992Article::where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('post_act','LIKE', "%$query%")
                        ->count();
                        $regulations_count    = RegulationArticle::where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('regulation_title','LIKE', "%$query%")
                        ->count();
                        $amends_count = AmendedArticle::where('section', 'LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('act_title','LIKE', "%$query%")
                        ->count();
                        $amends_regs_count    = AmendRegulationArticle::where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('title','LIKE', "%$query%")
                        ->count();

        $total_count    =  $posts_count + $regulations_count + $amends_count + $amends_regs_count;              
        
        if(count($posts) > 0 or count($regulations) > 0 or count($amends) > 0 or count($amends_regs) > 0 )
            return view('extenders.home_search_page_index', compact('query', 'query_match','posts', 'total_count', 'regulations', 'amends', 'amends_regs', 'footer_notes','posts_count', 'regulations_count', 'amends_count', 'amends_regs_count'));
        else 
            return view ('extenders.search_page_not_found', compact('footer_notes', 'total_count'));
    }
}
