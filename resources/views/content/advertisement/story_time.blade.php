@extends('layouts/layoutMaster')

@section('title', 'Ads Time')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">

    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
@endsection

@section('content')

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Ads /</span> Ads Time
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header p-0 pt-3 px-3">
                    <div class="card-title d-flex" style="justify-content: space-between">
                        <div>
                            <h5 class="m-0">
                                Ads Time
                            </h5>
                            <small class="m-0">
                                For all users
                            </small>
                        </div>
                    </div>
                </div>
                <hr class="mt-2 mb-0">
                <div class="card-body p-2">
                    <form action="{{ route('adver.time.store') }}" method="POST">
                        @csrf
                        <div class="p-1 rounded mb-2" style="background-color:#F4F4F4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <object data="https://servicebieter.de/svgs/standarduser.svg" width="30"
                                        height="30" class="mt-1 mx-2"></object>
                                </div>
                                <div class="flex-grow-1 row">
                                    <div class="col-9 mb-sm-0 mb-2">
                                        <h6 class="mb-0">Set Length</h6>
                                        <small class="text-muted">Set the maximum time for the Stories</small>
                                    </div>
                                    <div class="col-3 text-end mt-1">
                                        <label class="switch me-0">
                                            <input type="checkbox" name="is_active" class="switch-input"
                                                {{ $storyTime && $storyTime->is_active ? 'checked' : '' }}>
                                            <span class="switch-toggle-slider"></span>
                                            <span class="switch-label"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mx-2">Ads Time size</p>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card-body bg-white rounded-0"
                                        style="padding-top: 30px; padding-bottom: 40px">
                                        <div id="slider-pips"></div>
                                    </div>
                                </div>
                                <div class="col-md-3"
                                    style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" name="display_length" id="slider-pips-input"
                                        value="{{ $storyTime ? $storyTime->length : '' }}" class="form-control text-center"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <!-- Hidden input to store the actual value for form submission -->
                        <input type="hidden" name="length" id="length-hidden"
                            value="{{ $storyTime ? $storyTime->length : '' }}">
                        <center>
                            <button type="submit" class="btn btn-nz border">
                                Edit / Save
                            </button>
                        </center>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
          const slider = document.getElementById('slider-pips');
          const toggleSwitch = document.querySelector('.switch-input');
          const sliderInput = document.getElementById('slider-pips-input');
          const hiddenInput = document.getElementById('length-hidden');
          
          // Ensure savedLength is correctly formatted as a number
          const savedLength = parseFloat("{{ $storyTime ? $storyTime->length : 10 }}");
      
          // Check if savedLength is a valid number before initializing the slider
          if (isNaN(savedLength)) {
              console.error('Invalid savedLength value:', savedLength);
              return;
          }
      
          // Initialize the noUiSlider with the saved length
          noUiSlider.create(slider, {
              start: savedLength, // Use the saved value from the database
              range: {
                  min: 0,
                  max: 100
              },
              step: 1,
              tooltips: true, // Display tooltip
              connect: 'lower',
              pips: {
                  mode: 'values',
                  values: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                  density: 10
              }
          });
      
          // Set the initial value of the input fields
          sliderInput.value = savedLength + ' Second';
          hiddenInput.value = savedLength;
      
          // Function to enable or disable the slider based on the toggle switch state
          function toggleSlider(enable) {
              if (enable) {
                  slider.removeAttribute('disabled');
                  slider.noUiSlider.updateOptions({
                      start: savedLength
                  });
              } else {
                  slider.setAttribute('disabled', true);
                  slider.noUiSlider.updateOptions({
                      start: [savedLength]
                  });
              }
          }
      
          // Update the input fields when the slider value changes (only when enabled)
          slider.noUiSlider.on('update', function (values, handle) {
              if (!slider.hasAttribute('disabled')) {
                  const currentValue = values[handle];
                  sliderInput.value = currentValue + ' Second';
                  hiddenInput.value = currentValue;
              }
          });
      
          // Set the initial state of the slider based on the toggle switch
          toggleSlider(toggleSwitch.checked);
      
          // Add an event listener to the toggle switch to enable/disable the slider
          toggleSwitch.addEventListener('change', function () {
              toggleSlider(this.checked);
          });
      });
      </script>

@endsection
