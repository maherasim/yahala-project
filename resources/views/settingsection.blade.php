@php
$settingsection = App\Models\SectionSetting::where('language_id', $language->id)->first();
@endphp

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
                            <div class="col-md-12">
                                <h6>My Account</h6>
                                <label for="setNewPassword">Set New Password:</label>
                                <input type="text" id="setNewPassword" name="setNewPassword" class="form-control" value="{{ $settingsection->setNewPassword ?? '' }}">
                                <br>
                                <label for="oldPassword">Old Password:</label>
                                <input type="text" id="oldPassword" name="oldPassword" class="form-control" value="{{ $settingsection->oldPassword ?? '' }}">
                                <br>
                                <label for="newPassword">New Password:</label>
                                <input type="text" id="newPassword" name="newPassword" class="form-control" value="{{ $settingsection->newPassword ?? '' }}">
                                <br>
                                <label for="confirmNewPassword">Confirm New Password:</label>
                                <input type="text" id="confirmNewPassword" name="confirmNewPassword" class="form-control" value="{{ $settingsection->confirmNewPassword ?? '' }}">
                                <label for="email">E-Mail:</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{ $settingsection->email ?? '' }}">
                                <br>
                                <label for="oldEmail">Old E-Mail:</label>
                                <input type="text" id="oldEmail" name="oldEmail" class="form-control" value="{{ $settingsection->oldEmail ?? '' }}">
                                <br>
                                <label for="newEmail">New E-Mail:</label>
                                <input type="text" id="newEmail" name="newEmail" class="form-control" value="{{ $settingsection->newEmail ?? '' }}">
                                <br>
                                <label for="repeatNewEmail">Repeat New E-Mail:</label>
                                <input type="text" id="repeatNewEmail" name="repeatNewEmail" class="form-control" value="{{ $settingsection->repeatNewEmail ?? '' }}">
                                <label for="details">Details:</label>
                                <input type="text" id="details" name="details" class="form-control" value="{{ $settingsection->details ?? '' }}">
                                <br>
                                <label for="status">Your Status:</label>
                                <input type="text" id="status" name="status" class="form-control" value="{{ $settingsection->status ?? '' }}">
                                <label for="notificationType">Notification Type:</label>
                                <input type="text" id="notificationType" name="notificationType" class="form-control" value="{{ implode(',', $settingsection->notificationType ?? []) }}">
                                <label for="musicSetting">Music Setting:</label>
                                <input type="text" id="musicSetting" name="musicSetting" class="form-control" value="{{ implode(',', $settingsection->musicSetting ?? []) }}">
                                <br>
                                <label for="musicVolume">Music Volume:</label>
                                <input type="text" id="musicVolume" name="musicVolume" class="form-control" value="{{ $settingsection->musicVolume ?? 50 }}">
                                <label for="messagesRingtone">Messages:</label>
                                <input type="text" id="messagesRingtone" name="messagesRingtone" class="form-control" value="{{ $settingsection->messagesRingtone ?? '' }}"><br>
                                <label for="callRingtone">Call:</label>
                                <input type="text" id="callRingtone" name="callRingtone" class="form-control" value="{{ $settingsection->callRingtone ?? '' }}"><br>
                                <label for="notificationsRingtone">Notifications:</label>
                                <input type="text" id="notificationsRingtone" name="notificationsRingtone" class="form-control" value="{{ $settingsection->notificationsRingtone ?? '' }}">
                                <label for="leaveReason">Leave Reason:</label>
                                <input type="text" id="leaveReason" name="leaveReason" class="form-control" value="{{ implode(',', $settingsection->leaveReason ?? []) }}">
                                <br>
                                <label for="describeReason">Describe:</label>
                                <input type="text" id="describeReason" name="describeReason" class="form-control" value="{{ $settingsection->describeReason ?? '' }}">
                                <label for="contactType">Contact Type:</label>
                                <input type="text" id="contactType" name="contactType" class="form-control" value="{{ $settingsection->contactType ?? '' }}">
                                <br>
                                <label for="message">Message:</label>
                                <input type="text" id="message" name="message" class="form-control" value="{{ $settingsection->message ?? '' }}">
                                 
                               
                                
                            </div>
                            
                        </div>

                        
 
 
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
