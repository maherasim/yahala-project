@php
$headervideo = App\Models\HeaderStreamSection::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="headerstreamsection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Header Videos Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.headerstreamsection') }}" method="POST">
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
                                <h6>SocialMedia Kurdî</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="yahala" placeholder="Yahala" value="{{ $headervideo->yahala ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- In Development -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>In Development</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="in_development" placeholder="In Development" value="{{ $headervideo->in_development ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Will be soon Available -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Will be soon Available</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="soon_available" placeholder="Will be soon Available" value="{{ $headervideo->soon_available ?? '' }}">
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
