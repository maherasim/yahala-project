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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
@endsection

@section('content')
    <style>
        .file-icon p {
            font-size: large;
        }

        .banner-preview {
            border: 1px solid rgb(189, 189, 189);
            height: 10vw;
            border-radius: 7px;
            width: 10vw;
        }

        .drop-img-preview {
            height: 9vw;
            width: 9vw;
        }
    </style>
    <script>
        const dropZoneInitFunctions = [];
    </script>

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>{{ $type == 'music' ? 'Total Music' : 'Total Songs' }}</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Artist</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>Last week analytics </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Album</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">19,860</h4>
                                <small class="text-danger">(-14%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Size</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Categories</h5>
                <div>
                    <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal"
                        data-bs-target="#addCategory"><i class="bx bx-plus me-0 me-sm-1"></i>Category</a>
                    <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal"
                        data-bs-target="#addSubcategory"> <i class="bx bx-plus me-0 me-sm-1"></i>SubCategory</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table dataTable no-footer table-custom" id="DataTables_Table_0"
                    aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="#: activate to sort column ascending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Category Name: activate to sort column ascending">Category Title
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Category Banner: activate to sort column ascending">Category
                                Banner</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Subcategories: activate to sort column ascending"> Subcategories
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                rowspan="1" colspan="1" aria-label="Options: activate to sort column descending"
                                aria-sort="ascending">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($channels && $channels->count())
                            @foreach ($channels as $item)
                                <tr class="odd">
                                    <!-- Ids -->
                                    <td>{{ $item->_id }}</td>

                                    <!-- Title -->
                                    <td>{{ $item->name }}</td>

                                    <!-- Banner  channel-banners/mountain-cloud.jpg -->
                                    <td>
                                        @if ($item->banner)
                                            <img style="border-radius: 50%; height: 5vw; width: 5vw;"
                                                src="{{ asset('storage/' . $item->banner) }}" alt="{{ $item->name }}">
                                        @else
                                            <span>N/A</span>
                                        @endif
                                    </td>

                                    <!-- Subcategories -->
                                    <td class="form-check-label" data-bs-toggle="modal"
                                        data-bs-target="#editSubCategoryModal{{ $item->_id }}">
                                        {{ $item->subcategories->count() }}</td>

                                    <!-- Options -->
                                    <td class="sorting_1">
                                        <div class="d-flex g-2">
                                            <!-- Edit -->
                                            <a href="javascript:;" class="btn btn-sm btn-icon item-edit edit-button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editCategoryModal{{ $item->_id }}">
                                                <img src="{{ asset('assets/img/icons/donations/edit-pen.svg') }}"
                                                    alt="Edit icon" style="width: 1.28vw;height:1.28vw;">
                                            </a>

                                            <!-- Delete -->
                                            <form action="{{ route('channels.destroy', $item->_id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-icon delete"
                                                    data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                    data-bs-html="true" data-bs-original-title="Remove">
                                                    <img src="{{ asset('assets/img/icons/donations/trash-bin.png') }}"
                                                        alt="delete icon" style="width: 1.28vw;height:1.28vw;">
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="odd">
                                <td valign="top" colspan="5" class="dataTables_empty text-center text-light">No data
                                    available in table</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>



        <!-- Add Category Modal -->
        <div class="modal fade x-modal" id="addCategory" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-custom-grey pb-2">
                        <div class="d-flex w-100">
                            <div class="mx-auto bg-white rounded-3 px-2">
                                <h5 class="modal-title fs-3" id="modal-title"><span class="modal-title-span">Add</span>
                                    Category</h5>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add.channel.category') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="bg-custom-grey p-3 rounded-3">
                                <div class="row g-2 mb-3">
                                    <div class="col mb-0">
                                        <div class="d-flex justify-content-center">
                                            <div
                                                class="banner-preview cursor-pointer border-dashed border-secondary bg-custom-grey">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center h-100">
                                                    <img src="{{ asset('assets/img/icons/donations/plus.png') }}"
                                                        alt="plus icon">
                                                    <span class="fs-6">Add Image</span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" id="emailWithTitle" name="banner"
                                            class="form-control banner_file d-none" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="nameWithTitle" class="form-label fs-5">Category Title</label>
                                        <input type="text" id="nameWithTitle" name="channel_title"
                                            class="form-control" placeholder="Enter Category Name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-light fs-4">Create <img
                                    src="{{ asset('assets/img/icons/donations/send.png') }}" alt="send btn"
                                    class="ms-2"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- SubCategory Modal -->
        <div class="modal fade x-modal" id="addSubcategory" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-custom-grey pb-2">
                        <div class="d-flex w-100">
                            <div class="p-2 bg-white rounded-2 mx-auto">
                                <h5 class="modal-title fs-3" id="modal-title"><span class="modal-title-span">Add</span>
                                    Subcategory</h5>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('channel.subcategory') }}" method="POST" enctype="multipart/form-data"
                        id="subcatForm">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 p-3 bg-custom-grey rounded mb-3">
                                    <div class="col">
                                        <label for="nameWithTitle" class="form-label fs-5 text-capitalize">Select
                                            Category</label>
                                        <div class="d-flex flex-wrap gap-2 my-3">
                                            @foreach ($channels as $item)
                                                <div
                                                    class="category-cover d-flex flex-column gap-2 align-items-center cursor-pointer bg-white p-3 rounded-3">
                                                    <input type="hidden" class="channel-id" name="id"
                                                        value={{ $item->_id }}>
                                                    <div class="rounded-circle banner-cover-div"
                                                        style="width: 5vw;height: 5vw;">
                                                        <img class="rounded-circle w-100 h-100 object-fit-cover"
                                                            src="{{ asset('storage/' . $item->banner) }}"
                                                            alt="{{ $item->name }}">
                                                    </div>
                                                    <small class="banner-name fs-6">{{ $item->name }}</small>
                                                </div>
                                            @endforeach
                                            <input type="hidden" name="category_id" id="channel_category" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-custom-grey rounded-3 py-2 mb-3">
                                    <div class="col-12 d-flex justify-content-center mb-3">
                                        <div
                                            class="rounded drop-img-preview border-dashed border-secondary bg-custom-grey cursor-pointer">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center h-100">
                                                <img src="{{ asset('assets/img/icons/donations/plus.png') }}"
                                                    alt="plus icon">
                                                <span class="fs-6">Add Image</span>
                                            </div>
                                        </div>
                                        <input name="banner" type="file" class="d-none" id="img-file" required />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="nameWithTitle" class="form-label fs-5 text-capitalize">Type
                                            Subcategories</label>
                                        <input type="text" id="nameWithTitle" name="name" class="form-control"
                                            placeholder="Subcategory" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="bg-custom-grey py-2 rounded-3">
                                    <span class="time d-flex">
                                        <label for="permission" class="form-label fs-5 text-capitalize">Allowed
                                            Permissions</label>
                                    </span>

                                    <div class="px-2">
                                        <div class="row">
                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Upload
                                                        Video<i class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i></span>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="upload_video_checkbox" name="upload_video" checked>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Live
                                                        Stream<i class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                    </span>
                                                    <div
                                                        class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="live_stream_checkbox" name="live_stream" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Interview<i
                                                            class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                    </span>
                                                    <div
                                                        class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="interview_checkbox" name="interview" checked>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Create
                                                        Concern<i class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                    </span>
                                                    <div
                                                        class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="create_concern_checkbox" name="create_concern" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Create
                                                        Demons<i class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                    </span>
                                                    <div
                                                        class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="create_demons_checkbox " name="create_demons" checked>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Create
                                                        Confere<i class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                    </span>
                                                    <div
                                                        class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="create_confere_checkbox " name="create_confere" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Write
                                                        Article<i class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                    </span>
                                                    <div
                                                        class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="write_article_checkbox" name="write_article" checked>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 p-1">
                                                <div
                                                    class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                    <span
                                                        class="time d-flex justify-content-center align-items-center">&nbsp;
                                                        <i class="fa fa-circle pr-1"
                                                            style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Share
                                                        Videos<i class="fa fa-circle"
                                                            style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                    </span>
                                                    <div
                                                        class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                        <input class="form-check-input closetogglebtn" type="checkbox"
                                                            id="sharevideos_checkbox " name="share_videos" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-light fs-4 subcatFormBtn">Create <img
                                    src="{{ asset('assets/img/icons/donations/send.png') }}" alt="send btn"
                                    class="ms-2"></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        @foreach ($channels as $item)
            <!-- Edit Category Modal -->
            <div class="modal fade x-modal" id="editCategoryModal{{ $item->_id }}" tabindex="-1"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-custom-grey pb-2">
                            <div class="d-flex w-100">
                                <div class="bg-white mx-auto px-3 rounded-3">
                                    <h5 class="modal-title fs-3" id="modal-title"><span
                                            class="modal-title-span">Edit</span> Category</h5>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form enctype="multipart/form-data" method="POST" action="{{ route('edit.category') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->_id }}">
                            <div class="modal-body">
                                <div class="bg-custom-grey rounded-3 p-3">
                                    <div class="row mb-3">
                                        <div class="col mb-0">
                                            <input type="file" id="banner_file" name="banner"
                                                class="form-control banner_file d-none">
                                            <div class="d-flex justify-content-center">
                                                <div class="banner-preview cursor-pointer">
                                                    <img class="rounded" src="{{ asset('storage/' . $item->banner) }}"
                                                        style="width: 100%; height: 100%; object-fit:cover;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label fs-5">Category Name</label>
                                            <input type="text" id="editCategoryName" name="name"
                                                class="form-control" value="{{ $item->name }}"
                                                placeholder="Enter Category Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-light fs-4">Update <img
                                        src="{{ asset('assets/img/icons/donations/send.png') }}" alt="send btn"
                                        class="ms-2"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Display Subcategory Modal -->
            <div class="modal fade" id="editSubCategoryModal{{ $item->_id }}" tabindex="-1" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- <div class="card-datatable table-responsive"> --}}
                            <div class="card-datatable ">

                                <div id="subCategoryTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    {{-- <div class="row mb-3">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length d-flex w-50 align-items-center" id="subCategoryTable_length">
                                    <label class="me-2">Show </label>
                                    <select name="subCategoryTable_length" aria-controls="subCategoryTable" class="form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    <label class="ms-2"> entries </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="subCategoryTable_filter" class="dataTables_filter">
                                    <div class="d-flex w-50 ms-auto">
                                        <label class="me-2">Search:</label><input type="search" class="form-control form-control-sm" placeholder="Search Subcategory" aria-controls="subCategoryTable">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                                    <div class="row dt-row">
                                        <div class="col-sm-12">
                                            <table id="subCategoryTable" class="table no-footer dataTable table-custom"
                                                aria-describedby="subCategoryTable_info" style="">
                                                <thead>
                                                    <tr>
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="subCategoryTable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="#: activate to sort column descending"
                                                            style="width: 0px;" aria-sort="ascending">ID</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="subCategoryTable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Category Name: activate to sort column ascending"
                                                            style="width: 0px;">Subcategory</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="subCategoryTable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Subcategory: activate to sort column ascending"
                                                            style="width: 0px;">Subcategory Banner</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="subCategoryTable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Subcategory Banner: activate to sort column ascending"
                                                            style="width: 0px;">In Used</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="subCategoryTable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Option: activate to sort column ascending"
                                                            style="width: 0px;">Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($item->subcategories->count() == 0)
                                                        <tr class="odd">
                                                            <td valign="top" colspan="5" class="dataTables_empty">No
                                                                data available in table</td>
                                                        </tr>
                                                    @else
                                                        @foreach ($item->subcategories as $sub)
                                                            <tr class="odd">
                                                                <!-- Ids -->
                                                                <td>{{ $loop->iteration }}</td>

                                                                <!-- Title -->
                                                                <td>{{ $sub->name }}</td>

                                                                <!-- Banner -->
                                                                <td>
                                                                    @if ($sub->banner)
                                                                        <img style="border-radius: 50%; height: 5vw; width: 5vw;"
                                                                            src="{{ asset('storage/' . $sub->banner) }}"
                                                                            alt="{{ $sub->name }}">
                                                                    @else
                                                                        <span>N/A</span>
                                                                    @endif
                                                                </td>
                                                                <!-- in used -->
                                                                <td>5</td>

                                                                <!-- Options -->
                                                                <td class="sorting_1">
                                                                    <div class="d-flex g-2">
                                                                        <!-- Edit -->
                                                                        <a href="javascript:;"
                                                                            class="btn btn-sm btn-icon item-edit edit-button"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editSubCategory{{ $sub->_id }}">
                                                                            <img src="{{ asset('assets/img/icons/donations/edit-pen.svg') }}"
                                                                                alt="Edit icon"
                                                                                style="width: 1.28vw;height:1.28vw;">
                                                                        </a>

                                                                        <!-- Delete -->
                                                                        <form
                                                                            action="{{ route('channels.subcat.destroy', $sub->_id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-sm btn-icon delete"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="top"
                                                                                data-bs-html="true"
                                                                                data-bs-original-title="Remove">
                                                                                <img src="{{ asset('assets/img/icons/donations/trash-bin.png') }}"
                                                                                    alt="delete icon"
                                                                                    style="width: 1.28vw;height:1.28vw;">
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
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
                        </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit SubCategory Modal -->
            @foreach ($item->subcategories as $subcat)
                <div class="modal fade x-modal" id="editSubCategory{{ $subcat->_id }}" tabindex="-10"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-custom-grey pb-2">
                                <div class="d-flex w-100">
                                    <div class="bg-white mx-auto rounded-3 px-3">
                                        <h5 class="modal-title fs-3" id="modal-title"><span
                                                class="modal-title-span">Edit</span> Subcategory</h5>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('edit.channel.subcat', $subcat->_id) }}" method="POST"
                                enctype="multipart/form-data" class="subcatEditForm">
                                @method('PUT')
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 p-3 bg-custom-grey rounded-3 mb-3">
                                            <div class="col">
                                                {{-- <input type="text" name="id" value="{{$subcat->_id}}"> --}}
                                                <label for="nameWithTitle" class="form-label fs-5">Select Category</label>
                                                <div class="d-flex flex-wrap gap-2 my-3">
                                                    @foreach ($channels as $channel)
                                                        @if ($channel->_id === $subcat->category_id)
                                                            <div
                                                                class="subcate_cover category-cover d-flex flex-column gap-2 align-items-center cursor-pointer border border-2 border-primary bg-white p-3 rounded-3">
                                                                <input type="hidden" class="channel-id"
                                                                    value={{ $channel->_id }}>
                                                                <div class="rounded-circle banner-cover-div"
                                                                    style="width: 5vw;height: 5vw;">
                                                                    <img class="rounded-circle"
                                                                        style="object-fit:cover; height: 100%; width: 100%;"
                                                                        src="{{ asset('storage/' . $channel->banner) }}"
                                                                        alt="{{ $channel->name }}">
                                                                </div>
                                                                <small
                                                                    class="banner-name text-primary fs-6">{{ $channel->name }}</small>
                                                            </div>
                                                        @else
                                                            <div
                                                                class="subcate_cover category-cover d-flex flex-column gap-2 align-items-center cursor-pointer bg-white p-3 rounded-3">
                                                                <input type="hidden" class="channel-id"
                                                                    value={{ $channel->_id }}>
                                                                <div class="rounded-circle banner-cover-div"
                                                                    style="width: 5vw;height: 5vw;">
                                                                    <img class="rounded-circle"
                                                                        style="object-fit:cover; height: 100%; width: 100%;"
                                                                        src="{{ asset('storage/' . $channel->banner) }}"
                                                                        alt="{{ $channel->name }}">
                                                                </div>
                                                                <small
                                                                    class="banner-name fs-6">{{ $channel->name }}</small>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <input type="hidden" name="category_id" id="channel_category_id"
                                                        value="{{ $subcat->category_id }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-custom-grey py-3 rounded-3 mb-3">
                                            <div class="col col-12 my-3">
                                                <input type="file" id="banner_file" name="banner"
                                                    class="form-control banner_file d-none">
                                                <div class="d-flex justify-content-center">
                                                    <div class="banner-preview cursor-pointer">
                                                        <img class="rounded"
                                                            src="{{ asset('storage/' . $subcat->banner) }}"
                                                            style="width: 100%; height: 100%; object-fit:cover;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="nameWithTitle{{ $subcat->_id }}"
                                                    class="form-label fs-5">Subcategory Title</label>
                                                <input type="text" name="sub_name" class="form-control"
                                                    value="{{ old('name') ?? $subcat->name }}" placeholder="Subcategory"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="bg-custom-grey rounded-3 py-2">
                                            <span class="time d-flex">
                                                <label for="permission" class="form-label fs-5">Allowed
                                                    Permissions</label>
                                            </span>

                                            <div class="px-2">
                                                <div class="row">
                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Upload
                                                                Video<i class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i></span>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="upload_video_checkbox"
                                                                    name="upload_video"
                                                                    @if ($subcat->upload_video) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Live
                                                                Stream<i class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                            </span>
                                                            <div
                                                                class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="live_stream_checkbox"
                                                                    name="live_stream"
                                                                    @if ($subcat->live_stream) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Interview<i
                                                                    class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                            </span>
                                                            <div
                                                                class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="interview_checkbox"
                                                                    name="interview"
                                                                    @if ($subcat->interview) checked @endif>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Create
                                                                Concern<i class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                            </span>
                                                            <div
                                                                class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="create_concern_checkbox"
                                                                    name="create_concern"
                                                                    @if ($subcat->create_concern) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Create
                                                                Demons<i class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                            </span>
                                                            <div
                                                                class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="create_demons_checkbox "
                                                                    name="create_demons"
                                                                    @if ($subcat->create_demons) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Create
                                                                Confere<i class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                            </span>
                                                            <div
                                                                class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="create_confere_checkbox "
                                                                    name="create_confere"
                                                                    @if ($subcat->create_confere) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Write
                                                                Article<i class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                            </span>
                                                            <div
                                                                class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="write_article_checkbox"
                                                                    name="write_article"
                                                                    @if ($subcat->write_article) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 p-1">
                                                        <div
                                                            class="d-flex justify-content-between rounded-3 align-items-center bg-white p-2">
                                                            <span
                                                                class="time d-flex justify-content-center align-items-center">&nbsp;
                                                                <i class="fa fa-circle pr-1"
                                                                    style="margin-right:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>Share
                                                                Videos<i class="fa fa-circle"
                                                                    style="margin-left:5px;font-size: 4px;margin-top: 2px;color:#c3c3c3;"></i>
                                                            </span>
                                                            <div
                                                                class=" d-flex justify-content-center align-items-center form-check form-switch">
                                                                <input class="form-check-input closetogglebtn"
                                                                    type="checkbox" id="sharevideos_checkbox "
                                                                    name="share_videos"
                                                                    @if ($subcat->share_videos) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer p-0 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-light fs-3 editFormBtn">Update <img
                                            src="{{ asset('assets/img/icons/donations/send.png') }}" alt="send btn"
                                            class="ms-2"></button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach

    </div>

    <!-- Delete Category Modal  ------ EXTRA -->
    <div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteCategoryForm" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="yBXbrpL8jJ2w4HfrArx7J27WfXUMitWn9xZZF07T"> <input
                        type="hidden" name="_method" value="Delete">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Do you really want to delete this
                                    category?</label>
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

    <!-- SubCategories Modal ------ EXTRA -->
    <div class="modal fade" id="edit_Subategory" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-4">
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
                                                </select> entries</label>
                                        </div>
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
                                                        style="width: 0px;">Category Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory: activate to sort column ascending"
                                                        style="width: 0px;">Subcategory</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory Banner: activate to sort column ascending"
                                                        style="width: 0px;">Subcategory Banner</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Option: activate to sort column ascending"
                                                        style="width: 0px;">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td valign="top" colspan="5"
                                                        class="dataTables_empty text-light">No data available in table</td>
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


