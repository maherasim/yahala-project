<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\WizardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\Diamond;
use App\Http\Controllers\user\Premium;
use App\Http\Controllers\user\Standard;
use App\Http\Controllers\AdvertismentController;
use App\Http\Controllers\fanpage\FanPage;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ReelController;
use App\Http\Controllers\ReelSongController;
use App\Http\Controllers\ReelReasonController;
use App\Http\Controllers\Admin\ChannelPolicyController;

use App\Http\Controllers\Admin\EventController;

use App\Http\Controllers\Admin\MusicController;
use App\Http\Controllers\ProfileBannerController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\ChannelCategoryController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SeriesController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\VotingController;

use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonationController;

use App\Http\Controllers\Admin\DiamondUserController;
use App\Http\Controllers\Admin\FlaggedUserController;
use App\Http\Controllers\Admin\PremiumUserController;
use App\Http\Controllers\Admin\ReportVideoController;

use App\Http\Controllers\Admin\UploadMovieController;

use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\StandardUserController;
use App\Http\Controllers\Admin\BazarCategoryController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\FileController;

use App\Http\Controllers\Admin\MusicCategoryController;

use App\Http\Controllers\Admin\OnlineCategoryController;

use App\Http\Controllers\Admin\VotingCategoryController;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\Admin\HistoryCategoryController;

use App\Http\Controllers\Admin\UploadMovieCategoryController;
use App\Http\Controllers\Admin\UploadVideoCategoryController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PaymentOfficeController;

use App\Http\Controllers\Admin\Settings\PaymentMethodController;
use App\Http\Controllers\Admin\Settings\PricingController;
use App\Http\Controllers\Admin\Settings\SettingController;
use App\Http\Controllers\Admin\Settings\UserRolesController;
use App\Http\Controllers\Admin\PolicyAndTermsController;
use App\Http\Controllers\Admin\Settings\CityController;
use App\Http\Controllers\Admin\Settings\CountryController;
use App\Http\Controllers\Admin\Settings\RegionController;
use App\Http\Controllers\Admin\SystemLogController;
use App\Http\Controllers\Admin\MobileSettingsController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\Settings\TeamMemberController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Admin\TextController;
use App\Http\Controllers\Admin\ManageAdController;

use App\Http\Controllers\Admin\TicketServiceController;

use App\Http\Controllers\Admin\BankTransferController;

use App\Http\Controllers\Admin\Settings\PrefixController;
use App\Http\Controllers\Admin\Settings\ReasonController;

use App\Http\Controllers\VideoClipController;
use App\Http\Controllers\Admin\ChannelReasonController;
use App\Http\Controllers\Admin\WishesandThanks\WishesReasonController;
use App\Http\Controllers\Admin\WishesandThanks\WishesPrefixController;
use App\Http\Controllers\Admin\WishesandThanks\WishesPolicyandTermController;
use App\Http\Controllers\Admin\Currency\CurrencyController;
use App\Http\Controllers\Admin\EmojiFeedController;
use App\Http\Controllers\Admin\liveStream\livestreamController;
use App\Http\Controllers\Admin\Settings\AppInfoController;
use App\Http\Controllers\Admin\Settings\RingtoneController;
use App\Http\Controllers\BackgroundFeedController;
use App\Http\Controllers\DepartmentController;
use App\Models\FanPageType;
use App\Models\Story;
use App\Http\Controllers\AvatarsController;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\CountryLocationController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Artisan;




//use App\Http\Controllers\GreetingsController;

//use App\Http\Controllers\StateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('test',function(){
    App\Models\Ringtone::create([
        'fileName' => '1',
        'filePath' => '2',
        'fileSize' => '3'
    ]);
});

$controller_path = 'App\Http\Controllers';

Route::get('/cmd/{cmd}', function ($cmd) {
    \Artisan::call($cmd);
    echo '<pre>';
    return \Artisan::output();
});

Route::get('/db-seed/{cmd}', function ($cmd) {
    Artisan::call('db:seed', [
        '--class' => $cmd
    ]);

    // Optionally, you can get the output of the command
    $output = Artisan::output();
    echo $output;
});





//Route::get('/avatars/', [AvatarsController::class, 'index']);
//Route::get('/avatars/{id}', [AvatarsController::class, 'edit']);




Route::group(['middleware' => 'permission:avatars.read'], function () {

    //Route::resource('/avatars', AvatarsController::class);
    Route::post('/avatars/create', [AvatarsController::class, 'store']);
    Route::post('/avatars/{id}/edit', [AvatarsController::class, 'update']);
    Route::get('/manage-avatars/', [AvatarsController::class, 'manag_avatars']);
    Route::get('/manage-avatars/{id}', [AvatarsController::class, 'manag_avatars']);
    Route::get('/get-avatars/{id}', [AvatarsController::class, 'get_avatars']);
    
    Route::resource('/avatars', AvatarsController::class);
    
    Route::get('/test-avatars', [AvatarsController::class, 'testavatar']);
    
    });

Route::resource('/settings/countrieslist', CountryLocationController::class);
Route::post('/settings/countrieslist', [CountryLocationController::class, 'store']);

//greetings
Route::resource('/uploads_cards', GreetingsController::class);

Route::resource('/pricings', GreetingsController::class);

Route::get('/get-pricing/{id}', [GreetingsController::class, 'get_pricing']);

Route::prefix("wishes")->name("wishes.")->group(function () {
	Route::get('setting/pricing', [GreetingsController::class,'pricing']);
	Route::post('setting/pricing', [GreetingsController::class,'pricing']);

});

//Route::resource('/settings/countries', CountryController::class);
Route::resource('/settings/provinces', StateController::class);

Route::post('/searchlocation', [CountryController::class, 'search_location']);






Route::get('unauthorize',function(){
    return response()->json(['message' => 'Unauthorized'],401);
})->name('unauthorize');

// Admin Profiel

Route::middleware('check.role:Super Admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('auth');

    Route::get("/admin_activity", [AdminProfileController::class, 'admin_activity'])->name('admin_activity');
    Route::post("/admin_activity/news", [AdminProfileController::class, 'store_news'])->name('admin_activity.store_news');
    Route::post("/admin_activity/event", [AdminProfileController::class, 'store_event'])->name('admin_activity.store_event');
    Route::post("/admin_activity/feeds", [AdminProfileController::class, 'store_feeds'])->name('admin_activity.store_feeds');
});


