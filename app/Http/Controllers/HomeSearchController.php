<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992Article;
use App\RegulationArticle;
use App\FooterNote;
use App\AmendedArticle;
use App\AmendRegulationArticle;
use App\AllConstitution;
use App\GhanaArticle;
use App\GhAmendedArticle;
use Illuminate\Support\Facades\DB;
use App\GhLawJudgment;

class HomeSearchController extends Controller
{
    
    public function main_home_search(Request $request){
        $footer_notes   = FooterNote::all();
        $query=request('search_text');

        //--------------------------------------------------------------------HOME SEARCH: GHANA CONSTITUTION-------------------------------------------------------------------------------
        //Constitution
        $ghana_articles         = GhanaArticle::select('*')
                                ->where('articles', 'LIKE', "%$query%") 
                                ->orderBy('priority')
                                ->get()
                                ->map(function ($row) use ($query) {
                                    $row->articles = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->articles);
                                    return $row;
                                });
        $ghana_articles_count   = $ghana_articles->count(); 

        //Constitution_Amended
        $ghana_amended_articles         = GhAmendedArticle::select('*')
                                        ->where('articles', 'LIKE', "%$query%") 
                                        ->orderBy('priority')
                                        ->get()
                                        ->map(function ($row) use ($query) {
                                            $row->articles = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->articles);
                                            return $row;
        });
        $ghana_amended_articles_count   = $ghana_amended_articles->count();

        $total_constitution_articles_count = $ghana_articles_count + $ghana_amended_articles_count;

        //--------------------------------------------------------------------HOME SEARCH: OTHER COUNTRIES CONSTITUTION---------------------------------------------------------------------

        $africa         = "Africa";
        $asia           ="Asia";
        $europe         = "Europe";
        $north_america  = "North-America";
        $south_america  = "South-America";


        $africa_countries_constitutions         = AllConstitution::where(['continent' => $africa])
                                                ->where('content', 'LIKE', "%$query%")
                                                ->get()
                                                ->map(function ($row) use ($query) {
                                                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                return $row;
                                                });

        $africa_countries_constitution_count    = $africa_countries_constitutions->count();

        $asia_countries_constitutions           = AllConstitution::where(['continent' => $asia])
                                                ->where('content', 'LIKE', "%$query%")
                                                ->get()
                                                ->map(function ($row) use ($query) {
                                                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                return $row;
                                                });

        $asia_countries_constitution_count      = $asia_countries_constitutions->count();

        $europe_countries_constitutions         = AllConstitution::where(['continent' => $europe])
                                                ->where('content', 'LIKE', "%$query%")
                                                ->get()
                                                ->map(function ($row) use ($query) {
                                                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                return $row;
                                                });

        $europe_countries_constitution_count    = $europe_countries_constitutions->count();

        $north_america_countries_constitutions        = AllConstitution::where(['continent' => $north_america])
                                                      ->where('content', 'LIKE', "%$query%")
                                                      ->get()
                                                      ->map(function ($row) use ($query) {
                                                      $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                      return $row;
                                                      });

        $north_america_countries_constitutions_count  = $north_america_countries_constitutions->count();

        $south_america_countries_constitutions        = AllConstitution::where(['continent' => $south_america])
                                                      ->where('content', 'LIKE', "%$query%")
                                                      ->get()
                                                      ->map(function ($row) use ($query) {
                                                      $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                      return $row;
                                                      });

        $south_america_countries_constitutions_count  = $south_america_countries_constitutions->count();
 
        
        $total_constitution_countries           = $africa_countries_constitution_count + $europe_countries_constitution_count + $asia_countries_constitution_count
                                                + $north_america_countries_constitutions_count + $south_america_countries_constitutions_count;  

        //--------------------------------------------------------------------- HOME SEARCH: 4TH REPUBLIC LAWS------------------------------------------------
        

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
        
        //--------------------------------------------------------------------- HOME SEARCH: PRE 4TH REPUBLIC LAWS------------------------------------------------

        $first_republic = "First Republic";
        $second_republic = "Second Republic";
        $third_republic = "Third Republic";
        $nlc_decree = "NLC Decree";
        $nrc_decree = "NRC Decree";
        $smc_decree = "SMC Decree";
        $afrc_decree = "AFRC Decree";
        $pndc_law = "PNDC Law";

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

        $pre_total_count            = $first_republic_laws_count + $second_republic_laws_count + $third_republic_laws_count + 
                                     $nlc_decree_laws_count +$nrc_decree_laws_count + $smc_decree_laws_count + $afrc_decree_laws_count + $pndc_laws_count;


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



        $all_total_count                =  $posts_total_count + $cases_total_count + $pre_total_count + $total_constitution_countries + $total_constitution_articles_count;           
        
        if
            (
            count($posts) > 0 or 
            count($regulations) > 0 or 
            count($amends) > 0 or 
            count($amends_regs) > 0 or 
            count($supreme_court_cases) > 0 or 
            count($court_of_appeal_cases) > 0 or 
            count($high_court_cases) > 0 or
            count($first_republic_laws) > 0 or
            count($second_republic_laws) > 0 or
            count($third_republic_laws) > 0 or
            count($nlc_decree_laws) > 0 or
            count($nrc_decree_laws) > 0 or
            count($smc_decree_laws) > 0 or
            count($afrc_decree_laws) > 0 or
            count($pndc_laws) > 0 or
            count($africa_countries_constitutions) > 0 or
            count($asia_countries_constitutions) > 0 or
            count($europe_countries_constitutions) > 0 or
            count($north_america_countries_constitutions) > 0 or
            count($ghana_articles) > 0 or
            count($ghana_amended_articles) > 0
            


            )
            return view('extenders.home_search_page_index', compact('query','footer_notes', 'all_total_count',
                                                                    'posts','regulations', 'amends', 'amends_regs','posts_total_count', 
                                                                    'supreme_court_cases','court_of_appeal_cases','high_court_cases','cases_total_count',
                                                                    'first_republic_laws','second_republic_laws', 'third_republic_laws','nlc_decree_laws',
                                                                    'nrc_decree_laws', 'smc_decree_laws', 'afrc_decree_laws','pndc_laws','pre_total_count',
                                                                    'africa_countries_constitutions','asia_countries_constitutions', 'europe_countries_constitutions',
                                                                    'north_america_countries_constitutions','south_america_countries_constitutions',
                                                                    'total_constitution_countries',
                                                                    'ghana_articles', 'ghana_amended_articles', 'total_constitution_articles_count'));
        else 
            return view ('extenders.search_page_not_found', compact('footer_notes', 'total_count'));
    }
    
    
    
}
