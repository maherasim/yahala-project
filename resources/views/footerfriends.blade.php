@php
    // Retrieve the existing FooterFriendSection data for the given language_id
    $footerfriends = App\Models\FooterFriendSection::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="footerfriendssection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Footer Friends Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.footerfriendsection') }}" method="POST">
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
                                <h6>Friends Online</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends_online" placeholder="Friends Online" value="{{ $footerfriends->friends_online ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>User you may know</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="user_you_may_know" placeholder="User you may know" value="{{ $footerfriends->user_you_may_know ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See all</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all" placeholder="See all" value="{{ $footerfriends->see_all ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends request</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends_request" placeholder="Friends request" value="{{ $footerfriends->friends_request ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Search for Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="search_friends" placeholder="Search for Friends" value="{{ $footerfriends->search_friends ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends" placeholder="Friends" value="{{ $footerfriends->friends ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Record found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_record_found" placeholder="No Record found" value="{{ $footerfriends->no_record_found ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Search for Family</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="search_family" placeholder="Search for Family" value="{{ $footerfriends->search_family ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family" placeholder="Family" value="{{ $footerfriends->family ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Family member found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_family_member_found" placeholder="No Family member found" value="{{ $footerfriends->no_family_member_found ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Search for User</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="search_user" placeholder="Search for User" value="{{ $footerfriends->search_user ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Friend and Family member found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_friend_family_found" placeholder="No Friend and Family member found" value="{{ $footerfriends->no_friend_family_found ?? '' }}">
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
