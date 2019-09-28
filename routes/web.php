<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/customer/print-pdf', [ 'as' => 'customer.printpdf, 'uses' => 'CustomerController@printPDF']);
//<a href="{{route('customer.printpdf')}}">Print PDF</a>

//WELCOME PAGE
Route::get('/','WelcomePageController@index');

//CONSTITUTION

    //All Countries Constitution
    Route::get('/constitution/all_countries','ConstitutionController@all_countries_constitution');//display all countries constitution
        Route::get('/constitution/filter/{year}/{country}','ConstitutionController@all_countries_constitution_filter'); //all constitution filtering
        Route::get('/constitution/{country}/{id}','ConstitutionController@display_country_constitution');
        Route::get('/constitution/print/content/{id}','ConstitutionController@print_constitution_content');//display plain act content
        Route::get('/constitution/plain/content/{id}','ConstitutionController@plain_constitution_content');//display plain act content
        Route::get('/constitution/pdf/content/{title}/{id}','ConstitutionController@pdf_constitution_content');//display plain act content


        //AFRICA
        Route::get('/constitution/all-countries/1/{continent}','ConstitutionController@africa_constitution');
            Route::get('/constitution/1/africa/filter/{year}/{country}','ConstitutionController@africa_constitution_filter'); //africa filtering

        //ASIA
        Route::get('/constitution/all-countries/2/{continent}','ConstitutionController@asia_constitution');
            Route::get('/constitution/2/asia/filter/{year}/{country}','ConstitutionController@asia_constitution_filter'); //asia filtering

        //EUROPE
        Route::get('/constitution/all-countries/3/{continent}','ConstitutionController@europe_constitution');
            Route::get('/constitution/3/europe/filter/{year}/{country}','ConstitutionController@europe_constitution_filter'); //europe filtering

        //NORTH AMERICA
        Route::get('/constitution/all-countries/4/{continent}','ConstitutionController@north_america_constitution');
            Route::get('/constitution/4/north_america/filter/{year}/{country}','ConstitutionController@north_america_constitution_filter'); //north-america filtering

        //SOUTH AMERICA
        Route::get('/constitution/all-countries/5/{continent}','ConstitutionController@south_america_constitution');
            Route::get('/constitution/5/south_america/filter/{year}/{country}','ConstitutionController@south_america_constitution_filter'); //south-america filtering

    // Ghana Constitution
    Route::get('/constitution/Republic/Ghana/{id}', 'ConstitutionController@ghana_constitution_table');
        Route::get('/constitution/Republic/constitution_preamble/{id}','ConstitutionController@ghana_constitution_preamble');
        Route::get('/constitution/Republic/constitution_content/{id}','ConstitutionController@ghana_constitution_content');
        Route::get('/constitution/Republic/plain_content/{id}','ConstitutionController@ghana_constitution_content_plain_view');
        Route::get('/constitution/Republic/expanded_view/{id}','ConstitutionController@ghana_expanded_view');
        Route::get('/constitution/Republic/plain_view/{id}','ConstitutionController@ghana_plain_view');

        Route::get('/constitution/Republic/print_preamble_content/{id}','ConstitutionController@print_preamble_content');//display plain act content
        Route::get('/constitution/Republic/print_article_content/{id}','ConstitutionController@print_article_content');//display plain act content
        Route::get('/constitution/Republic/{group}/{title}/print_view/{id}','ConstitutionController@print_expanded_article_content');//display in print view

        Route::get('/constitution/Republic/plain_preamble_content/{id}','ConstitutionController@plain_preamble_content');//display plain act content
        Route::get('/constitution/Republic/plain_article_content/{id}','ConstitutionController@plain_article_content');//display plain act content
        Route::get('/constitution/Republic/{group}/{title}/plain_view/{id}','ConstitutionController@plain_expanded_article_content');//display in print view

        Route::get('/constitution/Republic/pdf_preamble_content/{title}/{id}','ConstitutionController@pdf_preamble_content');//display plain act content
        Route::get('/constitution/Republic/pdf_article_content/{title}/{id}','ConstitutionController@pdf_article_content');//display plain act content
        Route::get('/constitution/Republic/{group}/{title}/pdf_view/{id}','ConstitutionController@pdf_expanded_article_content');//display in print view


    // Ghana Constitution(Amended)
    Route::get('/constitution_amended/Republic/Ghana/{id}', 'ConstitutionController@ghana_constitution_table_amended');
    Route::get('/constitution_amended/Republic/constitution_preamble/{id}','ConstitutionController@ghana_constitution_preamble_amended');
    Route::get('/constitution_amended/Republic/constitution_content/{id}','ConstitutionController@ghana_constitution_content_amended');
    Route::get('/constitution_amended/Republic/expanded_view/{id}','ConstitutionController@ghana_expanded_view_amended');

        Route::get('/constitution_amended/Republic/print_preamble_content/{id}','ConstitutionController@print_preamble_content_amended');//display plain act content
        Route::get('/constitution_amended/Republic/print_article_content/{id}','ConstitutionController@print_article_content_amended');//display plain act content
        Route::get('/constitution_amended/Republic/print/expanded_content/{group}/{title}/{id}','ConstitutionController@print_expanded_article_content_amended');//display in print view


        Route::get('/constitution_amended/Republic/plain_preamble_content/{id}','ConstitutionController@plain_preamble_content_amended');//display plain act content
        Route::get('/constitution_amended/Republic/plain_article_content/{id}','ConstitutionController@plain_article_content_amended');//display plain act content
        Route::get('/constitution_amended/Republic/plain/expanded_content/{group}/{title}/{id}','ConstitutionController@plain_expanded_article_content_amended');//display in print view

        Route::get('/constitution_amended/Republic/pdf_preamble_content/{title}/{id}','ConstitutionController@pdf_preamble_content_amended');//display plain act content
        Route::get('/constitution_amended/Republic/pdf_article_content/{title}/{id}','ConstitutionController@pdf_article_content_amended');//display plain act content
        Route::get('/constitution_amended/Republic/pdf/expanded_content/{group}/{title}/{id}','ConstitutionController@pdf_expanded_article_content_amended');//display in print view


