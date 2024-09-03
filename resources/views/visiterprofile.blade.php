@php
    $visiter = App\Models\VisiterProfile::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="visitprofilesection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Visitor Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.visiterprofilesection') }}" method="POST">
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
                                <h6>Say hello</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="say_hello" placeholder="Say hello" value="{{ $visiter->say_hello ?? '' }}">
                            </div>
                        </div>

                        <!-- Be friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Be friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="be_friends" placeholder="Be friends" value="{{ $visiter->be_friends ?? '' }}">
                            </div>
                        </div>

                        <!-- Cancel Friend request -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Cancel Friend request</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cancel_friend_request" placeholder="Cancel Friend request" value="{{ $visiter->cancel_friend_request ?? '' }}">
                            </div>
                        </div>

                        <!-- My Feeds -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Feeds</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_feeds" placeholder="My Feeds" value="{{ $visiter->my_feeds ?? '' }}">
                            </div>
                        </div>

                        <!-- See all under My Feeds -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See all (My Feeds)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all_my_feeds" placeholder="See all (My Feeds)" value="{{ $visiter->see_all_my_feeds ?? '' }}">
                            </div>
                        </div>

                        <!-- Photo gallery -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Photo gallery</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="photo_gallery" placeholder="Photo gallery" value="{{ $visiter->photo_gallery ?? '' }}">
                            </div>
                        </div>

                        <!-- See all under Photo gallery -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See all (Photo gallery)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all_photo_gallery" placeholder="See all (Photo gallery)" value="{{ $visiter->see_all_photo_gallery ?? '' }}">
                            </div>
                        </div>

                        <!-- Video Gallery -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Video Gallery</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="video_gallery" placeholder="Video Gallery" value="{{ $visiter->video_gallery ?? '' }}">
                            </div>
                        </div>

                        <!-- See all under Video Gallery -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See all (Video Gallery)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all_video_gallery" placeholder="See all (Video Gallery)" value="{{ $visiter->see_all_video_gallery ?? '' }}">
                            </div>
                        </div>

                        <!-- My Friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_friends" placeholder="My Friends" value="{{ $visiter->my_friends ?? '' }}">
                            </div>
                        </div>

                        <!-- See all under My Friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See all (My Friends)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all_my_friends" placeholder="See all (My Friends)" value="{{ $visiter->see_all_my_friends ?? '' }}">
                            </div>
                        </div>

                        <!-- Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Options</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="options" placeholder="Options" value="{{ $visiter->options ?? '' }}">
                            </div>
                        </div>

                        <!-- Move the User under Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Move the User (Options)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="move_user" placeholder="Move the User (Options)" value="{{ $visiter->move_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Friends under Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends (Options)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends_option" placeholder="Friends (Options)" value="{{ $visiter->friends_option ?? '' }}">
                            </div>
                        </div>

                        <!-- Family under Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family (Options)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family_option" placeholder="Family (Options)" value="{{ $visiter->family_option ?? '' }}">
                            </div>
                        </div>

                        <!-- Remove under Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Remove (Options)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="remove_option" placeholder="Remove (Options)" value="{{ $visiter->remove_option ?? '' }}">
                            </div>
                        </div>

                        <!-- Block User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Block User</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="block_user" placeholder="Block User" value="{{ $visiter->block_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Unblock under Block User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Unblock (Block User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="unblock_block_user" placeholder="Unblock (Block User)" value="{{ $visiter->unblock_block_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Block under Block User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Block (Block User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="block_block_user" placeholder="Block (Block User)" value="{{ $visiter->block_block_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Report User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Report User</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="report_user" placeholder="Report User" value="{{ $visiter->report_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Insult under Report User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Insult (Report User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="insult_report_user" placeholder="Insult (Report User)" value="{{ $visiter->insult_report_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Image under Report User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Image (Report User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="image_report_user" placeholder="Image (Report User)" value="{{ $visiter->image_report_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Content under Report User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Content (Report User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="content_report_user" placeholder="Content (Report User)" value="{{ $visiter->content_report_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Feedback under Report User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Feedback (Report User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="feedback_report_user" placeholder="Feedback (Report User)" value="{{ $visiter->feedback_report_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Annoyance under Report User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Annoyance (Report User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="annoyance_report_user" placeholder="Annoyance (Report User)" value="{{ $visiter->annoyance_report_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Racism under Report User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Racism (Report User)</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="racism_report_user" placeholder="Racism (Report User)" value="{{ $visiter->racism_report_user ?? '' }}">
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
