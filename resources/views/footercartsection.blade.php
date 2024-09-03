@php
    // Retrieve the existing FooterCart data for the given language_id
    $footercart = App\Models\FooterCart::where('language_id', $language->id)->first();
@endphp

<div class="modal fade" id="footercart{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Footer Cart Sections</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.footercart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="language_id" value="{{ $language->id }}">

                    <!-- My Cart Section -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>English Language</h5>
                            </div>
                            <div class="col-md-6">
                                <h5>{{ $language->title }} Language</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>My Cart</h3>
                            </div>
                        </div>

                        <!-- Music Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Music Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="music_cart" placeholder="My Music Cart" value="{{ $footercart->music_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Video Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Video Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="video_cart" placeholder="My Video Cart" value="{{ $footercart->video_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Bazar Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Bazar Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="bazar_cart" placeholder="My Bazar Cart" value="{{ $footercart->bazar_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Event Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Event Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="event_cart" placeholder="My Event Cart" value="{{ $footercart->event_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Shop Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Shop Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shop_cart" placeholder="My Shop Cart" value="{{ $footercart->shop_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Service Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Service Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="service_cart" placeholder="My Service Cart" value="{{ $footercart->service_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Wishes Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Wishes Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wishes_cart" placeholder="My Wishes Cart" value="{{ $footercart->wishes_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Donate -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Donate</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="donate" placeholder="My Donation Cart" value="{{ $footercart->donate ?? '' }}">
                            </div>
                        </div>

                        <!-- Portal Cart -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Portal Cart</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="portal_cart" placeholder="My Portal Cart" value="{{ $footercart->portal_cart ?? '' }}">
                            </div>
                        </div>

                        <!-- Select the payment Method -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select the payment Method</h6>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" name="payment_method">
                                    <option value="" disabled {{ is_null($footercart) || is_null($footercart->payment_method) ? 'selected' : '' }}>Select your payment method</option>
                                    <option value="credit_card" {{ $footercart && $footercart->payment_method == 'credit_card' ? 'selected' : '' }}>Credit Card</option>
                                    <option value="paypal" {{ $footercart && $footercart->payment_method == 'paypal' ? 'selected' : '' }}>PayPal</option>
                                    <option value="bank_transfer" {{ $footercart && $footercart->payment_method == 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
                                </select>
                            </div>
                        </div>

                        <!-- Accept policy and terms -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Accept policy and terms</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" name="accept_policy_terms" {{ $footercart && $footercart->accept_policy_terms ? 'checked' : '' }}> I accept the policy and terms
                            </div>
                        </div>

                        <!-- Office Information will Shared in your Invoice -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Office Information will Shared in your Invoice</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="office_information" placeholder="Office Information" value="{{ $footercart->office_information ?? '' }}">
                            </div>
                        </div>

                        <!-- Bank Information will Shared in your Invoice -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Bank Information will Shared in your Invoice</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="bank_information" placeholder="Bank Information" value="{{ $footercart->bank_information ?? '' }}">
                            </div>
                        </div>

                        <!-- Pay Now -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Pay Now</h6>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Pay Now</button>
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
