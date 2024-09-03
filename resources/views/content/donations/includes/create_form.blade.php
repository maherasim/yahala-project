<style>
    .select2-container {
        z-index: 5000;
    }
</style>
{{-- form --}}
<form class="DonationForm" id="createLimitedForm" action="{{ route('create.donation') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <!-- Organization selection -->
                <div class="col-md-12 bg-custom-grey rounded-3 py-2" style="background-color: #F2F2F2;" >
                    <input type="hidden" name="organization_id" id="organization_id" required>
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Select Organization</span></div>
                    <div class="d-flex flex-wrap gap-3" >
                        @foreach ($organizations as $org)
                            <div class="category-cover bg-white rounded-3 p-3 d-flex flex-column gap-2 align-items-center cursor-pointer">
                                <input type="hidden" class="organization-id" value="{{$org->_id}}">
                                <div class="rounded-circle banner-cover-div" style="width: 5vw;height: 5vw;">
                                    <img class="rounded-circle bg-secondary" style="object-fit:cover; height: 100%; width: 100%;" src="{{asset('storage/'.$org->image)}}" alt="{{$org->organization_name}}">
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span class="organization-name fs-5">{{$org->organization_name}}</span>
                                    <small class="text-light small join-date">{{$org->created_at->format('F j, Y')}}</small>
                                </div>
                            </div> 
                        @endforeach
                    </div>
                </div>

                <!-- Banner upload -->
                <div style="background-color: #F2F2F2;" class="unlimited-banner col-md-12 bg-custom-grey rounded-3 py-2 border-secondary border-dashed banner-wrapper cursor-pointer">
                    <div  class="d-flex flex-column align-items-center justify-content-center dummy-banner fs-5">
                        <img src="{{asset('assets/img/icons/donations/plus.png')}}" alt="">
                        <span class="">Upload Banner</span>
                        <small class="text-light">JPG or PNG</small>
                    </div>
                </div>
                <input type="file" name="banner" id="banner" class="d-none" accept="image/jpeg, image/png">

                <!-- Title and other fields -->
                <div class="col-md-12 bg-custom-grey rounded-3 py-2" >
                    <div class="m-0 mb-2" style="background-color: #F2F2F2;"><span class="fs-5 text-black fw-bold">Donation Title</span></div>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Type Donation Title" required/>
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <input type="hidden" name="donation_type" value="Limited Donation">
                <div class="col-md-12 bg-custom-grey rounded-3 py-2" style="background-color: #F2F2F2;">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Donation Amount</span></div>
                    <div class="row">
                        <div class="col-6"><input type="text" class="form-control" name="amount" placeholder="Type Amount" required></div>
                        @error('amount')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="col-6">
                            <select type="text" class="form-select" name="currency" required> 
                                <option value="" selected> Currency</option>
                                <option value="$">$</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Payment methods -->
                <div class="col-md-12 bg-custom-grey rounded-3 p-2" style="background-color: #F2F2F2;">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Payment Methods</span></div>
                    <div class="px-3">
                        <div class="row">
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">Pay Pal</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="paypal">
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">G Pay</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="gpay">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">Payment Office</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="payment_office">
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">Others</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="others">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- <form id="createForm" action="{{ route('donations.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Title</label>
                    <input type="text" id="inputTitle" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputDescription">Description</label>
                    <textarea id="inputDescription" name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputOrganizationId">Select Organization</label>
                    <select id="inputOrganizationId" name="organization_id" class="form-control">
                        <option value="" selected>Choose Organization</option>
                        @foreach ($organizations as $org)
                            <option value="{{ $org->_id }}" {{ (int) old('organization_id') === $org->_id? 'selected': '' }}>{{ $org->organization_name }}</option>
                        @endforeach
                    </select>
                    @error('organization_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="inputTags" class="form-label">Tags</label>
                    <input id="inputTags" class="form-control" name="tags" value="{{ old('tags') }}" />
                    @error('tags')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputStartDate">Start Date</label>
                    <input type="text" id="inputStartDate" name="start_date" class="form-control" value="{{ old('start_date') }}">
                    @error('start_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputEndDate">End Date</label>
                    <input type="text" id="inputEndDate" name="end_date" class="form-control" value="{{ old('end_date') }}">
                    @error('end_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form> --}}

@section('page-script')
@parent
{{-- <script>
  document.querySelector('#inputStartDate').flatpickr({
    monthSelectorType: 'static'
  });
  document.querySelector('#inputEndDate').flatpickr({
    monthSelectorType: 'static'
  });

  $("#inputOrganizationId").select2();

</script> --}}
{{-- const tagsEl = document.querySelector('#inputTags');           
const TagifyBasic = new Tagify(tagsEl, {
  // originalInputValueFormat: valuesArr => valuesArr.map(item => item.value)
}); --}}
@endsection