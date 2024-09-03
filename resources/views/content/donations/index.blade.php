@extends('layouts/layoutMaster')

@section('title', 'Donations - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <style>
        .donation-info {
            background: #ffedee;
            min-height: 3vw;
        }

        .w-10 {
            width: 10%;
        }

        .w-60 {
            width: 60%;
        }

        .fs-7 {
            font-size: 0.89rem;
            letter-spacing: 0.01rem;
        }

        .banner-wrapper {
            height: 9vw;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Donations /</span> All Donations
            </h4>
        </div>
        <div class="">
            <!-- <a href="{{ route('donations.create') }}">
              <button class="btn btn-primary" >Add Donation</button>
            </a> -->
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Organization</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>Total Organization</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Donation In Progress</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">19,860</h4>
                                <small class="text-danger">(-14%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="m-0">Donation List</h5>
            <div class="d-flex justify-content-end gap-2">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createLimitedModal"><i
                        class="bx bx-plus me-0 me-sm-1"></i> Limited Donation</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUnlimitedModal"><i
                        class="bx bx-plus me-0 me-sm-1"></i> Unlimited Donation</button>
            </div>
            {{-- @can('donation.create')
            @endcan --}}
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar Name</th>
                        <th>Donation Type</th>
                        <th>Total Reached</th>
                        <th>Expired Date</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($donations as $donation)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <!-- Donation Title -->
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('storage/' . $donation->image) }}" alt="{{ $donation->title }}"
                                        class="rounded-circle" style="width: 2.8vw;height:2.8vw;">
                                    <div class="d-flex flex-column">
                                        {{ $donation->title }}
                                        <small class="text-light">
                                            @if ($donation->organization)
                                                {{ $donation->organization->organization_name }}
                                            @else
                                                Organization not found
                                            @endif
                                        </small>
                                    </div>
                                </div>
                            </td>

                            <!-- Donation type -->
                            <td>{{ $donation->type }}</td>

                            <!-- Total Reach -->
                            <td>0</td>

                            <!-- Expired Date -->
                            <td>{{ $donation->expired_date ? $donation->expired_date : '-' }}</td>

                            <!--  fs-5Status -->
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input closetogglebtn" type="checkbox"
                                        id="flexSwitchCheckChecked " @if ($donation->status) checked @endif>
                                </div>
                            </td>

                            <!-- Options -->
                            <td>
                                <div class="dropdown">
                                    <!-- Edit -->
                                    <span data-bs-toggle="modal" data-bs-target="#editModal{{ $donation->_id }}">
                                        <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                            {{-- <i class="bx bx-edit"></i> --}}
                                            <img src="{{ asset('assets/img/icons/donations/edit-pen.svg') }}"
                                                alt="Edit icon" style="width: 1.28vw;height:1.28vw;">
                                        </button>
                                        {{-- @can('donation.write')
                                        @endcan --}}
                                    </span>

                                    <!-- Delete -->
                                    <form action="{{ route('destroy.donation', $donation->_id) }}"
                                        onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                        class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                            data-bs-original-title="Remove">
                                            <img src="{{ asset('assets/img/icons/donations/trash-bin.png') }}"
                                                alt="delete icon" style="width: 1.28vw;height:1.28vw;">
                                        </button>
                                        {{-- <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button> --}}
                                        {{-- @can('donation.delete')
                                        @endcan --}}
                                    </form>

                                    <!-- Chart -->
                                    <span data-bs-toggle="modal" data-bs-target="#chartModal{{ $donation->_id }}">
                                        <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chart">
                                            <img src="{{ asset('assets/img/icons/donations/user-chart.png') }}"
                                                alt="user chart" style="width: 1.28vw;height:1.28vw;">
                                        </button>
                                        {{-- @can('donation.write')
                                        @endcan --}}
                                    </span>

                                    {{--
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <!-- <a class="dropdown-item" href="{{ route('donations.edit', $donation->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a> -->
                  <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal{{ $donation->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                  <form action="{{ route('donations.destroy', $donation->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                  </form>
                </div>
                --}}
                                </div>
                                <!-- Edit Donation -->
                                <div class="modal fade x-modal" id="editModal{{ $donation->_id }}" tabindex="-1"
                                    aria-labelledby="editModal{{ $donation->_id }}Label" aria-hidden="true"
                                    data-bs-backdrop="static" data-bs-keyboard="false">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header bg-custom-grey pb-2">
                                                <div class="d-flex w-100">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center p-2 gap-1 bg-white rounded-2 mx-auto">
                                                        <img src="{{ asset('assets/img/icons/donations/donate-heart.png') }}"
                                                            alt="Donate Heart" style="width:2vw;">
                                                        <h5 class="modal-title fs-3"
                                                            id="editModal{{ $donation->_id }}Label">Edit Donation</h5>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @include('content.donations.includes.edit_form')
                                            </div>
                                            <div class="modal-footer p-0 d-flex justify-content-center pb-2">
                                                <button type="submit" class="btn btn-light fs-3"
                                                    form="editDonationForm{{ $donation->_id }}">Update <img
                                                        src="{{ asset('assets/img/icons/donations/send.png') }}"
                                                        alt="send btn" class="ms-2"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- User Chat Modal -->
                                <div class="modal fade x-modal" id="chartModal{{ $donation->_id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="chartModal{{ $donation->_id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-custom-grey p-0 p-3">
                                                <div class="modal-title d-flex flex-column">
                                                    <h5 class="fs-3 m-0"> {{ $donation->title }} </h5> <span
                                                        class="text-light">{{ $donation->type }}</span>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-12 mb-3 bg-custom-grey p-2 rounded-3 px-3">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center fs-5 mb-3">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <i class="fa fa-circle text-black"
                                                                style="font-size: 4px;"></i>
                                                            <span class="me-2" style="color:#00c771;">2.500</span>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <i class="fa fa-circle text-black"
                                                                    style="font-size: 4px;"></i> &#8364;
                                                                <i class="fa fa-circle text-black"
                                                                    style="font-size: 4px;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-1">
                                                            <i class="fa fa-circle text-black"
                                                                style="font-size: 4px;"></i>
                                                            <span class="" style="color:#00c771;">80%</span>
                                                            <i class="fa fa-circle text-black"
                                                                style="font-size: 4px;"></i>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-1">
                                                            <i class="fa fa-circle text-black"
                                                                style="font-size: 4px;"></i>
                                                            <span class="me-2" style="color:#00c771;">5.000</span>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <i class="fa fa-circle text-black"
                                                                    style="font-size: 4px;"></i> &#8364;
                                                                <i class="fa fa-circle text-black"
                                                                    style="font-size: 4px;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div class="border-2 border rounded-3 border-danger"
                                                            style="width:4.5vw;"></div>
                                                        <div class="border-2 border rounded-3 border-danger"
                                                            style="width:4.5vw;"></div>
                                                        <div class="border-2 border rounded-3 border-warning"
                                                            style="width:4.5vw;"></div>
                                                        <div class="border-2 border rounded-3 border-warning"
                                                            style="width:4.5vw;"></div>
                                                        <div class="border-2 border rounded" style="width:4.5vw;"></div>
                                                        <div class="border-2 border rounded" style="width:4.5vw;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <audio controls style="width: 100%;">
                                                        <source
                                                            src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"
                                                            type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                                <div class="col-12">
                                                    <h5 class="fs-5">User Donate</h5>
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('storage/' . $donation->image) }}"
                                                                alt="user image" class="rounded-circle"
                                                                style="width: 2.5vw;height:2.5vw;">
                                                            <div class="d-flex flex-column">
                                                                <span class="fs-6">Username</span>
                                                                <small class="text-light">DD.MM.YY - HH:MM</small>
                                                            </div>
                                                        </div>
                                                        <span class="text-success fs-5">$ 10,00</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('storage/' . $donation->image) }}"
                                                                alt="user image" class="rounded-circle"
                                                                style="width: 2.5vw;height:2.5vw;">
                                                            <div class="d-flex flex-column">
                                                                <span class="fs-6">Username</span>
                                                                <small class="text-light">DD.MM.YY - HH:MM</small>
                                                            </div>
                                                        </div>
                                                        <span class="text-success fs-5">$ 10,00</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('storage/' . $donation->image) }}"
                                                                alt="user image" class="rounded-circle"
                                                                style="width: 2.5vw;height:2.5vw;">
                                                            <div class="d-flex flex-column">
                                                                <span class="fs-6">Username</span>
                                                                <small class="text-light">DD.MM.YY - HH:MM</small>
                                                            </div>
                                                        </div>
                                                        <span class="text-success fs-5">$ 10,00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="button" class="btn btn-label-secondary fs-5"
                                                    data-bs-dismiss="modal"><i class="fa fa-circle me-2"
                                                        style="font-size: 4px;"></i>Close <i class="fa fa-circle ms-2"
                                                        style="font-size: 4px;"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="8"><b>No donations found.<b></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->



    <!-- Limited Donation Model -->
    <div class="modal fade x-modal" id="createLimitedModal" tabindex="-1" aria-labelledby="createLimitedModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-custom-grey pb-2" style="background-color: #F2F2F2;">
                    <div class="d-flex w-100" >
                        <div class="d-flex justify-content-center align-items-center p-2 gap-1 bg-white rounded-2 mx-auto">
                            <img src="{{ asset('assets/img/icons/donations/donate-heart.png') }}" alt="Donate Heart"
                                style="width:2vw;">
                            <h5 class="modal-title fs-3" id="createUnlimitedModalLabel">Limited Donation</h5>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="rounded donation-info mb-4 w-75 mx-auto">
                        <div class="d-flex w-100 align-items-center justify-content-center h-100">
                            <div class="d-flex align-items-center justify-content-center w-15">
                                <img src="{{ asset('assets/img/icons/donations/check-circle.png') }}" alt="Check mark">
                            </div>
                            <div class="d-flex flex-column align-items-center gap-2 py-2 w-75">
                                <h5 class="fs-4 text-secondary mb-0">Donation Information</h5>
                                <p class="text-center mb-0 fs-6 px-3" style="color:#FF3257;"> This donation will close
                                    automatically once the target amount is reached.</p>
                            </div>
                        </div>
                    </div>
                    @include('content.donations.includes.create_form')
                </div>
                <div class="modal-footer p-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-light fs-3"  style="background-color: #F2F2F2;" form="createLimitedForm">Create<img
                            src="{{ asset('assets/img/icons/donations/send.png') }}" alt="send btn"
                            class="ms-2"></button>
                </div>
            </div>
        </div>
    </div>
    <!--/ Limited Create Donation Model -->

    <!-- Unlimited Create Donation Model -->
    <div class="modal fade x-modal" id="createUnlimitedModal" tabindex="-1" aria-labelledby="createUnlimitedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content modal-custom-font">
                <div class="modal-header bg-custom-grey pb-2" style="background-color: #F2F2F2;">
                    <div class="d-flex w-100" >
                        <div class="d-flex justify-content-center align-items-center p-2 gap-1 bg-white rounded-2 mx-auto">
                            <img src="{{ asset('assets/img/icons/donations/donate-heart.png') }}" alt="Donate Heart"
                                style="width:2vw;">
                            <h5 class="modal-title fs-3" id="createUnlimitedModalLabel">Unlimited Donation</h5>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="rounded donation-info mb-4 x-modal w-75 mx-auto" >
                        <div class="d-flex w-100 align-items-center justify-content-center h-100" >
                            <div class="d-flex align-items-center justify-content-center w-15">
                                <img src="{{ asset('assets/img/icons/donations/check-circle.png') }}" alt="Check mark">
                            </div>
                            <div class="d-flex flex-column align-items-center py-2 w-75">
                                <h5 class="fs-4 text-secondary mb-0">Donation Information</h5>
                                <p class="text-center mb-0 fs-6 px-3" style="color:#FF3257;"> The donation will
                                    automatically end on the specified date.</p>
                            </div>
                        </div>
                    </div>
                    <form id="createUnlimitedForm" action="{{ route('create.donation') }}" method="post"
                        enctype="multipart/form-data" class="x-modal">
                        @csrf
                        <input type="hidden" name="showCreateFormModal" value="1">
                        <div class="row mb-3">
                            <div class="col-lg-12 mx-auto">
                                <div class="row g-3">
                                    <!-- Organization selection -->
                                    <div class="col-md-12 bg-custom-grey rounded-3 py-2" style="background-color: #F2F2F2;">
                                        <input type="hidden" name="organization_id" id="organ_id" required>
                                        <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Select
                                                Organization</span></div>
                                        <div class="d-flex flex-wrap gap-3">
                                            @foreach ($organizations as $org)
                                                <div
                                                    class="category-wrapper bg-white rounded-3 p-3 d-flex flex-column gap-2 align-items-center cursor-pointer">
                                                    <input type="hidden" class="organization-id"
                                                        value="{{ $org->_id }}">
                                                    <div class="rounded-circle banner-cover-div"
                                                        style="width: 5vw;height: 5vw;">
                                                        <img class="rounded-circle bg-secondary"
                                                            style="object-fit:cover; height: 100%; width: 100%;"
                                                            src="{{ asset('storage/' . $org->image) }}"
                                                            alt="{{ $org->organization_name }}">
                                                    </div>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span
                                                            class="organization-name fs-5">{{ $org->organization_name }}</span>
                                                        <small
                                                            class="text-light small join-date">{{ $org->created_at->format('F j, Y') }}</small>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Banner upload -->
                                    <div style="background-color: #F2F2F2;"
                                        class="limited-banner col-md-12 bg-custom-grey rounded-3 py-2 border-secondary border-dashed banner-wrapper cursor-pointer">
                                        <div 
                                            class="d-flex flex-column align-items-center justify-content-center dummy-banner">
                                            <img src="{{ asset('assets/img/icons/donations/plus.png') }}" alt="">
                                            <span class="">Upload Banner</span>
                                            <small class="text-light">JPG or PNG</small>
                                        </div>
                                    </div>
                                    <input type="file" name="banner" id="org_banner" class="d-none"
                                        accept="image/jpeg, image/png">

                                    <!-- Title and other fields -->
                                    <div class="col-md-12 bg-custom-grey rounded-3 py-2" style="background-color: #F2F2F2;">
                                        <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Donation Title</span>
                                        </div>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ old('title') }}" placeholder="Type Donation Title" required />
                                        @error('title')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <input type="hidden" name="donation_type" value="Unlimited Donation">
                                    <div class="col-md-12 bg-custom-grey rounded-3 py-2" style="background-color: #F2F2F2;">
                                        <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Start Date - End
                                                Date</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-6"><input type="date" class="form-control"
                                                    name="start_date" placeholder="Start Date"
                                                    value="{{ old('start_date') }}" required></div>
                                            @error('start_date')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                            <div class="col-6"><input type="date" class="form-control"
                                                    name="expired_date" placeholder="Expired Date"
                                                    value="{{ old('expired_date') }}" required></div>
                                            @error('expired_date')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Payment methods -->
                                    <div class="col-md-12 bg-custom-grey rounded-3 p-2" style="background-color: #F2F2F2;">
                                        <div class="m-0 mb-2"><span class="fs-5 text-black fw-bold">Payment Methods</span>
                                        </div>
                                        <div class="px-3">
                                            <div class="row">
                                                <div class="col-sm-6 p-1">
                                                    <div style="background-color: #fff;border-radius: 20px;"
                                                        class="d-flex justify-content-between py-1 px-2 align-items-center">
                                                        <span
                                                            class="time d-flex justify-content-center align-items-center fs-5">Pay
                                                            Pal</span>
                                                        <div
                                                            class="d-flex justify-content-center align-items-center form-check form-switch">
                                                            <input class="form-check-input closetogglebtn" type="checkbox"
                                                                id="upload_video_checkbox" name="paypal">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 p-1" style="background-color: #F2F2F2;">
                                                    <div style="background-color: #fff;border-radius: 20px;"
                                                        class="d-flex justify-content-between py-1 px-2 align-items-center">
                                                        <span
                                                            class="time d-flex justify-content-center align-items-center fs-5">G
                                                            Pay</span>
                                                        <div
                                                            class="d-flex justify-content-center align-items-center form-check form-switch">
                                                            <input class="form-check-input closetogglebtn" type="checkbox"
                                                                id="upload_video_checkbox" name="gpay">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="background-color: #F2F2F2;">
                                                <div class="col-sm-6 p-1">
                                                    <div style="background-color: #fff;border-radius: 20px;"
                                                        class="d-flex justify-content-between py-1 px-2 align-items-center">
                                                        <span
                                                            class="time d-flex justify-content-center align-items-center fs-5">Payment
                                                            Office</span>
                                                        <div
                                                            class="d-flex justify-content-center align-items-center form-check form-switch">
                                                            <input class="form-check-input closetogglebtn" type="checkbox"
                                                                id="upload_video_checkbox" name="payment_office">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 p-1" style="background-color: #F2F2F2;">
                                                    <div style="background-color: #fff;border-radius: 20px;"
                                                        class="d-flex justify-content-between py-1 px-2 align-items-center">
                                                        <span
                                                            class="time d-flex justify-content-center align-items-center fs-5">Others</span>
                                                        <div
                                                            class="d-flex justify-content-center align-items-center form-check form-switch">
                                                            <input class="form-check-input closetogglebtn" type="checkbox"
                                                                id="upload_video_checkbox" name="others">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-light fs-3" style="background-color: #F2F2F2;" form="createUnlimitedForm">Create <img
                                    src="{{ asset('assets/img/icons/donations/send.png') }}" alt="send btn"
                                    class="ms-2"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Unlimited Create Donation Model -->
