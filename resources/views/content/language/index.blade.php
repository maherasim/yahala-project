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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
                                    @if (is_array($language->icon) && isset($language->icon['path']))
                                        <img src="{{ asset('storage/' . $language->icon['path']) }}" width="50"
                                            height="50">
                                    @elseif(is_string($language->icon))
                                        <img src="{{ asset('storage/' . $language->icon) }}" width="50" height="50">
                                    @else
                                        <!-- Handle the case where $language->icon is neither a valid array nor a string -->
                                        <img src="{{ asset('path/to/default/icon.png') }}" width="50" height="50">
                                    @endif
                                </td>







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
                                                onsubmit="confirmAction(event, () => event.target.submit())"
                                                method="post" class="d-inline">
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
                                            $keywords = App\Models\LanguageKeyword::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            $fields = [
                                                'alert',
                                                'upgrade',
                                                'premium',
                                                'vip',
                                                'monthly',
                                                'feeds',
                                                'text_comments',
                                                'music_player',
                                                'video_playlist',
                                                'discount',
                                                'stories',
                                                'voice_comments',
                                                'live_stream',
                                                'fanpage',
                                                'gift_free',
                                                'show_me_the_gift',
                                                'congratulations_educated',
                                                'congratulations_academic',
                                                'premium_description',
                                                'go_back_home',
                                                'your_activation_code_mail',
                                                'your_password_code_mail',
                                                'your_fanpage_activation_code',
                                                'one_time_code',
                                                'follow_steps_on_your_device',
                                                'welcome',
                                                'Advertisement',
                                                'Latest_feeds',
                                                'Latest_artist',
                                                'See_All',
                                                'New_albums',
                                                'New_albums',
                                                'Wishes_thanks',
                                                'e_commerce',
                                                'Service',
                                                'Food_delivery',
                                                'Restaurant',
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
                                            $headerOnlineShop = App\Models\HeaderOnlineShopSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header OnlineShop Section
                                            $headerOnlineShopFields = ['yahala', 'in_development', 'soon_available'];

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
                                            $headerEvent = App\Models\HeaderEventSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Event Section
                                            $headerEventFields = ['yahala', 'in_development', 'soon_available'];

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
                                            $headerStream = App\Models\HeaderStreamSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Stream Section
                                            $headerStreamFields = ['yahala', 'in_development', 'soon_available'];

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
                                            $headergreeting = App\Models\HeaderGreatingSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Greeting & Wishes Section
                                            $headerGreetingFields = ['greetings', 'pray', 'sympathy', 'see_all'];

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
                                            $headersection = App\Models\headerhistory::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header History Section
                                            $headerHistoryFields = [
                                                'categories',
                                                'newst_upload',
                                                'must_viewed',
                                                'share_on_yekbun',
                                                'public',
                                                'friends',
                                                'family',
                                                'write_a_comment',
                                                'post_media_comment',
                                                'add_voice',
                                                'see_all',
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
                                            $footercart = App\Models\FooterCart::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Footer Cart Section
                                            $footerCartFields = [
                                                'music_cart',
                                                'video_cart',
                                                'bazar_cart',
                                                'event_cart',
                                                'shop_cart',
                                                'service_cart',
                                                'wishes_cart',
                                                'donate',
                                                'portal_cart',
                                                'payment_method',
                                                'accept_policy_terms',
                                                'office_information',
                                                'bank_information',
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
                                            // Retrieve the existing GuestSection data for the given language_id
                                            $guestsection = App\Models\GuestSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Footer Cart Section
                                            $guestFields = [
                                                'dear_guest',
                                                'guest_message',
                                                'create_account',
                                                'account_message',
                                                'sign_in',
                                                'sign_in_message',
                                                'close',
                                            ];

                                            // Calculate total and done values
                                            $guestFieldsTotal = count($guestFields);
                                            $guestDone = 0;

                                            foreach ($guestFields as $field) {
                                                if (!empty($guestsection->$field)) {
                                                    $guestDone++;
                                                }
                                            }
                                        @endphp








                                        @php
                                            $startpage = App\Models\StartPage::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            $startpageFields = [
                                                'language',
                                                'our_policy',
                                                'login',
                                                'sign_up',
                                                'dear_guest',
                                                'create_account',
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
                                            $homepagelanguage = App\Models\HomePageLanguage::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            $homepagelanguageFields = ['language_main', 'search_language'];

                                            $homepagelanguageTotal = count($homepagelanguageFields);
                                            $homepagelanguageDone = 0;

                                            foreach ($homepagelanguageFields as $field2) {
                                                if (!empty($homepagelanguage->$field2)) {
                                                    $homepagelanguageDone++;
                                                }
                                            }
                                        @endphp

                                        @php
                                            $app_policy = App\Models\App_Policy::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            $app_policyFields = ['policy_terms', 'description', 'heading_title'];

                                            $app_policyTotal = count($app_policyFields);
                                            $app_policyDone = 0;

                                            foreach ($app_policyFields as $field3) {
                                                if (!empty($app_policy->$field3)) {
                                                    $app_policyDone++;
                                                }
                                            }
                                        @endphp







                                        @php
                                            $headerfeed = App\Models\HeaderFeedSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Feed Section
                                            $headerFeedFields = [
                                                'no_stories_found',
                                                'latest_feeds',
                                                'see_all',
                                                'greeting_wishes',
                                                'in_development',
                                                'soon_available',
                                                'latest_history',
                                                'latest_vote',
                                                'post_comment',
                                                'like',
                                                'replay',
                                                'report_comment',
                                                'show_more',
                                                'see_more_feeds',
                                                'show_less',
                                                'see_less_feeds',
                                                'save_feed',
                                                'add_to_collection',
                                                'active_notification',
                                                'get_message_publish_feed',
                                                'hide_feed_from_user',
                                                'report_this_feed',
                                                'share_yekbun',
                                                'public',
                                                'friend',
                                                'family',
                                                'enter_description',
                                                'create_feed',
                                                'select_background',
                                                'select_font_color',
                                                'select_service',
                                                'search',
                                                'newest',
                                                'friends',
                                                'must_viewed',
                                                'done',
                                                'no_data_found',
                                                'my_collection',
                                                'no_collection',
                                                'create_collection',
                                                'new_playlist_name',
                                                'select',
                                                'private',
                                                'create',
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
                                            $profileoffice = App\Models\MyProfileOfficeSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the My Profile Office Section
                                            $profileOfficeFields = [
                                                'standard',
                                                'upgrade_account',
                                                'my_fanpage',
                                                'new_violate',
                                                'you_get_flag',
                                                'reason',
                                                'closed_violate',
                                                'my_fanpage_channel',
                                                'owner',
                                                'follower',
                                                'member',
                                                'our_document',
                                                'see_all_document',
                                                'statics',
                                                'my_storage',
                                                'used_storage',
                                                'free_storage',
                                                'my_wishes',
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
                                            $settingsection = App\Models\SectionSetting::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Setting Section
                                            $settingSectionFields = [
                                                'setNewPassword',
                                                'oldPassword',
                                                'newPassword',
                                                'confirmNewPassword',
                                                'email',
                                                'oldEmail',
                                                'newEmail',
                                                'repeatNewEmail',
                                                'details',
                                                'status',
                                                'notificationType',
                                                'musicSetting',
                                                'musicVolume',
                                                'messagesRingtone',
                                                'callRingtone',
                                                'notificationsRingtone',
                                                'leaveReason',
                                                'describeReason',
                                                'contactType',
                                                'message',
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
                                            $profilemulti = App\Models\MyProfileMultimedia::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the My Profile Multimedia Section
                                            $profileMultiFields = [
                                                'photo_gallery',
                                                'video_gallery',
                                                'my_playlist',
                                                'my_artist',
                                                'must_listen',
                                                'my_subscribes',
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
                                            $signupsection = App\Models\SignupSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Sign up Section
                                            $signupFields = [
                                                'language_search',
                                                'gender',
                                                'firstname',
                                                'lastname',
                                                'user_already_exist',
                                                'username',
                                                'your_first_name',
                                                'your_last_name',
                                                'nationality',
                                                'select_nationality',
                                                'information',
                                                'information_description',
                                                'male',
                                                'female',
                                                'next_button',
                                                'back_button',
                                                'birthday',
                                                'your_status',
                                                'location',
                                                'origin',
                                                'select_province',
                                                'your_email',
                                                'repeat_email',
                                                'email_issue_message',
                                                'error_found',
                                                'your_phone_number',
                                                'create_password',
                                                'repeat_password',
                                                'account_created_success_message',
                                                'sign_in_redirect',
                                                'setup_new_device',
                                                'start_now',
                                                'your_new_devices',
                                                'old_devices',
                                                'verify_now',
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
                                            $footerfriends = App\Models\FooterFriendSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Footer Friends Section
                                            $footerFriendsFields = [
                                                'friends_online',
                                                'user_you_may_know',
                                                'see_all',
                                                'friends_request',
                                                'search_friends',
                                                'friends',
                                                'no_record_found',
                                                'search_family',
                                                'family',
                                                'no_family_member_found',
                                                'search_user',
                                                'no_friend_family_found',
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
                                            $headersection = App\Models\HeaderSectionStories::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Stories Section
                                            $headerStoriesFields = [
                                                'my_subscriber',
                                                'friends_stories',
                                                'family_stories',
                                                'my_stories',
                                                'see_all',
                                                'created',
                                                'story_created_success',
                                                'latest_stories',
                                                'no_stories_found',
                                                'recently_viewed',
                                                'stories',
                                                'create_new_stories',
                                                'start_now',
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
                                            $myprofilehome = App\Models\MyProfileHomeSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the My Profile Home Section
                                            $myProfileHomeFields = [
                                                'update_profile_image',
                                                'select_or_upload_banner',
                                                'like',
                                                'following',
                                                'following_posts',
                                                'menu',
                                                'share_on_yekbun',
                                                'upload_video',
                                                'create_reels',
                                                'go_live',
                                                'my_feed',
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
                                            $footerQuickLauncher = App\Models\FooterQuickLauncher::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Footer Quick Launcher Section
                                            $footerQuickFields = [
                                                'quick_launcher',
                                                'wishes_thanks',
                                                'greetings',
                                                'wishes',
                                                'prays',
                                                'introduce_business',
                                                'services',
                                                'bazar',
                                                'channels',
                                                'shops',
                                                'fast_sharing',
                                                'feeds',
                                                'stories',
                                                'golive',
                                                'video',
                                                'quick_access',
                                                'my_storage',
                                                'used',
                                                'free',
                                                'coming_soon',
                                                'under_development',
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
                                            $headerservice = App\Models\HeaderServicePortalSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header ServicePortal Section
                                            $headerserviceFields = [
                                                'yahala',
                                                'arabic',
                                                'in_development',
                                                'soon_available',
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
                                            $profilefriend = App\Models\MyProfileFriendsSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the My Profile Friends Section
                                            $profileFriendFields = [
                                                'friend_request',
                                                'no_friend_requests',
                                                'see_all_friend_requests',
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
                                            $headerVideo = App\Models\HeaderVideoSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Videos Section
                                            $headerVideoFields = ['yahala', 'in_development', 'soon_available'];

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
                                            $headerRestaurant = App\Models\HeaderRestaurantSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Restaurant Section
                                            $headerRestaurantFields = [
                                                'yahala',
                                                'social_arabic_site',
                                                'in_development',
                                                'soon_available',
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
                                            $footerchat = App\Models\FooterChatSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Footer Chat Section
                                            $footerChatFields = [
                                                'bazar_chat',
                                                'shop_chat',
                                                'service_chat',
                                                'friends_chat',
                                                'family_chat',
                                                'group_chat',
                                                'notifications',
                                                'fanpage_chat',
                                                'wishes_chat',
                                                'favorite_contacts',
                                                'my_groups',
                                                'coming_soon',
                                                'chat_overview',
                                                'new_messages',
                                                'options',
                                                'block_user',
                                                'unblocked',
                                                'block',
                                                'report_user',
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
                                            $visiter = App\Models\VisiterProfile::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Visitor Profile Section
                                            $visitorProfileFields = [
                                                'say_hello',
                                                'be_friends',
                                                'cancel_friend_request',
                                                'my_feeds',
                                                'see_all_my_feeds',
                                                'photo_gallery',
                                                'see_all_photo_gallery',
                                                'video_gallery',
                                                'see_all_video_gallery',
                                                'my_friends',
                                                'see_all_my_friends',
                                                'options',
                                                'move_user',
                                                'friends_option',
                                                'family_option',
                                                'remove_option',
                                                'block_user',
                                                'unblock_block_user',
                                                'block_block_user',
                                                'report_user',
                                                'insult_report_user',
                                                'image_report_user',
                                                'content_report_user',
                                                'feedback_report_user',
                                                'annoyance_report_user',
                                                'racism_report_user',
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
                                            $settingoverview = App\Models\SettingOverviewSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Setting Overview Section
                                            $settingoverviewFields = [
                                                'setting_overview',
                                                'notifications',
                                                'settings',
                                                'my_profile',
                                                'my_channels',
                                                'shortcut',
                                                'collection',
                                                'view_later',
                                                'market',
                                                'manage_items',
                                                'add',
                                                'manage_ads',
                                                'manage_notifications',
                                                'password',
                                                'manage_password',
                                                'email',
                                                'change_email',
                                                'ringtone',
                                                'manage_ringtone',
                                                'music',
                                                'manage_player',
                                                'network',
                                                'manage_connections',
                                                'documentation',
                                                'my_documents',
                                                'storage',
                                                'manage_storage',
                                                'violate',
                                                'manage_reels',
                                                'my_channels_2',
                                                'in_development_2',
                                                'soon_available_2',
                                                'standard',
                                                'upgrade_account',
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
                                            $headerDonation = App\Models\HeaderDonationSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Donation Section
                                            $headerDonationFields = ['yahala', 'in_development', 'soon_available'];

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
                                            $headervoter = App\Models\headervoter::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Voting Section
                                            $headerVotingFields = [
                                                'categories',
                                                'newst_uploads',
                                                'past_vote',
                                                'your_vote',
                                                'what_u_like',
                                                'notification',
                                                'vote_one_time',
                                                'cant_redo_vote',
                                                'community',
                                                'reviews_qualification',
                                                'total',
                                                'statistics',
                                                'age_and_gender',
                                                'male',
                                                'female',
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
                                            $headerMusic = App\Models\HeaderMusicSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            // Define the fields for the Header Music Section
                                            $headerMusicFields = [
                                                'new_albums',
                                                'latest_videos',
                                                'new_artist',
                                                'latest_stream',
                                                'latest_songs',
                                                'see_all',
                                                'history',
                                                'invoice',
                                                'purchase',
                                                'my_invoice',
                                                'music_history',
                                                'my_purchase',
                                                'options',
                                                'share_with_friends',
                                                'move_to_playlist',
                                                'save',
                                                'remove_from_playlist',
                                                'categories',
                                                'popular_songs',
                                                'latest_uploads',
                                                'new_artist_2',
                                                'artist',
                                                'songs',
                                                'albums',
                                                'video_clip',
                                                'new_album',
                                                'albums_2',
                                                'my_playlist',
                                                'playlist',
                                                'need_more_playlist',
                                                'buy_new_playlist',
                                                'options_2',
                                                'create_new_playlist',
                                                'enter_new_playlist_name',
                                                'select',
                                                'private',
                                                'public',
                                                'friends',
                                                'family',
                                                'create',
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
                                            // Retrieve the existing SignInSection data for the given language_id
                                            $signinsection = App\Models\SignInSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();

                                            $signinFields = [
                                                'email',
                                                'password',
                                                'repeat_password',
                                                'signin',
                                                'login_error',
                                                'not_found',
                                                'forgot_password',
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
                                                'login_error',
                                                'login_error_message',
                                                'verification_code',
                                                'enter_otp',
                                                'title_email',
                                                'title_password',
                                                'lost_device_title',
                                                'send_buttton',
                                                'forgot_password',
                                                'reset_password',
                                                'lost_device_subtitle',
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
                                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="pills-home-tab{{ $language->id }}"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-home{{ $language->id }}"
                                                                    type="button" role="tab"
                                                                    aria-controls="pills-home{{ $language->id }}" aria-selected="true">Home
                                                                    Section</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-settings-tab{{ $language->id }}"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-settings{{ $language->id }}"
                                                                    type="button" role="tab"
                                                                    aria-controls="pills-settings{{ $language->id }}"
                                                                    aria-selected="false">Setting Section</button>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content" id="pills-tabContent">
                                                            <!-- Home Section Tab -->
                                                            <div class="tab-pane fade show active" id="pills-home{{ $language->id }}"
                                                                role="tabpanel" aria-labelledby="pills-home-tab{{ $language->id }}">
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
                                                                                    <td>Home page Language </td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success text-white text-center"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $homepagelanguageTotal > 0 ? ($homepagelanguageDone / $homepagelanguageTotal) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $homepagelanguageTotal > 0 ? ($homepagelanguageDone / $homepagelanguageTotal) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($homepagelanguageTotal > 0 ? ($homepagelanguageDone / $homepagelanguageTotal) * 100 : 0, 1) }}%
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td>{{ $homepagelanguageDone }}</td>
                                                                                    <td>{{ $homepagelanguageTotal - $startpageDone }}
                                                                                    </td>


                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#homepagelanguage{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>Home page App Policy </td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success text-white text-center"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $app_policyTotal > 0 ? ($app_policyDone / $app_policyTotal) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $app_policyTotal > 0 ? ($app_policyDone / $app_policyTotal) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($app_policyTotal > 0 ? ($app_policyDone / $app_policyTotal) * 100 : 0, 1) }}%
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td>{{ $app_policyDone }}</td>
                                                                                    <td>{{ $app_policyTotal - $app_policyDone }}
                                                                                    </td>


                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#app_policy{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>Home page Landing Page</td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success text-white text-center"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $total > 0 ? ($done / $total) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $total > 0 ? ($done / $total) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($total > 0 ? ($done / $total) * 100 : 0, 1) }}%
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td>{{ $done }}</td>
                                                                                    <td>{{ $total - $done }}</td>
                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#languageModal__1{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td> Home page Sign up Section</td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success text-white text-center"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $signupTotal > 0 ? ($signupDone / $signupTotal) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $signupTotal > 0 ? ($signupDone / $signupTotal) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($signupTotal > 0 ? ($signupDone / $signupTotal) * 100 : 0, 1) }}%
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td>{{ $signupDone }}</td>
                                                                                    <td>{{ $signupTotal - $signupDone }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#signupsection__1{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td> Home page Sign in Section</td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success text-white text-center"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $signinTotal > 0 ? ($signinDone / $signinTotal) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $signinTotal > 0 ? ($signinDone / $signinTotal) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($signinTotal > 0 ? ($signinDone / $signinTotal) * 100 : 0, 1) }}%
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td>{{ $signinDone }}</td>
                                                                                    <td>{{ $signinTotal - $signinDone }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#signinsection__1{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Home Page Guest section</td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success text-white text-center"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $guestFieldsTotal > 0 ? ($guestDone / $guestFieldsTotal) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $guestFieldsTotal > 0 ? ($guestDone / $guestFieldsTotal) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($guestFieldsTotal > 0 ? ($guestDone / $guestFieldsTotal) * 100 : 0, 1) }}%
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td>{{ $guestDone }}</td>
                                                                                    <td>{{ $guestFieldsTotal - $guestDone }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#signinsection__234{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="tab-pane fade" id="pills-settings{{ $language->id }}"
                                                                role="tabpanel" aria-labelledby="pills-settings-tab{{ $language->id }}">
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
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Setting Overview Section</td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $settingoverviewTotal > 0 ? ($settingoverviewDone / $settingoverviewTotal) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $settingoverviewTotal > 0 ? ($settingoverviewDone / $settingoverviewTotal) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($settingoverviewTotal > 0 ? ($settingoverviewDone / $settingoverviewTotal) * 100 : 0, 1) }}%

                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{ $settingoverviewDone }}</td>
                                                                                    <td>{{ $settingoverviewTotal - $settingoverviewDone }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#settingoverview{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Setting Section</td>
                                                                                    <td>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar bg-success text-white text-center"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $settingSectionTotal > 0 ? ($settingSectionDone / $settingSectionTotal) * 100 : 0 }}%;"
                                                                                                aria-valuenow="{{ $settingSectionTotal > 0 ? ($settingSectionDone / $settingSectionTotal) * 100 : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                                {{ round($settingSectionTotal > 0 ? ($settingSectionDone / $settingSectionTotal) * 100 : 0, 1) }}%
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td>{{ $settingSectionDone }}</td>
                                                                                    <td>{{ $settingSectionTotal - $settingSectionDone }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <span data-bs-toggle="modal"
                                                                                            data-bs-target="#settingsectionsok{{ $language->id }}"
                                                                                            onclick="openSectionModal('alert')">
                                                                                            <button class="btn"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-offset="0,4"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-html="true"
                                                                                                data-bs-original-title="Edit">
                                                                                                <i class="bx bx-edit"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                                   
                                                                        <tr>
                                                                            <td>My Profile  Section</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-success text-white text-center"
                                                                                        role="progressbar"
                                                                                        style="width: {{ $myProfileHomeTotal > 0 ? ($myProfileHomeDone / $myProfileHomeTotal) * 100 : 0 }}%;"
                                                                                        aria-valuenow="{{ $myProfileHomeTotal > 0 ? ($myProfileHomeDone / $myProfileHomeTotal) * 100 : 0 }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100">
                                                                                        {{ round($myProfileHomeTotal > 0 ? ($myProfileHomeDone / $myProfileHomeTotal) * 100 : 0, 1) }}%
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>{{ $myProfileHomeDone }}</td>
                                                                            <td>{{ $myProfileHomeTotal - $myProfileHomeDone }}
                                                                            </td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#myprofilesection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
 

                                                     

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-label-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>




                                        {{-- Edit language model __1 --}}


                                        <div class="modal fade" id="languageModal__1{{ $language->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Home page
                                                            Landing
                                                            Page
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('languages.keywordstore') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="language_id"
                                                                value="{{ $language->id }}">
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
            'Advertisement' => 'Advertisement',
            'Latest_feeds' => 'Latest feeds',
            'Latest_artist' => 'Latest artist',
            'See_All' => 'See All',
            'New_albums' => 'New albums',
            'New_albums' => 'Latest stories',
            'Wishes_thanks' => 'Wishes & thanks',
            'e_commerce' => 'E-commerce',
            'Service' => 'Service',
            'Food_delivery' => 'Food delivery',
            'Restaurant' => 'Restaurant',
        ] as $field => $placeholder)
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-6">
                                                                            <h6>{{ ucfirst(str_replace('_', ' ', $field)) }}
                                                                            </h6>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control"
                                                                                name="{{ $field }}"
                                                                                placeholder="{{ $placeholder }}"
                                                                                value="{{ $keywords->$field ?? '' }}">
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-label-secondary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>








                                        {{-- //Sign up Section --}}
                                        @php
                                            // Retrieve the existing SignupSection data for the given language_id
                                            $signupsection = App\Models\SignupSection::where(
                                                'language_id',
                                                $language->id,
                                            )->first();
                                        @endphp


                                        <div class="modal fade" id="signupsection__1{{ $language->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Sign up Section
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('languages.signupsection') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="language_id"
                                                                value="{{ $language->id }}">

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
                                                                        <input type="text" class="form-control"
                                                                            name="language_search"
                                                                            value="{{ $signupsection->language_search ?? '' }}"
                                                                            placeholder="Search">
                                                                    </div>
                                                                </div>

                                                                <!-- Select Gender -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Select Gender</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="gender"
                                                                            value="{{ $signupsection->gender ?? '' }}"
                                                                            placeholder="select gender">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Male</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="male"
                                                                            value="{{ $signupsection->male ?? '' }}"
                                                                            placeholder="male">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>FeMale</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="female"
                                                                            value="{{ $signupsection->female ?? '' }}"
                                                                            placeholder="female">
                                                                    </div>
                                                                </div>

                                                                <!-- Select Location -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Select Location</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="location"
                                                                            value="{{ $signupsection->location ?? '' }}"
                                                                            placeholder="Search">
                                                                    </div>
                                                                </div>

                                                                <!-- Firstname -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Firstname</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="firstname"
                                                                            value="{{ $signupsection->firstname ?? '' }}"
                                                                            placeholder="Your Firstname">
                                                                    </div>
                                                                </div>

                                                                <!-- Lastname -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Lastname</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="lastname"
                                                                            value="{{ $signupsection->lastname ?? '' }}"
                                                                            placeholder="Your Lastname">
                                                                    </div>
                                                                </div>

                                                                <!-- Username -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Username</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="username"
                                                                            value="{{ $signupsection->username ?? '' }}"
                                                                            placeholder="Your Username">
                                                                    </div>
                                                                </div>



                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your First name</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_first_name"
                                                                            value="{{ $signupsection->your_first_name ?? '' }}"
                                                                            placeholder="your_first_name">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Last name</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_last_name"
                                                                            value="{{ $signupsection->your_last_name ?? '' }}"
                                                                            placeholder="your_last_name">
                                                                    </div>
                                                                </div>

                                                                <!-- Birthday and Status -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Birthday</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="birthday"
                                                                            value="{{ $signupsection->birthday ?? '' }}"
                                                                            placeholder="Your Birthday">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Status</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_status"
                                                                            value="{{ $signupsection->your_status ?? '' }}"
                                                                            placeholder="Your Status">
                                                                    </div>
                                                                </div>

                                                                <!-- Select Origin -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Origin</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="origin"
                                                                            value="{{ $signupsection->origin ?? '' }}"
                                                                            placeholder="Select origin">
                                                                    </div>
                                                                </div>

                                                                <!-- Province -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Province</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="select_province"
                                                                            value="{{ $signupsection->select_province ?? '' }}"
                                                                            placeholder="Select your Province">
                                                                    </div>
                                                                </div>

                                                                <!-- E-Mail Address -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your E-Mail Address</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_email"
                                                                            value="{{ $signupsection->your_email ?? '' }}"
                                                                            placeholder="Type your your_email">
                                                                    </div>
                                                                </div>

                                                                <!-- Repeat your E-Mail -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Repeat your E-Mail</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="repeat_email"
                                                                            value="{{ $signupsection->repeat_email ?? '' }}"
                                                                            placeholder="Repeat your E-Mail">
                                                                    </div>
                                                                </div>

                                                                <!-- E-Mail issue Message -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>E-Mail issue Message</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="email_issue_message"
                                                                            value="{{ $signupsection->email_issue_message ?? '' }}"
                                                                            placeholder="E-Mail issue Message">
                                                                    </div>
                                                                </div>

                                                                <!-- Error Found -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Error Found</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="error_found"
                                                                            value="{{ $signupsection->error_found ?? '' }}"
                                                                            placeholder="Error found">
                                                                    </div>
                                                                </div>

                                                                <!-- User already exist -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>User already exist</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="user_already_exist"
                                                                            value="{{ $signupsection->user_already_exist ?? '' }}"
                                                                            placeholder="User already exist">
                                                                    </div>
                                                                </div>

                                                                <!-- Phone Number -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Phone Number</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_phone_number"
                                                                            value="{{ $signupsection->your_phone_number ?? '' }}"
                                                                            placeholder="Your Phone Number">
                                                                    </div>
                                                                </div>

                                                                <!-- Create Password -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Create Password</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="create_password"
                                                                            value="{{ $signupsection->create_password ?? '' }}"
                                                                            placeholder="create_password">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Repeat a Password</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="repeat_password"
                                                                            value="{{ $signupsection->password ?? '' }}"
                                                                            placeholder="Repeat a Password">
                                                                    </div>
                                                                </div>

                                                                <!-- Account Created -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Account Created!</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="account_created_success_message"
                                                                            value="{{ $signupsection->account_created_success_message ?? '' }}"
                                                                            placeholder="Your account has been created, successfully. Please sign in to use your account, and enjoy">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Sign In Redirect</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="sign_in_redirect"
                                                                            value="{{ $signupsection->sign_in_redirect ?? '' }}"
                                                                            placeholder="Take me to sign in">
                                                                    </div>
                                                                </div>



                                                                {{-- Nationality --}}

                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Nationality</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="nationality" placeholder="nationality"
                                                                            value="{{ $signupsection->nationality ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Select Your Nationality</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="select_nationality"
                                                                            placeholder="select_nationality"
                                                                            value="{{ $signupsection->select_nationality ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Information</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="information" placeholder="information"
                                                                            value="{{ $signupsection->information ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Information Description</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="information_description"
                                                                            placeholder="information_description"
                                                                            value="{{ $signupsection->information_description ?? '' }}">
                                                                    </div>
                                                                </div>

                                                                {{-- Verifiy device --}}

                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Setup New device</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="setup_new_device"
                                                                            placeholder="setup_new_device"
                                                                            value="{{ $signupsection->setup_new_device ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Start Now</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="start_now" placeholder="start_now"
                                                                            value="{{ $signupsection->start_now ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Your New Devices</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_new_devices"
                                                                            placeholder="start_now"
                                                                            value="{{ $signupsection->start_now ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Old Device</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="old_devices" placeholder="old_devices"
                                                                            value="{{ $signupsection->old_devices ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Verify now</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="verify_now" placeholder="verify_now"
                                                                            value="{{ $signupsection->verify_now ?? '' }}">
                                                                    </div>
                                                                </div>



                                                                {{-- //Button --}}
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Next Button</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="next_button" placeholder="next_button"
                                                                            value="{{ $signupsection->next_button ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Back Button</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="back_button" placeholder="back_button"
                                                                            value="{{ $signupsection->back_button ?? '' }}">
                                                                    </div>
                                                                </div>



                                                            </div> <!-- End of container -->

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-label-secondary"
                                                                    data-bs-dismiss="modal">Save</button>
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
                                        @include('guestsection', ['language' => $language])
                                        @include('footerchatsection', ['language' => $language])
                                        @include('homepagelanguage', ['language' => $language])
                                        @include('app_policy', ['language' => $language])
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
                                        @include('startpage', ['language' => $language])
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
