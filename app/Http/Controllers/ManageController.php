<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Setting;
use App\Models\CustomPage;
use App\Mail\PierFromMail;
use App\Mail\SummerBrandMail;
use App\Mail\NewLegislationMail;
use App\Mail\JozicbdrentalsMail;
use App\Mail\NewLegislationQuestionsMail;
use App\Models\PropertySolution;
use App\Models\SearchReference;
use App\Models\EntegralApiData;
use Cookie;
use Redirect;
use Mail;
class ManageController extends Controller
{
    
    
    public function index(){
        $setting = Setting::find(1);
        return view('frontPart.manage.manageNew',compact('setting'));
    }
    
    public function sectionalTitleAndHoa(){
        
        $setting = Setting::find(1);
        return view('frontPart.manage.sectionalTitleAndHOA',compact('setting'));
    }
    
    
     public function commercialPropertyManagement(){
        
        $setting = Setting::find(1);
        return view('frontPart.manage.commercialPropertyManagement',compact('setting'));
    }
    
    public function estateManagement(){
        
        $setting = Setting::find(1);
        return view('frontPart.manage.estateManagement',compact('setting'));
    }
    
      public function estateManagementNew(){
        
         $setting = Setting::find(1);
        return view('frontPart.manage.estateManagementNew',compact('setting'));;
    }
    
      public function developerServices()
    {
         $setting = Setting::find(1);
         return view('frontPart.developerServices',compact('setting'));
    }
    
      public function commercialBrokeringServices()
    {
         $setting = Setting::find(1);
         return view('frontPart.commercialBrokeringServices',compact('setting'));
    }
    
      public function commercialLandlordServices()
    {
         $setting = Setting::find(1);
         return view('frontPart.commercialLandlordServices',compact('setting'));
    }
    
