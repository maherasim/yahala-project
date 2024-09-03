<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="mychannelsetting{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Channel Settings	
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.ChannelsSetting') }}" method="POST">
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

                        {{-- <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friend Request</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friend_request" placeholder="Friend Request">
                            </div>
                        </div> --}}
                        <h3>Coming Soon</h3>

                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-label-secondary"
                                data-bs-dismiss="modal">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
