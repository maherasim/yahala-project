@extends('layouts/layoutMaster')

@section('title', ' Manage  Specials Cards')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
    <link href="
    https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
    " rel="stylesheet">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="
        https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js
        "></script>

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script>
    <script src="{{ asset('assets/js/modal-edit-cc.js') }}"></script>
    <script src="{{ asset('assets/js/modal-add-new-cc.js') }}"></script>
    <script src="{{ asset('assets/js/modal-add-new-address.js') }}"></script>
    <script src="{{ asset('assets/js/app-user-view.js') }}"></script>
    <script src="{{ asset('assets/js/app-user-view-billing.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.popup', function() {
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
            });
        });
    </script>
    <script>  $('.dropify').dropify();</script>
    <script>
      function drpzone_init() {
          dropZoneInitFunctions.forEach(callback => callback());
      }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection

@section('content')
    <style>
        .modal .modal-header .btn-close {
            margin-top: -1.25rem;
            position: fixed;
            margin-left: 495px;
        }

        .dropify-wrapper .dropify-message span.file-icon {
            display: block !important;
            line-height: 50px;
            display: block !important;
            width: 100%;
        }

        .dropify-wrapper .dropify-message p {
            margin: 5px 0 0;
            font-size: 31px !important;
        }
    </style>
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Advertisment </span> /Add Cards
    </h4>


    <ul class="nav nav-pills flex-column flex-md-row mb-3 d-flex justify-content-end align-item-end">

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createcategoryModal">Add New  Cards</button>
    </ul>
    <!--/ User Sidebar -->

    <div class="col-xl-12 col-lg-12 col-md-12 order-0 order-md-12">
        <div class="row">
            @foreach ($cards as $key => $card)
            @php
                $date = \Carbon\Carbon::parse($card->created_at);
                $formattedDate = $date->format('D d M g:i a');
            @endphp
                <div class="col-lg-3">
                    <div id="feed-post-1" class="card is-post">
                        <!-- Main wrap -->
                        <div class="content-wrap">
                            <!-- Post header -->
                            <div class="card-heading justify-content-between">
                                <!-- User meta -->
                                <div class="user-block">
                                    <div class="user-info">
                                        <span class="d-flex"><a href="#">{{$card->card_name}}</a></span>
                                        <span class="time">{{$formattedDate}}</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-item-end">
                                    <form action="{{ route('specials.cards.delete',$card->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /Post header -->
                            <!-- Post body -->
                            <div class="card-body">
                                <div class="post-image">
                                    <a data-fancybox="post1" data-lightbox-type="comments">
                                        <img src="{{ asset('storage/'.$card->card_image) }}" style="width: 375px;height:264px"
                                            data-demo-src="{{ asset('storage/'.$card->card_image) }}"
                                            data-user-popover="1" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- /Post body -->
                        </div>
                        <!-- /Main wrap -->
                    </div>
                </div>
            @endforeach
        </div>
        <!-- User Content -->
    </div>
    <!-- User Content -->

    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-edit-cc')
    @include('_partials/_modals/modal-add-new-address')
    @include('_partials/_modals/modal-add-new-cc')
    @include('_partials/_modals/modal-upgrade-plan')



    <x-modal id="createcategoryModal" title="Add Background" saveBtnText="Add" saveBtnType="submit" saveBtnForm="createForm"
        size="md">

        @include('content.include.advertisement.createform')
    </x-modal>
    <!-- /Modal -->
    <script>
        function confirmAction(event, callback) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?'
                , text: "Are you sure you want to delete this?"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonText: 'Yes, delete it!'
                , customClass: {
                    confirmButton: 'btn btn-danger me-3'
                    , cancelButton: 'btn btn-label-secondary'
                }
                , buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }
    
    </script>
@endsection
