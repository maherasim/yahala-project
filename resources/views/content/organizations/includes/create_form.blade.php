<form id="createOrgForm" action="{{ route('add.organization') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <!-- Organization Logo Input -->
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="add-logo-image logo-div-wrapper cursor-pointer position-relative">
                        <div class="logo-preview-div"></div>
                        <div class="position-absolute bottom-0 end-0">
                            <div class="logo-camera-cover d-flex justify-content-center align-items-center me-3 mb-1">
                                <img src="{{ asset('assets/img/icons/donations/logo-camera.png') }}" alt="camera icon"
                                    style="width: 1.5vw;height:1.5vw;">
                            </div>
                        </div>
                    </div>
                    <input type="file" name="image" id="image_logo" class="d-none" required>
                    @error('image')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Organization Details Inputs -->
                <div class="col-md-12 mb-3">
                    <input type="text" id="inputName" name="organization_name" class="form-control"
                        value="{{ old('organization_name') }}" placeholder="Organization Name" required>
                    @error('organization_name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Owner Details Inputs -->
                <div class="col-md-12 bg-custom-gray rounded py-2">
                    <label class="form-label fs-5 text-capitalize" for="inputBankAccount">Owner Details</label>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <select name="gender" class="form-select" required>
                                <option value="" disabled>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" name="first_name" class="form-control" placeholder="Owner Name"
                                value="{{ old('first_name') }}" required>
                            @error('first_name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="last_name" class="form-control" placeholder="Owner Last Name"
                                value="{{ old('last_name') }}" required>
                            @error('last_name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Location Info Inputs -->
                <div class="col-md-12 bg-custom-gray rounded py-2">
                    <label class="form-label fs-5 text-capitalize" for="inputBankAccount">Location Info</label>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" name="country" class="form-control" placeholder="Country"
                                value="{{ old('country') }}" required>
                            @error('country')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="city" class="form-control" placeholder="City"
                                value="{{ old('city') }}" required>
                            @error('city')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="address" class="form-control" style="resize: none;" required>{{ old('address', 'Address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Contact Info Inputs -->
                <div class="col-md-12 bg-custom-gray rounded py-2">
                    <label class="form-label fs-5 text-capitalize" for="inputBankAccount">Contact Info</label>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" name="phone_no" class="form-control" placeholder="Phone No"
                                value="{{ old('phone_no') }}" required>
                            @error('phone_no')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="email" class="form-control" placeholder="E-Mail"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- File Upload Section -->
                <div class="col-12">
                    <div class="card" style="background: #f2f2f2">
                        <h5 class="card-header fs-5">Upload Files</h5>
                        @error('files')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="card-body">
                            <div class="dropzone needsclick" id="dropzone-logo">
                                <div class="dz-message needsclick">
                                    PDF, PNG or JPG
                                </div>
                                <div class="fallback">
                                    <input type="file" name="logo" id="logo"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    'use strict';

    dropZoneInitFunctions.push(function() {
        // previewTemplate: Updated Dropzone default previewTemplate

        const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                                    <div class="dz-details">
                                      <div class="dz-thumbnail" style="width:95%">
                                        <img data-dz-thumbnail class="w-100" style="max-height:184px; object-fit:revert;">
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
                                    </div></div></di>`;

        const dropzoneMulti = new Dropzone('#dropzone-logo', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', 'organizations');
            },
            success: function(file, response) {
                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.innerHTML +=
                    `<input type="hidden" name="logo" value="${response.path}" data-path="${response.path}">`;


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
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });
    });
</script>
