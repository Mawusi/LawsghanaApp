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
  
        return view('extenders.pre_4th_search_page_index', compact('query', 'footer_notes','total_pre_laws',
                                                                   'first_republic_laws', 'first_republic_laws_count',
                                                                   'second_republic_laws','second_republic_laws_count',
                                                                   'third_republic_laws', 'third_republic_laws_count',
                                                                   'nlc_decree_laws', 'nlc_decree_laws_count',
                                                                   'nrc_decree_laws','nrc_decree_laws_count',
                                                                   'smc_decree_laws','smc_decree_laws_count',
                                                                   'afrc_decree_laws', 'afrc_decree_laws_count',
                                                                   'pndc_laws', 'pndc_laws_count'));
    
    }
}
