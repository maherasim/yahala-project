@extends('layouts/layoutMaster')

@section('title', 'Languages')


@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />

@endsection
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@section('content')

    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Language /</span> All Language
            </h4>
        </div>
        <div class="">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createlanguageModal">Add
                Language</button>
        </div>
    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">List of Language</h5>
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Language</th>
                        <th>Icon</th>
                        {{-- <th>Progress</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (count($languages))
                        @foreach ($languages as $language)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $language->title ?? '' }}</td>
                                <td>
                                    @if(is_array($language->icon) && isset($language->icon['path']))
                                        <img src="{{ asset('storage/'.$language->icon['path']) }}" width="50" height="50">
                                    @elseif(is_string($language->icon))
                                        <img src="{{ asset('storage/'.$language->icon) }}" width="50" height="50">
                                    @else
                                        <!-- Handle the case where $language->icon is neither a valid array nor a string -->
                                        <img src="{{ asset('path/to/default/icon.png') }}" width="50" height="50">
                                    @endif
                                </td>
                                
                                {{-- <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ ( $language->translations_count *100)/$language->texts_count}}%" aria-valuenow="{{ $language->translations_count }}" aria-valuemin="0" aria-valuemax="{{ $language->texts_count }}">{{  floor(($language->translations_count *100)/$language->texts_count)}}%</div>
                        </div>
                    </td> --}}
                                <td>
                                    <div class="">
                                        <span data-bs-toggle="modal" data-bs-target="#languageModal{{ $language->id }}">
                                            <button class="btn pl-0" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 9H15" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path d="M12 15L12 9" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path
                                                        d="M6 4C6 5.10457 5.10457 6 4 6C2.89543 6 2 5.10457 2 4C2 2.89543 2.89543 2 4 2C5.10457 2 6 2.89543 6 4Z"
                                                        stroke="#1C274C" stroke-width="1.5" />
                                                    <path
                                                        d="M6 20C6 21.1046 5.10457 22 4 22C2.89543 22 2 21.1046 2 20C2 18.8954 2.89543 18 4 18C5.10457 18 6 18.8954 6 20Z"
                                                        stroke="#1C274C" stroke-width="1.5" />
                                                    <path
                                                        d="M22 4C22 5.10457 21.1046 6 20 6C18.8954 6 18 5.10457 18 4C18 2.89543 18.8954 2 20 2C21.1046 2 22 2.89543 22 4Z"
                                                        stroke="#1C274C" stroke-width="1.5" />
                                                    <path
                                                        d="M22 20C22 21.1046 21.1046 22 20 22C18.8954 22 18 21.1046 18 20C18 18.8954 18.8954 18 20 18C21.1046 18 22 18.8954 22 20Z"
                                                        stroke="#1C274C" stroke-width="1.5" />
                                                    <path opacity="0.5" d="M6 20H18" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path opacity="0.5" d="M18 4H6" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path opacity="0.5" d="M20 18L20 6" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path opacity="0.5" d="M4 6L4 18" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </button>
                                        </span>

                                        <span data-bs-toggle="modal"
                                            data-bs-target="#EditlanguageModal{{ $language->id }}">
                                            <button class="btn text-danger btn-language pl-0" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                data-bs-original-title="Edit">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M4 22H20" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path
                                                        d="M14.6296 2.92142L13.8881 3.66293L7.07106 10.4799C6.60933 10.9416 6.37846 11.1725 6.17992 11.4271C5.94571 11.7273 5.74491 12.0522 5.58107 12.396C5.44219 12.6874 5.33894 12.9972 5.13245 13.6167L4.25745 16.2417L4.04356 16.8833C3.94194 17.1882 4.02128 17.5243 4.2485 17.7515C4.47573 17.9787 4.81182 18.0581 5.11667 17.9564L5.75834 17.7426L8.38334 16.8675L8.3834 16.8675C9.00284 16.6611 9.31256 16.5578 9.60398 16.4189C9.94775 16.2551 10.2727 16.0543 10.5729 15.8201C10.8275 15.6215 11.0583 15.3907 11.5201 14.929L11.5201 14.9289L18.3371 8.11195L19.0786 7.37044C20.3071 6.14188 20.3071 4.14999 19.0786 2.92142C17.85 1.69286 15.8581 1.69286 14.6296 2.92142Z"
                                                        stroke="#1C274C" stroke-width="1.5" />
                                                    <path opacity="0.5"
                                                        d="M13.8879 3.66406C13.8879 3.66406 13.9806 5.23976 15.3709 6.63008C16.7613 8.0204 18.337 8.11308 18.337 8.11308M5.75821 17.7437L4.25732 16.2428"
                                                        stroke="#1C274C" stroke-width="1.5" />
                                                </svg>
                                            </button>
                                        </span>

                                        @if ($language->title != 'English')
                                            <form action="{{ route('language.destroy', $language->id) }}"
                                                onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                                class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-icon"
                                                    data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                    data-bs-html="true" data-bs-original-title="Remove">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M20.5001 6H3.5" stroke="#1C274C" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path
                                                            d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5" d="M9.5 11L10 16" stroke="#1C274C"
                                                            stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5" d="M14.5 11L14 16" stroke="#1C274C"
                                                            stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5"
                                                            d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                            stroke="#1C274C" stroke-width="1.5" />
                                                    </svg>
                                                </button>
                                            </form>
                                        @endif

                                        {{-- <x-modal id="editlanguageModal{{$language->id}}" title="Update Language" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{$language->id}}" size="md">
                            @include('content.include.movies.editForm')
                            </x-modal> --}}
                            @php
                            $keywords = App\Models\LanguageKeyword::where('language_id', $language->id)->first();
                            
                            $fields = [
                                'alert', 'upgrade', 'premium', 'vip', 'monthly', 'feeds', 'text_comments', 'music_player',
                                'video_playlist', 'discount', 'stories', 'voice_comments', 'live_stream', 'fanpage',
                                'gift_free', 'show_me_the_gift', 'congratulations_educated', 'congratulations_academic',
                                'premium_description', 'go_back_home', 'your_activation_code_mail', 'your_password_code_mail',
                                'your_fanpage_activation_code', 'one_time_code', 'follow_steps_on_your_device', 'welcome'
                            ];
                        
                            $total = count($fields);
                            $done = 0;
                        
                            foreach ($fields as $field) {
                                if (!empty($keywords->$field)) {
                                    $done++;
                                }
                            }
                        @endphp
                        @php
                        $headerOnlineShop = App\Models\HeaderOnlineShopSection::where('language_id', $language->id)->first();
                        
                        // Define the fields for the Header OnlineShop Section
                        $headerOnlineShopFields = [
                            'yahala', 'in_development', 'soon_available'
                        ];
                        
                        // Calculate total and done values
                        $headerOnlineShopTotal = count($headerOnlineShopFields);
                        $headerOnlineShopDone = 0;
                        
                        foreach ($headerOnlineShopFields as $field) {
                            if (!empty($headerOnlineShop->$field)) {
                                $headerOnlineShopDone++;
                            }
                        }
                        @endphp
                        @php
                        $headerEvent = App\Models\HeaderEventSection::where('language_id', $language->id)->first();
                        
                        // Define the fields for the Header Event Section
                        $headerEventFields = [
                            'yahala', 'in_development', 'soon_available'
                        ];
                        
                        // Calculate total and done values
                        $headerEventTotal = count($headerEventFields);
                        $headerEventDone = 0;
                        
                        foreach ($headerEventFields as $field) {
                            if (!empty($headerEvent->$field)) {
                                $headerEventDone++;
                            }
                        }
                        @endphp
                        
                        @php
                        $headerStream = App\Models\HeaderStreamSection::where('language_id', $language->id)->first();
                        
                        // Define the fields for the Header Stream Section
                        $headerStreamFields = [
                            'yahala', 'in_development', 'soon_available'
                        ];
                        
                        // Calculate total and done values
                        $headerStreamTotal = count($headerStreamFields);
                        $headerStreamDone = 0;
                        
                        foreach ($headerStreamFields as $field) {
                            if (!empty($headerStream->$field)) {
                                $headerStreamDone++;
                            }
                        }
                        @endphp
                        @php
                        $headergreeting = App\Models\HeaderGreatingSection::where('language_id', $language->id)->first();
                        
                        // Define the fields for the Header Greeting & Wishes Section
                        $headerGreetingFields = [
                            'greetings', 'pray', 'sympathy', 'see_all'
                        ];
                        
                        // Calculate total and done values
                        $headerGreetingTotal = count($headerGreetingFields);
                        $headerGreetingDone = 0;
                        
                        foreach ($headerGreetingFields as $field) {
                            if (!empty($headergreeting->$field)) {
                                $headerGreetingDone++;
                            }
                        }
                        @endphp
                        @php
                        $headersection = App\Models\headerhistory::where('language_id', $language->id)->first();
                        
                        // Define the fields for the Header History Section
                        $headerHistoryFields = [
                            'categories', 'newst_upload', 'must_viewed', 'share_on_yekbun',
                            'public', 'friends', 'family', 'write_a_comment', 'post_media_comment',
                            'add_voice', 'see_all'
                        ];
                        
                        // Calculate total and done values
                        $headerHistoryTotal = count($headerHistoryFields);
                        $headerHistoryDone = 0;
                        
                        foreach ($headerHistoryFields as $field) {
                            if (!empty($headersection->$field)) {
                                $headerHistoryDone++;
                            }
                        }
                        @endphp
                        @php
                        // Retrieve the existing FooterCart data for the given language_id
                        $footercart = App\Models\FooterCart::where('language_id', $language->id)->first();
                        
                        // Define the fields for the Footer Cart Section
                        $footerCartFields = [
                            'music_cart', 'video_cart', 'bazar_cart', 'event_cart', 'shop_cart', 
                            'service_cart', 'wishes_cart', 'donate', 'portal_cart', 'payment_method', 
                            'accept_policy_terms', 'office_information', 'bank_information'
                        ];
                        
                        // Calculate total and done values
                        $footerCartTotal = count($footerCartFields);
                        $footerCartDone = 0;
                        
                        foreach ($footerCartFields as $field) {
                            if (!empty($footercart->$field)) {
                                $footerCartDone++;
                            }
                        }
                    @endphp
            @php
            $startpage = App\Models\StartPage::where('language_id', $language->id)->first();
        
            $startpageFields = [
                'language', 'our_policy', 'login', 'sign_up', 'dear_guest', 'create_account'
            ];
        
            $startpageTotal = count($startpageFields);
            $startpageDone = 0;
        
            foreach ($startpageFields as $field) {
                if (!empty($startpage->$field)) {
                    $startpageDone++;
                }
            }
        @endphp
        @php
        $headerfeed = App\Models\HeaderFeedSection::where('language_id', $language->id)->first();
        
        // Define the fields for the Header Feed Section
        $headerFeedFields = [
            'no_stories_found', 'latest_feeds', 'see_all', 'greeting_wishes', 'in_development', 
            'soon_available', 'latest_history', 'latest_vote', 'post_comment', 'like', 
            'replay', 'report_comment', 'show_more', 'see_more_feeds', 'show_less', 
            'see_less_feeds', 'save_feed', 'add_to_collection', 'active_notification', 
            'get_message_publish_feed', 'hide_feed_from_user',   'report_this_feed', 
            'share_yekbun', 'public', 'friend', 'family', 'enter_description', 
            'create_feed', 'select_background', 'select_font_color', 'select_service', 
            'search', 'newest', 'friends', 'must_viewed', 'done', 
            'no_data_found', 'my_collection', 'no_collection', 'create_collection', 
            'new_playlist_name', 'select', 'private', 'create'
        ];
        
        // Calculate total and done values
        $headerFeedTotal = count($headerFeedFields);
        $headerFeedDone = 0;
        
        foreach ($headerFeedFields as $field) {
            if (!empty($headerfeed->$field)) {
                $headerFeedDone++;
            }
        }
    @endphp   
    @php
    $profileoffice = App\Models\MyProfileOfficeSection::where('language_id', $language->id)->first();
    
    // Define the fields for the My Profile Office Section
    $profileOfficeFields = [
        'standard', 'upgrade_account', 'my_fanpage', 'new_violate', 'you_get_flag', 'reason', 
        'closed_violate', 'my_fanpage_channel', 'owner', 'follower', 'member', 'our_document', 
        'see_all_document', 'statics', 'my_storage', 'used_storage', 'free_storage', 'my_wishes'
    ];
    
    // Calculate total and done values
    $profileOfficeTotal = count($profileOfficeFields);
    $profileOfficeDone = 0;
    
    foreach ($profileOfficeFields as $field) {
        if (!empty($profileoffice->$field)) {
            $profileOfficeDone++;
        }
    }
    @endphp
    @php
    $settingsection = App\Models\SectionSetting::where('language_id', $language->id)->first();
    
    // Define the fields for the Setting Section
    $settingSectionFields = [
        'setNewPassword', 'oldPassword', 'newPassword', 'confirmNewPassword', 'email', 'oldEmail', 'newEmail',
        'repeatNewEmail', 'details', 'status', 'notificationType', 'musicSetting', 'musicVolume', 'messagesRingtone',
        'callRingtone', 'notificationsRingtone', 'leaveReason', 'describeReason', 'contactType', 'message'
    ];
    
    // Calculate total and done values
    $settingSectionTotal = count($settingSectionFields);
    $settingSectionDone = 0;
    
    foreach ($settingSectionFields as $field) {
        if (!empty($settingsection->$field)) {
            $settingSectionDone++;
        }
    }
    @endphp
    @php
    $profilemulti = App\Models\MyProfileMultimedia::where('language_id', $language->id)->first();
    
    // Define the fields for the My Profile Multimedia Section
    $profileMultiFields = [
        'photo_gallery', 'video_gallery', 'my_playlist', 'my_artist', 'must_listen', 'my_subscribes'
    ];
    
    // Calculate total and done values
    $profileMultiTotal = count($profileMultiFields);
    $profileMultiDone = 0;
    
    foreach ($profileMultiFields as $field) {
        if (!empty($profilemulti->$field)) {
            $profileMultiDone++;
        }
    }
    @endphp
       @php
       // Retrieve the existing SignupSection data for the given language_id
       $signupsection = App\Models\SignupSection::where('language_id', $language->id)->first();
   
       // Define the fields for the Sign up Section
       $signupFields = [
           'language_search', 'language_save_change', 'gender', 'location', 'select_gender_prompt', 'gender_ok',
           'gender_start', 'firstname', 'lastname', 'username', 'birthday', 'your_status', 'status_next', 'status_back',
           'origin', 'select_province', 'email', 'repeat_email', 'email_issue_message', 'error_found',
           'user_already_exist', 'email_ok', 'phone_number', 'password', 'repeat_password',
           'account_created_success_message', 'sign_in_redirect'
       ];
   
       // Calculate total and done values
       $signupTotal = count($signupFields);
       $signupDone = 0;
   
       foreach ($signupFields as $field) {
           if (!empty($signupsection->$field)) {
               $signupDone++;
           }
       }
   
       // If all fields are filled, adjust the total and done values accordingly
       $signupTotal = $signupTotal > 0 ? $signupTotal : 0;
       $signupDone = $signupDone > 0 ? $signupDone : 0;
   @endphp 
    @php
    // Retrieve the existing FooterFriendSection data for the given language_id
    $footerfriends = App\Models\FooterFriendSection::where('language_id', $language->id)->first();
    
    // Define the fields for the Footer Friends Section
    $footerFriendsFields = [
        'friends_online', 'user_you_may_know', 'see_all', 'friends_request', 'search_friends', 
        'friends', 'no_record_found', 'search_family', 'family', 'no_family_member_found', 
        'search_user', 'no_friend_family_found'
    ];
    
    // Calculate total and done values
    $footerFriendsTotal = count($footerFriendsFields);
    $footerFriendsDone = 0;
    
    foreach ($footerFriendsFields as $field) {
        if (!empty($footerfriends->$field)) {
            $footerFriendsDone++;
        }
    }
