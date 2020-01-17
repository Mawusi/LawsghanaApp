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
                                     ->where('case_title', 'LIKE', "%$query%")->orWhere('reference_number','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")
                                     ->orderBy('gh_law_judgment_group_name', 'DESC')
                                     ->get()
                                     ->map(function ($row1) use ($query) {
                                        $row1->case_title   = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->case_title);
                                        return $row1;
                                     })
                                     ->map(function ($row2) use ($query) {
                                        $row2->reference_number = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->reference_number);
                                        return $row2;
                                    })
                                     ->map(function ($row3) use ($query) {
                                        $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                        return $row3;
                                    });
                                    
                                     
        $court_of_appeal_cases       = GhLawJudgment::where(['gh_law_judgment_group_name' => $court_of_appeal])
                                     ->where('case_title', 'LIKE', "%$query%")->orWhere('reference_number','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")
                                     ->get()
                                     ->map(function ($row1) use ($query) {
                                        $row1->case_title   = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->case_title);
                                        return $row1;
                                        })
                                     ->map(function ($row2) use ($query) {
                                        $row2->reference_number = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->reference_number);
                                        return $row2;
                                     })
                                     ->map(function ($row3) use ($query) {
                                        $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                        return $row3;
                                    });

        $high_court_cases            = GhLawJudgment::where(['gh_law_judgment_group_name' => $high_court])
                                    ->where('case_title', 'LIKE', "%$query%")->orWhere('reference_number','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")
                                    ->get()
                                    ->map(function ($row1) use ($query) {
                                    $row1->case_title   = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row1->case_title);
                                    return $row1;
                                    })
                                    ->map(function ($row2) use ($query) {
                                    $row2->reference_number = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->reference_number);
                                    return $row2;
                                    })
                                    ->map(function ($row3) use ($query) {
                                    $row3->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row3->content);
                                    return $row3;
                                    });


        $supreme_court_cases_count      = GhLawJudgment::where(['gh_law_judgment_group_name' => $supreme])
                                        ->where('case_title', 'LIKE', "%$query%")->orWhere('reference_number','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->count();

        $court_of_appeal_cases_count    = GhLawJudgment::where(['gh_law_judgment_group_name' => $court_of_appeal])
                                        ->where('case_title', 'LIKE', "%$query%")->orWhere('reference_number','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->count();

        $high_court_cases_count         = GhLawJudgment::where(['gh_law_judgment_group_name' => $high_court])
                                        ->where('case_title', 'LIKE', "%$query%")->orWhere('reference_number','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->count();

        $total_cases                    = $supreme_court_cases_count + $court_of_appeal_cases_count + $high_court_cases_count;                            

        return view('extenders.cases_search_page_index', compact('query','total_cases', 'supreme_court_cases', 'supreme_court_cases_count', 'court_of_appeal_cases', 'court_of_appeal_cases_count', 'high_court_cases','high_court_cases_count', 'footer_notes'));
    }
}
