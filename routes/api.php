<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\EmojiFeedController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Api\FeedsController;
use App\Http\Controllers\Api\BazarController;
use App\Http\Controllers\Api\AdminActivityController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\UserRolesController;

use App\Http\Controllers\Api\AdminProfileController;
use App\Http\Controllers\Api\MediaController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Api\MusicController;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\TicketController;
use App\Http\Controllers\Api\VotingController;
use App\Http\Controllers\Admin\Donation\DonationController as DonationDonationController;
use App\Http\Controllers\Api\FanPageController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\PolicyAndTermsController;
use App\Http\Controllers\Api\DonationController;
use App\Http\Controllers\Api\DiamondUserController;
use App\Http\Controllers\Api\FlaggedUserController;
use App\Http\Controllers\Api\PremiumUserController;
use App\Http\Controllers\Api\NewsCategoryController;
use App\Http\Controllers\Api\OrganizationController;
use App\Http\Controllers\Api\StandardUserController;
use App\Http\Controllers\Api\BazarCategoryController;
use App\Http\Controllers\Api\EventCategoryController;
use App\Http\Controllers\Api\ManageFanPageController;
use App\Http\Controllers\Api\MediaCategoryController;
use App\Http\Controllers\Api\MusicCategoryController;
use App\Http\Controllers\Api\VotingCategoryController;
use App\Http\Controllers\Api\HistoryCategoryController;
use App\Http\Controllers\Api\UploadVideoClipController;
use App\Http\Controllers\Api\UploadVideoCategoryController;
use App\Http\Controllers\Api\UploadVideoController;
use App\Http\Controllers\Api\UploadMovieCategoryController;
use App\Http\Controllers\Api\UploadMovieController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BazarSubCategoryController;
use App\Http\Controllers\Api\TwoFactorController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\TranslationController;
use App\Http\Controllers\Api\AccountSettingController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\FeedBackgroundImageController;
use App\Http\Controllers\Api\UserSettingController;
use App\Http\Controllers\Api\RingtoneController;
use App\Http\Controllers\Api\CollectionController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\UpgradeAccountController;
use App\Http\Controllers\Api\StripeController;
use App\Http\Controllers\Api\AnimationEmojiController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\MarketServiceContorller;
use App\Http\Controllers\Api\PlaylistController;
use App\Http\Controllers\Api\ReactionController;
use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\PostGalleryController;
use App\Http\Controllers\Api\AvatarsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/getfeeds', [AvatarsController::class, 'getFeeds']);
Route::post('/postfeed', [AvatarsController::class, 'asimpostfeed']);

Route::get('/getfeeds', [CountryController::class, 'AvatarsFeeds34']);



// Authentication
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('forgot-password', [AuthController::class, 'forgot_password']);
Route::post('change-password', [AuthController::class, 'change_password']);
Route::post('/reset/password', [AuthController::class, 'reset']);
Route::post('/reset', [AuthController::class, 'resetpassword']);
Route::post('/reset/resend', [AuthController::class, 'reset_resend']);
Route::post('2fa', [TwoFactorController::class, 'store']);
Route::post('2fa/reset', [TwoFactorController::class, 'resend']);
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);
Route::delete('/user/delete', [AuthController::class, 'deleteUserByEmail']);
Route::post('/check-user-exists', [AuthController::class, 'checkUserExists']);
Route::post('/check-email-exists', [AuthController::class, 'checkEmailExists']);
Route::post('/check-phone-exists', [AuthController::class, 'checkPhoneExists']);


//lost device
Route::post('/register-device', [AuthController::class, 'registerDevice']);

Route::post('/register-verify-device', [AuthController::class, 'verifyDevice']);
Route::post('/check-existing-device', [AuthController::class, 'lostDeviceCheck']);

Route::post('/check-email-lost', [AuthController::class, 'lostdevicecheckEmail']);

Route::post('/verify-otp-lostdevice', [AuthController::class, 'verifyOtpdevice']);


