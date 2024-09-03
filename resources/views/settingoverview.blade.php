@php
$settingoverview = App\Models\SettingOverviewSection::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="settingoverview{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Setting Overview Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.settingOverviewSection') }}" method="POST">
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
                                <h6>Setting Overview</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="setting_overview" placeholder="Setting Overview" value="{{ $settingoverview->setting_overview ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Notifications -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="notifications" placeholder="Notifications" value="{{ $settingoverview->notifications ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Settings -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Settings</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="settings" placeholder="Settings" value="{{ $settingoverview->settings ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Profile -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Profile</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_profile" placeholder="My Profile" value="{{ $settingoverview->my_profile ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Channels -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Channels</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_channels" placeholder="My Channels" value="{{ $settingoverview->my_channels ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Shortcut -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Shortcut</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shortcut" placeholder="Shortcut" value="{{ $settingoverview->shortcut ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="collection" placeholder="Collection" value="{{ $settingoverview->collection ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- View later -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>View later</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="view_later" placeholder="View later" value="{{ $settingoverview->view_later ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Market -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Market</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="market" placeholder="Market" value="{{ $settingoverview->market ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage my Items -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Items</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_items" placeholder="Manage my Items" value="{{ $settingoverview->manage_items ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Add -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Add</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="add" placeholder="Add" value="{{ $settingoverview->add ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage my Adds -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Adds</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_ads" placeholder="Manage my Adds" value="{{ $settingoverview->manage_ads ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Notifications -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="notifications" placeholder="Notifications" value="{{ $settingoverview->notifications ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage Notifications -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_notifications" placeholder="Manage Notifications" value="{{ $settingoverview->manage_notifications ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password" placeholder="Password" value="{{ $settingoverview->password ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage my Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_password" placeholder="Manage my Password" value="{{ $settingoverview->manage_password ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- E-mail -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>E-mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{ $settingoverview->email ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Change my E-Mail -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Change my E-Mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="change_email" placeholder="Change my E-Mail" value="{{ $settingoverview->change_email ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Ringtone -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Ringtone</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ringtone" placeholder="Ringtone" value="{{ $settingoverview->ringtone ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage Ringtone -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage Ringtone</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_ringtone" placeholder="Manage Ringtone" value="{{ $settingoverview->manage_ringtone ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Music -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Music</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="music" placeholder="Music" value="{{ $settingoverview->music ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- manage the Player -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>manage the Player</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_player" placeholder="manage the Player" value="{{ $settingoverview->manage_player ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Network -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Network</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="network" placeholder="Network" value="{{ $settingoverview->network ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage Connections -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage Connections</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_connections" placeholder="Manage Connections" value="{{ $settingoverview->manage_connections ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Documentation -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Documentation</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="documentation" placeholder="Documentation" value="{{ $settingoverview->documentation ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Documents -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Documents</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_documents" placeholder="My Documents" value="{{ $settingoverview->my_documents ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Storage -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Storage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="storage" placeholder="Storage" value="{{ $settingoverview->storage ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage Storage -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage Storage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_storage" placeholder="Manage Storage" value="{{ $settingoverview->manage_storage ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Violate -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Violate</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="violate" placeholder="Violate" value="{{ $settingoverview->violate ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Manage my Reels -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Reels</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_reels" placeholder="Manage my Reels" value="{{ $settingoverview->manage_reels ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Channels -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Channels</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_channels_2" placeholder="My Channels" value="{{ $settingoverview->my_channels_2 ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- In Development -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>In Development</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="in_development_2" placeholder="In Development" value="{{ $settingoverview->in_development_2 ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Will be soon available -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Will be soon available</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="soon_available_2" placeholder="Will be soon available" value="{{ $settingoverview->soon_available_2 ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Standard -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Standard</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="standard" placeholder="Standard" value="{{ $settingoverview->standard ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Upgrade your account -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Upgrade your account</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="upgrade_account" placeholder="Upgrade your account" value="{{ $settingoverview->upgrade_account ?? '' }}">
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
