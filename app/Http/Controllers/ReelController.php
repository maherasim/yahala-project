<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReelCard;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Log;



class ReelController extends Controller
{
    public function Listcard()
    {
        $cards=ReelCard::get();
    
        return view('content.reels.cards.index',compact('cards'));
    }
    public function Cardstore(Request $request)
{
    $request->validate([
        'card_name' => 'required'
    ]);

    $model = new ReelCard();
    $model->name = $request->card_name;
    if (!empty($request->card_image)) {
        $imgPath = Helpers::fileUpload($request->card_image, "images/card_image");
        $model->image = $imgPath;
    }
    if ($model->save()) {
        return redirect()->route('list.reels.cards')->with('success', 'Reels Card   Has been inserted');
    } else {
        return redirect()->route('list.reels.cards')->with('error', ' Failed to add Reels Card ');
    }
    
}


public function destroycard(ReelCard $card)
{
    try {
        Log::info('Attempting to delete card with ID: ' . $card->_id);
        $card->delete();
        Log::info('Successfully deleted card with ID: ' . $card->_id);
        return redirect()->route('list.reels.cards')->with('success', 'Card has been deleted!');
    } catch (\Exception $e) {
        Log::error('Error deleting Card: ' . $e->getMessage());
        return redirect()->route('list.reels.cards')->with('error', 'Something went wrong!');
    }
}


}
