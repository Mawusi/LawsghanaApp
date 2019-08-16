<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllConstitution;
use App\Country;
use App\GhanaAct;
use App\GhanaArticle;
use App\GhAmendedAct;
use App\GhAmendedArticle;

class ConstitutionController extends Controller
{
    //GHANA'S CONSTITUTION
    public function ghana_constitution_table($id){
        $ghana_act                = GhanaAct::find(['id' => $id])->toArray()[0];
        $constitutionContent1     = GhanaArticle::all();  
        $unique                   = $constitutionContent1->sortBy('chapter')->sortBy('priority');
        $constitutionContents     = $unique;
        return view('constitution.ghana_constitution_table', compact('ghana_act', 'constitutionContents'));
    }

    public function ghana_constitution_preamble($id){
        $ghana_act = GhanaAct::find(['id' => $id])->toArray()[0]; 
        return view('constitution.ghana_constitution_preamble', compact('ghana_act'));
    }

    public function ghana_constitution_content($id){
        $constitutionContent = GhanaArticle::find(['id' => $id])->toArray()[0];
        return view('constitution.ghana_constitution_content', compact('constitutionContent'));
    }

    public function ghana_expanded_view($id){
        $ghana_act          = GhanaAct::find(['id' => $id])->toArray()[0];
        $ghanaArticles1     = GhanaArticle::all();  
        $unique            = $ghanaArticles1->sortBy('priority');
        $ghanaArticles    = $unique;
        return view('constitution.ghana_constitution_expandedView', compact('ghana_act', 'ghanaArticles'));
    }


    //GHANA'S CONSTITUTION AMENDED
    public function ghana_constitution_table_amended($id){
        $ghana_act_amended               = GhAmendedAct::find(['id' => $id])->toArray()[0];
        $constitutionContentAmended1     = GhAmendedArticle::all();  
        $unique                          = $constitutionContentAmended1->sortBy('chapter')->sortBy('priority');
        $constitutionContentAmendeds      = $unique;
        return view('constitution.ghana_constitution_amended_table', compact('ghana_act_amended', 'constitutionContentAmendeds'));
    }

    public function ghana_constitution_preamble_amended($id){
        $ghana_act_amended = GhAmendedAct::find(['id' => $id])->toArray()[0]; 
        return view('constitution.ghana_constitution_amended_preamble', compact('ghana_act_amended'));
    }

    public function ghana_constitution_content_amended($id){
        $constitutionContentAmended = GhAmendedArticle::find(['id' => $id])->toArray()[0];
        return view('constitution.ghana_constitution_amended_content', compact('constitutionContentAmended'));
    }

    public function ghana_expanded_view_amended($id){
        $ghana_act_amended          = GhAmendedAct::find(['id' => $id])->toArray()[0];
        $ghanaArticlesAmended1     = GhAmendedArticle::all();  
        $unique            = $ghanaArticlesAmended1->sortBy('priority');
        $ghanaArticlesAmendeds    = $unique;
        return view('constitution.ghana_constitution_amended_expandedView', compact('ghana_act_amended', 'ghanaArticlesAmendeds'));
    }


    //ALL COUNTRIES CONSTITUTION
    public function all_countries_constitution(){
        $allCountriesConstitutions = AllConstitution::all();
        $allCountries   = Country::all();

        return view('constitution.all_countries', compact('allCountriesConstitutions', 'allCountries'));
    }

     //ALL COUNTRIES CONSTITUTION FILTERING
     public function all_countries_constitution_filter($year, $country){
        
        $bool = false;
        $where = array();
        
        if($year != "0"){   
            $where['year'] = $year;
            $bool = true;
        }
        if($country != "0"){   
            $where['country'] = $country;
            $bool = true;
        }

        $allCountriesConstitutions  = ($bool)?AllConstitution::where($where)->get():AllConstitution::all();
        $allCountries   = Country::all();
        return view('constitution.all_countries', compact('allCountriesConstitutions', 'allCountries'));
    }

    public function display_country_constitution($id, $country){
        $allCountriesConstitution = AllConstitution::find(
            [
                'id' => $id,
                'country' => $country
            ])->toArray()[0];

        $allCountriesConstitutions = AllConstitution::all();
        return view('constitution.display_country_constitution', compact('allCountriesConstitutions', 'allCountriesConstitution'));
    }

    //AFRICA
    public function africa_constitution($continent){
        $africaConstitutions = AllConstitution::where(['continent' => $continent])->get();
        $africanCountries   = Country::where(['continent_name' => $continent])->get();
        return view('constitution.display_only_african_countries', compact('africaConstitutions', 'africanCountries'));
    }