//PRE_1992_LEGISLATION
Route::get('/pre_1992_legislation','Pre1992Controller@index');//display all acts
    Route::get('/pre_1992_legislation/filter/{year}/{category}','Pre1992Controller@all_pre_1992_legislation_filter'); //all pre-1992 filtering
    Route::get('/pre_1992_legislation/{group}/{title}/{id}','Pre1992Controller@pre_1992_legislation_table_of_content');//display acts table of content
    Route::get('/pre_1992_legislation/preamble/{id}','Pre1992Controller@pre_1992_legislation_preamble');//display act preamble
    Route::get('/pre_1992_legislation/content/{id}','Pre1992Controller@pre_1992_legislation_content');//display act content
    Route::get('/pre_1992_legislation/1/{group}/{title}/expanded-view/{id}','Pre1992Controller@expanded_view');//display in expanded view

    Route::get('/pre_1992_legislation/print_preamble_content/{id}','Pre1992Controller@pre_1992_legislation_print_preamble_content');//display plain act content
    Route::get('/pre_1992_legislation/print_section_content/{id}','Pre1992Controller@pre_1992_legislation_print_content');//display plain act content
    Route::get('/pre_1992_legislation/1/{group}/{title}/print_view/{id}','Pre1992Controller@pre_1992_legislation_print_expanded_content');//display in print view

    Route::get('/pre_1992_legislation/plain_preamble_content/{id}','Pre1992Controller@pre_1992_legislation_plain_preamble_content');//display plain act content
    Route::get('/pre_1992_legislation/plain_content/{id}','Pre1992Controller@pre_1992_legislation_plain_content');//display plain act content
    Route::get('/pre_1992_legislation/1/{group}/{title}/plain_view/{id}','Pre1992Controller@pre_1992_legislation_plain_expanded_content');//display in plain view


    Route::get('/pre_1992_legislation/pdf/preamble_content/{title}/{id}','Pre1992Controller@pre_1992_legislation_pdf_preamble_content');//display plain act content
    Route::get('/pre_1992_legislation/pdf/content/{title}/{id}','Pre1992Controller@pre_1992_legislation_pdf_content');//display plain act content
    Route::get('/pre_1992_legislation/1/{group}/{title}/pdf_view/{id}','Pre1992Controller@pre_1992_legislation_pdf_expanded_content');//display in plain view



    //First Republic
    Route::get('/pre_1992_legislation/1/{group}','Pre1992Controller@first_republic');
        Route::get('/pre_1992_legislation/1/filter/{year}/{category}','Pre1992Controller@first_republic_filter'); //first republic filtering

    //Second Republic
    Route::get('/pre_1992_legislation/2/{group}','Pre1992Controller@second_republic');
        Route::get('/pre_1992_legislation/2/filter/{year}/{category}','Pre1992Controller@second_republic_filter'); //second republic filtering

    //Third Republic
    Route::get('/pre_1992_legislation/3/{group}','Pre1992Controller@third_republic');
        Route::get('/pre_1992_legislation/3/filter/{year}/{category}','Pre1992Controller@third_republic_filter'); //third republic filtering

    //PNDC Law
    Route::get('/pre_1992_legislation/4/{group}','Pre1992Controller@pndc_law');
        Route::get('/pre_1992_legislation/4/filter/{year}/{category}','Pre1992Controller@pndc_law_filter'); //pndc filtering

    //NLC Decree
    Route::get('/pre_1992_legislation/5/{group}','Pre1992Controller@nlc_decree');
        Route::get('/pre_1992_legislation/5/filter/{year}/{category}','Pre1992Controller@nlc_decree_filter'); //nlc filtering

    //NRC Decree
    Route::get('/pre_1992_legislation/6/{group}','Pre1992Controller@nrc_decree');
        Route::get('/pre_1992_legislation/6/filter/{year}/{category}','Pre1992Controller@nrc_decree_filter'); //nrc filtering

    //SMC Decree
    Route::get('/pre_1992_legislation/7/{group}','Pre1992Controller@smc_decree');
        Route::get('/pre_1992_legislation/7/filter/{year}/{category}','Pre1992Controller@smc_decree_filter'); //smc filtering
        
    //AFRC Decree
    Route::get('/pre_1992_legislation/8/{group}','Pre1992Controller@afrc_decree');
        // Route::get('/pre_1992_legislation/7/filter/{year}/{category}','Pre1992Controller@smc_decree_filter'); //smc filtering

