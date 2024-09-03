@extends('layouts/layoutMaster')

@section('title', 'Departments')


@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />

@endsection
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="card-header d-flex align-items-center px-2 justify-content-between">
            <h4 class="fw-bold py-3 mb-4">
                Departments
            </h4>
            <div>
                <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal"
                    data-bs-target="#addCategory">Add Department</a>
                <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal"
                    data-bs-target="#addSubcategory">Add SubDepartment</a>
            </div>
        </div>
        <div style="padding:20px" class="card">
            <div class="row dt-row">
                <div class="card-datatable col-sm-12">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Department Thumbnail</th>
                                <th>Total Subdepartments</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $key => $department)
                                <tr class="odd">
                                    <td class="sorting_1">{{ ++$key }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        <img style="border-radius: 100%; height: 43px; width: 43px;"
                                            src="{{ asset('storage/' . $department->thumbnail_path) }}"
                                            alt="{{ $department->name }}">
                                    </td>
                                    <td class="form-check-label show-subdepartment" data-bs-toggle="modal"
                                        data-bs-target="#editSubCategoryModal" data-id="{{ $department->id }}">
                                        {{ $department->departments->count() }}
                                    </td>
                                    <td class="sorting_1">
                                        <a href="javascript:;" class="btn btn-sm btn-icon edit-button"
                                            data-bs-toggle="modal" data-bs-target="#addCategory"
                                            data-id="{{ $department->id }}" data-name="{{ $department->name }}">
                                            <i class="bx bxs-edit"></i>
                                        </a>
                                        <!--ssa-->
                                        <form action="{{ route('department.destroy', $department->id) }}"
                                            onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                            class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                        </form>
                                        <!--ssa-->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Add</span> Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('department.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="department_id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="department_name" class="form-label">Department Name</label>
                                <input type="text" id="department_name" name="name" class="form-control"
                                    placeholder="Enter Department Name" autocomplete="off">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Thumbnail</label>
                                <input type="file" id="emailWithTitle" name="thumbnail_path" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SubCategory Modal -->
    <div class="modal fade" id="addSubcategory" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Subcategory
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Select Department</label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Subdepartment Name</label>
                                <input type="text" id="nameWithTitle" name="name" class="form-control"
                                    placeholder="Enter Subcategory Name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- SubCategories Modal -->
    <div class="modal fade" id="sub-categories" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Subdepartments</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-datatable table-responsive">

                            <div id="subCategoryTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="subCategoryTable_length"><label>Show
                                                <select name="subCategoryTable_length" aria-controls="subCategoryTable"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="subCategoryTable_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="subCategoryTable"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table id="subCategoryTable" class="table border-top no-footer dataTable"
                                            aria-describedby="subCategoryTable_info" style="">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="subCategoryTable" rowspan="1" colspan="1"
                                                        aria-label="#: activate to sort column descending"
                                                        style="width: 0px;" aria-sort="ascending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Category Name: activate to sort column ascending"
                                                        style="width: 0px;">Department Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory: activate to sort column ascending"
                                                        style="width: 0px;">SubDepartment</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory Thumbnail: activate to sort column ascending"
                                                        style="width: 0px;">Subdepartment Thumbnail</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Option: activate to sort column ascending"
                                                        style="width: 0px;">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td valign="top" colspan="5" class="dataTables_empty">No
                                                        data available in table</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="subCategoryTable_info" role="status"
                                            aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="subCategoryTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="subCategoryTable_previous"><a href="#"
                                                        aria-controls="subCategoryTable" data-dt-idx="previous"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="subCategoryTable_next"><a href="#"
                                                        aria-controls="subCategoryTable" data-dt-idx="next"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ SubCategories Modal -->

    <!--ssss-->
    <div class="modal fade" id="editSubCategoryModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-datatable col-sm-12">
                            <table class="datatables-basic table" id="subdepartment-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Subdepartment Name</th>
                                        <th>Department Name</th>
                                        {{-- <th>Option</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal id="createlanguageModal" title="Create Language" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createForm" size="md">
        @include('content.include.language.createForm')
    </x-modal>

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
    </script>

    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script> --}}
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div style=\"display:flex;gap:4px;margin-top:10px;\"><img src=\"" + img_src +
                    "\" style=\"width:20px;height:20px;border-radius:20px;\"/><p style=\"font-weight: 400;font-size:10pt; margin-top:-5px;\">" +
                    text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_example').select2(options);
        $('.select2-container--default .select2-selection--single').css({
            'height': '47px'
        });
        $('.add-button').click(function() {
            $('#department_id').val('');
            $('#department_name').val('');
            $('#modal-title').html("Add Department");
        });
        $('.edit-button').click(function() {
            $('#department_id').val($(this).attr('data-id'));
            $('#modal-title').html("Edit Department");
            $('#department_name').val($(this).attr('data-name'));
        });
        $('.datatables-basic').on('click', '.show-subdepartment', function() {
            let department_id = $(this).attr('data-id');
            $.ajax({
                url: "{{ route('get.SubDepartments', ['id' => 'id']) }}".replace('id', department_id),
                method: "GET",
                success: function(response) {
                    console.log(response.departments);
                    let tbody = '';
                    $.each(response.departments, function(i, v) {
                        tbody += `<tr>` +
                            `<td class="align-middle text-center">${++i}</td>` +
                            `<td class="align-middle text-center">${v.name}</td>` +
                            `<td class="align-middle text-center">${v.department?.name}</td>` +
                            `<tr/>`;
                    })
                    $('#subdepartment-table tbody').html(tbody);
                },
            })
        })
        $('#parent_id').select2();
    </script>
@endsection
@endsection
