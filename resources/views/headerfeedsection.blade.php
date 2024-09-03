@php
    $headerfeed = App\Models\HeaderFeedSection::where('language_id', $language->id)->first();
@endphp
<div class="modal fade" id="headerfeedsection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Header Feed Sections</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.headerfeedsection') }}" method="POST">
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
                                <h6>No Stories found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_stories_found" placeholder="No Stories found" value="{{ $headerfeed->no_stories_found ?? '' }}">
                            </div>
                        </div>

                        <!-- Latest Feeds -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Feeds</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_feeds" placeholder="Latest Feeds" value="{{ $headerfeed->latest_feeds ?? '' }}">
                            </div>
                        </div>

                        <!-- See all -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See all</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all" placeholder="See all" value="{{ $headerfeed->see_all ?? '' }}">
                            </div>
                        </div>

                        <!-- Greeting & Wishes -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Greeting & Wishes</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="greeting_wishes" placeholder="Greeting & Wishes" value="{{ $headerfeed->greeting_wishes ?? '' }}">
                            </div>
                        </div>

                        <!-- In development -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>In development</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="in_development" placeholder="In development" value="{{ $headerfeed->in_development ?? '' }}">
                            </div>
                        </div>

                        <!-- Will be soon available -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Will be soon available</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="soon_available" placeholder="Will be soon available" value="{{ $headerfeed->soon_available ?? '' }}">
                            </div>
                        </div>

                        <!-- Latest history -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest history</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_history" placeholder="Latest history" value="{{ $headerfeed->latest_history ?? '' }}">
                            </div>
                        </div>

                        <!-- Latest Vote -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Vote</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_vote" placeholder="Latest Vote" value="{{ $headerfeed->latest_vote ?? '' }}">
                            </div>
                        </div>

                        <!-- Post Comment -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Post Comment</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="post_comment" placeholder="Post Comment" value="{{ $headerfeed->post_comment ?? '' }}">
                            </div>
                        </div>

                        <!-- Like -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Like</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="like" placeholder="Like" value="{{ $headerfeed->like ?? '' }}">
                            </div>
                        </div>

                        <!-- Replay -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Replay</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="replay" placeholder="Replay" value="{{ $headerfeed->replay ?? '' }}">
                            </div>
                        </div>

                        <!-- Report the comment -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Report the comment</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="report_comment" placeholder="Report the comment" value="{{ $headerfeed->report_comment ?? '' }}">
                            </div>
                        </div>

                        <!-- Show more -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Show more</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="show_more" placeholder="Show more" value="{{ $headerfeed->show_more ?? '' }}">
                            </div>
                        </div>

                        <!-- I want to see more Feeds from this Member -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>I want to see more Feeds from this Member</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_more_feeds" placeholder="I want to see more Feeds from this Member" value="{{ $headerfeed->see_more_feeds ?? '' }}">
                            </div>
                        </div>

                        <!-- Show less -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Show less</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="show_less" placeholder="Show less" value="{{ $headerfeed->show_less ?? '' }}">
                            </div>
                        </div>

                        <!-- I want to see less Feeds from this Member -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>I want to see less Feeds from this Member</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_less_feeds" placeholder="I want to see less Feeds from this Member" value="{{ $headerfeed->see_less_feeds ?? '' }}">
                            </div>
                        </div>

                        <!-- Save the Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Save the Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="save_feed" placeholder="Save the Feed" value="{{ $headerfeed->save_feed ?? '' }}">
                            </div>
                        </div>

                        <!-- Add to Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Add to Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="add_to_collection" placeholder="Add to Collection" value="{{ $headerfeed->add_to_collection ?? '' }}">
                            </div>
                        </div>

                        <!-- Active Notification -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Active Notification</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="active_notification" placeholder="Active Notification" value="{{ $headerfeed->active_notification ?? '' }}">
                            </div>
                        </div>

                        <!-- Get message when User Publish Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Get message when User Publish Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="get_message_publish_feed" placeholder="Get message when User Publish Feed" value="{{ $headerfeed->get_message_publish_feed ?? '' }}">
                            </div>
                        </div>

                        <!-- Hide Feed from this User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Hide Feed from this User</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="hide_feed_from_user" placeholder="Hide Feed from this User" value="{{ $headerfeed->hide_feed_from_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Lorem Ipsum dolor sit amet consectetur -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Lorem Ipsum dolor sit amet consectetur</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lorem_ipsum" placeholder="Lorem Ipsum dolor sit amet consectetur" value="{{ $headerfeed->lorem_ipsum ?? '' }}">
                            </div>
                        </div>

                        <!-- Report this Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Report this Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="report_this_feed" placeholder="Report this Feed" value="{{ $headerfeed->report_this_feed ?? '' }}">
                            </div>
                        </div>

                        <!-- Share on YekBun -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Share on YekBun</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="share_yekbun" placeholder="Share on YekBun" value="{{ $headerfeed->share_yekbun ?? '' }}">
                            </div>
                        </div>

                        <!-- Public -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Public</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="public" placeholder="Public" value="{{ $headerfeed->public ?? '' }}">
                            </div>
                        </div>

                        <!-- Friend -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friend</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friend" placeholder="Friend" value="{{ $headerfeed->friend ?? '' }}">
                            </div>
                        </div>

                        <!-- Family -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family" placeholder="Family" value="{{ $headerfeed->family ?? '' }}">
                            </div>
                        </div>

                        <!-- Enter the Description -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Enter the Description</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="enter_description" placeholder="Enter the Description" value="{{ $headerfeed->enter_description ?? '' }}">
                            </div>
                        </div>

                        <!-- Create Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create_feed" placeholder="Create Feed" value="{{ $headerfeed->create_feed ?? '' }}">
                            </div>
                        </div>

                        <!-- Select Feed background -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select Feed background</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select_background" placeholder="Select Feed background" value="{{ $headerfeed->select_background ?? '' }}">
                            </div>
                        </div>

                        <!-- Select Font Color -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select Font Color</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select_font_color" placeholder="Select Font Color" value="{{ $headerfeed->select_font_color ?? '' }}">
                            </div>
                        </div>

                        <!-- Select a Service -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select a Service</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select_service" placeholder="Select a Service" value="{{ $headerfeed->select_service ?? '' }}">
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Search</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="search" placeholder="Search" value="{{ $headerfeed->search ?? '' }}">
                            </div>
                        </div>

                        <!-- Newest -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Newest</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="newest" placeholder="Newest" value="{{ $headerfeed->newest ?? '' }}">
                            </div>
                        </div>

                        <!-- Friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends" placeholder="Friends" value="{{ $headerfeed->friends ?? '' }}">
                            </div>
                        </div>

                        <!-- Must Viewed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Must Viewed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="must_viewed" placeholder="Must Viewed" value="{{ $headerfeed->must_viewed ?? '' }}">
                            </div>
                        </div>

                        <!-- Done -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Done</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="done" placeholder="Done" value="{{ $headerfeed->done ?? '' }}">
                            </div>
                        </div>

                        <!-- No Data found -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Data found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_data_found" placeholder="No Data found" value="{{ $headerfeed->no_data_found ?? '' }}">
                            </div>
                        </div>

                        <!-- My Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_collection" placeholder="My Collection" value="{{ $headerfeed->my_collection ?? '' }}">
                            </div>
                        </div>

                        <!-- No Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_collection" placeholder="No Collection" value="{{ $headerfeed->no_collection ?? '' }}">
                            </div>
                        </div>

                        <!-- Create Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create_collection" placeholder="Create Collection" value="{{ $headerfeed->create_collection ?? '' }}">
                            </div>
                        </div>

                        <!-- Enter new Playlist name -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Enter new Playlist name</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_playlist_name" placeholder="Enter new Playlist name" value="{{ $headerfeed->new_playlist_name ?? '' }}">
                            </div>
                        </div>

                        <!-- Select -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select" placeholder="Select" value="{{ $headerfeed->select ?? '' }}">
                            </div>
                        </div>

                        <!-- Private -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Private</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="private" placeholder="Private" value="{{ $headerfeed->private ?? '' }}">
                            </div>
                        </div>

                        <!-- Public -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Public</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="public" placeholder="Public" value="{{ $headerfeed->public ?? '' }}">
                            </div>
                        </div>

                        <!-- Friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends" placeholder="Friends" value="{{ $headerfeed->friends ?? '' }}">
                            </div>
                        </div>

                        <!-- Family -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family" placeholder="Family" value="{{ $headerfeed->family ?? '' }}">
                            </div>
                        </div>

                        <!-- Create -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create" placeholder="Create" value="{{ $headerfeed->create ?? '' }}">
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