    //AFRICA FILTERING
    public function africa_constitution_filter($year, $country){

        $name = "Africa";
        $bool = false;
        $where = array();

        if($year != "0"){   
           $where['year'] = $year;
           $bool = true;
       }
       if($country != "0"){   
           $where['country'] = $country;
           $bool = true;
       }

        $africaConstitutions       = ($bool)?AllConstitution::where($where)->where(['continent' => $name])->get():AllConstitution::all();
        $africanCountries       = Country::where(['continent_name' => $name])->get();
        return view('constitution.display_only_african_countries', compact('africaConstitutions', 'africanCountries'));
       }

    //ASIA
    public function asia_constitution($continent){
        $asiaConstitutions = AllConstitution::where(['continent' => $continent])->get();
        $asiaCountries   = Country::where(['continent_name' => $continent])->get();
        return view('constitution.display_only_asia_countries', compact('asiaConstitutions', 'asiaCountries'));
    }

    //ASIA FILTERING
    public function asia_constitution_filter($year, $country){

        $name = "Asia";
        $bool = false;
        $where = array();

        if($year != "0"){   
           $where['year'] = $year;
           $bool = true;
       }
       if($country != "0"){   
           $where['country'] = $country;
           $bool = true;
       }

        $asiaConstitutions       = ($bool)?AllConstitution::where($where)->where(['continent' => $name])->get():AllConstitution::all();
        $asiaCountries       = Country::where(['continent_name' => $name])->get();
        return view('constitution.display_only_asia_countries', compact('asiaConstitutions', 'asiaCountries'));
       }

    //EUROPE
    public function europe_constitution($continent){
        $europeConstitutions = AllConstitution::where(['continent' => $continent])->get();
        $europeCountries   = Country::where(['continent_name' => $continent])->get();
        return view('constitution.display_only_europe_countries', compact('europeConstitutions', 'europeCountries'));
    }

    //EUROPE FILTERING
    public function europe_constitution_filter($year, $country){

        $name = "Europe";
        $bool = false;
        $where = array();

        if($year != "0"){   
           $where['year'] = $year;
           $bool = true;
       }
       if($country != "0"){   
           $where['country'] = $country;
           $bool = true;
       }

        $europeConstitutions       = ($bool)?AllConstitution::where($where)->where(['continent' => $name])->get():AllConstitution::all();
        $europeCountries       = Country::where(['continent_name' => $name])->get();
        return view('constitution.display_only_europe_countries', compact('europeConstitutions', 'europeCountries'));
       }

    //NORTH AMERICA
    public function north_america_constitution($continent){
        $north_americaConstitutions = AllConstitution::where(['continent' => $continent])->get();
        $north_americaCountries   = Country::where(['continent_name' => $continent])->get();
        return view('constitution.display_only_north_america_countries', compact('north_americaConstitutions', 'north_americaCountries'));
    }

    //NORTH AMERICA FILTERING
    public function north_america_constitution_filter($year, $country){

        $name = "North America";
        $bool = false;
        $where = array();

        if($year != "0"){   
           $where['year'] = $year;
           $bool = true;
       }
       if($country != "0"){   
           $where['country'] = $country;
           $bool = true;
       }

        $north_americaConstitutions       = ($bool)?AllConstitution::where($where)->where(['continent' => $name])->get():AllConstitution::all();
        $north_americaCountries       = Country::where(['continent_name' => $name])->get();
        return view('constitution.display_only_north_america_countries', compact('north_americaConstitutions', 'north_americaCountries'));
       }

    //SOUTH AMERICA
    public function south_america_constitution($continent){
        $south_americaConstitutions = AllConstitution::where(['continent' => $continent])->get();
        $south_americaCountries   = Country::where(['continent_name' => $continent])->get();
        return view('constitution.display_only_south_america_countries', compact('south_americaConstitutions', 'south_americaCountries'));
    }

    //SOUTH AMERICA FILTERING
    public function south_america_constitution_filter($year, $country){

        $name = "South America";
        $bool = false;
        $where = array();

        if($year != "0"){   
           $where['year'] = $year;
           $bool = true;
       }
       if($country != "0"){   
           $where['country'] = $country;
           $bool = true;
       }

        $south_americaConstitutions       = ($bool)?AllConstitution::where($where)->where(['continent' => $name])->get():AllConstitution::all();
        $south_americaCountries       = Country::where(['continent_name' => $name])->get();
        return view('constitution.display_only_south_america_countries', compact('south_americaConstitutions', 'south_americaCountries'));
       }
}
