@extends('layouts/layoutMaster')

@section('title', 'Welcome')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection


@section('content')
<script>
  const dropZoneInitFunctions = [];
</script>
<div class="d-flex justify-content-between">
  <div>

</div>

</div>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Welcome to Admin Yekbun</h5>
    <div class="table-responsive text-nowrap">
      
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  
@endsection

@section('page-script')


@endsection