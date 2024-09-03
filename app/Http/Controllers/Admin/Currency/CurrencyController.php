<?php
namespace App\Http\Controllers\Admin\Currency;

use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurrencyRequest;
// use App\Models\TicketService;
use App\Models\Currency;
use App\Http\Controllers\Controller;


class CurrencyController extends Controller
{
    public function index(){
        $currencies = Currency::orderBy("name", "ASC")->get();
        return view('content.currency.index', compact("currencies"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencyRequest $request)
    {
        $validated = $request->validated();

        $currency = Currency::create($validated);

        return back()->with("success", "Currency successfully added.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currency = Currency::find($id);

        $currency->delete();

        return back()->with("success", "Currency successfully deleted.");
    }
}
