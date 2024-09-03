@extends('layouts/layoutMaster')

@section('title', 'Posts - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <style>
        .logo-preview-div {
            background: #f2f2f2;
            width: 10vw;
            height: 10vw;
            border-radius: 50%;
        }

        .logo-camera-cover {
            background: #00ba95;
            border-radius: 50%;
            width: 2vw;
            height: 2vw;
        }

        .bg-custom-gray {
            background: #f2f2f2;
        }
    </style>
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Organizations /</span> All Organizations
            </h4>
        </div>
        <div class="">
            <!-- <a href="{{ route('donations.organizations.create') }}">
          <button class="btn btn-primary">Add Organization</button>
        </a> -->
        </div>
    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="m-0">Organization List</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i
                    class="bx bx-plus me-0 me-sm-1"></i> Organization</button>
            {{-- @can('donation.create')
            @endcan --}}
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Organization</th>
                        <th>Join Date</th>
                        <th>Activity</th>
                        <th>Status</th>
                        <th>Options</th>
                        {{-- @can('donation.write')
                        @endcan --}}
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($organizations as $organization)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('storage/' . $organization->image) }}" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="javascript:void(0)" class="text-body text-truncate">
                                            <span class="fw-semibold">{{ $organization->organization_name }}</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <!-- Join Date -->
                            <td>{{ $organization->created_at->format('F j, Y') }}</td>

                            <!-- Activity -->
                            <td>0</td>

                            <!-- status -->
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input closetogglebtn" type="checkbox"
                                        id="flexSwitchCheckChecked " @if ($organization->status) checked @endif>
                                </div>
                            </td>
                            <!-- OPTIONS -->
                            <td>
                                <div>
                                    <!-- Edit -->
                                    <span data-bs-toggle="modal" data-bs-target="#editModal{{ $organization->_id }}">
                                        <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                            <img src="{{ asset('assets/img/icons/donations/edit-pen.svg') }}"
                                                alt="Edit icon" style="width: 1.28vw;height:1.28vw;">
                                        </button>
                                        {{-- @can('donation.write')
                                        @endcan --}}
                                    </span>

                                    <!-- Delete -->
                                    <form action="{{ route('organization.destroy', $organization->_id) }}"
                                        onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                        class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                            data-bs-original-title="Remove">
                                            <img src="{{ asset('assets/img/icons/donations/trash-bin.png') }}"
                                                alt="delete icon" style="width: 1.28vw;height:1.28vw;">
                                        </button>
                                        {{-- @can('donation.delete')
                                        @endcan --}}
                                    </form>
                                </div>
                                {{--
              <div class="dropdown d-inline-block">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <!-- <a class="dropdown-item" href="{{ route('donations.organizations.edit', $organization->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a> -->
                  <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal{{ $organization->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                  <form action="{{ route('donations.organizations.destroy', $organization->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                  </form>
                </div>
              </div>
              --}}
                                <div class="modal fade x-modal" id="editModal{{ $organization->_id }}" tabindex="-1"
                                    aria-labelledby="editModalLabel{{ $organization->_id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header bg-custom-grey pb-2">
                                                <div class="d-flex w-100">
                                                    <div class="bg-white p-2 rounded-3 mx-auto">
                                                        <h5 class="modal-title fs-3"
                                                            id="editModalLabel{{ $organization->_id }}">Edit Organization
                                                        </h5>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @include('content.organizations.includes.edit_form')
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" class="btn btn-label-secondary d-flex gap-2"
                                                    form="editForm{{ $organization->_id }}">Update <img
                                                        src="{{ asset('assets/img/icons/donations/send.png') }}"
                                                        alt="Send Icon"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="8"><b>No organizations found.<b></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

    <div class="modal fade x-modal" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-custom-grey pb-2">
                    <div class="d-flex w-100">
                        <div class="bg-white p-2 rounded-3 mx-auto">
                            <h5 class="modal-title fs-3" id="createModalLabel">Add Organization </h5>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('content.organizations.includes.create_form')
                </div>
                <div class="modal-footer p-5 d-flex justify-content-center">
 

                            <button type="submit" class="btn btn-light fs-3" style="background-color: #F2F2F2;" form="createOrgForm">Create <img
                                src="{{ asset('assets/img/icons/donations/send.png') }}" alt="send btn"
                                class="ms-2"></button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            $('.edit-logo-image').one('click', function(event) {
                event.preventDefault();
                console.log("Edit logo image clicked");

                $(this).find('.logo_img').click();

                // Ensure this does not trigger another click event unintentionally
            });
        });
        $(document).ready(function() {
            $('.logo_img').on('change', function(event) {
                const file = event.target.files[0];
                const $previewDiv = $(this).closest('.edit-logo-image').find('.logo-preview-div');
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgElement = $('<img>', {
                            src: e.target.result,
                            alt: 'organization logo',
                            class: 'w-100 h-100 object-fit-cover rounded-circle'
                        });
                        $previewDiv.empty().append(imgElement);
                    }
                    reader.readAsDataURL(file);
                }
            });

        });

        $(document).on('click', '.add-logo-image', function() {
            $('#image_logo').click();
        });

        $('#image_logo').on('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = $('<img>', {
                        src: e.target.result,
                        alt: 'organization logo',
                        class: 'w-100 h-100 object-fit-cover rounded-circle'
                    });
                    $('.logo-preview-div').empty().append(imgElement);
                }
                reader.readAsDataURL(file);
            }
        });

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
