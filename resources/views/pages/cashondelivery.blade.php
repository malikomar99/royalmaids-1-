@extends('layouts.app')

@section('content')

<div class="container containers w-60 m-auto ">

    <div class="row">
      <div class="col-md-12">
        <h2>Checkout</h2>
      </div>
      <div class="col-md-6">
        <div class="card cards p-2 ">
          <div class="row mt-4 ">
              <div class="col-lg-12 ">
                 <div class="d-flex justify-content-between p-3">
                  <b>Cash (5% Extra)</b>
                  <a href="{{route('checkout2',$checkout->id)}}" >Change</a>
                 </div>
                 <div class="mb-3 p-3">
                  {{-- <label for="" class="form-label">Mobile Number</label> --}}
                  <div style="border-bottom: 1px solid rgb(204, 204, 204);" class="d-flex justify-content-between align-items-center">
                    {{-- <img src="images/dubaiflag.png" width="30px" height="30px"  alt="">
                    <input type="text" class="form-control" style=" border: none;" id="" placeholder="+97123456785">
                    <a href="" class="text-nowrap">Get OTP</a> --}}
                    {{-- @php
                    $subtotal = $checkout->Subtotal * 5; // Accessing the property of the individual item in the loop
                    @endphp --}}
                    {{-- @foreach($checkout as $check) --}}
                    <form action="{{ route('cod') }}" method="post" >
                      @csrf
                    <input type="text" name="id" value="{{$checkout->id}}" />
                   
                    <input type="text" name="subtotal" value="{{$checkout->subtotal * 0.05 + $checkout->subtotal}}" />
                    
                    <input type="text" name="address" value="{{$checkout->address}}" />
                    <input type="text" name="gst" value="{{$checkout->gst}}" />
                    <input type="text" name="total" value="{{$checkout->total}}" />
                    <input type="hidden" name="payment_type" value="cod" />
                    <input type="hidden" name="payment_status" value="cod" />
                    
                    
                    {{-- @endforeach --}}
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="text-center">
         <input type="checkbox"> &nbsp;
         <b>I agree to TERMS & CONDITION</b>
    </div>
      <div class="text-center">
        {{-- <button id="btn" class="btn btn-block btn-success w-50 mt-3" data-toggle="modal" data-target="#verifyphone">Complete</button> --}}
        <button type="submit" class="btn btn-block btn-success w-50 mt-3" >Complete</button>
    </div>
  </form>
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
                    <p class="ml-auto mr-2 mt-1 font-weight-bold">AED{{$checkout->subtotal * 0.05 + $checkout->subtotal}}</p>
                </div>
                <div class="detail d-flex mt-4 bg-light">
                    <span class="ml-1 mt-1">GST</span>
                    <p class="ml-auto mr-2 mt-1 font-weight-bold">AED {{$checkout->gst}}</p>
                </div>
                <div class="detail d-flex mt-4 bg-light">
                    <span class="ml-1 mt-1">Total</span>
                    <p class="ml-auto mr-2 mt-1 font-weight-bold">AED {{$checkout->subtotal * 0.05 + $checkout->subtotal+$checkout->gst}}</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
    </div>

</div>
<!--=================================
Login -->
<div class="modal fade" id="verifyphone" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"    style="margin-top: 150px;">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Change Payment Method</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <!-- Form structure -->
      <form>
          <div class="row p-3">
            <p>Please Enter the Code  that was sent to</p>
              <div class="col-md-12 px-1">
                <label><h5>+9234567899876</h5></label>
                  <div class="form-group d-flex" style="column-gap: 20px;">
                      <input  type="text" class="form-control" style="width: 10%;"  id="" />
                      <input  type="text" class="form-control" style="width: 10%;"  id="" />
                      <input  type="text" class="form-control" style="width: 10%;"  id="" />
                      <input  type="text" class="form-control" style="width: 10%;"  id="" />
                  </div>
              </div>
              <div class="col-md-12">
                <p>Resend Code in <b>00:20</b></p>
              </div>
              <div class="col-md-12">
                <a href="" class="btn btn-secondary btn-sm">Whatsapp</a>
                <a href="" class="btn btn-sm border-1" style="border: 1px solid rgb(226, 226, 226);">SMS</a>
              </div>
          </div>
      </form>
  <!-- Google Map iframe -->
</div>
</div>
</div>
</div>

@endsection