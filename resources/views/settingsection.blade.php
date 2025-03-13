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

                        <!-- Form Fields -->
                        @foreach ([
                            'setNewPassword' => 'Set New Password',
                            'oldPassword' => 'Old Password',
                            'newPassword' => 'New Password',
                            'confirmNewPassword' => 'Confirm New Password',
                            'email' => 'E-Mail',
                            'oldEmail' => 'Old E-Mail',
                            'newEmail' => 'New E-Mail',
                            'repeatNewEmail' => 'Repeat New E-Mail',
                            'details' => 'Details',
                            'status' => 'Your Status',
                            'notificationType' => 'Notification Type',
                            'musicSetting' => 'Music Setting',
                            'musicVolume' => 'Music Volume',
                            'messagesRingtone' => 'Messages Ringtone',
                            'callRingtone' => 'Call Ringtone',
                            'notificationsRingtone' => 'Notifications Ringtone',
                            'leaveReason' => 'Leave Reason',
                            'describeReason' => 'Describe Reason',
                            'contactType' => 'Contact Type',
                            'message' => 'Message'
                        ] as $name => $label)
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>{{ $label }}</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="{{ $name }}" name="{{ $name }}" class="form-control" value="{{ $settingsection->$name ?? '' }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-label-secondary"
                            data-bs-dismiss="modal">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
