@php
    // Retrieve the existing SigninSection data for the given language_id
    $signinsection = App\Models\SignInSection::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="signinsection__1{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Sign in Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.signinsection') }}" method="POST">
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
                                <h6>Enter E-mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Enter E-mail" value="{{ $signinsection->email ?? '' }}">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Enter Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ $signinsection->password ?? '' }}">
                            </div>
                        </div>

                        <!-- Remember me -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Remember me</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" name="remember_me" {{ $signinsection && $signinsection->remember_me ? 'checked' : '' }}> Remember me
                            </div>
                        </div>

                        <!-- Forget Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Forgot Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="forgot_password" placeholder="Forgot Password" value="{{ $signinsection->forgot_password ?? '' }}">
                            </div>
                        </div>

                        <!-- Sign In -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Sign In</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="signin" placeholder="Sign In" value="{{ $signinsection->signin ?? '' }}">
                            </div>
                        </div>

                        <!-- Login Error -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Login Error</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="login_error" placeholder="Login Error" value="{{ $signinsection->login_error ?? '' }}">
                            </div>
                        </div>

                        <!-- User Not Found -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>User Not Found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="not_found" placeholder="User Not Found" value="{{ $signinsection->not_found ?? '' }}">
                            </div>
                        </div>

                        <!-- Sign Up -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Already have not an account? Sign Up</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="signup" placeholder="Sign Up" value="{{ $signinsection->signup ?? '' }}">
                            </div>
                        </div>

                        <!-- Regain Password Mail -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>We will send a mail to the email address you registered to regain your password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="regain_password_mail" placeholder="Regain Password Mail" value="{{ $signinsection->regain_password_mail ?? '' }}">
                            </div>
                        </div>

                        <!-- E-Mail Format Wrong -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>E-Mail Format Wrong</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email_format_wrong" placeholder="E-Mail Format Wrong" value="{{ $signinsection->email_format_wrong ?? '' }}">
                            </div>
                        </div>

                        <!-- Correct E-Mail -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Please Enter your correct E-Mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="correct_email" placeholder="Correct E-Mail" value="{{ $signinsection->correct_email ?? '' }}">
                            </div>
                        </div>

                        <!-- Password Reset Email Sent -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Password Reset Email Sent</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password_reset_sent" placeholder="Password Reset Email Sent" value="{{ $signinsection->password_reset_sent ?? '' }}">
                            </div>
                        </div>

                        <!-- Reset Password Email -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>An email has been sent to you. Follow the directions in the email to reset your password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reset_password_email" placeholder="Reset Password Email" value="{{ $signinsection->reset_password_email ?? '' }}">
                            </div>
                        </div>

                        <!-- Verification -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Verification</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="verification" placeholder="Verification" value="{{ $signinsection->verification ?? '' }}">
                            </div>
                        </div>

                        <!-- Authentication Code Sent -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>An authentication code has been sent to your E-Mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="authentication_code_sent" placeholder="Authentication Code Sent" value="{{ $signinsection->authentication_code_sent ?? '' }}">
                            </div>
                        </div>

                        <!-- Did Not Receive Code -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>I didn't receive code</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="did_not_receive_code" placeholder="Did Not Receive Code" value="{{ $signinsection->did_not_receive_code ?? '' }}">
                            </div>
                        </div>

                        <!-- Resend Code -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Resend it</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="resend_code" placeholder="Resend Code" value="{{ $signinsection->resend_code ?? '' }}">
                            </div>
                        </div>

                        <!-- Time Left -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Time Left</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="time_left" placeholder="Time Left" value="{{ $signinsection->time_left ?? '' }}">
                            </div>
                        </div>

                        <!-- Verify Now -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Verify Now</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="verify_now" placeholder="Verify Now" value="{{ $signinsection->verify_now ?? '' }}">
                            </div>
                        </div>

                        <!-- Error Found -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Error Found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="error_found" placeholder="Error Found" value="{{ $signinsection->error_found ?? '' }}">
                            </div>
                        </div>

                        <!-- Invalid OTP -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Invalid OTP or Expired</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="invalid_otp" placeholder="Invalid OTP or Expired" value="{{ $signinsection->invalid_otp ?? '' }}">
                            </div>
                        </div>

                        <!-- Create Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="create_password" placeholder="Create Password">
                            </div>
                        </div>

                        <!-- Secure Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Choose a secure password that will be easy for you to remember</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="secure_password" placeholder="Secure Password" value="{{ $signinsection->secure_password ?? '' }}">
                            </div>
                        </div>

                        <!-- Has at least 8 Characters -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Has at least 8 Characters</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="has_8_characters" placeholder="Has at least 8 Characters" value="{{ $signinsection->has_8_characters ?? '' }}">
                            </div>
                        </div>

                        <!-- Uppercase Letter or Symbol -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Has an uppercase letter or symbol</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="uppercase_or_symbol" placeholder="Uppercase Letter or Symbol" value="{{ $signinsection->uppercase_or_symbol ?? '' }}">
                            </div>
                        </div>

                        <!-- Has a Number -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Has a Number</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="has_number" placeholder="Has a Number" value="{{ $signinsection->has_number ?? '' }}">
                            </div>
                        </div>

                        <!-- Continue -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Continue</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="continue" placeholder="Continue" value="{{ $signinsection->continue ?? '' }}">
                            </div>
                        </div>

                        <!-- Successfully -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Successfully</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="successfully" placeholder="Successfully" value="{{ $signinsection->successfully ?? '' }}">
                            </div>
                        </div>

                        <!-- Logged In -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>You are logged on yekbun now</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="logged_in" placeholder="Logged In" value="{{ $signinsection->logged_in ?? '' }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Repeat Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password" value="{{ $signinsection->repeat_password ?? '' }}">
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
