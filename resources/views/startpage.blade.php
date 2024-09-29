@php
    // Retrieve the existing SigninSection data for the given language_id
    $signinsection = App\Models\StartPage::where('language_id', $language->id)->first();
@endphp



 <div class="modal fade" id="startpage__1{{ $language->id }}" tabindex="-1" aria-hidden="true">
   <div class="modal-body">
    <form action="{{ route('languages.startpage') }}" method="POST">
        @csrf
        <input type="hidden" name="language_id" value="{{ $language->id }}">

        <div class="container">
            <div class="row mt-2">
                <div class="col-md-6">
                    <h6>Language</h6>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="language" placeholder="Language" value="{{ $startpage->language ?? '' }}">
                </div>
            </div>
            <!-- Repeat for other fields -->
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-label-secondary" data-bs-dismiss="modal">Save</button>
        </div>
    </form>
</div>

 </div>
