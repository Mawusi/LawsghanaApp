<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992Act;
use App\Post1992Article;
use App\Post1992Category;
use App\AmendedTitle;
use App\AmendedArticle;
use App\RegulationTitle;
use App\RegulationArticle;
use App\AmendRegulationAct;
use App\AmendRegulationArticle;
use PDF;
use App\Post1992LegislationGroup;

class Post1992Controller extends Controller
{
    //Display all Acts
    public function index(){
        $allPost1992Acts        = Post1992Act::all();
        $allPostsAmends         = AmendedTitle::all();
        $allPostsAmendsOnRegulations = AmendRegulationAct::all();
        $allPostRegulations     = RegulationTitle::all();
        $allPost1992ategories   = Post1992Category::all();
        return view('post_1992_legislation.displayed_all_acts_view', compact('allPost1992Acts','allPost1992ategories','allPostsAmends', 'allPostRegulations', 'allPostsAmendsOnRegulations'));
    }

    //ALL POST 1992 LEGISLATION FILTERING
    public function all_post_1992_legislation_filter($year, $category){
        
        $bool = false;
        $where = array();
        
        if($year != "0"){   
            $where['year'] = $year;
            $bool = true;
        }
        if($category != "0"){   
            $where['post_category'] = $category;
            $bool = true;
        }

        $allPost1992Acts         = ($bool)?Post1992Act::where($where)->get():Post1992Act::all();
        $allPost1992ategories    = Post1992Category::all();
        return view('post_1992_legislation.displayed_all_acts_view', compact('allPost1992Acts','allPost1992ategories'));
    }

    //Display Table of Content
    public function post_1992_legislation_table_of_content($id, $title, $group){
        //dd($id, $title, $group);
        
        $allPost1992Act    = Post1992Act::find(
            [
                'id' => $id,
                'post_group' => $group

            ])->toArray()[0];

        $allPostArticles1      = Post1992Article::where(['post_act' => $title])->get();
        $unique               = $allPostArticles1->sortBy('part')->sortBy('priority');
        $allPost1992Articles   = $unique;

        //Amendments under an act
        $amendedcount             = AmendedTitle::where(['act_title' => "$title"])->count();
        $regulationcount          = RegulationTitle::where(['act_title' => "$title"])->count();

        return view('post_1992_legislation.displayed_act_table_of_content_view', compact('allPost1992Act', 'allPost1992Articles', 'amendedcount', 'regulationcount'));
    }

    //Display Preamble
    public function post_1992_legislation_preamble($id){
        $allPost1992Act = Post1992Act::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_preamble_view', compact('allPost1992Act'));   
     }

     //Display Content
     public function post_1992_legislation_content($id){
        $allPost1992Article = Post1992Article::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_content_view', compact('allPost1992Article'));
    }
    
    //Display Plain Content
     public function post_1992_legislation_plain_content($id){
        $allPost1992Article = Post1992Article::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_plain_content_view', compact('allPost1992Article'));
    }

    //Display pdf Content
    public function post_1992_legislation_pdf_content($id){
        $allPost1992Article = Post1992Article::find(['id' => $id])->toArray()[0];
        $pdf = PDF::loadView('post_1992_legislation.displayed_pdf_content_view', compact('allPost1992Article'));
        return $pdf->download('Financial_Administration_Act.pdf');
    }

    //Display print section Content
    public function post_1992_legislation_print_content($id){
        $allPost1992Article = Post1992Article::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_print_content_view', compact('allPost1992Article'));
    }

    //Display Expanded-View
    public function expanded_view($id, $title, $group){
        $allPost1992Act              = Post1992Act::find(
            [
                'id' => $id,
                'post_group' => $group
            ])->toArray()[0];
            
        $allPostArticles1            = Post1992Article::where(['post_act' => $title])->get();
        $unique                     = $allPostArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $allPost1992Articles         = $unique;
        return view('post_1992_legislation.displayed_expandedView', compact('allPost1992Act','allPost1992Articles'));
    }

