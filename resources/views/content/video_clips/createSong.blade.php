<form id="{{ isset($form) ? $form : 'createForm' }}" method="POST" action="{{ route('musics.store_song') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                {{-- <div class="col-md-12">
                    <label class="form-label" for="fullname">Song Title</label>
                    <input type="text" id="video" class="form-control" placeholder="Title Will Add Automatically" name="name" value="" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}

                @if (!empty(request()->music_id))
                    <input type="hidden" name="music_id" id="music_id" value="{{ request()->music_id }}">
                @else
                    @php
                        $musics = \App\Models\Music::all();
                    @endphp
                    <div class="col-md-12">
                        <label class="form-label" for="music_id">Choose Music</label>
                        <select class="form-select" aria-label="Select Music" name="music_id">
                            <option selected>Select</option>
                            @foreach ($musics as $music)
                                <option value="{{ $music->id }}">{{ $music->music_category->name ?? 'N/A' }}</option>
                            @endforeach
                        </select>
                        @error('music_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endif

                @isset($artists)
                    <div class="col-md-12">
                        <label class="form-label" for="fullname">Choose Artist</label>
                        <select class="form-select" aria-label="Default select example" name="artist_id">
                            <option selected>Select</option>
                            @foreach ($artists as $artist)
                                <option value="{{ $artist->id }}">{{ ($artist->first_name ?? '') . ' ' . ($artist->last_name ?? '') }}
                                </option>
                            @endforeach
                        </select>
                        @error('artist_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endisset
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Song Upload</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-song">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="audio[]" accept="audio/*" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected value="">Select</option>
                        <option value="0">UnPublish</option>
                        <option value="1">Publish</option>

                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>
