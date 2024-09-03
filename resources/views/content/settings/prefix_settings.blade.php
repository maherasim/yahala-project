@extends('layouts/layoutMaster')

@section('title', 'Settings - Prefix')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <style>
        .nav-tabs .nav-item .nav-link {
            padding: 1rem;
        }

        .edit-price {
            display: flex;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
@endsection

@section('vendor-script')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection


@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Settings /</span> Prefix
        </h4>
        <div class="">
            <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddTask"><span><i
                        class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New
                        Prefix</span></span></button>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="m-0">Edit Prefix</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Prefix for</th>
                                    <th>Prefix ID</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse($prefixes as $prefix)
                                <tr>
                                    <td>{{$prefix->prefix_for}}</td>
                                    <td>
                                        <div class="py-2 rounded" style="width:fit-content">
                                            <div x-show="!editPrice">
                                                <span class="me-4">{{$prefix->prefix_id}}</span>
                                                
                                            </div>
                                            {{-- <div x-show="editPrice" class="edit-price align-items-center gap-1"
                                                style="display: none;">
                                                <input x-model="value" type="number" class="form-control form-control-sm"
                                                    min="1" step="any" value="0" style="width:fit-content;">
                                                <span
                                                    @click="showLoader=true; updatePrice({name, value}, () => {showLoader=false; editPrice=false})">
                                                    <button class="btn bg-primary btn-sm p-1 text-white"
                                                        x-bind:disabled="showLoader" data-bs-toggle="tooltip"
                                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Save">
                                                        <i x-show="!showLoader" class="bx bx-check bx-xs"></i>
                                                        <span x-show="showLoader" class="spinner-border" role="status"
                                                            aria-hidden="true"
                                                            style="height: 1.5em; width: 1.5em; display: none;"></span>
                                                    </button>
                                                </span>
                                                <span @click="editPrice = !editPrice">
                                                    <button class="btn bg-secondary btn-sm p-1 text-white"
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Cancel"><i
                                                            class="tf-icons bx bx-x bx-xs"></i></button>
                                                </span>
                                            </div> --}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <span>
                                                <button class="btn bg-primary btn-sm p-1 text-white"
                                                    {{-- data-bs-toggle="tooltip"  --}}
                                                    {{-- data-bs-offset="0,4"  --}}
                                                    {{-- data-bs-placement="top" --}}
                                                    tabindex="0"
                                                    {{-- data-bs-html="true" --}}
                                                    {{-- data-bs-original-title="Edit Price" --}}
                                                    data-bs-toggle="offcanvas"
                                                    data-bs-target="#offcanvasIpdateTask{{$prefix->id}}"><i
                                                        class="bx bx-pencil bx-xs"></i></button>
                                            </span>
                                            <!-- Offcanvas to update prefix -->
                                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasIpdateTask{{$prefix->id}}"
                                            aria-labelledby="offcanvasAddTaskLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasAddTaskLabel" class="offcanvas-title">Update Prefix</h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body mx-0 flex-grow-0">
                                                <form class="add-new-user pt-0" id="updatePrefixForm{{$prefix->id}}" action="{{ route('settings.voting.prefix.update', $prefix->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    {{-- <input type="hidden" class="form-control" name="id" value="{{$prefix->id}}"/> --}}
                                                    <div class="mb-3">
                                                        <label class="form-label" for="prefix_for">Prefix for</label>
                                                        <input type="text" class="form-control" id="prefix_for" placeholder="{{$prefix->prefix_for}}"
                                                            name="prefix_for" aria-label="Prefix for" value="{{$prefix->prefix_for}}"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="prefix_id">Prefix ID</label>
                                                        <input type="text" class="form-control" id="prefix_id" placeholder="{{$prefix->prefix_id}}"
                                                            name="prefix_id" aria-label="Prefix ID" value="{{$prefix->prefix_id}}"/>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                                                    <button type="reset" class="btn btn-label-secondary"
                                                        data-bs-dismiss="offcanvas">Cancel</button>
                                                </form>
                                            </div>
                                        </div>
                                        <span>
                                        <form action="{{ route('settings.voting.prefix.destroy', $prefix->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                          </form>
                                        </span>
                                            {{-- <span>
                                                  <button type="submit" class="btn bg-primary text-white btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                                          </span> --}}
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                  <td class="text-center" colspan="4"><b>No prefix found.<b></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Offcanvas to add new prefix -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddTask"
                    aria-labelledby="offcanvasAddTaskLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasAddTaskLabel" class="offcanvas-title">Add Prefix</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0">
                        <form class="add-new-user pt-0" id="addNewPrefixForm" onsubmit="{{route('settings.voting.prefix')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="task-title">Prefix for</label>
                                <input type="text" class="form-control" id="task-title" placeholder="Abc"
                                    name="prefix_for" aria-label="Prefix for" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="task-title">Prefix ID</label>
                                <input type="text" class="form-control" id="task-title" placeholder="Abc"
                                    name="prefix_id" aria-label="Prefix ID" />
                            </div>
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                            <button type="reset" class="btn btn-label-secondary"
                                data-bs-dismiss="offcanvas">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function updatePrice(data, callback) {
            $.ajax({
                url: "{{ route('settings.save') }}",
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
                url: '{{ route('settings.save') }}',
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
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
  }
</script>
@endsection