     //Display Plain-View
    public function plain_view($id, $title, $group){
        $allPost1992Act              = Post1992Act::find(
            [
                'id' => $id,
                'post_group' => $group
            ])->toArray()[0];
            
        $allPostArticles1            = Post1992Article::where(['post_act' => $title])->get();
        $unique                     = $allPostArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $allPost1992Articles         = $unique;
        return view('post_1992_legislation.displayed_plainView', compact('allPost1992Act','allPost1992Articles'));
    }

    //Display Print View for Expanded view
    public function print_view($id, $title, $group){
        $allPost1992Act              = Post1992Act::find(
            [
                'id' => $id,
                'post_group' => $group
            ])->toArray()[0];
            
        $allPostArticles1            = Post1992Article::where(['post_act' => $title])->get();
        $unique                     = $allPostArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $allPost1992Articles         = $unique;
        return view('post_1992_legislation.displayed_printView', compact('allPost1992Act','allPost1992Articles'));
    }

    //Display Print View for Expanded view
    public function pdf_view($id, $title, $group){
        $allPost1992Act              = Post1992Act::find(
            [
                'id' => $id,
                'post_group' => $group
            ])->toArray()[0];
            
        $allPostArticles1            = Post1992Article::where(['post_act' => $title])->get();
        $unique                     = $allPostArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $allPost1992Articles         = $unique;
        $pdf = PDF::loadView('post_1992_legislation.displayed_pdfView', compact('allPost1992Act','allPost1992Articles'));
        return $pdf->download('Financial_Administration_Act.pdf');
    }

    //Display Acts of Parliament
    public function acts_of_parliament($group){
        $actsOfParliaments         = Post1992Act::where(['post_group' => $group])->get();
        $actsOfParliamentCategories   = Post1992Category::all();
        return view('post_1992_legislation.displayed_acts_of_parliament_view', compact('actsOfParliaments', 'actsOfParliamentCategories'));
    }

                        //ALL AMENDMENTS FOR A SPECIFIC ACT

                        //Display Amended Act table of content
                        public function amended_act_table_of_content($id, $title, $category){
                            $amendedAct             = AmendedTitle::find(
                                [
                                    'id' => $id,
                                    'post_category' => $category
                                ])->toArray()[0];

                            $amendedContents1       = AmendedArticle::where(['act_title' => $title])->get();  
                            $unique                 = $amendedContents1->sortBy('part')->sortBy('priority');
                            $amendedContents        = $unique;
                            return view('post_1992_legislation.displayed_amended_act_table_of_content', compact('amendedAct','amendedContents'));
                        }

                        //Display All amendments under an act
                        public function all_amendedments_for_an_acts($id, $title, $group){
                            $allPost1992Act              = Post1992Act::find(
                                [
                                    'id' => $id,
                                    'post_group' => $group
                                ])->toArray()[0];

                            $amendedActs                 = AmendedTitle::where(['act_title' => $title])->get();

                            return view('post_1992_legislation.displayed_all_amended_titles', compact('allPost1992Act','amendedActs'));
                        }

                        //Display Amended Act preamble
                        public function amended_act_preamble($id){
                            $amendedPreamble = AmendedTitle::find(['id' => $id])->toArray()[0];
                            return view('post_1992_legislation.displayed_amended_act_preamble', compact('amendedPreamble'));
                        }

                        //Display Amended Act content
                        public function amended_act_content($id){
                            $amendedContent = AmendedArticle::find(['id' => $id])->toArray()[0];
                            return view('post_1992_legislation.displayed_amended_act_content', compact('amendedContent'));
                        }

                        //Display Amended section container
                        public function display_amended_sections_container($title){
                            $amendedContents1       = AmendedArticle::where(['act_title' => $title])->get();
                            $unique                 = $amendedContents1->sortBy('part')->sortBy('priority');
                            $amendedContents        = $unique;
                            return view('post_1992_legislation.displayed_amended_sections_container', compact('amendedContents'));
                        }


