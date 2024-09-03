<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use App\Models\FTP;
use App\Http\Requests\StoreFtpRequest;
use Illuminate\Http\Request;

class FtpController extends Controller
{
  public function index()
  {
    $ftps = FTP::orderBy("ftp_for", "ASC")->get();
    return view('content.apps.app-ftp-list', compact("ftps"));
  }

  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFTP(StoreFtpRequest $request)
    {
        $validated = $request->validated();

        $ftp = FTP::create($validated);

        return back()->with("success", "FTP successfully added.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFtpRequest $request, $id)
    {
        $validated = $request->validated();

        $ftp = FTP::find($id);
        $ftp->fill($validated);
        $ftp->save();

        return back()->with("success", "FTP successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ftp = FTP::find($id);

        $ftp->delete();

        return back()->with("success", "FTP successfully deleted.");
    }
}
