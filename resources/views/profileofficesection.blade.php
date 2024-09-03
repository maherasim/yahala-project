@php
$profileoffice = App\Models\MyProfileOfficeSection::where('language_id', $language->id)->first();
@endphp
<div class="modal fade" id="myprofileoffice{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">My Profile Office Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.myProfileOfficeSection') }}" method="POST">
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
                                <h6>Standard</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="standard" placeholder="Standard" value="{{ $profileoffice->standard ?? '' }}">
                            </div>
                        </div>

                        <!-- Upgrade your account -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Upgrade your account</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="upgrade_account" placeholder="Upgrade your account" value="{{ $profileoffice->upgrade_account ?? '' }}">
                            </div>
                        </div>

                        <!-- My Fanpage -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Fanpage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_fanpage" placeholder="My Fanpage" value="{{ $profileoffice->my_fanpage ?? '' }}">
                            </div>
                        </div>

                        <!-- New Violate -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Violate</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_violate" placeholder="New Violate" value="{{ $profileoffice->new_violate ?? '' }}">
                            </div>
                        </div>

                        <!-- You get Flag -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>You get Flag</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="you_get_flag" placeholder="You get Flag" value="{{ $profileoffice->you_get_flag ?? '' }}">
                            </div>
                        </div>

                        <!-- Reason -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Reason</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reason" placeholder="Reason" value="{{ $profileoffice->reason ?? '' }}">
                            </div>
                        </div>

                        <!-- Closed Violate -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Closed Violate</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="closed_violate" placeholder="Closed Violate" value="{{ $profileoffice->closed_violate ?? '' }}">
                            </div>
                        </div>

                        <!-- My Fanpage (Channel) -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Fanpage (Channel)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_fanpage_channel" placeholder="My Fanpage (Channel)" value="{{ $profileoffice->my_fanpage_channel ?? '' }}">
                            </div>
                        </div>

                        <!-- Owner -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Owner</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="owner" placeholder="Owner" value="{{ $profileoffice->owner ?? '' }}">
                            </div>
                        </div>

                        <!-- Follower -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Follower</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="follower" placeholder="Follower" value="{{ $profileoffice->follower ?? '' }}">
                            </div>
                        </div>

                        <!-- Member -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Member</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="member" placeholder="Member" value="{{ $profileoffice->member ?? '' }}">
                            </div>
                        </div>

                        <!-- Our Document -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Our Document</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="our_document" placeholder="Our Document" value="{{ $profileoffice->our_document ?? '' }}">
                            </div>
                        </div>

                        <!-- See All -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See All</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all_document" placeholder="See All" value="{{ $profileoffice->see_all_document ?? '' }}">
                            </div>
                        </div>

                        <!-- Statics -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Statics</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="statics" placeholder="Statics" value="{{ $profileoffice->statics ?? '' }}">
                            </div>
                        </div>

                        <!-- My Storage -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Storage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_storage" placeholder="My Storage" value="{{ $profileoffice->my_storage ?? '' }}">
                            </div>
                        </div>

                        <!-- Used -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Used</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="used_storage" placeholder="Used" value="{{ $profileoffice->used_storage ?? '' }}">
                            </div>
                        </div>

                        <!-- Free -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Free</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="free_storage" placeholder="Free" value="{{ $profileoffice->free_storage ?? '' }}">
                            </div>
                        </div>

                        <!-- My Wishes -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Wishes</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_wishes" placeholder="My Wishes" value="{{ $profileoffice->my_wishes ?? '' }}">
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