@endphp
@php
$headersection = App\Models\HeaderSectionStories::where('language_id', $language->id)->first();

// Define the fields for the Header Stories Section
$headerStoriesFields = [
    'my_subscriber', 'friends_stories', 'family_stories', 'my_stories', 'see_all',
    'created', 'story_created_success', 'latest_stories', 'no_stories_found', 'recently_viewed',
    'stories', 'create_new_stories', 'start_now'
];

// Calculate total and done values
$headerStoriesTotal = count($headerStoriesFields);
$headerStoriesDone = 0;

foreach ($headerStoriesFields as $field) {
    if (!empty($headersection->$field)) {
        $headerStoriesDone++;
    }
}
@endphp
@php
$myprofilehome = App\Models\MyProfileHomeSection::where('language_id', $language->id)->first();

// Define the fields for the My Profile Home Section
$myProfileHomeFields = [
    'update_profile_image', 'select_or_upload_banner', 'like', 'following', 'following_posts', 'menu',
    'share_on_yekbun', 'upload_video', 'create_reels', 'go_live', 'my_feed'
];

// Calculate total and done values
$myProfileHomeTotal = count($myProfileHomeFields);
$myProfileHomeDone = 0;

foreach ($myProfileHomeFields as $field) {
    if (!empty($myprofilehome->$field)) {
        $myProfileHomeDone++;
    }
}
@endphp
    @php
    // Retrieve the existing FooterQuickLauncher data for the given language_id
    $footerQuickLauncher = App\Models\FooterQuickLauncher::where('language_id', $language->id)->first();
    
    // Define the fields for the Footer Quick Launcher Section
    $footerQuickFields = [
        'quick_launcher', 'wishes_thanks', 'greetings', 'wishes', 'prays',
        'introduce_business', 'services', 'bazar', 'channels', 'shops',
        'fast_sharing', 'feeds', 'stories', 'golive', 'video',
        'quick_access', 'my_storage', 'used', 'free', 'coming_soon',
        'under_development'
    ];
    
    // Calculate total and done values
    $footerQuickTotal = count($footerQuickFields);
    $footerQuickDone = 0;
    
    foreach ($footerQuickFields as $field) {
        if (!empty($footerQuickLauncher->$field)) {
            $footerQuickDone++;
        }
    }