//POST_1992_LEGISLATION
//For all Post Legislation
Route::get('/post_1992_legislation','Post1992Controller@index');//display all acts
    Route::get('/post_1992_legislation/filter/{year}/{category}','Post1992Controller@all_post_1992_legislation_filter'); //all post-1992 filtering
    Route::get('/post_1992_legislation/preamble/{id}','Post1992Controller@post_1992_legislation_preamble');//display act preamble
    Route::get('/post_1992_legislation/content/{id}','Post1992Controller@post_1992_legislation_content');//display act content
    Route::get('/post_1992_legislation/plain_content/{id}','Post1992Controller@post_1992_legislation_plain_content');//display plain act content
    Route::get('/post_1992_legislation/plain_preamble_content/{id}','Post1992Controller@post_1992_legislation_plain_preamble_content');//display plain act content
    Route::get('/post_1992_legislation/1/{group}/{title}/expanded-view/{id}','Post1992Controller@expanded_view');//display in expanded view

    
    Route::get('/post_1992_legislation/pdf_content/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_content');//display plain act content
    Route::get('/post_1992_legislation/pdf_preamble_content/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_preamble_content');//display plain act content
    Route::get('/post_1992_legislation/print_section_content/{id}','Post1992Controller@post_1992_legislation_print_content');//display plain act content
    Route::get('/post_1992_legislation/print_preamble_content/{id}','Post1992Controller@post_1992_legislation_print_preamble_content');//display plain act content




    Route::get('/post_1992_legislation/1/{group}/{title}/plain_view/{id}','Post1992Controller@plain_view');//display in plain view
    Route::get('/post_1992_legislation/1/{group}/{title}/pdf_view/{id}','Post1992Controller@pdf_view');//display in plain view
    Route::get('/post_1992_legislation/1/{group}/{title}/print_view/{id}','Post1992Controller@print_view');//display in print view

    Route::get('/post_1992_legislation/acts_table_of_content/{group}/{title}/{id}','Post1992Controller@post_1992_legislation_table_of_content');//display acts table of content


    //For All Acts of Parliament only
    Route::get('/post_1992_legislation/1/{group}','Post1992Controller@acts_of_parliament');
    Route::get('/post_1992_legislation/1/filter/{year}/{category}','Post1992Controller@acts_of_parliament_filter'); //acts of parliament filtering



        //--------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            // FOR ACTS AMENDMENTS 
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------
        //New Amendments for an act: Amendments in all Post-Legislation
        Route::get('/post_1992_legislation/amended_acts_table_of_content/{category}/{title}/{id}','Post1992Controller@amended_acts_display_table_of_content');//display amended acts table of content
        Route::get('/post_1992_legislation/amended_acts/preamble/{id}','Post1992Controller@amended_acts_preamble');//display amended act preamble
        Route::get('/post_1992_legislation/amended_acts/content/{id}','Post1992Controller@amended_acts_content');//display amended act content
        Route::get('/post_1992_legislation/amended_acts/expanded_view/{category}/{title}/{id}','Post1992Controller@amended_act_expanded_view');//display amended acts in expanded view

        
        //New Amendments for only Amendments Tab
        //For All Amendments only
        Route::get('/post_1992_legislation/only_amendments','Post1992Controller@only_amendments_acts_tab');
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            // FOR REGULATION AMENDMENTS 
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------
        //New Amendments for an act: Amendments in all Post-Legislation
        Route::get('/post_1992_legislation/amended_regulation_acts_table_of_content/{category}/{title}/{id}','Post1992Controller@amended_regulation_display_table_of_content');//display amended regulation table of content
        Route::get('/post_1992_legislation/amended_regulation_acts/preamble/{id}','Post1992Controller@amended_regulation_acts_preamble');//display amended regulation act preamble
        Route::get('/post_1992_legislation/amended_regulation_acts/content/{id}','Post1992Controller@amended_regulation_acts_content');//display amended regulation act content
        Route::get('/post_1992_legislation/amended_regulation_acts/expanded_view/{category}/{title}/{id}','Post1992Controller@amended_regulation_act_expanded_view');//display amended acts in expanded view

        //New Amendments for only Amendments Tab
        //For All Amendments only
        // Route::get('/post_1992_legislation/only_amendments','Post1992Controller@only_amendments_acts_tab');
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            // FOR REGULATIONS
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------
         //New Regulations for an act: Regulations in all Post-Legislation
         Route::get('/post_1992_legislation/regulation_acts_table_of_content/{category}/{title}/{id}','Post1992Controller@regulation_acts_display_table_of_content');//display regulation acts table of content
         Route::get('/post_1992_legislation/regulation/preamble/{id}','Post1992Controller@regulation_acts_preamble');//display regulation act preamble
         Route::get('/post_1992_legislation/regulation_act/content/{id}','Post1992Controller@regulation_acts_content');//display regulation act content
         Route::get('/post_1992_legislation/regulation/expanded_view/{category}/{title}/{id}','Post1992Controller@regulation_act_expanded_view');//display regulation acts in expanded view
 
         //New Regulations for only Regulations Tab
         //For All Regulations only
         Route::get('/post_1992_legislation/only_regulations','Post1992Controller@only_regulations_acts_tab');

            Route::get('/post_1992_legislation/print/regulation/preamble/{id}','Post1992Controller@post_1992_legislation_print_regulation_preamble');//display plain act content
            Route::get('/post_1992_legislation/print/regulation/content_section/{id}','Post1992Controller@post_1992_legislation_print_regulation_content_section');//display plain act content
            Route::get('/post_1992_legislation/print/regulation/expanded/{category}/{title}/{id}','Post1992Controller@post_1992_legislation_print_regulation_expanded');//display in print view


            Route::get('/post_1992_legislation/plain/regulation/preamble/{id}','Post1992Controller@post_1992_legislation_plain_regulation_preamble');//display plain act content
            Route::get('/post_1992_legislation/plain/regulation/content_section/{id}','Post1992Controller@post_1992_legislation_plain_regulation_content_section');//display plain act content
            Route::get('/post_1992_legislation/plain/regulation/expanded/{category}/{title}/{id}','Post1992Controller@post_1992_legislation_plain_regulation_expanded');//display in print view

            Route::get('/post_1992_legislation/pdf/regulation/preamble/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_regulation_preamble');//display plain act content
            Route::get('/post_1992_legislation/pdf/regulation/content_section/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_regulation_content_section');//display plain act content
            Route::get('/post_1992_legislation/pdf/regulation/expanded/{category}/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_regulation_expanded');//display in print view

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            //FOR AMENDMENTS UNDER AN ACT
        //---------------------------------------------------------------------------------------------------------------------------------------------------------------
        //All Amendments for an act
        Route::get('/post_1992_legislation/{group}/all_amended_acts/{title}/{id}','Post1992Controller@all_amendedments_for_an_acts');//all list of amendments for an act
        Route::get('/post_1992_legislation/amended_act_table_of_content/{category}/{title}/{id}','Post1992Controller@amended_act_table_of_content');//table of content for a single amended act
        Route::get('/post_1992_legislation/amended_preamble/{id}','Post1992Controller@amended_act_preamble');//amended act preamble
        Route::get('/post_1992_legislation/amended_act_content/{id}','Post1992Controller@amended_act_content');//amended act content
        Route::get('/post_1992_legislation/display_amended_sections/{title}','Post1992Controller@display_amended_sections_container');//display amended sections in container

        Route::get('/post_1992_legislation/print_amended/preamble_content/{id}','Post1992Controller@post_1992_legislation_print_amended_preamble_content');//display plain act content
        Route::get('/post_1992_legislation/print_amended/content_section/{id}','Post1992Controller@post_1992_legislation_print_amended_content_section');//display plain act content

        Route::get('/post_1992_legislation/plain_amended/preamble_content/{id}','Post1992Controller@post_1992_legislation_plain_amended_preamble_content');//display plain act content
        Route::get('/post_1992_legislation/plain_amended/content_section/{id}','Post1992Controller@post_1992_legislation_plain_amended_content_section');//display plain act content

        Route::get('/post_1992_legislation/pdf/amended_preamble_content/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_amended_preamble_content');//display plain act content
        Route::get('/post_1992_legislation/pdf/amended_content_section/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_amended_content_section');//display plain act content
        //----------------------------------------------------------------------------------------------------------------------------------------------------------------
         //---------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            //FOR AMENDMENTS UNDER A REGULATION
        //---------------------------------------------------------------------------------------------------------------------------------------------------------------
        //All Amendments for a regulation
        Route::get('/post_1992_legislation/{category}/all_amended_regulation_acts/{title}/{id}','Post1992Controller@all_amendedments_for_a_regulation');//all list of amendments for a regulation
        Route::get('/post_1992_legislation/amended_regulation_act_table_of_content/{category}/{title}/{id}','Post1992Controller@amended_regulation_act_table_of_content');//table of content for a single amended act
        Route::get('/post_1992_legislation/amended_regulation_preamble/{id}','Post1992Controller@amended_regulation_act_preamble');//amended act preamble
        Route::get('/post_1992_legislation/amended_act_regulation_content/{id}','Post1992Controller@amended_act_regulation_content');//amended act content
        Route::get('/post_1992_legislation/display_amended_regulation_sections/{title}','Post1992Controller@display_amended_regulation_sections_container');//display amended sections in container
        //----------------------------------------------------------------------------------------------------------------------------------------------------------------

        //----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            //FOR REGULATIONS UNDER AN ACT
        //----------------------------------------------------------------------------------------------------------------------------------------------------------------
        //All Regulations for an act
        Route::get('/post_1992_legislation/{group}/all_regulations_acts/{title}/{id}','Post1992Controller@all_regulations_for_an_act');//all list of regulations for an act
        Route::get('/post_1992_legislation/regulations_table_of_content/{category}/{title}/{id}','Post1992Controller@regulations_table_of_content');//table of content for a single regulation
        Route::get('/post_1992_legislation/regulations_preamble/{id}','Post1992Controller@regulations_preamble');//regulations preamble
        Route::get('/post_1992_legislation/regulations_content/{id}','Post1992Controller@regulations_content');//regulations content
        Route::get('/post_1992_legislation/display_regulations_sections/{title}','Post1992Controller@display_regulations_sections_container');//display regulations sections in container

        Route::get('/post_1992_legislation/print_regulation_act/preamble_content/{id}','Post1992Controller@post_1992_legislation_print_regulation_act_preamble_content');//display plain act content
        Route::get('/post_1992_legislation/print_regulation_act/content_section/{id}','Post1992Controller@post_1992_legislation_print_regulation_act_content_section');//display plain act content

        Route::get('/post_1992_legislation/plain_regulation_act/preamble_content/{id}','Post1992Controller@post_1992_legislation_plain_regulation_act_preamble_content');//display plain act content
        Route::get('/post_1992_legislation/plain_regulation_act/content_section/{id}','Post1992Controller@post_1992_legislation_plain_regulation_act_content_section');//display plain act content

        Route::get('/post_1992_legislation/pdf_regulation_act/preamble_content/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_regulation_act_preamble_content');//display plain act content
        Route::get('/post_1992_legislation/pdf_regulation_act/content_section/{title}/{id}','Post1992Controller@post_1992_legislation_pdf_regulation_act_content_section');//display plain act content
        //----------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            //FOR PDF
        //----------------------------------------------------------------------------------------------------------------------------------------------------------------------
        Route::get('/post_1992_legislation/act_pdf/{id}', 'PDFController@post_act_pdf');


