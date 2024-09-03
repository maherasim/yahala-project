@php
$headersection = App\Models\HeaderSectionStories::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="headerstoriessection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Header Stories Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.headersectionstories') }}" method="POST">
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
                                <h6>My Subscriber</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_subscriber" placeholder="My Subscriber" value="{{ $headersection->my_subscriber ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Friends Stories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends Stories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends_stories" placeholder="Friends Stories" value="{{ $headersection->friends_stories ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Family Stories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family Stories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family_stories" placeholder="Family Stories" value="{{ $headersection->family_stories ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- My Stories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Stories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_stories" placeholder="My Stories" value="{{ $headersection->my_stories ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- See All -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>See All</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_all" placeholder="See All" value="{{ $headersection->see_all ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Created -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Created</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="created" placeholder="Created" value="{{ $headersection->created ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Your Story is created Successfully -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Your Story is created Successfully</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="story_created_success" placeholder="Your Story is created Successfully" value="{{ $headersection->story_created_success ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Latest Stories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Stories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_stories" placeholder="Latest Stories" value="{{ $headersection->latest_stories ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- No Stories found -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Stories found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_stories_found" placeholder="No Stories found" value="{{ $headersection->no_stories_found ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Recently viewed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Recently viewed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="recently_viewed" placeholder="Recently viewed" value="{{ $headersection->recently_viewed ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Stories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Stories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="stories" placeholder="Stories" value="{{ $headersection->stories ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Create new Stories -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create new Stories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create_new_stories" placeholder="Create new Stories" value="{{ $headersection->create_new_stories ?? '' }}">
                            </div>
                        </div>
                    
                        <!-- Start now -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Start now</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="start_now" placeholder="Start now" value="{{ $headersection->start_now ?? '' }}">
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
