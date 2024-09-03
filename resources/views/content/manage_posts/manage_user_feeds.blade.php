@extends('layouts/layoutMaster')

@section('title', 'Notes')

@section('page-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
<style>
    .custom-option-icon .form-check-input {
        background-color: transparent !important;
        border: none !important;
    }

    .form-check-input:checked,
    .form-check-input[type=checkbox] {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
        background-image: none !important;
    }

    .dropdown.is-right .dropdown-menu {
        left: 56px;
        right: auto;
        padding: 0;
        top: -22px;
    }

    .dropdown-item h6,
    .h6,
    h5,
    .h5,
    h4,
    .h4,
    h3,
    .h3,
    h2,
    .h2,
    h1,
    .h1 {
        margin-bottom: 0 !important;
    }

    .card.is-post .user-block img,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .user-block img {
        width: 42px;
        height: 42px;
        border-radius: 0% !important;
    }

    .card.is-post .content-wrap .post-image img,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .post-image img {
        display: block;
        border-radius: 5px;
    }

    .card.is-post .content-wrap .card-footer .social-count .shares-count span,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .card-footer .social-count .shares-count span,
    .card.is-post .content-wrap .card-footer .social-count .comments-count span,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .card-footer .social-count .comments-count span,
    .card.is-post .content-wrap .card-footer .social-count .likes-count span,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .card-footer .social-count .likes-count span {
        display: block;
        font-size: 18px !important;
        color: #888da8;
        margin: 0 5px;
    }

    #tab2,
    #tab3 {
        display: none;
    }
</style>
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/friendkit/css/app.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/friendkit/css/core.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('vendor-script')
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<!-- Concatenated js plugins and jQuery -->
<script src="{{asset('assets/friendkit/js/app.js')}}"></script>

<!-- Core js -->
<script src="{{asset('assets/friendkit/js/global.js')}}"></script>

<!-- Navigation options js -->
<script src="{{asset('assets/friendkit/js/navbar-v1.js')}}"></script>
<script src="{{asset('assets/friendkit/js/navbar-v2.js')}}"></script>
<script src="{{asset('assets/friendkit/js/navbar-mobile.js')}}"></script>
<script src="{{asset('assets/friendkit/js/navbar-options.js')}}"></script>
<script src="{{asset('assets/friendkit/js/sidebar-v1.js')}}"></script>

<!-- Core instance js -->
<script src="{{asset('assets/friendkit/js/main.js')}}"></script>
<script src="{{asset('assets/friendkit/js/chat.js')}}"></script>
<script src="{{asset('assets/friendkit/js/touch.js')}}"></script>
<script src="{{asset('assets/friendkit/js/tour.js')}}"></script>

<!-- Components js -->
<script src="{{asset('assets/friendkit/js/explorer.js')}}"></script>
<script src="{{asset('assets/friendkit/js/widgets.js')}}"></script>
<script src="{{asset('assets/friendkit/js/modal-uploader.js')}}"></script>
<script src="{{asset('assets/friendkit/js/popovers-users.js')}}"></script>
<script src="{{asset('assets/friendkit/js/popovers-pages.js')}}"></script>
<script src="{{asset('assets/friendkit/js/lightbox.js')}}"></script>

<!-- Landing page js -->

<!-- Signup page js -->

<!-- Feed pages js -->
<script src="{{asset('assets/friendkit/js/feed.js')}}"></script>

<script src="{{asset('assets/friendkit/js/webcam.js')}}"></script>
<script src="{{asset('assets/friendkit/js/compose.js')}}"></script>
<script src="{{asset('assets/friendkit/js/autocompletes.js')}}"></script>
@endsection

@section('content')