       public function executiveManagingAgent()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.executiveManagingAgent',compact('setting'));
    }
    
       public function faqs()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.manageFaqs',compact('setting'));
    }
    
        public function stsmAct()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.stsmAct',compact('setting'));
    }
    
    
        public function easyGuideToBodyCorporateResolution()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.easyGuideToBodyCorporateResolution',compact('setting'));
    }
    
    public function propertyManagementTips(){
         $setting = Setting::find(1);
         return view('frontPart.manage.propertyManagementTips',compact('setting'));
    }
   
   public function sectionalTitleManagement(){
        $setting = Setting::find(1);
         return view('frontPart.manage.sectionalTitleManagement',compact('setting'));
   }
   
   public function hoaManagement(){
        $setting = Setting::find(1);
         return view('frontPart.manage.hoaManagement',compact('setting'));
   }
   
     public function financialManagement(){
        $setting = Setting::find(1);
         return view('frontPart.manage.financialManagement',compact('setting'));
   }
   
     public function commercialTenantServices(){
        $setting = Setting::find(1);
         return view('frontPart.manage.commercialTenantServices',compact('setting'));
   }
   
  
  
   public function referenceSitesManagedByTrafalgar(){
        $setting = Setting::find(1);
         return view('frontPart.manage.referenceSitesManagedByTrafalgar',compact('setting'));
   }
   

    public function faqsCommercial(){
        $setting = Setting::find(1);
         return view('frontPart.manage.faqsCommercial',compact('setting'));
   }
   
       public function stsmActCopy()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.stsmAct',compact('setting'));
    }
       public function samplePropertyManagementReports()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.samplePropertyManagementReports',compact('setting'));
    }
    
        public function jozicbdrentals()
    {
         $setting = Setting::find(1);
         
         
         if(isset($_GET['tab']) && $_GET['tab']=='sale'){
            $tab = 'for sale';
            $tabUrlForFooter = 'for-sale';
        }else{
            $tab = 'for rent';
            $tabUrlForFooter = 'to-rent';
        }
       

        
       $getDistinctProvince0 =  EntegralApiData::select('suburb','town','province')->whereIn('suburb', ['Auckland Park','Berea','Braamfontein','Hillbrow','Hyde Park','Jeppestown','Killarney','Parkhurst'])->where('mandate_saletype',$tab)->where('property_classification','residential')->orderBy('suburb','ASC')->inRandomOrder()->groupBy('suburb')->take(8)->get();
       $getDistinctProvince1 =  EntegralApiData::select('suburb','town','province')->whereIn('suburb', ['Bluff','Durban Central','Isipingo Beach','Malvern','Morningside','Queensburgh','Umhlanga Ridge'])->where('mandate_saletype',$tab)->where('property_classification','residential')->orderBy('suburb','ASC')->inRandomOrder()->groupBy('suburb')->take(8)->get();
       $getDistinctProvince2 =  EntegralApiData::select('suburb','town','province')->whereIn('suburb', ['Amalinda','Beacon Bay','Gonubie','Kabega Park','Lorraine','Quigney','Southernwood','Vincent'])->where('mandate_saletype',$tab)->where('property_classification','residential')->orderBy('suburb','ASC')->inRandomOrder()->groupBy('suburb')->take(8)->get();
       
      

        $getUniqueTown =  EntegralApiData::select('suburb','town','province')->whereIn('suburb', ['Cape Town City Bowl','Green Point','Houghton','Illovo','Plumstead','Rowallan Park','Sherwood','Walmer','West Coast'])->orderBy('town','ASC')->inRandomOrder()->groupBy('town')->take(8)->get();
      
        $getPropertyWebReferences =  EntegralApiData::select('property_id')->distinct()->get();
        $getPropertyWebReferenceArray = [];
            if (count($getPropertyWebReferences) > 0) {

            foreach ($getPropertyWebReferences as $getPropertyWebReference) {
                $getPropertyWebReferenceArray[] = array(
                    "id" => $getPropertyWebReference->property_id,
                    "text" => $getPropertyWebReference->property_id,
                );
            }
        }
  
        // $newsLists = NewSection::latest()->limit(3)->get();
     
        $propertySolutions = PropertySolution::where('visible_status',1)->get();
       
        //  $searchReferences = SearchReference::select(["id", "search_name","search_type"])->get();
        $propertyTypeList = EntegralApiData::select('property_type')->where('property_classification','residential')->groupBy('property_type')->get();
       
        $getSearchTaggerData =  $this->getSearchTaggerData();
          $searchResultCookie = $this->searchResultCookie('to-rent');
           $searchResultCookieForSale = $this->searchResultCookie('for-sale');
        
         return view('frontPart.manage.jozicbdrentals',compact('setting','propertySolutions','getDistinctProvince0','getDistinctProvince1','getDistinctProvince2','getUniqueTown','propertyTypeList','getPropertyWebReferenceArray','getSearchTaggerData','searchResultCookie','searchResultCookieForSale','tab','tabUrlForFooter'));
    
        //return view('frontPart.manage.jozicbdrentals',compact('setting'));
        
    }
    
    public function getSearchTaggerData(){
        $getList =  EntegralApiData::select('province')->where('province','!=','Unalloc')->distinct()->inRandomOrder()->get();
		$arrayResult = array();
		foreach($getList as $key => $value){
			  if($value->province != ""){
			$getList1 =  EntegralApiData::select('town')->where('province',$value->province)->distinct()->get();
			$arrayResult[] = array('id'=>$value->province,'text'=>$value->province);
			  
			foreach($getList1 as $key1 => $value1){
				   if($value1->town != ""){
				  $arrayResult[] = array('id'=>$value1->town,'text'=>$value1->town.', '.$value->province);
				  $getList2 =  EntegralApiData::select('suburb')->where('town',$value1->town)->distinct()->get();
				  
				  foreach($getList2 as $key2 => $value2){
				      if($value2->suburb != $value1->town){
				         if($value2->suburb != ""){
					  $arrayResult[] = array('id'=>$value2->suburb,'text'=>$value2->suburb.', '.$value1->town);
				         }
				      }
				  }
				   }
			  }
			  }
		}
		return $arrayResult;
    }
    
    
    
     public function searchResultCookie($urlType){
        
        $valSearch2 = Cookie::get('searchKeyword');
        $array = [];
        if(!empty($valSearch2)){
            $valSearchArray2 =  explode(',',$valSearch2) ;
            for($ar2 = 0; $ar2 < count($valSearchArray2); $ar2++){ 
                // echo $valSearchArray2[$ar2];
                $sr = "";
                $sr =  'MATCH(town,suburb,province) AGAINST("'.$valSearchArray2[$ar2].'")';
                
                $propertyDatas =   EntegralApiData::select('suburb','town','province')->WhereRaw($sr)->first();
                if($propertyDatas !== null){
                $suburb = str_replace(" ","-",$propertyDatas->suburb);
                $town = str_replace(" ","-",$propertyDatas->town);
                $province = str_replace(" ","-",$propertyDatas->province);
                //create  url for single city 
                $customUrl = route($urlType,['url_city'=>$suburb,'url_town'=>$town,'url_province'=>$province,'city'=>$valSearchArray2[$ar2]]);
                $array[$ar2]['name'] = $valSearchArray2[$ar2];
                $array[$ar2]['link'] = $customUrl;
                }
            
            }
        
        }else{
            $array = [];
        }
        return $array;
    }
    
    
      public function jozicbdrentalsform(Request $request)
    {
        
        Mail::to('webmaster@trafalgar.co.za')->send(new JozicbdrentalsMail($request->all()));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
          return redirect('jozicbdrentals/jozicbdrentals-thank')->with('success', 'Email sent successfully');
        }
       // dd($request->all());
        //  $setting = Setting::find(1);
        //  return view('frontPart.manage.pier14',compact('setting'));
    }
    
       public function pier14()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.pier14',compact('setting'));
    }
    
      public function pier14Form(Request $request)
    {
        
        Mail::to('webmaster@trafalgar.co.za')->send(new PierFromMail($request->all()));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
          return redirect('pier-14-thank-you')->with('success', 'Email sent successfully');
        }
       // dd($request->all());
        //  $setting = Setting::find(1);
        //  return view('frontPart.manage.pier14',compact('setting'));
    }
    
      public function jozicbdrentalsThank()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.jozicbdrentalsThank',compact('setting'));
    }
    
       public function theSummitBrand()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.theSummitBrand',compact('setting'));
    }
    
      public function theSummitBrandForm(Request $request)
    {
        
        Mail::to('webmaster@trafalgar.co.za')->send(new SummerBrandMail($request->all()));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
       //   return  Redirect::back()->with('success', 'Email sent successfully');
          return redirect('the-summit-thank-you')->with('success', 'Email sent successfully');
          
        }
       // dd($request->all());
        //  $setting = Setting::find(1);
        //  return view('frontPart.manage.pier14',compact('setting'));
    }
    
        public function summitThankYou()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.summitThankYou',compact('setting'));
    }
    
      public function pier14ThankYou()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.pier14ThankYou',compact('setting'));
    }
    
       public function newlegislation()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.newlegislation',compact('setting'));
    }
    
       public function newlegislationForm(Request $request)
    {
        
         Mail::to('webmaster@trafalgar.co.za')->send(new NewLegislationMail($request->all()));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
          return redirect('newlegislation/newlegislation-thank')->with('success', 'Email sent successfully');
          
        }
         
    }
    
    
    
    public function newLegislationQuestions()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.newLegislationQuestions',compact('setting'));
    }
    
    
         public function newLegislationQuestionsForm(Request $request)
    {
        
        Mail::to('webmaster@trafalgar.co.za')->send(new NewLegislationQuestionsMail($request->all()));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
          return redirect('newlegislation/newlegislation-thank')->with('success', 'Email sent successfully');
          
        }
      
    }
    
    
    public function newlegislationThank()
    {
         $setting = Setting::find(1);
         return view('frontPart.manage.newlegislationThank',compact('setting'));
    }
    
    
}
