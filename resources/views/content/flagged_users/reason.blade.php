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
    <link href=" https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">
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
        @if(session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div id="error-message" class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="d-flex justify-content-between">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Settings /</span> Reasons
            </h4>
            <div class="">
                <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddTask"><span><i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">New Reason</span></span></button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0">Reasons</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-custom">
                                <thead>
                                    <tr>
                                        <th>Reason Title</th>
                                        <th>Reason Description</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @forelse ($reasons as $reason)
                                        <tr>
                                            <td>{{$reason->title}}</td>
                                            <td>{{$reason->description}}</td>
                                            <td>
                                                <!-- Edit -->
                                                <span data-bs-toggle="modal" data-bs-target="#editModal{{ $reason->_id }}">
                                                    <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                        <img src="{{asset('assets/img/icons/donations/edit-pen.svg')}}" alt="Edit icon" style="width: 1.28vw;height:1.28vw;">
                                                    </button>
                                                </span>
                                                <!-- Delete -->
                                                <form action="{{ route('destroy.reason', $reason->_id) }}" method="post" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-icon delete" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                                    <img src="{{asset('assets/img/icons/donations/trash-bin.png')}}" alt="delete icon" style="width: 1.28vw;height:1.28vw;">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr> 
                                        <div class="modal fade x-modal" id="editModal{{ $reason->_id }}" tabindex="-1" aria-labelledby="editModal{{ $reason->_id }}Label" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                                            <div class="modal-dialog modal-md modal-dialog-centered">
                                              <div class="modal-content">
                                                <div class="modal-header bg-custom-grey pb-2">
                                                  <div class="d-flex w-100">
                                                    <div class="p-2 bg-white rounded-2 mx-auto">
                                                      <h5 class="modal-title fs-3" id="editModal{{ $reason->_id }}Label">Edit Reason</h5>
                                                    </div>
                                                  </div>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('edit.reason',$reason->_id )}}" method="POST" class="pt-0">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label fs-5 text-capitalize" for="reason-title{{$reason->_id}}">Reason Title</label>
                                                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{old('title',$reason->title)}}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label fs-5 text-capitalize" for="reason-description{{$reason->_id}}">Reason Description</label>
                                                            <textarea name="description" class="form-control" style="resize: none;">{{old('description', $reason->description)}}</textarea>
                                                        </div>
                                                        <div class="modal-footer p-0 d-flex justify-content-center pb-2">
                                                          <button type="submit" class="btn btn-light fs-3">Update <img src="{{asset('assets/img/icons/donations/send.png')}}" alt="send btn" class="ms-2"></button>
                                                        </div>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    @empty
                                        <tr>
                                            <td class="text-center text-muted small" colspan="3">No Reasons created Yet!</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Offcanvas to add new user -->
                    <div class="offcanvas offcanvas-end x-modal" tabindex="-1" id="offcanvasAddTask" aria-labelledby="offcanvasAddTaskLabel">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasAddTaskLabel" class="offcanvas-title fs-3">Create Reason</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body mx-0 flex-grow-0">
                            <form action="{{route('add.reason')}}" method="POST" class="pt-0">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label fs-5 text-capitalize" for="task-title">Reason Title</label>
                                    <input type="text" class="form-control" id="task-title" placeholder="Title" name="title" value="{{old('title')}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fs-5 text-capitalize" for="task-title">Reason Description</label>
                                    <textarea name="description" class="form-control" style="resize: none;">{{old('description')}}</textarea>
                                </div>
                                <div class="d-flex w-100 justify-content-center">
                                    <button type="submit" class="btn btn-label-secondary d-flex gap-2">Submit <img src="{{asset('assets/img/icons/donations/send.png')}}" alt="Send Icon ms-2" style="width: 1vw;height:1vw;"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function updatePrice(data, callback) {
                $.ajax({
                    url: "https://dash.yekbun.net/settings/save",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    success: function(res) {
                        callback();
                        toastr.success("Settings successfully updated.");
                    }
                });
            }

            function updateSetting(event) {
                const self = event.target;
                const name = self.dataset.name;
                const value = self.checked ? 'true' : 'false';
                $.ajax({
                    url: 'https://dash.yekbun.net/settings/save',
                    method: 'POST',
                    data: {
                        name: name,
                        value: value
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(res) {
                        toastr.success("Settings successfully updated.");
                    }
                });
            }
        </script>

        <!-- pricingModal -->
        <!--/ pricingModal -->

    </div>
@endsection



@section('page-script')


    <script>
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
