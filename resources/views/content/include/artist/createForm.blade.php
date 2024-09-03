<form id="{{ isset($form) ? $form : 'createForm'}}" method="POST" action="{{ route('artist.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Gender</label>
                    <select name="gender" class="form-select">
                        <option selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">First Name</label>
                    <input type="text" id="fullname" class="form-control" placeholder="lorem" name="first_name">
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Last Name</label>
                    <input type="text" id="fullname" class="form-control" placeholder="lorem" name="last_name">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="fullname">Province</label>
                    <select name="province" class="form-control province_id" id="province_id" data-url={{ url('get/city') }} value="{{ old('province_id') }}">
                        <option value="">Select province</option>
                        @foreach($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-8">
                    <label class="form-label" for="fullname">City</label>
                    <select name="city" class="form-control city_id" id="city_id">
                        <option value="">Select City</option>
                    </select>
                </div>

                {{-- <div class="col-md-12">
                    <label class="form-label" for="fullname">Image</label>
                    <input type="file" id="fullname" class="form-control" name="image">
                </div> --}}

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-artist-img">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input accept="image/*" type="file" name="image"  id="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" name="status">
                        <option selected value="">Select</option>
                        <option  value="1">Publish</option>
                        <option  value="0">UnPublish</option>

                    </select>

                </div>
            </div>
        </div>
    </div>
</form>
