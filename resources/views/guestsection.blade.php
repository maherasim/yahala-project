@php
$homepage = App\Models\GuestSection::where('language_id', $language->id)->first();
$guestSectionInstance = new App\Models\GuestSection();
$fillableFields = $guestSectionInstance->getFillable();

// Remove 'language_id' from the array of fields to generate inputs for
$fillableFields = array_filter($fillableFields, function($field) {
    return $field !== 'language_id';
});
@endphp

<div class="modal fade" id="signinsection__234{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Guest Section Language Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.storeguest') }}" method="POST">
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

                        <!-- Dynamic Form Fields -->
                        @foreach ($fillableFields as $field)
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <h6>{{ ucwords(str_replace('_', ' ', $field)) }}</h6>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="{{ $field }}" placeholder="{{ $field }}" value="{{ $homepage->$field ?? '' }}">
                                </div>
                            </div>
                        @endforeach
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-label-secondary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
