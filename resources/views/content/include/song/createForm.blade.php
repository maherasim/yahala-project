<form id="createForm" method="POST" action="{{ route('musics.store_song') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    {{-- {{dd(request()->id)}} --}}
                    @if(request()->id)
                    <input type="hidden" name="album_id" id="album_id" value="{{request()->id }}">
                    @endif
                    <input type="hidden" name="music_id" id="music_id" value="{{request()->music_id }}">
                    <label class="form-label" for="fullname">Song Title</label>
                    <input type="text" id="video" class="form-control" placeholder="Title Will Add Automatically" name="name" value="" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Choose Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected>Select</option>
                        @foreach($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->first_name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('artist_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Song</label>
                    <input type="file" name="audio" class="form-control" id="audioFile" accept="audio/*" multiple />
                    @error('video')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
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

<script>
    document.getElementById("audioFile").addEventListener("change", function() {
        if(this.files.length == 1){
            let file = this.files[0];
            let title = file.name;
            // console.log(title);
            // document.querySelector('input[name="title"]').value = title;
            this.closest('form').querySelector('input[name="name"]').value=title;
        }else{
            let file = this.files[0];
            let title = file.name;
            // document.querySelector('input[name="title"]').value = title;
            this.closest('form').querySelector('input[name="name"]').value=title;

        }


    });
    </script>