@endphp 
@php
$headerservice = App\Models\HeaderServicePortalSection::where('language_id', $language->id)->first();

// Define the fields for the Header ServicePortal Section
$headerserviceFields = [
    'yahala', 'arabic', 'in_development', 'soon_available'
];

// Calculate total and done values
$headerserviceTotal = count($headerserviceFields);
$headerserviceDone = 0;

foreach ($headerserviceFields as $field) {
    if (!empty($headerservice->$field)) {
        $headerserviceDone++;
    }
}
@endphp
@php
$profilefriend = App\Models\MyProfileFriendsSection::where('language_id', $language->id)->first();

// Define the fields for the My Profile Friends Section
$profileFriendFields = [
    'friend_request', 'no_friend_requests', 'see_all_friend_requests'
];

// Calculate total and done values
$profileFriendTotal = count($profileFriendFields);
$profileFriendDone = 0;

foreach ($profileFriendFields as $field) {
    if (!empty($profilefriend->$field)) {
        $profileFriendDone++;
    }
}
@endphp
@php
$headerVideo = App\Models\HeaderVideoSection::where('language_id', $language->id)->first();

// Define the fields for the Header Videos Section
$headerVideoFields = [
    'yahala', 'in_development', 'soon_available'
];

// Calculate total and done values
$headerVideoTotal = count($headerVideoFields);
$headerVideoDone = 0;

