@php
$homepage = App\Models\HomePageLanguage::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="homepagelanguage{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Home Page Language Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.savehompagelanguage') }}" method="POST">
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

                        <!-- Categories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Language</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="language_main" placeholder="language" value="{{ $homepage->language_main ?? '' }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Search Language</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="search_language" placeholder="Categories" value="{{ $homepage->search_language ?? '' }}">
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
