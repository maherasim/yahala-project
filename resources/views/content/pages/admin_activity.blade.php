@extends('layouts/layoutMaster')

@section('title', 'Admin Activity')

@section('page-style')


    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <style>
        .custom-option-icon .form-check-input {
            background-color: transparent !important;
            border: none !important;
        }

        .form-check-input:checked,
        .form-check-input[type=checkbox],
        .form-check-input[type=radio] {
            width: 0 !important;
            height: 0 !important;
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

        .layout-page .modal {
            z-index: 99999;
        }

        .layout-page .modal-title {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
        }

        #deal-type .hki {
            min-height: 224px;
            height: 224px;
            max-height: 224px;
        }

        /*
                                                                                                            .custom-option-body img{
                                                                                                                height:136px;
                                                                                                            }
                                                                                                    */
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
            border-radius: 30px !important;
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



        .cow {
            position: absolute !important;
            top: 0px !important;
            right: 0px !important;
            z-index: 12222222 !important;
            background: blue !important;
            width: 30% !important;
        }

        .alert-secondary {
            background-color: #ebeef0;
            border-color: #dadee3;
            color: #8592a3;
            /*border: 3px solid red !important;*/
        }

        .avatar {
            position: relative;
            width: 2.375rem;
            height: 2.375rem;
            cursor: pointer;
            border-radius: 100% !important;
        }

        .card-body .col-sm-12 {
            padding-top: 0px !important;
        }

        .borderr {
            border: none !important;
        }

        .bs-stepper-content {
            display: block;
        }

        .custom-options.checked {
            border: 1px solid #696cff;
        }

        .modal8-right {
            position: absolute;
            top: 0%;
            width: 50px;
            height: 168;
            right: -17%;
            border-radius: 5px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 24px;
            pointer-events: auto;
        }

        .modal8-right {
            cursor: pointer;
        }

        .modal8-right button {
            border: none;
            background: none;
            padding: 0;
        }

        .time_div_img {
            width: 20px;
            height: 20px;
            display: flex;
        }

        .time_input {
            width: 100%;
            height: 35px;
            background-color: #e0e0e0;
            border-radius: 5px;
        }

        .time_input_field {
            width: 90px;
            height: 35px;
            background-color: #e0e0e0
        }

        .time_label {
            font-weight: bold;
            width: Hug (93px)px;
            height: Hug (19px)px;
            gap: 10px;
            opacity: 0px;
        }

        .time_div {
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            margin-bottom: 0;
        }

        .sharing_options {
            border: none !important;
            background: #F2F2F2 !important;
            padding: 0 !important;
            cursor: pointer !important;
            width: 80px !important;
            height: 80px !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            text-align: center !important;
            border-radius: 7px !important;
            transition: transform 0.2s ease !important;
        }

        .options_btns {
            display: none;
        }

        .toggle-buttonModal8 {
            border: none !important;
            padding: 0 !important;
            border-radius: 7px !important;
            cursor: pointer !important;
            width: 80px !important;
            height: 80px !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            text-align: center !important;
            transition: transform 0.2s ease !important;
        }

        .donation {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            width: 322px;
            height: 54px;
            margin: 10px auto;
            padding: 3px;
            border-radius: 5px;
            background-color: #E5E5E5;
        }

        .bar-amount {
            padding: 0px 10px;
            text-align: right;
            color: #09A824;

        }

        .bar-amount span {
            width: 50%;

        }

        .date-left {
            text-align: left !important;
            float: left;
        }

        .bar-container {
            width: 100%;
            display: flex;
            /* Use flexbox to arrange the bars in a row */
            justify-content: space-between;
            /* Distribute space between bars */
            padding: 5px 10px;
        }

        .date_span {
            font-size: 16px;
            text-transform: capitalize;
            color: green;
            font-weight: 600;
            margin-left: 5px;
        }

        .bar {
            height: 6px;
            /* Thickness of each bar */
            width: 100%;
            /* Each bar takes up equal width inside the container */
            margin-right: 4px;
            /* Small space between each bar */
            border-radius: 10px;
        }

        .bar:last-child {
            margin-right: 0;
            /* Remove margin for the last bar */
        }

        .dark-red {
            background-color: #FC4B5D;
            /* Dark red */
        }

        .red {
            background-color: #FC4B5D;
            /* Red */
        }

        .orange {
            background-color: #F2BE1D;
            /* Orange */
        }

        .yellow {
            background-color: #FFF200;
            /* Yellow */
        }

        .gray {
            background-color: #C7D3EB;
            /* Gray */
        }

        .gray-light {
            background-color: #C7D3EB;
            /* Light gray */
        }
    </style>

    <style>
        .avatar_details {
            background: #f3f3f3;
            padding: 10px;
            border-radius: 10px;
            padding-bottom: 10px;
            margin-top: 5px;
        }

        .avatar_details .w-px-40 {
            height: 40px !important;
        }

        .avatar_details .upper {
            text-transform: uppercase;
        }

        .avatar_details .text-rigth {
            float: right;
        }

        .avatar_details .av_image {
            width: 100%;
            border-radius: 5px;
        }

        .avatar_details .card {
            padding-top: 10px;
            padding-bottom: 20px;
        }

        .avatar_details .heading {
            font-weight: bold;
            font-size: 18px;
            color: #1c274c;
        }

        .avatar_details .details {
            margin-bottom: 10px;
        }

        .avatar_details .dashhr {
            width: 60%;
            text-align: center;
            margin: auto;
            color: #fff !important;
            border-top: 4px solid;
        }

        .avatar_details .postshr {
            margin-bottom: 20px !important;
            text-align: center;
            margin: auto;
            color: #fff !important;
            border-top: 4px solid;
        }

        .avatar_details .feeds_div {
            margin: auto;

        }

        .avatar_details .feeds_container {
            padding: 10px;
        }

        .avatar_details .w-px-30 {
            height: 30px;
            width: 30px;
            float: left;
            margin-right: 5px;
        }

        .avatar_details .post_avatar {
            width: 100px;
            float: left;
            font-size: 13px;
            line-height: 1.2;
        }

        .post_time {
            float: right;
            color: #44Af74;
            font-weight: bold;
        }

        .avatar_details .heading_post {
            font-weight: bold;
        }

        .avatar_details .post_img img {
            width: 100%;
            border-radius: 5px;
        }

        .avatar_details .feeds {
            background: #fff;
            padding: 5px;
            border-radius: 10px;
        }

        .avatar_details .folors {
            margin-top: 10px;
        }

        .avatar_details .fol_img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            position: relative;
            margin-left: -15px;
        }

        .avatar_details .z-100 {
            z-index: 100;
        }

        .avatar_details .z-90 {
            z-index: 90;
        }

        .avatar_details .z-80 {
            z-index: 80;
        }

        .avatar_details .z-70 {
            z-index: 70;
        }

        .avatar_details .z-60 {
            z-index: 60;
        }

        .avatar_details .z-50 {
            z-index: 50;
        }

        .avatar_details .z-40 {
            z-index: 40;
        }

        .avatar_details .z-30 {
            z-index: 30;
        }

        .avatar_details .postbox {
            background: #fff;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .avatar_details .article_txt {
            width: 100%;
        }

        .artilce_title {
            float: left;
            width: 50%;
            font-size: 13px;
        }

        .article_time {
            width: 50%;
            float: left;
            text-align: right;
        }

        .article_details {
            background: #f3f3f3;
            border-radius: 5px;
            padding: 5px;
        }

        .avatar_details .btn-share {
            font-size: 11px;
            padding: 1px 8px;
        }

        .avatar_details .btn-share-like {
            background: #44Af74;

        }

        .avatar_details .btn-share-denied {

            background: #F2555B;
        }

        .avatar_details .btn-share-like span {
            font-size: 18px;
            margin-right: 5px;
            margin-top: -2px;
        }

        .avatar_details .btn-share-denied span {
            font-size: 18px;
            margin-left: 5px;
            margin-top: -2px;
        }

        .avatar_details .articles_btns {
            text-align: center;
        }

        .avatar_details .emojies {
            background: #f3f3f3;
            width: 70px;
            border-radius: 5px;
            float: left;
            text-align: center;
        }

        .avatar_details .shares_options {
            background: #f3f3f3;
            border-radius: 5px;
            width: calc(100% - 90px);
            margin-left: auto;
            float: right;
            text-align: center;
        }

        .avatar_details .shareimg {
            width: 100%;
        }

        .avatar_details .show_details {
            cursor: pointer;
        }

        .feeds-type {
            background-color: white;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 0px 0px 10px 10px;
        }

        .feeds-type button {
            width: 60px;
            height: 64px;
            border-radius: 15px;
            display: inline-block;
            margin: 12px 18px 12px 18px;
            border: none;
            padding: 8px;
        }

        .feeds-type button.active {
            border: 1px solid #1BC469;
            background-color: #fff;
        }

        .feeds-type button.active svg * {
            fill: #1BC469;
        }

        .feeds-type p {
            font-size: 14px;
            /* line-height: 16.8px; */
            margin: 4px 0 -4px 0;
            font-weight: 500;
            text-align: center;
            color: #1C274C;
        }

        .layout-page .modal {
            font-family: "Genos", serif !important;
            font-optical-sizing: auto !important;
            font-style: normal !important;
        }

        .layout-page .modal * {
            font-family: "Genos", serif !important;
            font-optical-sizing: auto !important;
            font-style: normal !important;
        }

        img.ellipse {
            width: 2px !important;
            height: 2px !important;
            margin-top: 13px !important;
        }

        .section-head span {
            font-weight: 500;
        }

        .section-head img {
            height: 20px;
            width: 20px;
            margin: 4px 4px 0 0;
        }

        .visibilitypicker {
            width: 96px;
            height: auto;
            border-radius: 14px;
            background-color: #F2F2F2;
            color: black;
            border: none;
            margin: 7px;
        }

        .visibilitypicker svg * {
            fill: black;
        }

        .visibilitypicker.active {
            background-color: #1BC469;
            color: #fff;
        }

        .visibilitypicker.active svg * {
            fill: #fff;
            stroke: #fff;
        }

        .custom-option-icon .custom-option-content {
            padding: 0.3em;
        }

        .form-check {
            padding-left: 0.1em;
        }

        .pop-img {
            width: 100%;
        }

        .pop-heading {
            font-weight: bold;
            color: #000;
        }

        .pop-txt {
            color: #000;
            font-size: 14px;
        }

        .pop_action_div {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pop_action {
            background: #F2F2F2;
            border-radius: 7px;
            width: 30px;
            height:
                30px;
            margin: 5px;
            cursor: pointer;
            border: 0px;
        }

        .pop_action_image {
            width: 30px;
            padding: 5px;
            height: 30px;
            object-fit: cover
        }

        .image-preview-containerModal2 img {
            height: 100% !important;
        }

        .layout-page .modal-dialog-centered {
            display: flex;
            align-items: center;
            width: 370px;
        }

        #mainImage {
            width: 100% !important;
        }

        .layout-page .modal-content {
            overflow2: visible !important;
        }


        .form-switch .form-check-input {
            width: 40px !important;
            height: 20px !important;
            background-color: #b4b4b4 !important;
            border-radius: 1.25rem !important;
        }

        .form-switch .form-check-input {
            width: 2em;
            margin-left: -2.5em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e") !important;
            background-position: left center;
            border-radius: 2em;
            transition: background-position .15s ease-in-out;
        }

        .form-switch .form-check-input {
            width: 40px !important;
            height: 20px !important;
            background-color: #b4b4b4;
            border-radius: 1.25rem;
        }

        .form-switch .form-check-input:checked {
            background-color: #0d6efd !important;
        }

        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e") !important;
        }

        @media (min-width: 576px) {
            .layout-page .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }

            .layout-page .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }
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
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--hero-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
@endsection

