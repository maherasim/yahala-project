@php
    // Retrieve the existing SigninSection data for the given language_id
    $signinsection = App\Models\StartPage::where('language_id', $language->id)->first();
@endphp



 <div class="modal fade" id="startpage__1{{ $language->id }}" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-md modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modalCenterTitle">Start Page</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 @if(isset($startpage))
                    <pre>{{ print_r($startpage->toArray(), true) }}</pre>
                @endif
                 <form action="{{ route('languages.startpage') }}" method="POST">
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
                                 <h6>Language</h6>
                             </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="language" placeholder="Language"
                                     value="{{ $startpage->language ?? '' }}">
                             </div>
                         </div>

                         <div class="row mt-2">
                             <div class="col-md-6">
                                 <h6>Our Policy yes</h6>
                             </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="our_policy" placeholder="Our Policy"
                                     value="{{ $startpage->our_policy ?? '' }}">
                             </div>
                         </div>

                         <div class="row mt-2">
                             <div class="col-md-6">
                                 <h6>Login</h6>
                             </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="login" placeholder="Login"
                                     value="{{ $startpage->login ?? '' }}">
                             </div>
                         </div>

                         <div class="row mt-2">
                             <div class="col-md-6">
                                 <h6>Sign up</h6>
                             </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="sign_up" placeholder="Sign up"
                                     value="{{ $startpage->sign_up ?? '' }}">
                             </div>
                         </div>

                         <div class="row mt-2">
                             <div class="col-md-6">
                                 <h6>Guest</h6>
                             </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="dear_guest" placeholder="Dear Guest"
                                     value="{{ $startpage->dear_guest ?? '' }}">
                             </div>
                         </div>

                         <div class="row mt-2">
                             <div class="col-md-6">
                                 <h6>Create Account</h6>
                             </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="create_account"
                                     placeholder="Create Account" value="{{ $startpage->create_account ?? '' }}">
                             </div>
                         </div>
                     </div>

                     <div class="modal-footer">
                         <button type="submit" class="btn btn-label-secondary" data-bs-dismiss="modal">Save</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
