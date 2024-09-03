@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
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

@section('page-script')
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">User / View /</span> Notifications
</h4>
<div class="row">
  <!-- User Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img style="border-radius:100%" class="img-fluid my-4" src="https://yekbun.hellodev.site/public//assets/img/avatars/10.png" height="110" width="110" alt="User avatar">
            <div class="user-info text-center">
              <h4 class="mb-2"><img height="20px" src="https://yekbun.hellodev.site/public//assets/img/medal-ribbon.jpeg"> Alex Smith</h4>
               <p class="mb-2"><img height="20px" src="https://yekbun.hellodev.site/public//assets/img/germany-flag-png.png"> Rojava Qamishlo <img height="20px" src="https://yekbun.hellodev.site/public//assets/img/germany-flag-png.png"> Hannover</p>
                 <b><p class="mb-2 ">Standard User</p></b>
                  <span>User Id:123456778</span>
            </div>
          </div>
        </div>
      
        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">Status:</span>
              <br>
              <span>Married</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Email:</span>
                  <br>
              <span>User Id:123456778</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Phone Number:</span>
                  <br>
                <span>User Id:123456778</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Member Since:</span>
                  <br>
              <span>12.10.2023</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Country</span>
                  <br>
              <span>Germany</span>
            </li>
            
           
           
          </ul>
        
        </div>
      </div>
    </div>
  
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
 <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- User Pills -->
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      
     <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/account')}}"><i class="bx bx-user me-1"></i>Follower</a></li>
      <!--<li class="nav-item"><a class="nav-link" href="{{url('app/user/view/security')}}"><i class="bx bx-detail me-1"></i>Post</a></li>-->
      <li class="nav-item"><a class="nav-link " href="{{url('app/user/view/billing')}}"><i class="bx bx-video me-1"></i>Videos</a></li>
      <li class="nav-item"><a class="nav-link active" href="{{url('app/user/view/notifications')}}"><i class="bx bx-bell me-1"></i>Activity</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/connections')}}"><i class="bx bx-map-pin me-1"></i>Location</a></li>
    </ul>
    <!--/ User Pills -->


    <!-- Project table -->
    <div class="card mb-4">
      <h5 class="card-header">User's Projects List</h5>
      <div class="table-responsive mb-3">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="d-flex justify-content-between align-items-center flex-column flex-sm-row mx-4 row"><div class="col-sm-4 col-12 d-flex align-items-center justify-content-sm-start justify-content-center"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select"><option value="7">7</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="100">100</option></select></label></div></div><div class="col-sm-8 col-12 d-flex align-items-center justify-content-sm-end justify-content-center"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="Search Project" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table datatable-project border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 840px;">
          <thead>
            <tr><th class="control sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=": activate to sort column ascending"></th><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 316px;" aria-label="Project: activate to sort column descending" aria-sort="ascending">Project</th><th class="text-nowrap sorting_disabled" rowspan="1" colspan="1" style="width: 133px;" aria-label="Total Task">Total Task</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 124px;" aria-label="Progress: activate to sort column ascending">Progress</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 95px;" aria-label="Hours">Hours</th></tr>
          </thead><tbody><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://dash.yekbun.net/assets/img/icons/brands/xd-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-semibold">Admin template Project</span><small class="text-muted">UI/UX Project</small></div></div></td><td>148/280</td><td><div class="d-flex flex-column"><small class="mb-1">53%</small><div class="progress w-100 me-3" style="height: 6px;"><div class="progress-bar bg-info" style="width: 53%" aria-valuenow="53%" aria-valuemin="0" aria-valuemax="100"></div></div></div></td><td>26:02h</td></tr><tr class="even"><td class="  control" style="display: none;" tabindex="0"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://dash.yekbun.net/assets/img/icons/brands/react-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-semibold">BGC eCommerce App</span><small class="text-muted">React Project</small></div></div></td><td>122/240</td><td><div class="d-flex flex-column"><small class="mb-1">60%</small><div class="progress w-100 me-3" style="height: 6px;"><div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60%" aria-valuemin="0" aria-valuemax="100"></div></div></div></td><td>210:30h</td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://dash.yekbun.net/assets/img/icons/brands/figma-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-semibold">Blockchain Website</span><small class="text-muted">Python Project</small></div></div></td><td>104/137</td><td><div class="d-flex flex-column"><small class="mb-1">95%</small><div class="progress w-100 me-3" style="height: 6px;"><div class="progress-bar bg-success" style="width: 95%" aria-valuenow="95%" aria-valuemin="0" aria-valuemax="100"></div></div></div></td><td>138:39h</td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://dash.yekbun.net/assets/img/icons/brands/html-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-semibold">Crypto Website</span><small class="text-muted">HTML Project</small></div></div></td><td>264/537</td><td><div class="d-flex flex-column"><small class="mb-1">81%</small><div class="progress w-100 me-3" style="height: 6px;"><div class="progress-bar bg-success" style="width: 81%" aria-valuenow="81%" aria-valuemin="0" aria-valuemax="100"></div></div></div></td><td>108:39h</td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://dash.yekbun.net/assets/img/icons/brands/vue-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-semibold">Dashboard Design</span><small class="text-muted">Vuejs Project</small></div></div></td><td>100/190</td><td><div class="d-flex flex-column"><small class="mb-1">90%</small><div class="progress w-100 me-3" style="height: 6px;"><div class="progress-bar bg-success" style="width: 90%" aria-valuenow="90%" aria-valuemin="0" aria-valuemax="100"></div></div></div></td><td>129:45h</td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://dash.yekbun.net/assets/img/icons/brands/react-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-semibold">Dojo React Project</span><small class="text-muted">React Project</small></div></div></td><td>234/378</td><td><div class="d-flex flex-column"><small class="mb-1">73%</small><div class="progress w-100 me-3" style="height: 6px;"><div class="progress-bar bg-info" style="width: 73%" aria-valuenow="73%" aria-valuemin="0" aria-valuemax="100"></div></div></div></td><td>67:10h</td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://dash.yekbun.net/assets/img/icons/brands/xd-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-semibold">Falcon Logo Design</span><small class="text-muted">UI/UX Project</small></div></div></td><td>9/50</td><td><div class="d-flex flex-column"><small class="mb-1">15%</small><div class="progress w-100 me-3" style="height: 6px;"><div class="progress-bar bg-danger" style="width: 15%" aria-valuenow="15%" aria-valuemin="0" aria-valuemax="100"></div></div></div></td><td>89h</td></tr></tbody>
        </table><div class="d-flex justify-content-between mx-4 row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 7 of 11 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
      </div>
    </div>
    <!-- /Project table -->
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
                      <img src="https://dash.yekbun.net/assets/img/icons/misc/pdf.png" alt="PDF image" width="15" class="me-2">
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
                      <img src="https://dash.yekbun.net/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
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
                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                      <img src="https://dash.yekbun.net/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Marrie Patty" data-bs-original-title="Marrie Patty">
                      <img src="https://dash.yekbun.net/assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Jimmy Jackson" data-bs-original-title="Jimmy Jackson">
                      <img src="https://dash.yekbun.net/assets/img/avatars/9.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Kristine Gill" data-bs-original-title="Kristine Gill">
                      <img src="https://dash.yekbun.net/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Nelson Wilson" data-bs-original-title="Nelson Wilson">
                      <img src="https://dash.yekbun.net/assets/img/avatars/14.png" alt="Avatar" class="rounded-circle">
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
