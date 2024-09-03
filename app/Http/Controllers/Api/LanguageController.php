<?php

namespace App\Http\Controllers\Api;

use App\Models\Text;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LanguageData;
use App\Models\StartPage;
use App\Models\headervoter;
use App\Models\headerhistory;
use Illuminate\Support\Facades\Validator;

use App\Models\HeaderGreatingSection;
use App\Models\HeaderVideoSection;
use App\Models\SectionSetting;

use App\Models\SettingOverviewSection;
use App\Models\MyProfileFriendsSection;
use App\Models\MyProfileOfficeSection;
use App\Models\Channels;
use App\Models\HeaderStreamSection;
use App\Models\ChannelSetting;
use App\Models\MyProfileMultimedia;
use App\Models\MyProfileHomeSection;
use App\Models\HeaderRestaurentSection;
use App\Models\HeaderEventSection;
use App\Models\HeaderOnlineShopSection;
use App\Models\SignupSection;
use App\Models\HeaderMusicSection;
use App\Models\HeaderServicePortalSection;
use App\Models\SigninSection;
use App\Models\FooterQuickLauncher;
use App\Models\FooterChatSection;
use App\Models\HeaderFeedSection;
use App\Models\VisiterProfile;
use App\Models\HeaderSectionStories;
use App\Models\FooterFriendSection;
use App\Models\FooterCart;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $languages = Language::all();
    $languageData = LanguageData::all();

    $textCounts = Text::count();

    foreach ($languages as $language) {
      $language->texts_count = $textCounts;
    }
    return response()->json(['languages' => $languages, 'languageData' => $languageData],200);
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
    $request->validate([
      'icon' => 'required',
      'title' => 'required',
    ]);

    $language = new Language();
    $language->title = $request->title;
    $language->status = $request->status;

    if ($request->has('icon')) {
      $image_path = $request->file('icon')->store('/images/language/icon', 'public');
      $language->icon = $image_path;
    }
    if ($language->save()) {
        return response()->json(['language' => $language,'message' => 'Your language has been created successfully.'],201);
    } else {
        return response()->json(['language' => $language,'message' => 'Your language has not been created successfully.'],403);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Language  $language
   * @return \Illuminate\Http\Response
   */
  public function show(Language $language)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Language  $language
   * @return \Illuminate\Http\Response
   */
  public function edit(Language $language)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Language  $language
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
        'title' => 'required',
      ]);
    $language = Language::find($id);
    $language->title = $request->title;
    $language->status = $request->status;
    if ($request->has('icon')) {
        $image_path = $request->file('icon')->store('/images/language/icon', 'public');
        $language->icon = $image_path;
      }
    if ($language->save()) {
        return response()->json(['language' => $language,'message' => 'Your language has been updated successfully.'],201);
    } else {
        return response()->json(['language' => $language,'message' => 'Your language has not  been updated.'],403);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Language  $language
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $language = Language::find($id);

      if (!$language) {
          return response()->json([
              'success' => false,
              'message' => 'Language not found.'
          ], 404);
      }

      try {
          if ($language->delete()) {
              return response()->json([
                  'success' => true,
                  'language' => $language,
                  'message' => 'Your language has been deleted successfully.'
              ], 200);
          } else {
              return response()->json([
                  'success' => false,
                  'language' => $language,
                  'message' => 'Failed to delete language.'
              ], 500);
          }
      } catch (\Exception $e) {
          return response()->json([
              'success' => false,
              'language' => $language,
              'message' => 'Failed to delete language.',
              'error' => $e->getMessage()
          ], 500);
      }
  }
  public function footerquicksection(Request $request)
  {
      // Validate the request data
      $validator = Validator::make($request->all(), [
          'language_id' => [
              'required',
              'string',
              'size:24', // MongoDB ObjectId size
              function ($attribute, $value, $fail) {
                  if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                      return $fail($attribute.' is not a valid ObjectId.');
                  }
                  // Check if the ObjectId exists in the languages collection
                  if (!Language::where('_id', $value)->exists()) {
                      return $fail($attribute.' does not exist.');
                  }
              },
          ],
          'quick_launcher' => 'required|string|max:255',
          'wishes_thanks' => 'required|string|max:255',
          'greetings' => 'required|string|max:255',
          'wishes' => 'required|string|max:255',
          'prays' => 'required|string|max:255',
          'introduce_business' => 'required|string|max:255',
          'services' => 'required|string|max:255',
          'bazar' => 'required|string|max:255',
          'channels' => 'required|string|max:255',
          'shops' => 'required|string|max:255',
          'fast_sharing' => 'required|string|max:255',
          'feeds' => 'required|string|max:255',
          'stories' => 'required|string|max:255',
          'golive' => 'required|string|max:255',
          'video' => 'required|string|max:255',
          'quick_access' => 'required|string|max:255',
          'my_storage' => 'required|string|max:255',
          'used' => 'required|string|max:255',
          'free' => 'required|string|max:255',
          'coming_soon' => 'required|string|max:255',
          'under_development' => 'required|string|max:255',
      ]);

      // Check for validation errors
      if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
      }

      $validatedData = $validator->validated();

      try {
          FooterQuickLauncher::updateOrCreate(
              ['language_id' => $validatedData['language_id']],
              $validatedData
          );

          // Redirect back with success message
          return redirect()->back()->with('success', 'Footer Quick Section saved successfully.');
      } catch (\Exception $e) {
          // Redirect back with error message
          return redirect()->back()->with('error', 'Error saving Footer Quick Section: ' . $e->getMessage());
      }
  }




  public function keywordstore(Request $request)
  {
     //  dd($request->all());
      try {
          $validator = Validator::make($request->all(), [
              'language_id' => [
                  'required',
                  'string',
                  'size:24', // MongoDB ObjectId size
                  function ($attribute, $value, $fail) {
                      if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                          return $fail($attribute.' is not a valid ObjectId.');
                      }
                      // Check if the ObjectId exists in the languages collection
                      if (!Language::where('_id', $value)->exists()) {
                          return $fail($attribute.' does not exist.');
                      }
                  },
              ],
              'alert' => 'nullable|string',
              'upgrade' => 'nullable|string',
              'premium' => 'nullable|string',
              'vip' => 'nullable|string',
              'monthly' => 'nullable|string',
              'feeds' => 'nullable|string',
              'text_comments' => 'nullable|string',
              'music_player' => 'nullable|string',
              'video_playlist' => 'nullable|string',
              'discount' => 'nullable|string',
              'stories' => 'nullable|string',
              'voice_comments' => 'nullable|string',
              'live_stream' => 'nullable|string',
              'fanpage' => 'nullable|string',
              'gift_free' => 'nullable|string',
              'show_me_the_gift' => 'nullable|string',
              'congratulations_educated' => 'nullable|string',
              'congratulations_academic' => 'nullable|string',
              'premium_description' => 'nullable|string',
              'go_back_home' => 'nullable|string',
              'your_activation_code_mail' => 'nullable|string',
              'your_password_code_mail' => 'nullable|string',
              'your_fanpage_activation_code' => 'nullable|string',
              'one_time_code' => 'nullable|string',
              'follow_steps_on_your_device' => 'nullable|string',
              'welcome' => 'nullable|string',
          ]);

          if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
          }

          $validatedData = $validator->validated();

          $language = Language::findOrFail($validatedData['language_id']);

          $languageKeyword = $language->keywords()->updateOrCreate(
              ['language_id' => $validatedData['language_id']],
              $validatedData
          );

          return redirect()->back()->with('success', 'Language keyword section updated successfully.');
      } catch (\Exception $e) {
          return redirect()->back()->with('error', 'Error saving language keyword section: ' . $e->getMessage());
      }
  }
  public function startpage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'language' => 'required|string|max:255',
            'our_policy' => 'nullable|string',
            'login' => 'nullable|string',
            'sign_up' => 'nullable|string',
            'dear_guest' => 'nullable|string',
            'create_account' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            StartPage::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            return redirect()->back()->with('success', 'Start page data saved successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving start page data: ' . $e->getMessage());
        }
    }
    public function signupsection(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'language_search' => 'nullable|string|max:255',
            'language_save_change' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:male,female,missing',
            'select_gender_prompt' => 'nullable|string|max:255',
            'gender_ok' => 'nullable|string|max:255',
            'gender_start' => 'nullable|string|max:255',
            'firstname' => 'nullable|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255|unique:signup_sections,username',
            'your_status' => 'nullable|string|in:single,engaged,married',
            'status_next' => 'nullable|string|max:255',
            'status_back' => 'nullable|string|max:255',
            'current_location' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'origin' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255|unique:signup_sections,email',
            'repeat_email' => 'nullable|same:email',
            'user_exists' => 'nullable|string|max:255',
            'email_ok' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:4',
            'password_confirmation' => 'nullable_with:password|same:password',


            'account_created_success_message' => 'nullable|string|max:255',

            'sign_in_redirect' => 'nullable|string|max:255',
        ]);

        // Dump and die the validator instance
       // dd($validator);

        if ($validator->fails()) {
            // Dump and die if validation fails
            dd('Validation failed', $validator->errors());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Dump and die the validated data
        $validatedData = $validator->validated();
       // dd('Validation passed', $validatedData);

        try {
            // Dump and die before updating or creating the record
          //  dd('Before updateOrCreate', $validatedData);

            SignupSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Dump and die if saving is successful
         //   dd('Record saved');

            return redirect()->back()->with('success', 'Signup section saved successfully.');
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Error saving signup section: '.$e->getMessage());

            // Dump and die the exception message
            dd('Exception caught', $e->getMessage());

            return redirect()->back()->with('error', 'Error saving signup section: ' . $e->getMessage());
        }
    }

    public function signinsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'email' => 'required|email|max:255|unique:signin_sections,email',
            'password' => 'required|string|min:8',
            'repeat_password' => 'required|same:password',
            'signin' => 'required|string|max:255',
            'login_error' => 'required|string|max:255',
            'not_found' => 'required|string|max:255',
            'signup' => 'required|string|max:255',
            'regain_password_mail' => 'required|string|max:255',
            'email_format_wrong' => 'required|string|max:255',
            'correct_email' => 'required|string|max:255',
            'password_reset_sent' => 'required|string|max:255',
            'reset_password_email' => 'required|string|max:255',
            'verification' => 'required|string|max:255',
            'authentication_code_sent' => 'required|string|max:255',
            'did_not_receive_code' => 'required|string|max:255',
            'resend_code' => 'required|string|max:255',
            'time_left' => 'required|string|max:255',
            'verify_now' => 'required|string|max:255',
            'error_found' => 'required|string|max:255',
            'invalid_otp' => 'required|string|max:255',
            'create_password' => 'required|string|max:255',
            'secure_password' => 'required|string|max:255',
            'has_8_characters' => 'required|string|max:255',
            'uppercase_or_symbol' => 'required|string|max:255',
            'has_number' => 'required|string|max:255',
            'continue' => 'required|string|max:255',
            'successfully' => 'required|string|max:255',
            'logged_in' => 'required|string|max:255',
            'remember_me' => 'nullable|boolean',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the signin section entry
            SigninSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Signin section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving signin section: ' . $e->getMessage());
        }
    }



