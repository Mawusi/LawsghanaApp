<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992Article;
use App\ConstitutionalArticle;
use App\RegulationArticle;
use App\FooterNote;
use App\AmendedArticle;
use App\AmendRegulationArticle;
use Illuminate\Support\Facades\DB;

class PostSearchController extends Controller
{
    //Search for all Posts-1992-Legislation Laws
    public function all_posts_search(Request $request){

        $footer_notes   = FooterNote::all();
        $query=request('search_text');
        // dd($query);
        $posts          = Post1992Article::select('*')
                        ->where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('post_act','LIKE', "%$query%")
                        ->orderBy('post_act')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $posts->setCollection(
                        //     $posts->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->post_act);
                        //     return $row;
                        //         })
                        // );

                        $posts->setCollection(
                            $posts->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $posts->setCollection(
                            $posts->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );

        $regulations    = RegulationArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('regulation_title','LIKE', "%$query%")
                        ->orderBy('regulation_title')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $regulations->setCollection(
                        //     $regulations->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->regulation_title);
                        //     return $row;
                        //         })
                        // );

                        $regulations->setCollection(
                            $regulations->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $regulations->setCollection(
                            $regulations->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );

        $constitutionals = ConstitutionalArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('constitutional_act','LIKE', "%$query%")
                        ->orderBy('constitutional_act')
                        ->orderBy('priority')
                        ->paginate(5);

                        $constitutionals->setCollection(
                            $constitutionals->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $constitutionals->setCollection(
                            $constitutionals->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );
                        
        $amends         = AmendedArticle::select('*')
                        ->where('section', 'LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('act_title','LIKE', "%$query%")
                        ->orderBy('act_title')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $amends->setCollection(
                        //     $amends->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->act_title);
                        //     return $row;
                        //         })
                        // );

                        $amends->setCollection(
                            $amends->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $amends->setCollection(
                            $amends->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );
                        
        $amends_regs    = AmendRegulationArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('title','LIKE', "%$query%")
                        ->orderBy('title')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $amends_regs->setCollection(
                        //     $amends_regs->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->title);
                        //     return $row;
                        //         })
                        // );

                        $amends_regs->setCollection(
                            $amends_regs->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $amends_regs->setCollection(
                            $amends_regs->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );

                        
                        $posts_count = Post1992Article::where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('post_act','LIKE', "%$query%")
                        ->count();
                        $regulations_count = RegulationArticle::where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('regulation_title','LIKE', "%$query%")
                        ->count();
                        $constitutional_count = ConstitutionalArticle::where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('constitutional_act','LIKE', "%$query%")
                        ->count();
                        $amends_count = AmendedArticle::where('section', 'LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('act_title','LIKE', "%$query%")
                        ->count();
                        $amends_regs_count    = AmendRegulationArticle::where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('title','LIKE', "%$query%")
                        ->count();
                        

        $total_posts_count    =  $posts_count + $regulations_count + $constitutional_count + $amends_count + $amends_regs_count;

        if(count($posts) > 0 or
          count($regulations) > 0 or
          count($constitutionals) > 0 or 
          count($amends) > 0 or 
          count($amends_regs) > 0 
          )
            return view('extenders.post_search_page_index',compact('posts_count','regulations_count','constitutional_count','amends_count','amends_regs_count','posts', 'total_posts_count','regulations','constitutionals', 'amends', 'amends_regs', 'query', 'footer_notes'));
        else
            return view ('extenders.post_search_page_not_found', compact('footer_notes', 'total_posts_count','posts_count','regulations_count','constitutional_count','amends_count','amends_regs_count','query'));

    }

    public function only_acts_of_parliament_search(Request $request){

        $footer_notes   = FooterNote::all();
        $query=request('search_text');

        $posts          = Post1992Article::select('*')
                        ->where('part', 'LIKE', "%$query%")
                        ->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('post_act','LIKE', "%$query%")
                        ->orderBy('post_act')
                        ->orderBy('priority')
                        ->get()
                        ->map(function ($row) use ($query) {
                            $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->post_act);
                            return $row;
                        })
                        ->map(function ($row2) use ($query) {
                            $row2->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->section);
                            return $row2;
                        })
                        ->map(function ($row) use ($query) {
                            $row->content   = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                        });

        $posts_count     = $posts->count();

        if
            (
            count($posts) > 0
            )                              
        return view('extenders.acts_of_parliament_search_page_index', compact('query','footer_notes','posts','posts_count'));
        else 
        return view ('extenders.acts_of_parliament_search_page_index_not_found', compact('query','footer_notes', 'posts_count'));

    }

    public function only_regulations_index_search(Request $request){

        $footer_notes   = FooterNote::all();
        $query=request('search_text');

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

        $regulations_count     = $regulations->count();

        if
            (
            count($regulations) > 0
            )                              
        return view('extenders.only_regulations_search_page_index', compact('query','footer_notes','regulations','regulations_count'));
        else 
        return view ('extenders.only_regulations_search_page_index_not_found', compact('query','footer_notes', 'regulations_count'));

    }

    public function only_constitutional_intruments_search(Request $request){

        $footer_notes   = FooterNote::all();
        $query=request('search_text');

        $constitutionals = ConstitutionalArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")
                        ->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('constitutional_act','LIKE', "%$query%")
                        ->orderBy('constitutional_act')
                        ->orderBy('priority')
                        ->get()
                        ->map(function ($row) use ($query) {
                            $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->constitutional_act);
                            return $row;
                        })
                        ->map(function ($row2) use ($query) {
                            $row2->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row2->section);
                            return $row2;
                        })
                        ->map(function ($row) use ($query) {
                            $row->content   = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                        });

        $constitutional_count     = $constitutionals->count();

        if
            (
            count($constitutionals) > 0
            )                              
        return view('extenders.constitutional_instruments_search_page_index', compact('query','footer_notes','constitutionals','constitutional_count'));
        else 
        return view ('extenders.constitutional_instruments_search_page_index_not_found', compact('query','footer_notes', 'constitutional_count'));

    }

    public function only_amendments_index_search(Request $request){

        $footer_notes   = FooterNote::all();
        $query=request('search_text');

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

        $amends_count     = $amends->count();
        $amends_regs_counts     = $amends_regs->count();
        $all_amends_counts = $amends_count + $amends_regs_counts;

        // dd($amends, $amends_regs);

        if
            (
            count($amends) > 0 or
            count($amends_regs)
            )                              
        return view('extenders.only_amendments_search_page_index', compact('query','footer_notes','all_amends_counts',
                                                                            'amends', 'amends_count','amends_regs','amends_regs_counts'));
        else 
        return view ('extenders.only_amendments_search_page_index_not_found', compact('query','footer_notes', 'all_amends_counts'));

    }



    public function acts_of_parliament_act_search(Request $request, $title, $id){
        // dd($id, $title);
        $footer_notes   = FooterNote::all();
        $query=request('search_text');

        $single_post_acts = DB::table('post1992_acts')
            ->leftJoin('post1992_articles', 'post1992_acts.title', '=', 'post1992_articles.post_act')
            ->where(['title' => $title])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $single_post_acts_count = $single_post_acts->count();

        if(count($single_post_acts) > 0)
            return view ('extenders.single_act_search_page_index', compact('query','single_post_acts','single_post_acts_count','footer_notes'));
        else
            return view ('extenders.single_act_search_page_not_found', compact('footer_notes', 'single_post_acts_count','query'));
    }

    public function constitutional_instruments_act_search(Request $request, $title, $id){
        // dd($title, $id);
        $footer_notes   = FooterNote::all();
        $query=request('search_text');

        $single_constitutional_instruments = DB::table('constitutional_acts')
            ->leftJoin('constitutional_articles', 'constitutional_acts.title', '=', 'constitutional_articles.constitutional_act')
            ->where(['title' => $title])
            ->where('content', 'LIKE', "%$query%")
            ->get()
            ->map(function ($row) use ($query) {
                $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                return $row;
                });
    
        $single_constitutional_instrument_count = $single_constitutional_instruments->count();

        if(count($single_constitutional_instruments) > 0)
            return view ('extenders.single_consti_instruments_search_page_index', compact('query','single_constitutional_instruments','single_constitutional_instrument_count','footer_notes'));
        else
            return view ('extenders.single_consti_instruments_search_page_not_found', compact('footer_notes', 'single_constitutional_instrument_count','query'));
    }


    // With Pagination
    public function acts_ajax_display(Request $request, $query){

        if($request->ajax()){
        // $query=request('search_text');
        $posts          = Post1992Article::select('*')
                        ->where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('post_act','LIKE', "%$query%")
                        ->orderBy('post_act')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $posts->setCollection(
                        //     $posts->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->post_act);
                        //     return $row;
                        //         })
                        // );

                        $posts->setCollection(
                            $posts->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $posts->setCollection(
                            $posts->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );

        $regulations    = RegulationArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('regulation_title','LIKE', "%$query%")
                        ->orderBy('regulation_title')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $regulations->setCollection(
                        //     $regulations->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->regulation_title);
                        //     return $row;
                        //         })
                        // );

                        $regulations->setCollection(
                            $regulations->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $regulations->setCollection(
                            $regulations->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );
                        
        $amends         = AmendedArticle::select('*')
                        ->where('section', 'LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('act_title','LIKE', "%$query%")
                        ->orderBy('act_title')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $amends->setCollection(
                        //     $amends->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->act_title);
                        //     return $row;
                        //         })
                        // );

                        $amends->setCollection(
                            $amends->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $amends->setCollection(
                            $amends->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );
                        
        $amends_regs    = AmendRegulationArticle::select('*')
                        ->where('part', 'LIKE', "%$query%")->orWhere('section','LIKE', "%$query%")->orWhere('content','LIKE', "%$query%")->orWhere('title','LIKE', "%$query%")
                        ->orderBy('title')
                        ->orderBy('priority')
                        ->paginate(5);

                        // $amends_regs->setCollection(
                        //     $amends_regs->getCollection()
                        //         ->map(function($row) use ($query)
                        //         {
                        //             $row->post_act = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->title);
                        //     return $row;
                        //         })
                        // );

                        $amends_regs->setCollection(
                            $amends_regs->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->section = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->section);
                            return $row;
                                })
                        );

                        $amends_regs->setCollection(
                            $amends_regs->getCollection()
                                ->map(function($row) use ($query)
                                {
                                    $row->content = preg_replace('/(' . $query . ')/i', "<b style='color:red;'>$1</b>", $row->content);
                            return $row;
                                })
                        );
            	
            return view('extenders.search_paginate', compact('posts','regulations', 'amends', 'amends_regs'))->render();
        }
    }

   
    
}
