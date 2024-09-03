@extends('layouts/layoutMaster')

@section('title', 'App Info')

@section('page-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
{{-- <script src="{{ asset('assets/js/app-ecommerce-product-list.js') }}"></script> --}}
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection

@section('content')

<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">App Settings /</span> App Info
        </h4>

        <div class="row g-4">
            <!-- Options -->
            <div class="col-12 col-lg-12 pt-4 pt-lg-0">
                <div class="tab-content p-0">
                    <!-- Locations Tab -->
                    <div class="tab-pane fade show active" id="locations" role="tabpanel">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title m-0">Address</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('settings.appsetting.appinfo.store')}}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label mb-0" for="country">Country/region</label>
                                            <div class="position-relative"><select id="country" class="select2 form-select" name="country" tabindex="-1" aria-hidden="true">
                                                    <option value="Australia" {{isset($appinfo->country) ? ($appinfo->country == 'Australia' ? 'selected' : '') : ''}}>Australia</option>
                                                    <option value="Bangladesh" {{isset($appinfo->country) ? ($appinfo->country == 'Bangladesh' ? 'selected' : '') : ''}}>Bangladesh</option>
                                                    <option value="Belarus" {{isset($appinfo->country) ? ($appinfo->country == 'Belarus' ? 'selected' : '') : ''}}>Belarus</option>
                                                    <option value="Brazil" {{isset($appinfo->country) ? ($appinfo->country == 'Brazil' ? 'selected' : '') : ''}}>Brazil</option>
                                                    <option value="Canada" {{isset($appinfo->country) ? ($appinfo->country == 'Canada' ? 'selected' : '') : ''}}>Canada</option>
                                                    <option value="China" {{isset($appinfo->country) ? ($appinfo->country == 'China' ? 'selected' : '') : ''}}>China</option>
                                                    <option value="France" {{isset($appinfo->country) ? ($appinfo->country == 'France' ? 'selected' : '') : ''}}>France</option>
                                                    <option value="Germany" {{isset($appinfo->country) ? ($appinfo->country == 'Germany' ? 'selected' : '') : ''}}>Germany</option>
                                                    <option value="India" {{isset($appinfo->country) ? ($appinfo->country == 'India' ? 'selected' : '') : ''}}>India</option>
                                                    <option value="Indonesia" {{isset($appinfo->country) ? ($appinfo->country == 'Indonesia' ? 'selected' : '') : ''}}>Indonesia</option>
                                                    <option value="Israel" {{isset($appinfo->country) ? ($appinfo->country == 'Israel' ? 'selected' : '') : ''}}>Israel</option>
                                                    <option value="Italy" {{isset($appinfo->country) ? ($appinfo->country == 'Italy' ? 'selected' : '') : ''}}>Italy</option>
                                                    <option value="Japan" {{isset($appinfo->country) ? ($appinfo->country == 'Japan' ? 'selected' : '') : ''}}>Japan</option>
                                                    <option value="Korea" {{isset($appinfo->country) ? ($appinfo->country == 'Korea' ? 'selected' : '') : ''}}>Korea, Republic of</option>
                                                    <option value="Mexico" {{isset($appinfo->country) ? ($appinfo->country == 'Mexico' ? 'selected' : '') : ''}}>Mexico</option>
                                                    <option value="Philippines" {{isset($appinfo->country) ? ($appinfo->country == 'Philippines' ? 'selected' : '') : ''}}>Philippines</option>
                                                    <option value="Russia" {{isset($appinfo->country) ? ($appinfo->country == 'Russia' ? 'selected' : '') : ''}}>Russian Federation</option>
                                                    <option value="South Africa" {{isset($appinfo->country) ? ($appinfo->country == 'South Africa' ? 'selected' : '') : ''}}>South Africa</option>
                                                    <option value="Thailand" {{isset($appinfo->country) ? ($appinfo->country == 'Thailand' ? 'selected' : '') : ''}}>Thailand</option>
                                                    <option value="Turkey" {{isset($appinfo->country) ? ($appinfo->country == 'Turkey' ? 'selected' : '') : ''}}>Turkey</option>
                                                    <option value="Ukraine" {{isset($appinfo->country) ? ($appinfo->country == 'Ukraine' ? 'selected' : '') : ''}}>Ukraine</option>
                                                    <option value="United Arab Emirates" {{isset($appinfo->country) ? ($appinfo->country == 'United Arab Emirates' ? 'selected' : '') : ''}}>United Arab Emirates</option>
                                                    <option value="United Kingdom" {{isset($appinfo->country) ? ($appinfo->country == 'United Kingdom' ? 'selected' : '') : ''}}>United Kingdom</option>
                                                    <option value="United States" {{isset($appinfo->country) ? ($appinfo->country == 'United States' ? 'selected' : '') : ''}}>United States</option>
                                                </select></div>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="address">Address</label>
                                            <input type="text" id="address" name="address" value="{{$appinfo->address ?? ''}}" class="form-control" placeholder="Address">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="appartment">Apartment, suite,
                                                etc.</label>
                                            <input type="text" id="appartment" class="form-control" name="appartment" value="{{$appinfo->appartment ?? ''}}" placeholder="Apartment, suite, etc.">
                                        </div>
                                        <div class="col-12 col-md-4"><label class="form-label mb-0" for="phone">Phone</label>
                                            <input type="tel" class="form-control phone-mask" id="phone" placeholder="Phone" value="{{$appinfo->phone ?? ''}}" name="phone" aria-label="phone">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="city">City</label>
                                            <input type="text" id="city" name="city" class="form-control" placeholder="City" value="{{$appinfo->city ?? ''}}">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="state">State</label>
                                            <input type="text" id="state" class="form-control" name="state" placeholder="State" value="{{$appinfo->state ?? ''}}">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label mb-0" for="pincode">PIN Code</label>
                                            <input type="number" id="pincode" class="form-control" name="pincode" placeholder="PIN Code" value="{{$appinfo->pincode ?? ''}}" min="0" max="999999">
                                        </div>
                                        <div class="d-flex justify-content-end gap-3">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Options-->
            </div>
        </div>

    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>

<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }
</script>


@section('page-script')
<script>
    function confirmAction(event, callback) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to delete this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                confirmButton: 'btn btn-danger me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }
</script>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
