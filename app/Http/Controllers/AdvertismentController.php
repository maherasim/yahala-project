<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Redirect;

use App\Models\SpecialCards;
use App\Models\BusinessCard;
use App\Models\FoodDrink;
use App\Models\FoodAds;
use App\Models\AdsPricing;
use App\Models\AdsReason;
use App\Models\AdverSong;
use App\Models\AdsTime;
use App\Models\SpecialsAds;
use App\Models\AdsPolicy;
use App\Models\ServiceAds;
use App\Models\BusinessAds;
use App\Models\ServiceCard;

use Illuminate\Support\Facades\Log;

class AdvertismentController extends Controller
{
    public function specialcards()
    {
        $cards=SpecialCards::get();
    
        return view('content.advertisement.specialcard',compact('cards'));
    }

    public function destroycard(SpecialCards $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('list.adver.cards')->with('success', 'Special Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('list.adver.cards')->with('error', 'Something went wrong!');
    }
}
    public function Cardstore(Request $request)
    {
       // dd($request->all());
        // Validate the request
       $data= $request->validate([
            'card_name' => 'required',
            'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
   // dd($data);
        // Create a new instance of SpecialCards
        $model = new SpecialCards();
    
        // Assign the name
        $model->card_name = $request->card_name;
   // dd(  $model);
        // Handle the image upload
        if ($request->hasFile('card_image')) {
            // Use the fileUpload helper to store the image and get the path
            $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
   // dd($imgPath);
            // Save the path to the model
            $model->card_image = $imgPath;
        }
   // dd('helo');
        // Save the model to the database
        if ($model->save()) {
 
            return redirect()->route('list.adver.cards')->with('success', 'Specials Card has been inserted');
        } else {
            return redirect()->route('list.adver.cards')->with('error', 'Specials to add Reels Card');
        }
    }

    public function businesscards()
    {
        $cards=BusinessCard::get();
    
        return view('content.advertisement.businesscard',compact('cards'));
    }

    public function destroybusinesscards(BusinessCard $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('list.business.cards')->with('success', 'Business Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('list.business.cards')->with('error', 'Something went wrong!');
    }
}
    public function businesscardsstore(Request $request)
    {
       // dd($request->all());
        // Validate the request
       $data= $request->validate([
            'card_name' => 'required',
            'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
   // dd($data);
        // Create a new instance of BusinessCard
        $model = new BusinessCard();
    
        // Assign the name
        $model->card_name = $request->card_name;
   // dd(  $model);
        // Handle the image upload
        if ($request->hasFile('card_image')) {
            // Use the fileUpload helper to store the image and get the path
            $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
   // dd($imgPath);
            // Save the path to the model
            $model->card_image = $imgPath;
        }
   // dd('helo');
        // Save the model to the database
        if ($model->save()) {
 
            return redirect()->route('list.business.cards')->with('success', 'Business Card has been inserted');
        } else {
            return redirect()->route('list.business.cards')->with('error', 'Business to add  Card');
        }
    }

    public function Servicecards()
    {
        $cards=ServiceCard::get();
    
        return view('content.advertisement.servicecard',compact('cards'));
    }

    public function destroyServicecards(ServiceCard $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('list.Service.cards')->with('success', 'Service Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('list.Service.cards')->with('error', 'Something went wrong!');
    }
}
    public function Servicecardsstore(Request $request)
    {
       // dd($request->all());
        // Validate the request
       $data= $request->validate([
            'card_name' => 'required',
            'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
   // dd($data);
        // Create a new instance of BusinessCard
        $model = new ServiceCard();
    
        // Assign the name
        $model->card_name = $request->card_name;
   // dd(  $model);
        // Handle the image upload
        if ($request->hasFile('card_image')) {
            // Use the fileUpload helper to store the image and get the path
            $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
   // dd($imgPath);
            // Save the path to the model
            $model->card_image = $imgPath;
        }
   // dd('helo');
        // Save the model to the database
        if ($model->save()) {
 
            return redirect()->route('list.Service.cards')->with('success', 'Service Card has been inserted');
        } else {
            return redirect()->route('list.Service.cards')->with('error', 'Service not add');
        }
    }
    
   
    public function FoodDrinkcards()
    {
        $cards=FoodDrink::get();
    
        return view('content.advertisement.foodcard',compact('cards'));
    }

    public function destroyFoodDrinkcards(FoodDrink $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('list.food.cards')->with('success', 'Food Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('list.food.cards')->with('error', 'Something went wrong!');
    }
}
    public function FoodDrinkcardsstore(Request $request)
    {
       // dd($request->all());
        // Validate the request
       $data= $request->validate([
            'card_name' => 'required',
            'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
   // dd($data);
        // Create a new instance of BusinessCard
        $model = new FoodDrink();
    
        // Assign the name
        $model->card_name = $request->card_name;
   // dd(  $model);
        // Handle the image upload
        if ($request->hasFile('card_image')) {
            // Use the fileUpload helper to store the image and get the path
            $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
   // dd($imgPath);
            // Save the path to the model
            $model->card_image = $imgPath;
        }
   // dd('helo');
        // Save the model to the database
        if ($model->save()) {
 
            return redirect()->route('list.food.cards')->with('success', 'Food Card has been inserted');
        } else {
            return redirect()->route('list.food.cards')->with('error', 'Food Card not add');
        }
    }

    public function specialads()
    {
        $cards=SpecialsAds::get();
    
        return view('content.advertisement.ads.specialcard',compact('cards'));
    }

    public function destroyads(SpecialsAds $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('specialads.list')->with('success', 'Specials Card ads has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('specialads.list')->with('error', 'Something went wrong!');
    }
}
    public function adsstore(Request $request)
    {
       // dd($request->all());
        // Validate the request
       $data= $request->validate([
            'card_name' => 'required',
            'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
   // dd($data);
        // Create a new instance of BusinessCard
        $model = new SpecialsAds();
    
        // Assign the name
        $model->card_name = $request->card_name;
   // dd(  $model);
        // Handle the image upload
        if ($request->hasFile('card_image')) {
            // Use the fileUpload helper to store the image and get the path
            $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
   // dd($imgPath);
            // Save the path to the model
            $model->card_image = $imgPath;
        }
   // dd('helo');
        // Save the model to the database
        if ($model->save()) {
 
            return redirect()->route('specialads.list')->with('success', 'Spacial Card ads has been inserted');
        } else {
            return redirect()->route('specialads.list')->with('error', 'Card ads not add');
        }
    }

    public function businessads()
    {
        $cards=BusinessAds::get();
    
        return view('content.advertisement.ads.businesscard',compact('cards'));
    }

    public function destroybusinessads(BusinessAds $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('list.business.cards')->with('success', 'Business Card ads has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('list.business.cards')->with('error', 'Something went wrong!');
    }
}
    public function businessadssstore(Request $request)
    {
       // dd($request->all());
        // Validate the request
       $data= $request->validate([
            'card_name' => 'required',
            'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
   // dd($data);
        // Create a new instance of BusinessCard
        $model = new BusinessAds();
    
        // Assign the name
        $model->card_name = $request->card_name;
   // dd(  $model);
        // Handle the image upload
        if ($request->hasFile('card_image')) {
            // Use the fileUpload helper to store the image and get the path
            $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
   // dd($imgPath);
            // Save the path to the model
            $model->card_image = $imgPath;
        }
   // dd('helo');
        // Save the model to the database
        if ($model->save()) {
 
            return redirect()->route('list.business.cards')->with('success', 'Business Card ads has been inserted');
        } else {
            return redirect()->route('list.business.cards')->with('error', 'Card ads not add');
        }
    }
    public function Servicecardsads()
    {
        $cards=ServiceAds::get();
    
        return view('content.advertisement.ads.servicecard',compact('cards'));
    }

    public function destroyServicecardsads(ServiceAds $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('list.Service.ads')->with('success', 'Serives Card ads has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('list.Service.ads')->with('error', 'Something went wrong!');
    }
}
    public function Serviceadssstore(Request $request)
    {
       // dd($request->all());
        // Validate the request
       $data= $request->validate([
            'card_name' => 'required',
            'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
   // dd($data);
        // Create a new instance of BusinessCard
        $model = new ServiceAds();
    
        // Assign the name
        $model->card_name = $request->card_name;
   // dd(  $model);
        // Handle the image upload
        if ($request->hasFile('card_image')) {
            // Use the fileUpload helper to store the image and get the path
            $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
   // dd($imgPath);
            // Save the path to the model
            $model->card_image = $imgPath;
        }
   // dd('helo');
        // Save the model to the database
        if ($model->save()) {
 
            return redirect()->route('list.Service.ads')->with('success', 'Serives Card ads has been inserted');
        } else {
            return redirect()->route('list.Service.ads')->with('error', 'Card ads not add');
        }
    }
//yes do

public function FoodDrinkads()
{
    $cards=FoodAds::get();

    return view('content.advertisement.ads.foodads',compact('cards'));
}

public function destroyFoodDrinkads(FoodAds $card)
{
try {
    Log::info('Attempting to delete card with ID: ' . $card->_id);
    $card->delete();
    Log::info('Successfully deleted card with ID: ' . $card->_id);
    return redirect()->route('list.food.ads')->with('success', 'Food Card ads has been deleted!');
} catch (\Exception $e) {
    Log::error('Error deleting Card: ' . $e->getMessage());
    return redirect()->route('list.food.ads')->with('error', 'Something went wrong!');
}
}
public function FoodDrinkadsstore(Request $request)
{
   // dd($request->all());
    // Validate the request
   $data= $request->validate([
        'card_name' => 'required',
        'card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);
// dd($data);
    // Create a new instance of BusinessCard
    $model = new FoodAds();

    // Assign the name
    $model->card_name = $request->card_name;
 //dd(  $model);
    // Handle the image upload
    if ($request->hasFile('card_image')) {
        // Use the fileUpload helper to store the image and get the path
        $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
// dd($imgPath);
        // Save the path to the model
        $model->card_image = $imgPath;
    }
// dd('helo');
    // Save the model to the database
    if ($model->save()) {
        //dd('helo');
        return redirect()->route('list.food.ads')->with('success', 'Food Card ads has been inserted');
    } else {
        return redirect()->route('list.food.ads')->with('error', 'Card ads not add');
    }
}


public function index()
{
    $StorySongs  = AdverSong::all();
    return view("content.advertisement.song.index",compact('StorySongs'));
}
public function getMessage()
{
    $ringtones = AdverSong::where('ringType', 1)->get();
    $ringType = 1;

    return view("content.song.index",compact('ringtones', 'ringType'));
}
public function getCall()
{
    $ringtones = AdverSong::where('ringType', 2)->get();
    $ringType = 2;
    return view("content.apps.app-ringtone",compact('ringtones', 'ringType'));
}
public function store(Request $request)
{
   // dd($request->all());
    $response_msg = $request->ringType == "1" ? "Song" : "Song";
    if(!empty($request->audio_paths)){
        foreach ($request->audio_paths as $key => $path) {
            try {
                $ringtone = AdverSong::updateOrCreate(['_id' => $request->id], [
                    'fileName' => $request->audio_filename[$key],
                    'filePath' => $path,
                    'ringType' => intval($request->ringType),
                    'fileSize' => $request->audio_size[$key]
                ]);
            } catch (\Throwable $e) {
                return back()->with('success', $response_msg.'  has been created');
            }
        }
        return back()->with('success', $response_msg.'  has been updated');
    } else {
        return redirect()->back();
    }

}
public function destroy($id)
{
    try {
        $ringtone = AdverSong::find($id);
        if (!$ringtone) {
            return back()->with('error','Song not found.');
        }
        $ringtone->delete();
        return back()->with('success','Song has been deleted.');

    } catch (\Exception $e) {
        return back()->with('error','Failed to delete Song.');
    }
}
public function storage_setting(){
    $storyTime = AdsTime::first(); 
    return view('content.advertisement.story_time',compact('storyTime'));
}
public function storetime(Request $request)
{
   //dd($request->all());
   $validated = $request->validate([
       'length' => 'nullable|string|min:0|max:100',
       'is_active' => 'nullable|string',
   ]);
//dd( $validated);
   $storyTime = AdsTime::first(); // Assuming there's only one record
   if ($storyTime) {
       $storyTime->update($validated);
   } else {
    AdsTime::create($validated);
   }
//dd($storyTime);
   return redirect()->back()->with('success', 'Ads Time updated successfully!');
}
public function indexreason()
{
    $reasons = AdsReason::all();
    return view('content.advertisement.reasons.index', compact('reasons'));
}
public function reasonstore(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'reason' => 'required',
    ]);
    $status = empty($request->id) ? 'Created' : 'Updated';
    try {
        $reason = AdsReason::updateOrCreate(
            ['_id' => $request->reason_id],
            $validatedData
        );
        return redirect()->route('adver.reason')->with('success', 'Ads Reason Has been ' . $status);
    } catch (\Exception $e) {
        return redirect()->route('adver.reason')->with('error', 'Failed to ' . $status . ' Feed Reason');
    }
}
public function reasondestroy($id)
{
    $reason = AdsReason::find($id);
    if ($reason->delete()) {
        return redirect()->route('reasons.index')->with('success', 'Ads Reason Deleted Successfully');
    } else {
        return redirect()->route('reasons.index')->with('error', 'Failed to Delete  Reason');
    }
}
public function Policyindex()
{
    $data = AdsPolicy::all();
    //return  view('content.policy_and_terms.index' , compact('decode' , 'disclaimer' , 'tab'));
    return  view('content.advertisement.policy_and_terms.index' , compact('data'));
}
public function Policystore(Request $request)
{
    $request->validate([
        'name' => 'required',
    ]);

    AdsPolicy::create([
        'name' => $request->name
    ]);

    return back()->with('success', 'New privacy policy and terms section has been created.');
 
}
public function Policyestroy($id)
{
     $policy = AdsPolicy::find($id);
     if($policy->delete($policy->id)){
        return redirect()->back();
     }
}

public function saveFileds(Request $request){
    $request->validate([
        'privacy_policy' => 'required',
        // 'disclaimer' => 'required',
    ]);
// dd($request->privacy_policy);
    $check = AdsPolicy::find($request->id);
    $check->privacy_policy = $request->privacy_policy;
    // $check->disclaimer = $request->disclaimer;
    if($check->save()){
        return back()->with('success' , 'Privacy Policy and term updated successfully.')->withInput(['tab' => $request->tab]);
    }else{
        return back()->with('success' , ' Failed to update Privacy Policy and term.')->withInput(['tab' => $request->tab]);
    }
}
public function pricing2(Request $request){
		
    $url = url('advertisement/advert/pricing');
    
    if($request->isdelete){
        $delid = $request->delid;
        
        $delprice =  AdsPricing::where('_id', $delid)->first();
        
        $delprice->delete();	
        
        return Redirect::to($url);
        
        return redirect()->back()->with('success','Price deleted successfully.');
    }
    
    if($request->title){
        
        
        $imgfilename = "";
    
          if ($request->hasFile('dp')) {
            $randomize = rand(111111, 999999);
            $extension = $request->file('dp')->extension();
            $filename = $randomize . '.' . $extension;
            $image = $request->file('dp')->move('images/prices/', $filename);
            $imgfilename = $filename;
        }
        
        $title = $request->title;
        $days = $request->days;
        $currency = $request->currency;
        $price = $request->price;
        $description = strip_tags($request->description);
        
        if($request->upid != "0"){
            
            $id = $request->upid;
            $newprice =  AdsPricing::where('_id', $id)->first();
            
            
            if($request->file_removed == 1){
                
            }else{
                $imgfilename = $newprice->image;
            }
            
        //	$newprice = new Pricings();
            $newprice->title = $title;
            $newprice->days = $days;
            $newprice->currency = $currency;
            $newprice->price = $price;
            $newprice->desription = $description;
            $newprice->image = $imgfilename;
            $newprice->update();
            return Redirect::to($url);
        }else{
            //save record
            $newprice = new AdsPricing();
            $newprice->title = $title;
            $newprice->days = $days;
            $newprice->currency = $currency;
            $newprice->price = $price;
            $newprice->desription = $description;
            $newprice->image = $imgfilename;
            $newprice->save();
            return Redirect::to($url);
            
        }
        
        
        
            
    }
    
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
    }
    
    $pricings =  AdsPricing::orderBy('created_at', 'desc')->get();
    
    
    
    return view('content.advertisement.greetings.pricing', [
        'pricings' => $pricings
    ]);
 
}
}
