@php
$headergreeting = App\Models\HeaderGreatingSection::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="headergreating{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Header Greeting & Wishes Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.headergreatingsection') }}" method="POST">
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

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Greetings</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="greetings" placeholder="Greetings" value="{{ $headergreeting->greetings ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Pray -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Pray</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pray" placeholder="Pray" value="{{ $headergreeting->pray ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Sympathy -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Sympathy</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sympathy" placeholder="Sympathy" value="{{ $headergreeting->sympathy ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- See All -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See All</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all" placeholder="See All" value="{{ $headergreeting->see_all ?? '' }}">
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
