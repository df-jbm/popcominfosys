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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

  Route::get('/reports',function(){
    return view('reports');
  });

  Route::get('register/systemusers','dbcontroller@systemusers');

  Route::get('reports/barangay','dbcontroller@barangay');

  Route::get('reports/population','dbcontroller@population');

  Route::get('reports/HouseholdHeadCount','dbcontroller@HouseholdHeadCount');

  Route::get('reports/maritalstatus','dbcontroller@maritalstatus');

  Route::get('reports/birthRA','dbcontroller@birthRA');

  Route::get('reports/educprofile','dbcontroller@educprofile');

  Route::get('reports/attendingschool','dbcontroller@attendingschool');

  Route::get('reports/notattendingschool','dbcontroller@notattendingschool');

  Route::get('reports/religousaffiliation','dbcontroller@religousaffiliation');

  Route::get('reports/disabledpersons','dbcontroller@disabledpersons');

  Route::get('reports/regvoters4ps','dbcontroller@regvoters4ps');

  Route::get('reports/socialservices','dbcontroller@socialservices');

  Route::get('reports/specialskills','dbcontroller@specialskills');

  Route::get('reports/monthlyincome','dbcontroller@monthlyincome');

  Route::get('reports/unitoccupied','dbcontroller@unitoccupied');

  Route::get('reports/classificationofhouse','dbcontroller@classificationofhouse');

  Route::get('reports/lightingfuel','dbcontroller@lightingfuel');

  Route::get('reports/cookingFuel','dbcontroller@cookingFuel');

  Route::get('reports/houselocation','dbcontroller@houselocation');

  Route::get('reports/householdappliances','dbcontroller@householdappliances');

  Route::get('reports/drinkingwater','dbcontroller@drinkingwater');

  Route::get('reports/gendrinkingwater','dbcontroller@gendrinkingwater');

  Route::get('reports/watersourcedistance','dbcontroller@watersourcedistance');

  Route::get('reports/genwatersourcedistance','dbcontroller@genwatersourcedistance');

  Route::get('reports/toilettype','dbcontroller@toilettype');

  Route::get('reports/garbagedisposal','dbcontroller@garbagedisposal');

  Route::get('reports/birthspacing','dbcontroller@birthspacing');

  Route::get('reports/fpstopping','dbcontroller@fpstopping');

  Route::get('reports/engagedfarming','dbcontroller@engagedfarming');

  Route::get('reports/crops','dbcontroller@crops');

  Route::get('reports/marketdistance','dbcontroller@marketdistance');

  Route::get('reports/publicpreschool','dbcontroller@publicpreschool');

  Route::get('reports/publicprimaryschool','dbcontroller@publicprimaryschool');

  Route::get('reports/publictertiaryshcool','dbcontroller@publictertiaryshcool');

  Route::get('reports/privatepreschool','dbcontroller@privatepreschool');

  Route::get('data-entry',function(){
    return view('data-entry');
  });
  
});

