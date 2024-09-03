@extends('layouts/layoutMaster')

@section('title', 'Settings - User Roles - ' . ucfirst($userLevel) . ' User')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/userrole/css/style.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/toastr/toastr.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}"  />
<style>
    .nav-tabs .nav-item .nav-link {
        padding: 1rem;
    }
</style>
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Settings /</span>
        {{-- <span class="text-muted fw-light">User Roles /</span> --}}
        {{ ucfirst($userLevel) == 'Standard' ? 'Educated' : (ucfirst($userLevel) == 'Premium' ? 'Cultivated' : 'Academic') }} User
    </h4>
</div>
<ul class="nav nav-tabs nav-fill" role="tablist">
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link justify-content-start nav-text-left {{ ucfirst($userLevel) == 'Standard' ? 'active' : '' }}" href="{{url('settings/user-roles/standard')}}" aria-selected="{{ ucfirst($userLevel) == 'Standard' ? 'true' : 'false' }}" tabindex="-1">
        <div class="d-flex justify-content-start align-items-center">
            <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/educated.svg')}}"
                        alt="Avatar"></div>
            </div>
            <div class="d-flex flex-column genos-font">
                <span class="fw-semibold">Educated</span>
                <small class="text-muted">Standard User</small>
            </div>
        </div>
    </a>
    <div class="{{ ucfirst($userLevel) == 'Standard' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link justify-content-start nav-text-left {{ ucfirst($userLevel) == 'Premium' ? 'active' : '' }}" href="{{url('settings/user-roles/premium')}}" aria-selected="{{ ucfirst($userLevel) == 'Premium' ? 'true' : 'false' }}" tabindex="-1">
        <div class="d-flex justify-content-start align-items-center">
            <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/cultivated.svg')}}"
                        alt="Avatar"></div>
            </div>
            <div class="d-flex flex-column genos-font">
                <span class="fw-semibold">Cultivated</span>
                <small class="text-muted">Premium User</small>
            </div>
        </div>
    </a>
    <div class="{{ ucfirst($userLevel) == 'Premium' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link justify-content-start nav-text-left {{ ucfirst($userLevel) == 'Vip' ? 'active' : '' }}" href="{{url('settings/user-roles/vip')}}" aria-selected="{{ ucfirst($userLevel) == 'Vip' ? 'true' : 'false' }}" tabindex="-1">
        <div class="d-flex justify-content-start align-items-center">
            <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/academic.svg')}}"
                        alt="Avatar"></div>
            </div>
            <div class="d-flex flex-column genos-font">
                <span class="fw-semibold">Academic</span>
                <small class="text-muted">VIP-User</small>
            </div>
        </div>
    </a>
    <div class="{{ ucfirst($userLevel) == 'Vip' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
