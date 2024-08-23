@extends('layouts.app')
@section('content')
<div class="inner-header">
    <div class="breadcrumb">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <ol class="breadcrumb-list list-unstyled d-flex">
                   <li class="breadcrumb-item"><a href=""><i class="fa fas-setting mr-1"></i></a></li>
                   <li class="breadcrumb-item active"><span>Settings / Services</span></li>
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
 <section class="position-relative space-pb " style="margin-top: 100px;">
    <div class="text-center mb-5 mt-5">
       <h4>Services</h4>
       <h6>How We Work</h6>
       <img src="images/Group 8151.png" alt="">
    </div>
    <div class="container">
       <div class="row" id="services-container" style="row-gap: 40px;">
          @foreach ($services as $s)
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 mt-3">
              <div class="card">
                  <div class="d-flex" style="column-gap: 5px;">
                      <div class="d-flex justify-content-center align-items-center" style="width: 70px; height: 70px; border-radius: 5px; background-color: #fffef4; padding: 10px; border: 1px solid rgb(202, 202, 202);">
                         <img src="{{$s->imageicons}}" alt="">
                      </div>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="d-block">
                          <h6 class="text-dark">{{$s->title2}}</h6>
                          <p class="text-light">{{Str::limit($s->details, 100)}}</p>
                          <a class="btn btn-success btn-sm">Book Now</a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
       </div>
       <div class="text-center mt-5">
          <a id="load-more" class="btn btn-success btn-sm">Show More</a>
       </div>
    </div>
 </section>
 <script>
   document.addEventListener('DOMContentLoaded', function () {
       let skip = 6; // Initial skip value

       document.getElementById('load-more').addEventListener('click', function () {
           fetch(`{{ route('services.load-more') }}?skip=${skip}`)
               .then(response => response.json())
               .then(data => {
                   let container = document.getElementById('services-container');
                   data.forEach(service => {
                       let serviceItem = document.createElement('div');
                       serviceItem.classList.add('col-sm-6', 'col-lg-4', 'mb-4', 'mb-lg-0', 'mt-3');
                       serviceItem.innerHTML = `
                           <div class="card">
                               <div class="d-flex" style="column-gap: 5px;">
                                   <div class="d-flex justify-content-center align-items-center" style="width: 70px; height: 70px; border-radius: 5px; background-color: #fffef4; padding: 10px; border: 1px solid rgb(202, 202, 202);">
                                       <img src="${service.imageicons}" alt="">
                                   </div>
                                   &nbsp;&nbsp;&nbsp;&nbsp;
                                   <div class="d-block">
                                       <h6 class="text-dark">${service.title2}</h6>
                                       <p class="text-light">${service.details.substring(0, 100)}</p>
                                       <a class="btn btn-success btn-sm">Book Now</a>
                                   </div>
                               </div>
                           </div>
                       `;
                       container.appendChild(serviceItem);
                   });
                   skip += 6; // Increase the skip value by 4
               });
       });
   });
</script>
@endsection
