<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992Article;
use App\RegulationArticle;
use App\FooterNote;
use App\AmendedArticle;
use App\AmendRegulationArticle;

use App\GhLawJudgment;

class HomeSearchController extends Controller
{
    
    public function main_home_search(Request $request){

        //--------------------------------------------------------------------- HOME SEARCH: 4TH REPUBLIC LAWS------------------------------------------------
        $footer_notes   = FooterNote::all();
        $query=request('search_text');

        $posts          = Post1992Article::select('*')
                        ->where('part', 'LIKE', "%$query%")
                        ->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('post_act','LIKE', "%$query%")
                        ->orderBy('post_act')
                        ->orderBy('priority')
                        ->get()
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

        $posts_total_count    =  $posts_count + $regulations_count + $amends_count + $amends_regs_count; 
        
        
        //--------------------------------------------------------------------- HOME SEARCH: CASE LAWS------------------------------------------------
        $supreme = "Supreme-Court";
        $court_of_appeal = "Court-of-Appeal";
        $high_court = "High-Court";

        $supreme_court_cases         = GhLawJudgment::where(['gh_law_judgment_group_name' => $supreme])                                    
                                     ->where('content', 'LIKE', "%$query%")
                                     ->get()
                                     ->map(function ($row3) use ($query) {
                                       $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                       return $row3;
                                      });
        $supreme_court_cases_count     = $supreme_court_cases->count();
                                    
                                     
        $court_of_appeal_cases        = GhLawJudgment::where(['gh_law_judgment_group_name' => $court_of_appeal])
                                      ->where('content','LIKE', "%$query%")
                                      ->get()
                                      ->map(function ($row3) use ($query) {
                                        $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                        return $row3;
                                       });
        $court_of_appeal_cases_count  = $court_of_appeal_cases->count();


         $high_court_cases            = GhLawJudgment::where(['gh_law_judgment_group_name' => $high_court])
                                       ->where('content','LIKE', "%$query%")
                                       ->get()
                                       ->map(function ($row3) use ($query) {
                                       $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                       return $row3;
                                       });
         $high_court_cases_count      = $high_court_cases->count();


        $cases_total_count                    = $supreme_court_cases_count + $court_of_appeal_cases_count + $high_court_cases_count; 



        $all_total_count                =  $posts_total_count + $cases_total_count;           
        
        if
            (
            count($posts) > 0 or 
            count($regulations) > 0 or 
            count($amends) > 0 or 
            count($amends_regs) > 0 or 
            count($supreme_court_cases) > 0 or 
            count($court_of_appeal_cases) > 0 or 
            count($high_court_cases) > 0 
            )
            return view('extenders.home_search_page_index', compact('query','footer_notes', 'all_total_count','posts_total_count','cases_total_count',
                                                                    'posts','regulations', 'amends', 'amends_regs', 
                                                                    'supreme_court_cases','court_of_appeal_cases','high_court_cases'));
        else 
            return view ('extenders.search_page_not_found', compact('footer_notes', 'total_count'));
    }
    
    
    
}
