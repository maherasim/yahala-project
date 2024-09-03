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

@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection
@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    {{-- Nav TAb --}}
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Album /</span> All Album
            </h4>
        </div>
        <div class="">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createalbumModal">Add Album</button>
        </div>
    </div>


    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Album List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Artist</th>
                        {{-- <th>Thumbnail </th> --}}
                        <th>Total Album </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    {{-- {{dd($albums)}} --}}
                    @forelse($albums as $key => $album)
                        <tr>

                            <td>{{++$key}}</td>
                            <td>{{ $album->artist->first_name }} {{ $album->artist->last_name }}</td>
                            {{-- <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3"><img src="{{ $album->image ? asset('storage/'.$album->image) : asset('assets/img/10.png')}}" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                </div>
                            </td> --}}
                            <td> 2</td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <a class="btn  btn-icon" href="{{ url('albums', $album->id) }}"><i class="bx bx-show"></i></a>
                                    <span data-bs-toggle="modal" data-bs-target="#editalbumModal{{ $album->id }}">
                                        <button class="btn  btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i
                                                class="bx bx-edit"></i></button></span>
                                    <form action="{{ route('album.destroy', $album->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf <button
                                        type="submit" class="btn btn-icon" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                    </form>
                                </div>
                            </td>
                            <x-modal id="editalbumModal{{ $album->id }}" title="Edit Album" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $album->id }}" size="md">

                                @include('content.include.album.editForm')
                            </x-modal>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5"><b>No album found.<b></td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

    <!-- SubCategories Modal -->
    <div class="modal fade" id="album-modal-1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-datatable table-responsive">

                            <table class="table border-top">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Album</th>
                                        <th>Total Tracks</th>
                                        <th>Total Sales</th>
                                        <th>Upload date</th>
                                        <th>Total Size</th>
                                        <th>Total Time</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>1</td>
                                        <td>Name of Album</td>
                                        <td>20</td>
                                        <td>1.125</td>
                                        <td>12 May 2023</td>
                                        <td>8 MB</td>
                                        <td>3:30 min</td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <button class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#album-modal-2" data-bs-toggle="tooltip"
                                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                    data-bs-original-title="Edit"><i class="bx bx-show"></i></button>
                                                @can('music.write')
                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                                                    @endcan
                                                </button>
                                                @can('music.delete')
                                                    <button type="button" class="btn btn-sm btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                        data-bs-html="true" data-bs-original-title="Remove"><i
                                                            class="bx bx-trash me-1"></i></button>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ SubCategories Modal -->



    <!-- SubCategories Modal -->
    <div class="modal fade" id="album-modal-2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-datatable table-responsive">

                            <table class="table border-top">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Track Title</th>
                                        <th>Track</th>
                                        <th>Total Sales</th>
                                        <th>Upload date</th>
                                        <th>Total Size</th>
                                        <th>Total Time</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>1</td>
                                        <td>Name of Song</td>
                                        <td>The Player</td>
                                        <td>1.125</td>
                                        <td>12 May 2023</td>
                                        <td>8 MB</td>
                                        <td>3:30 min</td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                @can('music.write')
                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                                                    @endcan
                                                </button>
                                                @can('music.delete')
                                                    <button type="button" class="btn btn-sm btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                        data-bs-html="true" data-bs-original-title="Remove"><i
                                                            class="bx bx-trash me-1"></i></button>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ SubCategories Modal -->

    <div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" style="padding-right: 17px;" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Are you Sure to delete this!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="" method="post" id="delete_form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>

    {{-- Create Music model --}}
    <x-modal id="createalbumModal" title="Create Album" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createForm" size="md">

        @include('content.include.album.createForm')
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
        <script>
            function drpzone_init() {
                dropZoneInitFunctions.forEach(callback => callback());
            }
        </script>
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
    @endsection
@endsection
