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
 <div class="container mt-5">
    <div class="row">
       <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <img src="images/LP-SKU-D4-IMG-en-us-1675258152028.png" class="img-fluid">
       </div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="card career_card mt-3 p-1 mb-5">
             <div class="card-body">
                <h6>Career</h6>
                @if(Session::has('success'))
                <p class="alert alert-info">{{ Session::get('success') }}</p>
                @endif
                <h4>Send us your CV</h4>
                <form class="mx-1 mx-md-4" method="POST" action="{{route('carrier-post')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-detail mt-3">
                     <label for="" class="form-label">Your Name</label>
                     <div style="border-bottom: 1px solid rgb(204, 204, 204);" class="d-flex justify-content-between align-items-center">
                        <input type="text" class="form-control" style=" border: none;" id="" name="name" placeholder="Jhon Doe" />
                        @error('name')
                        <div class="invalid-feedback d-block">
                           {{ $message }}
                                    </div>
                        @enderror

                     </div>
                  </div>
                  <div class="card-detail mt-3">
                     <label for="" class="form-label">Mobile Number</label>
                     <div style="border-bottom: 1px solid rgb(204, 204, 204);" class="d-flex justify-content-between align-items-center">
                        <img src="images/dubaiflag.png" width="30px" height="30px" alt="">
                        <input type="text" class="form-control" style=" border: none;" name="phone" id="" placeholder="+97123456785" />
                        @error('phone')
                        <div class="invalid-feedback d-block">
                           {{ $message }}
                                    </div>
                        @enderror

                     </div>
                  </div>
                  <div class="card-detail mt-3">
                     <label for="" class="form-label">Email (Optional)</label>
                     <div style="border-bottom: 1px solid rgb(204, 204, 204);" class="d-flex justify-content-between align-items-center">
                        <input type="email" class="form-control" style=" border: none;" name="email" id="" placeholder="Example@gmail.com" />
                        @error('email')
                        <div class="invalid-feedback d-block">
                           {{ $message }}
                                    </div>
                        @enderror

                     </div>
                  </div>
                  <div class="mt-4">
                    <input type="file" class=" w-50" name="image" style="border: 2px solid #067236;">
                    @error('image')
                    <div class="invalid-feedback d-block">
                       {{ $message }}
                                </div>
                    @enderror

                     {{-- <button class="btn" style="border: 2px solid #067236;">Upload CV</button> --}}
                  </div>
                  <div class="text-center mt-3">
                     <button class="btn w-50" type="submit" style="background: #067236;color:#FFE715;">Submit</button>
                  </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
