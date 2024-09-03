@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="fw-bold py-3 mb-4">
                    <span class="text-muted fw-light">Policy and Terms /</span> All Policy and Terms
                </h4>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-target="#addnewtab" data-bs-toggle="modal">Add New Section</button>
            </div>
        </div>

        <div class="modal fade" id="addnewtab" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel3">Add New Section</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="createForm" method="POST" action="{{ route('add.section') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="sectionName" class="form-label">Section Name</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}"
                                        placeholder="Add Tab Name Here" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-light d-flex gap-2">Create <img
                                    src="{{ asset('assets/img/icons/donations/send.png') }}" alt="Save Icon"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <h6 class="text-muted">Privacy Policy and Terms</h6>
            <div class="nav-align-left mb-4">
                <div class="col-md-3">
                    <ul class="nav nav-pills me-3" role="tablist">
                        <!-- Section Tabs -->
                        @forelse ($sections as $section)
                            <li class="nav-item d-flex align-items-center mb-1" role="presentation">
                                <button type="button" class="nav-link {{ $loop->first ? 'active' : '' }}" role="tab"
                                    data-bs-toggle="tab" data-bs-target="#tab{{ $section->_id }}"
                                    aria-controls="tab{{ $section->_id }}" aria-selected="true">
                                    <i class="bx bx-file me-2"></i>{{ $section->section_name }}
                                </button>
                                <form action="{{ route('destroy.section', $section->_id) }}"
                                    onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                    class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        data-bs-original-title="Remove">
                                        <i class="bx bx-trash me-1 text-danger delete"></i>
                                    </button>
                                </form>
                            </li>
                        @empty
                            <li class="nav-item d-flex align-items-center">No sections added yet!</li>
                        @endforelse
                    </ul>
                </div>
                <div class="tab-content">
                    <!-- Policy Descriptions -->
                    @forelse ($sections as $section)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }} mb-3"
                            id="tab{{ $section->_id }}" role="tabpanel">
                            <form action="{{ route('add.policy') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $section->_id }}">
                                <div class="mb-3">
                                    <label for="policy{{ $section->_id }}">Privacy Policy</label>
                                    <textarea class="form-control" name="description" rows="6" style="resize:none;">{{ $policies->get($section->_id)->description ?? old('description') }}</textarea>
                                </div>
                                {{-- @if ($policies->get($section->_id)->description)
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <form action="{{ route('destroy.desc', $policies->get($section->_id)->id) }}"
                                        onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                        class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                            data-bs-original-title="Remove">
                                            <i class="bx bx-trash me-1 delete" style="color: #fff;"></i> Empty
                                        </button>
                                    </form>
                                @else
                                    <button type="submit" class="btn btn-primary">Save</button>
                                @endif --}}
                                @if (!empty($policies->get($section->_id)->description))
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('destroy.desc', $policies->get($section->_id)->id) }}"
                                        onclick="confirmAction(event, () => { window.location.href = this.href })"
                                        class="btn btn-danger" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                        data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                        <i class="bx bx-trash me-1 delete" style="color: #fff;"></i> Empty
                                    </a>
                                @else
                                    <button type="submit" class="btn btn-primary">Save</button>
                                @endif





                            </form>
                        </div>
                    @empty
                        <div class="d-flex align-items-center text-muted">No Policies Available</div>
                    @endforelse
                </div>
            </div>
        </div>

    </div>
@endsection



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


        $('.delete').click(function() {
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
        })
    </script>
@endsection
