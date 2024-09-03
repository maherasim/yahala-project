@php
$settingsection = App\Models\SectionSetting::where('language_id', $language->id)->first();
@endphp
<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="settingsectionsok{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Setting Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.saveSectionSettings') }}" method="POST">
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

                        <!-- My Account -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6>My Account</h6>
                                <label for="setNewPassword">Set New Password:</label>
                                <input type="password" id="setNewPassword" name="setNewPassword" class="form-control" value="{{ $settingsection->setNewPassword ?? '' }}">
                                <br>
                                <label for="oldPassword">Old Password:</label>
                                <input type="password" id="oldPassword" name="oldPassword" class="form-control" value="{{ $settingsection->oldPassword ?? '' }}">
                                <br>
                                <label for="newPassword">New Password:</label>
                                <input type="password" id="newPassword" name="newPassword" class="form-control" value="{{ $settingsection->newPassword ?? '' }}">
                                <br>
                                <label for="confirmNewPassword">Confirm New Password:</label>
                                <input type="password" id="confirmNewPassword" name="confirmNewPassword" class="form-control" value="{{ $settingsection->confirmNewPassword ?? '' }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email">E-Mail:</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ $settingsection->email ?? '' }}">
                                <br>
                                <label for="oldEmail">Old E-Mail:</label>
                                <input type="email" id="oldEmail" name="oldEmail" class="form-control" value="{{ $settingsection->oldEmail ?? '' }}">
                                <br>
                                <label for="newEmail">New E-Mail:</label>
                                <input type="email" id="newEmail" name="newEmail" class="form-control" value="{{ $settingsection->newEmail ?? '' }}">
                                <br>
                                <label for="repeatNewEmail">Repeat New E-Mail:</label>
                                <input type="email" id="repeatNewEmail" name="repeatNewEmail" class="form-control" value="{{ $settingsection->repeatNewEmail ?? '' }}">
                            </div>
                        </div>

                        <!-- User Details -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6>User Details</h6>
                                <label for="details">Details:</label>
                                <textarea id="details" name="details" class="form-control">{{ $settingsection->details ?? '' }}</textarea>
                                <br>
                                <label>Your Status:</label><br>
                                <input type="radio" id="single" name="status" value="single" {{ isset($settingsection->status) && $settingsection->status == 'single' ? 'checked' : '' }}>
                                <label for="single">Single</label><br>
                                <input type="radio" id="engaged" name="status" value="engaged" {{ isset($settingsection->status) && $settingsection->status == 'engaged' ? 'checked' : '' }}>
                                <label for="engaged">Engaged</label><br>
                                <input type="radio" id="married" name="status" value="married" {{ isset($settingsection->status) && $settingsection->status == 'married' ? 'checked' : '' }}>
                                <label for="married">Married</label>
                            </div>
                            <div class="col-md-6">
                                <!-- Notifications -->
                                <h6>Notifications</h6>
                                <input type="checkbox" id="newUploads" name="notificationType[]" value="newUploads" {{ isset($settingsection->notificationType) && in_array('newUploads', $settingsection->notificationType) ? 'checked' : '' }}>
                                <label for="newUploads">New Uploads</label><br>
                                <input type="checkbox" id="playMusic" name="notificationType[]" value="playMusic" {{ isset($settingsection->notificationType) && in_array('playMusic', $settingsection->notificationType) ? 'checked' : '' }}>
                                <label for="playMusic">Play Music</label><br>
                                <input type="checkbox" id="videoCall" name="notificationType[]" value="videoCall" {{ isset($settingsection->notificationType) && in_array('videoCall', $settingsection->notificationType) ? 'checked' : '' }}>
                                <label for="videoCall">Video Call</label><br>
                                <input type="checkbox" id="videoPlay" name="notificationType[]" value="videoPlay" {{ isset($settingsection->notificationType) && in_array('videoPlay', $settingsection->notificationType) ? 'checked' : '' }}>
                                <label for="videoPlay">Video Play</label>
                            </div>
                        </div>

                        <!-- Music -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6>Music</h6>
                                <input type="checkbox" id="playInBackground" name="musicSetting[]" value="playInBackground" {{ isset($settingsection->musicSetting) && in_array('playInBackground', $settingsection->musicSetting) ? 'checked' : '' }}>
                                <label for="playInBackground">Play in Background</label><br>
                                <label for="musicVolume">Music Volume:</label>
                                <input type="range" id="musicVolume" name="musicVolume" min="0" max="100" class="form-control" value="{{ $settingsection->musicVolume ?? 50 }}">
                            </div>
                            <div class="col-md-6">
                                <!-- Ringtone -->
                                <h6>Ringtone</h6>
                                <label for="messagesRingtone">Messages:</label>
                                <input type="text" id="messagesRingtone" name="messagesRingtone" class="form-control" value="{{ $settingsection->messagesRingtone ?? '' }}"><br>
                                <label for="callRingtone">Call:</label>
                                <input type="text" id="callRingtone" name="callRingtone" class="form-control" value="{{ $settingsection->callRingtone ?? '' }}"><br>
                                <label for="notificationsRingtone">Notifications:</label>
                                <input type="text" id="notificationsRingtone" name="notificationsRingtone" class="form-control" value="{{ $settingsection->notificationsRingtone ?? '' }}">
                            </div>
                        </div>

                        <!-- Disable Account -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6>Disable Account</h6>
                                <input type="checkbox" id="noLanguage" name="leaveReason[]" value="noLanguage" {{ isset($settingsection->leaveReason) && in_array('noLanguage', $settingsection->leaveReason) ? 'checked' : '' }}>
                                <label for="noLanguage">Doesn’t contain my Language</label><br>
                                <input type="checkbox" id="noMusic" name="leaveReason[]" value="noMusic" {{ isset($settingsection->leaveReason) && in_array('noMusic', $settingsection->leaveReason) ? 'checked' : '' }}>
                                <label for="noMusic">Doesn’t contain Music I look for</label><br>
                                <input type="checkbox" id="notInterested" name="leaveReason[]" value="notInterested" {{ isset($settingsection->leaveReason) && in_array('notInterested', $settingsection->leaveReason) ? 'checked' : '' }}>
                                <label for="notInterested">Not what I look for elsewhere</label><br><br>
                                <label for="describeReason">Describe:</label><br>
                                <textarea id="describeReason" name="describeReason" class="form-control">{{ $settingsection->describeReason ?? '' }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <!-- Policy and terms -->
                                <h6>Policy and terms</h6>
                                <p>Display policy and terms here</p>
                                <!-- Contact -->
                                <h6>Contact</h6>
                                <label for="contactType">Contact us:</label><br>
                                <select id="contactType" name="contactType" class="form-control">
                                    <option value="general" {{ isset($settingsection->contactType) && $settingsection->contactType == 'general' ? 'selected' : '' }}>General Inquiry</option>
                                    <option value="support" {{ isset($settingsection->contactType) && $settingsection->contactType == 'support' ? 'selected' : '' }}>Support</option>
                                    <option value="feedback" {{ isset($settingsection->contactType) && $settingsection->contactType == 'feedback' ? 'selected' : '' }}>Feedback</option>
                                </select><br>
                                <label for="message">Type your Message here:</label><br>
                                <textarea id="message" name="message" class="form-control">{{ $settingsection->message ?? '' }}</textarea>
                            </div>
                        </div>

                        <!-- About Portal -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6>About Portal</h6>
                                <p>Display portal information and address here</p>
                            </div>
                            <div class="col-md-6">
                                <!-- Logout -->
                                <h6>Logout</h6>
                                <label>Are you sure to logout from YekBun?</label><br>
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
