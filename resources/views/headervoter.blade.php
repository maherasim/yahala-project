@php
$headervoter = App\Models\headervoter::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="headervoter{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Header Voting Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.saveSectionvoter') }}" method="POST">
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
                                <h6>Categories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="categories" placeholder="Categories" value="{{ $headervoter->categories ?? '' }}">
                            </div>
                        </div>

                        <!-- Newst Uploads -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Newst Uploads</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="newst_uploads" placeholder="Newst Uploads" value="{{ $headervoter->newst_uploads ?? '' }}">
                            </div>
                        </div>

                        <!-- Past Vote -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Past Vote</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="past_vote" placeholder="Past Vote" value="{{ $headervoter->past_vote ?? '' }}">
                            </div>
                        </div>

                        <!-- Your Vote -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Your Vote</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="your_vote" placeholder="Your Vote" value="{{ $headervoter->your_vote ?? '' }}">
                            </div>
                        </div>

                        <!-- What u Like -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>What u Like</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="what_u_like" placeholder="What u Like" value="{{ $headervoter->what_u_like ?? '' }}">
                            </div>
                        </div>

                        <!-- Notification -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Notification</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="notification" placeholder="Notification" value="{{ $headervoter->notification ?? '' }}">
                            </div>
                        </div>

                        <!-- You can vote one Time only -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>You can vote one Time only</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="vote_one_time" placeholder="You can vote one Time only" value="{{ $headervoter->vote_one_time ?? '' }}">
                            </div>
                        </div>

                        <!-- You can’t redo your Vote -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>You can’t redo your Vote</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cant_redo_vote" placeholder="You can’t redo your Vote" value="{{ $headervoter->cant_redo_vote ?? '' }}">
                            </div>
                        </div>

                        <!-- Community -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Community</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="community" placeholder="Community" value="{{ $headervoter->community ?? '' }}">
                            </div>
                        </div>

                        <!-- Reviews qualification -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Reviews qualification</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reviews_qualification" placeholder="Reviews qualification" value="{{ $headervoter->reviews_qualification ?? '' }}">
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Total</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="total" placeholder="Total" value="{{ $headervoter->total ?? '' }}">
                            </div>
                        </div>

                        <!-- Statistics -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Statistics</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="statistics" placeholder="Statistics" value="{{ $headervoter->statistics ?? '' }}">
                            </div>
                        </div>

                        <!-- Age and gender -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Age and gender</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="age_and_gender" placeholder="Age and gender" value="{{ $headervoter->age_and_gender ?? '' }}">
                            </div>
                        </div>

                        <!-- Male -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Male</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="male" placeholder="Male" value="{{ $headervoter->male ?? '' }}">
                            </div>
                        </div>

                        <!-- Female -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Female</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="female" placeholder="Female" value="{{ $headervoter->female ?? '' }}">
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