foreach ($headerVideoFields as $field) {
    if (!empty($headerVideo->$field)) {
        $headerVideoDone++;
    }
}
@endphp
@php
$headerRestaurant = App\Models\HeaderRestaurantSection::where('language_id', $language->id)->first();

// Define the fields for the Header Restaurant Section
$headerRestaurantFields = [
    'yahala', 'social_arabic_site', 'in_development', 'soon_available'
];

// Calculate total and done values
$headerRestaurantTotal = count($headerRestaurantFields);
$headerRestaurantDone = 0;

foreach ($headerRestaurantFields as $field) {
    if (!empty($headerRestaurant->$field)) {
        $headerRestaurantDone++;
    }
}
@endphp
@php
    // Retrieve the existing FooterChatSection data for the given language_id
    $footerchat = App\Models\FooterChatSection::where('language_id', $language->id)->first();
    
    // Define the fields for the Footer Chat Section
    $footerChatFields = [
        'bazar_chat', 'shop_chat', 'service_chat', 'friends_chat', 'family_chat', 
        'group_chat', 'notifications', 'fanpage_chat', 'wishes_chat', 'favorite_contacts', 
        'my_groups', 'coming_soon', 'chat_overview', 'new_messages', 'options', 
        'block_user', 'unblocked', 'block', 'report_user'
    ];
    
    // Calculate total and done values
    $footerChatTotal = count($footerChatFields);
    $footerChatDone = 0;
    
    foreach ($footerChatFields as $field) {
        if (!empty($footerchat->$field)) {
            $footerChatDone++;
        }
    }
@endphp
@php
    $visiter = App\Models\VisiterProfile::where('language_id', $language->id)->first();
    
    // Define the fields for the Visitor Profile Section
    $visitorProfileFields = [
        'say_hello', 'be_friends', 'cancel_friend_request', 'my_feeds', 'see_all_my_feeds', 
        'photo_gallery', 'see_all_photo_gallery', 'video_gallery', 'see_all_video_gallery', 'my_friends', 
        'see_all_my_friends', 'options', 'move_user', 'friends_option', 'family_option', 
        'remove_option', 'block_user', 'unblock_block_user', 'block_block_user', 'report_user', 
        'insult_report_user', 'image_report_user', 'content_report_user', 'feedback_report_user', 
        'annoyance_report_user', 'racism_report_user'
    ];
    
    // Calculate total and done values
    $visitorProfileTotal = count($visitorProfileFields);
    $visitorProfileDone = 0;
    
    foreach ($visitorProfileFields as $field) {
        if (!empty($visiter->$field)) {
            $visitorProfileDone++;
        }
    }
@endphp
@php
$settingoverview = App\Models\SettingOverviewSection::where('language_id', $language->id)->first();

// Define the fields for the Setting Overview Section
$settingoverviewFields = [
    'setting_overview', 'notifications', 'settings', 'my_profile', 'my_channels', 'shortcut', 'collection',
    'view_later', 'market', 'manage_items', 'add', 'manage_ads', 'manage_notifications', 'password',
    'manage_password', 'email', 'change_email', 'ringtone', 'manage_ringtone', 'music', 'manage_player',
    'network', 'manage_connections', 'documentation', 'my_documents', 'storage', 'manage_storage', 'violate',
    'manage_reels', 'my_channels_2', 'in_development_2', 'soon_available_2', 'standard', 'upgrade_account'
];

// Calculate total and done values
$settingoverviewTotal = count($settingoverviewFields);
$settingoverviewDone = 0;

foreach ($settingoverviewFields as $field) {
    if (!empty($settingoverview->$field)) {
        $settingoverviewDone++;
    }
}
@endphp
@php
$headerDonation = App\Models\HeaderDonationSection::where('language_id', $language->id)->first();

// Define the fields for the Header Donation Section
$headerDonationFields = [
    'yahala', 'in_development', 'soon_available'
];

// Calculate total and done values
$headerDonationTotal = count($headerDonationFields);
$headerDonationDone = 0;

foreach ($headerDonationFields as $field) {
    if (!empty($headerDonation->$field)) {
        $headerDonationDone++;
    }
}
@endphp
@php
$headervoter = App\Models\headervoter::where('language_id', $language->id)->first();

// Define the fields for the Header Voting Section
$headerVotingFields = [
    'categories', 'newst_uploads', 'past_vote', 'your_vote', 'what_u_like', 
    'notification', 'vote_one_time', 'cant_redo_vote', 'community', 
    'reviews_qualification', 'total', 'statistics', 'age_and_gender', 
    'male', 'female'
];

// Calculate total and done values
$headerVotingTotal = count($headerVotingFields);
$headerVotingDone = 0;

foreach ($headerVotingFields as $field) {
    if (!empty($headervoter->$field)) {
        $headerVotingDone++;
    }
}
@endphp

@php
$headerMusic = App\Models\HeaderMusicSection::where('language_id', $language->id)->first();

// Define the fields for the Header Music Section
$headerMusicFields = [
    'new_albums', 'latest_videos', 'new_artist', 'latest_stream', 'latest_songs', 
    'see_all', 'history', 'invoice', 'purchase', 'my_invoice', 'music_history', 
    'my_purchase', 'options', 'share_with_friends', 'move_to_playlist', 'save', 
    'remove_from_playlist', 'categories', 'popular_songs', 'latest_uploads', 
    'new_artist_2', 'artist', 'songs', 'albums', 'video_clip', 'new_album', 
    'albums_2', 'my_playlist', 'playlist', 'need_more_playlist', 'buy_new_playlist', 
    'options_2', 'create_new_playlist', 'enter_new_playlist_name', 'select', 
    'private', 'public', 'friends', 'family', 'create'
];

