<form id=createForm method="POST" action="{{ route('music.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
              @if (isset($type) && $type == 'music')

              <div class="col-md-12">
                <label class="form-label" for="fullname">Select Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                  <option selected value="">Select</option>
                  @foreach($music_category as $music)
                  <option value="{{ $music->id }}">{{ $music->name ?? '' }}</option>
                  @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              @endif

                @if(isset($type) && $type != 'music')
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Select Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected value="">Select</option>
                        @foreach($artists as $artists)
                        <option value="{{ $artists->id }}">{{ $artists->first_name .' '.$artists->last_name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('artist_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @endif
               {{-- <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">Audio Upload</h5>
                    <div class="card-body">
                        <div class="dropzone needsclick" action="/" id="dropzone-audio">
                            <div class="dz-message needsclick">
                                Drop files here or click to upload
                            </div>
                            <div class="fallback">
                                <input type="file" name="audio[]"  accept="audio/*" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-12">
                <label class="form-label" for="fullname">Status</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected value="1">Select</option>
                    <option value="0">UnPublish</option>
                    <option value="1">Publish</option>

                </select>
                @error('status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input type ="hidden" value="{{ $type ?? 'music' }}" name="type" />
        </div>
    </div>
    </div>
</form>

{{--
<script>
    document.getElementById("audioFile").addEventListener("change", function() {
if(this.files.length == 1){
let file = this.files[0];
let title = file.name;
document.querySelector('input[name="title"]').value = title;
}else{
let file = this.files[0];
let title = file.name;
document.querySelector('input[name="title"]').value = title;
}
});
</script> --}}