                        //ALL REGULATIONS FOR A SPECIFIC ACT

                        //Display All amendments under an act
                        public function all_regulations_for_an_act($id, $title, $group){
                            $allPost1992Act              = Post1992Act::find(
                                [
                                    'id' => $id,
                                    'post_group' => $group
                                ])->toArray()[0];

                            $regulationsActs                 = RegulationTitle::where(['act_title' => $title])->get();
                            return view('post_1992_legislation.displayed_all_regulations_titles', compact('allPost1992Act','regulationsActs'));
                        }

                        //Display Regulations table of content
                        public function regulations_table_of_content($id, $title, $category){
                            $regulationsAct             = RegulationTitle::find(
                                [
                                    'id' => $id,
                                    'act_category' => $category
                                ])->toArray()[0];

                            $regulationsContents1   = RegulationArticle::where(['regulation_title' => $title])->get();  
                            $unique                 = $regulationsContents1->sortBy('part')->sortBy('priority');
                            $regulationsContents        = $unique;
                            return view('post_1992_legislation.displayed_regulations_table_of_content', compact('regulationsAct','regulationsContents'));
                        }

                        //Display Amended Act preamble
                        public function regulations_preamble($id){
                            $regulationsPreamble = RegulationTitle::find(['id' => $id])->toArray()[0];
                            return view('post_1992_legislation.displayed_regulations_preamble', compact('regulationsPreamble'));
                        }

                        //Display Amended Act content
                        public function regulations_content($id){
                            $regulationContent = RegulationArticle::find(['id' => $id])->toArray()[0];
                            return view('post_1992_legislation.displayed_regulations_content', compact('regulationContent'));
                        }

                        //Display regulations section container
                        public function display_regulations_sections_container($title){
                            $regulationsContents1       = RegulationArticle::where(['regulation_title' => $title])->get();
                            $unique                 = $regulationsContents1->sortBy('part')->sortBy('priority');
                            $regulationsContents        = $unique;
                            return view('post_1992_legislation.displayed_regulations_sections_container', compact('regulationsContents'));
                        }

                       


     //ACTS OF PARLIAMENT FILTERING
     public function acts_of_parliament_filter($year, $category){

        $name = "Acts of Parliament";
        $bool = false;
        $where = array();

        if($year != "0"){   
           $where['year'] = $year;
           $bool = true;
       }
       if($category != "0"){   
           $where['post_category'] = $category;
           $bool = true;
       }

        $actsOfParliaments       = ($bool)?Post1992Act::where($where)->where(['post_group' => $name])->get():Pre1992LegislationAct::all();
        $actsOfParliamentCategories   = Post1992Category::all();
        return view('post_1992_legislation.displayed_acts_of_parliament_view', compact('actsOfParliaments', 'actsOfParliamentCategories'));
    }









    //Display Legislative Instruments
    // public function legislative_instruments($group){
    //     $legislativeInstruments         = Post1992Act::where(['post_group' => $group])->get();
    //     $legislativeInstrumentsCategories   = Post1992Category::all();
    //     return view('post_1992_legislation.displayed_legislative_instruments_view', compact('legislativeInstruments', 'legislativeInstrumentsCategories'));
    // }

    //LEGISLATIVE INSTRUMENT FILTERING
    // public function legislative_instrument_filter($year, $category){

    //     $name = "Legislative Instruments";
    //     $bool = false;
    //     $where = array();

    //     if($year != "0"){   
    //       $where['year'] = $year;
    //       $bool = true;
    //   }
    //   if($category != "0"){   
    //       $where['post_category'] = $category;
    //       $bool = true;
    //   }

    //     $legislativeInstruments       = ($bool)?Post1992Act::where($where)->where(['post_group' => $name])->get():Pre1992LegislationAct::all();
    //     $legislativeInstrumentsCategories   = Post1992Category::all();
    //     return view('post_1992_legislation.displayed_legislative_instruments_view', compact('legislativeInstruments', 'legislativeInstrumentsCategories'));
    // }