<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="view-wrapper">
            <div id="main-feed" class="container">
                <div id="activity-feed" class="view-wrap true-dom">

                    <div class="columns">
                        <div class="column is-3 is-hidden-mobile">
                            <div class="card">
                                <div class="card-body p-0 border-none">
                                    <div class="list-group nav nav-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action {{request('type') == 'admin-feeds' ? 'active' : ''}}"
                                            href="#tab1">
                                            All User Feeds<br>
                                            <small class="text-muted">All User Feeds here</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action {{request('type') == 'all-news' ? 'active' : ''}}"
                                            href="#tab2">
                                            Reported Feed<br>
                                            <small class="text-muted">All Reported Feeds</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action {{request('type') == 'all-news' ? 'active' : ''}}"
                                            href="#tab3">
                                            Reported Comments<br>
                                            <small class="text-muted">All Reported Commentss</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column column is-6 tab-content" id="tab1">
                            <div id="feed-post-1" class="card is-post">
                                <!-- Main wrap -->
                                <div class="content-wrap">
                                    <!-- Post header -->
                                    <div class="card-heading">
                                        <!-- User meta -->
                                        <div class="user-block">
                                            <div class="image">
                                                <img src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-demo-src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-user-popover="1" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="d-flex justify-content-center align-items-center"><a
                                                        href="#">Karim Saif</a>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;padding-left: 3px;"></i>&nbsp;
                                                    <i class="fa fa-clock-o"></i>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;"></i></span>
                                                <span class="time d-flex ">&nbsp; <i class="	fa fa-circle pr-1"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i> Date
                                                    &amp; Time &nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i></span>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                            <div>
                                                <div class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove the Feed</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Block User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select Downgrade User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove User Block Device</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post header -->

                                    <!-- Post body -->
                                    <div class="card-body col-sm-12">
                                        <!-- Post body text -->

                                        <!-- Featured image -->
                                        <div class="row">
                                            <div class="post-image col-sm-12">
                                                <a data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="{{asset('assets/img/PersianWomen.jpg')}}"
                                                    href="{{asset('assets/img/PersianWomen.jpg')}}"
                                                    data-demo-href="{{asset('assets/img/PersianWomen.jpg')}}">
                                                    <img src="{{asset('assets/img/PersianWomen.jpg')}}"
                                                        data-demo-src="{{asset('assets/img/PersianWomen.jpg')}}" alt="">
                                                </a>
                                                <!-- Action buttons -->

                                            </div>
                                            <!--                                             <div class="post-image col-sm-6 p-1">-->
                                            <!--                                              <a data-fancybox="post1" data-lightbox-type="comments"-->
                                            <!--                                                  data-thumb="{{asset('assets/img/soldier.mp4')}}"-->
                                            <!--                                                  href="{{asset('assets/img/soldier.mp4')}}"-->
                                            <!--                                                  data-demo-href="{{asset('assets/img/soldier.mp4')}}">-->
                                            <!--                                                  <video style="height:-webkit-fill-available;" width="320" height="-webkit-fill-available" controls>-->
                                            <!--<source src="{{asset('assets/img/soldier.mp4')}}" type="video/mp4">-->
                                            <!--</video>-->
                                            <!--                                              </a>-->


                                            <!-- Action buttons -->

                                            <!--                                          </div>-->
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            Some Text will be here when the User have
                                        </div>
                                    </div>
                                    <!-- /Post body -->

                                    <!-- Post footer -->
                                    <div class="card-footer">
                                        <!-- Followers avatars -->
                                        <div class="likers-group">
                                            <!--<img src="{{ asset('assets/svg/icons/emojitwo.png') }}"-->
                                            <!--    data-demo-src="{{ asset('assets/svg/icons/emojitwo.png') }}"-->
                                            <!--    data-user-popover="1" alt="">-->
                                            <!--<img src="{{ asset('assets/svg/icons/emojithree.png') }}"-->
                                            <!--    data-demo-src="{{ asset('assets/svg/icons/emojithree.png') }}"-->
                                            <!--    data-user-popover="4" alt="">-->
                                            <img style="height:60px;width:140px;"
                                                src="{{ asset('assets/img/emojiall.png') }}"
                                                data-demo-src="{{ asset('assets/img/emojiall.png') }}"
                                                data-user-popover="5" alt="">

                                        </div>
                                        <!-- Followers text -->
                                        <div class="likers-text">

                                        </div>
                                        <!-- Post statistics -->
                                        <div class="social-count">
                                            <div class="shares-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/Share.svg') }}" width="20" alt="">
                                                <span>12k <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="likes-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/views.svg') }}" width="20" alt="">
                                                <span>1225 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count is-comment-light" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/Comments.svg') }}" width="20"
                                                    alt="">
                                                <span>123 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/voice.svg') }}" width="20" alt="">
                                                <span>1.1M</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post footer -->
                                </div>
                                <!-- /Main wrap -->

                                <!-- Post #1 Comments -->
                                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                                    <div class="comments-header">
                                        @if (request('type') === 'flag')
                                        <img src="{{asset('assets/img/exclamation-mark.png')}}"
                                            style="position: absolute;top:1rem;right:3.5rem" width="15" alt="">
                                        @endif
                                    </div>
                                    <!-- Comments body -->
                                    <!--  <div class="comments-body has-slimscroll">-->
                                    <!--    <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">-->
                                    <!--</div>-->
                                    <!-- /Comments body -->
                                </div>
                                <!-- /Post #1 Comments -->
                            </div>
                            <div id="feed-post-1" class="card is-post">
                                <!-- Main wrap -->
                                <div class="content-wrap">
                                    <!-- Post header -->
                                    <div class="card-heading">
                                        <!-- User meta -->
                                        <div class="user-block">
                                            <div class="image">
                                                <img src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-demo-src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-user-popover="1" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="d-flex justify-content-center align-items-center"><a
                                                        href="#">Karim Saif</a>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;padding-left: 3px;"></i>&nbsp;
                                                    <i class="fa fa-clock-o"></i>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;"></i></span>
                                                <span class="time d-flex ">&nbsp; <i class="	fa fa-circle pr-1"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i> Date
                                                    &amp; Time &nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i></span>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                            <div>
                                                <div class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove the Feed</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Block User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select Downgrade User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove User Block Device</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post header -->

                                    <!-- Post body -->

                                    <!-- Post body text -->

                                    <!-- Featured image -->
                                    <div class="post-image col-sm-12 p-3">
                                        <div class="row">
                                            <div class="post-image col-sm-6 ">
                                                <a data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="{{asset('assets/img/jamunda.png')}}"
                                                    href="{{asset('assets/img/jamunda.png')}}"
                                                    data-demo-href="{{asset('assets/img/jamunda.png')}}">
                                                    <img style="width:100%;" src="{{asset('assets/img/jamunda.png')}}"
                                                        data-demo-src="{{asset('assets/img/jamunda.png')}}" alt="">
                                                </a>
                                                <!-- Action buttons -->

                                            </div>
                                            <div class="post-image col-sm-6">
                                                <a data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="{{asset('assets/img/soldier.mp4')}}"
                                                    href="{{asset('assets/img/soldier.mp4')}}"
                                                    data-demo-href="{{asset('assets/img/soldier.mp4')}}">
                                                    <video style="height: -webkit-fill-available;"
                                                        height="webkit-fill-available" width="320" height="240"
                                                        controls>

                                                        <source src="{{asset('assets/img/soldier.mp4')}}"
                                                            type="video/ogg">

                                                    </video>
                                                </a>
                                                <!-- Action buttons -->

                                            </div>
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            Some Text will be here when the User have
                                        </div>

                                    </div>

                                    <!-- /Post body -->

                                    <!-- Post footer -->
                                    <div class="card-footer">
                                        <!-- Followers avatars -->
                                        <div class="likers-group">
                                            <!--<img src="{{ asset('assets/svg/icons/emojitwo.png') }}"-->
                                            <!--    data-demo-src="{{ asset('assets/svg/icons/emojitwo.png') }}"-->
                                            <!--    data-user-popover="1" alt="">-->
                                            <!--<img src="{{ asset('assets/svg/icons/emojithree.png') }}"-->
                                            <!--    data-demo-src="{{ asset('assets/svg/icons/emojithree.png') }}"-->
                                            <!--    data-user-popover="4" alt="">-->
                                            <img style="height:60px;width:140px;"
                                                src="{{ asset('assets/img/emojiall.png') }}"
                                                data-demo-src="{{ asset('assets/img/emojiall.png') }}"
                                                data-user-popover="5" alt="">

                                        </div>
                                        <!-- Followers text -->
                                        <div class="likers-text mt-0">

                                        </div>
                                        <!-- Post statistics -->
                                        <div class="social-count">
                                            <div class="shares-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/Share.svg') }}" width="20" alt="">
                                                <span>12k <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="likes-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/views.svg') }}" width="20" alt="">
                                                <span>1225 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count is-comment-light" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/Comments.svg') }}" width="20"
                                                    alt="">
                                                <span>123 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/voice.svg') }}" width="20" alt="">
                                                <span>1.1M</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post footer -->
                                </div>
                                <!-- /Main wrap -->

                                <!-- Post #1 Comments -->
                                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                                    <div class="comments-header">
                                        @if (request('type') === 'flag')
                                        <img src="{{asset('assets/img/exclamation-mark.png')}}"
                                            style="position: absolute;top:1rem;right:3.5rem" width="15" alt="">
                                        @endif
                                    </div>
                                    <!-- Comments body -->
                                    <!--  <div class="comments-body has-slimscroll">-->
                                    <!--    <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">-->
                                    <!--</div>-->
                                    <!-- /Comments body -->
                                </div>
                                <!-- /Post #1 Comments -->
                            </div>

                        </div>



                        <div class="column column is-6 tab-content" id="tab2">
                            <div id="feed-post-1" class="card is-post">
                                <!-- Main wrap -->
                                <div class="content-wrap">
                                    <!-- Post header -->
                                    <div class="card-heading">
                                        <!-- User meta -->
                                        <div class="user-block">
                                            <div class="image">
                                                <img src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-demo-src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-user-popover="1" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="d-flex justify-content-center align-items-center"><a
                                                        href="#">Karim Saif</a>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;padding-left: 3px;"></i>&nbsp;
                                                    <i class="fa fa-clock-o"></i>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;"></i></span>
                                                <span class="time d-flex ">&nbsp; <i class="	fa fa-circle pr-1"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i> Date
                                                    &amp; Time &nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i></span>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                            <div>
                                                <div class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove the Feed</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Block User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select Downgrade User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove User Block Device</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post header -->

                                    <!-- Post body -->
                                    <div class="card-body col-sm-12">
                                        <!-- Post body text -->

                                        <!-- Featured image -->
                                        <div class="row">
                                            <div class="post-image col-sm-12">
                                                <a data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                    href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                    data-demo-href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg">
                                                    <img src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                        data-demo-src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                        alt="">
                                                </a>
                                                <!-- Action buttons -->

                                            </div>
                                            <!--                                             <div class="post-image col-sm-6 p-1">-->
                                            <!--                                              <a data-fancybox="post1" data-lightbox-type="comments"-->
                                            <!--                                                  data-thumb="https://yekbun.hellodev.site/public//assets/img/soldier.mp4"-->
                                            <!--                                                  href="https://yekbun.hellodev.site/public//assets/img/soldier.mp4"-->
                                            <!--                                                  data-demo-href="https://yekbun.hellodev.site/public//assets/img/soldier.mp4">-->
                                            <!--                                                  <video style="height:-webkit-fill-available;" width="320" height="-webkit-fill-available" controls>-->
                                            <!--<source src="https://yekbun.hellodev.site/public//assets/img/soldier.mp4" type="video/mp4">-->
                                            <!--</video>-->
                                            <!--                                              </a>-->











                                            <!-- Action buttons -->

                                            <!--                                          </div>-->
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            Some Text will be here when the User have
                                        </div>
                                    </div>
                                    <!-- /Post body -->

                                    <!-- Post footer -->
                                    <div class="card-footer">
                                        <!-- Followers avatars -->
                                        <div class="likers-group">
                                            <!--<img src="https://yekbun.hellodev.site/public//assets/svg/icons/emojitwo.png"-->
                                            <!--    data-demo-src="https://yekbun.hellodev.site/public//assets/svg/icons/emojitwo.png"-->
                                            <!--    data-user-popover="1" alt="">-->
                                            <!--<img src="https://yekbun.hellodev.site/public//assets/svg/icons/emojithree.png"-->
                                            <!--    data-demo-src="https://yekbun.hellodev.site/public//assets/svg/icons/emojithree.png"-->
                                            <!--    data-user-popover="4" alt="">-->
                                            <img style="height:60px;width:140px;"
                                                src="https://yekbun.hellodev.site/public//assets/img/emojiall.png"
                                                data-demo-src="https://yekbun.hellodev.site/public//assets/img/emojiall.png"
                                                data-user-popover="5" alt="">

                                        </div>
                                        <!-- Followers text -->
                                        <div class="likers-text">

                                        </div>
                                        <!-- Post statistics -->
                                        <div class="social-count">
                                            <div class="shares-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Share.svg"
                                                    width="20" alt="">
                                                <span>12k <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="likes-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/views.svg"
                                                    width="20" alt="">
                                                <span>1225 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count is-comment-light" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Comments.svg"
                                                    width="20" alt="">
                                                <span>123 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/voice.svg"
                                                    width="20" alt="">
                                                <span>1.1M</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post footer -->
                                </div>
                                <!-- /Main wrap -->

                                <!-- Post #1 Comments -->
                                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                                    <div class="comments-header">
                                        @if (request('type') === 'flag')
                                        <img src="{{asset('assets/img/exclamation-mark.png')}}"
                                            style="position: absolute;top:1rem;right:3.5rem" width="15" alt="">
                                        @endif
                                    </div>
                                    <!-- Comments body -->
                                    <!--  <div class="comments-body has-slimscroll">-->
                                    <!--    <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">-->
                                    <!--</div>-->
                                    <!-- /Comments body -->
                                </div>
                                <!-- /Post #1 Comments -->
                            </div>



                            <div id="feed-post-1" class="card is-post">
                                <!-- Main wrap -->
                                <div class="content-wrap">
                                    <!-- Post header -->
                                    <div class="card-heading">
                                        <!-- User meta -->
                                        <div class="user-block">
                                            <div class="image">
                                                <img src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-demo-src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-user-popover="1" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="d-flex justify-content-center align-items-center"><a
                                                        href="#">Karim Saif</a>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;padding-left: 3px;"></i>&nbsp;
                                                    <i class="fa fa-clock-o"></i>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;"></i></span>
                                                <span class="time d-flex ">&nbsp; <i class="	fa fa-circle pr-1"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i> Date
                                                    &amp; Time &nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i></span>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                            <div>
                                                <div class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove the Feed</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Block User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select Downgrade User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove User Block Device</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post header -->

                                    <!-- Post body -->
                                    <div class="card-body col-sm-12">
                                        <!-- Post body text -->

                                        <!-- Featured image -->
                                        <div style="height:50%;" class="post-image col-sm-12 m-0">
                                            <a data-fancybox="post1" data-lightbox-type="comments"
                                                data-thumb="https://yekbun.hellodev.site/public//assets/img/uservideo.mp4"
                                                href="https://yekbun.hellodev.site/public//assets/img/uservideo.mp4"
                                                data-demo-href="https://yekbun.hellodev.site/public//assets/img/uservideo.mp4">
                                                <video style="height: fit-content;width:100%;"
                                                    height="webkit-fill-available" width="320" controls="">

                                                    <source
                                                        src="https://yekbun.hellodev.site/public//assets/img/uservideo.mp4"
                                                        type="video/ogg">

                                                </video>
                                            </a>
                                            <!-- Action buttons -->

                                        </div>
                                        <div class="row">
                                            <div class="post-image col-sm-6 m-0" style="padding-right: 2px;">
                                                <div style="height:50%;margin-top: 5px;" class="post-image ">
                                                    <a data-fancybox="post1" data-lightbox-type="comments"
                                                        data-thumb="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                        href="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                        data-demo-href="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg">
                                                        <img src="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                            data-demo-src="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                            alt="">
                                                    </a>
                                                    <!-- Action buttons -->

                                                </div>


                                            </div>
                                            <div class="post-image col-sm-6 m-0" style="padding-left: 2px;">

                                                <div style="height:50%;margin-top: 5px;" class="post-image ">
                                                    <a data-fancybox="post1" data-lightbox-type="comments"
                                                        data-thumb="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                        href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                        data-demo-href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg">
                                                        <img style="height:185%;"
                                                            src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                            data-demo-src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                            alt="">
                                                    </a>
                                                    <!-- Action buttons -->

                                                </div>

                                            </div>
                                            <div class="alert alert-secondary" role="alert">
                                                Some Text will be here when the User have
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post body -->

                                    <!-- Post footer -->
                                    <div class="card-footer">
                                        <!-- Followers avatars -->
                                        <div class="likers-group">
                                            <!--<img src="https://yekbun.hellodev.site/public//assets/svg/icons/emojitwo.png"-->
                                            <!--    data-demo-src="https://yekbun.hellodev.site/public//assets/svg/icons/emojitwo.png"-->
                                            <!--    data-user-popover="1" alt="">-->
                                            <!--<img src="https://yekbun.hellodev.site/public//assets/svg/icons/emojithree.png"-->
                                            <!--    data-demo-src="https://yekbun.hellodev.site/public//assets/svg/icons/emojithree.png"-->
                                            <!--    data-user-popover="4" alt="">-->
                                            <img style="height:60px;width:140px;"
                                                src="https://yekbun.hellodev.site/public//assets/img/emojiall.png"
                                                data-demo-src="https://yekbun.hellodev.site/public//assets/img/emojiall.png"
                                                data-user-popover="5" alt="">

                                        </div>
                                        <!-- Followers text -->
                                        <div class="likers-text">

                                        </div>
                                        <!-- Post statistics -->
                                        <div class="social-count">
                                            <div class="shares-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Share.svg"
                                                    width="20" alt="">
                                                <span>12k <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="likes-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/views.svg"
                                                    width="20" alt="">
                                                <span>1225 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count is-comment-light" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Comments.svg"
                                                    width="20" alt="">
                                                <span>123 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/voice.svg"
                                                    width="20" alt="">
                                                <span>1.1M</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post footer -->
                                </div>
                                <!-- /Main wrap -->

                                <!-- Post #1 Comments -->
                                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                                    <div class="comments-header">
                                        @if (request('type') === 'flag')
                                        <img src="{{asset('assets/img/exclamation-mark.png')}}"
                                            style="position: absolute;top:1rem;right:3.5rem" width="15" alt="">
                                        @endif
                                    </div>
                                    <!-- Comments body -->
                                    <!--  <div class="comments-body has-slimscroll">-->
                                    <!--    <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">-->
                                    <!--</div>-->
                                    <!-- /Comments body -->
                                </div>
                                <!-- /Post #1 Comments -->
                            </div>
                        </div>


                        <div class="column column is-6 tab-content" id="tab3">
                            <div id="feed-post-1" class="card is-post">
                                <!-- Main wrap -->
                                <div class="content-wrap">
                                    <!-- Post header -->
                                    <div class="card-heading">
                                        <!-- User meta -->
                                        <div class="user-block">
                                            <div class="image">
                                                <img src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-demo-src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-user-popover="1" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="d-flex justify-content-center align-items-center"><a
                                                        href="#">Karim Saif</a>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;padding-left: 3px;"></i>&nbsp;
                                                    <i class="fa fa-clock-o"></i>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;"></i></span>
                                                <span class="time d-flex ">&nbsp; <i class="	fa fa-circle pr-1"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i> Date
                                                    &amp; Time &nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i></span>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                            <div>
                                                <div class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove the Feed</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Block User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select Downgrade User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove User Block Device</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post header -->

                                    <!-- Post body -->
                                    <div class="card-body col-sm-12">
                                        <!-- Post body text -->

                                        <!-- Featured image -->
                                        <div class="row">
                                            <div class="post-image col-sm-12">
                                                <a data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                    href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                    data-demo-href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg">
                                                    <img src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                        data-demo-src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg"
                                                        alt="">
                                                </a>
                                                <!-- Action buttons -->

                                            </div>
                                            <!--                                             <div class="post-image col-sm-6 p-1">-->
                                            <!--                                              <a data-fancybox="post1" data-lightbox-type="comments"-->
                                            <!--                                                  data-thumb="https://yekbun.hellodev.site/public//assets/img/soldier.mp4"-->
                                            <!--                                                  href="https://yekbun.hellodev.site/public//assets/img/soldier.mp4"-->
                                            <!--                                                  data-demo-href="https://yekbun.hellodev.site/public//assets/img/soldier.mp4">-->
                                            <!--                                                  <video style="height:-webkit-fill-available;" width="320" height="-webkit-fill-available" controls>-->
                                            <!--<source src="https://yekbun.hellodev.site/public//assets/img/soldier.mp4" type="video/mp4">-->
                                            <!--</video>-->
                                            <!--                                              </a>-->











                                            <!-- Action buttons -->

                                            <!--                                          </div>-->
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            Some Text will be here when the User have
                                        </div>
                                    </div>
                                    <!-- /Post body -->

                                    <!-- Post footer -->
                                    <div class="card-footer">
                                        <!-- Followers avatars -->
                                        <div class="likers-group">
                                            <!--<img src="https://yekbun.hellodev.site/public//assets/svg/icons/emojitwo.png"-->
                                            <!--    data-demo-src="https://yekbun.hellodev.site/public//assets/svg/icons/emojitwo.png"-->
                                            <!--    data-user-popover="1" alt="">-->
                                            <!--<img src="https://yekbun.hellodev.site/public//assets/svg/icons/emojithree.png"-->
                                            <!--    data-demo-src="https://yekbun.hellodev.site/public//assets/svg/icons/emojithree.png"-->
                                            <!--    data-user-popover="4" alt="">-->
                                            <img style="height:60px;width:140px;"
                                                src="https://yekbun.hellodev.site/public//assets/img/emojiall.png"
                                                data-demo-src="https://yekbun.hellodev.site/public//assets/img/emojiall.png"
                                                data-user-popover="5" alt="">

                                        </div>
                                        <!-- Followers text -->
                                        <div class="likers-text">

                                        </div>
                                        <!-- Post statistics -->
                                        <div class="social-count">
                                            <div class="shares-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Share.svg"
                                                    width="20" alt="">
                                                <span>12k <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="likes-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/views.svg"
                                                    width="20" alt="">
                                                <span>1225 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count is-comment-light" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Comments.svg"
                                                    width="20" alt="">
                                                <span>123 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/voice.svg"
                                                    width="20" alt="">
                                                <span>1.1M</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post footer -->
                                </div>
                                <!-- /Main wrap -->

                                <!-- Post #1 Comments -->
                                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                                    <div class="comments-header">
                                    </div>
                                    <!-- Comments body -->
                                    <!--  <div class="comments-body has-slimscroll">-->
                                    <!--    <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Comment- area.svg" style="width: 100%" alt="">-->
                                    <!--</div>-->
                                    <!-- /Comments body -->
                                </div>
                                <!-- /Post #1 Comments -->
                            </div>



                            <!--statt-->


                            <div id="feed-post-1" class="card is-post">
                                <!-- Main wrap -->
                                <div class="content-wrap">
                                    <!-- Post header -->
                                    <div class="card-heading">
                                        <!-- User meta -->
                                        <div class="user-block">
                                            <div class="image">
                                                <img src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-demo-src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png"
                                                    data-user-popover="1" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="d-flex justify-content-center align-items-center"><a
                                                        href="#">Karim Saif</a>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;padding-left: 3px;"></i>&nbsp;
                                                    <i class="fa fa-clock-o"></i>&nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;color: #c3c3c3;"></i></span>
                                                <span class="time d-flex ">&nbsp; <i class="	fa fa-circle pr-1"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i> Date
                                                    &amp; Time &nbsp; <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i></span>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                            <div>
                                                <div class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove the Feed</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Block User</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select Downgrade User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove User Block Device</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post header -->

                                    <!-- Post body -->
                                    <div class="card-body col-sm-12">
                                        <!-- Post body text -->
                                        <div style="height:850px;" class="row">
                                            <!-- Featured image -->
                                            <div class="post-image col-sm-6 m-0 p-0">
                                                <div style="height:40%;" class="post-image m-0 p-1">
                                                    <a data-fancybox="post1" data-lightbox-type="comments"
                                                        data-thumb="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                        href="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                        data-demo-href="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg">
                                                        <img style="height:100%;width:100%;"
                                                            src="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                            data-demo-src="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                            alt="">
                                                    </a>
                                                    <!-- Action buttons -->

                                                </div>
                                                <div style="height:60%;" class="post-image m-0 p-1">
                                                    <a data-fancybox="post1" data-lightbox-type="comments"
                                                        data-thumb="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                        href="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                        data-demo-href="https://yekbun.hellodev.site/public//assets/img/jamunda.png">
                                                        <img style="height:100%;width:100%;"
                                                            src="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                            data-demo-src="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                            alt="">
                                                    </a>
                                                    <!-- Action buttons -->

                                                </div>


                                            </div>
                                            <div class="post-image col-sm-6 m-0 p-0">
                                                <div style="height:60%;" class="post-image m-0 p-1">
                                                    <a data-fancybox="post1" data-lightbox-type="comments"
                                                        data-thumb="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                        href="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                        data-demo-href="https://yekbun.hellodev.site/public//assets/img/jamunda.png">
                                                        <img style="height:100%;width:100%;"
                                                            src="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                            data-demo-src="https://yekbun.hellodev.site/public//assets/img/jamunda.png"
                                                            alt="">
                                                    </a>
                                                    <!-- Action buttons -->

                                                </div>
                                                <div style="height:40%;" class="post-image m-0 p-1">
                                                    <a data-fancybox="post1" data-lightbox-type="comments"
                                                        data-thumb="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                        href="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                        data-demo-href="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg">
                                                        <img style="height:100%;width:100%;"
                                                            src="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                            data-demo-src="https://yekbun.hellodev.site/public//assets/img/userfeedone.jpg"
                                                            alt="">
                                                    </a>
                                                    <!-- Action buttons -->

                                                </div>


                                            </div>
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            Some Text will be here when the User have
                                        </div>
                                    </div>

                                    <!-- /Post body -->

                                    <!-- Post footer -->
                                    <div class="card-footer">
                                        <!-- Followers avatars -->
                                        <div class="likers-group">
                                            <!--<img src="{{ asset('assets/svg/icons/emojitwo.png') }}"-->
                                            <!--    data-demo-src="{{ asset('assets/svg/icons/emojitwo.png') }}"-->
                                            <!--    data-user-popover="1" alt="">-->
                                            <!--<img src="{{ asset('assets/svg/icons/emojithree.png') }}"-->
                                            <!--    data-demo-src="{{ asset('assets/svg/icons/emojithree.png') }}"-->
                                            <!--    data-user-popover="4" alt="">-->
                                            <img style="height:60px;width:140px;"
                                                src="{{ asset('assets/img/emojiall.png') }}"
                                                data-demo-src="{{ asset('assets/img/emojiall.png') }}"
                                                data-user-popover="5" alt="">

                                        </div>
                                        <!-- Followers text -->
                                        <div class="likers-text">

                                        </div>
                                        <!-- Post statistics -->
                                        <div class="social-count">
                                            <div class="shares-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/Share.svg') }}" width="20" alt="">
                                                <span>12k <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="likes-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/views.svg') }}" width="20" alt="">
                                                <span>1225 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count is-comment-light" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/Comments.svg') }}" width="20"
                                                    alt="">
                                                <span>123 <i class="	fa fa-circle"
                                                        style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count" style="cursor: pointer">
                                                <img src="{{ asset('assets/svg/icons/voice.svg') }}" width="20" alt="">
                                                <span>1.1M</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post footer -->
                                </div>
                                <!-- /Main wrap -->

                                <!-- Post #1 Comments -->
                                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                                    <div class="comments-header">
                                    </div>
                                    <!-- Comments body -->
                                    <!--  <div class="comments-body has-slimscroll">-->
                                    <!--    <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Comment- area.svg" style="width: 100%" alt="">-->
                                    <!--</div>-->
                                    <!-- /Comments body -->
                                </div>
                                <!-- /Post #1 Comments -->
                            </div>

                            <!--statt-->
                        </div>

                        <div class="column is-3"></div>

                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>

<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }
</script>


@section('page-script')
<script>


    $('.nav-tab a:first-child').addClass('active');
    $('.tab-content').hide();
    let ii = $('.tab-content');
    ii[1].style.display = 'block';
    // Click function
    $('.nav-tab a').click(function () {
        $('.nav-tab a').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).fadeIn();
        return false;
    });
</script>
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
        }).then(function (result) {
            if (result.value) {
                callback();
            }
        });
    }
</script>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection