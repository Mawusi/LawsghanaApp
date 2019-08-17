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
//WELCOME PAGE
Route::get('/','WelcomePageController@index');

//CONSTITUTION

    //All Countries Constitution
    Route::get('/constitution/all_countries','ConstitutionController@all_countries_constitution');//display all countries constitution
    Route::get('/constitution/filter/{year}/{country}','ConstitutionController@all_countries_constitution_filter'); //all constitution filtering
    Route::get('/constitution/{country}/{id}','ConstitutionController@display_country_constitution');

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
        Route::get('/constitution/Republic/expanded_view/{id}','ConstitutionController@ghana_expanded_view');
        Route::get('/constitution/Republic/plain_view/{id}','ConstitutionController@ghana_plain_view');


    // Ghana Constitution(Amended)
    Route::get('/constitution_amended/Republic/Ghana/{id}', 'ConstitutionController@ghana_constitution_table_amended');
    Route::get('/constitution_amended/Republic/constitution_preamble/{id}','ConstitutionController@ghana_constitution_preamble_amended');
    Route::get('/constitution_amended/Republic/constitution_content/{id}','ConstitutionController@ghana_constitution_content_amended');
    Route::get('/constitution_amended/Republic/expanded_view/{id}','ConstitutionController@ghana_expanded_view_amended');



//PRE_1992_LEGISLATION
Route::get('/pre_1992_legislation','Pre1992Controller@index');//display all acts
    Route::get('/pre_1992_legislation/filter/{year}/{category}','Pre1992Controller@all_pre_1992_legislation_filter'); //all pre-1992 filtering
    Route::get('/pre_1992_legislation/{group}/{title}/{id}','Pre1992Controller@pre_1992_legislation_table_of_content');//display acts table of content
    Route::get('/pre_1992_legislation/preamble/{id}','Pre1992Controller@pre_1992_legislation_preamble');//display act preamble
    Route::get('/pre_1992_legislation/content/{id}','Pre1992Controller@pre_1992_legislation_content');//display act content
    Route::get('/pre_1992_legislation/1/{group}/{title}/expanded-view/{id}','Pre1992Controller@expanded_view');//display in expanded view

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
    Route::get('/post_1992_legislation/1/{group}/{title}/expanded-view/{id}','Post1992Controller@expanded_view');//display in expanded view
    Route::get('/post_1992_legislation/1/{group}/{title}/plain-view/{id}','Post1992Controller@plain_view');//display in plain view

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





// LAW JUDGMENTS
//Ghana Law Judgement routes
Route::get('/judgement/Ghana','JudgementController@index');
    Route::get('/judgement/Ghana/filter/{year}/{category}','JudgementController@all_judgment_filter'); //all judgment filtering
    Route::get('/judgement/Ghana/{name}/{id}','JudgementController@all_ghana_court_cases');
    Route::get('/judgement/Ghana/Case-view/{name}/{id}','JudgementController@all_ghana_court_cases_view');
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


// All Foreign Law Judgement routes
Route::get('/judgement/all-countries','JudgementController@all_countries_laws');
    Route::get('/judgement/Foreign/filter/{year}/{country}','JudgementController@all_foreign_judgment_filter'); //all judgment filtering
    Route::get('/judgement/{country}/{id}','JudgementController@all_countries_court_case');
    Route::get('/judgement/Case-view/{country}/{id}','JudgementController@all_countries_court_cases_view');

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
