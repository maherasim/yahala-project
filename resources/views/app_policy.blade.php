@php
$homepage = App\Models\App_Policy::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="app_policy{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Home Page Language Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.saveappp_policy') }}" method="POST">
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
                                <h6>Policy Terms</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="policy_terms" placeholder="policy_terms" value="{{ $homepage->policy_terms ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Description</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" placeholder="description" value="{{ $homepage->description ?? '' }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Heading Title</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="heading_title" placeholder="heading_title" value="{{ $homepage->heading_title ?? '' }}">
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