public function footercartsection(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'music_cart' => 'nullable|string|max:255',
            'video_cart' => 'nullable|string|max:255',
            'bazar_cart' => 'nullable|string|max:255',
            'event_cart' => 'nullable|string|max:255',
            'shop_cart' => 'nullable|string|max:255',
            'service_cart' => 'nullable|string|max:255',
            'wishes_cart' => 'nullable|string|max:255',
            'donate' => 'nullable|string|max:255',
            'portal_cart' => 'nullable|string|max:255',
            'payment_method' => 'nullable|string|max:255',
            'accept_policy_terms' => 'nullable|string|max:255',
            'office_information' => 'nullable|string|max:255',
            'bank_information' => 'nullable|string|max:255',
        ]);
   // dd($validator);
        // Check for validation errors
        if ($validator->fails()) {
            dd('validation failed',$validator->errors());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            //dd('validation Sucess',$validator->success());
           $asim= FooterCart::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Footer Cart Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Footer Quick Section: ' . $e->getMessage());
        }
    }
    public function footerfriendsection(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'friends_online' => 'nullable|string|max:255',
            'user_you_may_know' => 'nullable|string|max:255',
            'see_all' => 'nullable|string|max:255',
            'friends_request' => 'nullable|string|max:255',
            'search_friends' => 'nullable|string|max:255',
            'friends' => 'nullable|string|max:255',
            'no_record_found' => 'nullable|string|max:255',
            'search_family' => 'nullable|string|max:255',
            'family' => 'nullable|string|max:255',
            'no_family_member_found' => 'nullable|string|max:255',
            'search_user' => 'nullable|string|max:255',
            'no_friend_family_found' => 'nullable|string|max:255',
        ]);
    // dd($validator);
        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the footer cart section entry
            FooterFriendSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Footer Friend Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Footer Friend Section: ' . $e->getMessage());
        }
    }

    public function headergreatingsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'greetings' => 'nullable|string|max:255',
            'pray' => 'nullable|string|max:255',
            'sympathy' => 'nullable|string|max:255',
            'see_all' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header greeting section entry
            HeaderGreatingSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Greeting Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Greeting Section: ' . $e->getMessage());
        }
    }
    public function headermusicsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'new_albums' => 'nullable|string|max:255',
            'latest_videos' => 'nullable|string|max:255',
            'new_artist' => 'nullable|string|max:255',
            'latest_stream' => 'nullable|string|max:255',
            'latest_songs' => 'nullable|string|max:255',
            'see_all' => 'nullable|string|max:255',
            'history' => 'nullable|string|max:255',
            'invoice' => 'nullable|string|max:255',
            'purchase' => 'nullable|string|max:255',
            'my_invoice' => 'nullable|string|max:255',
            'music_history' => 'nullable|string|max:255',
            'my_purchase' => 'nullable|string|max:255',
            'options' => 'nullable|string|max:255',
            'share_with_friends' => 'nullable|string|max:255',
            'move_to_playlist' => 'nullable|string|max:255',
            'save' => 'nullable|string|max:255',
            'remove_from_playlist' => 'nullable|string|max:255',
            'categorys' => 'nullable|string|max:255',
            'popular_songs' => 'nullable|string|max:255',
            'latest_uploads' => 'nullable|string|max:255',
            'new_artist_2' => 'nullable|string|max:255',
            'artist' => 'nullable|string|max:255',
            'songs' => 'nullable|string|max:255',
            'albums' => 'nullable|string|max:255',
            'video_clip' => 'nullable|string|max:255',
            'new_album' => 'nullable|string|max:255',
            'albums_2' => 'nullable|string|max:255',
            'my_playlist' => 'nullable|string|max:255',
            'playlist' => 'nullable|string|max:255',
            'need_more_playlist' => 'nullable|string|max:255',
            'buy_new_playlist' => 'nullable|string|max:255',
            'options_2' => 'nullable|string|max:255',
            'create_new_playlist' => 'nullable|string|max:255',
            'enter_new_playlist_name' => 'nullable|string|max:255',
            'select' => 'nullable|string|max:255',
            'private' => 'nullable|string|max:255',
            'public' => 'nullable|string|max:255',
            'friends' => 'nullable|string|max:255',
            'family' => 'nullable|string|max:255',
            'create' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header music section entry
            HeaderMusicSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Music Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Music Section: ' . $e->getMessage());
        }
    }
    public function headervideosection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'yahala' => 'nullable|string|max:255',
            'arabic_social_site' => 'nullable|string|max:255',
            'in_development' => 'nullable|string|max:255',
            'soon_available' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header video section entry
            HeaderVideoSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Video Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Video Section: ' . $e->getMessage());
        }
    }
    public function headerstreamsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'yahala' => 'nullable|string|max:255',
            'arabic_social_site' => 'nullable|string|max:255',
            'in_development' => 'nullable|string|max:255',
            'soon_available' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header video section entry
            HeaderStreamSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Stream Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Video Section: ' . $e->getMessage());
        }
    }
    public function headereventsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'yahala' => 'nullable|string|max:255',
            'arabic_social_site' => 'nullable|string|max:255',
            'in_development' => 'nullable|string|max:255',
            'soon_available' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header video section entry
            HeaderEventSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Event Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Video Section: ' . $e->getMessage());
        }
    }
    public function headeronlineshopsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'yahala' => 'nullable|string|max:255',
            'arabic_social_site' => 'nullable|string|max:255',
            'in_development' => 'nullable|string|max:255',
            'soon_available' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header video section entry
            HeaderOnlineShopSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Event Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Video Section: ' . $e->getMessage());
        }
    }


    public function footerchatsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'bazar_chat' => 'nullable|string|max:255',
            'shop_chat' => 'nullable|string|max:255',
            'service_chat' => 'nullable|string|max:255',
            'friends_chat' => 'nullable|string|max:255',
            'family_chat' => 'nullable|string|max:255',
            'group_chat' => 'nullable|string|max:255',
            'notifications' => 'nullable|string|max:255',
            'fanpage_chat' => 'nullable|string|max:255',
            'wishes_chat' => 'nullable|string|max:255',
            'favorite_contacts' => 'nullable|string|max:255',
            'my_groups' => 'nullable|string|max:255',
            'coming_soon' => 'nullable|string|max:255',
            'chat_overview' => 'nullable|string|max:255',
            'new_messages' => 'nullable|string|max:255',
            'options' => 'nullable|string|max:255',
            'block_user' => 'nullable|string|max:255',
            'unblocked' => 'nullable|string|max:255',
            'block' => 'nullable|string|max:255',
            'report_user' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the footer chat section entry
            FooterChatSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Footer Chat Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Footer Chat Section: ' . $e->getMessage());
        }
    }
    public function headerfeedsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'no_stories_found' => 'nullable|string|max:255',
            'latest_feeds' => 'nullable|string|max:255',
            'see_all' => 'nullable|string|max:255',
            'greeting_wishes' => 'nullable|string|max:255',
            'in_development' => 'nullable|string|max:255',
            'soon_available' => 'nullable|string|max:255',
            'latest_history' => 'nullable|string|max:255',
            'latest_vote' => 'nullable|string|max:255',
            'post_comment' => 'nullable|string|max:255',
            'like' => 'nullable|string|max:255',
            'replay' => 'nullable|string|max:255',
            'report_comment' => 'nullable|string|max:255',
            'show_more' => 'nullable|string|max:255',
            'see_more_feeds' => 'nullable|string|max:255',
            'show_less' => 'nullable|string|max:255',
            'see_less_feeds' => 'nullable|string|max:255',
            'save_feed' => 'nullable|string|max:255',
            'add_to_collection' => 'nullable|string|max:255',
            'active_notification' => 'nullable|string|max:255',
            'get_message_publish_feed' => 'nullable|string|max:255',
            'hide_feed_from_user' => 'nullable|string|max:255',
            'Lorem_Ipsum' => 'nullable|string|max:255',
            'report_this_feed' => 'nullable|string|max:255',
            'share_yekbun' => 'nullable|string|max:255',
            'public' => 'nullable|string|max:255',
            'friend' => 'nullable|string|max:255',
            'family' => 'nullable|string|max:255',
            'enter_description' => 'nullable|string|max:255',
            'create_feed' => 'nullable|string|max:255',
            'select_background' => 'nullable|string|max:255',
            'select_font_color' => 'nullable|string|max:255',
            'select_service' => 'nullable|string|max:255',
            'search' => 'nullable|string|max:255',
            'newest' => 'nullable|string|max:255',
            'friends' => 'nullable|string|max:255',
            'must_viewed' => 'nullable|string|max:255',
            'done' => 'nullable|string|max:255',
            'no_data_found' => 'nullable|string|max:255',
            'my_collection' => 'nullable|string|max:255',
            'no_collection' => 'nullable|string|max:255',
            'create_collection' => 'nullable|string|max:255',
            'new_playlist_name' => 'nullable|string|max:255',
            'select' => 'nullable|string|max:255',
            'private' => 'nullable|string|max:255',
            'create' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header feed section entry
            HeaderFeedSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Feed Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Feed Section: ' . $e->getMessage());
        }
    }
    public function headersectionstories(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'my_subscriber' => 'nullable|string|max:255',
            'friends_stories' => 'nullable|string|max:255',
            'family_stories' => 'nullable|string|max:255',
            'my_stories' => 'nullable|string|max:255',
            'see_all' => 'nullable|string|max:255',
            'created' => 'nullable|string|max:255',
            'story_created_success' => 'nullable|string|max:255',
            'latest_stories' => 'nullable|string|max:255',
            'no_stories_found' => 'nullable|string|max:255',
            'recently_viewed' => 'nullable|string|max:255',
            'stories' => 'nullable|string|max:255',
            'create_new_stories' => 'nullable|string|max:255',
            'start_now' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header section stories entry
            HeaderSectionStories::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Section Stories saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Section Stories: ' . $e->getMessage());
        }
    }

    public function visiterprofilesection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'say_hello' => 'nullable|string|max:255',
            'be_friends' => 'nullable|string|max:255',
            'cancel_friend_request' => 'nullable|string|max:255',
            'my_feeds' => 'nullable|string|max:255',
            'see_all_my_feeds' => 'nullable|string|max:255',
            'photo_gallery' => 'nullable|string|max:255',
            'see_all_photo_gallery' => 'nullable|string|max:255',
            'video_gallery' => 'nullable|string|max:255',
            'see_all_video_gallery' => 'nullable|string|max:255',
            'my_friends' => 'nullable|string|max:255',
            'see_all_my_friends' => 'nullable|string|max:255',
            'options' => 'nullable|string|max:255',
            'move_user' => 'nullable|string|max:255',
            'friends_option' => 'nullable|string|max:255',
            'family_option' => 'nullable|string|max:255',
            'remove_option' => 'nullable|string|max:255',
            'block_user' => 'nullable|string|max:255',
            'unblock_block_user' => 'nullable|string|max:255',
            'block_block_user' => 'nullable|string|max:255',
            'report_user' => 'nullable|string|max:255',
            'insult_report_user' => 'nullable|string|max:255',
            'image_report_user' => 'nullable|string|max:255',
            'content_report_user' => 'nullable|string|max:255',
            'feedback_report_user' => 'nullable|string|max:255',
            'annoyance_report_user' => 'nullable|string|max:255',
            'racism_report_user' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the visiter profile section entry
            VisiterProfile::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Visiter Profile Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Visiter Profile Section: ' . $e->getMessage());
        }
    }
     public function headerrestaurantsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'yahala' => 'nullable|string|max:255',
            'arabic_social_site' => 'nullable|string|max:255',
            'in_development' => 'nullable|string|max:255',
            'soon_available' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header video section entry
            HeaderRestaurentSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Restaurent Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Video Section: ' . $e->getMessage());
        }
    }
    public function headerserviceportalsection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'yahala' => 'nullable|string|max:255',
            'arabic_social_site' => 'nullable|string|max:255',
            'in_development' => 'nullable|string|max:255',
            'soon_available' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the header video section entry
            HeaderServicePortalSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Header Service Portal Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Header Video Section: ' . $e->getMessage());
        }
    }
    public function settingOverviewSection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'setting_overview' => 'nullable|string|max:255',
            'notifications' => 'nullable|string|max:255',
            'settings' => 'nullable|string|max:255',
            'my_profile' => 'nullable|string|max:255',
            'my_channels' => 'nullable|string|max:255',
            'shortcut' => 'nullable|string|max:255',
            'collection' => 'nullable|string|max:255',
            'view_later' => 'nullable|string|max:255',
            'market' => 'nullable|string|max:255',
            'manage_items' => 'nullable|string|max:255',
            'add' => 'nullable|string|max:255',
            'manage_ads' => 'nullable|string|max:255',
            'manage_notifications' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
            'manage_password' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'change_email' => 'nullable|email|max:255',
            'ringtone' => 'nullable|string|max:255',
            'manage_ringtone' => 'nullable|string|max:255',
            'music' => 'nullable|string|max:255',
            'manage_player' => 'nullable|string|max:255',
            'network' => 'nullable|string|max:255',
            'manage_connections' => 'nullable|string|max:255',
            'documentation' => 'nullable|string|max:255',
            'my_documents' => 'nullable|string|max:255',
            'stoarage' => 'nullable|string|max:255',
            'manage_storage' => 'nullable|string|max:255',
            'violate' => 'nullable|string|max:255',
            'manage_reels' => 'nullable|string|max:255',
            'my_channels_2' => 'nullable|string|max:255',
            'in_development_2' => 'nullable|string|max:255',
            'soon_available_2' => 'nullable|string|max:255',
            'stadnard' => 'nullable|string|max:255',
            'upgrade_account' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the setting overview section entry
            SettingOverviewSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Setting Overview Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Setting Overview Section: ' . $e->getMessage());
        }
    }
    public function myProfileHomeSection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'update_profile_image' => 'nullable|string|max:255',
            'select_or_upload_banner' => 'nullable|string|max:255',
            'like' => 'nullable|string|max:255',
            'following' => 'nullable|string|max:255',
            'following_posts' => 'nullable|string|max:255',
            'menu' => 'nullable|string|max:255',
            'share_on_yekbun' => 'nullable|string|max:255',
            'upload_video' => 'nullable|string|max:255',
            'create_reels' => 'nullable|string|max:255',
            'go_live' => 'nullable|string|max:255',
            'my_feed' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the MyProfileHomeSection entry
            MyProfileHomeSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'My Profile Home Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving My Profile Home Section: ' . $e->getMessage());
        }
    }
    public function myProfileMultimedia(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute . ' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute . ' does not exist.');
                    }
                },
            ],
            'photo_gallery' => 'nullable|string|max:255',
            'video_gallery' => 'nullable|string|max:255',
            'my_playlist' => 'nullable|string|max:255',
            'my_artist' => 'nullable|string|max:255',
            'must_listen' => 'nullable|string|max:255',
            'my_subscribes' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        // Handle file uploads
        if ($request->hasFile('photo_gallery')) {
            $validatedData['photo_gallery'] = $request->file('photo_gallery')->store('photos', 'public');
        }

        if ($request->hasFile('video_gallery')) {
            $validatedData['video_gallery'] = $request->file('video_gallery')->store('videos', 'public');
        }

        try {
            // Update or create the MyProfileMultimedia entry
            MyProfileMultimedia::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'My Profile Multimedia saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving My Profile Multimedia: ' . $e->getMessage());
        }
    }
    public function myProfileFriendsSection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'friend_request' => 'nullable|string|max:255',
            'no_friend_requests' => 'nullable|string|max:255',
            'see_all_friend_requests' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the MyProfileFriendsSection entry
            MyProfileFriendsSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'My Profile Friends Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving My Profile Friends Section: ' . $e->getMessage());
        }
    }
    public function myProfileOfficeSection(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'standard' => 'nullable|string|max:255',
            'upgrade_account' => 'nullable|string|max:255',
            'my_fanpage' => 'nullable|string|max:255',
            'new_violate' => 'nullable|string|max:255',
            'you_get_flag' => 'nullable|string|max:255',
            'reason' => 'nullable|string|max:255',
            'closed_violate' => 'nullable|string|max:255',
            'my_fanpage_channel' => 'nullable|string|max:255',
            'owner' => 'nullable|string|max:255',
            'follower' => 'nullable|string|max:255',
            'member' => 'nullable|string|max:255',
            'our_document' => 'nullable|string|max:255',
            'see_all_document' => 'nullable|string|max:255',
            'statics' => 'nullable|string|max:255',
            'my_storage' => 'nullable|string|max:255',
            'used_storage' => 'nullable|string|max:255',
            'free_storage' => 'nullable|string|max:255',
            'my_wishes' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the MyProfileOfficeSection entry
            MyProfileOfficeSection::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'My Profile Office Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving My Profile Office Section: ' . $e->getMessage());
        }
    }
    public function myChannels(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'friend_request' => 'nullable|string|max:255',

        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the MyProfileOfficeSection entry
            Channels::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Channels Section saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Channels: ' . $e->getMessage());
        }
    }
    public function ChannelsSetting(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'friend_request' => 'nullable|string|max:255',

        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the MyProfileOfficeSection entry
            ChannelSetting::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Channels Setting saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Channels: ' . $e->getMessage());
        }
    }


    public function saveSectionSettings(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'setNewPassword' => 'nullable|string|max:255',
            'oldPassword' => 'nullable|string|max:255',
            'newPassword' => 'nullable|string|max:255',
            'confirmNewPassword' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'oldEmail' => 'nullable|email|max:255',
            'newEmail' => 'nullable|email|max:255',
            'repeatNewEmail' => 'nullable|email|max:255',
            'details' => 'nullable|string',
            'status' => 'nullable|string|max:255',
            'notificationType' => 'nullable|string|max:255',
            'musicVolume' => 'nullable|integer|min:0|max:100',
            'messagesRingtone' => 'nullable|string|max:255',
            'callRingtone' => 'nullable|string|max:255',
            'notificationsRingtone' => 'nullable|string|max:255',
            'leaveReason' => 'nullable|string|max:255',
            'describeReason' => 'nullable|string',
            'contactType' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the SectionSetting entry
            SectionSetting::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Section Settings saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Section Settings: ' . $e->getMessage());
        }
    }
    public function saveSectionhistory(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'categories' => 'required|string|max:255',
            'newst_upload' => 'required|string|max:255',
            'must_viewed' => 'required|string|max:255',
            'share_on_yekbun' => 'required|string|max:255',
            'public' => 'required|string|max:255',
            'friends' => 'required|string|max:255',
            'family' => 'required|string|max:255',
            'write_a_comment' => 'required|string|max:255',
            'post_media_comment' => 'required|string|max:255',
            'add_voice' => 'required|string|max:255',
            'see_all' => 'required|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the headerhistory entry
            headerhistory::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Section Settings saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Section Settings: ' . $e->getMessage());
        }
    }

    public function saveSectionvoter(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'language_id' => [
                'required',
                'string',
                'size:24', // MongoDB ObjectId size
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^[a-f\d]{24}$/i', $value)) {
                        return $fail($attribute.' is not a valid ObjectId.');
                    }
                    // Check if the ObjectId exists in the languages collection
                    if (!Language::where('_id', $value)->exists()) {
                        return $fail($attribute.' does not exist.');
                    }
                },
            ],
            'categories' => 'required|string|max:255',
            'newst_uploads' => 'required|string|max:255',
            'past_vote' => 'required|string|max:255',
            'your_vote' => 'required|string|max:255',
            'what_u_like' => 'required|string|max:255',
            'notification' => 'required|string|max:255',
            'vote_one_time' => 'required|string|max:255',
            'cant_redo_vote' => 'required|string|max:255',
            'community' => 'required|string|max:255',
            'reviews_qualification' => 'required|string|max:255',
            'total' => 'required|string|max:255',
            'statistics' => 'required|string|max:255',
            'age_and_gender' => 'required|string|max:255',
            'male' => 'required|string|max:255',
            'female' => 'required|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            // Update or create the headervoter entry
            headervoter::updateOrCreate(
                ['language_id' => $validatedData['language_id']],
                $validatedData
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Section Settings saved successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error saving Section Settings: ' . $e->getMessage());
        }
    }





}
