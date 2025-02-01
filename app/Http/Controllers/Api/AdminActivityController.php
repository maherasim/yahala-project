<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PopFeeds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminActivityController extends Controller
{

    public function getSystemInfo(){
        $popfeeds = PopFeeds::where('type','System')->orderBy('created_at','desc')->get();
        return response()->json(['feeds' => $popfeeds], 200);
    }

    public function getDonations(){
        $popfeeds = PopFeeds::where('type','Donation')->orderBy('created_at','desc')->get();
        return response()->json(['feeds' => $popfeeds], 200);
    }

    public function getSurveys(){
        $popfeeds = PopFeeds::where('type','Surveys')->orderBy('created_at','desc')->get();
        return response()->json(['feeds' => $popfeeds], 200);
    }

    public function getGreetings(){
        $popfeeds = PopFeeds::where('type','Greetings')->orderBy('created_at','desc')->get();
        return response()->json(['feeds' => $popfeeds], 200);
    }

    public function store_systemInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $poptyp = "System";
        $options = $request->option ?? "";

        $data = [
            'title' => $request->title,
            'date_start' => $request->start_date,
            'date_ends' => $request->end_date,
            'share_option' => $options,
            'is_comments' => $request->comments ?? 0,
            'is_share' => $request->share ?? 0,
            'is_emoji' => $request->emoji ?? 0,
            'txt1' => $request->txt1,
            'txt2' => $request->txt2,
            'txt3' => $request->txt3,
            'type' => $poptyp,
        ];

        // Handle file uploads
        foreach (['image' => 'images', 'icon1' => 'images/icons', 'icon2' => 'images/icons', 'icon3' => 'images/icons'] as $fileKey => $path) {
            if ($request->hasFile($fileKey)) {
                $file = $request->file($fileKey);
                $fileName = time() . rand() . '-' . $fileKey . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs("/{$path}", $fileName, "public");
                $data[$fileKey] = $filePath;
            }
        }

        if ($request->id > 0) {
            $postpop = PopFeeds::find($request->id);
            if ($postpop) {
                $postpop->update($data);
                return response()->json(['message' => 'Popup Feed updated successfully.', 'data' => $postpop], 200);
            }
            return response()->json(['message' => 'Popup Feed not found.'], 404);
        } else {
            $data['user_id'] = 0;
            $data['status'] = 1;
            $postpop = PopFeeds::create($data);
            return response()->json(['message' => 'Popup Feed added successfully.', 'data' => $postpop], 201);
        }
    }

    public function store_donation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'limit' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $poptyp = "Donation";
        $options = $request->option ?? "";

        $data = [
            'limited' => $request->limit,
            'is_paypal' => $request->is_paypal ?? 0,
            'is_gpay' => $request->is_gpay ?? 0,
            'is_pay_office' => $request->is_payoffice ?? 0,
            'is_pay_other' => $request->is_other ?? 0,
            'title' => $request->title,
            'date_start' => $request->start_date,
            'date_ends' => $request->end_date,
            'share_option' => $options,
            'is_comments' => $request->comments ?? 0,
            'is_share' => $request->share ?? 0,
            'is_emoji' => $request->emoji ?? 0,
            'type' => $poptyp,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-post.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs("/images", $imageName, "public");
            $data['image'] = $imagePath;
        }

        if ($request->id > 0) {
            $postpop = PopFeeds::find($request->id);
            if ($postpop) {
                $postpop->update($data);
                return response()->json(['message' => 'Donation updated successfully.', 'data' => $postpop], 200);
            }
            return response()->json(['message' => 'Donation not found.'], 404);
        } else {
            $data['user_id'] = 0;
            $data['status'] = 1;
            $postpop = PopFeeds::create($data);
            return response()->json(['message' => 'Donation added successfully.', 'data' => $postpop], 201);
        }
    }


    public function store_surveys(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $poptyp = "Surveys";
        $options = $request->option ?? "";

        $data = [
            'title' => $request->title,
            'date_start' => $request->start_date,
            'date_ends' => $request->end_date,
            'share_option' => $options,
            'is_comments' => $request->comments ?? 0,
            'is_share' => $request->share ?? 0,
            'is_emoji' => $request->emoji ?? 0,
            'txt1' => $request->txt1,
            'txt2' => $request->txt2,
            'txt3' => $request->txt3,
            'type' => $poptyp,
        ];

        // Handle file uploads
        foreach (['image' => 'images', 'icon1' => 'images/icons', 'icon2' => 'images/icons', 'icon3' => 'images/icons'] as $fileKey => $path) {
            if ($request->hasFile($fileKey)) {
                $file = $request->file($fileKey);
                $fileName = time() . rand() . '-' . $fileKey . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs("/{$path}", $fileName, "public");
                $data[$fileKey] = $filePath;
            }
        }

        if ($request->id > 0) {
            $postpop = PopFeeds::find($request->id);
            if ($postpop) {
                $postpop->update($data);
                return response()->json(['message' => 'Popup Feed updated successfully.', 'data' => $postpop], 200);
            }
            return response()->json(['message' => 'Popup Feed not found.'], 404);
        } else {
            $data['user_id'] = 0;
            $data['status'] = 1;
            $postpop = PopFeeds::create($data);
            return response()->json(['message' => 'Popup Feed added successfully.', 'data' => $postpop], 201);
        }
    }

    public function store_greetings(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $poptyp = "Greetings";
        $options = $request->option ?? "";

        $data = [
            'title' => $request->title,
            'date_start' => $request->start_date,
            'date_ends' => $request->end_date,
            'share_option' => $options,
            'is_comments' => $request->comments ?? 0,
            'is_share' => $request->share ?? 0,
            'is_emoji' => $request->emoji ?? 0,
            'txt1' => $request->txt1,
            'txt2' => $request->txt2,
            'txt3' => $request->txt3,
            'type' => $poptyp,
        ];

        // Handle file uploads
        foreach (['image' => 'images', 'icon1' => 'images/icons', 'icon2' => 'images/icons', 'icon3' => 'images/icons'] as $fileKey => $path) {
            if ($request->hasFile($fileKey)) {
                $file = $request->file($fileKey);
                $fileName = time() . rand() . '-' . $fileKey . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs("/{$path}", $fileName, "public");
                $data[$fileKey] = $filePath;
            }
        }

        if ($request->id > 0) {
            $postpop = PopFeeds::find($request->id);
            if ($postpop) {
                $postpop->update($data);
                return response()->json(['message' => 'Popup Feed updated successfully.', 'data' => $postpop], 200);
            }
            return response()->json(['message' => 'Popup Feed not found.'], 404);
        } else {
            $data['user_id'] = 0;
            $data['status'] = 1;
            $postpop = PopFeeds::create($data);
            return response()->json(['message' => 'Popup Feed added successfully.', 'data' => $postpop], 201);
        }
    }

    public function delete_pops(Request $request){
        $delid = $request->id;
        $popfeed = PopFeeds::where('_id', $delid)->first();
        if($popfeed){
            $popfeed->delete();
            return response()->json(['message' => 'Popup Feed deleted successfully.'], 200);
        }
        return response()->json(['message' => 'Popup Feed Not Found!'], 404);
    }
}
