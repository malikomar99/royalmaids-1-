@extends('layouts.app')
@section('content')
<div class="inner-header">
    <div class="breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb-list list-unstyled d-flex">
              <li class="breadcrumb-item"><a href=""><i class="fa fas-setting mr-1"></i></a></li>
              <li class="breadcrumb-item active"><span>Settings / Personal Details</span></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--=================================
Inner Header -->

<div class="text-center">
  <br>
  <h3>Contact us</h3>
  <br>
  <h2>For Any Queries</h2>
  <br>
  <img src="images/Group 8151.png" alt="">
</div>
<br><br>

<div class="container">
  <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-12">
          <img src="images/question-mark-picture-id1256041716-1@2x.png" alt="" class="img-fluid">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2" style="background-color: black;">
         <div class="text-center">
          <h1 style="color: #ffe715;">Ask Questions</h1>
          <h6 style="color: white;">Call Or Email Us Regarding <br> Question Or Issues</h6>
          @if(Session::has('success'))
                                <p class="alert alert-info">{{ Session::get('success') }}</p>
                                @endif
         </div>
         <br><br>
         <form method="POST" action="{{route('contact-us')}}">
            @csrf
         <div style="display: flex;">
           
          <div>
              <input type="text" class="form-control" placeholder="Name" name="name" style="border: none; border-bottom: 1px solid gray;background-color: transparent;color: white;">
          </div>
          <div>
              <input  type="text" class="form-control" placeholder="Mobile#" name="phone" style="border: none; border-bottom: 1px solid gray;background-color: transparent;color: white;">
          </div>
         </div>
         <br>
         <input type="text" class="form-control" name="email" placeholder="Example@gmail.com"style="border: none; border-bottom: 1px solid gray;background-color: transparent;color: white;">
         <div>
          <br>
          <textarea class="form-control" id="w3review"  name="massage" rows="8" cols="46" placeholder="Write Message" style="background-color: transparent; resize: none; border-radius: 18px;color: white;"></textarea>
          <br><br><br>
          <div class="text-center">
              <button class="btn" type="submit" style="background-color: #067236; color: white; width: 190px; height: 50px;border-radius: 0px;">Submit</button>
          </div>
      </div>
         </form>
      </div>
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-12">
          <div class="flx">
              <div class="sec">
                  <br>
                  <i class='bx bx-location-plus'></i>
              </div>
              <div class="" style="padding-left: 20px; color: #067236;">
                  <h4>ADDRESS</h4>
                  <P>336 Centennial Ave. Cranford, NJ 07016</P>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 col-12">
          <div class="flx">
              <div class="sec">
                  <br>
                  <i class='bx bx-envelope'></i>
              </div>
              <div class="" style="padding-left: 20px; color: #067236;">
                  <h4>GET IN TOUCH</h4>
                  <P>example@jeffs.com sample@gmail.com</P>
              </div>
          </div>

      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 col-12">
          <div class="flx">
              <div class="sec">
                  <br>
                  <i class='bx bxs-phone'></i>
              </div>
              <div class="" style="padding-left: 20px; color: #067236;">
                  <h4>PHONE</h4>
                  <P>(908) 272 9150</P>
              </div>
          </div>

      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 col-12">
          <div class="flx">
              <div class="sec">
                  <br>
                  <i class='bx bx-time'></i>
              </div>
              <div class="" style="padding-left: 20px; color: #067236;">
                  <h4>TIMING</h4>
                  <P>Mon - Fri 9 am to 9 pm Sat: 9am to 5 pm</P>
              </div>
          </div>

      </div>
  </div>
</div>


<!--=================================
footer-->

<!--=================================
footer-->

<!--=================================
Back To Top -->
<div id="back-to-top" class="back-to-top">
  <a href="#"><i class="fas fa-long-arrow-alt-up"></i> </a>
</div>
<!--=================================
Back To Top -->

<!--=================================
Javascript -->
@endsection