    //------------------------------------------------------------------------------------------------------------------------------

                                                                // FOR  ACTS AMENDMENTS

    //NEW DISPLAY OF AMENDMENTS UNDER ALL POST-LEGISLATION--------------------------------------------------------------------------
    //Amendment Act Table of Content
    public function amended_acts_display_table_of_content($id, $title, $category){
        $amendedAct             = AmendedTitle::find(
            [
                'id' => $id,
                'post_category' => $category
            ])->toArray()[0];

        $allAmendedArticles1      = AmendedArticle::where(['act_title' => $title])->get();
        $unique               = $allAmendedArticles1->sortBy('part')->sortBy('priority');
        $allAmendedArticles   = $unique;

        return view('post_1992_legislation.displayed_amended_table_of_content_view', compact('amendedAct', 'allAmendedArticles'));
    }

    //Amendment Act Preamble
    public function amended_acts_preamble($id){
        $amendedAct = AmendedTitle::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_amended_preamble', compact('amendedAct'));
    }

    //Amendment Act Content
    public function amended_acts_content($id){
        $amendedAct = AmendedArticle::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_amended_content', compact('amendedAct'));
    }
    
    //Amendment Act Expanded-View
    public function amended_act_expanded_view($id, $title, $category){
        $amendedAct                 = AmendedTitle::find(
            [
                'id' => $id,
                'post_category' =>$category
            ])->toArray()[0];

        $allAmendedArticles1        = AmendedArticle::where(['act_title' => $title])->get();
        $unique                     = $allAmendedArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $allAmendedArticles         = $unique;
        return view('post_1992_legislation.displayed_amended_act_expanded_view', compact('amendedAct','allAmendedArticles'));
    }

    //FOR AMENDMENTS TAB ONLY
    //Display all Amended Acts only 

    public function only_amendments_acts_tab(){
        $allAmendments         = AmendedTitle::all();
        $allAmendmentsForRegulations = AmendRegulationAct::all();
        // $allPost1992ategories   = Post1992Category::all();
        return view('post_1992_legislation.displayed_all_amendments_only', compact('allAmendments', 'allAmendmentsForRegulations'));
    }

    //------------------------------------------------------------------------------------------------------------------------------

                                                                // FOR  REGULATIONS AMENDMENTS

    //NEW DISPLAY OF AMENDMENTS UNDER ALL POST-LEGISLATION--------------------------------------------------------------------------
    //Amendment Act Table of Content
    public function amended_regulation_display_table_of_content($id, $title, $category){
        $amendedRegulationAct             = AmendRegulationAct::find(
            [
                'id' => $id,
                'act_category' => $category
            ])->toArray()[0];

        $allAmendedRegulationArticles1      = AmendRegulationArticle::where(['title' => $title])->get();
        $unique               = $allAmendedRegulationArticles1->sortBy('part')->sortBy('priority');
        $allAmendedRegulationArticles   = $unique;

        return view('post_1992_legislation.displayed_amended_regulation_table_of_content_view', compact('amendedRegulationAct', 'allAmendedRegulationArticles'));
    }

     //Amendment Act Preamble
     public function amended_regulation_acts_preamble($id){
        $amendedRegulationAct = AmendRegulationAct::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_amended_regulation_preamble', compact('amendedRegulationAct'));
    }

    //Amendment Act Content
    public function amended_regulation_acts_content($id){
        $amendedRegulationArticle = AmendRegulationArticle::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_amended_regulation_content', compact('amendedRegulationArticle'));
    }

    //Amendment Act Expanded-View
    public function amended_regulation_act_expanded_view($id, $title, $category){
        $amendedRegulationAct                 = AmendRegulationAct::find(
            [
                'id' => $id,
                'act_category' =>$category
            ])->toArray()[0];

        $allAmendedRegulationArticles1        = AmendRegulationArticle::where(['title' => $title])->get();
        $unique                               = $allAmendedRegulationArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $allAmendedRegulationArticles         = $unique;
        return view('post_1992_legislation.displayed_amended_regulation_act_expanded_view', compact('amendedRegulationAct','allAmendedRegulationArticles'));
    }