Route::post('/admin/profile/store', [AdminProfileController::class, 'store'])->name('admin_profile.store');
Route::get('/admin/profile/security', [AdminProfileController::class, 'security'])->name('admin_profile.security');
Route::get('/admin/profile/account', [AdminProfileController::class, 'account'])->name('admin_profile.account');
Route::get('/admin/profile/billing', [AdminProfileController::class, 'billing'])->name('admin_profile.billing');
Route::get('/admin/profile/notification', [AdminProfileController::class, 'notification'])->name(
    'admin_profile.notification'
);
Route::get('/admin/profile/connection', [AdminProfileController::class, 'connection'])->name(
    'admin_profile.connection'
);
Route::post('/admin/change-password', [AdminProfileController::class, 'change_password'])->name(
    'admin_change_password'
);
Route::get('/admin/2FA', [AdminProfileController::class, 'enable'])->name('admin.enable.2fa');

Route::get('/welcome', [AdminProfileController::class, 'welcome'])->name('welcome');

Route::get('/login', [LoginController::class, 'index'])
    ->name('admin.login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('admin.login')
    ->middleware('guest');

Route::middleware(['admin.auth', '2fa'])->group(function () use ($controller_path) {
    Route::prefix('/users')
        ->name('users.')
        ->group(function () {
            Route::resource('standard', StandardUserController::class);
            Route::resource('premium', PremiumUserController::class);
            Route::resource('vip', DiamondUserController::class);
        });
    Route::prefix('/users')
        ->name('users.')
        ->group(function () {
            Route::post('{id}/block/', [StandardUserController::class, 'block'])->name('block');
            Route::post('{id}/warn/', [StandardUserController::class, 'warn'])->name('warn');
            Route::post('{id}/upgrade/', [StandardUserController::class, 'upgrade'])->name('upgrade');
            Route::resource('standard', StandardUserController::class);
            Route::resource('premium', PremiumUserController::class);
            Route::resource('vip', DiamondUserController::class);
        });
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/', [AnalyticsController::class, 'index'])->name('adminpanel');
    // analystics
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('dashboard-analytics');

    // Main Page Route
    // Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
    Route::get('/dashboard/ecommerce', $controller_path . '\dashboard\Ecommerce@index')->name('dashboard-ecommerce');

    // locale
    Route::get('lang/{locale}', $controller_path . '\language\LanguageController@swap');

    Route::view('/manage-user-feeds', 'content.manage_posts.manage_user_feeds')->name('manage.user.feeds');

    Route::view('/manage-fanpage-feeds', 'content.manage_posts.manage_fanpage_feeds')->name('manage.fanpage.feeds');

    Route::get('/feeds-policy_and_terms', [PolicyAndTermsController::class, 'index'])->name('feeds.policy_terms');

    Route::get('/video_request', [ReportVideoController::class, 'video_request']);

    Route::resource('app-setting/department', DepartmentController::class);

    Route::get('app-setting/get-sub-departments/{id}', [DepartmentController::class, 'getSubDepartments'])->name('get.SubDepartments');

    Route::prefix('series')
        ->name('series.')
        ->group(function () {
            Route::resource('/series', SeriesController::class);
            Route::get('/setting/prefix', [SeriesController::class, 'prefix'])->name('series.setting.prefix');
            Route::get('/categories', [CategoryController::class, 'index'])->name('series.categories.index');
        });

    Route::prefix('wishes')
        ->name('wishes.')
        ->group(function () {
            Route::get('setting/reasons', [WishesReasonController::class, 'index'])->name('reasons');
            Route::get('setting/prefix', [WishesPrefixController::class, 'index'])->name('prefix');
            Route::get('setting/policy_terms', [WishesPolicyandTermController::class, 'index'])->name('policy_terms');
           // Route::get('setting/pricing', [WishesReasonController::class, 'pricing']);

            Route::get('manage_greeting', [WishesReasonController::class, 'manage_greeting']);

            Route::get('manage_pray', [WishesReasonController::class, 'manage_pray']);
            Route::get('manage_sympathy', [WishesReasonController::class, 'manage_sympathy']);

            Route::get('upload_card', [WishesReasonController::class, 'upload_card']);

            Route::get('upload_cardone', [WishesReasonController::class, 'upload_cardone']);

            Route::get('upload_cardtwo', [WishesReasonController::class, 'upload_cardtwo']);

            Route::get('add_prays', [WishesReasonController::class, 'add_prays']);

            Route::get('add_greeting', [WishesReasonController::class, 'add_greeting']);

            Route::get('add_verses', [WishesReasonController::class, 'add_verses']);
        });
    Route::get('/prefix', [PrefixController::class, 'index'])->name('prefix');
    Route::get('setting/music/prefix', [PrefixController::class, 'index'])->name('music.prefix');
    Route::get('setting/live/prefix', [PrefixController::class, 'index'])->name('live.prefix');
    Route::get('/movie/setting/prefix', [UploadMovieController::class, 'prefix'])->name('movie.setting.prefix');
    Route::get('prefix', [PrefixController::class, 'index'])->name('prefix');
    Route::post('prefix', [PrefixController::class, 'store'])->name('prefix');

    Route::get('/prefix', [ReportVideoController::class, 'prefix']);
    Route::prefix('series')
        ->name('series.')
        ->group(function () {
            Route::resource('/series', SeriesController::class);
            Route::get('/setting/prefix', [SeriesController::class, 'prefix'])->name('series.setting.prefix');
            Route::get('/categories', [CategoryController::class, 'index'])->name('series.categories.index');
        });
    Route::get('/policyterms', [ReportVideoController::class, 'policyterms']);
    Route::get('/app/events', $controller_path . '\apps\event\Event@index')->name('app-event');
    Route::get('/app/events/add-event', $controller_path . '\apps\event\Event@create')->name('app-event-create');

    Route::get('/app/events-income', $controller_path . '\apps\income\Income@eventsIncome')->name('app-events-income');

    Route::get('/app/events', $controller_path . '\apps\event\Event@index')->name('app-event');
    Route::get('/app/events/add-event', $controller_path . '\apps\event\Event@create')->name('app-event-create');

    Route::view('/manage-user-feeds', 'content.manage_posts.manage_user_feeds')->name('manage.user.feeds');
    Route::view('/manage-fanpage-feeds', 'content.manage_posts.manage_fanpage_feeds')->name('manage.fanpage.feeds');
    Route::view('/manage-user-comments', 'content.manage_posts.manage_user_comments')->name('manage.user.comments');
    Route::view('/manage-fanpage-comments', 'content.manage_posts.manage_fanpage_comments')->name(
        'manage.fanpage.comments'
    );

    Route::get('story/ManageStories', [StoryController::class, 'ManageStories']);

    Route::get('live/manage_live_stream', [livestreamController::class, 'manage_live_stream'])->name(
        'live.manage_live_stream'
    );
    Route::get('live/manage_channel', [livestreamController::class, 'manage_channel'])->name('live.manage_channel');
    Route::resource('/manage-ads', ManageAdController::class);
    Route::get('chats/manage-group', [UserRolesController::class, 'standard'])->name('chats.manageGroup');

    Route::get('/manage_video', [ReportVideoController::class, 'manage_video']);
    Route::get('/app/tickets', $controller_path . '\apps\tickets\Ticket@index')->name('app-ticket');
    Route::get('/app/tickets', $controller_path . '\apps\tickets\Ticket@index')->name('app-ticket');

    Route::resource('/ticket-service', TicketServiceController::class);
    Route::delete('ticket-service/{id}/delete-image', [TicketServiceController::class, 'deleteServiceImage'])->name(
        'ticket-service.delete-image'
    );
    Route::get('setting/live/reasons', [ReasonController::class, 'index'])->name('live.reasons');

    Route::resource('/reasons', ReasonController::class);

    Route::get('/reason', [ReportVideoController::class, 'reason']);
    Route::get('/movie/setting/prefix', [UploadMovieController::class, 'prefix'])->name('movie.setting.prefix');

    Route::get('story/ManageStories', [StoryController::class, 'ManageStories']);
    Route::get('story/ReportedStories', [StoryController::class, 'ReportedStories']);

    Route::get('setting/live/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name(
        'live.policy_and_terms.index'
    );

    Route::resource('/music', MusicController::class);
    Route::post('/change-music-category',[MusicController::class,'changeCategory'])->name('change.musicCategory');
    Route::get('/musics/{id}/{status}', [MusicController::class, 'status'])->name('musics-status');
    Route::get('setting/music/pricing', [MusicController::class, 'pricing'])->name('music.pricing');
    Route::get('get-songs',[MusicController::class, 'getSongs'])->name('get.songs');
    Route::post('musics/store_song', [MusicController::class, 'store_song'])->name('musics.store_song');
    Route::delete('musics/delete_song/{id}', [MusicController::class, 'deleteSong'])->name('musics.delete_song');
    //   Route::get('musics/{music_id}', [MusicController::class, 'video']);
    Route::get('setting/music/country', [MusicController::class, 'country']);

    Route::resource('/music-category', MusicCategoryController::class);
    Route::get('/music_category/{id}/{status}', [MusicCategoryController::class, 'status'])->name('musiccat-status');

    Route::get('/app/music-income', $controller_path . '\apps\income\Income@musicIncome')->name('app-music-income');

    Route::resource('/music', MusicController::class);
    Route::get('/musics/{id}/{status}', [MusicController::class, 'status'])->name('musics-status');
    Route::delete('/music/{id}/music', [MusicController::class, 'deleteMusic'])->name('music.delete-audio');
    Route::get('/music_category/{id}/{status}', [MusicCategoryController::class, 'status'])->name('musiccat-status');
    Route::delete('/music_icon/{id}/icon', [MusicCategoryController::class, 'deleteMusic'])->name(
        'music_icon.delete-img'
    );

    Route::resource('/artist', ArtistController::class);
    Route::get('/artists/{id}/{status}', [ArtistController::class, 'status'])->name('artists-status');
    Route::get('/get-artist-detail', [ArtistController::class, 'getArtistDetail'])->name('get.artist.detail');

    // Route::resource('/artist', ArtistController::class);
    // Route::get('/artists/{id}/{status}', [ArtistController::class, 'status'])->name('artists-status');
    Route::get('get/city/{id}', [ArtistController::class, 'get_city']);
    Route::delete('/artists/{id}/image', [ArtistController::class, 'deleteArtistImage'])->name('artists.delete-img');

    Route::resource('/album', AlbumController::class);
    Route::get('get-albums',[AlbumController::class,'getAlbums'])->name('get.albums');
    Route::delete('/album/{id}/album', [AlbumController::class, 'deleteAlbum'])->name('album.delete-audio');
    Route::delete('/album/{id}/image', [AlbumController::class, 'deleteAlbumImage'])->name('album.delete-img');
    //   Route::get('albums', [AlbumController::class, 'viewpage']);
    Route::get('albums/{id}', [AlbumController::class, 'viewpage']);

    Route::resource('/video-clips', VideoClipController::class);
    Route::get('get-video-clips',[VideoClipController::class,'getVideoClips'])->name('get.video-clips');
    Route::get('/video-clips/{id}/clips', $controller_path . '\VideoClipController@detail')->name('video-clips.clips');
    Route::get('/video-clips/{id}/{status}', [VideoClipController::class, 'status'])->name('video-clips-status');
    Route::delete('/video-clips/{id}/clip', [VideoClipController::class, 'deleteVideo'])->name(
        'video-clips.delete-audio'
    );

   // Channel Policy
   Route::post('/add_channel_policy',[ChannelPolicyController::class, 'add_policy'])->name('add.policy');
    Route::put('/edit_channel_policy',[ChannelPolicyController::class, 'edit_policy'])->name('edit.policy');
    Route::post('/add_policy_section',[ChannelPolicyController::class, 'add_section'])->name('add.section');
   Route::put('/edit_policy_section/{id}',[ChannelPolicyController::class, 'edit_section'])->name('edit.section');
   // Route::delete('/destroy_policy_section/{id}',[ChannelPolicyController::class, 'destroy_section'])->name('destroy.section');
   Route::delete('/destroy_policy_section/{id}', [ChannelPolicyController::class, 'destroy_section'])->name('destroy.section');
    Route::get('setting/music/pricing', [MusicController::class, 'pricing'])->name('music.pricing');

    Route::resource('/vote-category', VotingCategoryController::class);

    Route::resource('/vote', VotingController::class);
    Route::get('/vote/{id}/statistic', [VotingController::class, 'statistic'])->name('vote.statistics');
    Route::get('/vote/{id}/banner', [VotingController::class, 'deleteImage'])->name('vote.delete-banner');
    Route::get('/vote/{id}/{status}', [VotingController::class, 'status'])->name('votes-status');

    Route::resource('/vote-category', VotingCategoryController::class);
    Route::get('/vote_category/{id}/{status}', [VotingCategoryController::class, 'status'])->name('votecat-status');

    Route::resource('/vote', VotingController::class);
    Route::get('/vote/{id}/{status}', [VotingController::class, 'status'])->name('votes-status');
    Route::get('/vote/{id}/banner', [VotingController::class, 'deleteImage'])->name('vote.delete-banner');

    Route::resource('/vote-category', VotingCategoryController::class);
    Route::get('/vote_category/{id}/{status}', [VotingCategoryController::class, 'status'])->name('votecat-status');

    Route::delete('/history/{id}/image', [HistoryController::class, 'deleteImage'])->name('history.delete-image');
    Route::delete('/history/{id}/video', [HistoryController::class, 'deleteVideo'])->name('history.delete-video');
    Route::resource('/history', HistoryController::class);
    Route::get('/history/{id}/{status}', [HistoryController::class, 'status'])->name('history-status');

    Route::resource('/history-category', HistoryCategoryController::class);
    Route::get('/history_category/{id}/{status}', [HistoryCategoryController::class, 'status'])->name(
        'historycat-status'
    );

    Route::resource('/history', HistoryController::class);
    Route::get('/history/{id}/{status}', [HistoryController::class, 'status'])->name('history-status');

    Route::resource('/history-category', HistoryCategoryController::class);
    Route::get('/history_category/{id}/{status}', [HistoryCategoryController::class, 'status'])->name(
        'historycat-status'
    );

    Route::prefix('donations')
        ->name('donations.')
        ->group(function () {
            Route::resource('/organizations', OrganizationController::class);
            Route::delete('organizations/{id}/delete-logo', [OrganizationController::class, 'deleteOrganizationLogo'])->name(
                'organizations.delete-logo'
            );
            Route::get('/categories', [CategoryController::class, 'index'])->name('organizations.categories.index');
        });
    // Donation
    Route::post('/add_donation', [App\Http\Controllers\Admin\Donation\DonationController::class, 'add_donation'])->name('create.donation');
    Route::put('/edit_donation/{id}', [App\Http\Controllers\Admin\Donation\DonationController::class, 'edit_donation'])->name('edit.donation');
    Route::delete('/destroy_donation/{id}', [App\Http\Controllers\Admin\Donation\DonationController::class, 'destroy_donation'])->name('destroy.donation');
    //Organization
    Route::post('/add_organization', [App\Http\Controllers\Admin\Donation\OrganizationController::class, 'add_organization'])->name('add.organization');
    Route::delete('/delete_organization/{id}', [App\Http\Controllers\Admin\Donation\OrganizationController::class, 'organization_destroy'])->name('organization.destroy');
    Route::put('/organization_update/{id}', [App\Http\Controllers\Admin\Donation\OrganizationController::class, 'organization_update'])->name('organization.update');

    Route::resource('/news-category', NewsCategoryController::class);

    Route::get('live/manage_channel', [livestreamController::class, 'manage_channel'])->name('live.manage_channel');

    Route::get('setting/live/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name(
        'live.policy_and_terms.index'
    );
    Route::get('chats/permission', [UserRolesController::class, 'standard'])->name('chats.permission');

    Route::get('chats/prefix', [PrefixController::class, 'index'])->name('chats.prefix');

    Route::get('chats/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name('chats.policy_and_terms');
    Route::resource('movie/upload-movies', UploadMovieController::class);
    Route::resource('/upload-movies-category', UploadMovieCategoryController::class);

    Route::get('/movie/setting/prefix', [UploadMovieController::class, 'prefix'])->name('movie.setting.prefix');

    Route::prefix('series')
        ->name('series.')
        ->group(function () {
            Route::resource('/series', SeriesController::class);
            Route::get('/setting/prefix', [SeriesController::class, 'prefix'])->name('series.setting.prefix');
            Route::get('/categories', [CategoryController::class, 'index'])->name('series.categories.index');
        });

    Route::get('/series/{id}/series', [UploadMovieController::class, 'deleteMovie'])->name('series.delete-video');
    Route::get('/series/{id}/thumbnail', [UploadMovieController::class, 'deleteImage'])->name('series.delete-thumbnail');

    //   Route::get('/currency', [CurrencyController::class, 'index'])->name('index');
    
    




    Route::resource('/language', LanguageController::class);

//Translation Keyword

Route::post('/languages/keywordstore', [LanguageController::class, 'keywordstore'])->name('languages.keywordstore');
Route::post('/languages/keyword/startpage', [LanguageController::class, 'startpage'])->name('languages.startpage');
Route::post('/languages/keyword/signupsection', [LanguageController::class, 'signupsection'])->name('languages.signupsection');
Route::post('/languages/keyword/signinsection', [LanguageController::class, 'signinsection'])->name('languages.signinsection');
Route::post('/languages/keyword/footerquicklauncher', [LanguageController::class, 'footerquicksection'])->name('languages.footerquicklauncher');
Route::post('/languages/keyword/footercart', [LanguageController::class, 'footercartsection'])->name('languages.footercart');
Route::post('/languages/keyword/footerfriendsection', [LanguageController::class, 'footerfriendsection'])->name('languages.footerfriendsection');
Route::post('/languages/keyword/footerchatsection', [LanguageController::class, 'footerchatsection'])->name('languages.footerchatsection');
Route::post('/languages/keyword/headerfeedsection', [LanguageController::class, 'headerfeedsection'])->name('languages.headerfeedsection');
Route::post('/languages/keyword/visiter_profile', [LanguageController::class, 'visiterprofilesection'])->name('languages.visiterprofilesection');
Route::post('/languages/keyword/header_section_stories', [LanguageController::class, 'headersectionstories'])->name('languages.headersectionstories');
Route::post('/languages/keyword/header_greating/section', [LanguageController::class, 'headergreatingsection'])->name('languages.headergreatingsection');
Route::post('/languages/keyword/header_music/section', [LanguageController::class, 'headermusicsection'])->name('languages.headermusicsection');
Route::post('/languages/keyword/header_video/section', [LanguageController::class, 'headervideosection'])->name('languages.headervideosection');
Route::post('/languages/keyword/header_stream/section', [LanguageController::class, 'headerstreamsection'])->name('languages.headerstreamsection');
Route::post('/languages/keyword/header_event/section', [LanguageController::class, 'headereventsection'])->name('languages.headereventsection');
Route::post('/languages/keyword/header_online_shop/section', [LanguageController::class, 'headeronlineshopsection'])->name('languages.headeronlineshopsection');
Route::post('/languages/keyword/header_restaurant/section', [LanguageController::class, 'headerrestaurantsection'])->name('languages.headerrestaurantsection');
Route::post('/languages/keyword/header_service_portal/section', [LanguageController::class, 'headerserviceportalsection'])->name('languages.headerserviceportalsection');
Route::post('/languages/keyword/setting_overview_section/section', [LanguageController::class, 'settingOverviewSection'])->name('languages.settingOverviewSection');
Route::post('/languages/keyword/my_profile_home/section', [LanguageController::class, 'myProfileHomeSection'])->name('languages.myProfileHomeSection');
Route::post('/languages/keyword/my_profile_multimedia/section', [LanguageController::class, 'myProfileMultimedia'])->name('languages.myProfileMultimedia');
Route::post('/languages/keyword/my_profile_friend/section', [LanguageController::class, 'myProfileFriendsSection'])->name('languages.myProfileFriendsSection');
Route::post('/languages/keyword/my_profile_office/section', [LanguageController::class, 'myProfileOfficeSection'])->name('languages.myProfileOfficeSection');
Route::post('/languages/keyword/Channels/section', [LanguageController::class, 'myChannels'])->name('languages.myChannels');
Route::post('/languages/keyword/Channels/setting/section', [LanguageController::class, 'ChannelsSetting'])->name('languages.ChannelsSetting');
Route::post('/languages/keyword/section/setting', [LanguageController::class, 'saveSectionSettings'])->name('languages.saveSectionSettings');
Route::post('/languages/keyword/section/history', [LanguageController::class, 'saveSectionhistory'])->name('languages.saveSectionhistory');
Route::post('/languages/keyword/section/voting', [LanguageController::class, 'saveSectionvoter'])->name('languages.saveSectionvoter');
Route::post('/languages/keyword/section/donation', [LanguageController::class, 'headerdoantion'])->name('languages.headerdoantion');







    Route::post('/language-transalate/{id?}', [TranslationController::class, 'translateLanguage'])->name(
        'translation.translateLanguage'
    );
    Route::put('languageData-translation', [TranslationController::class, 'storeLanguageData'])->name('languageData.store');
    //   <!-- log -<System-logo> -->
    Route::get('/app/ftp/list', $controller_path . '\apps\FtpController@index')->name('app-ftp-list');

    Route::prefix('team')
        ->name('team.')
        ->group(function () {
            Route::resource('members', TeamMemberController::class);
            Route::resource('roles', RoleController::class);
        });



        Route::middleware('check.role:Super Admin')->group(function ( )  use ($controller_path) {

            Route::resource('/currency', CurrencyController::class);
        
            Route::get('/app/user-income', $controller_path . '\apps\income\Income@userIncome')->name('app-user-income');
        
            Route::get('/app/invoice/edit', $controller_path . '\apps\InvoiceEdit@index')->name('app-invoice-edit');
        
            Route::view('/app/portal-notification', 'content.apps.app-portal-notification')->name('app.portal.notification');
        
            Route::get('yekbun-location/countries', [CountryController::class, 'index'])->name('yekbun_location.countries.index');
        
            Route::get('/app/popup', $controller_path . '\apps\popup\Popup@index')->name('app.popup');
        
            Route::get('app-setting/maintainance', [UserRolesController::class, 'standard'])->name('appsetting.maintainance');
            


    Route::get('/app/user/storage', $controller_path . '\apps\popup\Popup@index')->name('user.storage');
    Route::get('flaggedfanpage', [FlaggedUserController::class, "flaggedfanpage"]);
    Route::prefix('reports')
        ->name('reports.')
        ->group(function () {
            Route::resource('/flagged-users', FlaggedUserController::class);
        });
//Channel Reasons
Route::post('/add_channel_reason',[ChannelReasonController::class, 'add_reason'])->name('add.reason');
Route::put('/edit_channel_reason/{id}',[ChannelReasonController::class, 'edit_reason'])->name('edit.reason');
Route::delete('/destory_reason/{id}',[ChannelReasonController::class, 'destroy_reason'])->name('destroy.reason');
Route::get('/destroy_policy_desc/{id}',  [ChannelPolicyController::class, 'destroy_desc'])->name('destroy.desc');

//Channels
Route::get('managecategories', [FlaggedUserController::class, 'managecategories'])->name('channels');

Route::get('channelrequest', [FlaggedUserController::class, 'channelrequest']);
Route::get('managechannel', [FlaggedUserController::class, 'managechannel']);
Route::get('channeladmin', [FlaggedUserController::class, 'channeladmin']);
Route::get('channels/reason', [FlaggedUserController::class, 'reason']);
Route::get('channels/prefix', [FlaggedUserController::class, 'prefix']);
Route::get('channels/policy_terms', [FlaggedUserController::class, 'policy_terms']);


Route::post('/add_channel_category', [ChannelCategoryController::class, 'add_channel_category'])->name('add.channel.category');
Route::delete('/channels/{id}', [ChannelCategoryController::class, 'destroy_channel'])->name('channels.destroy');
Route::post('/edit_channel', [ChannelCategoryController::class, 'edit_channel'])->name('edit.category');
Route::post('/add_channel_subcategory', [ChannelCategoryController::class, 'add_channel_subcategory'])->name('channel.subcategory');
Route::put('/edit_channel_subcategory/{id}', [ChannelCategoryController::class, 'edit_channel_subcategory'])->name('edit.channel.subcat');
Route::delete('/channels_subcategory/{id}', [ChannelCategoryController::class, 'destroy_channel_subcategory'])->name('channels.subcat.destroy');


//ProfileBanner
Route::get('/profile-banner', [ProfileBannerController::class, 'index'])->name('profile.banner');
Route::post('/profile-banner', [ProfileBannerController::class, 'store'])->name('profile.banner.store');
Route::delete('/profile-banner/{profilebanner}', [ProfileBannerController::class, 'destroy'])->name('profile.banner.delete');

//Manage Cards
Route::get('/list-cards', [StoryController::class, 'Listcard'])->name('list.cards');
Route::post('/list-cards-store', [StoryController::class, 'Cardstore'])->name('list.cards.store');
Route::delete('/list-card/{card}', [StoryController::class, 'destroycard'])->name('list.cards.deleteas');

Route::delete('/cards/{id}', [StoryController::class, 'deleteCard'])->name('list.cards.delete');

Route::get('/list-reels-cards', [ReelController::class, 'Listcard'])->name('list.reels.cards');
Route::post('/list-reels-cards-store', [ReelController::class, 'Cardstore'])->name('list.reel-cards.store');
Route::delete('/list-reels-card/{card}', [ReelController::class, 'destroycard'])->name('list.reel-cards.delete');




    Route::post('saveFileds', [PolicyAndTermsController::class, 'saveFileds'])->name('policy_and_terms.saveFileds');
    Route::get('/feed-background', [BackgroundFeedController::class, 'index'])->name('feed.background');
    Route::post('/feed-background', [BackgroundFeedController::class, 'store'])->name('feed.background.store');
    Route::delete('/feed-background/{backgroundFeed}', [BackgroundFeedController::class, 'destroy'])->name('feed.background.delete');
    Route::get('/feed-emoji', [EmojiFeedController::class, 'index'])->name('feed.emoji');
    Route::post('/feed-emoji', [EmojiFeedController::class, 'store'])->name('feed.emoji.store');
    Route::delete('/feed-emoji/{emoji}', [EmojiFeedController::class, 'destroy'])->name('feed.emoji.delete');
    // Route::get('/feed-emoji', [PostController::class, 'indextwo'])->name('feed.emoji');
    Route::get('/feeds-prefix', [PrefixController::class, 'index'])->name('feeds.prefix');
    Route::get('/feeds-reasons', [ReasonController::class, 'index'])->name('feeds.reasons');
    Route::post('file/upload', [FileController::class, 'upload'])->name('file.upload');
    Route::delete('file/delete', [FileController::class, 'delete'])->name('file.delete');
    Route::post('file/images', [FileController::class, 'upload_bg'])->name('file.images');

    Route::get('/manage_video', [ReportVideoController::class, 'manage_video']);
    Route::resource('/history-category', HistoryCategoryController::class);
    Route::resource('/history-category', HistoryCategoryController::class);
    Route::resource('app-policy', PolicyAndTermsController::class);

    Route::resource('/news', NewsController::class);
    Route::resource('/feeds', NewsController::class);
    Route::get('/news/{id}/{status}', [NewsController::class, 'status'])->name('news-status');
    Route::delete('/news/{id}/asset', [NewsController::class, 'deleteassets'])->name('news.delete-asset');

    Route::resource('/news-category', NewsCategoryController::class);
    Route::get('/news_category/{id}/{status}', [NewsCategoryController::class, 'status'])->name('newscat-status');

    Route::resource('/news', NewsController::class);
    Route::get('/news/{id}/{status}', [NewsController::class, 'status'])->name('news-status');

    Route::resource('/news-category', NewsCategoryController::class);
    Route::get('/news_category/{id}/{status}', [NewsCategoryController::class, 'status'])->name('newscat-status');

    Route::get('live/request_channel', [livestreamController::class, 'channel_request'])->name('live.request_channel');

    Route::get('live/manage_live_stream', [livestreamController::class, 'manage_live_stream'])->name(
        'live.manage_live_stream'
    );
    Route::get('live/report_live_stream', [livestreamController::class, 'report_live_stream'])->name(
        'live.report_live_stream'
    );
    Route::get('setting/live/streaming_duration', [PrefixController::class, 'index'])->name('live.streaming_durations');

    Route::get('chats/manage-group', [UserRolesController::class, 'standard'])->name('chats.manageGroup');

    Route::get('/app/online-shop-income', $controller_path . '\apps\income\Income@onlineShopIncome')->name(
        'app-online-shop-income'
    );

    Route::get('/app/service-income', $controller_path . '\apps\income\Income@serviceIncome')->name('app-service-income');

    Route::get('/app/events-income', $controller_path . '\apps\income\Income@eventsIncome')->name('app-events-income');

    Route::get('/app/music-income', $controller_path . '\apps\income\Income@musicIncome')->name('app-music-income');
    Route::get('/app/video-income', $controller_path . '\apps\income\Income@videoIncome')->name('app-video-income');

    Route::get('/app/donation-income', $controller_path . '\apps\income\Income@donationIncome')->name(
        'app-donation-income'
    );

    Route::get('/app/total-income', $controller_path . '\apps\income\Income@totalIncome')->name('app-total-income');

    Route::get('/app/invoice/list', $controller_path . '\apps\InvoiceList@index')->name('app-invoice-list');


    Route::prefix('settings')
        ->name('settings.')
        ->group(function () {
            // Team
            Route::prefix('team')
                ->name('team.')
                ->group(function () {
                    Route::resource('members', TeamMemberController::class);
                    Route::resource('roles', RoleController::class);
                });
            Route::post('/save', [SettingController::class, 'save'])->name('save');
            Route::post('/save-many', [SettingController::class, 'saveMany'])->name('saveMany');
            Route::get('chats/permission', [UserRolesController::class, 'standard'])->name('chats.permission');
            Route::get('chats/manage-group', [UserRolesController::class, 'standard'])->name('chats.manageGroup');
            Route::get('yekbun-location/countries', [CountryController::class, 'index'])->name(
                'yekbun_location.countries.index'
            );
            Route::get('stories/reasons', [ReasonController::class, 'index'])->name('stories.reasons');
           
            Route::resource('/countries', CountryController::class);
            //App Setting
            $controller_path = 'App\Http\Controllers';
            Route::get('stories/prefix', [PrefixController::class, 'index'])->name('stories.prefix');

            Route::get('app-setting/maintainance', [UserRolesController::class, 'standard'])->name('appsetting.maintainance');

            Route::get('stories/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name(
                'stories.policy_and_terms'
            );
            Route::get('chats/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name('chats.policy_and_terms');
            Route::get('musics/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name(
                'music.policy_and_terms.index'
            );

            //   Route::resource('/prefix', PrefixController::class);
            Route::get('user/prefix', [PrefixController::class, 'index'])->name('user.prefix');
            Route::get('donation/prefix', [PrefixController::class, 'index'])->name('donation.prefix');
            Route::get('history/prefix', [PrefixController::class, 'index'])->name('history.prefix');
            Route::get('voting/prefix', [PrefixController::class, 'index'])->name('voting.prefix');
            Route::post('voting/prefix', [PrefixController::class, 'store'])->name('voting.prefix');
            Route::delete('voting/prefix/destroy/{id}', [PrefixController::class, 'destroy'])->name('voting.prefix.destroy');
            Route::post('voting/prefix/update/{id}', [PrefixController::class, 'update'])->name('voting.prefix.update');
            Route::get('chats/reasons', [ReasonController::class, 'index'])->name('chats.reasons');
//Manage Songs
          //  Route::resource('/storysong', SongController::class);
            Route::resource('/storysong', SongController::class)->names([
                'index' => 'storysong.index',
                'create' => 'storysong.create',
                'store' => 'storysong.store',
                'show' => 'storysong.show',
                'edit' => 'storysong.edit',
                'update' => 'storysong.update',
                'destroy' => 'storysong.destroy',
            ]);
            
            
            Route::resource('/bank-transfer', BankTransferController::class);

            Route::get('chats/prefix', [PrefixController::class, 'index'])->name('chats.prefix');

            Route::resource('/payment-offices', PaymentOfficeController::class);
            Route::delete('/payment-offices/{id}/delete-image', [PaymentOfficeController::class, 'deleteOfficeImage'])->name(
                'payment-offices.delete-image'
            );
            Route::resource('/provinces', RegionController::class);

            Route::resource('/cities', CityController::class);

            Route::get('/paypal-stripe', [PaymentMethodController::class, 'index'])->name('paypal.stripe');
            Route::get('/payment-methods', [PaymentMethodController::class, 'index'])->name('payment-methods');
            Route::post('/payment-methods', [PaymentMethodController::class, 'save'])->name('payment-methods');


            Route::get('app-setting/app-info', [AppInfoController::class, 'index'])->name('appsetting.app-info');
            // app info
            Route::post('/app-info', [AppInfoController::class, 'store'])->name('appsetting.appinfo.store');

            Route::get('app-setting/message-ringtone', [RingtoneController::class, 'getMessage'])->name('appsetting.message.ringtone');
            Route::get('app-setting/call-ringtone', [RingtoneController::class, 'getCall'])->name('appsetting.call.ringtone');

            Route::get('app-setting/ringtone', [RingtoneController::class, 'index'])->name('appsetting.ringtone.index');

            Route::post('app-setting/ringtone', [RingtoneController::class, 'store'])->name('appsetting.ringtone.store');

            Route::delete('app-setting/ringtone/{id}', [RingtoneController::class, 'destroy'])->name('appsetting.ringtone.destroy');

            Route::delete('/member/{id}/image', [TeamMemberController::class, 'deleteMemberImage'])->name('user.delete-img');
            Route::prefix('user-roles')
                ->name('user-roles.')
                ->group(function () {
                    Route::get('/standard', [UserRolesController::class, 'standard'])->name('standard');
                    Route::get('/premium', [UserRolesController::class, 'premium'])->name('premium');
                    Route::get('/vip', [UserRolesController::class, 'vip'])->name('vip');
                    Route::get('/fanpage', [UserRolesController::class, 'fanpage'])->name('fanpage');
                    Route::post('/update', [UserRolesController::class, 'update'])->name('update.permissions');
                });
            Route::get('/reasons', [ReasonController::class, 'index'])->name('reasons');

            Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
        });
    Route::resource('logs', SystemLogController::class);

    Route::get('department', [SystemLogController::class, 'manage_department']);

    Route::get('backup_setting', [SystemLogController::class, 'backup_setting']);

    Route::get('storage_setting', [SystemLogController::class, 'storage_setting']);
    Route::get('/activity', [ActivityController::class, 'index'])->name('ajax-activity');
    Route::get('team/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name('team.policy_and_terms.index');
    Route::resource('/donations', DonationController::class);
    Route::get('/app/task/list', $controller_path . '\Task\Task@index')->name('app-task-list');
    Route::post('/app/task/store', $controller_path . '\Task\Task@store')->name('app-task-store');
    Route::post('/app/task/update/{id}', $controller_path . '\Task\Task@update')->name('app-task-update');
    Route::delete('/app/task/delete/{id}', $controller_path . '\Task\Task@destroy')->name('app-task-delete');
    
});
    
    Route::get('/upload_movies/{id}/{status}', [UploadMovieController::class, 'status'])->name('movies_status');
    Route::get('/movie_category/{id}/{status}', [UploadMovieCategoryController::class, 'status'])->name(
        'moviecat_status'
    );
    Route::get('/upload_movies/{id}/movie', [UploadMovieController::class, 'deleteMovie'])->name('movie.delete-video');
    Route::get('/upload_movies/{id}/thumbnail', [UploadMovieController::class, 'deleteImage'])->name(
        'moive.delete-thumbnail'
    );

    // Flagged users
    //    Route::get('flaggedfanpage',[FlaggedUserController::class,"flaggedfanpage"]);
    //    Route::prefix("reports")->name("reports.")->group(function () {
    //        Route::resource('/flagged-users', FlaggedUserController::class);

    //    });

    Route::resource('/reports', ReportController::class);
    Route::get('musics/policy_and_terms', [PolicyAndTermsController::class, 'index'])->name(
        'music.policy_and_terms.index'
    );
    Route::get('musics/{music_id}', [MusicController::class, 'video']);
    Route::resource('/reasons', ReasonController::class);
    Route::get('/app/invoice/print', $controller_path . '\apps\InvoicePrint@index')->name('app-invoice-print');
    Route::get('/app/user/view/account', $controller_path . '\apps\UserViewAccount@index')->name('app-user-view-account');

    Route::get('/app/invoice/list', $controller_path . '\apps\InvoiceList@index')->name('app-invoice-list');
    Route::get('/app/invoice/preview', $controller_path . '\apps\InvoicePreview@index')->name('app-invoice-preview');
    Route::get('/app/invoice/print', $controller_path . '\apps\InvoicePrint@index')->name('app-invoice-print');
    Route::get('/app/invoice/edit', $controller_path . '\apps\InvoiceEdit@index')->name('app-invoice-edit');
    Route::get('/app/invoice/add', $controller_path . '\apps\InvoiceAdd@index')->name('app-invoice-add');
    Route::get('/app/user/list', $controller_path . '\apps\UserList@index')->name('app-user-list');
    Route::get('/app/task/list', $controller_path . '\Task\Task@index')->name('app-task-list');
    Route::get('/app/ftp/list', $controller_path . '\apps\FtpController@index')->name('app-ftp-list');
    Route::post('/app/ftp/add', $controller_path . '\apps\FtpController@storeFTP')->name('app-ftp-add');
    Route::post('/app/ftp/update/{id}', $controller_path . '\apps\FtpController@update')->name('app-ftp-update');
    Route::delete('/app/ftp/delete/{id}', $controller_path . '\apps\FtpController@destroy')->name('app-ftp-delete');
    Route::get('/app/user/view/account', $controller_path . '\apps\UserViewAccount@index')->name('app-user-view-account');
    Route::get('/app/user/view/security', $controller_path . '\apps\UserViewSecurity@index')->name(
        'app-user-view-security'
    );
    Route::get('/app/user/view/billing', $controller_path . '\apps\UserViewBilling@index')->name('app-user-view-billing');
    Route::get('/app/user/view/notifications', $controller_path . '\apps\UserViewNotifications@index')->name(
        'app-user-view-notifications'
    );
    Route::get('/app/user/view/connections', $controller_path . '\apps\UserViewConnections@index')->name(
        'app-user-view-connections'
    );
    Route::get('/app/popup', $controller_path . '\apps\popup\Popup@index')->name('app.popup');
    Route::get('/app/user/storage', $controller_path . '\apps\popup\Popup@index')->name('user.storage');
    Route::view('/app/portal-notification', 'content.apps.app-portal-notification')->name('app.portal.notification');
    Route::view('/app/live-meeting', 'content.apps.app-live-meeting');
    Route::view('/app/join-now', 'content.apps.app-join-now');

    Route::prefix('events')
        ->name('events.')
        ->group(function () {
            // Event Categories
            Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
            // Tickets
            //Route::resource("tickets", TicketController::class);
            Route::get('/ex_property_listing', [EventController::class, 'propertylisting']);
            Route::get('/tickets', [EventController::class, 'tickets'])->name('tickets');
            Route::get('/requests', [EventController::class, 'requests'])->name('requests');
            Route::get('/manage', [EventController::class, 'manage'])->name('manage');
            Route::get('/prefix', [PrefixController::class, 'index'])->name('prefix');
            Route::get('/reasons', [ReasonController::class, 'index'])->name('reasons');
            Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
            Route::get('policy_and_terms', [PolicyAndTermsController::class, 'index'])->name('policy_and_terms');
        });
});

Route::get('stories_time', [SettingController::class, 'storage_setting'])->name('stories23.time');
Route::post('/story-time/post', [SettingController::class, 'store'])->name('story.time.store');

Route::get('reels/reasons', [ReelReasonController::class, 'index'])->name('reels.reasons');
Route::post('reels/reasons/store', [ReelReasonController::class, 'store'])->name('reels.reasons.store');
Route::delete('reels/reasons/delete/{id}', [ReelReasonController::class, 'destroy'])->name('reels.reasons.destroy');


Route::get('reels/song', [ReelSongController::class, 'index'])->name('reels.song');
Route::post('reels/song/store', [ReelSongController::class, 'store'])->name('reels.song.store');
Route::delete('reels/song/delete/{id}', [ReelSongController::class, 'destroy'])->name('reels.song.destroy');
Route::get('reels/stories_time', [ReelSongController::class, 'storage_setting']);
Route::post('reels/story-time', [ReelSongController::class, 'storestory'])->name('reel.time.store');
Route::delete('/reel-list-card/{card}', [ReelSongController::class, 'deleteCard'])->name('list.reel.cards.delete');
Route::get('reel/ReportedStories', [ReelSongController::class, 'ReportedStories']);
Route::get('reel/ManageStories', [ReelSongController::class, 'ManageStories']);


//Advertismen cards

//Specials Cads
Route::get('/specialcards', [AdvertismentController::class, 'specialcards'])->name('list.adver.cards');
Route::post('/specialcards-store', [AdvertismentController::class, 'Cardstore'])->name('list.special.store');
Route::delete('/specials-card/{card}', [AdvertismentController::class, 'destroycard'])->name('specials.cards.delete');
//Business Cads
Route::get('/businesscards', [AdvertismentController::class, 'businesscards'])->name('list.business.cards');
Route::post('/businesscards-store', [AdvertismentController::class, 'businesscardsstore'])->name('list.business.store');
Route::delete('/businesscards-card/{card}', [AdvertismentController::class, 'destroybusinesscards'])->name('business.cards.delete');

//Service Cads
Route::get('/Servicecards', [AdvertismentController::class, 'Servicecards'])->name('list.Service.cards');
Route::post('/Servicecards-store', [AdvertismentController::class, 'Servicecardsstore'])->name('list.Service.store');
Route::delete('/Servicecards-card/{card}', [AdvertismentController::class, 'destroyServicecards'])->name('Service.cards.delete');

//Food Drink Cads
Route::get('/FoodDrinkcards', [AdvertismentController::class, 'FoodDrinkcards'])->name('list.food.cards');
Route::post('/FoodDrinkcards-store', [AdvertismentController::class, 'FoodDrinkcardsstore'])->name('list.food.store');
Route::delete('/FoodDrinkcards-card/{card}', [AdvertismentController::class, 'destroyFoodDrinkcards'])->name('food.cards.delete');


//Add Manage Ads
//Specials Ads
Route::get('/specialAds', [AdvertismentController::class, 'specialads'])->name('specialads.list');
Route::post('/specialAds-store', [AdvertismentController::class, 'adsstore'])->name('specialads.store');
Route::delete('/specials-Ads/{card}', [AdvertismentController::class, 'destroyads'])->name('specialads.ads.delete');
//Business Ads
Route::get('/businessAds', [AdvertismentController::class, 'businessads'])->name('list.business.cards');
Route::post('/businessAds-store', [AdvertismentController::class, 'businessadssstore'])->name('list.business.store.ads');
Route::delete('/businessAds-card/{card}', [AdvertismentController::class, 'destroybusinessads'])->name('business.ads.delete');

//Service Ads
Route::get('/ServiceAds', [AdvertismentController::class, 'Servicecardsads'])->name('list.Service.ads');
Route::post('/ServiceAds-store', [AdvertismentController::class, 'Serviceadssstore'])->name('list.Serviceads.store');
Route::delete('/ServiceAds-card/{card}', [AdvertismentController::class, 'destroyServicecardsads'])->name('Service.ads.delete');

//Food Drink Ads
Route::get('/FoodDrinkAds', [AdvertismentController::class, 'FoodDrinkads'])->name('list.food.ads');
Route::post('/FoodDrinkAds-store', [AdvertismentController::class, 'FoodDrinkadsstore'])->name('ads.food.store');
Route::delete('/FoodDrinkAds-card/{card}', [AdvertismentController::class, 'destroyFoodDrinkads'])->name('food.ads.delete');

//Manage Song
Route::get('/adver-manage-song', [AdvertismentController::class, 'index'])->name('adver.managesong');
Route::post('/advertisement-store', [AdvertismentController::class, 'store'])->name('adver.managesong.store');
Route::delete('/advertisement-song/{song}', [AdvertismentController::class, 'destroy'])->name('adver.song.delete');

// Ads Time
Route::get('advertisement_time', [AdvertismentController::class, 'storage_setting'])->name('adver.time');
Route::post('/story-time/post', [AdvertismentController::class, 'storetime'])->name('adver.time.store');
//Reason
Route::get('/adver-reason', [AdvertismentController::class, 'indexreason'])->name('adver.reason');
Route::post('/advertisement-reason', [AdvertismentController::class, 'reasonstore'])->name('adver.reason.store');
Route::delete('/advertisement-song/{song}', [AdvertismentController::class, 'reasondestroy'])->name('adver.song.delete');
//Policy
Route::get('/advertisement-policy', [AdvertismentController::class, 'Policyindex'])->name('adver.policy');
Route::post('/advertisement-policy', [AdvertismentController::class, 'Policystore'])->name('adver.policy.store');
Route::delete('/advertisement-policy/{policy}', [AdvertismentController::class, 'Policyestroy'])->name('adver.policy.delete');
Route::post('advert-saveFileds', [AdvertismentController::class, 'saveFileds'])->name('adver.policy_and_terms.saveFileds');


 
 Route::prefix('advertisement')->name('advertisement.')->group(function () {
    Route::match(['get', 'post'], 'advert/pricing', [AdvertismentController::class, 'pricing2'])->name('pricing');
});

 //GreetingCards
Route::post('/list-greeting-cards-store', [WishesReasonController::class, 'Cardstore'])->name('list.greeting-cards.store');
Route::delete('/list-greeting-card/{card}', [WishesReasonController::class, 'destroycard'])->name('list.greeting-cards.delete');
//PraysCards
Route::post('/list-prays-cards-store', [WishesReasonController::class, 'PraysStore'])->name('list.prays-cards.store');
Route::delete('/list-prays-card/{card}', [WishesReasonController::class, 'destroyprays'])->name('list.prays-cards.delete');

//Sympathy
Route::post('/list-sympathy-cards-store', [WishesReasonController::class, 'sympathyStore'])->name('list.sympathy-cards.store');
Route::delete('/list-sympathy-card/{card}', [WishesReasonController::class, 'destroysympathy'])->name('list.sympathy-cards.delete');


?>

