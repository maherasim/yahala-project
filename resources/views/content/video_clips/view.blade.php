@extends('layouts/layoutMaster')

@section('title', 'Songs')

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
@endsection

@section('content')
    <?php
    $type = 'musics';
    ?>
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
                                {{-- <h4 class="mb-0 me-2">21,459</h4> --}}
                                <h4 class="mb-0 me-2">{{ count($songs) }}</h4>
                                {{-- <small class="text-success">(+29%)</small> --}}
                            </div>
                            {{-- <small>Last week analytics</small> --}}
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
                                <h4 class="mb-0 me-2">{{ count($artists) }}</h4>
                                {{-- <h4 class="mb-0 me-2">4,567</h4> --}}
                                {{-- <small class="text-success">(+18%)</small> --}}
                            </div>
                            {{-- <small>Last week analytics </small> --}}
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
                                <h4 class="mb-0 me-2">{{ count($albums) }}</h4>
                                {{-- <h4 class="mb-0 me-2">19,860</h4> --}}
                                {{-- <small class="text-danger">(-14%)</small> --}}
                            </div>
                            {{-- <small>Last week analytics</small> --}}
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
                                <h4 class="mb-0 me-2">{{ $songs->sum('file_size') }}</h4>
                                {{-- <h4 class="mb-0 me-2">237</h4> --}}
                                {{-- <small class="text-success">(+42%)</small> --}}
                            </div>
                            {{-- <small>Last week analytics</small> --}}
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Nav TAb --}}
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                {{-- <span class="text-muted fw-light">{{ $type == 'music' ? 'Music' : 'Song' }}/</span>{{ $type == 'music' ? 'All Music' : 'All Songs' }} --}}
                <span class="text-muted fw-light">Music/</span>{{ $music->music_category->name ?? 'Songs' }}
            </h4>
        </div>
        <div class="">
            {{-- @can('music.create') --}}
                <button class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createmusicModal">{{ $type == 'music' ? 'Add Music' : 'Add Song' }}</button>
            {{-- @endcan --}}
        </div>
    </div>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Songs List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Track Title</th>
                        <th>Track</th>
                        <th>Total Listen</th>
                        <th>Upload date</th>
                        <th>Total Size</th>
                        <th>Total Time</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($songs as $song)
                        <tr class="odd">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $song->name }}</td>
                            {{-- {{dd($song->audio)}} --}}
                            <td>

                                {{-- <audio src="https://dash.yekbun.net/file_example_MP3_1MG.mp3" controls="" width="20"></audio> --}}
                                <audio src="{{ asset('storage/' . $song->audio) }}" controls="" width="20"></audio>

                            </td>
                            {{-- <td>1.125</td> --}}
                            <td>{{ $song->total_listen ?? 0 }}</td>
                            {{-- <td>12 May 2023</td> --}}
                            <td>{{ $song->upload_date }}</td>
                            <td>{{ $song->file_size ? $song->file_size . ' MB' : 'Unavailable' }}</td>
                            <td>{{ $song->length ? $song->length . ' min' : 'Unavailable' }}</td>
                            <td>
                                <form action="{{ route('musics.delete_song', $song->id) }}"
                                    onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                    class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        data-bs-original-title="Remove"><svg width="25" height="25"
                                            viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M9.99805 4.07373C10.4099 2.90854 11.5211 2.07373 12.8273 2.07373C14.1336 2.07373 15.2448 2.90854 15.6566 4.07373"
                                                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M21.3282 6.07373H4.32812" stroke="#1C274C" stroke-width="1.5"
                                                stroke-linecap="round" />
                                            <path
                                                d="M19.6608 8.57373L19.2009 15.4728C19.0239 18.1278 18.9354 19.4552 18.0704 20.2645C17.2054 21.0737 15.875 21.0737 13.2142 21.0737H12.4408C9.77999 21.0737 8.44959 21.0737 7.58458 20.2645C6.71957 19.4552 6.63108 18.1278 6.45408 15.4728L5.99414 8.57373"
                                                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                            <path opacity="0.5" d="M10.3281 11.0737L10.8281 16.0737" stroke="#1C274C"
                                                stroke-width="1.5" stroke-linecap="round" />
                                            <path opacity="0.5" d="M15.3281 11.0737L14.8281 16.0737" stroke="#1C274C"
                                                stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </form>
                                {{-- <div class="d-flex justify-content-start align-items-center">
                                <!--<button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>-->
                                <!--</button>-->
                                <button type="button" class="btn btn-sm btn-icon popup" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </div> --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="8"><b>No Song found.<b></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    {{-- Create Music model --}}
    <x-modal id="createmusicModal" title="Create Song" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createForm" size="md">

        @include('content.video_clips.createSong')
    </x-modal>


    <div class="modal fade" id="sub-categories" tabindex="-1" aria-hidden="true">
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
                                        <th>Total Listen</th>
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
                                                {{-- @can('music.write') --}}
                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                                                    {{-- @endcan --}}
                                                </button>
                                                {{-- @can('music.delete') --}}
                                                    <button type="button" class="btn btn-sm btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                        data-bs-html="true" data-bs-original-title="Remove"><i
                                                            class="bx bx-trash me-1"></i></button>
                                                {{-- @endcan --}}
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
        <script>
            'use strict';

            function initializeDropzone(dropzoneId, hiddenInputName, folder, acceptedFiles, limit = 1) {
                const previewTemplate = `<div class="row"><div class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                            <div class="dz-details">
                              <div class="dz-thumbnail" style="width:95%">
                                <img data-dz-thumbnail >
                                <span class="dz-nopreview">No preview</span>
                                <div class="dz-success-mark"></div>
                                <div class="dz-error-mark"></div>
                                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                                </div>
                              </div>
                              <div class="dz-filename" data-dz-name></div>
                              <div class="dz-size" data-dz-size></div>
                            </div>
                            </div></div></div>`;
                let dropzoneKey = 0;
                return new Dropzone(dropzoneId, {
                    url: '{{ route('file.upload') }}',
                    previewTemplate: previewTemplate,
                    parallelUploads: 1,
                    maxFilesize: 100,
                    addRemoveLinks: true,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    acceptedFiles: acceptedFiles, // Accept specified file types
                    maxFiles: limit, // Allow only one file to be selected
                    sending: function(file, xhr, formData) {
                        formData.append('folder', folder);
                    },
                    success: function(file, response) {
                        let fileSize = $('.dz-size').eq(dropzoneKey).text();
                        if (file.previewElement) {
                            file.previewElement.classList.add("dz-success");
                        }
                        file.previewElement.dataset.path = response.path;
                        const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                            '.hidden-inputs');
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${hiddenInputName}" value="${response.path}" data-path="${response.path}">`;
                        let fileInputName = hiddenInputName.replace(/\w+\[\]/g, function(match) {
                            return match.slice(0, -2);
                        });
                        if (limit == 1) {

                            hiddenInputsContainer.innerHTML +=
                                `<input type="hidden" name="${fileInputName}_file_name" value="${$('.dz-filename').eq(dropzoneKey).text()}">`;
                            hiddenInputsContainer.innerHTML +=
                                `<input type="hidden" name="${fileInputName}_file_length" value="${response.duration}">`;
                            hiddenInputsContainer.innerHTML +=
                                `<input type="hidden" name="${fileInputName}_file_size" value="${fileSize.match(/[\d.]+/)[0]}">`;
                        } else {
                            hiddenInputsContainer.innerHTML +=
                                `<input type="hidden" name="${fileInputName}_file_name[]" value="${$('.dz-filename').eq(dropzoneKey).text()}">`;
                            hiddenInputsContainer.innerHTML +=
                                `<input type="hidden" name="${fileInputName}_file_length[]" value="${response.duration}">`;
                            hiddenInputsContainer.innerHTML +=
                                `<input type="hidden" name="${fileInputName}_file_size[]" value="${fileSize.match(/[\d.]+/)[0]}">`;
                            dropzoneKey++;
                        }

                    },
                    removedfile: function(file) {
                        const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                            '.hidden-inputs');
                        hiddenInputsContainer.querySelector(
                            `input[data-path="${file.previewElement.dataset.path}"]`).remove();

                        if (file.previewElement != null && file.previewElement.parentNode != null) {
                            file.previewElement.parentNode.removeChild(file.previewElement);
                        }

                        $.ajax({
                            url: '{{ route('file.delete') }}',
                            method: 'delete',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            data: {
                                path: file.previewElement.dataset.path
                            },
                            success: function() {
                                dropzoneKey--;
                            }
                        });

                        return this._updateMaxFilesReachedClass();
                    }
                });
            }

            // Initialize multiple Dropzones
            document.addEventListener('DOMContentLoaded', function() {
                initializeDropzone('#dropzone-song', 'songs[]', 'audios', 'audio/*', 100);
            });
        </script>
        <script>
            function drpzone_init() {
                dropZoneInitFunctions.forEach(callback => callback());
            }
        </script>
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
    @endsection
@endsection