@section('vendor-script')

    <script>
        const DEFAULT_IMAGE = "{{ asset('assets/svg/svg-dialog/second-svg-dialog/image%201425.svg') }}";
        const pausebtn = "{{ asset('assets/svg/svg-dialog/Group%201000002312.svg') }}";
        const playbtn = "{{ asset('assets/svg/svg-dialog/Player%20Play.svg') }}";
        const playpusecgrnbtn = "{{ asset('assets/svg/svg-dialog/Eo_circle_green_pause.svg') }}";

        const adddefpath = "{{ asset('assets/svg/Gallery%20Add.svg') }}";

        const imgpath = "{{ asset('public/images/icons/') }}";

        //const DEFAULT_IMAGE = "{{ asset('assets/svg/svg-dialog/second-svg-dialog/image%201425.svg') }}";
    </script>

    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <!-- Concatenated js plugins and jQuery -->
    <script src="{{ asset('assets/friendkit/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Core js -->
    <script src="{{ asset('assets/friendkit/js/global.js') }}"></script>

    <!-- Navigation options js -->
    <script src="{{ asset('assets/friendkit/js/navbar-v1.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/navbar-v2.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/navbar-mobile.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/navbar-options.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/sidebar-v1.js') }}"></script>

    <!-- Core instance js -->
    <script src="{{ asset('assets/friendkit/js/main.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/chat.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/touch.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/tour.js') }}"></script>

    <!-- Components js -->
    <script src="{{ asset('assets/friendkit/js/explorer.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/widgets.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/modal-uploader.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/popovers-users.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/popovers-pages.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/script.js') }}?v={{ time() }}"></script>
    <script src="{{ asset('assets/friendkit/js/lightbox.js') }}"></script>

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->
    <script src="{{ asset('assets/friendkit/js/feed.js') }}"></script>

    <script src="{{ asset('assets/friendkit/js/webcam.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/compose.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/autocompletes.js') }}"></script>
    <!--hero-->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    <!--top bar-->

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div id="wizard-create-deal" class="bs-stepper vertical mt-2 linear"
        style="box-shadow:none;background-color:transparent">
        <div class="bs-stepper-content">
            <form id="wizard-create-deal-form" onsubmit="return!1">
                <div id="deal-type" class="content active fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md mb-md-0 mb-2" style="display:none">
                                    <div class="form-check card custom-option-icon hki custom-options" id="hki"><a
                                            href="javascript:void(0)"
                                            class="form-check-label custom-option-content news-modal-btn"
                                            for="customRadioPercentage" data-bs-toggle="modal"
                                            data-bs-target="#requestpopup"><span class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/icons/newspaper.svg') }}" class="my-2"
                                                    width="40" alt=""><span class="custom-option-title">Create
                                                    News</span><small>Share News with your Community</small></span><input
                                                name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPercentage" checked=""></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-2" style="display:none">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)" class="form-check-label custom-option-content"
                                            data-bs-toggle="modal" data-bs-target="#requestpopuptwo"
                                            for="customRadioFlat"><span class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/icons/network-connection.svg') }}"
                                                    class="my-2" width="40" alt=""><span
                                                    class="custom-option-title">Add Feeds</span><small>Share a Feed with
                                                    Community</small></span><input name="customRadioIcon"
                                                class="form-check-input" type="radio" value=""
                                                id="customRadioFlat"></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)"
                                            class="form-check-label custom-option-content popcall1" data-bs-toggle="modal"
                                            data-bs-target="#modal1" for="customRadioPrime"><span
                                                class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/svg-dialog/Group 1000008347.svg') }}"
                                                    class="my-2 pop-img" width="40" alt=""><span
                                                    class="custom-option-title pop-heading">System</span><small
                                                    class="pop-txt">Share System info</small></span><input
                                                name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime"></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)"
                                            class="form-check-label custom-option-content popcall1" data-bs-toggle="modal"
                                            data-bs-target="#modal10" for="customRadioPrime"><span
                                                class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/svg-dialog/Group 1000008357.svg') }}"
                                                    class="my-2 pop-img" width="40" alt=""><span
                                                    class="custom-option-title pop-heading">Donation</span><small
                                                    class="pop-txt">Create Donation</small></span><input
                                                name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime"></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)"
                                            class="form-check-label custom-option-content popcall1" data-bs-toggle="modal"
                                            data-bs-target="#modal3" for="customRadioPrime"><span
                                                class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/svg-dialog/Group.svg') }}"
                                                    class="my-2 pop-img" width="40" alt=""><span
                                                    class="custom-option-title pop-heading">Surveys</span><small
                                                    class="pop-txt">Create Surveys</small></span><input
                                                name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime"></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)"
                                            class="form-check-label custom-option-content popcall1" data-bs-toggle="modal"
                                            data-bs-target="#modal4" for="customRadioPrime"><span
                                                class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/svg-dialog/Group 1000008455.svg') }}"
                                                    class="my-2 pop-img" width="40" alt=""><span
                                                    class="custom-option-title pop-heading">Greetings</span><small
                                                    class="pop-txt">Share Greetings</small></span><input
                                                name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime"></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)" class="form-check-label custom-option-content"
                                            data-bs-toggle="modal" data-bs-target="#eventModal"
                                            for="customRadioPrime"><span class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/svg-dialog/Ñëîé_1.svg') }}"
                                                    class="my-2 pop-img" width="40" alt=""><span
                                                    class="custom-option-title pop-heading">Events</span><small
                                                    class="pop-txt">Share Events</small></span><input
                                                name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime"></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-4">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)" class="form-check-label custom-option-content"
                                            data-bs-toggle="modal" data-bs-target="#system_popup"
                                            for="customRadioPrime"><span class="custom-option-body"><img
                                                    src="{{ asset('assets/svg/svg-dialog/Group 1000008478.svg') }}"
                                                    class="my-2 pop-img" width="40" alt=""><span
                                                    class="custom-option-title pop-heading">User</span><small
                                                    class="pop-txt">Warn SOS</small></span><input name="customRadioIcon"
                                                class="form-check-input" type="radio" value=""
                                                id="customRadioPrime"></a></div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check card custom-option-icon hki custom-options"><a
                                            href="javascript:void(0)" class="form-check-label custom-option-content"
                                            data-bs-toggle="modal" data-bs-target="#requestpopupnew"
                                            for="customRadioPrime"><span class="custom-option-body"><img
                                                    class="my-2 pop-img" width="40" alt=""
                                                    src="{{ asset('assets/svg/icons/onair.png') }}"><span
                                                    class="custom-option-title pop-heading">Live Stream</span><small
                                                    class="pop-txt">Go Live now</small></span><input
                                                name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="deal-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="row g-3">
                        <div class="col-sm-6 fv-plugins-icon-container"><label class="form-label" for="dealTitle">Deal
                                Title</label><input type="text" id="dealTitle" name="dealTitle" class="form-control"
                                placeholder="Black friday sale, 25% off">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="col-sm-6 fv-plugins-icon-container"><label class="form-label" for="dealCode">Deal
                                Code</label><input type="text" id="dealCode" name="dealCode" class="form-control"
                                placeholder="25PEROFF">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="col-sm-6"><label class="form-label" for="dealDescription">Deal Description</label>
                            <textarea id="dealDescription" name="dealDescription" class="form-control" rows="5"
                                placeholder="To sell or distribute something as a business deal"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-12 mb-3"><label class="form-label" for="dealOfferedItem">Offered
                                        Items</label>
                                    <div class="position-relative"><select class="select2 select2-hidden-accessible"
                                            id="dealOfferedItem" name="dealOfferedItem" multiple=""
                                            data-select2-id="dealOfferedItem" tabindex="-1" aria-hidden="true">
                                            <option disabled="" value="">Select offered item</option>
                                            <option value="65328">Apple iPhone 12 Pro Max (256GB)</option>
                                            <option value="25612">Apple iPhone 12 Pro (512GB)</option>
                                            <option value="65454">Apple iPhone 12 Mini (256GB)</option>
                                            <option value="12365">Apple iPhone 11 Pro Max (256GB)</option>
                                            <option value="85466">Apple iPhone 11 (64GB)</option>
                                            <option value="98564">OnePlus Nord CE 5G (128GB)</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="2" style="width:auto"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--multiple" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                                    aria-disabled="false">
                                                    <ul class="select2-selection__rendered">
                                                        <li class="select2-search select2-search--inline"><input
                                                                class="select2-search__field" type="search"
                                                                tabindex="0" autocomplete="off" autocorrect="off"
                                                                autocapitalize="none" spellcheck="false" role="searchbox"
                                                                aria-autocomplete="list"
                                                                placeholder="Select an offered item" style="width:0"></li>
                                                    </ul>
                                                </span></span><span class="dropdown-wrapper"
                                                aria-hidden="true"></span></span></div>
                                </div>
                                <div class="col-12"><label class="form-label" for="dealCartCondition">Cart
                                        condition</label><select class="form-select" id="dealCartCondition"
                                        name="dealCartCondition">
                                        <option disabled="" value="">Select cart condition</option>
                                        <option value="all">Cart must contain all selected Downloads</option>
                                        <option value="any">Cart needs one or more of the selected Downloads</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-sm-6"><label for="dealDuration" class="form-label">Deal Duration</label><input
                                type="text" id="dealDuration" name="dealDuration"
                                class="form-control flatpickr-input" placeholder="YYYY-MM-DD to YYYY-MM-DD"
                                readonly="readonly"></div>
                        <div class="col-sm-6"><label class="form-label">Notify Users</label>
                            <div class="row">
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline"><input class="form-check-input"
                                            type="checkbox" id="dealNotifyEmail" name="dealNotifyEmail"
                                            value="email"><label class="form-check-label"
                                            for="dealNotifyEmail">Email</label></div>
                                    <div class="form-check form-check-inline"><input class="form-check-input"
                                            type="checkbox" id="dealNotifySMS" name="dealNotifySMS"
                                            value="sms"><label class="form-check-label"
                                            for="dealNotifySMS">SMS</label></div>
                                    <div class="form-check form-check-inline"><input class="form-check-input"
                                            type="checkbox" id="dealNotifyPush" name="dealNotifyPush"
                                            value="push"><label class="form-check-label" for="dealNotifyPush">Push
                                            Notification</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between"><button class="btn btn-primary btn-prev"><i
                                    class="bx bx-chevron-left bx-sm ms-sm-n2"></i><span
                                    class="align-middle d-sm-inline-block d-none">Previous</span></button><button
                                class="btn btn-primary btn-next"><span
                                    class="align-middle d-sm-inline-block d-none me-sm-1">Next</span><i
                                    class="bx bx-chevron-right bx-sm me-sm-n2"></i></button></div>
                    </div>
                </div>
                <div id="deal-usage" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="row g-3">
                        <div class="col-sm-6"><label class="form-label" for="dealUserType">User Type</label><select
                                id="dealUserType" name="dealUserType" class="form-select">
                                <option selected="" disabled="" value="">Select user type</option>
                                <option value="all">All</option>
                                <option value="registered">Registered</option>
                                <option value="unregistered">Unregistered</option>
                                <option value="prime-members">Prime members</option>
                            </select></div>
                        <div class="col-sm-6"><label class="form-label" for="dealMaxUsers">Max Users</label><input
                                type="number" id="dealMaxUsers" name="dealMaxUsers" class="form-control"
                                placeholder="500"></div>
                        <div class="col-sm-6"><label class="form-label" for="dealMinimumCartAmount">Minimum Cart
                                Amount</label><input type="number" id="dealMinimumCartAmount"
                                name="dealMinimumCartAmount" class="form-control" placeholder="$99"></div>
                        <div class="col-sm-6"><label class="form-label" for="dealPromotionalFee">Promotional
                                Fee</label><input type="number" id="dealPromotionalFee" name="dealPromotionalFee"
                                class="form-control" placeholder="$9"></div>
                        <div class="col-sm-6"><label class="form-label" for="dealPaymentMethod">Payment
                                Method</label><select id="dealPaymentMethod" name="dealPaymentMethod"
                                class="form-select">
                                <option selected="" disabled="" value="">Select payment method</option>
                                <option value="any">Any</option>
                                <option value="credit-card">Credit Card</option>
                                <option value="net-banking">Net Banking</option>
                                <option value="wallet">Wallet</option>
                            </select></div>
                        <div class="col-sm-6"><label class="form-label" for="dealStatus">Deal Status</label><select
                                id="dealStatus" name="dealStatus" class="form-select">
                                <option selected="" disabled="" value="">Select status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="suspend">Suspend</option>
                                <option value="abandon">Abandone</option>
                            </select></div>
                        <div class="col-lg-12"><label class="switch"><input type="checkbox" class="switch-input"
                                    id="dealLimitUser" name="dealLimitUser"><span class="switch-toggle-slider"><span
                                        class="switch-on"></span><span class="switch-off"></span></span><span
                                    class="switch-label">Limit this discount to a single-use per customer?</span></label>
                        </div>
                        <div class="col-12 d-flex justify-content-between"><button class="btn btn-primary btn-prev"><i
                                    class="bx bx-chevron-left bx-sm ms-sm-n2"></i><span
                                    class="align-middle d-sm-inline-block d-none">Previous</span></button><button
                                class="btn btn-primary btn-next"><span
                                    class="align-middle d-sm-inline-block d-none me-sm-1">Next</span><i
                                    class="bx bx-chevron-right bx-sm me-sm-n2"></i></button></div>
                    </div>
                </div>
                <div id="review-complete" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12 mb-0">
                                    <h3>Almost done! 🚀</h3>
                                    <p>Confirm your deal details information and submit to create it.</p>
                                </div>
                                <div class="col-12 mb-0">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td class="ps-0 align-top text-nowrap py-1"><span class="fw-medium">Deal
                                                        Type</span></td>
                                                <td class="px-0 py-1">Percentage</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 align-top text-nowrap py-1"><span
                                                        class="fw-medium">Amount</span></td>
                                                <td class="px-0 py-1">25%</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 align-top text-nowrap py-1"><span class="fw-medium">Deal
                                                        Code</span></td>
                                                <td class="px-0 py-1">
                                                    <div class="badge bg-label-warning">25PEROFF</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 align-top text-nowrap py-1"><span class="fw-medium">Deal
                                                        Title</span></td>
                                                <td class="px-0 py-1">Black friday sale, 25% OFF</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 align-top text-nowrap py-1"><span class="fw-medium">Deal
                                                        Duration</span></td>
                                                <td class="px-0 py-1"><span class="fw-medium">2021-07-14</span>to<span
                                                        class="fw-medium">2021-07-30</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center"><img
                                class="img-fluid w-px-200"
                                src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}"
                                alt="deal image cap" data-app-light-img="illustrations/man-with-laptop-light.png"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"></div>
                        <div class="col-md-12"><label class="switch"><input type="checkbox" class="switch-input"
                                    id="dealConfirmed" name="dealConfirmed"><span class="switch-toggle-slider"><span
                                        class="switch-on"></span><span class="switch-off"></span></span><span
                                    class="switch-label">I have confirmed the deal details.</span></label></div>
                        <div class="col-12 d-flex justify-content-between"><button class="btn btn-primary btn-prev"><i
                                    class="bx bx-chevron-left bx-sm ms-sm-n2"></i><span
                                    class="align-middle d-sm-inline-block d-none">Previous</span></button><button
                                class="btn btn-success btn-submit btn-next">Submit</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        .pop_div {
            background-color: #fff;
            border-radius: 10px;
            padding: 5px
        }

        .pop_sub {
            height: 30;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            top: 10px
        }

        .pop_head {
            background-color: #f8f9fa;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px
        }

        .pop_tit {
            display: flex;
            align-items: start;
            align-items: center
        }

        .pop_heading {
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: flex-start;
            margin-left: 5px;
            gap: 8px
        }

        .pop_head_line {
            font-family: Genos;
            font-size: 20px;
            text-underline-position: from-font;
            text-decoration-skip-ink: none;
            display: flex;
            align-items: center;
            gap: 5px
        }

        .pop_title {
            border-radius: 45%;
            background: #00000066
        }

        .pop_description {
            font-size: 14px;
            font-weight: 400;
            color: gray;
            text-align: left;
            background: #f7f7f7;
            padding: 7px;
            font-family: Genos;
            margin-top: 7px;
            margin-bottom: 7px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: left
        }

        .pop_main_image {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, .1)
        }

        .pop_overlay {
            position: absolute;
            bottom: 10px;
            left: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            background: #1c274C99;
            gap: 5px
        }
    </style>
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="view-wrapper">
                <div id="main-feed" class="container">
                    <div id="activity-feed" class="view-wrap true-dom">
                        <div class="columns">
                            <div style="padding:0" class="column is-3">
                                <div class="card">
                                    <div class="card-body p-0 border-none">
                                        <div class="list-group nav nav-tab" role="tablist"><a
                                                class="list-group-item list-group-item-action {{ request('type') == 'all-news' ? 'active' : '' }}"
                                                href="#tab5">Admin Feeds<br><small class="text-muted">Admin has
                                                    Post</small></a><a
                                                class="list-group-item list-group-item-action {{ request('type') == 'all-news' ? 'active' : '' }}"
                                                href="#tab3">Go live Soon<br><small class="text-muted">Planed Live
                                                    Stream</small></a><a
                                                class="list-group-item list-group-item-action {{ request('type') == 'all-news' ? 'active' : '' }}"
                                                href="#tab4">Admin Live Stream<br><small class="text-muted">Live Stream
                                                    by Admin</small></a></div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top:0" class="column column is-6 tab-content" id="tab5">
                                <input type="hidden" name="feed_id" id="feed_id">
                                <input type="hidden" name="feed_type" id="feed_type" value="admin_feeds">
                                <input type="hidden" name="comment_parent_id" id="comment_parent_id">
                                @foreach ($popfeeds as $key => $feed)
                                    <div id="feed-post-{{ $key }}" class="card is-post">
                                        <div class="pop_div">
                                            <div class="pop_sub">
                                                <div class="pop_head">
                                                    <div class="pop_tit"><img
                                                            src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg') }}"
                                                            style="width:32px;height:32px;object-fit:cover">
                                                        <div class="pop_heading" style="">
                                                            <div class="pop_head_line" style="">
                                                                <div class="pop_title" style=""></div>YekBun Team
                                                                <div
                                                                    style="width:2px;height:2px;border-radius:45%;background:#00000066">
                                                                </div>
                                                            </div>
                                                            <div
                                                                style="width:150px;height:6px;font-family:Genos;font-size:14px;text-align:left;text-underline-position:from-font;text-decoration-skip-ink:none;color:#7e7e7e;display:flex;align-items:center;gap:5px;position: relative;top:-9px">
                                                                {{ \Carbon\Carbon::parse($feed->date_start)->format('d M y') }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($feed->date_ends)->format('d M y') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src="{{ asset('assets/svg/svg-dialog/' . $feed->share_option . '.svg') }}"
                                                        style="{{ $feed->share_option == 'all-users' ? 'width:36px;height:36px' : 'width:27px;height:36px' }};object-fit:cover;border:none"
                                                        class="img-thumbnail">
                                                </div>
                                                <form action="delete_popfeed"
                                                    onsubmit="confirmAction(event, () => event.target.submit())"
                                                    method="post" class="d-inline">@csrf <input type="hidden"
                                                        name="delid" value="{{ $feed->id }}">
                                                    <div class="pop_action_div"><button class="pop_action"><img
                                                                type="submit" src="{{ asset('assets/svg/delete.svg') }}"
                                                                class="pop_action_image"></button>
                                                </form>@php
                                                    $modalnumber = 1;
                                                    $paypal = '';
                                                    $gpay = '';
                                                    $payoffice = '';
                                                    $payother = '';
                                                    $limited = '';
                                                    $txt1 = '';
                                                    $txt2 = '';
                                                    $txt3 = '';
                                                    $icon1 = '';
                                                    $icon2 = '';
                                                    $icon3 = '';
                                                    if ($feed->type == 'System') {
                                                        $modalnumber = 1;
                                                    } elseif ($feed->type == 'Donation') {
                                                        $modalnumber = 10;
                                                        $paypal = $feed->is_paypal;
                                                        $gpay = $feed->is_gpay;
                                                        $payoffice = $feed->is_pay_office;
                                                        $payother = $feed->is_paypal;
                                                        $limited = $feed->is_pay_other;
                                                    } elseif ($feed->type == 'Surveys') {
                                                        $modalnumber = 3;
                                                        $txt1 = $feed->txt1;
                                                        $txt2 = $feed->txt2;
                                                        $txt3 = $feed->txt3;
                                                        $icon1 = $feed->icon1;
                                                        $icon2 = $feed->icon2;
                                                        $icon3 = $feed->icon3;
                                                    } elseif ($feed->type == 'Greetings') {
                                                        $modalnumber = 4;
                                                    }
                                                @endphp<a href="javascript:void(0)"
                                                    class="pop_action edit_popup1" data-bs-toggle="modal"
                                                    data-bs-target="#modal{{ $modalnumber }}" for="customRadioPrime"
                                                    data-id="{{ $feed->_id }}" data-name="{{ $feed->title }}"
                                                    data-image="{{ asset('storage/' . $feed->image) }}"
                                                    data-video="{{ asset('storage/' . $feed->video) }}"
                                                    data-audio="{{ asset('storage/' . $feed->audio) }}"
                                                    data-start="{{ $feed->date_start }}"
                                                    data-end="{{ $feed->date_ends }}" data-type="{{ $feed->type }}"
                                                    data-option="{{ $feed->share_option }}"
                                                    data-isshare="{{ $feed->is_share }}"
                                                    data-iscomment="{{ $feed->is_comments }}"
                                                    data-isemoji="{{ $feed->is_emoji }}"
                                                    data-paypal="{{ $paypal }}" data-gpay="{{ $gpay }}"
                                                    data-payoffice="{{ $payoffice }}"
                                                    data-other="{{ $payother }}" data-limit="{{ $limited }}"
                                                    data-txt1="{{ $txt1 }}" data-txt2="{{ $txt2 }}"
                                                    data-txt3="{{ $txt3 }}" data-icon1="{{ $icon1 }}"
                                                    data-icon2="{{ $icon2 }}"
                                                    data-icon3="{{ $icon3 }}"><img
                                                        src="{{ asset('assets/svg/edit.svg') }}"
                                                        class="pop_action_image"></a>
                                            </div>
                                        </div>
                                        <div class="pop_description">{{ $feed->title }}</div>
                                        <div class="pop_main_image pop_main_image_{{ $feed->_id }}">
                                            @if ($feed->video != null)
                                                <!-- Custom controls are defined here -->
                                                {{-- <video src="{{ asset('storage/' . $feed->video) }}" style="width:100%;object-fit:cover;border-radius:7px;padding:0;display:block"></video> --}}

                                                <video id="my-player" class="video-js" controls preload="auto"
                                                    {{-- poster="//vjs.zencdn.net/v/oceans.png" --}} data-setup='{}'
                                                    style="width:100%;height:350px;object-fit:cover;border-radius:7px;padding:0;display:block">
                                                    <source src="{{ asset('storage/' . $feed->video) }}"
                                                        type="video/mp4">
                                                    </source>
                                                </video>
                                            @else
                                                <a class="view-post" data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="{{ asset('storage/' . $feed->image) }}"
                                                    href="{{ asset('storage/' . $feed->image) }}"
                                                    data-id="{{ $feed->_id }}"
                                                    data-demo-href="{{ asset('storage/' . $feed->image) }}">
                                                    <img src="{{ asset('storage/' . $feed->image) }}"
                                                        style="width:100%;object-fit:cover;border-radius:7px;padding:0;display:block">
                                                </a>
                                                {{-- <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group 1000008129.svg') }}"
                                                style="width:20px;height:20px;margin:5px;border-radius:5px;object-fit:cover;color:#fff"> --}}
                                                @if ($feed->audio !== '' && $feed->audio !== null)
                                                    <audio src="{{ asset('storage/' . $feed->audio) }}"
                                                        id="feed-audio-{{ $feed->id }}"></audio>
                                                    <div class="audio-icon-play d-none"
                                                        id="audio-icon-play{{ $feed->id }}"
                                                        data-id="{{ $feed->id }}">
                                                        <i class="fas fa-volume-high"></i>
                                                    </div>
                                                    <div class="audio-icon-stop" id="audio-icon-stop{{ $feed->id }}"
                                                        data-id="{{ $feed->id }}">
                                                        <i class="fas fa-volume-xmark"></i>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                        <div
                                            style="height:29px;display:flex;justify-content:space-between;align-items:center;background-color:#f8f9fa;border-radius:5px;padding:5px;gap:10px;margin-top:7px">
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;width:200px;height:100%">

                                                {{-- <div style="display:flex;align-items:center;gap:3px;height:100%"><img
                                                        src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Eye%20Scan.svg') }}"
                                                        style="width:100%;height:100%;object-fit:cover"><span
                                                        style="font-weight:400;font-family:Genos">123</span>
                                                </div>

                                                <div style="display:flex;align-items:center;gap:3px;height:100%"><img
                                                        src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg') }}"
                                                        style="width:100%;height:100%;object-fit:cover"><span
                                                        style="font-weight:400;font-family:Genos">123</span>
                                                </div> --}}

                                                @if ($feed->is_comments == 1)
                                                    <div style="display:flex;align-items:center;gap:3px;height:100%"><img
                                                            src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Pen%202.svg') }}"
                                                            style="width:100%;height:100%;object-fit:cover"><span
                                                            style="font-weight:400;font-family:Genos">0</span>
                                                    </div>
                                                @endif
                                                @if ($feed->is_share == 1)
                                                    <div style="display:flex;align-items:center;gap:3px;height:100%"><img
                                                            src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/microphone-2.svg') }}"
                                                            style="width:100%;height:100%;object-fit:cover"><span
                                                            style="font-weight:400;font-family:Genos">0</span>
                                                    </div>
                                                @endif
                                            </div>
                                            @if ($feed->is_emoji == 1)
                                                <div style="display:flex;align-items:center;gap:2px;height:100%">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002356.svg') }}"
                                                        style="width:100%;height:100%;object-fit:cover">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002630.svg') }}"
                                                        style="width:100%;height:100%;object-fit:cover">
                                                    <span style="font-weight:400;font-family:Genos">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        {{-- <div
                                            style="height:30px;display:flex;background-color:#fff;justify-content:space-between;align-items:center;margin-top:10px">
                                            <div
                                                style="width:120px;height:30px;display:flex;align-items:center;gap:5px;height:100%">
                                                <div
                                                    style="padding:3px;border-radius:4px;width:30px;height:30px;background:#f2f2f2;display:flex;align-items:center;justify-content:center">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg') }}"
                                                        style="width:24px;height:24px;object-fit:cover">
                                                </div>
                                                @if ($feed->is_emoji == 1)
                                                <div
                                                    style="padding:3px;border-radius:4px;width:30px;height:30px;background:#f2f2f2;display:flex;align-items:center;justify-content:center">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002356.svg') }}"
                                                        style="width:24px;height:24px;object-fit:cover">
                                                </div>
                                                @endif
                                                @if ($feed->is_share == 1)
                                                <div
                                                    style="padding:3px;border-radius:4px;width:30px;height:30px;background:#f2f2f2;display:flex;align-items:center;justify-content:center">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/microphone-2.svg') }}"
                                                        style="width:24px;height:24px;object-fit:cover">
                                                </div>
                                                @endif
                                            </div>
                                            @if ($feed->is_comments == 1)
                                            <div
                                                style="background-color:#f8f9fa;border-radius:7px;height:30px;width:auto;display:flex;align-items:center;gap:5px;font-size:10px;font-family:Genos;padding:5px">
                                                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Pen%202.svg') }}"
                                                    style="width:24px;height:24px"><span>add a comment here</span>
                                            </div>
                                            @endif
                                        </div> --}}
                                    </div>
                            </div>
                            @endforeach
                        </div>{{-- Old Feeds Section --}}
                        <div style="padding-top:0" class="column column is-6 tab-content" id="tab4"></div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-backdrop fade"></div>
    </div>
    <x-modal id="requestpopup" size="lg">@include('content.include.live_stream.createnews')</x-modal>
    <x-modal id="requestpopuptwo" size="md">@include('content.include.live_stream.createmusictwo')</x-modal>
    <x-modal id="requestpopupnew" size="lg">@include('content.include.live_stream.golive')</x-modal>

    @include('content.pages.includes.fullpopup')

    <div class="modal fade popmodal" id="modal1__old" tabindex="-1" aria-labelledby="Modlal1">
        <div id="moo" class="modal-dialog modal-dialog-centered">
            <div class="modal-content"
                style="Width:375px;Height:812px;background-color:#f8f9fa;padding:5px;border-radius:10px">
                <div class="modal-body" style="position:relative;border-radius:10px;border:2px dashed #356899">
                    <div
                        style="width:Fixed (333px) px;height:Hug (761.24px) px;display:flex;border-radius:10px;flex-direction:column;align-items:center;gap:110px">
                        <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008335.svg') }}"
                            alt="Illustration" data-target="#modal6" data-bs-dismiss="modal"
                            style="height:250px;width:100%">
                        <div id="previewContainerWrapper" style="width:100%;display:flex;gap:10px;flex-wrap:wrap">
                            <div class="previewContainer"
                                style="width:100%;height:81px;display:flex;justify-content:center;align-items:center;background-size:contain;cursor:pointer;border-radius:10px">
                                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg') }}"
                                    alt="Illustration" data-target="#modal6" data-bs-dismiss="modal"
                                    style="height:96px;width:69%" id="addImageButton"> <input type="file"
                                    class="fileInput" multiple="multiple" accept="image/*"
                                    style="opacity:0;width:100%;height:100%;position:absolute;cursor:pointer">
                            </div>
                        </div>
                    </div>
                    <div
                        style="height:80px;display:flex;align-items:center;justify-content:center;gap:50px;background-color:#fff;margin-top:230px;border-radius:10px;margin-left:3%;margin-right:3%;padding:5px">
                        <div style="display:flex;align-items:center;justify-content:center"><img id="displayImage2"
                                src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg') }}"
                                alt="Illustration" class="img-fluid"
                                style="height:40px;width:41px;cursor:pointer;margin-left:2px"> <input type="file"
                                id="imageUploader2" accept="image/*" style="display:none"></div>
                        <div
                            style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;font-family:Genos">
                            <h4 style="margin:0;text-align:center">Another Selection</h4>
                            <h6 style="margin:0;text-align:center">File Size H 812 - W 350</h6>
                            <p style="margin:0;text-align:center">MP4-JPG Or PNG -<span style="color:red">Max 5
                                    Image</span></p>
                        </div>
                    </div>
                    <div
                        style="position:absolute;bottom:-10%;left:100px;width:202px;display:flex;align-items:center;justify-content:center;gap:10px">
                        <div id="backButton" data-target="#popupModal"
                            style="outline:0;width:50px;height:40px;background-color:#fff;display:flex;align-items:center;justify-content:center;border-radius:10px">
                            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg') }}">
                        </div>
                        <div id="createButton" data-target="#modal7"
                            style="outline:0;width:100px;height:40px;background-color:#fff;display:flex;align-items:center;justify-content:center;border-radius:10px;gap:5px;font-family:Genos">
                            Create <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Path_2-2.svg') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>

@section('page-script')
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.time_input_field').daterangepicker({
                onSelect: function(dateText) {

                    $('#span_output').text(dateText);
                }
            });

            $('#classone').click(function() {
                alert('loin');
            })
            setTimeout(function() {

                $(".alert").hide();
            }, 5000);
        });


        //changes
        $(document).on("click", ".popcall1", function() {
            $(".upid").val("0");
            $(".title_field").val("");
            $(".datepicker1").val("");
            $(".datepicker2").val("");
            $(".share").prop("checked", false);
            $(".emoji").prop("checked", false);
            $(".comments").prop("checked", true);

            $("#button2Modal8").prop("checked", false);
            $("#button3Modal8").prop("checked", false);
            $("#button4Modal8").prop("checked", false);
            $("#button2Modal8_2").prop("checked", false);
            $("#button3Modal8_2").prop("checked", false);
            $("#button4Modal8_2").prop("checked", false);
            $("#button2Modal8_3").prop("checked", false);
            $("#button3Modal8_3").prop("checked", false);
            $("#button4Modal8_3").prop("checked", false);
            $("#button2Modal8_4").prop("checked", false);
            $("#button3Modal8_4").prop("checked", false);
            $("#button4Modal8_4").prop("checked", false);

            $("#button1Modal8").attr('checked', 'checked');
            $("#button1Modal8").click();
            $("#button1Modal8_3").attr('checked', 'checked');
            $("#button1Modal8_3").click();
            $("#button1Modal8_2").attr('checked', 'checked');
            $("#button1Modal8_2").click();
            $("#button1Modal8_4").attr('checked', 'checked');
            $("#button1Modal8_4").click();

            $(".paypal").prop("checked", false);
            $(".gpay").prop("checked", true);
            $(".paymentOffice").prop("checked", true);
            $(".others").prop("checked", false);

            $("#unlimit_img_uc").hide();
            $("#unlimit_img_c").show();
            $("#limit_img_c").hide();
            $("#limit_img_uc").show();
            $("#unlimi_bars").hide();
            $("#limi_bars").show();
            $("#unlimited_duration").show();
            $("#limited_duration").hide();


            $("#button1Modal8").css("background-color", "rgb(28, 162, 237)");
            $("#button1Modal8_3").css("background-color", "rgb(28, 162, 237)");
            $("#button1Modal8_4").css("background-color", "rgb(28, 162, 237)");

            $("#button1Modal8 span").css("color", "#fff");
            $("#button1Modal8_3 span").css("color", "#fff");
            $("#button1Modal8_4 span").css("color", "#fff");

            $(".addImageButtonModel2").show();
            $(".descriptionTextContainerModal2").show();
            $("#descriptionTextContainerModal10").show();
            $(".image-preview-containerModal2").html("");
            $(".fileInput18").attr("required", true);

            $('#Mp3InputModal10').show();
            $('#Mp3uploadModal10').hide();
            $('#Mp3InputModal2').show();
            $('#Mp3uploadModal2').hide();
            $('#Mp3InputModal3').show();
            $('#Mp3uploadModal3').hide();
            $('#Mp3InputModal4').show();
            $('#Mp3uploadModal4').hide();
            $('#Mp3InputModal5').show();
            $('#Mp3uploadModal5').hide();

            var image1 = document.getElementById('defaultIcon1');
            image1.src = adddefpath;
            var image2 = document.getElementById('defaultIcon2');
            image2.src = adddefpath;
            var image3 = document.getElementById('defaultIcon3');
            image3.src = adddefpath;

            $(".txt1").val("");
            $(".txt2").val("");
            $(".txt3").val("");


        })

        $(document).ready(function() {

            $(".audio-icon-play").click(function() {
                let id = $(this).attr('data-id');
                let audio = $("#feed-audio-" + id)[0]; // Get the audio element
                audio.pause();
                audio.currentTime = 0; // Reset audio
                $(this).addClass("d-none"); // Hide play button
                $("#audio-icon-stop" + id).removeClass("d-none"); // Show stop button
            });

            $(".audio-icon-stop").click(function() {
                let id = $(this).attr('data-id');
                let audio = $("#feed-audio-" + id)[0]; // Get the audio element
                audio.play();
                $(this).addClass("d-none"); // Hide stop button
                $("#audio-icon-play" + id).removeClass("d-none"); // Show play button
            });
        });


        $(document).on("click", ".edit_popup1", function() {
            var cid = $(this).attr("data-id");
            var p_title = $(this).attr("data-name");
            var p_image = $(this).attr("data-image");
            var p_audio = $(this).attr("data-audio");
            var p_start = $(this).attr("data-start");
            var p_end = $(this).attr("data-end");
            var p_option = $(this).attr("data-option");
            var p_isshare = $(this).attr("data-isshare");
            var p_iscomment = $(this).attr("data-iscomment");
            var p_emoji = $(this).attr("data-isemoji");
            var typ = $(this).attr("data-type");

            var imgid = ".pop_main_image_" + cid;
            var imghtml = $(imgid).html();
            let imgsrc = $(this).attr('data-image')

            $('.time_input_field').val(p_start + ' - ' + p_end);
            $(".upid").val(cid);
            $(".title_field").val(p_title);
            $(".datepicker1").val(p_start);
            $(".datepicker2").val(p_end);

            $(".fileInput18").attr("required", false);
            $(".fileInput18_3").attr("required", false);
            $(".fileInput18_4").attr("required", false);

            if (p_isshare == "1") {
                $(".share").prop("checked", true);
            } else {
                $(".share").prop("checked", false);
            }
            if (p_iscomment == "1") {
                $(".comments").prop("checked", true);
            } else {
                $(".comments").prop("checked", false);
            }
            if (p_emoji == "1") {
                $(".emoji").prop("checked", true);
            } else {
                $(".emoji").prop("checked", false);
            }

            if (typ == "System") {

                if (p_option == "educated") {
                    $("#button2Modal8").attr('checked', 'checked');
                    $("#button2Modal8").click();
                } else if (p_option == "cultivated") {
                    $("#button3Modal8").attr('checked', 'checked');
                    $("#button3Modal8").click();
                } else if (p_option == "academic") {
                    $("#button4Modal8").attr('checked', 'checked');
                    $("#button4Modal8").click();
                } else {
                    $("#button1Modal8").attr('checked', 'checked');
                    $("#button1Modal8").click();
                }

                if ($(this).attr('data-audio') !== "" && $(this).attr('data-audio') !== null) {
                    loadAudio($(this).attr('data-audio'), '#DurationModal2', '#playModal2');
                    $('#Mp3InputModal2').css('display', 'none');
                    $('#Mp3uploadModal2').css('display', 'block');
                } else {
                    $('#Mp3InputModal2').css('display', 'block');
                    $('#Mp3uploadModal2').css('display', 'none');
                }
            } else if (typ == "Donation") {

                if (p_option == "educated") {
                    $("#button2Modal8_2").attr('checked', 'checked');
                    $("#button2Modal8_2").click();
                } else if (p_option == "cultivated") {
                    $("#button3Modal8_2").attr('checked', 'checked');
                    $("#button3Modal8_2").click();

                } else if (p_option == "academic") {
                    $("#button4Modal8_2").attr('checked', 'checked');
                    $("#button4Modal8_2").click();
                } else {
                    $("#button1Modal8_2").attr('checked', 'checked');
                    $("#button1Modal8_2").click();
                }

                if ($(this).attr('data-audio') !== "" && $(this).attr('data-audio') !== null) {
                    loadAudio($(this).attr('data-audio'), '#DurationModal10', '#playModal10');
                    $('#Mp3InputModal10').css('display', 'none');
                    $('#Mp3uploadModal10').css('display', 'block');
                } else {
                    $('#Mp3InputModal10').css('display', 'block');
                    $('#Mp3uploadModal10').css('display', 'none');
                }

                //extra fields
                var limit = $(this).attr("data-limit");
                var paypal = $(this).attr("data-paypal");
                var gpay = $(this).attr("data-gpay");
                var payoffice = $(this).attr("data-payoffice");
                var payother = $(this).attr("data-other");

                $("#limit").val(limit);

                if (limit == "Limited") {
                    $("#unlimit_img_uc").show();
                    $("#unlimit_img_c").hide();
                    $("#limit_img_c").show();
                    $("#limit_img_uc").hide();
                    $("#unlimi_bars").show();
                    $("#limi_bars").hide();
                    $('#limited_note').show();
                    $('#unlimited_note').hide();
                    $("#unlimited_duration").hide();
                    $("#limited_duration").show();
                } else {
                    $("#unlimit_img_uc").hide();
                    $("#unlimit_img_c").show();
                    $("#limit_img_c").hide();
                    $("#limit_img_uc").show();
                    $("#unlimi_bars").hide();
                    $("#limi_bars").show();
                    $('#limited_note').hide();
                    $('#unlimited_note').show();
                    $("#unlimited_duration").show();
                    $("#limited_duration").hide();
                }

                $("#st_date").text(p_start);
                $("#end_date").text(p_end);

                if (paypal == "1") {

                    $(".paypal").prop("checked", true);
                } else {
                    $(".paypal").prop("checked", false);
                }
                if (gpay == "1") {
                    $(".gpay").prop("checked", true);
                } else {
                    $(".gpay").prop("checked", false);
                }
                if (payoffice == "1") {
                    $(".paymentOffice").prop("checked", true);
                } else {
                    $(".paymentOffice").prop("checked", false);
                }
                if (payother == "1") {
                    $(".others").prop("checked", true);
                } else {
                    $(".others").prop("checked", false);
                }

            } else if (typ == "Surveys") {

                if (p_option == "educated") {
                    $("#button2Modal8_3").attr('checked', 'checked');
                    $("#button2Modal8_3").click();
                } else if (p_option == "cultivated") {
                    $("#button3Modal8_3").attr('checked', 'checked');
                    $("#button3Modal8_3").click();

                } else if (p_option == "academic") {
                    $("#button4Modal8_3").attr('checked', 'checked');
                    $("#button4Modal8_3").click();
                } else {
                    $("#button1Modal8_3").attr('checked', 'checked');
                    $("#button1Modal8_3").click();
                }

                if ($(this).attr('data-audio') !== "" && $(this).attr('data-audio') !== null) {
                    loadAudio($(this).attr('data-audio'), '#DurationModal4', '#playModal4');
                    $('#Mp3InputModal4').css('display', 'none');
                    $('#Mp3uploadModal4').css('display', 'block');
                } else {
                    $('#Mp3InputModal4').css('display', 'block');
                    $('#Mp3uploadModal4').css('display', 'none');
                }

                var txt1 = $(this).attr("data-txt1");
                $('.txt1').val(txt1);
                var txt2 = $(this).attr("data-txt2");
                $('.txt2').val(txt2);
                var txt3 = $(this).attr("data-txt3");
                $('.txt3').val(txt3);
                var icon1 = $(this).attr("data-icon1");
                var icon2 = $(this).attr("data-icon2");
                var icon3 = $(this).attr("data-icon3");

                var image1 = document.getElementById('defaultIcon1');
                if (icon1 != "") {
                    image1.src = imgpath + "/" + icon1;
                } else {
                    image1.src = adddefpath;
                }
                var image2 = document.getElementById('defaultIcon2');
                if (icon2 != "") {
                    image2.src = imgpath + "/" + icon2;
                } else {
                    image2.src = adddefpath;
                }
                var image3 = document.getElementById('defaultIcon3');
                if (icon3 != "") {
                    image3.src = imgpath + "/" + icon3;
                } else {
                    image3.src = adddefpath;
                }

            } else if (typ == "Greetings") {
                if (p_option == "educated") {
                    $("#button2Modal8_4").attr('checked', 'checked');
                    $("#button2Modal8_4").click();
                } else if (p_option == "cultivated") {
                    $("#button3Modal8_4").attr('checked', 'checked');
                    $("#button3Modal8_4").click();

                } else if (p_option == "academic") {
                    $("#button4Modal8_4").attr('checked', 'checked');
                    $("#button4Modal8_4").click();
                } else {
                    $("#button1Modal8_4").attr('checked', 'checked');
                    $("#button1Modal8_4").click();
                }

                if ($(this).attr('data-audio') !== "" && $(this).attr('data-audio') !== null) {
                    loadAudio($(this).attr('data-audio'), '#DurationModal5', '#playModal5');
                    $('#Mp3InputModal5').css('display', 'none');
                    $('#Mp3uploadModal5').css('display', 'block');
                } else {
                    $('#Mp3InputModal5').css('display', 'block');
                    $('#Mp3uploadModal5').css('display', 'none');
                }

            }

            //pop_main_image
            if (imgsrc !== "" && imgsrc !== null) {
                $(".addImageButtonModel2").hide();
                $(".descriptionTextContainerModal2").hide();
                $("#descriptionTextContainerModal10").hide();
                $(".image-preview-containerModal2").html(`
                <img src="${imgsrc}" alt="Image Preview" style="width: 100%; height: 100%; object-fit: fill; border-radius: 10px;">
                `);
            }


            /** ✅ Load and play audio */
            function loadAudio(audioPath, duration, play) {
                let audioElement = null;
                const durationSpan = $(duration)
                const playButton = $(play);
                if (!audioPath) return;

                audioElement = new Audio(audioPath);

                // Update duration once metadata is loaded
                $(audioElement).on("loadedmetadata", function() {
                    durationSpan.text(formatDuration(audioElement.duration));
                });

                // Update current time during playback
                $(audioElement).on("timeupdate", function() {
                    durationSpan.text(formatDuration(audioElement.currentTime));
                });

                playButton.on("click", function() {
                    if (audioElement.paused) {
                        audioElement.play();
                        playButton.attr("src", playpusecgrnbtn); // Change to pause icon
                    } else {
                        audioElement.pause();
                        playButton.attr("src", playbtn); // Change back to play icon
                    }
                });

                /** ✅ Format duration to "MM:SS" */
                function formatDuration(seconds) {
                    const minutes = Math.floor(seconds / 60);
                    const remainingSeconds = Math.floor(seconds % 60);
                    return `${String(minutes).padStart(2, "0")}:${String(remainingSeconds).padStart(2, "0")}`;
                }
            }

        })

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









    <script>
        $('.nav-tab a:first-child').addClass('active');
        $('.tab-content').hide();
        let ii = $('.tab-content');
        ii[1].style.display = 'block';
        // Click function
        $('.nav-tab a').click(function() {
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
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }
    </script>
    <script>
        'use strict';

        function initializeDropzone(dropzoneId, hiddenInputName, folder, acceptedFiles, limit = 1) {
            const previewTemplate = `<div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                    <div class="dz-preview dz-file-preview w-100">
                    <div class="dz-details">
                    <div class="dz-thumbnail" style="width:95%">
                    <img data-dz-thumbnail >
                    <span class="dz-nopreview">No preview</span>
                    <div class="dz-success-mark"></div>
                    <div class="dz-error-mark"></div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                    </div>
                    </div>
                    <div class="dz-filename" data-dz-name></div>
                    <div class="dz-size" data-dz-size></div>
                </div>
                </div></div></div>`;

            let dropzoneKey = 0;

            // Function to check the number of files
            function checkFileCount() {
                switch (dropzoneId) {
                    case '#news-dropzone-img':
                        switch (this.files.length) {
                            case 2:
                                $('#image22').css('display', 'block');
                                $('#image33').css('display', 'none');
                                $('#image44').css('display', 'none');
                                break;
                            case 3:
                                $('#image22').css('display', 'none');
                                $('#image33').css('display', 'block');
                                $('#image44').css('display', 'none');
                                break;
                            default:
                                if (this.files.length >= 4) {
                                    $('#image22').css('display', 'none');
                                    $('#image33').css('display', 'none');
                                    $('#image44').css('display', 'block');
                                } else {
                                    $('#image22').css('display', 'none');
                                    $('#image33').css('display', 'none');
                                    $('#image44').css('display', 'none');
                                }
                                break;
                        }
                        break;

                    case '#feeds-dropzone-img':
                        switch (this.files.length) {
                            case 2:
                                $('#feedimage22').css('display', 'block');
                                $('#feedimage33').css('display', 'none');
                                $('#feedimage44').css('display', 'none');
                                break;
                            case 3:
                                $('#feedimage22').css('display', 'none');
                                $('#feedimage33').css('display', 'block');
                                $('#feedimage44').css('display', 'none');
                                break;
                            default:
                                if (this.files.length >= 4) {
                                    $('#feedimage22').css('display', 'none');
                                    $('#feedimage33').css('display', 'none');
                                    $('#feedimage44').css('display', 'block');
                                } else {
                                    $('#feedimage22').css('display', 'none');
                                    $('#feedimage33').css('display', 'none');
                                    $('#feedimage44').css('display', 'none');
                                }
                                break;
                        }
                        break;

                    case '#video-dropzone-img':
                        switch (this.files.length) {
                            case 2:
                                $('#videoimage22').css('display', 'block');
                                $('#videoimage33').css('display', 'none');
                                $('#videoimage44').css('display', 'none');
                                break;
                            case 3:
                                $('#videoimage22').css('display', 'none');
                                $('#videoimage33').css('display', 'block');
                                $('#videoimage44').css('display', 'none');
                                break;
                            default:
                                if (this.files.length >= 4) {
                                    $('#videoimage22').css('display', 'none');
                                    $('#videoimage33').css('display', 'none');
                                    $('#videoimage44').css('display', 'block');
                                } else {
                                    $('#videoimage22').css('display', 'none');
                                    $('#videoimage33').css('display', 'none');
                                    $('#videoimage44').css('display', 'none');
                                }
                                break;
                        }
                        break;

                    default:
                        break;
                }


            }

            return new Dropzone(dropzoneId, {
                url: '{{ route('file.upload') }}',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                acceptedFiles: acceptedFiles,
                maxFiles: limit,
                sending: function(file, xhr, formData) {
                    formData.append('folder', folder);
                },
                success: function(file, response) {
                    let fileSize = $('.dz-size').eq(dropzoneKey).text();
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                        '.hidden-inputs');
                    hiddenInputsContainer.innerHTML +=
                        `<input type="hidden" name="${hiddenInputName}" value="${response.path}" data-path="${response.path}">`;
                    let fileInputName = hiddenInputName.replace(/\w+\[\]/g, function(match) {
                        return match.slice(0, -2);
                    });
                    if (limit == 1) {
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_name" data-path="${response.path}" value="${$('.dz-filename').eq(dropzoneKey).text()}">`;
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_length" data-path="${response.path}" value="${response.duration}">`;
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_size" data-path="${response.path}" value="${fileSize.match(/[\d.]+/)[0]}">`;
                    } else {
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_name[]" data-path="${response.path}" value="${$('.dz-filename').eq(dropzoneKey).text()}">`;
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_length[]" data-path="${response.path}" value="${response.duration}">`;
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_size[]" data-path="${response.path}" value="${fileSize.match(/[\d.]+/)[0]}">`;
                        dropzoneKey++;
                    }
                    checkFileCount.call(this);
                },
                removedfile: function(file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                        '.hidden-inputs');
                    hiddenInputsContainer.querySelector(
                        `input[data-path="${file.previewElement.dataset.path}"]`).remove();

                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }

                    $.ajax({
                        url: '{{ route('file.delete') }}',
                        method: 'delete',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            path: file.previewElement.dataset.path
                        },
                        success: function() {
                            dropzoneKey--;
                            const dataPath = file.previewElement.dataset.path;
                            $(`input[data-path="${dataPath}"]`).remove();
                            checkFileCount.call(this); // Check file count after removal
                        }.bind(this)
                    });

                    return this._updateMaxFilesReachedClass();
                }
            });
        }


        // Initialize multiple Dropzones
        document.addEventListener('DOMContentLoaded', function() {
            initializeDropzone('#news-dropzone-img', 'image[]', 'images', 'image/*', 100);
            initializeDropzone('#feeds-dropzone-img', 'image[]', 'images', 'image/*', 100);
            initializeDropzone('#video-dropzone-img', 'video[]', 'videos', 'video/*', 100);
        });
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>

    {{-- News Section Image Validation --}}
    <script>
        $('#news-dropzone-img').change(function() {
            console.log('test');
        });
        $('.news-btn').click(function() {
            // let selectedImages = parseInt($('#createForm .hidden-inputs [name="image[]"]').length);
            // let imageLength = parseInt($('#createForm input[name="image_type"]:checked').val());

            // if (isNaN(imageLength)) {
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'Oops...',
            //         text: 'Image type is not selected or invalid!',
            //     });
            //     return;
            // }

            // if (imageLength === 4) {
            //     if (selectedImages < imageLength) {
            //         Swal.fire({
            //             icon: 'error',
            //             title: 'Selection Error',
            //             text: 'Please select at least 4 images!',
            //         });
            //     } else {
            //         $('#createForm')[0].submit()
            //     }
            // } else {
            //     if (selectedImages !== imageLength) {
            //         Swal.fire({
            //             icon: 'warning',
            //             title: 'Selection Warning',
            //             text: `Please select exactly ${imageLength} images!`,
            //         });
            //     } else {
            //         $('#createForm')[0].submit()
            //     }
            // }
            $('#createForm')[0].submit()
        });

        $('.news-modal-btn').click(function() {
            let image_type = parseInt($('#createForm input[name="image_type"]:checked').val())
            if (image_type !== 2) {
                $('#image22').css('display', 'none')
            }
        })
    </script>

    {{-- Feeds Section Image Validation --}}
    <script>
        $('.feed-btn').click(function() {
            // let selectedImages = parseInt($('#feedsForm .hidden-inputs [name="image[]"]').length);
            // let selectedVideos = parseInt($('#feedsForm .hidden-inputs [name="video[]"]').length);
            // let imageLength = parseInt($('#feedsForm input[name="image_type"]:checked').val());
            // let feed_type = $('#feedsForm input[name="feed_type"]:checked').val();

            // if (feed_type == 'share_image') {
            //     if (isNaN(imageLength)) {
            //         Swal.fire({
            //             icon: 'error',
            //             title: 'Oops...',
            //             text: 'Image type is not selected or invalid!',
            //         });
            //         return;
            //     }

            //     if (imageLength === 4) {
            //         if (selectedImages < imageLength) {
            //             Swal.fire({
            //                 icon: 'error',
            //                 title: 'Selection Error',
            //                 text: 'Please select at least 4 images!',
            //             });
            //         } else {
            //             $('#feedsForm')[0].submit()
            //         }
            //     } else {
            //         if (selectedImages !== imageLength) {
            //             Swal.fire({
            //                 icon: 'warning',
            //                 title: 'Selection Warning',
            //                 text: `Please select exactly ${imageLength} images!`,
            //             });
            //         } else {
            //             $('#feedsForm')[0].submit()
            //         }
            //     }
            // }


            // if (feed_type == 'share_video') {
            //     if (isNaN(imageLength)) {
            //         Swal.fire({
            //             icon: 'error',
            //             title: 'Oops...',
            //             text: 'Video is not selected or invalid!',
            //         });
            //         return;
            //     }

            //     if (imageLength === 4) {
            //         if (selectedVideos < imageLength) {
            //             Swal.fire({
            //                 icon: 'error',
            //                 title: 'Selection Error',
            //                 text: 'Please select at least 4 Videos!',
            //             });
            //         } else {
            //             $('#feedsForm')[0].submit()
            //         }
            //     } else {
            //         if (selectedVideos !== imageLength) {
            //             Swal.fire({
            //                 icon: 'warning',
            //                 title: 'Selection Warning',
            //                 text: `Please select exactly ${imageLength} Videos!`,
            //             });
            //         } else {
            //             $('#feedsForm')[0].submit()
            //         }
            //     }
            // }
            // if (feed_type == 'share_text') {
            //     $('#feedsForm')[0].submit()
            // }
            $('#feedsForm')[0].submit();
        });
    </script>

    <script>
        //  alert('adasd');
        $(document).ready(function() {
            $(".hki").click(function() {
                // alert('kkk');

                $(".hki").removeClass("checked");
                $(this).addClass("checked");
            });
        });

        $('.tab-contented:first').show();

        // Click function
        $(document).on('click', '.classonetr', function() {
            // alert('sdas');
            $('.classonetr').removeClass('checked');
            $(this).addClass('checked');
            $('.tab-contented').hide();

            var activeTab = $(this).attr('data-king1');
            $(activeTab).fadeIn();

            var activeTab = $(this).attr('data-king');
            $(activeTab).fadeIn();
            return false;
        });

        // owl
        $(document).ready(function() {

            $("#owl-example").owlCarousel({
                loop: false,
                margin: 1,
                autoPlay: true,
                nav: true,
                center: true,

                rewindNav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

        });
        // slick


        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 3,
            dots: true

        });




        $('#imageone:first-child').addClass('active');
        $('.image-content').hide();
        $('.image-content:first').show();

        $('.imagea:first-child').addClass('active');
        $('.image-content1').hide();
        $('.image-content1:first').show();

        // Click function
        $('.imagea').click(function() {
            $('.imagea').removeClass('active');
            $(this).addClass('active');
            $('.image-content1').hide();

            var activeTab = $(this).attr('data-imagetwo');
            $(activeTab).fadeIn();
            return false;
        });


        $('.imagepicker:first-child').addClass('active');
        $('.image-content1').hide();
        $('.image-content1:first').show();

        // Click function
        $('.imagepicker').click(function() {
            $('.imagepicker').removeClass('active');
            $(this).addClass('active');
            $('.image-content1').hide();

            var activeTab = $(this).attr('data-imagetwo');
            let value = $(this).attr('data-value');
            $(value).prop('checked', true);
            $(activeTab).fadeIn();
            return false;
        });

        $('.usertypepicker').click(function() {
            // Remove 'active' class from all elements
            $('.usertypepicker').removeClass('active');

            // Add 'active' class to the clicked element
            $(this).addClass('active');

            // Uncheck all radio buttons or checkboxes within 'user_type' name
            $('[name="user_type"]').prop('checked', false);

            // Check the radio button or checkbox with the ID from 'data-val' attribute
            var idToCheck = $(this).attr('data-val'); // Using .data() is cleaner
            $('#' + idToCheck).prop('checked', true);

            // Prevent default action (if needed)
            return false;
        });

        $('.visibilitypicker').click(function() {
            // Remove 'active' class from all elements
            $('.visibilitypicker').removeClass('active');

            // Add 'active' class to the clicked element
            $(this).addClass('active');

            // Check the radio button or checkbox with the ID from 'data-val' attribute
            var idToCheck = $(this).attr('data-val'); // Using .data() is cleaner
            $('[name="visibility"]').val(idToCheck);

            // Prevent default action (if needed)
            return false;
        });


        $('.imgqtypicker:first-child').addClass('active');
        $('.image-contentnew').hide();
        $('.image-contentnew:first').show();

        $('.imgqtypicker').click(function() {
            $('.imgqtypicker').removeClass('active');
            $(this).addClass('active');
            $('.image-contentnew').hide();
            var activeTab = $(this).attr('data-imagetabs');
            $(activeTab).fadeIn();
            return false;
        });

        $('.dropify').dropify();

        // share


        $('#shahretext:first-child').addClass('active');
        $('.share-content').hide();
        $('.share-content:first').show();

        // Click function
        $('.ary').click(function() {
            // $('.removing').hide();
            $('.ary').removeClass('active');
            //  $('.shareimage').addClass('active');

            $(this).addClass('active');
            $('.share-content').hide();

            var activeTab = $(this).attr('data-sharetext');
            $(activeTab).fadeIn();
            $('[name="feed_type"]').val($(this).attr('data-val'));
            var activeTab1 = $(this).attr('data-sharetext2');
            $(activeTab1).fadeIn();
            return false;
        });

        // remove modal center clas
        // $('.modal-dialog').removeClass('modal-dialog-centered');
        $(document).ready(function() {
            let previousImage = null;

            $('.imagechange').click(function() {

                $('.tabbactive').addClass('active');
                $('.tabbactive2').removeClass('active');

                // Revert the previous image back to its default state
                if (previousImage !== null) {
                    previousImage.attr('data', previousImage.data('default'));
                }

                // Set the current image as the previous image
                previousImage = $(this);

                // Change the source of the clicked image
                $(this).attr('data', $(this).data('default'));
            });
            $('.imagechange2').click(function() {

                $('.tabbactive').removeClass('active');
                $('.tabbactive2').addClass('active');

                // Revert the previous image back to its default state
                if (previousImage !== null) {
                    previousImage.attr('data', previousImage.data('default'));
                }

                // Set the current image as the previous image
                previousImage = $(this);

                // Change the source of the clicked image
                $(this).attr('data', $(this).data('default'));
            });

            $('.grid_change').click(function() {
                $('#news_grid_style').val($(this).attr('data-value'))
                $('#feed_grid_style').val($(this).attr('data-value'))
            })
        });
        // edit
        // tabs start
        // Show the first tab and hide the rest
        $('#imagechangeone1:first-child').addClass('active');
        $('.image-changecontent').hide();
        $('.image-changecontent:first').show();

        // Click function
        $('.imagechangeclass').click(function() {
            var defaultimg = $(this).data('default');
            var originalimg = $(this).data('original');
            for (var i = 0; i < $('.imagechangeclass').length; i++) {
                $('.imagechangeclass').eq(i).attr('data', $('.imagechangeclass').eq(i).data('original'));
            }


            $(this).attr('data', defaultimg);
            $('.imagechangeclass').removeClass('active');
            $(this).addClass('active');
            $('.image-changecontent').hide();

            var activeTab = $(this).attr('data-imagechange');
            $(activeTab).fadeIn();
            return false;
        });


        // second
        $('#imagechangetwo1:first-child').addClass('active');
        $('.image-changecontent2').hide();
        $('.image-changecontent2:first').show();

        // Click function
        $('.imagechangetwo2').click(function() {
            var defaultimg = $(this).data('default2');
            var originalimg = $(this).data('original2');
            for (var i = 0; i < $('.imagechangetwo2').length; i++) {
                $('.imagechangetwo2').eq(i).attr('data', $('.imagechangetwo2').eq(i).data('original2'));
            }

            $(this).attr('data', defaultimg);


            $('.imagechangetwo2').removeClass('active');
            $(this).addClass('active');
            $('.image-changecontent2').hide();

            var activeTab = $(this).attr('data-imagechangetwo');
            $(activeTab).fadeIn();
            return false;
        });

        // third

        $('#image-contentfour1:first-child').addClass('active');
        $('.imagecontentfour').hide();
        $('.imagecontentfour:first').show();

        // Click function
        $('.imagechangefour').click(function() {
            var defaultimg = $(this).data('default3');
            var originalimg = $(this).data('original3');
            for (var i = 0; i < $('.imagechangefour').length; i++) {
                $('.imagechangefour').eq(i).attr('data', $('.imagechangefour').eq(i).data('original3'));
            }

            $(this).attr('data', defaultimg);



            $('.imagechangefour').removeClass('active');
            $(this).addClass('active');
            $('.imagecontentfour').hide();

            var activeTab = $(this).attr('data-contentfour2');
            $(activeTab).fadeIn();
            return false;
        });

        // video start


        // Show the first tab and hide the rest
        $('.videoa:first-child').addClass('active');
        $('.video-content1').hide();
        $('.video-content1:first-child').show();

        // Click function
        $('.videoa').click(function() {
            $('.videoa').removeClass('active');
            $(this).addClass('active');
            $('.video-content1').hide();

            var activeTab = $(this).attr('data-videotwo');
            $(activeTab).fadeIn();
            return false;
        });



        // video active 1

        // Show the first tab and hide the rest
        $('#videochangeone1:first-child').addClass('active');
        $('.video-changecontent').hide();
        $('.video-changecontent:first').show();

        // Click function
        $('.videochangeclass').click(function() {
            var defaultimg = $(this).data('default');
            var originalimg = $(this).data('original');
            for (var i = 0; i < $('.videochangeclass').length; i++) {
                $('.videochangeclass').eq(i).attr('data', $('.videochangeclass').eq(i).data('original'));
            }


            $(this).attr('data', defaultimg);
            $('.videochangeclass').removeClass('active');
            $(this).addClass('active');
            $('.video-changecontent').hide();

            var activeTab = $(this).attr('data-videochange');
            $(activeTab).fadeIn();
            return false;
        });


        // video active 2


        // Show the first tab and hide the rest
        $('#videochangetwo1:first-child').addClass('active');
        $('.video-changecontent2').hide();
        $('.video-changecontent2:first').show();

        // Click function
        $('.videochangetwo2').click(function() {
            var defaultimg = $(this).data('default2');
            var originalimg = $(this).data('original2');
            for (var i = 0; i < $('.videochangetwo2').length; i++) {
                $('.videochangetwo2').eq(i).attr('data', $('.videochangetwo2').eq(i).data('original2'));
            }


            $(this).attr('data', defaultimg);
            $('.videochangetwo2').removeClass('active');
            $(this).addClass('active');
            $('.video-changecontent2').hide();

            var activeTab = $(this).attr('data-videochangetwo');
            $(activeTab).fadeIn();
            return false;
        });

        // video active 3



        // Show the first tab and hide the rest
        $('#videocontentfour1:first-child').addClass('active');
        $('.videocontentfour').hide();
        $('.videocontentfour:first').show();

        // Click function
        $('.videochangefour').click(function() {
            var defaultimg = $(this).data('default3');
            var originalimg = $(this).data('original3');
            for (var i = 0; i < $('.videochangefour').length; i++) {
                $('.videochangefour').eq(i).attr('data', $('.videochangefour').eq(i).data('original3'));
            }


            $(this).attr('data', defaultimg);
            $('.videochangefour').removeClass('active');
            $(this).addClass('active');
            $('.videocontentfour').hide();

            var activeTab = $(this).attr('data-contentfour2');
            $(activeTab).fadeIn();
            return false;
        });
        // Get all color options
        const colorOptions = document.querySelectorAll('.color-option');

        // Loop through each color option
        colorOptions.forEach(colorOption => {
            // Add click event listener
            colorOption.addEventListener('click', function() {
                // Remove 'selected' class from all color options
                colorOptions.forEach(option => option.classList.remove('selected'));
                // Add 'selected' class to the clicked color option
                this.classList.add('selected');
            });
        });
        // Get all color options


        // image select
        $(document).ready(function() {
            $('.clickborder').click(function() {
                $('.clickborder').removeClass('selected');
                $(this).addClass('selected');
            });
        });

        //   image work
        $(document).ready(function() {
            $('.input_image_file').on('change', function() {
                let files = $(this).prop('files');
                let filesArr = Array.prototype.slice.call(files);
                if (filesArr[0].size > 2097152) {
                    $(this).val();
                    $(this).parent().removeClass('active');
                    $(this).parent().find('.label-upload-image').html(
                        "<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'><path fill='currentColor' d='M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7Z'/></svg>Upload File"
                    );
                    $(this).parent().find('.image-preview').attr('src', '');

                } else {
                    $(this).parent().addClass('active');
                    $(this).parent().find('.label-upload-image').html('');
                    $(this).parent().find('.image-preview').attr(
                        'src',
                        URL.createObjectURL(filesArr[0])
                    );
                    console.log(URL.createObjectURL(filesArr[0]));
                    console.log("helloworld");
                }
            })
            $('.btn-delete').on("click", function() {
                $(this).val('');
                $(this).parent().removeClass('active');
                $(this).parent().find('.label-upload-image').removeClass('d-none');
                $(this).parent().find('.label-upload-image').html(
                    "<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'><path fill='currentColor' d='M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7Z'/></svg>Upload File"
                );
                $(this).parent().find('.image-preview').attr('src', '');
            })
        })



        // video hover
        $(document).ready(function() {
            $('.videohoverclass').on('mouseenter', function() {
                $(this).parent().find('.videohover').css('visibility', 'visible');
            });
            $('.videohoverclass').on('mouseleave', function() {
                $(this).parent().find('.videohover').css('visibility', 'hidden');
            });


            $('.videohover').on('mouseenter', function() {
                $(this).css('visibility', 'visible');
            });
            $('.videohover').on('mouseleave', function() {
                $(this).css('visibility', 'hidden');
            });
        });


        $('#videohover').click(function() {
            $('#videoupl').trigger('click');
        });

        $('#videohover2one').click(function() {
            $('#videoupl2one').trigger('click');
        });

        $('#videohover2two').click(function() {
            $('#videoupl2two').trigger('click');
        });


        $('#videohover2twoone').click(function() {
            $('#videoupl22one').trigger('click');
        });

        $('#videohover2twotwo').click(function() {
            $('#videoupl22two').trigger('click');
        });
        $('#videohover3oneone').click(function() {
            $('#videoupl31two').trigger('click');
        });
        $('#videohover3onetwo').click(function() {
            $('#videoupl31one').trigger('click');
        });
        $('#videohover3onethree').click(function() {
            $('#videoupl31three').trigger('click');
        });

        $('#videohover3twoone').click(function() {
            $('#videoupl32one').trigger('click');
        });
        $('#videohover3twotwo').click(function() {
            $('#videoupl32two').trigger('click');
        });
        $('#videohover3twothree').click(function() {
            $('#videoupl32three').trigger('click');
        });

        $('#videohover4oneone').click(function() {
            $('#videoupl41one').trigger('click');
        });
        $('#videohover4onetwo').click(function() {
            $('#videoupl41two').trigger('click');
        });
        $('#videohover4onethree').click(function() {
            $('#videoupl41three').trigger('click');
        });
        $('#videohover4onefour').click(function() {
            $('#videoupl41four').trigger('click');
        });
        // four
        $('#videohover42one').click(function() {
            $('#videoupl42one').trigger('click');
        });
        $('#videohover42two').click(function() {
            $('#videoupl42two').trigger('click');
        });
        $('#videohover42three').click(function() {
            $('#videoupl42three').trigger('click');
        });
        $('#videohover42four').click(function() {
            $('#videoupl42four').trigger('click');
        });

        // tabs start
        // Show the first tab and hide the rest
        $('#imagechangeone1new:first-child').addClass('active');
        $('.image-changecontentimage').hide();
        $('.image-changecontentimage:first').show();

        // Click function
        $('.imagechangeclassimageone').click(function() {
            var defaultimg = $(this).data('default');
            var originalimg = $(this).data('original');
            for (var i = 0; i < $('.imagechangeclassimageone').length; i++) {
                $('.imagechangeclassimageone').eq(i).attr('data', $('.imagechangeclassimageone').eq(i).data(
                    'original'));
            }


            $(this).attr('data', defaultimg);
            $('.imagechangeclassimageone').removeClass('active');
            $(this).addClass('active');
            $('.image-changecontentimage').hide();

            var activeTab = $(this).attr('data-imagechangeimageone');
            $(activeTab).fadeIn();
            return false;
        });


        // second
        $('#imagechangetwo1new:first-child').addClass('active');
        $('.image-changecontent2new').hide();
        $('.image-changecontent2new:first').show();

        // Click function
        $('.imagechangetwo2image').click(function() {
            var defaultimg = $(this).data('default2');
            var originalimg = $(this).data('original2');
            for (var i = 0; i < $('.imagechangetwo2image').length; i++) {
                $('.imagechangetwo2image').eq(i).attr('data', $('.imagechangetwo2image').eq(i).data('original2'));
            }

            $(this).attr('data', defaultimg);


            $('.imagechangetwo2image').removeClass('active');
            $(this).addClass('active');
            $('.image-changecontent2new').hide();

            var activeTab = $(this).attr('data-imagechangetwoimage');
            $(activeTab).fadeIn();
            return false;
        });

        // third

        $('#imagecontentfour1new:first-child').addClass('active');
        $('.imagecontentfournew').hide();
        $('.imagecontentfournew:first').show();

        // Click function
        $('.imagechangefourclass').click(function() {
            var defaultimg = $(this).data('default3');
            var originalimg = $(this).data('original3');
            for (var i = 0; i < $('.imagechangefourclass').length; i++) {
                $('.imagechangefourclass').eq(i).attr('data', $('.imagechangefourclass').eq(i).data('original3'));
            }

            $(this).attr('data', defaultimg);
            $('.imagechangefourclass').removeClass('active');
            $(this).addClass('active');
            $('.imagecontentfournew').hide();

            var activeTab = $(this).attr('data-contentfour2new');
            $(activeTab).fadeIn();
            return false;
        });
        // yahan khatam
    </script>
    {{-- <script src="{{asset('assets/friendkit/js/get-comments.js')}}"></script> --}}
    <script>
        function getComments(data) {
            let comments = '';
            let commentData = '';
            data.data.comments.forEach(function(data, index) {
                let child = '';
                if (data.image && data.image.trim() !== "" && data.image !== "null" && data.image !== null) {
                    commentData = `<img src="{{ asset('storage') }}/${data.image}" width="80" height="80">`;
                } else if (data.emoji && data.emoji.trim() !== "" && data.emoji !== "null" && data.emoji !== null) {
                    commentData = `<img src="{{ asset('storage') }}/${data.emoji}" width="80" height="80">`;
                } else if (data.audio && data.audio.trim() !== "" && data.audio !== "null" && data.audio !== null) {
                    commentData = `<div id="comment-audio" style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; background-size: contain; cursor: pointer; border-radius: 10px; position: relative; height: 100%;">
                                   <audio src="{{asset('storage')}}/${data.audio}" id="comment-audio-input"></audio>
                                        <div style="height: 37px;width:100%; display: flex; align-items: center; justify-content: start; margin-top: 40px; border-radius: 10px; margin: 7px; align-self: flex-end;">
                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg') }}" alt="Play" class="img-fluid" id="comment-audio-play" style="height: 14px; width: 19px;">
                                            <img src="{{ asset('assets/svg/svg-dialog/Eo_circle_green_pause.svg') }}" alt="Pause" class="img-fluid" id="comment-audio-pause" style="height: 14px; width: 19px; display: none;">
                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">

                                            <span style="color: gray; margin-left: 5px;" id="comment-audio-duration">00:00</span>
                                        </div>
                                    </div>`;
                } else {
                    commentData = data.comment;
                }
                if (data.child_comments.length > 0) {

                    comments += `
                            <div class="media is-comment com_container" data-id="${data._id}">
                                <div class="comment-line"></div>
                                <figure class="media-left">
                                    <p class="image is-32x32">
                                        <img src="/public/storage/${data?.user?.image}" alt="" data-user-popover="${data?.user?.id}">
                                    </p>
                                </figure>

                                <div class="media-content pb-0">
                                    <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
                                        <div class="username">${data?.user?.name} ${data?.user?.last_name}</div>
                                        <span>${moment(data.created_at).fromNow()}</span>
                                    </div>
                                    <p class="mb-2">${commentData}</p>
                                </div>
                                <a href="javascript:void(0)" class="comment-reply" data-username="@${data?.user?.username}" data-parent_id="${data._id}"><i class="fas fa-reply"></i></a>
                            </div>`;

                    data.child_comments.forEach(function(child, index) {
                        ++index;

                        let height = 65;

                        if (child.image && child.image.trim() !== "" && child.image !== "null" && child.image !== null) {
                            commentData = `<img src="{{ asset('storage') }}/${child.image}" width="80" height="80">`;
                        } else if (child.emoji && child.emoji.trim() !== "" && child.emoji !== "null" && child.emoji !== null) {
                            commentData = `<img src="{{ asset('storage') }}/${child.emoji}" width="80" height="80">`;
                        } else if (child.audio && child.audio.trim() !== "" && child.audio !== "null" && child.audio !== null) {
                            commentData = `<div id="comment-audio" style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; background-size: contain; cursor: pointer; border-radius: 10px; position: relative; height: 100%;">
                                        <audio src="{{asset('storage')}}/${child.audio}" id="comment-audio-input"></audio>
                                                <div style="height: 37px;width:100%; display: flex; align-items: center; justify-content: start; margin-top: 40px; border-radius: 10px; margin: 7px; align-self: flex-end;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg') }}" alt="Play" class="img-fluid" id="comment-audio-play" style="height: 14px; width: 19px;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/Eo_circle_green_pause.svg') }}" alt="Pause" class="img-fluid" id="comment-audio-pause" style="height: 14px; width: 19px; display: none;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">

                                                    <span style="color: gray; margin-left: 5px;" id="comment-audio-duration">00:00</span>
                                                </div>
                                            </div>`;
                        } else {
                            commentData = child.comment;
                        }
                        if (child.child_comments.length > 0) {
                            height += 85 * child.child_comments.length;
                            let commentLine2 =
                                `<div class="comment-line-2" style="height:calc(${height}px)"></div>`;
                            let commentLine3 =
                                '<div class="comment-line-3"></div>';
                            comments +=
                                `<div class="media is-comment is-nested com_container"  data-id="${child._id}">
                                    ${index == data.child_comments.length ? '' : commentLine2}

                                    ${commentLine3}

                                    <div class="arrow-line 3"></div>
                                    <figure class="media-left">
                                        <p class="image is-32x32">
                                            <img src="/public/storage/${child?.user?.image}" alt="" data-user-popover="${child?.user?.id}">
                                        </p>
                                    </figure>

                                    <div class="media-content pb-0">
                                        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
                                            <div class="username">${child?.user?.name} ${child?.user?.last_name}</div>
                                            <span>${moment(child?.created_at).fromNow()}</span>
                                        </div>
                                        <p class="mb-2">${commentData}</p>
                                    </div>
                                    <a href="javascript:void(0)" class="comment-reply" data-username="@${child?.user?.username}" data-parent_id="${child._id}"><i class="fas fa-reply"></i></a>
                                </div>`;
                            child.child_comments.forEach(function(childUltra,
                                index3) {
                                ++index3

                                if (childUltra.image && childUltra.image.trim() !== "" && childUltra.image !== "null" && childUltra.image !== null) {
                                    commentData = `<img src="{{ asset('storage') }}/${childUltra.image}" width="80" height="80">`;
                                } else if (childUltra.emoji && childUltra.emoji.trim() !== "" && childUltra.emoji !== "null" && childUltra.emoji !== null) {
                                    commentData = `<img src="{{ asset('storage') }}/${childUltra.emoji}" width="80" height="80">`;
                                } else if (childUltra.audio && childUltra.audio.trim() !== "" && childUltra.audio !== "null" && childUltra.audio !== null) {
                                    commentData = `<div id="comment-audio" style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; background-size: contain; cursor: pointer; border-radius: 10px; position: relative; height: 100%;">
                                                <audio src="{{asset('storage')}}/${childUltra.audio}" id="comment-audio-input"></audio>
                                                        <div style="height: 37px;width:100%; display: flex; align-items: center; justify-content: start; margin-top: 40px; border-radius: 10px; margin: 7px; align-self: flex-end;">
                                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg') }}" alt="Play" class="img-fluid" id="comment-audio-play" style="height: 14px; width: 19px;">
                                                            <img src="{{ asset('assets/svg/svg-dialog/Eo_circle_green_pause.svg') }}" alt="Pause" class="img-fluid" id="comment-audio-pause" style="height: 14px; width: 19px; display: none;">
                                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">
                                                            <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg') }}" alt="Wave" class="img-fluid audio-wave" style="height: 57px; width: 40px;">

                                                            <span style="color: gray; margin-left: 5px;" id="comment-audio-duration">00:00</span>
                                                        </div>
                                                    </div>`;
                                } else {
                                    commentData = childUltra.comment;
                                }
                                let commentLine2 =
                                    `<div class="comment-line-2" ></div>`;
                                comments +=
                                    `<div class="media is-comment is-nested com_container" data-id="${childUltra._id}" style="margin-left: 38.5px !important">
                                    ${index3 == child.child_comments.length ? '' : commentLine2}

                                    <div class="arrow-line"></div>
                                    <figure class="media-left">
                                        <p class="image is-32x32">
                                            <img src="/public/storage/${childUltra?.user?.image}" alt="" data-user-popover="${childUltra?.user?.id}">
                                        </p>
                                    </figure>

                                    <div class="media-content pb-0">
                                        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
                                            <div class="username">${childUltra?.user?.name} ${childUltra?.user?.last_name}</div>
                                            <span>${moment(childUltra?.created_at).fromNow()}</span>
                                        </div>
                                        <p class="mb-2">${commentData}</p>
                                    </div>
                                    <a href="javascript:void(0)" class="comment-reply" data-username="@${childUltra?.user?.username}" data-parent_id="${childUltra.parent_id}"><i class="fas fa-reply"></i></a>
                                </div>`;
                            });

                        } else {
                            let commentLine2 =
                                `<div class="comment-line-2" style="height:calc(${height}px)"></div>`;
                            comments += `<div class="media is-comment is-nested com_container"  data-id="${child._id}">

                                    ${index == data.child_comments.length ? '' : commentLine2}

                                    <div class="arrow-line"></div>
                                    <figure class="media-left">
                                        <p class="image is-32x32">
                                            <img src="/public/storage/${child?.user?.image}" alt="" data-user-popover="${child?.user?.id}">
                                        </p>
                                    </figure>

                                    <div class="media-content pb-0">
                                        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
                                            <div class="username">${child?.user?.name} ${child?.user?.last_name}</div>
                                            <span>${moment(child?.created_at).fromNow()}</span>
                                        </div>
                                        <p class="mb-2">${commentData}</p>
                                    </div>
                                    <a href="javascript:void(0)" class="comment-reply" data-username="@${child?.user?.username}" data-parent_id="${child._id}"><i class="fas fa-reply"></i></a>
                                </div>`;
                        }

                    });
                } else {
                    comments += `
                            <div class="media is-comment" data-id="${data._id}">
                                <figure class="media-left">
                                    <p class="image is-32x32">
                                        <img src="/public/storage/${data?.user?.image}" alt="" data-user-popover="${data?.user?.id}">
                                    </p>
                                </figure>

                                <div class="media-content pb-0">
                                    <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
                                        <div class="username">${data?.user?.name} ${data?.user?.last_name}</div>
                                        <span>${moment(data.created_at).fromNow()}</span>
                                    </div>
                                    <p class="mb-2">${commentData}</p>
                                </div>
                                <a href="javascript:void(0)" class="comment-reply" data-username="@${data?.user?.username}" data-parent_id="${data._id}"><i class="fas fa-reply"></i></a>
                            </div>`;
                }


            });

            return comments;
        }
    </script>
    <script>

        $(document).ready(function () {
            // Use event delegation for dynamically added elements
            $('body').on("click", "#comment-audio-play", function () {
                let container = $(this).closest("#comment-audio");
                let audio = container.find('#comment-audio-input')[0]; // Get the associated hidden audio element
                let playButton = container.find("#comment-audio-play");
                let pauseButton = container.find("#comment-audio-pause");
                let waves = container.find(".audio-wave");
                let durationDisplay = container.find("#comment-audio-duration");

                if (audio.paused) {
                    // Pause any other playing audio
                    $("audio").each(function () {
                        this.pause();
                        $(this).next("#comment-audio").find("#comment-audio-play").show();
                        $(this).next("#comment-audio").find("#comment-audio-pause").hide();
                        $(this).next("#comment-audio").find(".audio-wave").css("opacity", "0.5");
                    });

                    // Play selected audio
                    audio.play();
                    playButton.hide();
                    pauseButton.show();
                    waves.css("opacity", "1"); // Highlight wave animation

                    // Update duration dynamically
                    audio.addEventListener("timeupdate", function () {
                        let minutes = Math.floor(audio.currentTime / 60);
                        let seconds = Math.floor(audio.currentTime % 60);
                        durationDisplay.text(`${minutes}:${seconds < 10 ? "0" : ""}${seconds}`);
                    });

                    // Reset UI when audio ends
                    audio.addEventListener("ended", function () {
                        playButton.show();
                        pauseButton.hide();
                        waves.css("opacity", "0.5");
                    });
                }
            });

            $(document).on("click", "#comment-audio-pause", function () {
                let container = $(this).closest("#comment-audio");
                let audio = container.prev("audio")[0];
                let playButton = container.find("#comment-audio-play");
                let pauseButton = container.find("#comment-audio-pause");
                let waves = container.find(".audio-wave");

                audio.pause();
                playButton.show();
                pauseButton.hide();
                waves.css("opacity", "0.5");
            });

            // Load audio duration when the comment is appended
            $(document).on("loadedmetadata", "audio", function () {
                let container = $(this).next("#comment-audio");
                let durationDisplay = container.find("#comment-audio-duration");
                let audio = this;
                let minutes = Math.floor(audio.duration / 60);
                let seconds = Math.floor(audio.duration % 60);
                durationDisplay.text(`${minutes}:${seconds < 10 ? "0" : ""}${seconds}`);
            });
        });
    </script>
    <script>
        function closeFancyBox() {
            $('body').css('position', 'relative');
            $('.comments-list').html('');
        }

        $('.view-post').click(function() {
            $('#feed_id').val($(this).attr('data-id'));
            $.ajax({
                url: "{{ route('get.comments') }}",
                type: 'GET',
                data: {
                    feed_id: $('#feed_id').val(),
                    feed_type: $('#feed_type').val()
                },
                success: function(response) {
                    let comments = '';
                    $('.comment-controls img').attr('src', '/public/storage/' + response?.data?.user
                        ?.image);
                    $('.comment-controls img').css('display', 'block');
                    $('.fancybox-caption__body .header img').attr('src', '/public/storage/' + response
                        ?.data
                        ?.feed?.user?.image);
                    $('.fancybox-caption__body .header img').css('display', 'block')
                    $('.fancybox-caption__body .user-meta .name').text(response?.data?.feed?.user
                        ?.name + ' ' + response?.data?.feed?.user?.last_name);
                    $('.post-date').text(moment(response?.data?.feed?.created_at).fromNow())
                    $('.views-count-1').text(response?.data?.comments_count);

                    comments = getComments(response);

                    if (response.data.liked == true) {
                        $('.like-btn').addClass('liked');
                    } else {
                        $('.like-btn').removeClass('liked');
                    }
                    $('.likes-count span').text(response?.data?.like_count);
                    $('.comments-list').html(comments);
                    $('.comments-list').animate({
                        scrollTop: $('.comments-list')[0].scrollHeight
                    }, 500);
                    $('body').css('position', 'fixed');
                }

            });
        })

        $('body').on('click', '.send-comment', function() {
            $.ajax({
                url: "{{ route('post.comments') }}",
                type: 'POST',
                data: {
                    comment: $('.comment-textarea').val(),
                    feed_id: $('#feed_id').val(),
                    feed_type: $('#feed_type').val(),
                    parent_id: $('#comment_parent_id').val(),
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    let comments = '';

                    comments = getComments(response);

                    if (response.data.liked == true) {
                        $('.like-btn').addClass('liked');
                    } else {
                        $('.like-btn').removeClass('liked');
                    }
                    $('.likes-count span').text(response?.data?.like_count);
                    $('.views-count-1').text(response.data.comments_count);
                    $('.comment-textarea').val('');
                    $('.comments-list').html(comments);
                    if ($('#comment_parent_id').val() == "" || $('#comment_parent_id').val() == null) {
                        $('.comments-list').animate({
                            scrollTop: $('.comments-list')[0].scrollHeight
                        }, 500);
                    }
                    $('#comment_parent_id').val('');
                }

            });
        })

        $('body').on('click', '.comment-reply', function() {
            $('.comment-textarea').val('');
            $('.comment-textarea').attr('autofocus', true);
            $('.comment-textarea').val($(this).attr('data-username') + ' ');
            $('#comment_parent_id').val($(this).attr('data-parent_id'));
        });


        $(document).on('click', '.like-btn', function() {
            let button = $(this);
            let postId = $('#feed_id').val();

            $.ajax({
                url: "{{ route('post.like') }}",
                type: "POST",
                data: {
                    feed_id: postId,
                    feed_type: $('#feed_type').val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.data.liked == true) {
                        button.addClass('liked');
                    } else {
                        button.removeClass('liked');
                    }
                    $('.likes-count span').text(response?.data?.like_count);
                },
                error: function(xhr) {
                    alert("Something went wrong!");
                }
            });
        });
    </script>

    {{-- <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher("{{env('PUSHER_APP_KEY')}}", {
            cluster: "{{env('PUSHER_APP_CLUSTER')}}"
        });

        var channel = pusher.subscribe('admin_feeds-channel');
        channel.bind('admin_feeds-event', function(data) {
            let comments = '';
            comments = getComments(data);
            $('.views-count-1').text(data.data.comments_count);
            $('.comments-list').html(comments);
            $('.likes-count span').text(data?.data?.like_count);
        });
    </script> --}}
@endsection
@endsection
