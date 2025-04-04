@extends('layouts/layoutMaster')

@section('title', 'Video - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <style>
        #DataTables_Table_0_wrapper .row:first-child {
            display: none;
        }

        .btn-primary {
            color: #fff !important;
            background-color: #696cff !important;
            border-color: #696cff !important;
            box-shadow: 0 0.125rem 0.25rem 0 rgba(105, 108, 255, 0.4) !important;
        }

        .modal-content {
            overflow: unset !important;
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
            position: absolute;
            top: 24px;
            left: auto;
            right: 20px;
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

        .modal-content {
            max-height: 90vh !important;
            /* Set max height */
            overflow: unset !important;
            /* Prevent overflow */
        }

        .modal-body {
            max-height: 70vh !important;
            /* Adjust based on your layout */
            overflow-y: auto !important;
            /* Enables scrolling if content exceeds max height */
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
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/app-2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/core.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
@endsection
@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <!-- Concatenated js plugins and jQuery -->
    <script src="{{ asset('assets/friendkit/js/app.js') }}"></script>

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
    <script src="{{ asset('assets/friendkit/js/popovers-pages.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/lightbox.js') }}"></script>

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->
    <script src="{{ asset('assets/friendkit/js/feed.js') }}"></script>

    <script src="{{ asset('assets/friendkit/js/webcam.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/compose.js') }}"></script>
    <script src="{{ asset('assets/friendkit/js/autocompletes.js') }}"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    {{-- Nav TAb --}}
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Video /</span> All Videos
            </h4>
        </div>
        <div class="">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createvideoModal">Add Video</button>
        </div>
    </div>

    <!-- Artist List Table -->
    <div class="card">
        <h5 class="card-header">Video List</h5>
        <div class="table-responsive container pb-4 text-nowrap">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <button class="btn btn-primary mt-4 w-100">Reported Videos</button>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row m-4">
                        <div class="col-md-6">
                            <label for="search">Search</label>
                            <input type="search" class="form-control" id="search" name="search">
                        </div>
                        <div class="col-md-6">
                            <label for="sort_by">Sort By</label>
                            <select name="sort_by" id="sort_by" class="form-control">
                                <option value="">Select Sort By</option>
                                <option value="songs">Most Songs</option>
                                <option value="videos">Most Videos</option>
                                <option value="likes">Most Likes</option>
                                <option value="followers">Most Followers</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row container pb-4">
                <input type="hidden" name="feed_id" id="feed_id">
                <input type="hidden" name="feed_type" id="feed_type" value="history">
                <input type="hidden" name="comment_parent_id" id="comment_parent_id">
                @foreach ($videos as $video)
                    <div class="col-md-4">
                        <div class="post-image">
                            <div id="feed-post-1" class="card is-post mt-4 pl-4 pr-4 view-post" data-fancybox="post1"
                                data-lightbox-type="comments"
                                data-thumb="{{ asset('storage/' . $video->video[0]['path']) }}"
                                href="{{ asset('storage/' . $video->video[0]['path']) }}" data-id="{{ $video->_id }}"
                                data-demo-href="{{ asset('storage/' . $video->video[0]['path']) }}"
                                style="box-shadow: none;cursor: pointer;">
                                <!-- Main wrap -->
                                <div class="content-wrap">

                                    <!-- Post body -->
                                    <div class="card-body p-0">
                                        @php
                                            $durationInSeconds = @$video->video[0]['duration'] ?? 0;
                                            $minutes = floor($durationInSeconds / 60);
                                            $seconds = round($durationInSeconds % 60);
                                            $formattedDuration = sprintf('%d:%02d', $minutes, $seconds);
                                        @endphp
                                        <div
                                            style="background-image: url('{{ asset('storage/' . $video->thumbnail) }}');height: 200px;width: 100%;background-size: cover;background-repeat: no-repeat;position:relative;">
                                            <span class="video-thumbnail-duration">{{ @$formattedDuration }}</span>
                                        </div>
                                    </div>
                                    <div class="card-footer mt-0">
                                        <div class="user-block">
                                            <div class="user-info">
                                                <div class="row">
                                                    <div class="col-md-2 p-0">
                                                        <img src="{{ asset('storage/' . @$video->user->image) }}"
                                                            style="width: 120px !important;height:50px !important;">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="mt-2">
                                                            <div class="d-flex" style="line-height: 0;">
                                                                <p><b>{{ $video->title }}</b></p>
                                                                <a href="javascript:void(0)"
                                                                    style="color: black !important;position: absolute;right: 18px;">
                                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                                </a>
                                                            </div>
                                                            <p class="m-0">
                                                                {{ @$video->user->name . ' ' . @$video->user->last_name }}
                                                            </p>
                                                            <small class="time"><i>0 views .
                                                                    &nbsp;&nbsp;{{ \Carbon\Carbon::parse(@$video->created_at)->diffForHumans() }}</i></small>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post body -->
                                </div>
                                <!-- /Main wrap -->
                            </div>
                        </div>
                    </div>
                @endforeach
                <x-modal id="createvideoModal" title="Create Video" saveBtnText="Create" saveBtnType="submit"
                    saveBtnForm="createForm" size="md">
                    @include('content.include.videos.createFile')
                </x-modal>
            </div>
        </div>



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

            $(document).ready(function() {
                $('table').on('click', '.delete-btn', function(event) {
                    event.preventDefault(); // Stop any default action
                    let form = $(this).closest('.delete-form'); // Get the closest form

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Are you sure you want to delete this?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        customClass: {
                            confirmButton: 'btn btn-danger me-3',
                            cancelButton: 'btn btn-label-secondary'
                        },
                        buttonsStyling: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Submit the form after confirmation
                        }
                    });
                });
            });
        </script>
        <script>
            function getComments(data) {
                let comments = '';
                let commentData = '';
                data.data.comments.forEach(function(data, index) {
                    let child = '';
                    if (data.image && data.image.trim() !== "" && data.image !== "null" && data.image !== null) {
                        commentData = `<img src="{{ asset('storage') }}/${data.image}" width="80" height="80">`;
                    } else if (data.emoji && data.emoji.trim() !== "" && data.emoji !== "null" && data.emoji !== null) {
                        commentData =
                            `<img src="{{ asset('/') }}storage/${data?.emoji_data?.image}" width="80" height="80">`;
                    } else if (data.audio && data.audio.trim() !== "" && data.audio !== "null" && data.audio !== null) {
                        commentData = `<div id="comment-audio" style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; background-size: contain; cursor: pointer; border-radius: 10px; position: relative; height: 100%;">
                                       <audio src="{{ asset('storage') }}/${data.audio}" id="comment-audio-input"></audio>
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

                            if (child.image && child.image.trim() !== "" && child.image !== "null" && child
                                .image !== null) {
                                commentData =
                                    `<img src="{{ asset('storage') }}/${child.image}" width="80" height="80">`;
                            } else if (child.emoji && child.emoji.trim() !== "" && child.emoji !== "null" &&
                                child.emoji !== null) {
                                commentData =
                                    `<img src="{{ asset('/') }}storage/${child?.emoji_data?.image}" width="80" height="80">`;
                            } else if (child.audio && child.audio.trim() !== "" && child.audio !== "null" &&
                                child.audio !== null) {
                                commentData = `<div id="comment-audio" style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; background-size: contain; cursor: pointer; border-radius: 10px; position: relative; height: 100%;">
                                            <audio src="{{ asset('storage') }}/${child.audio}" id="comment-audio-input"></audio>
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

                                    if (childUltra.image && childUltra.image.trim() !== "" && childUltra
                                        .image !== "null" && childUltra.image !== null) {
                                        commentData =
                                            `<img src="{{ asset('storage') }}/${childUltra.image}" width="80" height="80">`;
                                    } else if (childUltra.emoji && childUltra.emoji.trim() !== "" &&
                                        childUltra.emoji !== "null" && childUltra.emoji !== null) {
                                        commentData =
                                            `<img src="{{ asset('/') }}storage/${childUltra?.emoji_data?.image}" width="80" height="80">`;
                                    } else if (childUltra.audio && childUltra.audio.trim() !== "" &&
                                        childUltra.audio !== "null" && childUltra.audio !== null) {
                                        commentData = `<div id="comment-audio" style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; background-size: contain; cursor: pointer; border-radius: 10px; position: relative; height: 100%;">
                                                    <audio src="{{ asset('storage') }}/${childUltra.audio}" id="comment-audio-input"></audio>
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
            $(document).ready(function() {
                // Use event delegation for dynamically added elements
                $('body').on("click", "#comment-audio-play", function() {
                    let container = $(this).closest("#comment-audio");
                    let audio = container.find('#comment-audio-input')[
                        0]; // Get the associated hidden audio element
                    let playButton = container.find("#comment-audio-play");
                    let pauseButton = container.find("#comment-audio-pause");
                    let waves = container.find(".audio-wave");
                    let durationDisplay = container.find("#comment-audio-duration");

                    if (audio.paused) {
                        // Pause any other playing audio
                        $("audio").each(function() {
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
                        audio.addEventListener("timeupdate", function() {
                            let minutes = Math.floor(audio.currentTime / 60);
                            let seconds = Math.floor(audio.currentTime % 60);
                            durationDisplay.text(`${minutes}:${seconds < 10 ? "0" : ""}${seconds}`);
                        });

                        // Reset UI when audio ends
                        audio.addEventListener("ended", function() {
                            playButton.show();
                            pauseButton.hide();
                            waves.css("opacity", "0.5");
                        });
                    }
                });

                $(document).on("click", "#comment-audio-pause", function() {
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
                $(document).on("loadedmetadata", "audio", function() {
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

            $('.add-history').click(function() {
                $('.modal-header h4').text('Create History');
                $('.modal-footer [type="submit"]').text('Create');
                $('[name="history_id"]').val('');
                $('#createForm')[0].reset();
            })

            $('.edit-history').click(function() {
                $('.modal-header h4').text('Edit History');
                $('.modal-footer [type="submit"]').text('Update');
                let name = $(this).attr('data-name');
                let video = $(this).attr('data-video');
                let comments = $(this).attr('data-comments');
                let share = $(this).attr('data-share');
                let emoji = $(this).attr('data-emoji');
                let id = $(this).attr('data-id');

                $('[name="history_id"]').val(id);
                $('[name="title"]').val(name);
                comments == true ? $('[name="comments"]').attr('checked', true) : $('[name="comments"]').attr('checked',
                    false);
                share == true ? $('[name="share"]').attr('checked', true) : $('[name="share"]').attr('checked', false);
                emoji == true ? $('[name="emoji"]').attr('checked', true) : $('[name="emoji"]').attr('checked', false);
            })
        </script>
        <script>
            function drpzone_init() {
                dropZoneInitFunctions.forEach(callback => callback());
            }
        </script>
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
    @endsection
@endsection
