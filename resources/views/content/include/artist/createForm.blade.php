@php
    $musicCategory = \App\Models\MusicCategory::all();
    $arabicCountries = [
        'sa' => '🇸🇦 Saudi Arabia',
        'ae' => '🇦🇪 United Arab Emirates',
        'qa' => '🇶🇦 Qatar',
        'kw' => '🇰🇼 Kuwait',
        'bh' => '🇧🇭 Bahrain',
        'om' => '🇴🇲 Oman',
        'ye' => '🇾🇪 Yemen',
        'eg' => '🇪🇬 Egypt',
        'sd' => '🇸🇩 Sudan',
        'ly' => '🇱🇾 Libya',
        'dz' => '🇩🇿 Algeria',
        'ma' => '🇲🇦 Morocco',
        'tn' => '🇹🇳 Tunisia',
        'iq' => '🇮🇶 Iraq',
        'lb' => '🇱🇧 Lebanon',
        'ps' => '🇵🇸 Palestine',
        'sy' => '🇸🇾 Syria',
        'jo' => '🇯🇴 Jordan',
        'mr' => '🇲🇷 Mauritania',
        'so' => '🇸🇴 Somalia',
        'dj' => '🇩🇯 Djibouti',
        'km' => '🇰🇲 Comoros',
    ];
@endphp

<!-- Include Flag Icons CSS via CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css">

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
                <div class="col-md-6">
                    <label class="form-label" for="origin">Origin (Country)</label>
                    <select name="origin" class="form-control" id="origin">
                        <option value="">Select Country</option>
                        @foreach($arabicCountries as $code => $country)
                            <option value="{{ $code }}">
                                <span class="fi fi-{{ $code }} me-2"></span> {{ $country }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- First & Last Name -->
                <div class="col-md-6">
                    <label class="form-label" for="first_name">First-Lastname</label>
                    <input type="text" id="first_name" class="form-control" placeholder="Enter First-last Name" name="first_name">
                </div>
                

                <!-- Music Category Dropdown -->
                <div class="col-md-12">
                    <label class="form-label" for="music_category">Music Category</label>
                    <select name="music_category" class="form-control" id="music_category">
                        <option value="">Select Category</option>
                        @foreach($musicCategory as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Arabic Countries Dropdown (Using Flag Icons) -->
              

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

<!-- Add Styling for Flags inside Select -->
<style>
    .fi {
        margin-right: 8px;
    }
</style>
