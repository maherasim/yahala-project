@extends('layouts/layoutMaster')

@section('title', 'Notes')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <style>
      .custom-option-icon .form-check-input{
        background-color: transparent !important;
        border:none !important;
      }
        .form-check-input:checked,
        .form-check-input[type=checkbox] {
            background-color: transparent !important;
            border:none !important;
            box-shadow: none !important;
            background-image: none !important;
        }
        .dropdown.is-right .dropdown-menu {
            left: 56px;
            right: auto;
            padding: 0;
            top:-22px;
        }
        .dropdown-item h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1{
          margin-bottom: 0 !important;
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
                                        <a class="list-group-item list-group-item-action {{request('type') == 'admin-feeds' ? 'active' : ''}}" href="javascript:void(0)">
                                            All Feeds<br>
                                            <small class="text-muted">All FanPage Feeds</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action {{request('type') == 'all-news' ? 'active' : ''}}" href="javascript:void(0)">
                                            FanPage Reported<br>
                                            <small class="text-muted">All Reported Feeds</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action {{request('type') == 'all-news' ? 'active' : ''}}" href="javascript:void(0)">
                                            FanPage Comments<br>
                                            <small class="text-muted">All Reported Comments</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="column column is-6">
                                <div id="feed-post-1" class="card is-post">
                                    <!-- Main wrap -->
                                    <div class="content-wrap">
                                        <!-- Post header -->
                                        <div class="card-heading">
                                            <!-- User meta -->
                                            <div class="user-block">
                                                <div class="image">
                                                    <img src="{{asset('assets/img/avatars/13.png')}}"
                                                        data-demo-src="{{asset('assets/img/avatars/13.png')}}"
                                                        data-user-popover="1" alt="">
                                                </div>
                                                <div class="user-info">
                                                  <span class="d-flex"><a href="#">Fan Page</a><i class="bx bx-user-plus ml-2"></i></span>
                                                    <span class="time">Wed 29 Nov 1:49 pm </span>
                                                </div>
                                            </div>
                                            <!-- Right side dropdown -->
                                            <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                            @if(request('type') === 'flag')
                                            <div style="position: absolute;top:1rem;right:3.5rem">
                                            <img src="{{asset('assets/img/exclamation-mark.png')}}" width="15" alt="">
                                            </div>
                                            @endif
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                              <div>
                                                  <div class="button">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
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
                                                                <h3>Remove Feed - Flag FanPage</h3>
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
                                                            <h3>Remove Feed - Block FanPage</h3>
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
                                                          <h3>Remove FanPage</h3>
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
                                                    data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                    href="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                    data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg">
                                                    <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
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
                                        <img src="{{asset('assets/img/exclamation-mark.png')}}" style="position: absolute;top:1rem;right:3.5rem" width="15" alt="">
                                        @endif
                                      </div>
                                        <!-- Comments body -->
                                        <div class="comments-body has-slimscroll">
                                          <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">
                                      </div>
                                      <!-- /Comments body -->
                                    </div>
                                    <!-- /Post #1 Comments -->
                                </div>
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
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
