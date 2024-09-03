<style>
    .select2-container {
        z-index: 5000;
    }
</style>
<form id="editDonationForm{{ $donation->_id }}" action="{{ route('edit.donation', $donation->_id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $donation->_id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <!-- Organization selection -->
                <div class="col-md-12 bg-custom-grey rounded-3 py-2">
                    <input type="hidden" name="organization_id" id="org_id">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Select Organization</span></div>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach ($organizations as $org)
                            @if ($donation->organization_id == $org->_id)
                                <div class="category-wrapper bg-white rounded-3 p-3 d-flex flex-column gap-2 align-items-center cursor-pointer border border-2 border-primary">
                                    <input type="hidden" class="organization-id" value="{{$org->_id}}">
                                    <div class="rounded-circle banner-cover-div" style="width: 5vw;height: 5vw;">
                                        <img class="rounded-circle bg-secondary" style="object-fit:cover; height: 100%; width: 100%;" src="{{asset('storage/'.$org->image)}}" alt="{{$org->organization_name}}">
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <span class="organization-name text-primary fs-5">{{$org->organization_name}}</span>
                                        <small class="text-light small join-date">{{$org->created_at->format('F j, Y')}}</small>
                                    </div>
                                </div> 
                            @else
                                <div class="category-wrapper bg-white rounded-3 p-3 d-flex flex-column gap-2 align-items-center cursor-pointer">
                                    <input type="hidden" class="organization-id" value="{{$org->_id}}">
                                    <div class="rounded-circle banner-cover-div" style="width: 5vw;height: 5vw;">
                                        <img class="rounded-circle bg-secondary" style="object-fit:cover; height: 100%; width: 100%;" src="{{asset('storage/'.$org->image)}}" alt="{{$org->organization_name}}">
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <span class="organization-name fs-5">{{$org->organization_name}}</span>
                                        <small class="text-light small join-date">{{$org->created_at->format('F j, Y')}}</small>
                                    </div>
                                </div> 
                            @endif
                        @endforeach
                    </div>
                </div>
                @if ($donation->image)
                    <div class="col-md-12 editDonation-banner bg-custom-grey rounded-3 py-2 border-secondary border-dashed banner-wrapper cursor-pointer">
                        <img src="{{asset('storage/'.$donation->image)}}" alt="{{$donation->title}}" class="w-100 h-100 object-fit-cover">
                    </div>
                @else
                    <div class="col-md-12 editDonation-banner bg-custom-grey rounded-3 py-2 border-secondary border-dashed banner-wrapper cursor-pointer">
                        <div class="d-flex flex-column align-items-center justify-content-center dummy-banner">
                            <img src="{{asset('assets/img/icons/donations/plus.png')}}" alt="">
                            <span class="">Upload Banner</span>
                            <small class="text-light">JPG or PNG</small>
                        </div>
                    </div>   
                @endif
                <input type="file" name="banner" id="banner_files" class="d-none" accept="image/jpeg, image/png">
                <div class="col-md-12 bg-custom-grey rounded-3 py-2">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Donation Title</span></div>
                    <input type="text" id="inputTitle{{ $donation->_id }}" name="title" class="form-control" value="{{ old('title')?? $donation->title }}" placeholder="Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 bg-custom-grey rounded-3 py-2">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Donation Type</span></div>
                    <div class="row">
                        <div class="col-6"><input class="form-check-input closetogglebtn" name="donation_type" value="Limited Donation" type="radio" id="limitedDonationCheck" {{$donation->type == "Limited Donation" ? "checked" : ""}}> Limited Donation</div>
                        <div class="col-6"><input class="form-check-input closetogglebtn" name="donation_type" value="Unlimited Donation" type="radio" id="unlimitedDonationCheck" {{$donation->type == "Unlimited Donation" ? "checked" : ""}}> Unlimited Donation</div>
                    </div>
                </div>
                <div class="col-md-12 bg-custom-grey rounded-3 py-2" id="avatarArticleSection">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Avatar Article</span></div>
                    <div class="row">
                        <div class="col-6"><input type="date" class="form-control" name="start_date" placeholder="Start Date" value="{{$donation->start_date}}"></div>
                        @error('start_date')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="col-6"><input type="date" class="form-control" name="expired_date" placeholder="Expired Date" value="{{$donation->expired_date}}"></div>
                        @error('expired_date')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 bg-custom-grey rounded-3 py-2" id="donationAmountSection">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Donation Amount</span></div>
                    <div class="row">
                        <div class="col-6"><input type="text" class="form-control" name="amount" placeholder="Type Amount" value="{{old('amount',$donation->amount)}}"></div>
                        @error('amount')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="col-6">
                            <select type="text" class="form-select" name="currency"> 
                                <option value="" selected> Currency</option>
                                <option value="$"{{$donation->currency == "$"? "selected": ""}}>$</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Payment methods -->
                <div class="col-md-12 bg-custom-grey rounded-3 p-2">
                    <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Payment Methods</span></div>
                    <div class="px-3">
                        <div class="row">
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">Pay Pal</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="paypal" {{$donation->paypal ? 'checked' : ''}}>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">G Pay</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="gpay" {{$donation->gpay ? 'checked' : ''}}>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">Payment Office</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="payment_office" {{$donation->payment_office ? 'checked' : ''}}>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-6 p-1">
                                <div style="background-color: #fff;border-radius: 20px;" class="d-flex justify-content-between py-1 px-2 align-items-center">
                                    <span class="time d-flex justify-content-center align-items-center fs-5">Others</span>
                                    <div class="d-flex justify-content-center align-items-center form-check form-switch mb-2">
                                        <input class="form-check-input closetogglebtn" type="checkbox" id="upload_video_checkbox" name="others" {{$donation->others ? 'checked' : ''}}>
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
{{-- <form id="editForm{{ $donation->_id }}" action="{{ route('edit.donations', $donation->_id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $donation->_id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle{{ $donation->_id }}">Title</label>
                    <input type="text" id="inputTitle{{ $donation->_id }}" name="title" class="form-control" value="{{ old('title')?? $donation->title }}" placeholder="Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputDescription{{ $donation->_id }}">Description</label>
                    <textarea id="inputDescription{{ $donation->_id }}" name="description" class="form-control" placeholder="Description">{{ old('description')?? $donation->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label d-block" for="inputOrganizationId{{ $donation->_id }}">Select Organization</label>
                    <select id="inputOrganizationId{{ $donation->_id }}" name="organization_id" class="form-control">
                        <option value="" selected>Choose Organization</option>
                        @foreach ($organizations as $org)
                            <option value="{{ $org->id }}" {{ ($donation->organization? $donation->organization->id: null) === $org->id? 'selected': '' }}>{{ $org->name }}</option>
                        @endforeach
                    </select>
                    @error('organization_id')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputStartDate{{ $donation->_id }}">Start Date</label>
                    <input type="text" id="inputStartDate{{ $donation->_id }}" name="start_date" class="form-control" value="{{ old('start_date')?? $donation->start_date }}">
                    @error('start_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputEndDate{{ $donation->_id }}">End Date</label>
                    <input type="text" id="inputEndDate{{ $donation->_id }}" name="end_date" class="form-control" value="{{ old('end_date')?? $donation->end_date }}">
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
<script>
  document.querySelector('#inputStartDate{{ $donation->_id }}').flatpickr({
    monthSelectorType: 'static'
  });
  document.querySelector('#inputEndDate{{ $donation->_id }}').flatpickr({
    monthSelectorType: 'static'
  });

  $("#inputOrganizationId{{ $donation->_id }}").select2();

  const tagsEl{{ $donation->_id }} = document.querySelector('#inputTags{{ $donation->_id }}');
  const TagifyBasic{{ $donation->_id }} = new Tagify(tagsEl{{ $donation->_id }}, {
    // originalInputValueFormat: valuesArr => valuesArr.map(item => item.value)
  });
</script>
@endsection