// Calculate total and done values
$headerMusicTotal = count($headerMusicFields);
$headerMusicDone = 0;

foreach ($headerMusicFields as $field) {
    if (!empty($headerMusic->$field)) {
        $headerMusicDone++;
    }
}
@endphp

    @php
// Retrieve the existing SignupSection data for the given language_id
$signinsection = App\Models\SignInSection::where('language_id', $language->id)->first();

// Define the fields for the Sign up Section
$signupFields = [
     
        'email',
        'password',
        'repeat_password',
        'signin',
        'login_error',
        'not_found',
        'signup',
        'regain_password_mail',
        'email_format_wrong',
        'correct_email',
        'password_reset_sent',
        'reset_password_email',
        'verification',
        'authentication_code_sent',
        'did_not_receive_code',
        'resend_code',
        'time_left',
        'verify_now',
        'error_found',
        'invalid_otp',
        'create_password',
        'secure_password',
        'has_8_characters',
        'uppercase_or_symbol',
        'has_number',
        'continue',
        'successfully',
        'logged_in',
        'remember_me',
        'wrong_password',
];

// Calculate total and done values
$signupTotal = count($signupFields);
$signupDone = 0;

foreach ($signupFields as $field) {
    if (!empty($signupsection->$field)) {
        $signupDone++;
    }
}
@endphp      

@php
    // Retrieve the existing SignInSection data for the given language_id
    $signinsection = App\Models\SignInSection::where('language_id', $language->id)->first();
    
    // Define the fields for the Sign in Section
    $signinFields = [
        'email', 'password', 'remember_me', 'forgot_password', 'signin', 'login_error',
        'not_found', 'signup', 'regain_password_mail', 'email_format_wrong', 'correct_email',
        'password_reset_sent', 'reset_password_email', 'verification', 'authentication_code_sent',
        'did_not_receive_code', 'resend_code', 'time_left', 'verify_now', 'error_found',
        'invalid_otp', 'create_password', 'secure_password', 'has_8_characters', 'uppercase_or_symbol',
        'has_number', 'continue', 'successfully', 'logged_in', 'wrong_password'
    ];
    
    // Calculate total and done values
    $signinTotal = count($signinFields);
    $signinDone = 0;
    
    foreach ($signinFields as $field) {
        if (!empty($signinsection->$field)) {
            $signinDone++;
        }
    }