    //---------------------------------------------------------------------------------------------------------------------------


                                                                //FOR REGULATION
    //---------------------------------------------------------------------------------------------------------------------------
    //NEW DISPLAY OF REGULATIONS UNDER ALL POST-LEGISLATION
    //Regulation Act Table of Content
    public function regulation_acts_display_table_of_content($id, $title, $category){
        $regulationAct             = RegulationTitle::find(
            [
                'id' => $id,
                'act_category' => $category
            ])->toArray()[0];

        $allRegulationArticles1      = RegulationArticle::where(['regulation_title' => $title])->get();
        $unique                      = $allRegulationArticles1->sortBy('part')->sortBy('priority');
        $allRegulationArticles       = $unique;

        //All Amendments on Regulation
        $amendedregulationcount             = AmendRegulationAct::where(['regulation_title' => "$title"])->count();


        return view('post_1992_legislation.displayed_regulation_table_of_content_view', compact('regulationAct', 'allRegulationArticles', 'amendedregulationcount'));
    }

    //Regulation Act Preamble
    public function regulation_acts_preamble($id){
        $regulationAct = RegulationTitle::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_regulation_preamble', compact('regulationAct'));
    }

    //Regulation Act Content
    public function regulation_acts_content($id){
        $regulationAct = RegulationArticle::find(['id' => $id])->toArray()[0];
        return view('post_1992_legislation.displayed_regulation_act_content', compact('regulationAct'));
    }

    //Regulation Act Expanded-View
    public function regulation_act_expanded_view($id, $title, $category){
        $regulationAct                 = RegulationTitle::find(
            [
                'id' => $id,
                'act_category' =>$category
            ])->toArray()[0];

        $allRegulationArticles1        = RegulationArticle::where(['regulation_title' => $title])->get();
        $unique                     = $allRegulationArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $allRegulationArticles         = $unique;
        return view('post_1992_legislation.displayed_regulation_act_expanded_view', compact('regulationAct','allRegulationArticles'));
    }




    //FOR REGULATION TAB ONLY
    //Display all Regulation Acts only 

    public function only_regulations_acts_tab(){
        $allRegulations         = RegulationTitle::all();
        // $allPost1992ategories   = Post1992Category::all();
        return view('post_1992_legislation.displayed_all_regulations_only', compact('allRegulations'));
    }

                    //-----------------------------------------------DISPLAY AMENDMENTS UNDER A REGULATIOIN---------------------------------
                    //----------------------------------------------------------------------------------------------------------------------
                    //Display All amendments under a regulation
                    public function all_amendedments_for_a_regulation($id, $title, $category){
                        $allRegulation              = RegulationTitle::find(
                            [
                                'id' => $id,
                                'act_category' => $category
                            ])->toArray()[0];

                        $amendedRegulationActs      = AmendRegulationAct::where(['regulation_title' => $title])->get();

                        return view('post_1992_legislation.displayed_all_amended_regulation_titles', compact('allRegulation','amendedRegulationActs'));
                    }

                    // //Display Amended Regulation Act table of content
                    public function amended_regulation_act_table_of_content($id, $title, $category){
                        $amendedRegulationAct             = AmendRegulationAct::find(
                            [
                                'id' => $id,
                                'act_category' => $category
                            ])->toArray()[0];

                        $amendedRegulationContents1       = AmendRegulationArticle::where(['title' => $title])->get();  
                        $unique                 = $amendedRegulationContents1->sortBy('part')->sortBy('priority');
                        $amendedRegulationContents        = $unique;
                        return view('post_1992_legislation.displayed_amended_regulation_act_table_of_content', compact('amendedRegulationAct','amendedRegulationContents'));
                    }