</ul>
<div class="nav-align-left mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">General</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#avatar" aria-controls="avatar">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/usercircle.svg')}}"
                                alt="avatar"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Avatar</span>
                        <small class="text-muted">Avatar Type</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade active show" id="avatar" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/usercircle.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Avatar</span>
                            <small class="text-muted">Avatar Pic options</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div>
                        <div class="d-flex flex-column genos-font text-center">
                            <span class="fw-semibold">Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Price" aria-controls="Price">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/euro.svg')}}"
                                alt="Price"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Price</span>
                        <small class="text-muted">Setup the Price</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Price" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center pb-2">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/euro.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Price</span>
                            <small class="text-muted">Price for each</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/educated.svg')}}"
                                        alt="educated"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">{{ ucfirst($userLevel) == 'Standard' ? 'Educated' : (ucfirst($userLevel) == 'Premium' ? 'Cultivated' : 'Academic') }} User</span>
                                <small class="text-muted">{{ ucfirst($userLevel) }} User</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>Price</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>€ $</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Friends" aria-controls="Friends">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/friends.svg')}}"
                                alt="Friends"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Friends</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Friends" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/friends.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Friends</span>
                            <small class="text-muted">Manage Friends</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Friend Request</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" data-permission="friends_allow_request">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Total Friends</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="friends_total_friends"></i>
                                <span>{{$permissions["value"]['friends_total_friends']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="friends_total_friends"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Total Family</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="friends_total_family"></i>
                                <span>{{$permissions["value"]['friends_total_family']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="friends_total_family"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Storage" aria-controls="Storage">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/storage.svg')}}"
                                alt="Storage"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Storage</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Storage" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/storage.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Storage</span>
                            <small class="text-muted">Manage Storage</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group p-0">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <object data="https://servicebieter.de/svgs/standarduser.svg" width="30" height="30" class="mt-1 mx-2"> 								</object>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Educated User</h6>
                                    <small class="text-muted">The Total Storage Amount that allowed for Standard Users</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['storage_allow_total'] ? 'checked' : ''}} data-permission="storage_allow_total">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Storage size</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips1" start-value="{{$permissions['value']['storage_total_amount']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="MB" value="{{$permissions['value']['storage_total_amount']}} MB" disabled id="slider-pips1-input" data-permission="storage_total_amount" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0">
                        <div class="p-2 rounded mb-2" style="background-color:#FEE9EA">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/storagealert.svg')}}"
                                        alt="storageAlert"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Storage alert</h6>
                                    <small class="text-muted">User will get alert on the App once the Storage Amount is less then set it %</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['storage_alert'] ? 'checked' : ''}} data-permission="storage_alert">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>

                            </div>

                            <p class="text-muted mx-2">Storage Size</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips2" start-value="{{$permissions['value']['storage_alert_amount']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="%" value="{{$permissions['value']['storage_alert_amount']}} %" disabled id="slider-pips2-input" data-permission="storage_alert_amount" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">Sharing</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#feed" aria-controls="feed">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feed.svg')}}"
                                alt="feed"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Feed Section</span>
                        <small class="text-muted">Manage Feeds</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="feed" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feed.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Feed Section</span>
                            <small class="text-muted">Manage Feeds</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Feeds</span>
                                <small class="text-muted">Allow User to Share Feeds</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_allow_feeds'] ? 'checked' : ''}} data-permission="feed_allow_feeds">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feedoption.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Feed Option</span>
                                <small class="text-muted">Feed Options, Report , view later</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_options'] ? 'checked' : ''}} data-permission="feed_options">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/videocam.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Video Cam</span>
                                <small class="text-muted">Allow User to Take Images “use Cam” to share Feeds</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_video_cam'] ? 'checked' : ''}} data-permission="feed_video_cam">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/shareimage.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Images</span>
                                <small class="text-muted">Allow User to share Images in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_share_images'] ? 'checked' : ''}} data-permission="feed_share_images">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_text_comments'] ? 'checked' : ''}} data-permission="feed_text_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_like_button'] ? 'checked' : ''}} data-permission="feed_like_button">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_share_comments'] ? 'checked' : ''}} data-permission="feed_share_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_voice_comments'] ? 'checked' : ''}} data-permission="feed_voice_comments">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips3" start-value="{{$permissions['value']['feed_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['feed_voice_record_time']}} Sec" disabled id="slider-pips3-input" data-permission="feed_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/sharevideo.svg')}}"
                                        alt="shareVideo"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Share Videos</h6>
                                    <small class="text-muted">Allow User to share Videos </small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['feed_share_videos'] ? 'checked' : ''}} data-permission="feed_share_videos">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Video Size</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips4" start-value="{{$permissions['value']['feed_share_video_amount']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="MB" value="{{$permissions['value']['feed_share_video_amount']}} MB" disabled id="slider-pips4-input" data-permission="feed_share_video_amount" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Wishes" aria-controls="Wishes">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/wishes.svg')}}"
                                alt="Wishes"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Wishes</span>
                        <small class="text-muted">Wishes  & Thanks</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Wishes" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feed.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Wishes & Thanks</span>
                            <small class="text-muted">Permission to Create Wishes & Thanks</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Wishes & Thanks</span>
                                <small class="text-muted">Allow User to create Cards</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['wishes_allow_wishes'] ? 'checked' : ''}} data-permission="wishes_allow_wishes">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/dailyshare.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Daily Share</span>
                                <small class="text-muted">Max. Creation Per Day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="wishes_daily_share"></i>
                                <span>{{$permissions["value"]['wishes_daily_share']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="wishes_daily_share"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['wishes_text_comments'] ? 'checked' : ''}} data-permission="wishes_text_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['wishes_like_button'] ? 'checked' : ''}} data-permission="wishes_like_button">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['wishes_share_comments'] ? 'checked' : ''}} data-permission="wishes_share_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['wishes_voice_comments'] ? 'checked' : ''}} data-permission="wishes_voice_comments">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips5" start-value="{{$permissions['value']['wishes_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['wishes_voice_record_time']}} Sec" disabled id="slider-pips5-input" data-permission="wishes_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#historySection" aria-controls="historySection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/historysection.svg')}}"
                                alt="historySection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">History Section</span>
                        <small class="text-muted">Manage History</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="historySection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/historysection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">History Section</span>
                            <small class="text-muted">User Permission</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">History Section</span>
                                <small class="text-muted">User Allowed to Comment</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['history_allow_history'] ? 'checked' : ''}} data-permission="history_allow_history">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Videos Per day</span>
                                <small class="text-muted">Allowed Watch Videos per day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="history_daily_share"></i>
                                <span>{{$permissions["value"]['history_daily_share']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="history_daily_share"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['history_text_comments'] ? 'checked' : ''}} data-permission="history_text_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['history_like_button'] ? 'checked' : ''}} data-permission="history_like_button">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['history_share_comments'] ? 'checked' : ''}} data-permission="history_share_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['history_voice_comments'] ? 'checked' : ''}} data-permission="history_voice_comments">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips6" start-value="{{$permissions['value']['history_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['history_voice_record_time']}} Sec" disabled id="slider-pips6-input" data-permission="history_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#voteSection" aria-controls="voteSection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/votesection.svg')}}"
                                alt="voteSection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Vote Section</span>
                        <small class="text-muted">Manage Vote</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="voteSection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/votesection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Vote Section</span>
                            <small class="text-muted">Permission to Vote</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Vote Section</span>
                                <small class="text-muted">User Allowed to Vote</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['vote_allow_vote'] ? 'checked' : ''}} data-permission="vote_allow_vote">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">Multimedia</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#musicSection" aria-controls="musicSection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/musicsection.svg')}}"
                                alt="musicSection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Music Section</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="musicSection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/musicsection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Music Section</span>
                            <small class="text-muted">Permission to Vote</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Enjoy Music</span>
                                <small class="text-muted">Allow User to use Music Module</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" data-permission="music_allow_music">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Songs</span>
                                <small class="text-muted">Allowed User to Share songs</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['music_share_songs'] ? 'checked' : ''}} data-permission="music_share_songs">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Playlist</span>
                                <small class="text-muted">Allowed User to Create Playlist</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" data-permission="music_create_playlist">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Alowed Playlist</span>
                                <small class="text-muted">Allowed of Playlist Amounts for free</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="music_allowed_playlist"></i>
                                <span>{{$permissions["value"]['music_allowed_playlist']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="music_allowed_playlist"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Buy Songs</span>
                                <small class="text-muted">Allowed User to Share songs</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['music_buy_songs'] ? 'checked' : ''}} data-permission="music_buy_songs">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Songs Per day</span>
                                <small class="text-muted">Allowed Songs to listen per day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="music_daily_songs"></i>
                                <span>{{$permissions["value"]['music_daily_songs']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="music_daily_songs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Favorite Songs</span>
                                <small class="text-muted">Add Tracks to Favorite</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['music_favorite_songs'] ? 'checked' : ''}} data-permission="music_favorite_songs">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Favorite Artist</span>
                                <small class="text-muted">Add Tracks to Favorite</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['music_favorite_artist'] ? 'checked' : ''}} data-permission="music_favorite_artist">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Playlist Price</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="music_playlist_price_amount"></i>
                                <span>{{$permissions["value"]['music_playlist_price_amount']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="music_playlist_price_amount"></i>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>€ $</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#videoSection" aria-controls="videoSection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/videosection.svg')}}"
                                alt="videoSection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Video section</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="videoSection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/videosection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Video Section</span>
                            <small class="text-muted">Allowed Permissions for Videos</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Enjoy Videos</span>
                                <small class="text-muted">Allow User to use Video Module</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['video_allow_video'] ? 'checked' : ''}} data-permission="video_allow_video">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Video Playlist</span>
                                <small class="text-muted">Allowed User to Create Playlist</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['video_create_playlist'] ? 'checked' : ''}} data-permission="video_create_playlist">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Alowed Video Playlist</span>
                                <small class="text-muted">Allowed of Playlist Amounts for free</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="video_allowed_playlist"></i>
                                <span>{{$permissions["value"]['video_allowed_playlist']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="video_allowed_playlist"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Videos Per day</span>
                                <small class="text-muted">Allowed Watch Videos per day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="video_daily_videos"></i>
                                <span>{{$permissions["value"]['video_daily_videos']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="video_daily_videos"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Playlist Price</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="video_playlist_price_amount"></i>
                                <span>{{$permissions["value"]['video_playlist_price_amount']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="video_playlist_price_amount"></i>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>€ $</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['video_text_comments'] ? 'checked' : ''}} data-permission="video_text_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['video_like_button'] ? 'checked' : ''}} data-permission="video_like_button">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['video_share_comments'] ? 'checked' : ''}} data-permission="video_share_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['video_voice_comments'] ? 'checked' : ''}} data-permission="video_voice_comments">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips7" start-value="{{$permissions['value']['video_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['video_voice_record_time']}} Sec" disabled id="slider-pips7-input" data-permission="video_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#liveStream" aria-controls="liveStream">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/livestream.svg')}}"
                                alt="liveStream"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Live Stream</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="liveStream" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/livestream.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Live Stream</span>
                            <small class="text-muted">Allow User to Go Live</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Live Stream</span>
                                <small class="text-muted">Allow User to use Live Stream Module </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveStream_allow_liveStream'] ? 'checked' : ''}} data-permission="liveStream_allow_liveStream">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/livestream.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Live Stream</h6>
                                    <small class="text-muted">Set the Live Stream Time</small>
                                </div>
                                <div class="col-2 text-end mt-1">

                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips8" start-value="{{$permissions['value']['liveStream_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="min" value="{{$permissions['value']['liveStream_record_time']}} min" disabled id="slider-pips8-input" data-permission="liveStream_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Invent Friends</span>
                                <small class="text-muted">Allow User Invent Friends “Invent Amount required”</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveStream_invent_friends'] ? 'checked' : ''}} data-permission="liveStream_invent_friends">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="liveStream_invent_friends_amount"></i>
                                <span>{{$permissions["value"]['liveStream_invent_friends_amount']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="liveStream_invent_friends_amount"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Invent Family</span>
                                <small class="text-muted">Allow User Invent Friends “Invent Amount required”</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveStream_invent_family'] ? 'checked' : ''}} data-permission="liveStream_invent_family">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="liveStream_invent_family_amount"></i>
                                <span>{{$permissions["value"]['liveStream_invent_family_amount']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="liveStream_invent_family_amount"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveStream_text_comments'] ? 'checked' : ''}} data-permission="liveStream_text_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveStream_like_button'] ? 'checked' : ''}} data-permission="liveStream_like_button">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveStream_share_comments'] ? 'checked' : ''}} data-permission="liveStream_share_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['liveStream_voice_comments'] ? 'checked' : ''}} data-permission="liveStream_voice_comments">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips9" start-value="{{$permissions['value']['liveStream_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['liveStream_voice_record_time']}} Sec" disabled id="slider-pips9-input" data-permission="liveStream_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#interview" aria-controls="interview">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/interview.svg')}}"
                                alt="interview"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Interviews</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="interview" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/interview.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Interviews</span>
                            <small class="text-muted">Allow User to create Interviews</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Interviews</span>
                                <small class="text-muted">Allow User to use Interview Module</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['interviews_allow_interviews'] ? 'checked' : ''}} data-permission="interviews_allow_interviews">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/interview.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Interviews</h6>
                                    <small class="text-muted">Interview Duration</small>
                                </div>
                                <div class="col-2 text-end mt-1">

                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips10" start-value="{{$permissions['value']['interviews_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="min" value="{{$permissions['value']['interviews_record_time']}} min" disabled id="slider-pips10-input" data-permission="interviews_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Interviewers</span>
                                <small class="text-muted">Set the Amount of Intviewer “Max 3 Interview are alowed”</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="interviews_allowed_friends"></i>
                                <span>{{$permissions["value"]['interviews_allowed_friends']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="interviews_allowed_friends"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['interviews_text_comments'] ? 'checked' : ''}} data-permission="interviews_text_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['interviews_like_button'] ? 'checked' : ''}} data-permission="interviews_like_button">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['interviews_share_comments'] ? 'checked' : ''}} data-permission="interviews_share_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['interviews_voice_comments'] ? 'checked' : ''}} data-permission="interviews_voice_comments">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips11" start-value="{{$permissions['value']['interviews_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['interviews_voice_record_time']}} Sec" disabled id="slider-pips11-input" data-permission="interviews_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#channels" aria-controls="channels">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/channels.svg')}}"
                                alt="channels"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Channels</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="channels" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/channels.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Live Channels</span>
                            <small class="text-muted">Create Live Channels </small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Live Channels</span>
                                <small class="text-muted">Allow User to create owen Live Channels</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveChannels_allow_liveChannels'] ? 'checked' : ''}} data-permission="liveChannels_allow_liveChannels">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Live Channels</span>
                                <small class="text-muted">Set the Amount of Live Channel that User allowed to create Max. 2</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="liveChannels_allowed_friends"></i>
                                <span>{{$permissions["value"]['liveChannels_allowed_friends']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="liveChannels_allowed_friends"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveChannels_text_comments'] ? 'checked' : ''}} data-permission="liveChannels_text_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveChannels_like_button'] ? 'checked' : ''}} data-permission="liveChannels_like_button">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['liveChannels_share_comments'] ? 'checked' : ''}} data-permission="liveChannels_share_comments">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['liveChannels_voice_comments'] ? 'checked' : ''}} data-permission="liveChannels_voice_comments">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips12" start-value="{{$permissions['value']['liveChannels_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['liveChannels_voice_record_time']}} Sec" disabled id="slider-pips12-input" data-permission="liveChannels_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">Communications</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#chat" aria-controls="chat">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/chat.svg')}}"
                                alt="chat"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Chat</span>
                        <small class="text-muted">Chat & Groups</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="chat" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/chat.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Communications</span>
                            <small class="text-muted">Chat & Groups, Calls</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Chat</span>
                                <small class="text-muted">Allow User to Communicate with other Users </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_allow_chat'] ? 'checked' : ''}} data-permission="chat_allow_chat">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Messages</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_voice_messages'] ? 'checked' : ''}} data-permission="chat_voice_messages">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Recording Time</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips13" start-value="{{$permissions['value']['chat_voice_record_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['chat_voice_record_time']}} Sec" disabled id="slider-pips13-input" data-permission="chat_voice_record_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Message</span>
                                <small class="text-muted">Allow User to </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_text_message'] ? 'checked' : ''}} data-permission="chat_text_message">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Files</span>
                                <small class="text-muted">Allow User to share Files “PDF. JPG, PNG” </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_share_files'] ? 'checked' : ''}} data-permission="chat_share_files">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Loaction</span>
                                <small class="text-muted">Allow User to share Location </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_share_location'] ? 'checked' : ''}} data-permission="chat_share_location">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Groups</span>
                                <small class="text-muted">Allow Userto Create Groups</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_create_groups_allow'] ? 'checked' : ''}} data-permission="chat_create_groups_allow">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs down-icon" data-permission="chat_create_groups_amount"></i>
                                <span>{{$permissions["value"]['chat_create_groups_amount']}}</span>
                                <i class="bx bx-chevron-up bx-xs up-icon" data-permission="chat_create_groups_amount"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Join to Group</span>
                                <small class="text-muted">Allow User to join to group</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_join_group'] ? 'checked' : ''}} data-permission="chat_join_group">
                                  <span class="switch-toggle-slider">

                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Calls</h6>
                                    <small class="text-muted">Allow User to create Voice Calls</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_voice_calls'] ? 'checked' : ''}} data-permission="chat_voice_calls">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/groupcalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Group Calls</h6>
                                    <small class="text-muted">Allow User to add Caller to group</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_voice_group_calls'] ? 'checked' : ''}} data-permission="chat_voice_group_calls">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/jointocalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Join to Call</h6>
                                    <small class="text-muted">Allow User to join to Call</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_voice_join_call'] ? 'checked' : ''}} data-permission="chat_voice_join_call">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Call Durations</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips14" start-value="{{$permissions['value']['chat_voice_call_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['chat_voice_call_time']}} Sec" disabled id="slider-pips14-input" data-permission="chat_voice_call_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/videocalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Video Calls</h6>
                                    <small class="text-muted">Allow User to create Video Calls</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_video_calls'] ? 'checked' : ''}} data-permission="chat_video_calls">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/videogroupcalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Group Calls</h6>
                                    <small class="text-muted">Allow User to add Video Caller to group</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_video_group_calls'] ? 'checked' : ''}} data-permission="chat_video_group_calls">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/jointocalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Join to Call</h6>
                                    <small class="text-muted">Allow User to join to Call</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" {{$permissions["value"]['chat_video_join_call'] ? 'checked' : ''}} data-permission="chat_video_join_call">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <p class="text-muted mx-2">Call Durations</p>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips15" start-value="{{$permissions['value']['chat_video_call_time']}}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="{{$permissions['value']['chat_video_call_time']}} Sec" disabled id="slider-pips15-input" data-permission="chat_video_call_time" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </ul>
    <div class="tab-content">
        @yield('tab-page')
    </div>
</div>

@section('page-script')
<script>
    function confirmSettingUpdate(event) {
        event.preventDefault();
        const self = event.target;

        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to " + (self.checked? 'activate': 'disable') + " this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, ' + (self.checked? 'activate': 'disable') + ' it!',
            customClass: {
                confirmButton: 'btn btn-danger me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                self.setAttribute('onclick', 'updateSetting(event)');
                self.click();
                self.setAttribute('onclick', 'confirmSettingUpdate(event)');
            }
        });
    }

    function updateSettings(event) {
        const self = event.target;
        const userLevel = '{{ $userLevel }}';
        const form = self.closest('form');
        const settingInputs = form.querySelectorAll('[data-setting]');
        const settings = [];
        settingInputs.forEach(input => {
            settings.push({
                name: input.name,
                value: input.value
            });
        });

        $.ajax({
            url: '{{ route('settings.saveMany') }}',
            method: 'POST',
            data: {settings},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                toastr.success("Settings successfully updated.");
            }
        });
    }

    function updatePermission(key, newValue, valueType) {
        $.ajax({
            url: '{{ route("settings.user-roles.update.permissions") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                key: key,
                value: newValue,
                userLevel: '{{ $userLevel }}',
                valueType: valueType
            },
            success: function(response) {
                console.log('Permission updated successfully');
            },
            error: function(error) {
                console.error('Error updating permission', error);
            }
        });
    }


    document.addEventListener('DOMContentLoaded', function() {
        var sliders = $('.slider');
        var slider = [15];
        var sliderPipsInput = [15];
        for ( var i = 1; i < 16; i++ ) {
            const element = document.getElementById('slider-pips'+i);
            slider[i] = noUiSlider.create(element, {
                range: {
                    'min': [   0 ],
                    '10%': [  10 ],
                    '20%': [  20 ],
                    '30%': [  30 ],
                    '40%': [  40 ],
                    '50%': [  50 ],
                    '60%': [  60 ],
                    '70%': [  70 ],
                    '80%': [  80 ],
                    '90%': [  90 ],
                    'max': [ 100 ],
                },
                start: element.getAttribute('start-value'),
                step: 1,
                pips: {
                    mode: 'range',
                    density: 5
                },
                tooltips: true,
            });
            sliderPipsInput[i]=document.getElementById("slider-pips"+i+"-input");
            (function(currentIndex) {
                slider[currentIndex].on('change', function(values, handle) {
                    sliderPipsInput[currentIndex].value = values[handle] + " " + sliderPipsInput[currentIndex].getAttribute('unit');
                    updatePermission(sliderPipsInput[currentIndex].getAttribute('data-permission'), values[handle], 'float');
                });
            })(i);
        }
    })

    $(document).ready(function() {

        $(document).on('change', '.switch-input', function() {
            var $input = $(this);
            var permissionKey = $input.data('permission');
            var isChecked = $input.is(':checked');
            updatePermission(permissionKey, isChecked, 'boolean');
        });

        $('.down-icon').on('click', function() {
            var $counterSpan = $(this).next('span'); // Find the span
            var currentValue = parseInt($counterSpan.text(), 10); // Current value
            var newValue = Math.max(currentValue - 1, 0); // Decrement, with limit 0
            $counterSpan.text(newValue); // Update the span
            console.log(newValue);

            // Call the API to update MongoDB
            updatePermission($(this).data('permission'), newValue, 'int'); // Use appropriate key
        });

        $('.up-icon').on('click', function() {
            var $counterSpan = $(this).prev('span'); // Find the span
            var currentValue = parseInt($counterSpan.text(), 10); // Current value
            var newValue = currentValue + 1; // Increment by 1
            $counterSpan.text(newValue); // Update the span
            console.log(newValue);

            // Call the API to update MongoDB
            updatePermission($(this).data('permission'), newValue, 'int'); // Use appropriate key
        });

    });
</script>

@endsection
@endsection