Route::get('/user-personal-profile', [AuthController::class, 'userprofile']);


 Route::middleware('verify.token')->get('/admin/profile', [AdminProfileController::class, 'index']);


 //News Feed Section
Route::post('news-feeds', [FeedsController::class, 'news_store']);
Route::get('news-feeds', [FeedsController::class, 'news']);

//Feed section
Route::post('feeds', [FeedsController::class, 'store']);
Route::get('feeds', [FeedsController::class, 'index']);
//Event Section
Route::post('events', [FeedsController::class, 'store_event']);
Route::get('events', [FeedsController::class, 'index']);


Route::post('/manage_video', [VideoController::class, 'store'])->name('manage_video.store');




Route::post('/admin/profile/store', [AdminProfileController::class, 'store']);
Route::get('/admin/profile/security', [AdminProfileController::class, 'security']);
Route::get('/admin/profile/account', [AdminProfileController::class, 'account']);
Route::get('/admin/profile/billing', [AdminProfileController::class, 'billing']);
Route::get('/admin/profile/notification', [AdminProfileController::class, 'notification']);
Route::get('/admin/profile/connection', [AdminProfileController::class, 'connection']);
Route::post('/admin/change-password', [AdminProfileController::class, 'change_password']);
Route::get('/admin/2FA', [AdminProfileController::class, 'enable']);

