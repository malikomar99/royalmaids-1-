@extends('layouts.app')

@section('content')
<div class="container containers w-60 m-auto">
    <div class="row">
        <div class="col-md-12">
            <h2>Checkout</h2>
        </div>
        <div class="col-md-6">
            <div class="card cards p-2">
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between p-3">
                            <b>Payment Method</b>
                            <a href="{{route('cashondelivery',$checkout->id)}}" id="change-payment-method">Change</a>
                        </div>
                        @if(Session::has('massage'))
                        <p class="alert alert-info">{{ Session::get('massage') }}</p>
                        @endif
                        <div id="payment-method-stripe">
                            <form action="{{ route('payment') }}" method="post" id="payment-form">
                                @csrf
                                <div class="p-2 d-flex"
                                    style="background: #FFFBD9;border: 1px solid #28A76F;border-radius: 5px;">
                                    <div>
                                        <i class="fa fa-solid fa-envelope"></i>
                                        <span>Credit /Debit Card</span>
                                    </div>
                                    <div class="ml-auto">
                                        <img src="{{asset('/asset/images/Group 8330.png" class="img-fluid')}}">
                                        <img src="{{asset('/asset/build/visa.png" class="img-fluid')}}">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="card-number">Card Number</label>
                                    <br>
                                    <div id="card-number"></div>
                                    <br>
                                    <div id="card-errors" role="alert"></div>
                                </div>

                                <div class="form-group">
                                    <label for="card-expiry">Exp. Date (MM/YY)</label>
                                    <br>
                                    <div id="card-expiry"></div>
                                </div>

                                <div class="form-group">
                                    <label for="card-cvc">CVC Number</label>
                                    <br>
                                    <div id="card-cvc"></div>
                                </div>
                                <div id="payment-method-cash" style="display: none;">
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="payment-method" value="cash" id="cash-option">
                                            Cash (5% Extra)
                                        </label>
                                    </div>
                                </div>
                                {{-- @foreach($checkout as $check) --}}
                                <input type="hidden" name="id" value="{{$checkout->id}}" />
                                <input type="hidden" name="subtotal" value="{{$checkout->subtotal}}" />
                                <input type="hidden" name="address" value="{{$checkout->address}}" />
                                <input type="hidden" name="gst" value="{{$checkout->gst}}" />
                                <input type="hidden" name="total" value="{{$checkout->total}}" />
                                <input type="hidden" name="payment_type" value="card" />


                                {{-- @endforeach --}}
                                <div class="form-group mt-4">
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms">I agree to <a href="#">TERMS & CONDITION</a></label>
                                </div>

                                <div id="confirm-button" class="text-center mt-4">
                                    <button type="submit" class="btn" style="    background-color: #f85a14;
                                    color: white;
                                ">Submit Payment {{$checkout->total}}</button>
                                </div>
                                {{-- <div id="confirm-button" class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                                </div> --}}

                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="card cards">
                <div class="card-body">
                    <h5>Booking Details</h5>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Status</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">Confirmed</p>
                    </div>
                    <!--<div class="detail d-flex mt-4 bg-light">-->
                    <!--    <span class="ml-1 mt-1">Reference Code</span>-->
                    <!--    <p class="ml-auto mr-2 mt-1 font-weight-bold">8971C5</p>-->
                    <!--</div>-->
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Address</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->address}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Frequency</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->frequency}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Service</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->title}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Service Detail</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->title2}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Duration</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->hour}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Date & Start time</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->date}}<br>{{$checkout->time}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">No of Professional</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->Professional}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Material</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">{{$checkout->material}}</p>
                    </div>
                </div>
            </div>
            <div class="card cards mt-3">
                <div class="card-body">
                    <h5>Payment Summary</h5>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Subtotal</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">AED{{$checkout->subtotal}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">GST</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">AED {{$checkout->gst}}</p>
                    </div>
                    <div class="detail d-flex mt-4 bg-light">
                        <span class="ml-1 mt-1">Total</span>
                        <p class="ml-auto mr-2 mt-1 font-weight-bold">AED {{$checkout->total}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{env('PK_STRIPE')}}');
    const elements = stripe.elements();
    
    
    const style = {
        base: {
            fontSize: '16px',
            color: '#32325d',
        },
    };

    // Create an instance of the card Number, Expiry and CVC Elements.
    const cardNumber = elements.create('cardNumber', {style});
    const cardExpiry = elements.create('cardExpiry', {style});
    const cardCvc = elements.create('cardCvc', {style});

    // Mount the Elements into the `div` elements.
    cardNumber.mount('#card-number');
    cardExpiry.mount('#card-expiry');
    cardCvc.mount('#card-cvc');

    // Handle form submission
    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const {token, error} = await stripe.createToken(cardNumber);

        if (error) {
            // Inform the customer that there was an error.
            const errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(token);
        }
    });

    const stripeTokenHandler = (token) => {
        // Insert the token ID into the form so it gets submitted to the server
        const hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    };
  
</script>
@endsection