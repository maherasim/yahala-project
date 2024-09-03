@php
$headermusic = App\Models\HeaderMusicSection::where('language_id', $language->id)->first();
@endphp
<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="headermusic{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Header Music Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.headermusicsection') }}" method="POST">
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

                        <div class="row">
                            <div class="col-md-6">
                                <h6>New Albums</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_albums" placeholder="New Albums" value="{{ $headermusic->new_albums ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Latest Videos -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Videos</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_videos" placeholder="Latest Videos" value="{{ $headermusic->latest_videos ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- New Artist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Artist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_artist" placeholder="New Artist" value="{{ $headermusic->new_artist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Latest Stream -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Stream</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_stream" placeholder="Latest Stream" value="{{ $headermusic->latest_stream ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Latest Songs -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Songs</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_songs" placeholder="Latest Songs" value="{{ $headermusic->latest_songs ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- See all -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See all</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all" placeholder="See all" value="{{ $headermusic->see_all ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- History -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>History</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="history" placeholder="History" value="{{ $headermusic->history ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Invoice -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Invoice</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="invoice" placeholder="Invoice" value="{{ $headermusic->invoice ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Purchase -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Purchase</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="purchase" placeholder="Purchase" value="{{ $headermusic->purchase ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Invoice -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Invoice</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_invoice" placeholder="My Invoice" value="{{ $headermusic->my_invoice ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Music History -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Music History</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="music_history" placeholder="Music History" value="{{ $headermusic->music_history ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Purchase -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Purchase</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_purchase" placeholder="My Purchase" value="{{ $headermusic->my_purchase ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Options</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="options" placeholder="Options" value="{{ $headermusic->options ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Share with Friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Share with Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="share_with_friends" placeholder="Share with Friends" value="{{ $headermusic->share_with_friends ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Move to other Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Move to other Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="move_to_playlist" placeholder="Move to other Playlist" value="{{ $headermusic->move_to_playlist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Save -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Save</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="save" placeholder="Save" value="{{ $headermusic->save ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Remove from Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Remove from Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="remove_from_playlist" placeholder="Remove from Playlist" value="{{ $headermusic->remove_from_playlist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Categories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Categories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="categories" placeholder="Categories" value="{{ $headermusic->categories ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Popular Songs -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Popular Songs</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="popular_songs" placeholder="Popular Songs" value="{{ $headermusic->popular_songs ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Latest Uploads -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Uploads</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_uploads" placeholder="Latest Uploads" value="{{ $headermusic->latest_uploads ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- New Artist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Artist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_artist_2" placeholder="New Artist" value="{{ $headermusic->new_artist_2 ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Artist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Artist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="artist" placeholder="Artist" value="{{ $headermusic->artist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Songs -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Songs</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="songs" placeholder="Songs" value="{{ $headermusic->songs ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Albums -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Albums</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="albums" placeholder="Albums" value="{{ $headermusic->albums ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Video Clip -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Video Clip</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="video_clip" placeholder="Video Clip" value="{{ $headermusic->video_clip ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- New Album -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Album</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_album" placeholder="New Album" value="{{ $headermusic->new_album ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Albums -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Albums</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="albums_2" placeholder="Albums" value="{{ $headermusic->albums_2 ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_playlist" placeholder="My Playlist" value="{{ $headermusic->my_playlist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="playlist" placeholder="Playlist" value="{{ $headermusic->playlist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Need more Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Need more Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="need_more_playlist" placeholder="Need more Playlist" value="{{ $headermusic->need_more_playlist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Buy new Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Buy new Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="buy_new_playlist" placeholder="Buy new Playlist" value="{{ $headermusic->buy_new_playlist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Options</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="options_2" placeholder="Options" value="{{ $headermusic->options_2 ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Create New Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create New Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create_new_playlist" placeholder="Create New Playlist" value="{{ $headermusic->create_new_playlist ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Enter new Playlist Name -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Enter new Playlist Name</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="enter_new_playlist_name" placeholder="Enter new Playlist Name" value="{{ $headermusic->enter_new_playlist_name ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Select -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select" placeholder="Select" value="{{ $headermusic->select ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Private -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Private</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="private" placeholder="Private" value="{{ $headermusic->private ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Public -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Public</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="public" placeholder="Public" value="{{ $headermusic->public ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends" placeholder="Friends" value="{{ $headermusic->friends ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Family -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family" placeholder="Family" value="{{ $headermusic->family ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Create -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create" placeholder="Create" value="{{ $headermusic->create ?? '' }}">
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
