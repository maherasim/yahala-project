<div class="card mb-4">
    <div class="card-body">
        <div class="user-avatar-section">
            <div class=" d-flex align-items-center flex-column">
                <img style="border-radius:100%" class="img-fluid my-4"
                    src="{{ $user->image ? asset('storage/' . $user->image) : 'https://www.w3schools.com/howto/img_avatar.png' }}"
                    height="110" width="110" alt="User avatar">
                <div class="user-info text-center">
                    <h4 class="mb-2"><img height="20px"
                            src="{{asset('assets/img/medal-ribbon.jpeg')}}">
                        {{ $user->name ?? '' }} {{ $user->last_name ?? '' }}</h4>
                    {{-- <p class="mb-2"><img height="20px"
                            src="{{asset('assets/img/germany-flag-png.png')}}"> Rojava
                        Qamishlo <img height="20px"
                            src="{{asset('assets/img/germany-flag-png.png')}}"> Hannover
                    </p> --}}
                    <b>
                        <p class="mb-2 ">{{$user->level == 0 ? 'Educated' : ($user->level == 1 ? 'Cultivated' : 'Academic')}} User</p>
                    </b>
                    @if ($user->user_id)
                        <span>User Id: {{$user->user_id}}</span>
                    @endif
                </div>
            </div>
        </div>

        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
            <ul class="list-unstyled">
                <li class="mb-3">
                    <span class="fw-bold me-2">Status:</span>
                    <br>
                    @if ((int) $user->status)
                        <span class="badge bg-label-success me-1">Active</span>
                    @else
                        <span class="badge bg-label-secondary me-1">Disabled</span>
                    @endif
                </li>
                <li class="mb-3">
                    <span class="fw-bold me-2">Email:</span>
                    <br>
                    <span>{{$user->email ?? ''}}</span>
                </li>
                <li class="mb-3">
                    <span class="fw-bold me-2">Phone Number:</span>
                    <br>
                    <span>{{$user->phone ?? ''}}</span>
                </li>
                <li class="mb-3">
                    <span class="fw-bold me-2">Member Since:</span>
                    <br>
                    <span>{{ $user->created_at ? \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') : ''}}</span>
                </li>
                <li class="mb-3">
                    <span class="fw-bold me-2">Country</span>
                    <br>
                    <span>Germany</span>
                </li>



            </ul>

        </div>
    </div>
</div>
