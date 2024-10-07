@extends('layouts/layoutMaster')

@section('title', 'User View - Location')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/mapbox-gl/mapbox-gl.css" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection
<head>

<!-- Page Styles -->
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/app-logistics-fleet.css" />


</head>

@section('page-script')
<script>
   $('.accordion-header').click(function(){
    $('.accordion-collapse').toggleClass('d-none');
});
</script>
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">User / View /</span> Location
</h4>
<div class="row">
  <!-- User Sidebar -->
 <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    @include('content.include.users.user-detail')
  <!--/ User Sidebar -->
 </div>
  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- User Pills -->
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/'.$user->id.'/account')}}"><i class="bx bx-user me-1"></i>Follower</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/'.$user->id.'/videos')}}"><i class="bx bx-video me-1"></i>Videos</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/'.$user->id.'/activity')}}"><i class="bx bx-bell me-1"></i>Activity</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i class="bx bx-map-pin me-1"></i>Location</a></li>
    </ul>
    <!--/ User Pills -->
    <!-- Connected Accounts -->
   <div class="card overflow-hidden">

                <!-- Map Menu Wrapper -->
                <div class="d-flex app-logistics-fleet-wrapper" style="height: 600px !important;">

                    <!-- Map Menu Button when screen is < md -->
                    <div class="flex-shrink-0 position-fixed m-4 d-md-none w-auto zindex-1">
                        <button class="btn btn-label-white border border-2 zindex-2 p-2" data-bs-toggle="sidebar" data-overlay="" data-target="#app-logistics-fleet-sidebar"><i class="bx bx-menu"></i></button>
                    </div>

                    <!-- Map Menu -->
                    <div class="app-logistics-fleet-sidebar col h-100" id="app-logistics-fleet-sidebar">
                        <div class="card-header border-0 pt-4 pb-2 d-flex justify-content-between">
                            <h5 class="mb-0 card-title">Fleet</h5>
                            <!-- Sidebar close button -->
                            <i class="bx bx-x bx-sm cursor-pointer close-sidebar d-md-none" data-bs-toggle="sidebar" data-overlay="" data-target="#app-logistics-fleet-sidebar"></i>
                        </div>
                        <!-- Sidebar when screen < md -->
                        <div class="card-body p-0 logistics-fleet-sidebar-body ps ps--active-y">
                            <!-- Menu Accordion -->
                            <div class="accordion p-2" id="fleet" data-bs-toggle="sidebar" data-overlay="" data-target="#app-logistics-fleet-sidebar">
                                <!-- Fleet 1 -->
                                <div class="accordion-item shadow-none border-0 mb-0" id="fl-1">
                                    <div class="accordion-header" id="fleetOne">
                                        <div role="button" class="accordion-button shadow-none collapsed" data-bs-toggle="collapse" data-bs-target="#fleet1" aria-expanded="false" aria-controls="fleet1">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar me-3">
                                                        <span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck"></i></span>
                                                    </div>
                                                </div>
                                                <span class="d-flex flex-column">
                                                    <span class="h6 mb-0">VOL-342808</span>
                                                    <span class="text-muted">Chelsea, NY, USA</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="fleet1" class="accordion-collapse collapse" data-bs-parent="#fleet" style="">
                                        <div class="accordion-body pt-3 pb-0">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-1">Delivery Process</h6>
                                                <p class="text-body mb-1">88%</p>
                                            </div>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <ul class="timeline ps-3 mt-4">
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-success text-uppercase fw-medium">tracking
                                                                number created</small>
                                                        </div>
                                                        <h6 class="mb-1">Veronica Herman</h6>
                                                        <p class="text-muted mb-0">Sep 01, 7:53 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-success text-uppercase fw-medium">out for
                                                                delivery</small>
                                                        </div>
                                                        <h6 class="mb-1">Veronica Herman</h6>
                                                        <p class="text-muted mb-0">Sep 03, 8:02 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-transparent">
                                                    <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                        <i class="bx bx-map mt-1"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-primary text-uppercase fw-medium">arriving</small>
                                                        </div>
                                                        <h6 class="mb-1">Veronica Herman</h6>
                                                        <p class="text-muted mb-0">Sep 04, 8:18 AM</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fleet 2 -->
                                <div class="accordion-item shadow-none border-0 mb-0" id="fl-2">
                                    <div class="accordion-header" id="fleetTwo">
                                        <div role="button" class="accordion-button shadow-none collapsed" data-bs-toggle="collapse" data-bs-target="#fleet2" aria-expanded="false" aria-controls="fleet2">

                                            <div class="d-flex align-items-center">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar me-3">
                                                        <span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck"></i></span>
                                                    </div>
                                                </div>
                                                <span class="d-flex flex-column">
                                                    <span class="h6 mb-0">VOL-954784</span>
                                                    <span class="text-muted">Lincoln Harbor, NY, USA</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="fleet2" class="accordion-collapse collapse" data-bs-parent="#fleet" style="">
                                        <div class="accordion-body pt-3 pb-0">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-1">Delivery Process</h6>
                                                <p class="text-body mb-1">100%</p>
                                            </div>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <ul class="timeline ps-3 mt-4">
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-success text-uppercase fw-medium">tracking
                                                                number created</small>
                                                        </div>
                                                        <h6 class="mb-1">Myrtle Ullrich</h6>
                                                        <p class="text-muted mb-0">Sep 01, 7:53 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-success text-uppercase fw-medium">out for
                                                                delivery</small>
                                                        </div>
                                                        <h6 class="mb-1">Myrtle Ullrich</h6>
                                                        <p class="text-muted mb-0">Sep 03, 8:02 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-transparent">
                                                    <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                        <i class="bx bx-map mt-1"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-primary text-uppercase fw-medium">arrived</small>
                                                        </div>
                                                        <h6 class="mb-1">Myrtle Ullrich</h6>
                                                        <p class="text-muted mb-0">Sep 04, 8:18 AM</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fleet 3 -->
                                <div class="accordion-item shadow-none border-0 mb-0 active" id="fl-3">
                                    <div class="accordion-header" id="fleetThree">
                                        <div role="button" class="accordion-button shadow-none" data-bs-toggle="collapse" data-bs-target="#fleet3" aria-expanded="true" aria-controls="fleet3">

                                            <div class="d-flex align-items-center">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar me-3">
                                                        <span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck"></i></span>
                                                    </div>
                                                </div>
                                                <span class="d-flex flex-column">
                                                    <span class="h6 mb-0">VOL-342808</span>
                                                    <span class="text-muted">Midtown East, NY, USA</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="fleet3" class="accordion-collapse collapse show" data-bs-parent="#fleet" style="">
                                        <div class="accordion-body pt-3 pb-0">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-1">Delivery Process</h6>
                                                <p class="text-body mb-1">60%</p>
                                            </div>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <ul class="timeline ps-3 mt-4">
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-success text-uppercase fw-medium">tracking
                                                                number created</small>
                                                        </div>
                                                        <h6 class="mb-1">Barry Schowalter</h6>
                                                        <p class="text-muted mb-0">Sep 01, 7:53 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-success text-uppercase fw-medium">out for
                                                                delivery</small>
                                                        </div>
                                                        <h6 class="mb-1">Barry Schowalter</h6>
                                                        <p class="text-muted mb-0">Sep 03, 8:02 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-transparent">
                                                    <span class="timeline-indicator-advanced timeline-indicator-secondary border-0 shadow-none">
                                                        <i class="bx bx-map mt-1"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-secondary text-uppercase fw-medium">arriving</small>
                                                        </div>
                                                        <h6 class="mb-1">Barry Schowalter</h6>
                                                        <p class="text-muted mb-0">Sep 04, 8:18 AM</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fleet 4 -->
                                <div class="accordion-item shadow-none border-0 mb-0" id="fl-4">
                                    <div class="accordion-header" id="fleetFour">
                                        <div role="button" class="accordion-button collapsed shadow-none" data-bs-toggle="collapse" data-bs-target="#fleet4" aria-expanded="false" aria-controls="fleet4">

                                            <div class="d-flex align-items-center">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar me-3">
                                                        <span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck"></i></span>
                                                    </div>
                                                </div>
                                                <span class="d-flex flex-column">
                                                    <span class="h6 mb-0">VOL-343908</span>
                                                    <span class="text-muted">Hoboken, NY, USA</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="fleet4" class="accordion-collapse collapse" data-bs-parent="#fleet">
                                        <div class="accordion-body pt-3 pb-0">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-1">Delivery Process</h6>
                                                <p class="text-body mb-1">28%</p>
                                            </div>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <ul class="timeline ps-3 mt-4">
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-success text-uppercase fw-medium">tracking
                                                                number created</small>
                                                        </div>
                                                        <h6 class="mb-1">Helen Jacobs</h6>
                                                        <p class="text-muted mb-0">Sep 01, 7:53 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-left-dashed">
                                                    <span class="timeline-indicator-advanced timeline-indicator-secondary border-0 shadow-none">
                                                        <i class="bx bx-check-circle"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-secondary text-uppercase fw-medium">out for
                                                                delivery</small>
                                                        </div>
                                                        <h6 class="mb-1">Helen Jacobs</h6>
                                                        <p class="text-muted mb-0">Sep 03, 8:02 AM</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item ps-4 border-transparent">
                                                    <span class="timeline-indicator-advanced timeline-indicator-secondary border-0 shadow-none">
                                                        <i class="bx bx-map mt-1"></i>
                                                    </span>
                                                    <div class="timeline-event ps-0 pb-0">
                                                        <div class="timeline-header">
                                                            <small class="text-secondary text-uppercase fw-medium">arriving</small>
                                                        </div>
                                                        <h6 class="mb-1">Helen Jacobs</h6>
                                                        <p class="text-muted mb-0">Sep 04, 8:18 AM</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 432px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 304px;"></div>
                            </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 611px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 547px;"></div></div></div>
                    </div>

                    <!-- Mapbox Map container -->
                    <div class="col h-100 map-container">
                        <!-- Map -->
                        <div id="map" class="w-100 h-100 mapboxgl-map">
                            <div class="mapboxgl-canary" style="visibility: hidden;"></div>
                            <div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate">
                                <canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" role="region" width="1584" height="298" style="width: 792px; height: 149px;"></canvas>
                                <div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(-2540px, 996px) translate(-50%, -50%) translate(0px, 0px);">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3 marker-focus" id="carFleet-1"></div>
                                <div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(-5427px, 442px) translate(-50%, -50%) translate(0px, 0px);">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3" id="carFleet-2"></div>
                                <div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(396px, 75px) translate(-50%, -50%) translate(0px, 0px);">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3 marker-focus" id="carFleet-3">
                                </div>
                                <div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(-5660px, 2165px) translate(-50%, -50%) translate(0px, 0px);">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3" id="carFleet-4"></div>
                            </div>
                            <div class="mapboxgl-control-container d-none">
                                <div class="mapboxgl-ctrl-top-left"></div>
                                <div class="mapboxgl-ctrl-top-right"></div>
                                <div class="mapboxgl-ctrl-bottom-left">
                                    <div class="mapboxgl-ctrl" style="display: block;"><a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a></div>
                                </div>
                                <div class="mapboxgl-ctrl-bottom-right">
                                    <div class="mapboxgl-ctrl mapboxgl-ctrl-attrib"><button class="mapboxgl-ctrl-attrib-button" type="button" aria-label="Toggle attribution"><span class="mapboxgl-ctrl-icon" aria-hidden="true" title="Toggle attribution"></span></button>
                                        <div class="mapboxgl-ctrl-attrib-inner" role="list"><a href="https://www.mapbox.com/about/maps/" target="_blank" title="Mapbox" aria-label="Mapbox">© Mapbox</a> <a href="https://www.openstreetmap.org/about/" target="_blank" title="OpenStreetMap" aria-label="OpenStreetMap">© OpenStreetMap</a> <a class="mapbox-improve-map" href="https://apps.mapbox.com/feedback/?owner=mapbox&amp;id=light-v9&amp;access_token=pk.eyJ1IjoibG9yZC1zaGl2YW0iLCJhIjoiY2xpeTlpNHFwMDVzbDNmczl2MXdob29udyJ9.JOLDU6VQG_ra1CoVG4jbUA#/-73.967524/40.759984/16" target="_blank" aria-label="Map feedback" rel="noopener nofollow">Improve
                                                this map</a></div>
                                    </div>
                                </div>
                            </div>
                        <div class="mapboxgl-canary" style="visibility: hidden;"></div><div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate"><canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" role="region" width="335" height="539" style="width: 372.552px; height: 600px;"></canvas><div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(144px, 272px) translate(-50%, -50%) translate(0px, 0px);"><img src="https://dash.yekbun.net/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3" id="carFleet-1"></div><div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(-27px, 239px) translate(-50%, -50%) translate(0px, 0px);"><img src="https://dash.yekbun.net/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3" id="carFleet-2"></div><div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(317px, 218px) translate(-50%, -50%) translate(0px, 0px);"><img src="https://dash.yekbun.net/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3" id="carFleet-3"></div><div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" aria-label="Map marker" style="width: 20px; height: 42px; cursor: pointer; transform: translate(-40px, 341px) translate(-50%, -50%) translate(0px, 0px);"><img src="https://dash.yekbun.net/assets/img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3" id="carFleet-4"></div></div><div class="mapboxgl-control-container"><div class="mapboxgl-ctrl-top-left"></div><div class="mapboxgl-ctrl-top-right"></div><div class="mapboxgl-ctrl-bottom-left"><div class="mapboxgl-ctrl" style="display: block;"><a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a></div></div><div class="mapboxgl-ctrl-bottom-right"><div class="mapboxgl-ctrl mapboxgl-ctrl-attrib mapboxgl-compact"><button class="mapboxgl-ctrl-attrib-button" type="button" aria-label="Toggle attribution"><span class="mapboxgl-ctrl-icon" aria-hidden="true" title="Toggle attribution"></span></button><div class="mapboxgl-ctrl-attrib-inner" role="list"><a href="https://www.mapbox.com/about/maps/" target="_blank" title="Mapbox" aria-label="Mapbox">© Mapbox</a> <a href="https://www.openstreetmap.org/about/" target="_blank" title="OpenStreetMap" aria-label="OpenStreetMap">© OpenStreetMap</a> <a class="mapbox-improve-map" href="https://apps.mapbox.com/feedback/?owner=mapbox&amp;id=light-v9&amp;access_token=pk.eyJ1IjoibG9yZC1zaGl2YW0iLCJhIjoiY2xpeTlpNHFwMDVzbDNmczl2MXdob29udyJ9.JOLDU6VQG_ra1CoVG4jbUA#/-73.99127/40.74865/11.92" target="_blank" aria-label="Map feedback" rel="noopener nofollow">Improve this map</a></div></div></div></div></div>
                    </div>

                    <!-- Overlay Hidden -->
                    <div class="app-overlay d-none"></div>
                </div>
            </div>
    <!-- /Connected Accounts -->

    <!-- Social Accounts -->

  </div>
  <!-- /Social Accounts -->
