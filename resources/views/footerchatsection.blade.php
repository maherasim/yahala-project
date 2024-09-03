@php
    // Retrieve the existing FooterChatSection data for the given language_id
    $footerchat = App\Models\FooterChatSection::where('language_id', $language->id)->first();
@endphp
<div class="modal fade" id="footerchatsection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Footer Chat Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.footerchatsection') }}" method="POST">
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
                                <h6>Bazar Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="bazar_chat" placeholder="Bazar Chat" value="{{ $footerchat->bazar_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Shop Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Shop Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shop_chat" placeholder="Shop Chat" value="{{ $footerchat->shop_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Service Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Service Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="service_chat" placeholder="Service Chat" value="{{ $footerchat->service_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Friends Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends_chat" placeholder="Friends Chat" value="{{ $footerchat->friends_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Family Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family_chat" placeholder="Family Chat" value="{{ $footerchat->family_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Group Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Group Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="group_chat" placeholder="Group Chat" value="{{ $footerchat->group_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Notifications -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="notifications" placeholder="Notifications" value="{{ $footerchat->notifications ?? '' }}">
                            </div>
                        </div>

                        <!-- FanPage Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>FanPage Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fanpage_chat" placeholder="FanPage Chat" value="{{ $footerchat->fanpage_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Wishes Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Wishes Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wishes_chat" placeholder="Wishes Chat" value="{{ $footerchat->wishes_chat ?? '' }}">
                            </div>
                        </div>

                        <!-- Favorite Contacts -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Favorite Contacts</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="favorite_contacts" placeholder="Favorite Contacts" value="{{ $footerchat->favorite_contacts ?? '' }}">
                            </div>
                        </div>

                        <!-- My Groups -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Groups</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_groups" placeholder="My Groups" value="{{ $footerchat->my_groups ?? '' }}">
                            </div>
                        </div>

                        <!-- Coming Soon -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Coming Soon</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="coming_soon" placeholder="Coming Soon" value="{{ $footerchat->coming_soon ?? '' }}">
                            </div>
                        </div>

                        <!-- Chat Overview -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Chat Overview</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="chat_overview" placeholder="Chat Overview" value="{{ $footerchat->chat_overview ?? '' }}">
                            </div>
                        </div>

                        <!-- New Messages -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Messages</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_messages" placeholder="New Messages" value="{{ $footerchat->new_messages ?? '' }}">
                            </div>
                        </div>

                        <!-- Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Options</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="options" placeholder="Options" value="{{ $footerchat->options ?? '' }}">
                            </div>
                        </div>

                        <!-- Block User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Block User</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="block_user" placeholder="Block User" value="{{ $footerchat->block_user ?? '' }}">
                            </div>
                        </div>

                        <!-- Unblocked -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Unblocked</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="unblocked" placeholder="Unblocked" value="{{ $footerchat->unblocked ?? '' }}">
                            </div>
                        </div>

                        <!-- Block -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Block</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="block" placeholder="Block" value="{{ $footerchat->block ?? '' }}">
                            </div>
                        </div>

                        <!-- Report user -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Report user</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="report_user" placeholder="Report user" value="{{ $footerchat->report_user ?? '' }}">
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
