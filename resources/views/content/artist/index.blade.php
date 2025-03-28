@extends('layouts/layoutMaster')

@section('title', 'Artists - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <style>
        #DataTables_Table_0_wrapper .row:first-child {
            display: none;
        }
    </style>
@endsection
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection
@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    {{-- Nav TAb --}}
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Artist /</span> All Artist
            </h4>
        </div>
        <div class="">
            {{-- @can('artist.create') --}}
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createartistModal">Add Artist</button>
            {{-- @endcan --}}
            {{-- @can('crea') --}}
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusicModal">Add Songs</button>
            {{-- @endcan --}}
            {{-- @can('artist.create') --}}
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createvideoModal">Add Video
                Clips</button>
            {{-- @endcan --}}
        </div>
    </div>

    <!-- Artist List Table -->
    <div class="card">
        <h5 class="card-header">Artist List</h5>
        <div class="table-responsive container pb-4 text-nowrap">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="row m-4">
                        <div class="col-md-6">
                            <label for="search">Search</label>
                            <input type="search" class="form-control" id="search" name="search">
                        </div>
                        <div class="col-md-6">
                            <label for="sort_by">Sort By</label>
                            <select name="sort_by" id="sort_by" class="form-control">
                                <option value="">Select Sort By</option>
                                <option value="songs">Most Songs</option>
                                <option value="videos">Most Videos</option>
                                <option value="likes">Most Likes</option>
                                <option value="followers">Most Followers</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>
            <table class="table artist-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Artist</th>
                        <th>Total Songs</th>
                        <th>Total Video Clips</th>
                        <th>Like</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script>
        // function delete_service(el) {
        //     let link = $(el).data('id');
        //     $('.deleted-modal').modal('show');
        //     $('#delete_form').attr('action', link);
        // }
    </script>
    {{-- Artist Modal --}}
    <x-modal id="createartistModal" title="Create Artist" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createartistForm" size="md">
        @include('content.include.artist.createForm', ['form' => 'createartistForm'])
    </x-modal>

    {{-- Songs Modal --}}
    <x-modal id="createmusicModal" title="Create Song" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createmusicForm" size="md">
        @include('content.video_clips.createSong', ['form' => 'createmusicForm'])
    </x-modal>

    {{-- Video Clips Modal --}}
    <x-modal id="createvideoModal" title="Create Video Clips" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createvideoForm" size="md">
        @include('content.include.video_clips.createForm', ['form' => 'createvideoForm'])
    </x-modal>

    <x-modal id="musicCategoryModal" title="Move the Songs" saveBtnText="Save" saveBtnType="submit"
        saveBtnForm="musicCategoryForm" size="md">
        @include('content.include.music_category.category', [
            'form' => 'musicCategoryForm',
            'categories' => $categories,
        ])
    </x-modal>

    <x-modal id="artistDetailModal" title="detail-artist" size="xl">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="songs-tab" data-toggle="tab" href="#songs" role="tab"
                        aria-controls="songs" aria-selected="true">
                        Total Songs &nbsp;<span id="total_songs">0</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab"
                        aria-controls="videos" aria-selected="false">
                        Total Video Clips &nbsp;<span id="total_videos">0</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="songs" role="tabpanel" aria-labelledby="songs-tab">
                    <div class="table-responsive text-nowrap pd-t-24px">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Song ID</th>
                                    <th>Song Title</th>
                                    <th>Tracks</th>
                                    <th>Total Listen</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody id="songs-tbody" class="table-border-bottom-0">
                                <tr>
                                    <td class="text-center" colspan="8"><b>No Data found.</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                    <div class="row container pb-4" id="videos-tbody">

                    </div>
                </div>
            </div>
        </div>
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

        $(document).ready(function() {
            $('table').on('click', '.delete-btn', function(event) {
                event.preventDefault(); // Stop any default action
                let form = $(this).closest('.delete-form'); // Get the closest form

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Are you sure you want to delete this?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    customClass: {
                        confirmButton: 'btn btn-danger me-3',
                        cancelButton: 'btn btn-label-secondary'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form after confirmation
                    }
                });
            });
        });
    </script>

    <script>
        $('.province_id').change(function() {
            let url = $(this).data('url');
            let id = $(this).val();
            const self = this;

            $.ajax({
                type: 'get',
                url: url + '/' + id,
                success: function(response) {
                    const cityIdEl = $(self).closest('form').find('.city_id');
                    cityIdEl.html('');
                    $.each(response, function(index, value) {
                        console.log(index, value);
                        cityIdEl.append('<option value="' + value.id + '">' + value.name +
                            '</option>')
                    })
                }
            })

        });

        $(document).ready(function() {
            $('.edit-form .province_id').each(function(index, provinceEl) {
                let url = $(provinceEl).data('url');
                let id = $(provinceEl).val();
                let selected = $(provinceEl).data('selected');

                $.ajax({
                    type: 'get',
                    url: url + '/' + id,
                    success: function(response) {
                        const cityIdEl = $(provinceEl).closest('form').find('.city_id');
                        cityIdEl.html('');
                        $.each(response, function(index, value) {
                            cityIdEl.append('<option value="' + value.id + '" ' + (value
                                    .id == selected ? 'selected' : '') + '>' + value
                                .name + '</option>')
                        })
                    }
                })

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
                            `<input type="hidden" name="${fileInputName}_file_size" value="${response.size}">`;
                    } else {
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_name[]" value="${$('.dz-filename').eq(dropzoneKey).text()}">`;
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_length[]" value="${response.duration}">`;
                        hiddenInputsContainer.innerHTML +=
                            `<input type="hidden" name="${fileInputName}_file_size[]" value="${response.size}">`;
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
            initializeDropzone('#dropzone-artist-img', 'image', 'images', 'image/*');
            initializeDropzone('#dropzone-video', 'video', 'videos', 'video/*');
            initializeDropzone('#dropzone-song', 'songs[]', 'audios', 'audio/*', 100);
            initializeDropzone('#dropzone-audio', 'audio', 'audios', 'audio/*');

        });
    </script>

    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>

    <script>
        $(document).ready(function() {
            $('table').on('click', '.artistDetail', function() {
                let id = $(this).attr('data-id');
                let artistName = $(this).attr('data-name');
                let artistImage = $(this).attr('data-image');
                let artistGender = $(this).attr('data-gender');
                let artistProvince = $(this).attr('data-province');
                let totalSongs = 0;
                let totalSongsMbs = 0;
                let totalVideos = 0;
                let totalVideosMbs = 0;
                let section = $(this).attr('data-section');

                $('#artistName').text(artistName);
                $('#artistImage').text(artistImage);
                $('#artistGender').text(artistGender);
                $('#artistProvince').text(artistProvince);
                $('#artistImage').attr('src', artistImage);
                $.ajax({
                    url: '{{ route('get.artist.detail') }}',
                    method: 'get',
                    data: {
                        id: id,
                        section: section
                    },
                    success: function(response) {
                        // Log the response to see the structure


                        // Clear existing data
                        $('#songs-tbody').empty();
                        $('#videos-tbody').empty();

                        // Update Songs Tab
                        if (response.songs && response.songs.length > 0) {
                            response.songs.forEach(song => {
                                totalSongsMbs += parseFloat(song.file_size);
                                const deleteUrl =
                                    '{{ url('/') }}/musics/delete_song/' + song
                                    ._id;
                                $('#songs-tbody').append(`
                                    <tr>
                                        <td>${song.custom_id || song._id}</td>
                                        <td><p class="m-0">${song.name}</p>
                                            <small><i>${song.file_size >= 1024 ? (song.file_size/1024)+'GB' : song.file_size+'MB'}&nbsp; - ${song.length} - &nbsp;${formatDate(song.created_at)}</i></small>
                                        </td>
                                        <td><audio src="{{ asset('storage/${song.audio}') }}" controls></audio></td>
                                        <td>${song.total_listen || 'N/A'}</td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <!-- Delete -->
                                                <form action="${deleteUrl}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.5" d="M9.84961 4.04492C10.2614 2.87973 11.3727 2.04492 12.6789 2.04492C13.9851 2.04492 15.0964 2.87973 15.5082 4.04492" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                            <path d="M21.1798 6.04492H4.17969" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                            <path d="M19.5124 8.54492L19.0524 15.444C18.8754 18.0989 18.7869 19.4264 17.9219 20.2357C17.0569 21.0449 15.7265 21.0449 13.0657 21.0449H12.2924C9.63155 21.0449 8.30115 21.0449 7.43614 20.2357C6.57113 19.4264 6.48264 18.0989 6.30564 15.444L5.8457 8.54492" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                            <path opacity="0.5" d="M10.1797 11.0449L10.6797 16.0449" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                            <path opacity="0.5" d="M15.1797 11.0449L14.6797 16.0449" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                `);
                            });

                            totalSongs = response.songs.length;
                            totalSongsMbs = (totalSongsMbs >= 1024 ? (totalSongsMbs / 1024)
                                .toFixed(1) + 'GB' : totalSongsMbs.toFixed(1) + 'MB');
                            $('#total_songs').html(`<i>${totalSongs} / ${totalSongsMbs}</i>`);

                        } else {
                            $('#songs-tbody').append(
                                '<tr><td class="text-center" colspan="8"><b>No Data found.</b></td></tr>'
                            );
                        }

                        // Update Videos Tab
                        if (response.clips && response.clips.length > 0) {
                            response.clips.forEach(video => {
                                totalVideosMbs += parseFloat(video.video_file_size);
                                const deleteVideoUrl =
                                    '{{ url('/') }}/video-clips/' + video._id;

                                $('#videos-tbody').append(`
                                    <div class="col-md-4">
                                            <div id="feed-post-1" class="card is-post mt-4 pl-4 pr-4">
                                                <!-- Main wrap -->
                                                <div class="content-wrap">
                                                    <!-- Post header -->
                                                    <div class="card-heading d-flex p-3">
                                                        <!-- User meta -->
                                                        <div class="user-block">
                                                            <div class="user-info">
                                                                <span class="d-flex"><img src="${artistImage}" width="34px" height="34px"><a href="javascript:void(0)" style="line-height:2;">${artistName}</a></span>
                                                                <small class="time"><i>${video.video_file_size >= 1024 ? (video.video_file_size/1024)+'GB' : video.video_file_size+'MB'}&nbsp; - ${video.video_file_length} - &nbsp;${formatDate(video.created_at)}</i></small>
                                                            </div>
                                                        </div>


                                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger" style=" position: absolute;left: auto;right: 8px;">
                                                            <div>
                                                               <form action="${deleteVideoUrl}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                                                 @csrf
                                                                 @method('DELETE')
                                                                 <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                         <path opacity="0.5" d="M9.84961 4.04492C10.2614 2.87973 11.3727 2.04492 12.6789 2.04492C13.9851 2.04492 15.0964 2.87973 15.5082 4.04492" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                         <path d="M21.1798 6.04492H4.17969" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                         <path d="M19.5124 8.54492L19.0524 15.444C18.8754 18.0989 18.7869 19.4264 17.9219 20.2357C17.0569 21.0449 15.7265 21.0449 13.0657 21.0449H12.2924C9.63155 21.0449 8.30115 21.0449 7.43614 20.2357C6.57113 19.4264 6.48264 18.0989 6.30564 15.444L5.8457 8.54492" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                         <path opacity="0.5" d="M10.1797 11.0449L10.6797 16.0449" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                         <path opacity="0.5" d="M15.1797 11.0449L14.6797 16.0449" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                     </svg>
                                                                 </button>
                                                             </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Post header -->

                                                    <!-- Post body -->
                                                    <div class="card-body pt-0 pb-2">
                                                        <div class="post-image">
                                                            <a data-fancybox="post1" data-lightbox-type="comments">
                                                                <video controls="" class="videoclass w-100">
                                                                <source src="{{ asset('storage/${video.video}') }}">
                                                            </video>
                                                            </a>
                                                            <!-- Action buttons -->

                                                        </div>
                                                        <small>${video.video_file_name || 'N/A'}</small>&nbsp;&nbsp;
                                                        <small>${video.total_listen || '0'} Views</small>
                                                    </div>
                                                    <!-- /Post body -->
                                                </div>
                                                <!-- /Main wrap -->
                                            </div>
                                        </div>
                                    `);
                            });

                            totalVideos = response.clips.length;
                            totalVideosMbs = (totalVideosMbs >= 1024 ? (totalVideosMbs / 1024)
                                .toFixed(1) + 'GB' : totalVideosMbs.toFixed(1) + 'MB');
                            $('#total_videos').html(
                                `<i>${totalVideos} / ${totalVideosMbs}</i>`);
                        } else {
                            $('#videos-tbody').append(
                                '<tr><td class="text-center" colspan="8"><b>No Data found.</b></td></tr>'
                            );
                        }
                    }
                });
            });

            function formatDate(dateString) {
                let date = new Date(dateString);
                let options = {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                };
                return date.toLocaleDateString('en-GB', options).replace(',', '');
            }

            $('form').on('submit', function(event) {
                event.preventDefault();
                const form = $(this);
                const formData = new FormData(form[0]);

                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle success
                        $('#editAlbumModal' + formData.get('id')).modal('hide');
                        window.location.reload();
                    },
                    error: function(error) {
                        // Handle error
                        alert('Failed to Submit!');
                    }
                });
            });


            $(document).on('click', '.change_music_category', function() {
                let music_id = $(this).attr('data-music_id');
                $('#music_id').val(music_id);
            });

            $('button').click(function() {
                $('audio, video').each(function() {
                    this.pause(); // Pause the media
                    this.currentTime = 0; // Reset to start
                });
            });

            $('[name="music_type"]').change(function() {
                if ($(this).val() !== "" && $(this).val() !== null) {
                    $('#song-upload').css('display', 'block');
                } else {
                    $('#song-upload').css('display', 'none');
                }
            })
        });

        $(document).ready(function() {
            let table = $('.artist-table').DataTable({
                // processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('artist.index') }}",
                    data: function(d) {
                        d.sort_by = $('#sort_by').val();
                        d.table = 'dataTable';
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'artist_info',
                        name: 'artist_info'
                    },
                    {
                        data: 'total_songs',
                        name: 'total_songs'
                    },
                    {
                        data: 'total_videos',
                        name: 'total_videos'
                    },
                    {
                        data: 'like',
                        name: 'like'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#sort_by').on('change', function() {
                table.draw();
            });

            $('#search').on('keyup', function() {
                table.search($(this).val()).draw();
            });
        });
    </script>
@endsection
@endsection
