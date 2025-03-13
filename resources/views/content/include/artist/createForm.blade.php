@php
    $musicCategory = \App\Models\MusicCategory::all();
    $nationality = \App\Models\Nationality::all();
@endphp

<!-- Include Flag Icons CSS via CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css">

<form id="{{ isset($form) ? $form : 'createForm' }}" method="POST" action="{{ route('artist.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                
                <!-- Nationality (Origin) Dropdown -->
                <div class="col-md-6">
                    <label class="form-label" for="origin">Select Origin</label>
                    <select name="origin" class="form-control" id="origin">
                        <option value="">Select Origin</option>
                        @foreach($nationality as $item)
                        <option value="{{ $item->code }}" 
                                data-thumbnail="{{ asset('storage/thumbnails/' . basename($item->thumbnail_path)) }}">
                            {{ $item->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- Country Flag Image (Dynamically Updated) -->
                <div class="col-md-6">
                    <label class="form-label">Country Flag</label>
                    <br>
                    <img id="country-thumbnail" src="" alt="Country Flag" 
                         style="display:none; width:50px; height:30px; margin-top:10px; border:1px solid #ccc;">
                </div>

                <!-- Other Form Fields (Example: Gender) -->
                <div class="col-md-6">
                    <label class="form-label" for="gender">Gender</label>
                    <select name="gender" class="form-select">
                        <option selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <!-- Music Category Dropdown -->
                <div class="col-md-6">
                    <label class="form-label" for="music_category">Music Category</label>
                    <select name="music_category" class="form-control" id="music_category">
                        <option value="">Select Category</option>
                        @foreach($musicCategory as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Image Upload -->
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-artist-img">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input accept="image/*" type="file" name="image" id="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status Dropdown -->
                <div class="col-md-12">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" name="status">
                        <option selected value="">Select</option>
                        <option value="1">Publish</option>
                        <option value="0">UnPublish</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- JavaScript to Show Flag Based on Selection -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    let originSelect = document.getElementById("origin");
    let countryThumbnail = document.getElementById("country-thumbnail");

    originSelect.addEventListener("change", function () {
        let selectedOption = originSelect.options[originSelect.selectedIndex];
        let thumbnailPath = selectedOption.getAttribute("data-thumbnail");

        if (thumbnailPath && thumbnailPath !== "null") {
            countryThumbnail.src = thumbnailPath;
            countryThumbnail.style.display = "block";
        } else {
            countryThumbnail.style.display = "none";
        }
    });
});
</script>
