@extends('layouts/layoutMaster')

@section('title', 'User View - Videos')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-user-view.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script>
    <script src="{{ asset('assets/js/app-user-view.js') }}"></script>
    <script src="{{ asset('assets/js/app-user-view-account.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">User / View /</span> Videos
    </h4>
    <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
           @include('content.include.users.user-detail')

        </div>

        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link" href="{{ url('app/user/'.$user->id.'/account') }}"><i
                            class="bx bx-user me-1"></i>Follower</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i
                            class="bx bx-video me-1"></i>Videos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('app/user/'.$user->id.'/activity') }}"><i
                            class="bx bx-bell me-1"></i>Activity</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('app/user/'.$user->id.'/location') }}"><i
                            class="bx bx-map-pin me-1"></i>Location</a></li>
            </ul>

            <!--start-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="user-avatar-section">
                                <div style="margin-top:30px" class=" d-flex align-items-center flex-column">
                                    <img style="border-radius: 100%;width:125px" class="img-fluid my-4 profile-img"
                                        src="{{asset('assets/img/avatars/10.png')}}" alt="User avatar">
                                    <div class="user-info text-center">
                                        <span class="d-flex"><img class="medal-pic" height="20px"
                                                src="{{asset('assets/dreamschat/images/medal-ribbon.jpeg')}}"
                                                alt="">
                                            <h4 class="mb-2"><b> Alex Smith</b></h4>
                                        </span>
                                    </div>
                                    <div class="user-info text-center mt-2">
                                        <h6 style="margin-top:4px" class="mb-2"><b>Standard User</b></h6>
                                        <h6 class="mb-2">User ID: 123456789</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ User Content -->
    </div>

    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modal -->
@endsection
