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
  protected $birthspacing = array();
  protected $fpstopping = array();
  protected $engagedfarming = array();
  protected $crops = array();
  protected $marketdistance = array();
  protected $publicpreschool = array();
  protected $publicprimaryschool = array();
  protected $publictertiaryshcool = array();
  protected $privatepreschool = array();
  protected $privatesecondaryschool = array();
  protected $privatetertiaryschool = array();
  protected $publichealthcenter = array();
  protected $privatehealthcenter = array();  
  protected $publicbirthingclinic = array();
  protected $privatebirthingclinic = array();
  protected $typeoffishing = array();

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
  public function typeoffishing(Request $r){
    try {
      $this->typeoffishing = DB::select('CALL typeoffishing('.$r->BrgyID.')');
      return response($this->typeoffishing);      
    } catch (\Exception $e) {
      dd($e);
    }
  }
  /**
   * [privatebirthingclinic description]
   * @param  Request $r [description]
   * @return [type]     [description]
   */
  public function privatebirthingclinic(Request $r){
    try {
      $this->privatebirthingclinic = DB::select('CALL privatebirthingclinic('.$r->BrgyID.')');
      return response($this->privatebirthingclinic);      
    } catch (\Exception $e) {
      dd($e);
    }
  }
  /**
   * [publicbirthingclinic description]
   * @param  Request $r [description]
   * @return [type]     [description]
   */
  public function publicbirthingclinic(Request $r){
    try {
      $this->publicbirthingclinic = DB::select('CALL publicbirthingclinic('.$r->BrgyID.')');
      return response($this->publicbirthingclinic);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [privatehealthcenter description]
   * @param  Request $r [description]
   * @return [type]     [description]
   */
  public function privatehealthcenter(Request $r){
    try {
      $this->privatehealthcenter = DB::select('CALL privatehealthcenter('.$r->BrgyID.')');
      return response($this->privatehealthcenter);      
    } catch (\Exception $e) {
      dd($e);
    }
  }
  /**
   * [publichealthcenter description]
   * @param  Request $r [description]
   * @return [type]     [description]
   */
  public function publichealthcenter(Request $r){
    try {
      $this->publichealthcenter = DB::select('CALL publichealthcenter('.$r->BrgyID.')');
      return response($this->publichealthcenter);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [privatetertiaryschool description]
   * @param  Request $r [description]
   * @return [type]     [description]
   */
  
  public function privatetertiaryschool(Request $r){
    try {
      $this->privatetertiaryschool = DB::select('CALL privatetertiaryschool('.$r->BrgyID.')');
      return response($this->privatetertiaryschool);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [privatesecondaryschool description]
   * @param  Request $r [description]
   * @return [type]     [description]
   */
  public function privatesecondaryschool(Request $r){
    try {
      $this->privatesecondaryschool = DB::select('CALL privatesecondaryschool('.$r->BrgyID.')');
      return response($this->privatesecondaryschool);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [privatepreschool description]
   * @param Request $r [description]
   */
  
  public function privatepreschool(Request $r){
    try {
      $this->privatepreschool = DB::select('CALL privatepreschool('.$r->BrgyID.')');
      return response($this->privatepreschool);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [publictertiaryshcool description]
   * @param Request $r [description]
   */
  
  public function publictertiaryshcool(Request $r){
    try {
      $this->publictertiaryshcool = DB::select('CALL publictertiaryshcool('.$r->BrgyID.')');
      return response($this->publictertiaryshcool);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [publicprimaryschool description]
   * @param Request $r [description]
   */
  
  public function publicprimaryschool(Request $r){
    try {
      $this->publicprimaryschool = DB::select('CALL publicprimaryschool('.$r->BrgyID.')');
      return response($this->publicprimaryschool);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [publicpreschool description]
   * @param Request $r [description]
   */
  
  public function publicpreschool(Request $r){
    try {
      $this->publicpreschool = DB::select('CALL publicpreschool('.$r->BrgyID.')');
      return response($this->publicpreschool);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [marketdistance description]
   * @param Request $r [description]
   */
  
  public function marketdistance(Request $r){
    try {
      $this->marketdistance = DB::select('CALL marketdistance('.$r->BrgyID.')');
      return response($this->marketdistance);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [crops description]
   * @param Request $r [description]
   */
  
  public function crops(Request $r){
    try {
      $this->crops = DB::select('CALL crops('.$r->BrgyID.')');
      return response($this->crops);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [engagedfarming description]
   * @param Request $r [description]
   */
  
  public function engagedfarming(Request $r){
    try {
      $this->engagedfarming = DB::select('CALL engagedfarming('.$r->BrgyID.')');
      return response($this->engagedfarming);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [FPStopping description]
   * @param Request $r [description]
   */
  
  public function fpstopping(Request $r){
    try {
      $this->fpstopping = DB::select('CALL FPStopping('.$r->BrgyID.')');
      return response($this->fpstopping);      
    } catch (\Exception $e) {
      dd($e);
    }
  }

  /**
   * [birthspacing description]
   * @param  Request $r [description]
   * @return [type]     [description]
   */
  
  public function birthspacing(Request $r){
    try {
      $this->birthspacing = DB::select('CALL BirthSpacing('.$r->BrgyID.')');
      return response($this->birthspacing);      
    } catch (\Exception $e) {
      dd($e);
    }
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
      $this->socialservices = DB::select('CALL socialservices('.$r->BrgyID.')');
      return response($this->socialservices);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function specialskills(Request $r){
    try {
      $this->specialskills = DB::select('CALL specialskills('.$r->BrgyID.')');
      return response($this->specialskills);
    } catch (\Exception $e) {
      dd($e);
    }

  }

  public function monthlyincome(Request $r){
    try {
      $this->monthlyincome = DB::select('CALL monthlyincome('.$r->BrgyID.')');
      return response($this->monthlyincome);
    } catch (\Exception $e) {
      dd($e);
    }

  }
  
  public function unitoccupied(Request $r){
    try {
      $this->unitoccupied = DB::select('CALL UnitOccupied('.$r->BrgyID.')');
      return response($this->unitoccupied);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function classificationofhouse(Request $r){
    try {
      $this->classificationofhouse = DB::select('CALL classificationofhouse('.$r->BrgyID.')');
      return response($this->classificationofhouse);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function lightingfuel(Request $r){
    try {
      $this->lightingfuel = DB::select('CALL lightingfuel('.$r->BrgyID.')');
      return response($this->lightingfuel);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function CookingFuel(Request $r){
    try {
      $this->CookingFuel = DB::select('CALL CookingFuel('.$r->BrgyID.')');
      return response($this->CookingFuel);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function houselocation(Request $r){
    try {
      $this->houselocation = DB::select('CALL houselocation('.$r->BrgyID.')');
      return response($this->houselocation);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function householdappliances(Request $r){
    try {
      $this->householdappliances = DB::select('CALL householdappliances('.$r->BrgyID.')');
      return response($this->householdappliances);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function drinkingwater(Request $r){
    try {
      $this->drinkingwater = DB::select('CALL DrinkingWater('.$r->BrgyID.')');
      return response($this->drinkingwater);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function gendrinkingwater(Request $r){
    try {
      $this->gendrinkingwater = DB::select('CALL GenDrinkingWater('.$r->BrgyID.')');
      return response($this->gendrinkingwater);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function watersourcedistance(Request $r){
    try {
      $this->watersourcedistance = DB::select('CALL WaterSourceDistance('.$r->BrgyID.')');
      return response($this->watersourcedistance);
    } catch (\Exception $e) {
      dd($e);
    }
  }
  
  public function genwatersourcedistance(Request $r){
    try {
      $this->genwatersourcedistance = DB::select('CALL GenWaterSourceDistance('.$r->BrgyID.')');
      return response($this->genwatersourcedistance);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function toilettype(Request $r){
    try {
      $this->toilettype = DB::select('CALL ToiletType('.$r->BrgyID.')');
      return response($this->toilettype);
    } catch (\Exception $e) {
      dd($e);
    }
  }

  public function garbagedisposal(Request $r){
    try {
      $this->garbagedisposal = DB::select('CALL GarbageDisposal('.$r->BrgyID.')');
      return response($this->garbagedisposal);
    } catch (\Exception $e) {
      dd($e);
    }
  }

}
