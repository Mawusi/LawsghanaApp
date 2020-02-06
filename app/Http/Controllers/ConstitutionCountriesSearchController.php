<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllConstitution;
use App\FooterNote;

class ConstitutionCountriesSearchController extends Controller
{
    //
    public function countries_index_search(Request $request){
        $query=request('search_text');
        // dd($query);
        $footer_notes   = FooterNote::all();

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

        if
            (
            count($africa_countries_constitutions) > 0 or 
            count($asia_countries_constitutions) > 0 or 
            count($europe_countries_constitutions) > 0 or 
            count($north_america_countries_constitutions) > 0 or 
            count($south_america_countries_constitutions) > 0 
            )
        return view('extenders.constitution_countries_search_page_index', compact('footer_notes', 'query', 'total_constitution_countries',
                                                                                  'africa_countries_constitutions','africa_countries_constitution_count',
                                                                                  'europe_countries_constitutions','europe_countries_constitution_count',
                                                                                  'asia_countries_constitutions','asia_countries_constitution_count',
                                                                                  'north_america_countries_constitutions','north_america_countries_constitutions_count',
                                                                                  'south_america_countries_constitutions','south_america_countries_constitutions_count'));
        else 
            return view ('extenders.constitution_countries_search_page_not_found', compact('query','footer_notes', 'total_constitution_countries','africa_countries_constitution_count',
                                                                        'europe_countries_constitution_count','asia_countries_constitution_count','north_america_countries_constitutions_count','south_america_countries_constitutions_count'));

    }

    public function africa_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $africa         = "Africa";

        $africa_countries_constitutions         = AllConstitution::where(['continent' => $africa])
                                                ->where('content', 'LIKE', "%$query%")
                                                ->get()
                                                ->map(function ($row) use ($query) {
                                                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                return $row;
                                                });

        $africa_countries_constitution_count    = $africa_countries_constitutions->count(); 

        //dd($africa_countries_constitution_count);
        
        if
            (
            count($africa_countries_constitutions) > 0
            )                              
        return view('extenders.africa_constitution_search_page_index', compact('query','footer_notes','africa_countries_constitutions','africa_countries_constitution_count'));
        else 
        return view ('extenders.africa_constitution_search_page_index_not_found', compact('query','footer_notes', 'africa_countries_constitution_count'));

    }

    public function asia_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $asia         = "Asia";

        $asia_countries_constitutions           = AllConstitution::where(['continent' => $asia])
                                                ->where('content', 'LIKE', "%$query%")
                                                ->get()
                                                ->map(function ($row) use ($query) {
                                                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                return $row;
                                                });

        $asia_countries_constitution_count      = $asia_countries_constitutions->count(); 
        
        if
            (
            count($asia_countries_constitutions) > 0
            )                              
        return view('extenders.asia_constitution_search_page_index', compact('query','footer_notes','asia_countries_constitutions','asia_countries_constitution_count'));
        else 
        return view ('extenders.asia_constitution_search_page_index_not_found', compact('query','footer_notes', 'asia_countries_constitution_count'));

    }

    public function europe_index_search(){

        $query=request('search_text');
        $footer_notes   = FooterNote::all();
        $europe         = "Europe";

        $europe_countries_constitutions         = AllConstitution::where(['continent' => $europe])
                                                ->where('content', 'LIKE', "%$query%")
                                                ->get()
                                                ->map(function ($row) use ($query) {
                                                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                                                return $row;
                                                });

        $europe_countries_constitution_count    = $europe_countries_constitutions->count(); 
        
        if
            (
            count($europe_countries_constitutions) > 0
            )                              
        return view('extenders.europe_constitution_search_page_index', compact('query','footer_notes','europe_countries_constitutions','europe_countries_constitution_count'));
        else 
        return view ('extenders.europe_constitution_search_page_index_not_found', compact('query','footer_notes', 'europe_countries_constitution_count'));

    }
}
