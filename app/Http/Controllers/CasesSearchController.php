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

        $supreme_court_cases         = GhLawJudgment::where(['gh_law_judgment_group_name' => $supreme])->get();






        $court_of_appeal_cases         = GhLawJudgment::where(['gh_law_judgment_group_name' => $court_of_appeal])->get();
        $high_court_cases         = GhLawJudgment::where(['gh_law_judgment_group_name' => $high_court])->get();

        return view('extenders.cases_search_page_index', compact('query','supreme_court_cases', 'court_of_appeal_cases', 'high_court_cases', 'footer_notes'));
    }
}