@endsection

@php
    // function formatTagsForTagify($tags) {
    //   return json_encode(array_map(function ($item) {
    //     return ['value' => $item];
    //   }, $tags));
    // }
@endphp

@section('page-script')
    <script>
        $(document).ready(function() {
            var formSubmitting = false;

            // Limited Donations form submission handling
            $(".category-cover").on("click", function() {
                $(".category-cover").each(function() {
                    $(this).removeClass('border border-2 border-primary');
                    $(this).find('.organization-name').removeClass('text-primary');
                });

                $(this).toggleClass('border border-2 border-primary');
                $(this).find('.organization-name').toggleClass('text-primary');

                var org_id = $(this).find(".organization-id").val();
                $('#organization_id').val(org_id);
            });

            $("#createLimitedForm").submit(function(e) {
                e.preventDefault();
                if (formSubmitting) {
                    return false;
                }
                var organization_id = $('#organization_id').val();
                var banner = $('#banner').val();

                if (organization_id === '') {
                    toastr.error('Please select an Organization.');
                    return false;
                }
                if (banner === '') {
                    toastr.error('Please upload a Banner.');
                    return false;
                }
                formSubmitting = true;
                $(this).unbind('submit').submit();
            });

            // Unlimited Donation Form submission handling
            $("#createUnlimitedForm").submit(function(e) {
                e.preventDefault();
                if (formSubmitting) {
                    return false;
                }
                var organization_id = $('#organ_id').val();
                var banner = $('#org_banner').prop('files')[0];

                if (organization_id === '') {
                    toastr.error('Please select an Organization.');
                    return false;
                }
                if (!banner) {
                    toastr.error('Please upload a Banner.');
                    return false;
                }
                formSubmitting = true;
                $(this).unbind('submit').submit();
            });

            $(document).on("click", ".category-wrapper", function() {
                $(".category-wrapper").each(function() {
                    $(this).removeClass('border border-2 border-primary');
                    $(this).find('.organization-name').removeClass('text-primary');
                });

                $(this).toggleClass('border border-2 border-primary');
                $(this).find('.organization-name').toggleClass('text-primary');

                var org_id = $(this).find(".organization-id").val();
                $('#organ_id').val(org_id);
            });

            // Donation Edit Form submission handling
            $("#editDonationForm").submit(function(e) {
                e.preventDefault();
                if (formSubmitting) {
                    return false;
                }
                var organization_id = $('#org_id').val();
                var banner = $('#banner_files').prop('files')[0];

                if (organization_id === '') {
                    toastr.error('Please select an Organization.');
                    return false;
                }
                if (!banner) {
                    toastr.error('Please upload a Banner.');
                    return false;
                }
                formSubmitting = true;
                $(this).unbind('submit').submit();
            });

            $(document).on("click", ".category-wrapper", function() {
                $(".category-wrapper").each(function() {
                    $(this).removeClass('border border-2 border-primary');
                    $(this).find('.organization-name').removeClass('text-primary');
                });

                $(this).toggleClass('border border-2 border-primary');
                $(this).find('.organization-name').toggleClass('text-primary');

                var org_id = $(this).find(".organization-id").val();
                $('#org_id').val(org_id);
            });
        });

        // Banner Handeling for limited, Unlimited and Edit Donations
        $(document).ready(function() {
            $('.limited-banner').on('click', function() {
                $('#org_banner').click();
            });

            $('#org_banner').on('change', function(event) {
                const file = event.target.files[0];
                if (file && (file.type === 'image/jpeg' || file.type === 'image/png')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('.limited-banner').html(
                            `<img src="${e.target.result}" alt="Banner Image" class="w-100 h-100 object-fit-cover">`
                        );
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert('Please select a valid JPG or PNG image.');
                }
            });
            $('.unlimited-banner').on('click', function() {
                $('#banner').click();
            });

            $('#banner').on('change', function(event) {
                const file = event.target.files[0];
                if (file && (file.type === 'image/jpeg' || file.type === 'image/png')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('.unlimited-banner').html(
                            `<img src="${e.target.result}" alt="Banner Image" class="w-100 h-100 object-fit-cover">`
                        );
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert('Please select a valid JPG or PNG image.');
                }
            });

            $('.editDonation-banner').on('click', function() {
                $('#banner_files').click();
            });

            $('#banner_files').on('change', function(event) {
                const file = event.target.files[0];
                if (file && (file.type === 'image/jpeg' || file.type === 'image/png')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('.editDonation-banner').html(
                            `<img src="${e.target.result}" alt="Banner Image" class="w-100 h-100 object-fit-cover">`
                        );
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert('Please select a valid JPG or PNG image.');
                }
            });
        });

        $(document).ready(function() {
            function toggleSections() {
                if ($('#limitedDonationCheck').is(':checked')) {
                    $('#avatarArticleSection').hide();
                    $('#donationAmountSection').show();
                } else {
                    $('#avatarArticleSection').show();
                    $('#donationAmountSection').hide();
                }
            }

            // Run the toggleSections function on page load to set the initial state
            toggleSections();

            // Attach the toggleSections function to the change event of the radio buttons
            $('input[name="donation_type"]').change(function() {
                toggleSections();
            });
        });

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
@endsection