                    //Display Amended Regulation section container
                    public function display_amended_regulation_sections_container($title){
                        $amendedRegulationContents1       = AmendRegulationArticle::where(['title' => $title])->get();
                        $unique                 = $amendedRegulationContents1->sortBy('part')->sortBy('priority');
                        $amendedRegulationContents        = $unique;
                        return view('post_1992_legislation.displayed_amended_regulation_sections_container', compact('amendedRegulationContents'));
                    }

                    //Display Amended Regulation Act content
                    public function amended_act_regulation_content($id){
                        $amendedRegulationContent = AmendRegulationArticle::find(['id' => $id])->toArray()[0];
                        return view('post_1992_legislation.displayed_amended_regulation_act_content', compact('amendedRegulationContent'));
                    }

                    //Display Amended Act preamble
                    public function amended_regulation_act_preamble($id){
                        $amendedRegulationPreamble = AmendRegulationAct::find(['id' => $id])->toArray()[0];
                        return view('post_1992_legislation.displayed_amended_regulation_act_preamble', compact('amendedRegulationPreamble'));
                    }
    //-----------------------------------------------------------------------------------------------------------------------------------------

     //Display All amendments under an act
    //  public function all_amendedments_for_an_acts($id, $title, $group){
    //     $allPost1992Act              = Post1992Act::find(
    //         [
    //             'id' => $id,
    //             'post_group' => $group
    //         ])->toArray()[0];

    //     $amendedActs                 = AmendedTitle::where(['act_title' => $title])->get();

    //     return view('post_1992_legislation.displayed_all_amended_titles', compact('allPost1992Act','amendedActs'));
    // }































    //NOT IN USE
    //Display Amendments
    // public function amended_acts($group){
    //     $amendedActs         = Post1992Act::where(['post_group' => $group])->get();
    //     $amendedActsCategories   = Post1992Category::all();
    //     return view('post_1992_legislation.displayed_amended_acts_view', compact('amendedActs', 'amendedActsCategories'));
    // }

    //AMENDMENTS FILTERING
    // public function amendments_filter($year, $category){

    //     $name = "Amended Acts";
    //     $bool = false;
    //     $where = array();

    //     if($year != "0"){   
    //        $where['year'] = $year;
    //        $bool = true;
    //    }
    //    if($category != "0"){   
    //        $where['post_category'] = $category;
    //        $bool = true;
    //    }

    //     $amendedActs       = ($bool)?Post1992Act::where($where)->where(['post_group' => $name])->get():Pre1992LegislationAct::all();
    //     $amendedActsCategories   = Post1992Category::all();
    //     return view('post_1992_legislation.displayed_amended_acts_view', compact('amendedActs', 'amendedActsCategories'));
    // }





    //MADE ONLINE CHANGES
    //Amendment Table of Content
    // public function general_display_table_of_content($id, $title, $group){
    //     $allPost1992Act    = Post1992Act::find(
    //         [
    //             'id' => $id,
    //             'post_group' => $group
    //         ])->toArray()[0];

    //     $allPostArticles1      = Post1992Article::where(['post_act' => $title])->get();
    //     $unique               = $allPostArticles1->sortBy('part')->sortBy('priority');
    //     $allPost1992Articles   = $unique;

    //     return view('post_1992_legislation.displayed_general_table_of_content_view', compact('allPost1992Act', 'allPost1992Articles'));
    // }

    //MADE ONLINE CHANGES
    //Regulation Table of Content
    // public function regulation_display_table_of_content($id, $title, $group){
    //     $allPost1992Act    = Post1992Act::find(
    //         [
    //             'id' => $id,
    //             'post_group' => $group
    //         ])->toArray()[0];

    //     $allPostArticles1      = Post1992Article::where(['post_act' => $title])->get();
    //     $unique               = $allPostArticles1->sortBy('part')->sortBy('priority');
    //     $allPost1992Articles   = $unique;

    //     return view('post_1992_legislation.regulation_general_table_of_content_view', compact('allPost1992Act', 'allPost1992Articles'));
    // }
}