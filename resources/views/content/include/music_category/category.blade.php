<form id="{{$form}}" method="POST" action="{{ route('change.musicCategory') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <input type="hidden" name="music_id" id="music_id">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Select Category</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>