// Route::middleware('auth:sanctum')->group(function () {
  Route::get('countries', [CountryController::class, 'index']);


  Route::get('countries', [CountryController::class, 'index']);

  Route::get('/nationality', [CountryController::class, 'getNationality']);

  Route::put('countries/{id}', [CountryController::class, 'update']);
  Route::delete('countries/{id}', [CountryController::class, 'destroy']);



  Route::get('policy_and_terms', [PolicyAndTermsController::class, 'index']);
  Route::post('policy_and_terms', [PolicyAndTermsController::class, 'storekrdo']);
  Route::post('policy/saveFileds', [PolicyAndTermsController::class, 'saveFileds']);
  Route::delete('policy_and_terms/{id}', [PolicyAndTermsController::class, 'destroy']);

  Route::get('languages', [LanguageController::class, 'index']);
  Route::post('languages', [LanguageController::class, 'store']);
  Route::post('languages/{id}', [LanguageController::class, 'update']);
  Route::delete('languages/{id}', [LanguageController::class, 'destroy']);

  Route::post('/logout', [AuthController::class, 'logout']);


  Route::get('/signin-section/{languageId}', [LanguageController::class, 'getSignInSectionByLanguageId']);
  Route::get('/signup-section/{languageId}', [LanguageController::class, 'getSignUPSectionByLanguageId']);
  Route::get('/homepagelanguage-section/{languageId}', [LanguageController::class, 'getShomepagelanguageByLanguageId']);
  Route::get('/app_policy-section/{languageId}', [LanguageController::class, 'getShomeApp_PolicyByLanguageId']);
  Route::get('/all-language-sections/{languageId}', [LanguageController::class, 'getAllSectionsByLanguageId']);



  Route::prefix('user-roles')
    ->group(function () {
        Route::get('/educated', [UserRolesController::class, 'educated'])->name('educated');
        Route::get('/cultivated', [UserRolesController::class, 'cultivated'])->name('cultivated');
        Route::get('/academic', [UserRolesController::class, 'academic'])->name('academic');
    });






  // Admin Activity

  Route::get("/admin-activity/system-info", [AdminActivityController::class, 'getSystemInfo']);
  Route::get("/admin-activity/donation", [AdminActivityController::class, 'getDonations']);
  Route::get("/admin-activity/surveys", [AdminActivityController::class, 'getSurveys']);
  Route::get("/admin-activity/greetings", [AdminActivityController::class, 'getGreetings']);
  Route::post("/admin-activity/system-info", [AdminActivityController::class, 'store_systemInfo']);
  Route::post("/admin-activity/donation", [AdminActivityController::class, 'store_donation']);
  Route::post("/admin-activity/surveys", [AdminActivityController::class, 'store_surveys']);
  Route::post("/admin-activity/greetings", [AdminActivityController::class, 'store_greetings']);
  Route::post("/admin-activity/delete-feeds", [AdminActivityController::class, 'delete_pops']);











  // Posts
  Route::resource('posts', PostController::class)->except(['create', 'edit']);

  // Flagged users
  Route::resource('flagged-users', FlaggedUserController::class)->except(['create', 'edit']);
  // Reports
  Route::resource('reports', ReportController::class)->except(['create', 'edit']);

  // Organizations
  Route::resource('organizations', OrganizationController::class)->except(['create', 'edit']);
  // Donations
  Route::resource('donations', DonationController::class)->except(['create', 'edit']);

  // Events
  Route::resource('events', EventController::class)->except(['create', 'edit']);
  // Event Categories
  Route::resource('event-categories', EventCategoryController::class)->except(['create', 'edit']);
  // Tickets
  Route::resource('tickets', TicketController::class)->except(['create', 'edit']);

  // Users
  Route::prefix('/users')
    ->group(function () {
      Route::resource('standard', StandardUserController::class);
      Route::resource('premium', PremiumUserController::class);
      Route::resource('diamond', DiamondUserController::class);
    });

  // News test
  Route::resource('news', NewsController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
  Route::resource('news-category', NewsCategoryController::class)->only([
    'index',
    'store',
    'update',
    'show',
    'destroy',
  ]);
  Route::resource('music-category', MusicCategoryController::class)->only([
    'index',
    'store',
    'show',
    'update',
    'destroy',
  ]);
  Route::resource('video-clip', UploadVideoClipController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  Route::resource('fan-page', FanPageController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
  Route::resource('manage-fanpage', ManageFanPageController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  Route::resource('voting', VotingController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
  Route::resource('voting-category', VotingCategoryController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  Route::resource('media-category', MediaCategoryController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  Route::resource('media', MediaController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
  Route::resource('history-category', HistoryCategoryController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  //Manage Cards
  Route::resource('history', HistoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
  Route::resource('bazar-category', BazarCategoryController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  Route::get('feedreasons', [FeedsController::class, 'feedindex']);

  Route::resource('/storysong', SongController::class);
  Route::resource('/storysong', SongController::class)->names([
      'index' => 'storysong.index',
      'create' => 'storysong.create',
      'store' => 'storysong.store',
      'show' => 'storysong.show',
      'edit' => 'storysong.edit',
      'update' => 'storysong.update',
      'destroy' => 'storysong.destroy',
  ]);

  Route::resource('bazar-subcategory', BazarSubCategoryController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);

  Route::resource('bazar', BazarController::class)->only(['index', 'store', 'show', 'destroy', 'update']);

  Route::resource('video-category', UploadVideoCategoryController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  Route::resource('video', UploadVideoController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
  Route::resource('movie-category', UploadMovieCategoryController::class)->only([
    'index',
    'store',
    'show',
    'destroy',
    'update',
  ]);
  Route::resource('movie', UploadMovieController::class)->only(['index', 'store', 'show', 'destroy', 'update']);

  //policy_and_terms

  Route::apiResource('policy-and-terms', PolicyAndTermsController::class);
   //Ringtone
  Route::get('app-setting/message-ringtone', [RingtoneController::class, 'getMessageRingtones']);
  Route::get('app-setting/call-ringtone', [RingtoneController::class, 'getCallRingtones']);
  Route::get('app-setting/ringtone', [RingtoneController::class, 'index']);

  Route::post('app-setting/ringtone', [RingtoneController::class, 'store']);

  Route::delete('app-setting/ringtone/{id}', [RingtoneController::class, 'destroy']);

  //Language
  // Route::resource('/language', LanguageController::class);

  /*--------------------------
 Donation
----------------------------*/
  Route::post('/add_donation', [DonationDonationController::class, 'add_donation']);
  Route::put('/edit_donation/{id}', [DonationDonationController::class, 'edit_donation']);
  Route::delete('/destroy_donation/{id}', [DonationDonationController::class, 'destroy_donation']);

  // Account Setting  Controller
  Route::post('/change-password', [AccountSettingController::class, 'change_password'])
    ->middleware('auth:sanctum');
  Route::post('/send-email-code', [AccountSettingController::class, 'send_email_code']);
  Route::post('/resend-email', [AccountSettingController::class, 'resend_email_code']);
  Route::post('/change-email', [AccountSettingController::class, 'change_email']);
  Route::post('/upgrade-account', [AccountsettingController::class, 'upgrade_account']);

  // Contact Us Controller
  Route::post('/contact-us', [ContactUsController::class, 'contact_us']);

  // Country Controller
  // Route::get('province', [CountryController::class, 'province']);
  // Route::post('country/store', [CountryController::class, 'store']);
  // Route::put('country/store/update/yes', [CountryController::class, 'update']);

  //provinces
  Route::resource('/provinces', RegionController::class);

  //Cities
  Route::resource('/cities', CityController::class);

  Route::get('/cities/{country_id}', [CityController::class, 'getCitiesByCountry']);






  Route::post('/searchlocation', [CountryController::class, 'search_location']);

  // Privacy and Policy
  // Route::get('privacy', [PrivacyAndPolicyController::class, 'privacy']);
  // Route::get('/single-privacy/{name}', [PrivacyAndPolicyController::class, 'single_privacy']);

  // Translation
  Route::prefix('/translate')
    ->group(function () {
      Route::get('/languages', [TranslationController::class, 'fetch_languages']);
      Route::get('/{id}', [TranslationController::class, 'translate']);
    });

  // User  Setting Controller
  Route::post('/user-setting/{user_id}', [UserSettingController::class, 'index']);
  Route::post('/user-setting/save', [UserSettingController::class, 'save'])
    ->middleware('auth:sanctum');

  // Feed image background
  Route::post('/upload-background', [FeedBackgroundImageController::class, 'upload']);
  Route::get('/get-background', [FeedBackgroundImageController::class, 'get']);

  // Feed emojis
  Route::get('emojis', [EmojiFeedController::class, 'index']);
  Route::post('emojis', [EmojiFeedController::class, 'store']);




  // collectoin feed
  Route::post('/add-collection', [CollectionController::class, 'insert']);
  Route::get('/get_collection/{user_id}', [CollectionController::class, 'get_collection']);
  Route::delete('/remove-collection/{id}', [CollectionController::class, 'destroy']);

  // Paypal
  Route::post('charge', [PaymentController::class, 'charge']);
  Route::get('success', [PaymentController::class, 'success']);
  Route::get('error', [PaymentController::class, 'error']);
  Route::get('/payment-details/{payment_id}', [PaymentController::class, 'payment_details']);

  // Stripe
  Route::post('/stripe/checkout', [StripeController::class, 'index']);
  Route::get('/stripe/update-transaction', [StripeController::class, 'update']);
  Route::get('/stripe/update-success', [StripeController::class, 'success']);

  Route::get('get_account_price', [UpgradeAccountController::class, 'price_upgrade']);
  Route::post('/account-upgrade', [UpgradeAccountController::class, 'account_upgrade'])
    ->middleware('auth:sanctum');

  // News
  Route::get('/category-news/{id}', [NewsController::class, 'category_news']);
  Route::get('/news-cover', [NewsController::class, 'cover_news']);
  Route::get('/news-category', [NewsController::class, 'categories']);
  Route::get('/news-detail/{id}', [NewsController::class, 'detail']);
  Route::post('/news-search', [NewsController::class, 'search']);

  // History
  Route::get('/category-history/{id}', [HistoryController::class, 'categorgy_history']);
  Route::get('/history-cover', [HistoryController::class, 'cover_history']);
  Route::get('/history-category', [HistoryController::class, 'categories']);
  Route::get('/history-detail/{id}', [HistoryController::class, 'detail']);
  Route::post('/history-search', [HistoryController::class, 'search']);

  // Voting
  Route::get('/voting-cover/{id?}', [VotingController::class, 'get_cover']);
  Route::get('/fetch-voting/{id?}', [VotingController::class, 'fetch']);
  Route::get('/fetch-voting/all/{id?}', [VotingController::class, 'fetch_all']);
  Route::get('/voting-details/{id}/{user_id?}', [VotingController::class, 'get_details']);
  Route::post('/voting/store-reaction', [VotingController::class, 'store_reaction']);
  Route::get('/get-statistics/{voteId}', [VotingController::class, 'get_statistics']);
  Route::get('/voting-stats/{id}', [VotingController::class, 'stats']);

  //Animation Emojji
  Route::get('/get-all-emoji/{userId?}/{type?}/{value?}', [AnimationEmojiController::class, 'get_all_emoji']);

  // Reaction
  Route::post('/store-reaction', [ReactionController::class, 'store_reaction']);
  // comments
  Route::get('/get-comment/{post_id}', [CommentController::class, 'get_comment']);
  Route::post('/store-comment', [CommentController::class, 'store_comment']);
// mycomments
  Route::post('/comments', [CommentController::class, 'store']);
  Route::get('/comments/{post_id}', [CommentController::class, 'getComments']);




  // Music
  Route::get('/music', [MusicController::class, 'index']);
  Route::get('/popular-song/{id}', [MusicController::class, 'popular_song']);

  // Artist
  Route::get('/artist-music', [ArtistController::class, 'get_all_artist_music']);
  Route::get('/single-aritst-music/{id}', [ArtistController::class, 'get_single_artist_music']);
  Route::get('/get-latest-artist', [ArtistController::class, 'get_two_latest_artist']);

  Route::resource('/artist', ArtistController::class);

  Route::get('/get-music-artist/{artist_id}', [ArtistController::class, 'get_music_by_artist']);
  Route::get('/get-video-artist/{artist_id}', [ArtistController::class, 'get_video_by_artist']);



  // Album
  Route::get('/albums', [AlbumController::class, 'albums']);
  Route::get('/albums/new', [AlbumController::class, 'new_albums']);
  Route::get('/album-details/{id}', [AlbumController::class, 'albums_details']);

  // Market Service
  Route::post('/market-services', [MarketServiceContorller::class, 'market_services']);
  // Route::post('/market-categories' ,[MarketServiceContorller::class , 'market_categories']);
  // Route::post('/market-gallery' ,[MarketServiceContorller::class , 'market_gallery']);
  // Route::post('/market-view-options' , [MarketServiceContorller::class , 'market_view_option']);

  // Playlist
  Route::post('/playlists', [PlaylistController::class, 'playlist']);
  Route::post('/get-playlist', [PlaylistController::class, 'get_playlist']);
  Route::get('/get-single-playlist/{playlist_id}', [PlaylistController::class, 'get_single_playlist']);
  // Set music to playlist
  Route::post('/set-music-playlist', [PlaylistController::class, 'set_music_to_playlist']);
  // fovourite artist
  Route::post('/favourite-artist', [PlaylistController::class, 'favourite_artist']);
  Route::get('/get-favourite-artist/{user_id}', [PlaylistController::class, 'get_favourite_artist']);
  Route::get('/get-favourite-artist-id/{user_id}', [PlaylistController::class, 'get_favourite_artist_ids']);
  // Route::get('/get-music-playlist' , [PlaylistController::class , 'get_music_playlist']);
  // Ablbum controller
  Route::post('/favourite-album', [AlbumController::class, 'favourite_album']);
  Route::get('/get-favourite-album/{user_id}', [AlbumController::class, 'get_favourite_album']);
  Route::get('/get-favourite-album-id/{user_id}', [AlbumController::class, 'get_favourite_album_ids']);


  Route::get('countrieslistshow', [CountryController::class, 'showcountries']);


  Route::post('/get-gallery', [PostGalleryController::class, 'get_gallery']);

  Route::get('/user', function (Request $request) {
    return $request->user();
  });
// });
