<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GhLawJudgment;
use App\FooterNote;


class CasesSearchController extends Controller
{
    //
    public function cases_index_search(Request $request){
        $supreme = "Supreme-Court";
        $court_of_appeal = "Court-of-Appeal";
        $high_court = "High-Court";
        $query=request('search_text');

        $footer_notes   = FooterNote::all();

        $supreme_court_cases         = GhLawJudgment::where(['gh_law_judgment_group_name' => $supreme])                                    
                                     ->where('content', 'LIKE', "%$query%")
                                     ->get()
                                     ->map(function ($row3) use ($query) {
                                       $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                       return $row3;
                                      });
                                    //  ->map(function ($row1) use ($query) {
                                    //     $row1->case_title   = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->case_title);
                                    //     return $row1;
                                    //  })
                                    //  ->map(function ($row2) use ($query) {
                                    //     $row2->reference_number = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->reference_number);
                                    //     return $row2;
                                    // })
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


        $total_cases                    = $supreme_court_cases_count + $court_of_appeal_cases_count + $high_court_cases_count;                            

        if(count($supreme_court_cases) > 0 or
          count($court_of_appeal_cases) > 0 or 
          count($high_court_cases) > 0 
          )
            return view('extenders.cases_search_page_index', compact('query','total_cases',
                                                                 'supreme_court_cases', 'supreme_court_cases_count',
                                                                 'court_of_appeal_cases', 'court_of_appeal_cases_count',
                                                                 'high_court_cases','high_court_cases_count', 'footer_notes'));
        else
            return view ('extenders.cases_search_page_not_found', compact('footer_notes', 'total_cases','supreme_court_cases_count','court_of_appeal_cases_count','high_court_cases_count','query'));
    }

    public function supreme_court_index_search(Request $request){

      $query=request('search_text');
      $supreme = "Supreme-Court";
      $footer_notes   = FooterNote::all();

      $supreme_court_cases         = GhLawJudgment::where(['gh_law_judgment_group_name' => $supreme])                                    
                                     ->where('content', 'LIKE', "%$query%")
                                     ->get()
                                     ->map(function ($row3) use ($query) {
                                       $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                       return $row3;
                                      });
                                   
      $supreme_court_cases_count     = $supreme_court_cases->count();

      if
            (
            count($supreme_court_cases) > 0
            )                              
        return view('extenders.supreme_court_search_page_index', compact('query','footer_notes','supreme_court_cases','supreme_court_cases_count'));
        else 
        return view ('extenders.supreme_court_search_page_index_not_found', compact('query','footer_notes', 'supreme_court_cases_count'));

    }

    public function court_of_appeal_index_search(Request $request){

      $query=request('search_text');
      $court_of_appeal = "Court-of-Appeal";
      $footer_notes   = FooterNote::all();

      $court_of_appeal_cases        = GhLawJudgment::where(['gh_law_judgment_group_name' => $court_of_appeal])
                                      ->where('content','LIKE', "%$query%")
                                      ->get()
                                      ->map(function ($row3) use ($query) {
                                        $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                        return $row3;
                                       });
        $court_of_appeal_cases_count  = $court_of_appeal_cases->count();

      if
            (
            count($court_of_appeal_cases) > 0
            )                              
        return view('extenders.court_of_appeal_search_page_index', compact('query','footer_notes','court_of_appeal_cases','court_of_appeal_cases_count'));
        else 
        return view ('extenders.court_of_appeal_search_page_index_not_found', compact('query','footer_notes', 'court_of_appeal_cases_count'));

    }

    public function high_court_index_search(Request $request){

      $query=request('search_text');
      $high_court = "High-Court";
      $footer_notes   = FooterNote::all();

      $high_court_cases            = GhLawJudgment::where(['gh_law_judgment_group_name' => $high_court])
                                       ->where('content','LIKE', "%$query%")
                                       ->get()
                                       ->map(function ($row3) use ($query) {
                                       $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                       return $row3;
                                       });
      $high_court_cases_count      = $high_court_cases->count();

      if
            (
            count($high_court_cases) > 0
            )                              
        return view('extenders.high_court_search_page_index', compact('query','footer_notes','high_court_cases','high_court_cases_count'));
        else 
        return view ('extenders.high_court_search_page_index_not_found', compact('query','footer_notes', 'high_court_cases_count'));

    }
}
