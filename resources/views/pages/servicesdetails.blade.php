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

<!--=================================
Login -->
  <!-- services start  -->
  @foreach ($services as $ser)
  <section class="serve">
   
        
   
    <div class="container py-5">
        <div class="serve-1 text-center">
            <h3>Services</h3>
            <h1>{{$ser->title}}</h1>
            <img src="images/Group 8151.png" alt="">
        </div>
        <div class="row pt-4">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="serve-h2">
                    <h2>{{$ser->title2}}</h2>
                </div>
                <div class="serve-p">
                    <p>{{$ser->details}}</p>
                </div>
                <div class="serve-ul">
                    <ul>
                        @foreach(explode(',', $ser->services) as $services)
                            <li>{{ trim($services) }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="serve-p">
                    <p>{{$ser->details2}}</p>
                </div>
                <div class="serve-h4">
                    <h4>Starting  <span> AED {{$ser->price}} /hour </span></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div>
                <img src="{{$ser->image}}" alt="" class="img-fluid">
               </div>
            </div>

        </div>
    </div>
   
</section>
@endforeach
<!-- popular start  -->
<section class="popular">

     

    <div class="container py-3">
        <div>
            <h1>POPULAR ADD-ONS</h1>
        </div>
        <div class="row py-3">
            @foreach ($addonServices as $ser )
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div>
                    <div class=" d-flex">
                        <div class="popular-h6">
                            <h6>{{$ser->index}}</h6>
                        </div>
                        <div class="popular-blank">
                            <h1 style="color: white;"> ...................</h1>
                        </div>
                    </div>
                    <div>
                        <h6 style="padding-left: 12px; font-weight: bold; color: #067236;">{{$ser->heading1}}</h6>
                        <div>
                            <ul style="font-size: 15px;">
                                @foreach(explode(',', $ser->addonservices1) as $addonservices1)
                                <li>{{ trim($addonservices1) }}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div>
                    <img src="{{$ser->image1}}" alt="" class="img-fluid">
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                <div>
                    <div class=" d-flex">
                        <div class="popular-h6">
                            <h6>2</h6>
                        </div>
                        <div class="popular-blank">
                            <h1 style="color: white;"> ...................</h1>
                        </div>
                    </div>
                    <div>
                        <h6 style="padding-left: 12px; font-weight: bold; color: #067236;">{{$ser->heading2}}</h6>
                        <div>
                            <ul style="font-size: 15px;">
                                @foreach(explode(',', $ser->addonservices2) as $addonservices2)
                                <li>{{ trim($addonservices2) }}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div>
                    <img src="{{$ser->image2}}" alt="" class="img-fluid">
                </div>
            </div> --}}
            <div class="popular-btn py-4">
                <button class="btn btn-success">Book Now</button>
            </div>
        </div>
    </div>
    
   
</section>

<!-- popular 2 start  -->
{{-- <section class="popular">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div>
                    <div class=" d-flex">
                        <div class="popular-h6">
                            <h6>3</h6>
                        </div>
                        <div class="popular-blank">
                            <h1 style="color: white;"> ...................</h1>
                        </div>
                    </div>
                    <div>
                        <h6 style="padding-left: 12px; font-weight: bold; color: #067236;">{{$ser->heading3}}</h6>
                        <div>
                            <ul style="font-size: 15px;">
                                @foreach(explode(',', $ser->addonservices3) as $addonservices3)
                                <li>{{ trim($addonservices3) }}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div>
                    <img src="{{$ser->image3}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                <div>
                    <div class=" d-flex">
                        <div class="popular-h6">
                            <h6>4</h6>
                        </div>
                        <div class="popular-blank">
                            <h1 style="color: white;"> ...................</h1>
                        </div>
                    </div>
                    <div>
                        <h6 style="padding-left: 12px; font-weight: bold; color: #067236;">{{$ser->heading4}}</h6>
                        <div>
                            <ul style="font-size: 15px;">
                                @foreach(explode(',', $ser->addonservices4) as $addonservices4)
                                <li>{{ trim($addonservices4) }}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div>
                    <img src="{{$ser->image4}}" alt="" class="img-fluid">
                </div>
            </div>
          
        </div>
    </div>
</section> --}}
<!-- Before and after start  -->
 <section class="after py-4">
    <div class="container">
        <div class="after-h">
            <h1>BEFORE & AFTER MAGIC</h1>
            <h4>Our cleaning services work wonders!</h4>
        </div>
        <div class="row">
            @foreach ($gallery as $gel)
                
           
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
                <div>
                   <img src="{{$gel->image1}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-4">
                <div>
                    <img src="{{$gel->image2}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-4">
                <div>
                    <img src="{{$gel->image3}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-4">
                <div>
                    <img src="{{$gel->image4}}" alt="" class="img-fluid">
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-4">
                <div>
                    <img src="{{$gel->image5}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-4">
                <div>
                    <img src="{{$gel->image6}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-4">
                <div>
                    <img src="{{$gel->image7}}" alt="" class="img-fluid">
                </div>
            </div>
            @endforeach
        </div>
    </div>
 </section>

@endsection