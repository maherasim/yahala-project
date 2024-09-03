<form id="editForm{{ $organization->_id }}" action="{{ route('organization.update', $organization->_id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="hidden-inputs">
        <input type="hidden" name="logo" value="{{ $organization->files }}" data-path="{{ $organization->files }}">
    </div>
    <input type="hidden" name="showEditFormModal{{ $organization->_id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="edit-logo-image logo-div-wrapper cursor-pointer position-relative rounded-circle">
                        <div class="logo-preview-div">
                            <img src="{{asset('storage/'. $organization->image)}}" alt="organization logo" class='w-100 h-100 object-fit-cover rounded-circle'>
                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <div class="logo-camera-cover d-flex justify-content-center align-items-center me-3 mb-1">
                                <img src="{{ asset('assets/img/icons/donations/logo-camera.png') }}" alt="camera icon" style="width: 1.5vw;height:1.5vw;">
                            </div>
                        </div>
                        <input type="file" name="image" id="" class="d-none logo_img">
                    </div>
                    @error('image')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    {{-- <label class="form-label" for="inputName{{ $organization->_id }}">Organization Name</label> --}}
                    <input type="text" id="inputName{{ $organization->_id }}" name="organization_name" class="form-control" value="{{ old('organization_name', $organization->organization_name) }}" placeholder="Organization Name">
                    @error('organization_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Owner Details Inputs -->
                <div class="col-md-12 bg-custom-gray rounded py-2">
                    <label class="form-label fs-5 text-capitalize" for="inputBankAccount">Owner Details</label>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" name="first_name" class="form-control" placeholder="Owner Name" value="{{old('first_name', $organization->first_name)}}" required>
                            @error('first_name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="last_name" class="form-control" value="{{old('last_name', $organization->last_name)}}" placeholder="Owner Last Name" required>
                            @error('last_name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <select name="gender" class="form-select" required>
                                <option value="" disabled {{ $organization->gender ? '' : 'selected' }}>Select Gender</option>
                                <option value="male" {{ $organization->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $organization->gender == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="others" {{ $organization->gender == 'others' ? 'selected' : '' }}>Others</option>
                            </select>
                            @error('gender')
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
                            <input type="text" name="country" class="form-control" value="{{old('country', $organization->country)}}" placeholder="Country" required>
                            @error('country')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="city" class="form-control" value="{{old('city', $organization->city)}}" placeholder="City" required>
                            @error('city')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <textarea name="address" class="form-control" style="resize: none;" required>{{ old('address', $organization->address) }}</textarea>
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
                            <input type="text" name="phone_no" class="form-control" value="{{ old('phone_no', $organization->phone_no) }}" placeholder="Phone No" required>
                            @error('phone_no')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="email" value="{{ old('email', $organization->email) }}" class="form-control" placeholder="E-Mail" required>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12 bg-custom-grey rounded-3 py-2">
                    <h5 class="card-header">Upload Files</h5>
                    <div class="card-body">
                        <div class="dropzone needsclick" action="/" id="dropzone-logo{{ $organization->_id }}">
                            <div class="dz-message needsclick">
                                PDF, PNG or JPG
                            </div>
                            <div class="fallback">
                                <input type="file" name="logo"  id="logo" accept="application/pdf, image/png, image/gif, image/jpeg" />
                            </div>
                        </div>
                    </div>
                </div>
            {{--
                <div class="col-md-12">
                    <label class="form-label" for="logoInput{{ $organization->_id }}">Upload Logo</label>
                    <input type="file" name="logo" id="logoInput{{ $organization->_id }}" class="form-control">
                    @error('logo')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            --}}
            </div>
        </div>
    </div>
</form>

<script>
    'use strict';

    dropZoneInitFunctions.push(function() {
        // previewTemplate: Updated Dropzone default previewTemplate

        const previewTemplate = `<div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center">
                                                <div class="dz-preview dz-file-preview w-100">
                                                    <div class="dz-details">
                                                        <div class="dz-thumbnail" style="width:95%">
                                                            <img data-dz-thumbnail class="w-100" >
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
                                                </div>
                                            </div>
                                        </div>`;

        const dropzoneMulti = new Dropzone('#dropzone-logo{{ $organization->_id }}', {
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
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                const hiddenInput = hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`);
    
                if (hiddenInput) {
                    hiddenInput.remove();
                } else {
                    console.log("not ok");
                }

                if (file.previewElement != null && file.previewElement.parentNode != null) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }

                $.ajax({
                    url: '{{ route('donations.organizations.delete-logo', $organization->_id) }}',
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

        @if ($organization->image)
        window.addEventListener('load', () => {
            var path = "{{ asset('storage/' . $organization->image) }}";
            var rpath = "{{ $organization->image }}";
            const parts = rpath.split("___");

            imageUrlToFile(path,parts).then((file) => {
                file['status'] = "success";
                file['previewElement'] = "div.dz-preview.dz-image-preview";
                file['previewTemplate'] = "div.dz-preview.dz-image-preview";
                file['_removeLink'] = "a.dz-remove";
                // file['webkitRelativePath'] = "";
                file['width'] = 500;
                file['height'] = 500;
                file['accepted'] = true;
                file['dataURL'] = path;
                file['processing'] = true;
                file['addPathToDataset'] = true;
                dropzoneMulti.on('addedfile', function(file) {
                    if (file.addPathToDataset)
                        file.previewElement.dataset.path = rpath;
                });
                file['upload'] = {
                    bytesSent: 0,
                    progress: 0,
                };

                // Update the preview template to include the music title

                dropzoneMulti.emit("addedfile", file, path);
                dropzoneMulti.emit("thumbnail", file, path);
                // dropzoneMulti1.files.push(file);
            });
        });
        @endif
    })
</script>

<script>
    async function imageUrlToFile(imageUrl, fileName) {
        // Fetch the image
        const response = await fetch(imageUrl);
        const blob = await response.blob();

        // Create a File object
        const file = new File([blob], fileName[1], {
            type: blob.type
        });

        return file;
    }
</script>