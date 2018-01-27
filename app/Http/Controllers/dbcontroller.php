<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\brgy;
use Illuminate\Http\Request;

class dbcontroller extends Controller
{
  
  protected $dataset = array();
  protected $population = array();
  protected $household = array();
  protected $maritalstatus = array();
  protected $birthRA = array();
  protected $educprofile = array();
  protected $attendingschool = array();
  protected $notattendingschool = array();
  protected $religousaffiliation = array();
  protected $disabledpersons = array();
  protected $regvoters4ps = array();
  protected $socialservices = array();
  protected $specialskills = array();
  protected $monthlyincome = array();
  protected $housingcondition = array();
  protected $unitoccupied = array();
  protected $classificationofhouse = array();
  protected $lightingfuel = array();
  protected $CookingFuel = array();
  protected $houselocation = array();
  protected $householdappliances = array();
  protected $drinkingwater = array();
  protected $gendrinkingwater = array();
  protected $watersourcedistance = array();
  protected $genwatersourcedistance = array();
  protected $toilettype = array();
  protected $garbagedisposal = array();
  protected $users = array();

  protected $brgy = array();

  public function __construct(){
    $this->brgy = brgy::all();
  }

  public function barangay(){
    return response($this->brgy);
  }

  public function systemusers(){
    $users = User::all();
    return view('userlist',['users'=>$users]);
  }

  public function register(Request $request)
  {
      $this->validator($request->all())->validate();

      event(new Registered($user = $this->create($request->all())));

      return redirect($this->redirectPath());
  }

  public function population(Request $r){
    try {
      $this->population = DB::select('CALL populationbyage('.$r->BrgyID.')');
      return response($this->population);      
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function HouseholdHeadCount(Request $r){
    try {
      $this->household = DB::select('CALL HouseholdHeadCount('.$r->BrgyID.')');
      return response($this->household);
    } catch (\Exception $e) {
      dd($e);
    }

  }
  
  public function maritalstatus(Request $r){
    try {
      $this->maritalstatus = DB::select('CALL maritalstatus('.$r->BrgyID.')');
      return response($this->maritalstatus);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function birthRA(Request $r){
    try {
      $this->birthRA = DB::select('CALL BirthRA('.$r->BrgyID.')');
      return response($this->birthRA  );
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function educprofile(Request $r){
    try {
      $this->educprofile = DB::select('CALL educprofile('.$r->BrgyID.')');
      return response($this->educprofile);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function attendingschool(Request $r){
    try {
      $this->attendingschool = DB::select('CALL attendingschool('.$r->BrgyID.')');
      return response($this->attendingschool);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function notattendingschool(Request $r){
    try {
      $this->notattendingschool = DB::select('CALL notattendingschool('.$r->BrgyID.')');
      return response($this->notattendingschool);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function religousaffiliation(Request $r){
    try {
      $this->religousaffiliation = DB::select('CALL religousaffiliation('.$r->BrgyID.')');
      return response($this->religousaffiliation);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function disabledpersons(Request $r){
    try {
      $this->disabledpersons = DB::select('CALL disabledpersons('.$r->BrgyID.')');
      return response($this->disabledpersons);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function regvoters4ps(Request $r){
    try {
      $this->regvoters4ps = DB::select('CALL regvoters4ps('.$r->BrgyID.')');
      return response($this->regvoters4ps);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function socialservices(Request $r){
    try {
      $this->socialservices = DB::select('CALL socialservices()');
      return response($this->socialservices);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function specialskills(Request $r){
    try {
      $this->specialskills = DB::select('CALL specialskills()');
      return response($this->specialskills);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function monthlyincome(Request $r){
    try {
      $this->monthlyincome = DB::select('CALL monthlyincome()');
      return response($this->monthlyincome);
    } catch (\Exception $e) {
      dd($e);
    }

  }
  
  public function unitoccupied(Request $r){
    try {
      $this->unitoccupied = DB::select('CALL UnitOccupied()');
      return response($this->unitoccupied);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function classificationofhouse(Request $r){
    try {
      $this->classificationofhouse = DB::select('CALL classificationofhouse()');
      return response($this->classificationofhouse);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function lightingfuel(Request $r){
    try {
      $this->lightingfuel = DB::select('CALL lightingfuel()');
      return response($this->lightingfuel);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function CookingFuel(Request $r){
    try {
      $this->CookingFuel = DB::select('CALL CookingFuel()');
      return response($this->CookingFuel);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function houselocation(Request $r){
    try {
      $this->houselocation = DB::select('CALL houselocation()');
      return response($this->houselocation);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function householdappliances(Request $r){
    try {
      $this->householdappliances = DB::select('CALL householdappliances()');
      return response($this->householdappliances);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function drinkingwater(Request $r){
    try {
      $this->drinkingwater = DB::select('CALL DrinkingWater()');
      return response($this->drinkingwater);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function gendrinkingwater(Request $r){
    try {
      $this->gendrinkingwater = DB::select('CALL GenDrinkingWater()');
      return response($this->gendrinkingwater);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function watersourcedistance(Request $r){
    try {
      $this->watersourcedistance = DB::select('CALL WaterSourceDistance()');
      return response($this->watersourcedistance);
    } catch (\Exception $e) {
      dd($e);
    }
  }
  
  public function genwatersourcedistance(Request $r){
    try {
      $this->genwatersourcedistance = DB::select('CALL GenWaterSourceDistance()');
      return response($this->genwatersourcedistance);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function toilettype(Request $r){
    try {
      $this->toilettype = DB::select('CALL ToiletType()');
      return response($this->toilettype);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function garbagedisposal(Request $r){
    try {
      $this->garbagedisposal = DB::select('CALL GarbageDisposal()');
      return response($this->garbagedisposal);
    } catch (\Exception $e) {
      dd($e);
    }
  }

}
