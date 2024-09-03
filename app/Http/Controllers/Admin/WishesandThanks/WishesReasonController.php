<?php

namespace App\Http\Controllers\Admin\WishesandThanks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GreetingCard;
use App\Models\PrayCard;
use App\Models\SympathyCard;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Log;


class WishesReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
    public function index()
    {
        return view('content.wish_and_thank.reason');
    }
    public function Cardstore(Request $request)
{
    $request->validate([
        'card_name' => 'required'
    ]);

    $model = new GreetingCard();
    $model->name = $request->card_name;
    if (!empty($request->card_image)) {
        $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
        $model->image = $imgPath;
    }
    if ($model->save()) {
        return redirect()->back()->with('success', 'Greeting Card   Has been inserted');
    } else {
        return redirect()->back()->with('error', ' Failed to add Greeting Card ');
    }
    
}


public function destroycard(GreetingCard $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->back()->with('success', 'Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong!');
    }
}

public function PraysStore(Request $request)
{
    $request->validate([
        'card_name' => 'required'
    ]);

    $model = new PrayCard();
    $model->name = $request->card_name;
    if (!empty($request->card_image)) {
        $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
        $model->image = $imgPath;
    }
    if ($model->save()) {
        return redirect()->back()->with('success', 'Pray Card   Has been inserted');
    } else {
        return redirect()->back()->with('error', ' Failed to add Pray Card ');
    }
    
}


public function destroyprays(PrayCard $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->back()->with('success', ' Pray Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong!');
    }
}

public function sympathyStore(Request $request)
{
    $request->validate([
        'card_name' => 'required'
    ]);

    $model = new SympathyCard();
    $model->name = $request->card_name;
    if (!empty($request->card_image)) {
        $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
        $model->image = $imgPath;
    }
    if ($model->save()) {
        return redirect()->back()->with('success', 'Sympathy Card   Has been inserted');
    } else {
        return redirect()->back()->with('error', ' Failed to add Sympathy Card ');
    }
    
}


public function destroysympathy(SympathyCard $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->back()->with('success', ' Sympathy Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong!');
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
      public function manage_greeting(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.manage_greeting',compact('view'));
    }
    
     public function manage_pray(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.manage_pray',compact('view'));
      
    }
    
     public function manage_sympathy(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.manage_sympathy',compact('view'));
      
    }
    
     public function upload_card(){
         $cards=PrayCard::get();
        return view('content.wish_and_thank.upload_card',compact('cards'));
      
    }
    
     public function upload_cardone(){
      $cards=SympathyCard::get();
        return view('content.wish_and_thank.upload_cardone',compact('cards'));
      
    }
    
    
     public function upload_cardtwo(){
      $cards=GreetingCard::get();
        return view('content.wish_and_thank.upload_cardtwo',compact('cards'));
      
    }
    
    
      public function add_prays(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.add_prays',compact('view'));
      
    }
    
        public function add_greeting(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.add_greeting',compact('view'));
      
    }
  
 public function add_verses(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.add_verses',compact('view'));
      
    }
    
    
    public function pricing(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.pricing',compact('view'));
      
    }
    
}
