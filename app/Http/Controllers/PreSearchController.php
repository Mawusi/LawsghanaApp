<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterNote;
use Illuminate\Support\Facades\DB;

class PreSearchController extends Controller
{
    //
    public function pre_index_search(){

        $first_republic = "First Republic";
        $second_republic = "Second Republic";
        $third_republic = "Third Republic";
        $nlc_decree = "NLC Decree";
        $nrc_decree = "NRC Decree";
        $smc_decree = "SMC Decree";
        $afrc_decree = "AFRC Decree";
        $pndc_law = "PNDC Law";

        $query=request('search_text');

        $footer_notes   = FooterNote::all();

        $first_republic_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $first_republic])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $first_republic_laws_count     = $first_republic_laws->count();

        $second_republic_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $second_republic])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $second_republic_laws_count     = $second_republic_laws->count();

        $third_republic_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $third_republic])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $third_republic_laws_count     = $third_republic_laws->count();

        $nlc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $nlc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $nlc_decree_laws_count     = $nlc_decree_laws->count();

        $nrc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $nrc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $nrc_decree_laws_count     = $nrc_decree_laws->count();

        $smc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $smc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $smc_decree_laws_count     = $smc_decree_laws->count();

        
        $afrc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $afrc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $afrc_decree_laws_count     = $afrc_decree_laws->count();

        $pndc_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $pndc_law])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $pndc_laws_count     = $pndc_laws->count();

        $total_pre_laws            = $first_republic_laws_count + $second_republic_laws_count + $third_republic_laws_count + 
                                     $nlc_decree_laws_count +$nrc_decree_laws_count + $smc_decree_laws_count + $afrc_decree_laws_count + $pndc_laws_count;
  
        if
        (
        count($first_republic_laws) > 0 or 
        count($second_republic_laws) > 0 or 
        count($third_republic_laws) > 0 or 
        count($nlc_decree_laws) > 0 or 
        count($nrc_decree_laws) > 0 or
        count($smc_decree_laws) > 0 or
        count($afrc_decree_laws) > 0 or
        count($pndc_laws) > 0
        )

        return view('extenders.pre_4th_search_page_index', compact('query', 'footer_notes','total_pre_laws',
                                                                   'first_republic_laws', 'first_republic_laws_count',
                                                                   'second_republic_laws','second_republic_laws_count',
                                                                   'third_republic_laws', 'third_republic_laws_count',
                                                                   'nlc_decree_laws', 'nlc_decree_laws_count',
                                                                   'nrc_decree_laws','nrc_decree_laws_count',
                                                                   'smc_decree_laws','smc_decree_laws_count',
                                                                   'afrc_decree_laws', 'afrc_decree_laws_count',
                                                                   'pndc_laws', 'pndc_laws_count'));
        else 
            return view ('extenders.pre_4th_search_page_not_found', compact('query','footer_notes', 'total_pre_laws','first_republic_laws_count',
                                                                        'second_republic_laws_count','third_republic_laws_count','nlc_decree_laws_count',
                                                                        'nrc_decree_laws_count','smc_decree_laws_count', 'afrc_decree_laws_count', 'pndc_laws_count'));
    
    }

    public function first_rep_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $first_republic = "First Republic";

        $first_republic_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $first_republic])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $first_republic_laws_count     = $first_republic_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($first_republic_laws) > 0
            )                              
        return view('extenders.first_republic_search_page_index', compact('query','footer_notes','first_republic_laws','first_republic_laws_count'));
        else 
        return view ('extenders.first_republic_search_page_index_not_found', compact('query','footer_notes', 'first_republic_laws_count'));

    
    }

    public function second_rep_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $second_republic = "Second Republic";

        $second_republic_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $second_republic])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $second_republic_laws_count     = $second_republic_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($second_republic_laws) > 0
            )                              
        return view('extenders.second_republic_search_page_index', compact('query','footer_notes','second_republic_laws','second_republic_laws_count'));
        else 
        return view ('extenders.second_republic_search_page_index_not_found', compact('query','footer_notes', 'second_republic_laws_count'));
    }

    public function third_rep_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $third_republic = "Third Republic";

        $third_republic_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $third_republic])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $third_republic_laws_count     = $third_republic_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($third_republic_laws) > 0
            )                              
        return view('extenders.third_republic_search_page_index', compact('query','footer_notes','third_republic_laws','third_republic_laws_count'));
        else 
        return view ('extenders.third_republic_search_page_index_not_found', compact('query','footer_notes', 'third_republic_laws_count'));
    }

    public function nlc_decree_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $nlc_decree = "NLC Decree";

        $nlc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $nlc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $nlc_decree_laws_count     = $nlc_decree_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($nlc_decree_laws) > 0
            )                              
        return view('extenders.nlc_decree_search_page_index', compact('query','footer_notes','nlc_decree_laws','nlc_decree_laws_count'));
        else 
        return view ('extenders.nlc_decree_search_page_index_not_found', compact('query','footer_notes', 'nlc_decree_laws_count'));
    }

    public function nrc_decree_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $nrc_decree = "NRC Decree";

        $nrc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $nrc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $nrc_decree_laws_count     = $nrc_decree_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($nrc_decree_laws) > 0
            )                              
        return view('extenders.nrc_decree_search_page_index', compact('query','footer_notes','nrc_decree_laws','nrc_decree_laws_count'));
        else 
        return view ('extenders.nrc_decree_search_page_index_not_found', compact('query','footer_notes', 'nrc_decree_laws_count'));
    }

    public function smc_decree_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $smc_decree = "SMC Decree";

        $smc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $smc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $smc_decree_laws_count     = $smc_decree_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($smc_decree_laws) > 0
            )                              
        return view('extenders.smc_decree_search_page_index', compact('query','footer_notes','smc_decree_laws','smc_decree_laws_count'));
        else 
        return view ('extenders.smc_decree_search_page_index_not_found', compact('query','footer_notes', 'smc_decree_laws_count'));
    }

    public function afrc_decree_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $afrc_decree = "AFRC Decree";

        $afrc_decree_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $afrc_decree])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $afrc_decree_laws_count     = $afrc_decree_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($afrc_decree_laws) > 0
            )                              
        return view('extenders.afrc_decree_search_page_index', compact('query','footer_notes','afrc_decree_laws','afrc_decree_laws_count'));
        else 
        return view ('extenders.afrc_decree_search_page_index_not_found', compact('query','footer_notes', 'afrc_decree_laws_count'));
    }

    public function pndc_law_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $pndc_law = "PNDC Law";

        $pndc_laws = DB::table('pre1992_legislation_acts')
            ->leftJoin('pre1992_legislation_articles', 'pre1992_legislation_acts.title', '=', 'pre1992_legislation_articles.pre_1992_act')
            ->where(['pre_1992_group' => $pndc_law])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $pndc_laws_count     = $pndc_laws->count();

        // dd($first_republic_laws_count);

        if
            (
            count($pndc_laws) > 0
            )                              
        return view('extenders.pndc_law_search_page_index', compact('query','footer_notes','pndc_laws','pndc_laws_count'));
        else 
        return view ('extenders.pndc_law_search_page_index_not_found', compact('query','footer_notes', 'pndc_laws_count'));
    }
}