// LAW JUDGMENTS
//Ghana Law Judgement routes
Route::get('/judgement/Ghana','JudgementController@index');
    Route::get('/judgement/Ghana/filter/{year}/{category}','JudgementController@all_judgment_filter'); //all judgment filtering
    Route::get('/judgement/Ghana/{name}/{id}','JudgementController@all_ghana_court_cases');
    Route::get('/judgement/Ghana/Case-view/{name}/{id}','JudgementController@all_ghana_court_cases_view');
    Route::get('/judgement/print_preview/{id}','JudgementController@Ghana_all_print_preview');
    Route::get('/judgement/plain_view/{id}','JudgementController@Ghana_all_plain_view');
    // Route::get('/judgement/1/case_law/pdf_view/{title}/{id}','JudgementController@Ghana_all_pdf_view');
    Route::get('/judgement/pdf_view/{name}/{id}','JudgementController@Ghana_all_pdf_view');

    // Route::get('/judgement/all-cases/{id}','JudgementController@all_ghana_court_cases_view'); //former

    //Supreme Court
    Route::get('/judgement/1/{name}','JudgementController@supreme_court');
    Route::get('/judgement/1/supreme-court/filter/{year}/{category}','JudgementController@supreme_court_filter'); //supreme court filtering
    Route::get('/judgement/view/1/{name}/{id}','JudgementController@supreme_court_cases');
    // Route::get('/judgement/supreme-court/case/{id}','JudgementController@supreme_court_cases_view'); //do same for the others

    //High Court
    Route::get('/judgement/2/{name}','JudgementController@high_court');
    Route::get('/judgement/2/high-court/filter/{year}/{category}','JudgementController@high_court_filter'); //high court filtering
    Route::get('/judgement/view/2/{name}/{id}','JudgementController@high_court_cases');
    // Route::get('/judgement/high-court/case/{id}','JudgementController@high_court_cases_view');

    //Court of Appeal
    Route::get('/judgement/3/{name}','JudgementController@court_of_appeal');
    Route::get('/judgement/3/court-of-appeal/filter/{year}/{category}','JudgementController@court_of_appeal_filter'); //court of appeal filtering
    Route::get('/judgement/view/3/{name}/{id}','JudgementController@court_of_appeal_cases');
    // Route::get('/judgement/court-of-appeal/case/{id}','JudgementController@court_of_appeal_cases_view');
 
    //Circuit Court
    Route::get('/judgement/4/{name}','JudgementController@circuit_court'); 
    Route::get('/judgement/4/circuit-court/filter/{year}/{category}','JudgementController@circuit_court_filter'); //circuit court filtering
    Route::get('/judgement/view/4/{name}/{id}','JudgementController@circuit_court_cases');
    // Route::get('/judgement/circuit-court/case/{id}','JudgementController@circuit_court_cases_view');

    //District Court
    Route::get('/judgement/5/{name}','JudgementController@district_court');
    Route::get('/judgement/5/district-court/filter/{year}/{category}','JudgementController@district_court_filter'); //circuit court filtering 
    Route::get('/judgement/view/5/{name}/{id}','JudgementController@district_court_cases');
    // Route::get('/judgement/district-court/case/{id}','JudgementController@district_court_cases_view');

    //High Court (Tema)
    Route::get('/judgement/6/{name}','JudgementController@high_court_tema');
    // Route::get('/judgement/6/district-court/filter/{year}/{category}','JudgementController@district_court_filter'); //circuit court filtering 
    Route::get('/judgement/view/6/{name}/{id}','JudgementController@high_court_tema_cases');




