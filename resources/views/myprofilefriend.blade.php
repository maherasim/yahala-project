@php
$profilefriend = App\Models\MyProfileFriendsSection::where('language_id', $language->id)->first();
@endphp
<div class="modal fade" id="myprofilefriends{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">My Profile Friends Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.myProfileFriendsSection') }}" method="POST">
                    @csrf
                    <input type="hidden" name="language_id" value="{{ $language->id }}">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>English Language</h5>
                            </div>
                            <div class="col-md-6">
                                <h5>{{ $language->title }} Language</h5>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friend Request</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friend_request" placeholder="Friend Request" value="{{ $profilefriend->friend_request ?? '' }}">
                            </div>
                        </div>

                        <!-- No Friend requests -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Friend Requests</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_friend_requests" placeholder="No Friend Requests" value="{{ $profilefriend->no_friend_requests ?? '' }}">
                            </div>
                        </div>

                        <!-- See all -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See All</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all_friend_requests" placeholder="See All" value="{{ $profilefriend->see_all_friend_requests ?? '' }}">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-label-secondary" data-bs-dismiss="modal">Save</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
