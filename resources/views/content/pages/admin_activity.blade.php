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

        .fancybox-caption {
            position: fixed;
            right: 0px !important;
            background: #fff !important;

            visibility: visible !important;
            opacity: 100% !important;

        }

        .fancybox-bg,
        .fancybox-inner,
        .fancybox-outer,
        .fancybox-stage {
            right: 350px !important;
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

        .social-count {
            margin-left: auto;
            display: flex;
            align-items: stretch;
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

        /*.fancybox-content{*/
        /*    transform: translate(295px, 6px) scale(1, 1) !important;*/
        /*    width: 800.597px !important;*/
        /*    height: 534px !important;*/
        /*}*/
        .fancybox-container {
            width: 100% !important;
        }

        /*.fancybox-slide {*/
        /*    left:-102px;*/
        /*    top:200px;*/
        /*}*/
        /*meow*/
        .fancybox-custom-layout .fancybox-stage {
            right: 394px !important;
        }

        .fancybox-stage {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            margin: auto !important;
            width: 100% !important;

        }

        .fancybox-bg,
        .fancybox-inner,
        .fancybox-outer,
        .fancybox-stage {
            right: 394px !important;
        }

        .fancybox-caption {
            position: fixed;
            right: 46px !important;
            width: 348px !important;
            background: #fff !important;
            visibility: visible !important;
            opacity: 100% !important;
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
            width: 150px;
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

    <link href="
https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css
" rel="stylesheet">
    <link href="
https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css
" rel="stylesheet">
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
    <script src="
                                            https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js
                                            "></script>
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
    {{-- <script src="{{ asset('assets/friendkit/js/popovers-users.js') }}"></script> --}}
    <script src="{{ asset('assets/friendkit/js/popovers-pages.js') }}"></script>

    <script src="{{ asset('assets/friendkit/js/script.js') }}?v={{ time() }}"></script>

    <!--<script src="{{ asset('assets/friendkit/js/lightbox.js') }}"></script>-->

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->
    <script src="{{ asset('assets/friendkit/js/feed.js') }}"></script>

    <script src="{{ asset('assets/friendkit/js/webcam.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/compose.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/autocompletes.js') }}"></script>
    <!--hero-->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
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
            <form id="wizard-create-deal-form" onsubmit="return false">
                <!-- Deal Type -->
                <div id="deal-type" class="content active fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row">

                                <div class="col-md mb-md-0 mb-2" style="display:none;">
                                    <div class="form-check card custom-option-icon hki custom-options" id="hki">
                                        <a href="javascript:void(0)"
                                            class="form-check-label custom-option-content news-modal-btn"
                                            for="customRadioPercentage" data-bs-toggle="modal"
                                            data-bs-target="#requestpopup">
                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/icons/newspaper.svg') }}" class="my-2"
                                                    width="40" alt="">
                                                <span class="custom-option-title">Create News</span>
                                                <small>Share News with your Community</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPercentage" checked="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-2" style="display:none;">
                                    <div class="form-check  card custom-option-icon hki custom-options">
                                        <a href="javascript:void(0)" class="form-check-label custom-option-content "
                                            data-bs-toggle="modal" data-bs-target="#requestpopuptwo" for="customRadioFlat">
                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/icons/network-connection.svg') }}"
                                                    class="my-2" width="40" alt="">
                                                <span class="custom-option-title"> Add Feeds </span>
                                                <small>Share a Feed with Community</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioFlat">
                                        </a>
                                    </div>
                                </div>


                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check  card custom-option-icon hki custom-options">
                                        <a href="javascript:void(0)" class="form-check-label custom-option-content popcall1"
                                            data-bs-toggle="modal" data-bs-target="#modal1" for="customRadioPrime">

                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/svg-dialog/Group 1000008347.svg') }}"
                                                    class="my-2 pop-img" width="40" alt="">
                                                <span class="custom-option-title pop-heading"> System </span>
                                                <small class="pop-txt">Share System info</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check  card custom-option-icon hki custom-options">

                                        <a href="javascript:void(0)"
                                            class="form-check-label custom-option-content popcall1" data-bs-toggle="modal"
                                            data-bs-target="#modal10" for="customRadioPrime">
                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/svg-dialog/Group 1000008357.svg') }}"
                                                    class="my-2 pop-img" width="40" alt="">
                                                <span class="custom-option-title pop-heading"> Donation </span>
                                                <small class="pop-txt">Create Donation</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check  card custom-option-icon hki custom-options">

                                        <a href="javascript:void(0)"
                                            class="form-check-label custom-option-content popcall1" data-bs-toggle="modal"
                                            data-bs-target="#modal3" for="customRadioPrime">
                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/svg-dialog/Group.svg') }}"
                                                    class="my-2 pop-img" width="40" alt="">
                                                <span class="custom-option-title pop-heading"> Surveys </span>
                                                <small class="pop-txt">Create Surveys</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check  card custom-option-icon hki custom-options">

                                        <a href="javascript:void(0)"
                                            class="form-check-label custom-option-content popcall1" data-bs-toggle="modal"
                                            data-bs-target="#modal4" for="customRadioPrime">
                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/svg-dialog/Group 1000008455.svg') }}"
                                                    class="my-2 pop-img" width="40" alt="">
                                                <span class="custom-option-title pop-heading"> Greetings </span>
                                                <small class="pop-txt">Share Greetings</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check  card custom-option-icon hki custom-options">

                                        <a href="javascript:void(0)" class="form-check-label custom-option-content "
                                            data-bs-toggle="modal" data-bs-target="#system_popup" for="customRadioPrime">
                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/svg-dialog/Ñëîé_1.svg') }}"
                                                    class="my-2 pop-img" width="40" alt="">
                                                <span class="custom-option-title pop-heading"> Events </span>
                                                <small class="pop-txt">Share Events</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-4">
                                    <div class="form-check  card custom-option-icon hki custom-options">

                                        <a href="javascript:void(0)" class="form-check-label custom-option-content "
                                            data-bs-toggle="modal" data-bs-target="#system_popup" for="customRadioPrime">
                                            <span class="custom-option-body">
                                                <img src="{{ asset('assets/svg/svg-dialog/Group 1000008478.svg') }}"
                                                    class="my-2 pop-img" width="40" alt="">
                                                <span class="custom-option-title pop-heading"> User </span>
                                                <small class="pop-txt">Warn SOS</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-2">
                                    <div class="form-check  card custom-option-icon hki custom-options">

                                        <a href="javascript:void(0)" class="form-check-label custom-option-content "
                                            data-bs-toggle="modal" data-bs-target="#requestpopupnew"
                                            for="customRadioPrime">

                                            <span class="custom-option-body">
                                                <img class="my-2 pop-img" width="40" alt=""
                                                    src="{{ asset('assets/svg/icons/onair.png') }}">
                                                <span class="custom-option-title pop-heading"> Live Stream </span>
                                                <small class="pop-txt">Go Live now</small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio"
                                                value="" id="customRadioPrime">
                                        </a>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <!-- Deal Details -->
                <div id="deal-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="row g-3">
                        <div class="col-sm-6 fv-plugins-icon-container">
                            <label class="form-label" for="dealTitle">Deal Title</label>
                            <input type="text" id="dealTitle" name="dealTitle" class="form-control"
                                placeholder="Black friday sale, 25% off">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="col-sm-6 fv-plugins-icon-container">
                            <label class="form-label" for="dealCode">Deal Code</label>
                            <input type="text" id="dealCode" name="dealCode" class="form-control"
                                placeholder="25PEROFF">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="dealDescription">Deal Description</label>
                            <textarea id="dealDescription" name="dealDescription" class="form-control" rows="5"
                                placeholder="To sell or distribute something as a business deal"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="dealOfferedItem">Offered Items</label>
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
                                            dir="ltr" data-select2-id="2" style="width: auto;"><span
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
                                                                placeholder="Select an offered item" style="width: 0px;">
                                                        </li>
                                                    </ul>
                                                </span></span><span class="dropdown-wrapper"
                                                aria-hidden="true"></span></span></div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="dealCartCondition">Cart condition</label>
                                    <select class="form-select" id="dealCartCondition" name="dealCartCondition">
                                        <option disabled="" value="">Select cart condition</option>
                                        <option value="all">Cart must contain all selected Downloads</option>
                                        <option value="any">Cart needs one or more of the selected Downloads
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="dealDuration" class="form-label">Deal Duration</label>
                            <input type="text" id="dealDuration" name="dealDuration"
                                class="form-control flatpickr-input" placeholder="YYYY-MM-DD to YYYY-MM-DD"
                                readonly="readonly">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Notify Users</label>
                            <div class="row">
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="dealNotifyEmail"
                                            name="dealNotifyEmail" value="email">
                                        <label class="form-check-label" for="dealNotifyEmail">Email</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="dealNotifySMS"
                                            name="dealNotifySMS" value="sms">
                                        <label class="form-check-label" for="dealNotifySMS">SMS</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="dealNotifyPush"
                                            name="dealNotifyPush" value="push">
                                        <label class="form-check-label" for="dealNotifyPush">Push
                                            Notification</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev">
                                <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Deal Usage -->
                <div id="deal-usage" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="dealUserType">User Type</label>
                            <select id="dealUserType" name="dealUserType" class="form-select">
                                <option selected="" disabled="" value="">Select user type</option>
                                <option value="all">All</option>
                                <option value="registered">Registered</option>
                                <option value="unregistered">Unregistered</option>
                                <option value="prime-members">Prime members</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="dealMaxUsers">Max Users</label>
                            <input type="number" id="dealMaxUsers" name="dealMaxUsers" class="form-control"
                                placeholder="500">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="dealMinimumCartAmount">Minimum Cart Amount</label>
                            <input type="number" id="dealMinimumCartAmount" name="dealMinimumCartAmount"
                                class="form-control" placeholder="$99">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="dealPromotionalFee">Promotional Fee</label>
                            <input type="number" id="dealPromotionalFee" name="dealPromotionalFee" class="form-control"
                                placeholder="$9">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="dealPaymentMethod">Payment Method</label>
                            <select id="dealPaymentMethod" name="dealPaymentMethod" class="form-select">
                                <option selected="" disabled="" value="">Select payment method
                                </option>
                                <option value="any">Any</option>
                                <option value="credit-card">Credit Card</option>
                                <option value="net-banking">Net Banking</option>
                                <option value="wallet">Wallet</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="dealStatus">Deal Status</label>
                            <select id="dealStatus" name="dealStatus" class="form-select">
                                <option selected="" disabled="" value="">Select status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="suspend">Suspend</option>
                                <option value="abandon">Abandone</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="switch">
                                <input type="checkbox" class="switch-input" id="dealLimitUser" name="dealLimitUser">
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label"> Limit this discount to a single-use per
                                    customer?</span>
                            </label>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button class="btn btn-primary btn-next"> <span
                                    class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i
                                    class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Review & Complete -->
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
                                                <td class="px-0 py-1"><span class="fw-medium">2021-07-14</span> to
                                                    <span class="fw-medium">2021-07-30</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <img class="img-fluid w-px-200"
                                src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}"
                                alt="deal image cap" data-app-light-img="illustrations/man-with-laptop-light.png"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png">
                        </div>
                        <div class="col-md-12">
                            <label class="switch">
                                <input type="checkbox" class="switch-input" id="dealConfirmed" name="dealConfirmed">
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label"> I have confirmed the deal details.</span>
                            </label>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button class="btn btn-success btn-submit btn-next">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--top bar-->

    <style>
        .pop_div {

            background-color: white;
            border-radius: 10px;
            padding: 5px;
        }

        .pop_sub {
            height: 30;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            top: 10px;
        }

        .pop_head {
            background-color: #f8f9fa;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;

        }

        .pop_tit {
            display: flex;
            align-items: start;
            align-items: center;
        }

        .pop_heading {
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: flex-start;
            margin-left: 5px;
            gap: 8px;
        }

        .pop_head_line {
            font-family: Genos;
            font-size: 20px;
            text-underline-position: from-font;
            text-decoration-skip-ink: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .pop_title {
            border-radius: 45%;
            background: #00000066;

        }

        .pop_description {
            font-size: 14px;
            font-weight: 400;
            color: gray;
            text-align: left;
            background: #F7F7F7;
            padding: 7px;
            font-family: Genos;
            margin-top: 7px;
            margin-bottom: 7px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: left;
        }

        .pop_main_image {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .pop_overlay {
            position: absolute;
            bottom: 10px;
            left: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            background: #1C274C99;
            gap: 5px;
        }
    </style>

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="view-wrapper">
                <div id="main-feed" class="container">
                    <div id="activity-feed" class="view-wrap true-dom">

                        <div class="columns">
                            <div style="padding:0px;" class="column is-3 ">
                                <div class="card">
                                    <div class="card-body p-0 border-none">
                                        <div class="list-group nav nav-tab" role="tablist">

                                            <a class="list-group-item list-group-item-action {{ request('type') == 'all-news' ? 'active' : '' }}"
                                                href="#tab5">
                                                Popup Feeds<br>
                                                <small class="text-muted">Admin has Popup</small>
                                                <a class="list-group-item list-group-item-action {{ request('type') == 'admin-feeds' ? 'active' : '' }}"
                                                    href="#tab1">
                                                    Admin Feeds<br>
                                                    <small class="text-muted">Admin has Post</small>
                                                </a>

                                                <a class="list-group-item list-group-item-action {{ request('type') == 'all-news' ? 'active' : '' }}"
                                                    href="#tab2">
                                                    All News<br>
                                                    <small class="text-muted">Admin has create</small>
                                                </a>
                                                <a class="list-group-item list-group-item-action {{ request('type') == 'all-news' ? 'active' : '' }}"
                                                    href="#tab3">
                                                    Go live Soon<br>
                                                    <small class="text-muted">Planed Live Stream</small>
                                                </a>
                                                <a class="list-group-item list-group-item-action {{ request('type') == 'all-news' ? 'active' : '' }}"
                                                    href="#tab4">
                                                    Admin Live Stream<br>
                                                    <small class="text-muted">Live Stream by Admin</small>
                                                </a>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab post feeds -->

                            <div style="padding-top:0px;" class="column column is-6 tab-content" id="tab5">

                                @foreach ($popfeeds as $key => $feed)
                                    <div id="feed-post-{{ $key }}" class="card is-post">
                                        <!-- pop started -->

                                        <div class="pop_div">
                                            <div class="pop_sub">

                                                <div class="pop_head">
                                                    <div class="pop_tit">
                                                        <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg') }}"
                                                            style="width: 28px; height: 28px; object-fit: cover">
                                                        <div class="pop_heading" style="">
                                                            <div class="pop_head_line" style="

                        ">
                                                                <div class="pop_title"
                                                                    style="
                            "></div>

                                                                YekBun Team

                                                                <div
                                                                    style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      ">
                                                                </div>
                                                            </div>

                                                            <div
                                                                style="
                    width: 150px;
                    height: 6px;
                    font-family: Genos;
font-size: 14px;
text-align: left;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">

                                                                {{ \Carbon\Carbon::parse($feed->date_start)->format('d M y') }}

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg') }}"
                                                        style="width: 25px; height: 27px; object-fit: cover; border: none;"
                                                        class="img-thumbnail">
                                                </div>

                                                <!-- delete -->
                                                <form action="delete_popfeed"
                                                    onsubmit="confirmAction(event, () => event.target.submit())"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="delid" value="{{ $feed->id }}" />
                                                    <div class="pop_action_div">
                                                        <button class="pop_action">
                                                            <img type="submit"
                                                                src="{{ asset('assets/svg/delete.svg') }}"
                                                                class="pop_action_image">
                                                        </button>
                                                </form>

                                                @php
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

                                                @endphp



                                                <a href="javascript:void(0)" class="pop_action edit_popup1"
                                                    data-bs-toggle="modal" data-bs-target="#modal{{ $modalnumber }}"
                                                    for="customRadioPrime" data-id="{{ $feed->_id }}"
                                                    data-name="{{ $feed->title }}" data-image="{{ $feed->image }}"
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
                                                    data-icon2="{{ $icon2 }}" data-icon3="{{ $icon3 }}">
                                                    <img src="{{ asset('assets/svg/edit.svg') }}"
                                                        class="pop_action_image">
                                                </a>
                                            </div>

                                        </div>

                                        <div class="pop_description">
                                            {{ $feed->title }}
                                        </div>

                                        <div class="pop_main_image pop_main_image_{{ $feed->_id }}">
                                            <img src="{{ asset('storage/'.$feed->image) }}"
                                                style="width: 100%; object-fit: cover; border-radius: 7px; padding: 0; display: block;">


                                            <div class="audio-icon"
                                                style="position: absolute;
                bottom: 10px;
                right: 10px;
                background: rgba(0, 0, 0, 0.6);
                width: 30px;
                height: 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                cursor: pointer;">
                                                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group 1000008129.svg') }}"
                                                    style="width: 20px; height: 20px; margin: 5px; border-radius: 5px; object-fit: cover; color:#FFFFFF;">
                                            </div>
                                        </div>


                                        <div
                                            style="
            height: 29px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 5px;
            gap: 10px;
            margin-top: 7px;
          ">
                                            <div
                                                style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              width: 200px;
              height: 100%;
            ">
                                                <div
                                                    style="
                display: flex;
                align-items: center;
                gap: 3px;
                height: 100%;
              ">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Eye%20Scan.svg') }}"
                                                        style="width: 100%; height: 100%; object-fit: cover">
                                                    <span style="font-weight: 400; font-family: Genos;
">123</span>
                                                </div>

                                                <div
                                                    style="
                display: flex;
                align-items: center;
                gap: 3px;
                height: 100%;
              ">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg') }}"
                                                        style="width: 100%; height: 100%; object-fit: cover">
                                                    <span style="font-weight: 400; font-family: Genos;
">123</span>
                                                </div>

                                                <div
                                                    style="
                display: flex;
                align-items: center;
                gap: 3px;
                height: 100%;
              ">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Pen%202.svg') }}"
                                                        style="width: 100%; height: 100%; object-fit: cover">
                                                    <span style="font-weight: 400; font-family: Genos;
">123</span>
                                                </div>

                                                <div
                                                    style="
                display: flex;
                align-items: center;
                gap: 3px;
                height: 100%;
              ">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/microphone-2.svg') }}"
                                                        style="width: 100%; height: 100%; object-fit: cover">
                                                    <span style="font-weight: 400; font-family: Genos;
">123</span>
                                                </div>
                                            </div>

                                            <div
                                                style="
              display: flex;
              align-items: center;
              gap: 2px;
              height: 100%;
            ">
                                                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002356.svg') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;
">
                                                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002630.svg') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;;
">
                                                <span style="font-weight: 400; font-family: Genos;
">123</span>
                                            </div>
                                        </div>


                                        <div
                                            style="

            height: 30px;
            display: flex;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
          ">
                                            <div
                                                style="
              width: 120px;
              height: 30px;
              display: flex;
              align-items: center;
              gap: 5px;
              height: 100%;
            ">
                                                <div
                                                    style="padding: 3px;
                border-radius: 4px;
                width: 30px;
                height: 30px;
                background: #F2F2F2;
                display: flex;
                align-items: center;
                justify-content: center;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg') }}"
                                                        style="width: 24px; height: 24px; object-fit: cover">
                                                </div>

                                                <div
                                                    style="padding: 3px;
                border-radius: 4px;
                width: 30px;
                height: 30px;
                background: #F2F2F2;
                display: flex;
                align-items: center;
                justify-content: center;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002356.svg') }}"
                                                        style="width: 24px; height: 24px; object-fit: cover">
                                                </div>
                                                <div
                                                    style="padding: 3px;
                border-radius: 4px;
                width: 30px;
                height: 30px;
                background: #F2F2F2;
                display: flex;
                align-items: center;
                justify-content: center;">
                                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/microphone-2.svg') }}"
                                                        style="width: 24px; height: 24px; object-fit: cover">
                                                </div>
                                            </div>

                                            <div
                                                style="
              background-color: #f8f9fa;
              border-radius: 7px;
              height: 30px;
              width: auto;
              display: flex;
              align-items: center;
              gap: 5px;
              font-size: 10px;
              font-family: Genos;
              padding: 5px;
            ">
                                                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Pen%202.svg') }}"
                                                    style="width: 24px; height: 24px">

                                                <span>add a comment here</span>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- pop ended -->
                            </div>
                            @endforeach
                        </div>

                        <!-- tab post feeds -->


                        {{-- Old Feeds Section --}}


                        <div style="padding-top:0px;" class="column column is-6 tab-content" id="tab4">

                            {{-- <div id="admin-live-1" class="card is-post">
                                    <!-- Main wrap -->
                                    <div class="content-wrap">
                                        <!-- Post header -->
                                        <div class="card-heading">
                                            <!-- User meta -->
                                            <div class="user-block">
                                                <div class="image">
                                                    <img src="{{ asset('assets/img/logo.png') }}"
                                                        data-demo-src="{{ asset('assets/img/logo.png') }}"
                                                        data-user-popover="1" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="d-flex"><a href="#">Yekbun</a><i
                                                            class="bx bx-world ml-2"></i></span>
                                                    <span class="time">. CEO .</span>
                                                </div>
                                            </div>
                                            <!-- Right side dropdown -->
                                            <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-more-vertical">
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
                                                                    <h3>Remove Feed</h3>
                                                                    <small>Feed Removed Only</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <div class="media">
                                                                <div class="media-content">
                                                                    <h3>Repost the Feed</h3>
                                                                    <small>Post it again</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Post header -->

                                        <!-- Post body -->
                                        <div class="card-body">
                                            <!-- Post body text -->
                                            <div class="post-text">
                                                <p>
                                                    Yesterday with <a href="#">@Karen Miller</a> and
                                                    <a href="#">@Marvin Stemperd</a> at the
                                                    <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally
                                                    fantastic!
                                                    People were really excited about this one!
                                                </p>
                                            </div>
                                            <!-- Featured image -->
                                            <div class="post-image">
                                                <a data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="{{ asset('assets/img/feed-image.jpeg') }}"
                                                    href="{{ asset('assets/img/feed-image.jpeg') }}"
                                                    data-demo-href="{{ asset('assets/img/feed-image.jpeg') }}">
                                                    <img src="{{ asset('assets/img/feed-image.jpeg') }}"
                                                        data-demo-src="{{ asset('assets/img/feed-image.jpeg') }}"
                                                        alt="">
                                                </a>
                                                <!-- Action buttons -->

                                            </div>
                                        </div>
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                                        <div class="card-footer">
                                            <!-- Followers avatars -->
                                            <div class="likers-group">
                                                <img src="{{ asset('assets/svg/icons/haha-emoji.svg') }}"
                                                    data-demo-src="{{ asset('assets/svg/icons/haha-emoji.svg') }}"
                                                    data-user-popover="1" alt="">
                                                <img src="{{ asset('assets/svg/icons/love-emoji.svg') }}"
                                                    data-demo-src="{{ asset('assets/svg/icons/love-emoji.svg') }}"
                                                    data-user-popover="4" alt="">
                                                <img src="{{ asset('assets/svg/icons/sad-emoji.svg') }}"
                                                    data-demo-src="{{ asset('assets/svg/icons/sad-emoji.svg') }}"
                                                    data-user-popover="5" alt="">
                                            </div>
                                            <!-- Followers text -->
                                            <div class="likers-text">

                                            </div>
                                            <!-- Post statistics -->
                                            <div class="social-count">
                                                <div class="shares-count" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/Share.svg') }}" width="15"
                                                        alt="">
                                                    <span>9</span>
                                                </div>
                                                <div class="likes-count" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/views.svg') }}" width="15"
                                                        alt="">
                                                    <span>27</span>
                                                </div>
                                                <div class="comments-count is-comment-light" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/Comments.svg') }}"
                                                        width="15" alt="">
                                                    <span>3</span>
                                                </div>
                                                <div class="comments-count" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/voice.svg') }}" width="15"
                                                        alt="">
                                                    <span>3</span>
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
                                                <img src="{{ asset('assets/img/exclamation-mark.png') }}"
                                                    style="position: absolute;top:1rem;right:3.5rem" width="15"
                                                    alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /Post #1 Comments -->
                                </div> --}}
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>

    <x-modal id="requestpopup" size="lg">
        @include('content.include.live_stream.createnews')
    </x-modal>

    <x-modal id="requestpopuptwo" size="md">
        @include('content.include.live_stream.createmusictwo')
    </x-modal>

    <x-modal id="requestpopupnew" size="lg">
        @include('content.include.live_stream.golive')
    </x-modal>

    <!-- system modal

            <x-modal
        id="modal1"
        title="Add Member"
        saveBtnText="Create"
        saveBtnType="submit"
        saveBtnForm="createForm"
        size="md"
        :show="old('showCreateFormModal') ? true : false"
      >
        @include('content.pages.includes.system_form')
      </x-modal>-->
    @include('content.pages.includes.fullpopup')
    <div class="modal fade popmodal" id="modal1__old" tabindex="-1" aria-labelledby="Modlal1">
        <div id="moo" class="modal-dialog modal-dialog-centered">
            <div class="modal-content"
                style="Width:375px; Height:812px; background-color: #f8f9fa;
        padding: 5px;
        border-radius: 10px;">
                <div class="modal-body"
                    style="
              position: relative;
              border-radius: 10px;
              border: 2px dashed #356899
            ">
                    <div
                        style="
                width: Fixed (333px)px;
                height: Hug (761.24px)px;
                display: flex;
                border-radius: 10px;
                flex-direction: column;
                align-items: center;
                gap: 110px;

              ">

                        <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008335.svg') }}"
                            alt="Illustration" data-target="#modal6" data-bs-dismiss="modal"
                            style="height: 250px; width: 100%" />

                        <div id="previewContainerWrapper" style="width: 100%; display: flex; gap: 10px; flex-wrap: wrap">
                            <div class="previewContainer"
                                style="
                    width: 100%;
                    height: 81px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-size: contain;
                    cursor: pointer;
                    border-radius: 10px;
                  ">
                                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg') }}"
                                    alt="Illustration" data-target="#modal6" data-bs-dismiss="modal"
                                    style="height: 96px; width: 69%" id="addImageButton" />

                                <input type="file" class="fileInput" multiple accept="image/*"
                                    style="
                      opacity: 0;
                      width: 100%;
                      height: 100%;
                      position: absolute;
                      cursor: pointer;
                    " />
                            </div>
                        </div>
                    </div>

                    <div
                        style="
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center; /* Centrage horizontal */
            gap: 50px; /* Réduit l'écart entre l'image et le texte */
            background-color: #fff;
            margin-top: 230px;
            border-radius: 10px;
            margin-left:3%;
            margin-right:3%;
            padding: 5px; /* Ajoute un peu de padding pour un espacement interne */
          ">
                        <!-- Image à gauche -->
                        <div style="display: flex; align-items: center; justify-content: center;">
                            <img id="displayImage2"
                                src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg') }}"
                                alt="Illustration" class="img-fluid"
                                style="height: 40px; width: 41px; cursor: pointer;margin-left: 2px;" />
                            <input type="file" id="imageUploader2" accept="image/*" style="display: none;" />
                        </div>

                        <!-- Texte à droite -->
                        <div
                            style="
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center; /* Centrage vertical */
              gap: 2px;
              font-family: Genos;
            ">
                            <h4 style="margin: 0; text-align: center;">Another Selection</h4>
                            <h6 style="margin: 0; text-align: center;">File Size H 812 - W 350</h6>
                            <p style="margin: 0; text-align: center;">MP4-JPG Or PNG - <span style="color: red;">Max 5
                                    Image</span></p>
                        </div>
                    </div>



                    <div
                        style="
                position: absolute;
                bottom: -10%;
                left: 100px;
                width: 202px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
              ">
                        <div id="backButton" data-target="#popupModal"
                            style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
                            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg') }}" />
                        </div>

                        <div id="createButton" data-target="#modal7"
                            style="
                  outline: none;
                  width: 100px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                  gap: 5px;
                  font-family: Genos;
                ">
                            Create
                            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Path_2-2.svg') }}" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- sytem modal -->


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

            $('.time_input_field').datepicker({
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

            $("#unlimit_img_uc").show();
            $("#unlimit_img_c").hide();
            $("#limit_img_c").show();
            $("#limit_img_uc").hide();
            $("#unlimi_bars").show();
            $("#limi_bars").hide();


            $("#button1Modal8").css("background-color", "rgb(28, 162, 237)");
            $("#button1Modal8_3").css("background-color", "rgb(28, 162, 237)");
            $("#button1Modal8_4").css("background-color", "rgb(28, 162, 237)");

            $("#button1Modal8 span").css("color", "#fff");
            $("#button1Modal8_3 span").css("color", "#fff");
            $("#button1Modal8_4 span").css("color", "#fff");

            $(".addImageButtonModel2").show();
            $(".descriptionTextContainerModal2").show();
            $(".image-preview-containerModal2").html("");
            $(".fileInput18").attr("required", true);

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




        $(document).on("click", ".edit_popup1", function() {
            var cid = $(this).attr("data-id");
            var p_title = $(this).attr("data-name");
            var p_image = $(this).attr("data-image");
            var p_start = $(this).attr("data-start");
            var p_end = $(this).attr("data-end");
            var p_option = $(this).attr("data-option");
            var p_isshare = $(this).attr("data-isshare");
            var p_iscomment = $(this).attr("data-iscomment");
            var p_emoji = $(this).attr("data-isemoji");
            var typ = $(this).attr("data-type");

            var imgid = ".pop_main_image_" + cid;
            var imghtml = $(imgid).html();

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

                if (p_option == "Educated") {
                    $("#button2Modal8").attr('checked', 'checked');
                    $("#button2Modal8").click();
                } else if (p_option == "Cultivated") {
                    $("#button3Modal8").attr('checked', 'checked');
                    $("#button3Modal8").click();
                } else if (p_option == "Academic") {
                    $("#button4Modal8").attr('checked', 'checked');
                    $("#button4Modal8").click();
                } else {
                    $("#button1Modal8").attr('checked', 'checked');
                    $("#button1Modal8").click();
                }
            } else if (typ == "Donation") {

                if (p_option == "Educated") {
                    $("#button2Modal8_2").attr('checked', 'checked');
                    $("#button2Modal8_2").click();
                } else if (p_option == "Cultivated") {
                    $("#button3Modal8_2").attr('checked', 'checked');
                    $("#button3Modal8_2").click();

                } else if (p_option == "Academic") {
                    $("#button4Modal8_2").attr('checked', 'checked');
                    $("#button4Modal8_2").click();
                } else {
                    $("#button1Modal8_2").attr('checked', 'checked');
                    $("#button1Modal8_2").click();
                }

                //extra fields
                $("#donation_img").html(imghtml);
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
                } else {
                    $("#unlimit_img_uc").hide();
                    $("#unlimit_img_c").show();
                    $("#limit_img_c").hide();
                    $("#limit_img_uc").show();
                    $("#unlimi_bars").hide();
                    $("#limi_bars").show();
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

                if (p_option == "Educated") {
                    $("#button2Modal8_3").attr('checked', 'checked');
                    $("#button2Modal8_3").click();
                } else if (p_option == "Cultivated") {
                    $("#button3Modal8_3").attr('checked', 'checked');
                    $("#button3Modal8_3").click();

                } else if (p_option == "Academic") {
                    $("#button4Modal8_3").attr('checked', 'checked');
                    $("#button4Modal8_3").click();
                } else {
                    $("#button1Modal8_3").attr('checked', 'checked');
                    $("#button1Modal8_3").click();
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
                if (p_option == "Educated") {
                    $("#button2Modal8_4").attr('checked', 'checked');
                    $("#button2Modal8_4").click();
                } else if (p_option == "Cultivated") {
                    $("#button3Modal8_4").attr('checked', 'checked');
                    $("#button3Modal8_4").click();

                } else if (p_option == "Academic") {
                    $("#button4Modal8_4").attr('checked', 'checked');
                    $("#button4Modal8_4").click();
                } else {
                    $("#button1Modal8_4").attr('checked', 'checked');
                    $("#button1Modal8_4").click();
                }

            }



            //pop_main_image
            $(".addImageButtonModel2").hide();
            $(".descriptionTextContainerModal2").hide();
            $(".image-preview-containerModal2").html(imghtml);

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
        $(document).ready(function() {
            $(document).click(function() {

                const lightboxing = `<div class="fancybox-container fancybox-custom-layout fancybox-show-toolbar fancybox-show-caption fancybox-is-open fancybox-is-zoomable fancybox-can-zoomIn"
            role="dialog" tabindex="-1" id="fancybox-container-1"
            style="transition-duration: 366ms;">
            <div class="fancybox-inner">

                <div
                    class="fancybox-caption">
                    <div
                        class="fancybox-caption__body">
                        <div class="header d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/dan.jpg"
                                    alt>
                                <div class="user-meta">
                                    <span>Dan Walker</span> <span><small>2 hours
                                            ago</small></span>
                                </div>
                            </div>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger toggle">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu"
                                    style="left:-268px;">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="social-count ml-auto">

                        </div>

                        <div style="padding:10px;" class="actions">

                            <div class="action"> <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-thumbs-up"><path
                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                <span>Like</span></div>

                            <div class="action"> <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-message-circle"><path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                <span>Comment</span></div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment com_container">
                                <div class="comment-lineone"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/dan.jpg"
                                            alt data-user-popover="1"></p>

                                </figure>

                                <div class="media-content pb-0">
                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Dan Walker</div>
                                        <span>28m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>
                            </div>

                            <div
                                class="media is-comment is-nested com_container">
                                <div class="arrow-line"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">David Kim</div>
                                        <span>26m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>
                            <style>
    .com_container{
        position:relative;
    }
    .comment-line{
        position:absolute;
        height:362%;
        border-left:2px solid black;
        top:10%;
        left:5%;
        width:15%;
        border-radius:10px;
    }
    .comment-lineone{
        position:absolute;
        height:153%;
        border-left:2px solid black;
        top:10%;
        left:5%;
        width:15%;
        border-radius:10px;
    }
    .arrow-line{
         position: absolute;
    height: 40px;
    border-left: 2px solid black;
    top: -20%;
    left: 5%;
    width: 10%;
    border-bottom: 2px solid black;
    border-radius: 0px 0px 0px 10px;
    }
    .fancybox-custom-layout .fancybox-caption .comments-list .is-comment.is-nested{
        padding-left:40px !important;
        margin-left:0px !important;
    }
    </style>

                            <div class="media is-comment com_container">
                                <div class="comment-line"></div>
                                <figure class="media-left ">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/rolf.jpg"
                                            alt data-user-popover="17"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Rolf Krupp</div>
                                        <span>36m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div
                                class="media is-comment is-nested com_container ">
                                <div class="arrow-line"></div>
                                <figure class="media-left ">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Elise Walker</div>
                                        <span>32m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div
                                class="media is-comment is-nested com_container">
                                <div class="arrow-line"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/rolf.jpg"
                                            alt data-user-popover="17"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Rolf Krupp</div>
                                        <span>24m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div
                                class="media is-comment is-nested com_container">
                                <div class="arrow-line"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Elise Walker</div>
                                        <span>40m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="14"></p>

                                </figure>

                                <div class="media-content pb-0">
                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Lana
                                            Henrikssen</div>
                                        <span>28m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit.</p>

                                </div>

                            </div>

                        </div>
                        <div class="text-end mx-0 px-3 w-100 my-2"
                            style="background-color:#f5f6f7; letter-spacing:-5px;">
                            <span
                                style="background:white;padding:1px; border-radius:50%; ">😂</span>
                            <span
                                style="background:white;padding:1px; border-radius:50%;">😣</span>
                            <span
                                style="background:white;padding:1px; border-radius:50%;">😳</span>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-1">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea is-rounded" rows="1"
                                        id="lightbox-post-comment-textarea-1"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>

                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/elise.jpg"
                                alt>
                            <div class="user-meta">
                                <span>Elise Walker</span> <span><small>2 days
                                        ago</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>3</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>5</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>5</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/gaelle.jpeg"
                                            alt data-user-popover="11"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Gaelle Morris</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/rolf.jpg"
                                            alt data-user-popover="13"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Rolf Krupp</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="7"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-2">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-2"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",m='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/stella.jpg"
                                alt>
                            <div class="user-meta">
                                <span>Stella Bergmann</span>
                                <span><small>Yesterday</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>33</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>9</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>9</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Jenna Davis</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>30m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="10"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Lana Henrikssen</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Proin ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">David Kim</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>12m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/mike.jpg"
                                            alt data-user-popover="16"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Mike Lasalle</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>8m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/daniel.jpg"
                                            alt data-user-popover="3"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Daniel
                                        Wellington</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>5h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/bobby.jpg"
                                            alt data-user-popover="8"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Bobby Brown</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>7h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>7h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="10"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Lana Henrikssen</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Proin ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-3">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-3"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",r='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/jenna.png"
                                alt>
                            <div class="user-meta">
                                <span>Jenna Davis</span> <span><small>3 days
                                        ago</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>32</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>5</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>5</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/bobby.jpg"
                                            alt data-user-popover="8"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Bobby Brown</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>12</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/daniel.jpg"
                                            alt data-user-popover="3"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Daniel
                                        Wellington</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>2</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/mike.jpg"
                                            alt data-user-popover="12"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Mike Lasalle</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="10"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Lana Henrikssen</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="9"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls">

                            <div class="controls-inner">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"></textarea> <button
                                        class="emoji-button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",p='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/elise.jpg"
                                alt>
                            <div class="user-meta">
                                <span>Elise Walker</span> <span><small>3 months
                                        ago</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>3</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>3</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>3</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>12h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>2</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="9"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/bobby.jpg"
                                            alt data-user-popover="8"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Bobby Brown</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-4">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-4"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",u='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/jenna.png"
                                alt>
                            <div class="user-meta">
                                <span>Jenna Davis</span> <span><small>oct 17
                                        2018</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>58</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>9</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>927</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/milly.jpg"
                                            alt data-user-popover="7"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Milly Augustine</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/edward.jpeg"
                                            alt data-user-popover="5"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Edward Mayers</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>30m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>30m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/edward.jpeg"
                                            alt data-user-popover="5"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Edward Mayers</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="9"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media is-comment">
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>
                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-5">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-5"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",g='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/jenna.png"
                                alt>
                            <div class="user-meta">
                                <span>Jenna Davis</span> <span><small>oct 17
                                        2018</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>33</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>8</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>8</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Jenna Davis</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>4</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">David Kim</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/milly.jpg"
                                            alt data-user-popover="7"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Milly Augustine</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/daniel.jpg"
                                            alt data-user-popover="3"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Daniel
                                        Wellington</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">David Kim</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>18d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>18d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>8</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/mike.jpg"
                                            alt data-user-popover="12"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Mike Lasalle</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>18d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                        </div>
                    </div></div></div></div>`;
                $('.fancybox-caption__body').append(lightboxing);
            });
        });
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
@endsection
@endsection

<!--// $('.tab-content').hide();-->
<!--// $('.tab-content:first').hide();-->
<!--// // $(document).find('.classone').hide();-->
<!--// // Click function-->
<!--// $(document).on('click','.classone',function(){-->

<!--//     alert('sad');-->
<!--//   $('.classone').removeClass('checked');-->
<!--//   $(this).addClass('checked');-->
<!--//   $('.tab-content').hide();-->

<!--//   var activeTab = $(this).attr('data-king');-->
<!--//   $(activeTab).fadeIn();-->
<!--//   return false;-->
<!--// });-->

@section('page-script')

<script></script>
@endsection
