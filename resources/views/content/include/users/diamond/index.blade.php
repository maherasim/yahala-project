@extends('layouts/layoutMaster')

@section('title', 'Users - Academic')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
    @php
        $user = App\Models\User::first();
    @endphp

    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Users /</span> List of Academic Users
            </h4>
        </div>
        <div class="">
            <!-- <a href="{{ route('users.educated.create') }}">
                <button class="btn btn-primary">Add User</button>
              </a> -->
            {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add User</button> --}}
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Session</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>Total Users</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Paid Users</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>Last week analytics </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Active Users</span>
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
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Pending Users</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title">Search Filter</h5>
            <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                <div class="col-md-4 user_role"><select id="UserRole" class="form-select text-capitalize">
                        <option value=""> Select Role </option>
                        <option value="Admin">Admin</option>
                        <option value="Author">Author</option>
                        <option value="Editor">Editor</option>
                        <option value="Maintainer">Maintainer</option>
                        <option value="Subscriber">Subscriber</option>
                    </select></div>
                <div class="col-md-4 user_plan"><select id="UserPlan" class="form-select text-capitalize">
                        <option value=""> Select Plan </option>
                        <option value="Basic">Basic</option>
                        <option value="Company">Company</option>
                        <option value="Enterprise">Enterprise</option>
                        <option value="Team">Team</option>
                    </select></div>
                <div class="col-md-4 user_status"><select id="FilterTransaction" class="form-select text-capitalize">
                        <option value=""> Select Status </option>
                        <option value="Pending" class="text-capitalize">Pending</option>
                        <option value="Active" class="text-capitalize">Active</option>
                        <option value="Inactive" class="text-capitalize">Inactive</option>
                    </select></div>
            </div>
        </div>
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                    <a type="button" class="nav-link {{ $view === 'male' ? 'active' : '' }}" href="?view=male"
                        aria-selected="true"><i class="tf-icons bx bx-male me-1"></i> Male User</a>
                    <div class="{{ $view === 'male' ? 'tab--selected' : '' }} tab__slider"></div>
                </li>
                <li class="nav-item" role="presentation">
                    <a type="button" class="nav-link {{ $view === 'female' ? 'active' : '' }}" href="?view=female"
                        aria-selected="false" tabindex="-1"><i class="tf-icons bx bx-female me-1"></i> Female User</a>
                    <div class="{{ $view === 'female' ? 'tab--selected' : '' }} tab__slider"></div>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <a type="button" class="nav-link {{ $view === 'blocked' ? 'active' : '' }}" href="?view=blocked"
                        aria-selected="false" tabindex="-1"><i class="tf-icons bx bx-block me-1"></i> Blocked User</a>
                    <div class="{{ $view === 'blocked' ? 'tab--selected' : '' }} tab__slider"></div>
                </li> --}}
            </ul>

            <div class="tab-content p-0">

                <div class="tab-pane fade show active" id="solovedReportsTab" role="tabpanel">
                    <div class="table-responsive text-nowrap pd-t-24px">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User</th>
                                    <th>Username</th>
                                    <th>Device Type</th>
                                    <th>Device IMEI</th>
                                    <th>Device Model</th>
                                    <th>Serial Number</th>
                                    <th>Join</th>
                                    <th>Reports</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse($users as $userr)
                                    <tr>
                                        <td>{{ $userr->user_id }}</td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar avatar-sm me-3"><img
                                                            src="{{ $userr->image ? asset('storage/' . $userr->image) : 'https://www.w3schools.com/w3images/avatar2.png' }}"
                                                            alt="Avatar"
                                                            onerror="this.src='https://www.w3schools.com/w3images/avatar2.png'"
                                                            class="rounded-circle"></div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="{{ url('app/user/' . $userr->id . '/account') }}"
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">{{ $userr->name }}</span>
                                                        <span class="fw-semibold">{{ $userr->last_name }}</span>
                                                    </a>
                                                    <small class="text-muted">{{ $userr->email }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $userr->username }}</td>
                                        <td>{{ $userr->device_type }}</td>
                                        <td>{{ $userr->device_imei }}</td>
                                        <td>{{ $userr->device_model }}</td>
                                        <td>{{ $userr->device_serial }}</td>
                                        <td>{{ $userr->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $userr->reports->count() }}</td>
                                        <td>
                                            @if ((int) $userr->status)
                                                <span class="badge bg-label-success me-1">Active</span>
                                            @else
                                                <span class="badge bg-label-secondary me-1">Disabled</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                {{-- <span data-bs-toggle="modal"
                                                    data-bs-target="#blockModal{{ $user->id }}">
                                                    @can('users.write')
                                                    <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Block"><i
                                                            class="bx bx-block"></i></button>
                                                    @endcan
                                                </span>
                                                <span data-bs-toggle="modal"
                                                    data-bs-target="#warnModal{{ $user->id }}">
                                                    @can('users.write')
                                                    <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Warn"><i
                                                            class='bx bx-alarm-exclamation'></i></button>
                                                    @endcan
                                                </span>
                                                 --}}
                                                <span data-bs-toggle="modal" class="upgradeUser"
                                                    data-bs-target="#upgradeModal" data-name="{{$userr->name}}" data-id="{{$userr->id}}" data-image="{{ $userr->image ? asset('storage/' . $userr->image) : 'https://www.w3schools.com/w3images/avatar2.png' }}">
                                                    @can('users.write')
                                                        <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                            data-bs-original-title="Upgrade"><i
                                                                class='bx bx-medal'></i></button>
                                                    @endcan
                                                </span>
                                                <form action="{{ route('users.educated.destroy', $userr->id) }}"
                                                    onsubmit="confirmAction(event, () => event.target.submit())"
                                                    class="d-inline" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    {{-- @can('users.delete') --}}
                                                    <button type="submit" class="btn btn-sm btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true"
                                                        data-bs-original-title="Remove"><i
                                                            class="bx bx-trash me-1"></i></button>
                                                    {{-- @endcan --}}
                                                </form>
                                                {{-- <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                      <div class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="{{ route('users.educated.edit', $userr->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a> -->
                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal{{ $userr->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                        <form action="{{ route('users.educated.destroy', $userr->id) }}" method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i></button>
                        </form>
                      </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="6"><b>No users found.<b></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <x-modal id="editModal{{ $user->id }}" title="Edit VIP User" saveBtnText="Update" saveBtnType="submit"
        saveBtnForm="editForm{{ $user->id }}" size="xl" :show="old('showEditFormModal' . $user->id) ? true : false">
        @include('content.users.diamond.includes.edit_form')
    </x-modal>

    <!-- Block Modal -->
    <x-modal id="blockModal{{ $user->id }}" :centered="false" title="Block User" closeBtnText="Cancel"
        saveBtnText="Confirm" saveBtnForm="blockForm{{ $user->id }}" saveBtnType="submit">
        <form id="blockForm{{ $user->id }}" action="{{ route('users.block', $user->id) }}" method="post">
            @csrf
            <div class="d-flex justify-content-start align-items-center user-name mb-4">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3"><img src="{{ 'https://www.w3schools.com/howto/img_avatar.png' }}"
                            alt="Avatar" class="rounded-circle"></div>
                </div>
                <div class="d-flex flex-column">
                    <a href="javascript:void(0)" class="text-body text-truncate">
                        <span class="fw-semibold">{{ $user->name }}</span>
                    </a>
                </div>
            </div>
            <label class="form-label" for="inputBlockDays">Block User for(days)</label>
            <input type="text" id="inputBlockDays" name="block_for_days" class="form-control"
                placeholder="Type number of days">
            @error('block_for_days')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </form>
    </x-modal>

    <!-- Warn Modal -->
    <x-modal id="warnModal{{ $user->id }}" :centered="false" title="Warn User" closeBtnText="Cancel"
        saveBtnText="Warn" saveBtnForm="warnForm{{ $user->id }}" saveBtnType="submit">
        <form id="warnForm{{ $user->id }}" action="{{ route('users.warn', $user->id) }}" method="post">
            @csrf
            <div class="d-flex justify-content-start align-items-center user-name mb-4">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3"><img src="{{ 'https://www.w3schools.com/howto/img_avatar.png' }}"
                            alt="Avatar" class="rounded-circle"></div>
                </div>
                <div class="d-flex flex-column">
                    <a href="javascript:void(0)" class="text-body text-truncate">
                        <span class="fw-semibold">{{ $user->name }}</span>
                    </a>
                </div>
            </div>
            <label class="form-label" for="inputWarningCause">Select warning cause</label>
            <select id="inputWarningCause" name="warning_cause" class="form-control">
                <option value="cause1">cause1</option>
                <option value="cause2">cause2</option>
                <option value="cause3">cause3</option>
            </select>
            @error('warning_cause')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </form>
    </x-modal>

    <!-- Upgrade Modal -->
    <x-modal id="upgradeModal" :centered="false" title="Upgrade User" closeBtnText="Cancel"
        saveBtnText="Upgrade" saveBtnForm="upgradeForm" saveBtnType="submit">
        <form id="upgradeForm" action="{{ route('users.upgrade', $user->id) }}" method="post">
            @csrf
            <div class="d-flex justify-content-start align-items-center upgrade-user-section mb-4">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3"><img src="{{ 'https://www.w3schools.com/howto/img_avatar.png' }}"
                            alt="Avatar" class="rounded-circle" onerror="this.src='https://www.w3schools.com/w3images/avatar2.png'"></div>
                </div>
                <div class="d-flex flex-column">
                    <a href="javascript:void(0)" class="text-body text-truncate">
                        <span class="fw-semibold"></span>
                    </a>
                </div>
            </div>
            <input type="hidden" name="user_id" id="user_id">
            <div class="row mb-4">
                <div class="col col-md-4 mb-2">
                    <div class="form-check custom-option custom-option-icon checked">
                        <label class="form-check-label custom-option-content" for="customRadioIcon1">
                            <span class="custom-option-body">
                                <span class="custom-option-title"><img src="{{asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" width="20"> Educated</span>
                            </span>
                            <input name="level" class="form-check-input" type="radio" value="0"
                                id="customRadioIcon1">
                        </label>
                    </div>
                </div>
                <div class="col col-md-4 mb-2">
                    <div class="form-check custom-option custom-option-icon checked">
                        <label class="form-check-label custom-option-content" for="customRadioIcon2">
                            <span class="custom-option-body">
                                <span class="custom-option-title"><img src="{{asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Educated" width="20"> Cultivated</span>
                            </span>
                            <input name="level" class="form-check-input" type="radio" value="1"
                                id="customRadioIcon2">
                        </label>
                    </div>
                </div>

                <div class="col col-md-4 mb-2">
                    <div class="form-check custom-option custom-option-icon checked">
                        <label class="form-check-label custom-option-content" for="customRadioIcon3">
                            <span class="custom-option-body">
                                <span class="custom-option-title"><img src="{{asset('assets/svg/svg-dialog/academic.svg')}}" alt="Educated" width="20"> Academic</span>
                            </span>
                            <input name="level" class="form-check-input" type="radio" value="2"
                                id="customRadioIcon3" checked="">
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <label class="form-label" for="inputPassword">Admin Password</label>
                <input type="text" id="inputPassword" name="password" class="form-control" placeholder="Password">
                @error('warning_cause')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </form>
    </x-modal>

    <x-modal id="createModal" title="Add VIP User" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm"
        size="xl" :show="old('showCreateFormModal') ? true : false">
        @include('content.users.diamond.includes.create_form')
    </x-modal>
@endsection

@section('page-script')
    <script>
        function confirmAction(event, callback) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this user permentely",
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


        $(document).on('click', '.upgradeUser', function() {
            $('#user_id').val($(this).attr('data-id'));
            $('.upgrade-user-section img').attr('src', $(this).attr('data-image'));
            $('.upgrade-user-section a span').text($(this).attr('data-name'));
        });
    </script>
@endsection