</div>

<!--script start-->
  <!-- Include Scripts -->
  <!-- BEGIN: Vendor JS-->
   <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/mapbox-gl/mapbox-gl.js"></script>
<script src="https://dash.yekbun.net/assets/vendor/libs/jquery/jquery.js?id=be95af1b7fa35aa4b1dec268626264d2"></script>
<script src="https://dash.yekbun.net/assets/vendor/libs/popper/popper.js?id=62b540407346f16042446be395a1de9b"></script>
<script src="https://dash.yekbun.net/assets/vendor/js/bootstrap.js?id=78abe8c016e9085012911d16f3c2d410"></script>
<script src="https://dash.yekbun.net/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=91a15b5a6abe136b3a259607c4985984"></script>
<script src="https://dash.yekbun.net/assets/vendor/libs/hammer/hammer.js?id=58f8e2d88db3256252e130eb0bf65102"></script>
<script src="https://dash.yekbun.net/assets/vendor/libs/i18n/i18n.js?id=d84587ac552cc6b5c83ae3c49f1e543c"></script>
<script src="https://dash.yekbun.net/assets/vendor/libs/typeahead-js/typeahead.js?id=70e819040bc904810817c06de6a77130"></script>
<script src="https://dash.yekbun.net/assets/vendor/js/menu.js?id=9a70d8747378d2e5603b6b09560c5b74"></script>
    <script src="https://dash.yekbun.net/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="https://dash.yekbun.net/assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="https://dash.yekbun.net/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="https://dash.yekbun.net/assets/vendor/libs/select2/select2.js"></script>
    <script src="https://dash.yekbun.net/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="https://dash.yekbun.net/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="https://dash.yekbun.net/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/mapbox-gl/mapbox-gl.js"></script>

    <script src="https://dash.yekbun.net/assets/js/modal-edit-user.js"></script>
    <script src="https://dash.yekbun.net/assets/js/app-user-view.js"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/app-logistics-fleet.js"></script>


  <script src="https://dash.yekbun.net/assets/vendor/js/template-customizer.js"></script>


  <script src="https://dash.yekbun.net/assets/js/config.js"></script>

  <!-- beautify ignore:end -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>-->
<script>
<!--  window.dataLayer = window.dataLayer || [];-->

<!--  function gtag() {-->
<!--    dataLayer.push(arguments);-->
<!--  }-->
<!--  gtag('js', new Date());-->
<!--  gtag('config', 'GA_MEASUREMENT_ID');-->

<!--</script>
<!--script end-->

<!-- Modals -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modals -->
@endsection
