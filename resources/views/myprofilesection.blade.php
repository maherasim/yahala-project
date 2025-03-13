@php
$myprofilehome = App\Models\MyProfileHomeSection::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="myprofilesection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">My Profile Home Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.myProfileHomeSection') }}" method="POST">
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

                        @php
                            $fields = [
                                'update_profile_image' => 'Update Profile Image',
                                'select_or_upload_banner' => 'Select or Upload Banner',
                                'like' => 'Like',
                                'following' => 'Following',
                                'following_posts' => 'Following (Posts)',
                                'menu' => 'Menu',
                                'share_on_yekbun' => 'Share on Yekbun',
                                'upload_video' => 'Upload Video',
                                'create_reels' => 'Create Reels',
                                'go_live' => 'Go Live',
                                'my_feed' => 'My Feed'
                            ];
                        @endphp

                        @foreach ($fields as $name => $label)
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>{{ $label }}</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="{{ $name }}" placeholder="{{ $label }}" value="{{ $myprofilehome->$name ?? '' }}">
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-label-secondary" data-bs-dismiss="modal">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