// All Foreign Law Judgement routes
Route::get('/judgement/all-countries','JudgementController@all_countries_laws');
    Route::get('/judgement/Foreign/filter/{year}/{country}','JudgementController@all_foreign_judgment_filter'); //all judgment filtering
    Route::get('/judgement/{country}/{id}','JudgementController@all_countries_court_case');
    Route::get('/judgement/Case-view/{country}/{id}','JudgementController@all_countries_court_cases_view');
    Route::get('/judgement/print_preview/foreign/{id}','JudgementController@Foreign_all_print_preview');
    Route::get('/judgement/plain_view/foreign/{id}','JudgementController@Foreign_all_plain_preview');
    Route::get('/judgement/pdf_view/foreign/{country}/{id}','JudgementController@Foreign_all_pdf_preview');



    //Africa Law Judgements	
    Route::get('/judgement/all-countries/1/{name}','JudgementController@africa_court');
    Route::get('/judgement/1/africa-court/filter/{year}/{country}','JudgementController@africa_court_filter'); //africa court filtering
    Route::get('/judgement/all-countries/1/{name}/{id}','JudgementController@africa_court_cases');

    //Asia Law Judgements	
    Route::get('/judgement/all-countries/2/{name}','JudgementController@asia_court');
    Route::get('/judgement/2/asia-court/filter/{year}/{country}','JudgementController@asia_court_filter'); //asia court filtering
    Route::get('/judgement/all-countries/2/{name}/{id}','JudgementController@asia_court_cases');

    //Europe Law Judgements	
    Route::get('/judgement/all-countries/3/{name}','JudgementController@europe_court');
    Route::get('/judgement/3/europe-court/filter/{year}/{country}','JudgementController@europe_court_filter'); //europe court filtering
    Route::get('/judgement/all-countries/3/{name}/{id}','JudgementController@europe_court_cases');

    //North America Law Judgements	
    Route::get('/judgement/all-countries/4/{name}','JudgementController@north_america_court');
    Route::get('/judgement/4/north-america-court/filter/{year}/{country}','JudgementController@north_america_court_filter'); //north-america court filtering
    Route::get('/judgement/all-countries/4/{name}/{id}','JudgementController@north_america_court_cases');

    //South America Law Judgements	
    Route::get('/judgement/all-countries/5/{name}','JudgementController@south_america_court');
    Route::get('/judgement/5/south-america-court/filter/{year}/{country}','JudgementController@south_america_court_filter'); //south-america court filtering
    Route::get('/judgement/all-countries/5/{name}/{id}','JudgementController@south_america_court_cases');






//ADMIN LOGIN
Route::group(['prefix' => 'ajaxx'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
