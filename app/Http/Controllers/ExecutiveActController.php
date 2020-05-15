<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExecutiveAct;
use App\FooterNote;

class ExecutiveActController extends Controller
{
    //
    public function only_executive_acts(){
        $allExecutiveActs         = ExecutiveAct::all();
        $footer_notes             = FooterNote::all();

        return view('post_1992_legislation.displayed_all_executive_acts', compact('footer_notes', 'allExecutiveActs'));
    }
}