@section('page-script')
    <script>
        $(document).ready(function() {
            $('.drop-img-preview').on('click', function() {
                $('#img-file').click();
            });

            $('#img-file').on('change', function() {
                const file = this.files[0];
                const reader = new FileReader();
                const previewContainer = $('.drop-img-preview'); // Get the banner-preview element

                reader.onload = function(e) {
                    previewContainer.html('<img class="rounded" src="' + e.target.result +
                        '" alt="Banner Preview" style="width: 100%; height: 100%; object-fit: cover;">'
                        );
                };

                reader.readAsDataURL(file);
            });
            // Click the hidden file input when the preview div is clicked
            $('.banner-preview').on('click', function() {
                $(this).closest('.col').find('.banner_file').click();
            });

            // Handle the file input change event
            $('.banner_file').on('change', function() {
                const file = this.files[0];
                const reader = new FileReader();
                const previewContainer = $(this).closest('.col').find(
                '.banner-preview'); // Get the banner-preview element

                reader.onload = function(e) {
                    previewContainer.html('<img class="rounded" src="' + e.target.result +
                        '" alt="Banner Preview" style="width: 100%; height: 100%; object-fit: cover;">'
                        );
                };

                reader.readAsDataURL(file);
            });

            $(".category-cover").on("click", function() {
                $(".category-cover").each(function() {
                    $(this).find('.banner-name').removeClass('text-primary');
                    $(this).removeClass('border border-2 border-primary');
                });

                $(this).find('.banner-name').toggleClass('text-primary');
                $(this).toggleClass('border border-2 border-primary');

                var channel_id = $(this).find(".channel-id").val();
                $('#channel_category').val(channel_id);
            });

            $(".subcate_cover").on('click', function() {
                $(".subcate_cover").each(function() {
                    $(this).find('.banner-name').removeClass('text-primary');
                    $(this).removeClass('border border-2 border-primary');
                });

                $(this).find('.banner-name').toggleClass('text-primary');
                $(this).toggleClass('border border-2 border-primary');

                var channel_id = $(this).find(".channel-id").val();
                $('#channel_category_id').val(channel_id);
            });

            $(".editFormBtn").on('click', function(e) {
                e.preventDefault();
                var $modal = $(this).closest('.modal');
                var category_id = $('#channel_category_id').val();
                if (category_id === '') {
                    toastr.error('Please select a category before submitting the form.');
                    return false;
                }
                $modal.find(".subcatEditForm").submit();
            });

            $(".subcatFormBtn").on("click", function(e) {
                e.preventDefault();
                var imageFile = $("#img-file").get(0).files[0];
                if (!imageFile) {
                    toastr.error('Please select an image before submitting the form.');
                    return false;
                }
                var category_id = $('#channel_category').val();
                if (category_id === '') {
                    toastr.error('Please select a category before submitting the form.');
                    return false;
                }
                $("#subcatForm").submit();
            });
        });
    </script>
    <script>
        $('#DataTables_Table_0').DataTable();
    </script>

    <script>
        $('.delete').click(function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
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
                if (result.isConfirmed) {
                    form.submit();
                } else {
                    callback();
                }
            });
        });
    </script>
    <script>
        $('.dropify').dropify();
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