@endphp
                            
                            {{-- Add Categroy modal --}}
                                        <div class="modal fade" id="languageModal{{ $language->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Edit <span
                                                                class="text-info">{{ $language->title }}</span> Language
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="table-responsive text-nowrap">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Section</th>
                                                                            <th scope="col">Progress</th>
                                                                            <th scope="col">Done</th>
                                                                            <th scope="col">Total</th>
                                                                            <th scope="col">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="table-border-bottom-0">
                                                                        <tr>
                                                                            <td>Alert,Upgrade,Mail</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $total > 0 ? ($done / $total) * 100 : 0 }}%;" aria-valuenow="{{ $total > 0 ? ($done / $total) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $done }}</td>
                                                                            <td>{{ $total - $done }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#languageModal__1{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Start Page</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $startpageTotal > 0 ? ($startpageDone / $startpageTotal) * 100 : 0 }}%;" aria-valuenow="{{ $startpageTotal > 0 ? ($startpageDone / $startpageTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $startpageDone }}</td>
                                                                            <td>{{ $startpageTotal - $startpageDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#startpage__1{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sign up Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $signupTotal > 0 ? ($signupDone / $signupTotal) * 100 : 0 }}%;" aria-valuenow="{{ $signupTotal > 0 ? ($signupDone / $signupTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $signupDone }}</td>
                                                                            <td>{{ $signupTotal - $signupDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#signupsection__1{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Sign in Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $signinTotal > 0 ? ($signinDone / $signinTotal) * 100 : 0 }}%;" aria-valuenow="{{ $signinTotal > 0 ? ($signinDone / $signinTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $signinDone }}</td>
                                                                            <td>{{ $signinTotal - $signinDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#signinsection__1{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Footer Quick Launcher Sections</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $footerQuickTotal > 0 ? ($footerQuickDone / $footerQuickTotal) * 100 : 0 }}%;" aria-valuenow="{{ $footerQuickTotal > 0 ? ($footerQuickDone / $footerQuickTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $footerQuickDone }}</td>
                                                                            <td>{{ $footerQuickTotal - $footerQuickDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#footerQuickSectionModal{{ $language->id }}">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>Footer Cart Sections</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $footerCartTotal > 0 ? ($footerCartDone / $footerCartTotal) * 100 : 0 }}%;" aria-valuenow="{{ $footerCartTotal > 0 ? ($footerCartDone / $footerCartTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $footerCartDone }}</td>
                                                                            <td>{{ $footerCartTotal - $footerCartDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#footercart{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Footer Friends Sections</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $footerFriendsTotal > 0 ? ($footerFriendsDone / $footerFriendsTotal) * 100 : 0 }}%;" aria-valuenow="{{ $footerFriendsTotal > 0 ? ($footerFriendsDone / $footerFriendsTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $footerFriendsDone }}</td>
                                                                            <td>{{ $footerFriendsTotal - $footerFriendsDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#footerfriendssection{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Footer Chat Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $footerChatTotal > 0 ? ($footerChatDone / $footerChatTotal) * 100 : 0 }}%;" aria-valuenow="{{ $footerChatTotal > 0 ? ($footerChatDone / $footerChatTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $footerChatDone }}</td>
                                                                            <td>{{ $footerChatTotal - $footerChatDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#footerchatsection{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Feed Sections</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerFeedTotal > 0 ? ($headerFeedDone / $headerFeedTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerFeedTotal > 0 ? ($headerFeedDone / $headerFeedTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerFeedDone }}</td>
                                                                            <td>{{ $headerFeedTotal - $headerFeedDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerfeedsection{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Visitor Profile</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $visitorProfileTotal > 0 ? ($visitorProfileDone / $visitorProfileTotal) * 100 : 0 }}%;" aria-valuenow="{{ $visitorProfileTotal > 0 ? ($visitorProfileDone / $visitorProfileTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $visitorProfileDone }}</td>
                                                                            <td>{{ $visitorProfileTotal - $visitorProfileDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#visitprofilesection{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Stories Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerStoriesTotal > 0 ? ($headerStoriesDone / $headerStoriesTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerStoriesTotal > 0 ? ($headerStoriesDone / $headerStoriesTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerStoriesDone }}</td>
                                                                            <td>{{ $headerStoriesTotal - $headerStoriesDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerstoriessection{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Greeting & Wishes Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerGreetingTotal > 0 ? ($headerGreetingDone / $headerGreetingTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerGreetingTotal > 0 ? ($headerGreetingDone / $headerGreetingTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerGreetingDone }}</td>
                                                                            <td>{{ $headerGreetingTotal - $headerGreetingDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headergreating{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header History Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerHistoryTotal > 0 ? ($headerHistoryDone / $headerHistoryTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerHistoryTotal > 0 ? ($headerHistoryDone / $headerHistoryTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerHistoryDone }}</td>
                                                                            <td>{{ $headerHistoryTotal - $headerHistoryDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerhistory{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Voting Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerVotingTotal > 0 ? ($headerVotingDone / $headerVotingTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerVotingTotal > 0 ? ($headerVotingDone / $headerVotingTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerVotingDone }}</td>
                                                                            <td>{{ $headerVotingTotal - $headerVotingDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headervoter{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Donation Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerDonationTotal > 0 ? ($headerDonationDone / $headerDonationTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerDonationTotal > 0 ? ($headerDonationDone / $headerDonationTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerDonationDone }}</td>
                                                                            <td>{{ $headerDonationTotal - $headerDonationDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerdonation{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Music Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerMusicTotal > 0 ? ($headerMusicDone / $headerMusicTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerMusicTotal > 0 ? ($headerMusicDone / $headerMusicTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerMusicDone }}</td>
                                                                            <td>{{ $headerMusicTotal - $headerMusicDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headermusic{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Videos Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerVideoTotal > 0 ? ($headerVideoDone / $headerVideoTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerVideoTotal > 0 ? ($headerVideoDone / $headerVideoTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerVideoDone }}</td>
                                                                            <td>{{ $headerVideoTotal - $headerVideoDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headervideo{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Header Stream Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerStreamTotal > 0 ? ($headerStreamDone / $headerStreamTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerStreamTotal > 0 ? ($headerStreamDone / $headerStreamTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerStreamDone }}</td>
                                                                            <td>{{ $headerStreamTotal - $headerStreamDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerstreamsection{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Event Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerEventTotal > 0 ? ($headerEventDone / $headerEventTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerEventTotal > 0 ? ($headerEventDone / $headerEventTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerEventDone }}</td>
                                                                            <td>{{ $headerEventTotal - $headerEventDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerevent{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Header OnlineShop Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerOnlineShopTotal > 0 ? ($headerOnlineShopDone / $headerOnlineShopTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerOnlineShopTotal > 0 ? ($headerOnlineShopDone / $headerOnlineShopTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerOnlineShopDone }}</td>
                                                                            <td>{{ $headerOnlineShopTotal - $headerOnlineShopDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headeronlineshop{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Restaurant Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerRestaurantTotal > 0 ? ($headerRestaurantDone / $headerRestaurantTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerRestaurantTotal > 0 ? ($headerRestaurantDone / $headerRestaurantTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerRestaurantDone }}</td>
                                                                            <td>{{ $headerRestaurantTotal - $headerRestaurantDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerrestaurant{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header ServicePortal Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $headerserviceTotal > 0 ? ($headerserviceDone / $headerserviceTotal) * 100 : 0 }}%;" aria-valuenow="{{ $headerserviceTotal > 0 ? ($headerserviceDone / $headerserviceTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $headerserviceDone }}</td>
                                                                            <td>{{ $headerserviceTotal - $headerserviceDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#headerserviceportal{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Setting Overview Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $settingoverviewTotal > 0 ? ($settingoverviewDone / $settingoverviewTotal) * 100 : 0 }}%;" aria-valuenow="{{ $settingoverviewTotal > 0 ? ($settingoverviewDone / $settingoverviewTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $settingoverviewDone }}</td>
                                                                            <td>{{ $settingoverviewTotal - $settingoverviewDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#settingoverview{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Setting Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $settingSectionTotal > 0 ? ($settingSectionDone / $settingSectionTotal) * 100 : 0 }}%;" aria-valuenow="{{ $settingSectionTotal > 0 ? ($settingSectionDone / $settingSectionTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $settingSectionDone }}</td>
                                                                            <td>{{ $settingSectionTotal - $settingSectionDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#settingsectionsok{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>My Profile Home Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $myProfileHomeTotal > 0 ? ($myProfileHomeDone / $myProfileHomeTotal) * 100 : 0 }}%;" aria-valuenow="{{ $myProfileHomeTotal > 0 ? ($myProfileHomeDone / $myProfileHomeTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $myProfileHomeDone }}</td>
                                                                            <td>{{ $myProfileHomeTotal - $myProfileHomeDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#myprofilesection{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>My Profile Multimedia Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $profileMultiTotal > 0 ? ($profileMultiDone / $profileMultiTotal) * 100 : 0 }}%;" aria-valuenow="{{ $profileMultiTotal > 0 ? ($profileMultiDone / $profileMultiTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $profileMultiDone }}</td>
                                                                            <td>{{ $profileMultiTotal - $profileMultiDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#profilemultimedia{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>My Profile Friends Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $profileFriendTotal > 0 ? ($profileFriendDone / $profileFriendTotal) * 100 : 0 }}%;" aria-valuenow="{{ $profileFriendTotal > 0 ? ($profileFriendDone / $profileFriendTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $profileFriendDone }}</td>
                                                                            <td>{{ $profileFriendTotal - $profileFriendDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#myprofilefriends{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>My Profile Office Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $profileOfficeTotal > 0 ? ($profileOfficeDone / $profileOfficeTotal) * 100 : 0 }}%;" aria-valuenow="{{ $profileOfficeTotal > 0 ? ($profileOfficeDone / $profileOfficeTotal) * 100 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $profileOfficeDone }}</td>
                                                                            <td>{{ $profileOfficeTotal - $profileOfficeDone }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#myprofileoffice{{ $language->id }}" onclick="openSectionModal('alert')">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Channels</td>
                                                                            
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td> </td>
                                                                            <td> </td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#myaschannels{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Channel Settings</td>
                                                                            
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td> </td>
                                                                            <td> </td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#mychannelsetting{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- Edit language model __1 --}}
                                        @php
                                        $keywords = App\Models\LanguageKeyword::where('language_id', $language->id)->first();
                                        
                                        $fields = [
                                            'alert', 'upgrade', 'premium', 'vip', 'monthly', 'feeds', 'text_comments', 'music_player',
                                            'video_playlist', 'discount', 'stories', 'voice_comments', 'live_stream', 'fanpage',
                                            'gift_free', 'show_me_the_gift', 'congratulations_educated', 'congratulations_academic',
                                            'premium_description', 'go_back_home', 'your_activation_code_mail', 'your_password_code_mail',
                                            'your_fanpage_activation_code', 'one_time_code', 'follow_steps_on_your_device', 'welcome'
                                        ];
                                    
                                        $total = count($fields);
                                        $done = 0;
                                    
                                        foreach ($fields as $field) {
                                            if (!empty($keywords->$field)) {
                                                $done++;
                                            }
                                        }
                                    @endphp
                                    
                                    <div class="modal fade" id="languageModal__1{{ $language->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalCenterTitle">Alert, Upgrade, Mail Section</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('languages.keywordstore') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="language_id" value="{{ $language->id }}">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5>English Language</h5>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>{{ $language->title }} Language</h5>
                                                                </div>
                                                            </div>
                                                            
                                                            @foreach ([
                                                                'alert' => 'This Module is only for Premium User Please Upgrade your Account',
                                                                'upgrade' => 'Select the plan',
                                                                'premium' => 'Premium',
                                                                'vip' => 'Vip',
                                                                'monthly' => 'Monthly',
                                                                'feeds' => 'Feeds',
                                                                'text_comments' => 'Text Comments',
                                                                'music_player' => 'Music Player',
                                                                'video_playlist' => 'Video Playlist',
                                                                'discount' => '10% Discount',
                                                                'stories' => 'Stories',
                                                                'voice_comments' => 'Voice Comments',
                                                                'live_stream' => 'Live Stream',
                                                                'fanpage' => 'Fanpage',
                                                                'gift_free' => 'Choose this Plan and get one Gift Free',
                                                                'show_me_the_gift' => 'Show me the Gift',
                                                                'congratulations_educated' => 'Congratulations Educated',
                                                                'congratulations_academic' => 'Congratulations Academic',
                                                                'premium_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                                                                'go_back_home' => 'Go back to home!',
                                                                'your_activation_code_mail' => 'Your Activation Code „Mail“',
                                                                'your_password_code_mail' => 'Your Password Code „Mail“',
                                                                'your_fanpage_activation_code' => 'Your FanPage Activation Code',
                                                                'one_time_code' => 'Code can be used one Time only',
                                                                'follow_steps_on_your_device' => 'Follow Steps on your Device',
                                                                'welcome' => 'Welcome',
                                                            ] as $field => $placeholder)
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>{{ ucfirst(str_replace('_', ' ', $field)) }}</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="{{ $field }}" placeholder="{{ $placeholder }}" value="{{ $keywords->$field ?? '' }}">
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-label-secondary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    

                                        
                                    @php
                                    $startpage = App\Models\StartPage::where('language_id', $language->id)->first();
                                    @endphp
                                    <div class="modal fade" id="startpage__1{{ $language->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalCenterTitle">Start Page</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('languages.startpage') }}" method="POST">
                                                        @csrf
                                                        @if($startpage)
                                                            <input type="hidden" name="_id" value="{{ $startpage->_id }}">
                                                        @endif
                                                        <input type="hidden" name="language_id" value="{{ $language->id }}">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5>English Language</h5>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>{{ $language->title }} Language</h5>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Language</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="language" placeholder="Language" value="{{ $startpage->language ?? '' }}">
                                                                </div>
                                                            </div>
                                    
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Our Policy</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="our_policy" placeholder="Our Policy" value="{{ $startpage->our_policy ?? '' }}">
                                                                </div>
                                                            </div>
                                    
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Login</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="login" placeholder="Login" value="{{ $startpage->login ?? '' }}">
                                                                </div>
                                                            </div>
                                    
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Sign up</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="sign_up" placeholder="Sign up" value="{{ $startpage->sign_up ?? '' }}">
                                                                </div>
                                                            </div>
                                    
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Guest</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="dear_guest" placeholder="Dear Guest" value="{{ $startpage->dear_guest ?? '' }}">
                                                                </div>
                                                            </div>
                                    
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Create Account</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="create_account" placeholder="Create Account" value="{{ $startpage->create_account ?? '' }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                    
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-label-secondary" data-bs-dismiss="modal">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                        {{-- //Sign up Section --}}
                                        @php
                                        // Retrieve the existing SignupSection data for the given language_id
                                        $signupsection = App\Models\SignupSection::where('language_id', $language->id)->first();
                                    @endphp
                                    
                                    <div class="modal fade" id="signupsection__1{{ $language->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalCenterTitle">Sign up Section</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('languages.signupsection') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="language_id" value="{{ $language->id }}">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5>English Language</h5>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>{{ $language->title }} Language</h5>
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Language -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Language</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="language_search" value="{{ $signupsection->language_search ?? '' }}" placeholder="Search">
                                                                    <input type="text" class="form-control mt-2" name="language_save_change" value="{{ $signupsection->language_save_change ?? '' }}" placeholder="Save Change">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Select Gender -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Select Gender</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" name="gender">
                                                                        <option value="male" {{ $signupsection && $signupsection->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                                        <option value="female" {{ $signupsection && $signupsection->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                                        <option value="missing" {{ $signupsection && $signupsection->gender == 'missing' ? 'selected' : '' }}>Gender is Missing</option>
                                                                    </select> <br>
                                                                    <h6>Select Location</h6>
                                                                    <select class="form-control" name="location">
                                                                        <option value="address" {{ $signupsection && $signupsection->location == 'address' ? 'selected' : '' }}>Address</option>
                                                                        <option value="current_location" {{ $signupsection && $signupsection->location == 'current_location' ? 'selected' : '' }}>Current Location</option>
                                                                    </select>
                                                                    <input type="text" class="form-control mt-2" name="select_gender_prompt" value="{{ $signupsection->select_gender_prompt ?? '' }}" placeholder="Please select your gender">
                                                                    <input type="text" class="form-control mt-2" name="gender_ok" value="{{ $signupsection->gender_ok ?? '' }}" placeholder="Ok">
                                                                    <input type="text" class="form-control mt-2" name="gender_start" value="{{ $signupsection->gender_start ?? '' }}" placeholder="Start">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Firstname -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Firstname</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="firstname" value="{{ $signupsection->firstname ?? '' }}" placeholder="Your Firstname">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Lastname -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Lastname</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="lastname" value="{{ $signupsection->lastname ?? '' }}" placeholder="Your Lastname">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Username -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Username</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="username" value="{{ $signupsection->username ?? '' }}" placeholder="Your Username">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Birthday and Status -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Your Birthday</h6>
                                                                    <input type="date" class="form-control" name="birthday" value="{{ $signupsection->birthday ?? '' }}" placeholder="Your Birthday">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h6>Your Status</h6>
                                                                    <select class="form-control" name="your_status">
                                                                        <option value="single" {{ $signupsection && $signupsection->your_status == 'single' ? 'selected' : '' }}>Single</option>
                                                                        <option value="engaged" {{ $signupsection && $signupsection->your_status == 'engaged' ? 'selected' : '' }}>Engaged</option>
                                                                        <option value="married" {{ $signupsection && $signupsection->your_status == 'married' ? 'selected' : '' }}>Married</option>
                                                                    </select>
                                                                    <input type="text" class="form-control mt-2" name="status_next" value="{{ $signupsection->status_next ?? '' }}" placeholder="Next">
                                                                    <input type="text" class="form-control mt-2" name="status_back" value="{{ $signupsection->status_back ?? '' }}" placeholder="Back">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Select Origin -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Select Origin</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" name="origin">
                                                                        <option value="kurdish" {{ $signupsection && $signupsection->origin == 'kurdish' ? 'selected' : '' }}>I´m Kurdish</option>
                                                                        <option value="provinces" {{ $signupsection && $signupsection->origin == 'provinces' ? 'selected' : '' }}>Your Province</option>
                                                                        <option value="not_kurdish" {{ $signupsection && $signupsection->origin == 'not_kurdish' ? 'selected' : '' }}>I´m not Kurdish</option>
                                                                    </select>
                                                                    <input type="text" class="form-control mt-2" name="select_province" value="{{ $signupsection->select_province ?? '' }}" placeholder="Select your Province">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- E-Mail Address -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Your E-Mail Address</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="email" class="form-control" name="email" value="{{ $signupsection->email ?? '' }}" placeholder="Type your E-Mail">
                                                                    <input type="email" class="form-control mt-2" name="repeat_email" value="{{ $signupsection->repeat_email ?? '' }}" placeholder="Repeat your E-Mail">
                                                                    <input type="text" class="form-control mt-2" name="email_issue_message" value="{{ $signupsection->email_issue_message ?? '' }}" placeholder="E-Mail issue Message">
                                                                    <input type="text" class="form-control mt-2" name="error_found" value="{{ $signupsection->error_found ?? '' }}" placeholder="Error found">
                                                                    <input type="text" class="form-control mt-2" name="user_already_exist" value="{{ $signupsection->user_already_exist ?? '' }}" placeholder="User already exist">
                                                                    <input type="text" class="form-control mt-2" name="email_ok" value="{{ $signupsection->email_ok ?? '' }}" placeholder="Ok">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Phone Number -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Your Phone Number</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="phone_number" value="{{ $signupsection->phone_number ?? '' }}" placeholder="Your Phone Number">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Create Password -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Create Password</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="password" class="form-control" name="password" placeholder="Enter a Password">
                                                                    <input type="password" class="form-control mt-2" name="repeat_password" placeholder="Repeat a Password">
                                                                </div>
                                                            </div>
                                    
                                                            <!-- Account Created -->
                                                            <div class="row mt-2">
                                                                <div class="col-md-6">
                                                                    <h6>Account Created!</h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="account_created_success_message" value="{{ $signupsection->account_created_success_message ?? '' }}" placeholder="Your account has been created, successfully. Please sign in to use your account, and enjoy">
                                                                    <input type="text" class="form-control mt-2" name="sign_in_redirect" value="{{ $signupsection->sign_in_redirect ?? '' }}" placeholder="Take me to sign in">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-label-secondary" data-bs-dismiss="modal">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                          

                                        @include('content.include.language.editForm', [
                                            'language' => $language,
                                        ])
                                        {{-- Signin Section --}}
                                        @include('footercartsection', ['language' => $language])
                                        @include('footerchatsection', ['language' => $language])
                                        @include('visiterprofile', ['language' => $language])
                                        @include('headerstories', ['language' => $language])
                                        @include('headergreating', ['language' => $language])
                                        @include('headerdonation', ['language' => $language])
                                        @include('headerhistory', ['language' => $language])
                                        @include('headervoter', ['language' => $language])
                                        @include('headermusic', ['language' => $language])
                                        @include('headervideo', ['language' => $language])
                                        @include('headerstream', ['language' => $language])
                                        @include('headerevent', ['language' => $language])
                                        @include('headeronlineshop', ['language' => $language])
                                        @include('header_restorent', ['language' => $language])
                                        @include('header_serviceportal', ['language' => $language])
                                        @include('settingoverview', ['language' => $language])
                                        @include('settingsection', ['language' => $language])
                                        @include('myprofilesection', ['language' => $language])
                                        @include('profilemultimedia', ['language' => $language])
                                        @include('myprofilefriend', ['language' => $language])
                                        @include('profileofficesection', ['language' => $language])
                                        @include('chanel', ['language' => $language])
                                        @include('channel_setting', ['language' => $language])
                                        @include('headerfeedsection', ['language' => $language])
                                        @include('footerfriends', ['language' => $language])
                                        @include('edit_footer_quick_section_modal', [
                                            'language' => $language,
                                        ])

                                        @include('signinsection', ['language' => $language])

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="8">No Language found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

    <x-modal id="createlanguageModal" title="Create Language" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createForm2" size="md">
        @include('content.include.language.createForm')
    </x-modal>

@section('page-script')
    <script>
        function confirmAction(event, callback) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to delete this?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-danger me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div style=\"display:flex;gap:4px;margin-top:10px;\"><img src=\"" + img_src +
                    "\" style=\"width:20px;height:20px;border-radius:20px;\"/><p style=\"font-weight: 400;font-size:10pt; margin-top:-5px;\">" +
                    text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_example').select2(options);
        $('.select2-container--default .select2-selection--single').css({
            'height': '47px'
        });

        $(".btn-language").click(function() {
            $("#modalCenterTitle").text("Edit language");
        })
    </script>
@endsection
@endsection
