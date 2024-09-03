@php
    // Retrieve the existing FooterFriendSection data for the given language_id
    $footerfriend = App\Models\FooterQuickLauncher::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="footerQuickSectionModal{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Footer Quick Launcher Sections</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.footerquicklauncher') }}" method="POST">
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
                                <h6>Quick Launcher</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="quick_launcher" placeholder="Quick Launcher" value="{{ $footerfriend->quick_launcher ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Wishes & Thanks</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wishes_thanks" placeholder="Wishes & Thanks" value="{{ $footerfriend->wishes_thanks ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Greetings</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="greetings" placeholder="Greetings" value="{{ $footerfriend->greetings ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Wishes</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wishes" placeholder="Wishes" value="{{ $footerfriend->wishes ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Prays</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="prays" placeholder="Prays" value="{{ $footerfriend->prays ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Introduce your Business</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="introduce_business" placeholder="Introduce your Business" value="{{ $footerfriend->introduce_business ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Services</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="services" placeholder="Services" value="{{ $footerfriend->services ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Bazar</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="bazar" placeholder="Bazar" value="{{ $footerfriend->bazar ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Channels</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="channels" placeholder="Channels" value="{{ $footerfriend->channels ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Shops</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shops" placeholder="Shops" value="{{ $footerfriend->shops ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Fast Sharing</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fast_sharing" placeholder="Fast Sharing" value="{{ $footerfriend->fast_sharing ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Feeds</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="feeds" placeholder="Feeds" value="{{ $footerfriend->feeds ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Stories</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="stories" placeholder="Stories" value="{{ $footerfriend->stories ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>GoLive</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="golive" placeholder="GoLive" value="{{ $footerfriend->golive ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Video</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="video" placeholder="Video" value="{{ $footerfriend->video ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Quick Access</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="quick_access" placeholder="Quick Access" value="{{ $footerfriend->quick_access ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Storage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_storage" placeholder="My Storage" value="{{ $footerfriend->my_storage ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Used</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="used" placeholder="Used" value="{{ $footerfriend->used ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Free</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="free" placeholder="Free" value="{{ $footerfriend->free ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Coming Soon</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="coming_soon" placeholder="Coming Soon" value="{{ $footerfriend->coming_soon ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>This section is under development</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="under_development" placeholder="This section is under development" value="{{ $footerfriend->under_development ?? '' }}">
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
