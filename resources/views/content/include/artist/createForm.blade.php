@php
    use Illuminate\Support\Facades\Storage;
    $musicCategory = \App\Models\MusicCategory::all();
    $nationalities = \App\Models\Nationality::all();
@endphp

<!-- Include Flag Icons CSS via CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css">

<style>
    /* Style the custom dropdown */
    .custom-select {
        position: relative;
        width: 200px;
    }
    .options {
        position: absolute;
        width: 100%;
        background: white;
        border: 1px solid #ccc;
        display: none;
        list-style: none;
        padding: 0;
        margin: 0;
        z-index: 100;
        text-align: center;
    }

    .options li {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 8px;
        cursor: pointer;
    }

    .options li:hover {
        background: #f0f0f0;
    }

    .options img {
        width: 32px;
        height: 32px;
    }

    .select-box {
        display: flex;
        align-items: center;
        padding: 8px;
        border: 1px solid #ccc;
        cursor: pointer;
        background-color: #fff;
        min-height: 40px;
        justify-content: center;
    }

    .select-box img {
        width: 24px;
        height: 24px;
        display: none; /* Hide image initially */
    }

    .placeholder-text {
        color: #999;
    }
</style>

<form id="{{ isset($form) ? $form : 'createForm' }}" method="POST" action="{{ route('artist.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">

                <!-- Gender -->
                <div class="col-md-6">
                    <label class="form-label" for="gender">Gender</label>
                    <select name="gender" class="form-select">
                        <option selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <!-- Custom Dropdown for Nationality -->
                <div class="col-md-6">
                    <label class="form-label">Select Origin</label>
                    <div class="custom-select" id="dropdown">
                        <div class="select-box" onclick="toggleDropdown()">
                            <img id="selected-img" src="{{ asset('assets/img/moroco.png') }}" alt="Selected Origin">
                            <span id="placeholder-text" class="placeholder-text">Select Origin</span>
                        </div>

                        <input type="hidden" name="origin" id="origin" value="" />

                        <ul class="options">
                            @foreach($nationalities as $nationality)
                                @php
                                    $imagePath = asset('storage/' . $nationality->thumbnail_path);
                                @endphp
                                <li onclick="selectOption('{{ $nationality->id }}', '{{ $imagePath }}')">
                                    <img src="{{ $imagePath }}" alt="{{ $nationality->name }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- First & Last Name -->
                <div class="col-md-6">
                    <label class="form-label" for="first_name">First-Lastname</label>
                    <input type="text" id="first_name" class="form-control" placeholder="Enter First-last Name" name="first_name">
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

<script>
    function toggleDropdown() {
        let dropdown = document.querySelector(".options");
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }

    function selectOption(id, img) {
        let imgElement = document.getElementById("selected-img");
        let placeholderText = document.getElementById("placeholder-text");

        imgElement.src = img;
        imgElement.style.display = "inline-block"; // Show image
        placeholderText.style.display = "none"; // Hide placeholder text

        document.querySelector(".options").style.display = "none";
        document.getElementById("origin").value = id; // Store selected country ID
    }

    document.addEventListener("click", function(event) {
        if (!document.getElementById("dropdown").contains(event.target)) {
            document.querySelector(".options").style.display = "none";
        }
    });
</script>
