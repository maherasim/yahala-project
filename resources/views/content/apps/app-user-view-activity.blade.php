@extends('layouts/layoutMaster')

@section('title', 'User View - Activity')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
@endsection

@section('vendor-script')
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
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">User / View /</span> Activity
    </h4>
    <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            @include('content.include.users.user-detail')

        </div>
        <!--/ User Sidebar -->


        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills flex-column flex-md-row mb-3">

                <li class="nav-item"><a class="nav-link" href="{{ url('app/user/' . $user->id . '/account') }}"><i
                            class="bx bx-user me-1"></i>Follower</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('app/user/' . $user->id . '/videos') }}"><i
                            class="bx bx-video me-1"></i>Videos</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i
                            class="bx bx-bell me-1"></i>Activity</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('app/user/' . $user->id . '/location') }}"><i
                            class="bx bx-map-pin me-1"></i>Location</a></li>
            </ul>
            <!--/ User Pills -->

            <!-- Activity Timeline -->
            <div class="card mb-4">
                <h5 class="card-header">User Activity Timeline</h5>
                <div class="card-body">
                    <ul class="timeline">
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">12 Invoices have been paid</h6>
                                    <small class="text-muted">12 min ago</small>
                                </div>
                                <p class="mb-2">Invoices have been paid to the company</p>
                                <div class="d-flex">
                                    <a href="javascript:void(0)" class="me-3">
                                        <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image"
                                            width="15" class="me-2">
                                        <span class="fw-bold text-body">invoices.pdf</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-warning"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Client Meeting</h6>
                                    <small class="text-muted">45 min ago</small>
                                </div>
                                <p class="mb-2">Project meeting with john @10:15am</p>
                                <div class="d-flex flex-wrap">
                                    <div class="avatar me-3">
                                        <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                        <span class="text-muted">CEO of ThemeSelection</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-info"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Create a new project for client</h6>
                                    <small class="text-muted">2 Day Ago</small>
                                </div>
                                <p class="mb-2">5 team members in a project</p>
                                <div class="d-flex align-items-center avatar-group">
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                        data-bs-placement="top" aria-label="Vinnie Mostowy"
                                        data-bs-original-title="Vinnie Mostowy">
                                        <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                        data-bs-placement="top" aria-label="Marrie Patty"
                                        data-bs-original-title="Marrie Patty">
                                        <img src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                        data-bs-placement="top" aria-label="Jimmy Jackson"
                                        data-bs-original-title="Jimmy Jackson">
                                        <img src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                        data-bs-placement="top" aria-label="Kristine Gill"
                                        data-bs-original-title="Kristine Gill">
                                        <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                        data-bs-placement="top" aria-label="Nelson Wilson"
                                        data-bs-original-title="Nelson Wilson">
                                        <img src="{{asset('assets/img/avatars/14.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-success"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Design Review</h6>
                                    <small class="text-muted">5 days Ago</small>
                                </div>
                                <p class="mb-0">Weekly review of freshly prepared design for our new app.</p>
                            </div>
                        </li>
                        <li class="timeline-end-indicator">
                            <i class="bx bx-check-circle"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Activity Timeline -->
        </div>
        <!--/ User Content -->
    </div>

    <!-- Modals -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modals -->

@endsection
