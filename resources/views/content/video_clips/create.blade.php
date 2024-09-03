<form id="createForm" method="POST" action="{{ route('video-clips.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    {{-- video_clip collection id may be replace the music_id in future --}}
                    {{-- <input type="hidden" name="music_id" id="music_id" value="{{request()->music_id }}"> --}}
                    <input type="hidden" name="file_size" id="file_size" value="0">
                    <input type="hidden" name="length" id="length" value="0">
                    <label class="form-label" for="fullname">Video Title</label>
                    <input type="text" id="video" class="form-control" placeholder="Title Will Add Automatically" name="name" readonly value="" />
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
                    {{-- @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror --}}
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Video</label>
                    <input type="file" name="video" class="form-control" id="audioFile" accept="video/*" multiple />
                    @error('video')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="thumbnail">Choose Thumbnail</label>
                    <input type="file" id="thumbnail" class="form-control" name="thumbnail">
                    @error('thumbnail')
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
    function convertStoMs(seconds) {
         let minutes = Math.floor(seconds / 60);
         let extraSeconds = seconds % 60;
         minutes = minutes < 10 ? "0" + minutes : minutes;
         extraSeconds = extraSeconds< 10 ? "0" + extraSeconds : extraSeconds;
         return minutes + ":" + extraSeconds;
      }
    async function getDuration(file) {
            const url = URL.createObjectURL(file);

            return new Promise((resolve) => {
                    const video = document.createElement("video");
                    video.muted = true;
                    const source = document.createElement("source");
                    source.src = url; //--> blob URL
                    video.preload= "metadata";
                    video.appendChild(source);
                    video.onloadedmetadata = function(){
                    resolve(convertStoMs(Math.floor(video.duration)))
                };
        });
    }
    document.getElementById("audioFile").addEventListener("change", function() {
        if(this.files.length == 1){
            let file = this.files[0];
            let title = file.name;
            let size = file.size/(1024*1024);
            console.log(size);
            // document.querySelector('input[name="title"]').value = title;
            getDuration(file).then(length => {
                console.log(length)
                this.closest('form').querySelector('input[name="length"]').value = length;
                this.closest('form').querySelector('input[name="name"]').value=title;
                this.closest('form').querySelector('input[name="file_size"]').value=size.toFixed(2);
            })
            this.closest('form').querySelector('input[name="name"]').value=title;
        }else{
            let file = this.files[0];
            let title = file.name;
            // document.querySelector('input[name="title"]').value = title;
            this.closest('form').querySelector('input[name="name"]').value=title;

        }


    });
    </script>
