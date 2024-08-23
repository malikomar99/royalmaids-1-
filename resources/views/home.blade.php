@extends('layouts.app')

@section('content')
<section class="mb-5">
    <div id="" class="">
       <div class="">
          <div class="swiper-slide slide-01"  style="background-image: url('images/Group\ 8136.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
             <div class="container pt-5">
                <div class="row pt-5">
                   <div class="col-xl-6 col-lg-8 col-md-10 pr-md-5">
                      <div class="banner-content">
                         <div class="content">
                            <h2 class="animated mb-2 text-dark h1" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="1.0s">Best & Trusted <br><span class="text-success">Cleaning</span> Service</h2>
                            <div class="animated lead text-dark mb-2" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="1.0s" style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean<br> commodo ligula eget dolor. Aenean massa.</div>
                            <div class="animated video-btn d-flex align-items-center" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="2.0s">
                               <a href="#" class="btn btn-success text-dark" data-toggle="modal" data-target="#verifyphone">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-8 col-md-10 pr-md-5 mb-5">
                      <div class="card" style=" background-color: #d9d6ba; padding: 15px;">
                         <h5>Get A Free Estimate</h5>
                         <div class="content">
                            <div class=" mb-2">
                               <input style="background-color: #a3a091; border-radius: 10px; border: none;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                            </div>
                            <div class=" mb-2">
                               <input style="background-color: #a3a091; border-radius: 10px; border: none;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
                            </div>
                            <div class=" mb-2">
                               <select style="background-color: #a3a091; border-radius: 10px; border: none;" type="text" class="form-control"  placeholder="your Name">
                                  <option value="">Select A Services</option>
                               </select>
                            </div>
                            <div class="mb-2">
                               <textarea style="background-color: #a3a091; border-radius: 10px; border: none;" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Work Discription"></textarea>
                            </div>
                            <div class=" mb-2">
                               <input type="text" class="btn btn-success btn-block" id="exampleFormControlInput1" value="Submit">
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>
<section class="position-relative space-pb " style="margin-top: 150px;">
   <div class="text-center mb-5 mt-5">
       <h4>Services</h4>
       <h6>How We Works</h6>
       <img src="images/Group 8151.png" alt="">
   </div>
   <div class="container">
       <div class="row" id="services-container" style="row-gap: 40px;">
           @foreach ($services as $s)
               <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 mt-3 ">
                   <div class="card">
                       <div class="d-flex" style="column-gap: 5px;">
                          
                           <div class="d-flex justify-content-center align-items-center" style=" width: 70px; height: 70px; border-radius: 5px; background-color: #fffef4; padding: 10px; border: 1px solid rgb(202, 202, 202);">
                              <img src="{{$s->imageicons}}" alt="">
                           </div>
                           &nbsp;&nbsp;  &nbsp;&nbsp;
                           <div class="d-block">
                              <a href="{{ route('servicesdetails',$s->id) }}">
                                 <h6 class="text-dark">{{ $s->title2 }}</h6>
                             </a>
                             <p class="text-light">{{Str::limit($s->details, 100)}}</p>
                               <a class="btn btn-success  btn-sm" href="{{route('checkout',$s->id)}}" >Book Now</a>
                           </div>
                       </div>
                   </div>
               </div>
             
           @endforeach
       </div>

       <div class="text-center mt-5">
           <button class="btn btn-success btn-sm" id="load-more">Show More</button>
       </div>
   </div>
</section>
 <!--=================================
    Banner -->
 <section class="space-ptb team-grid">
    <div class="text-center mb-5">
       <h2>
          Team Members
       </h2>
       <h4>Meet Our Expert Cleaners</h4>
       <img src="images/Group 8151.png" alt="">
    </div>
    <div class="container">
       <div class="row">
         @foreach ($expert as $exp )
            
         
          <div class="col-lg-3 col-sm-6 mb-4 pb-2">
             <div class="team team-style-1" >
                <div class="team-img">
                   <img class="" src="{{$exp->image}}" height="250px" width="99%" alt="">
                </div>
                <div class="team-info text-center  " style="background-image: url('images/cardcarve.png'); background-repeat: no-repeat; width: 100%; background-size: cover; height: 200px; position: relative; top: -55px; ">
                   <div class="" style="position: relative; top: 60px;">
                      <h6 class="team-title"><a href="#">J{{$exp->name}}</a></h6>
                      <span class="team-designation">{{$exp->profession}}</span>
                      <div>
                         <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                         <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                         <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                         <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                         <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                      </div>
                      <p class="" >16 reviews</p>
                   </div>
                </div>
             </div>
          </div>
          @endforeach
         
        
       </div>
    </div>
 </section>
 <!--=================================
    Results -->
 <section class="space-ptb">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-6">
             <div class=" mb-2 mt-2">
                <h4>
                   You Might Ask
                </h4>
                <h6>Frequently Asked Questions</h6>
                <img src="images/Group 8169@2x.png" alt="">
             </div>
             <img src="images/istockphoto-1440050060-170667a.webp" class="img-fluid float-right" width="100%" alt="">
          </div>
          <div class="col-lg-6 pl-lg-5">
             <div class="accordion accordion-style-2" id="accordion-item-2">
                <div class="card" style="border-bottom: 1px solid #a3a091;">
                   <div class="accordion-icon card-header" id="one-accordion-item-2">
                      <h6 class="mb-0">
                         <a href="#" class="btn collapsed d-flex" data-toggle="collapse" data-target="#collapse-one-accordion-item-2" aria-expanded="false" aria-controls="collapse-one-accordion-item-2">
                            <p style="width: 30px; height: 30px; border-radius: 5px; background-color: #FFE715; display: flex; align-items: center; justify-content: center;">01</p>
                            &nbsp; &nbsp; Lorem ipsum dolor sit amet?
                         </a>
                      </h6>
                   </div>
                   <div id="collapse-one-accordion-item-2" class="collapse" aria-labelledby="one-accordion-item-2" data-parent="#accordion-item-2" style="">
                      <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                      </div>
                   </div>
                </div>
                <div class="card" style="border-bottom: 1px solid #a3a091;">
                   <div class="accordion-icon card-header" id="two-accordion-item-2">
                      <h6 class="mb-0">
                         <a href="#" class="btn collapsed d-flex" data-toggle="collapse" data-target="#collapse-two-accordion-item-2" aria-expanded="false" aria-controls="collapse-two-accordion-item-2">
                            <p style="width: 30px; height: 30px; border-radius: 5px; background-color: #FFE715; display: flex; align-items: center; justify-content: center;">02</p>
                            &nbsp; &nbsp; Lorem ipsum dolor sit amet?
                         </a>
                      </h6>
                   </div>
                   <div id="collapse-two-accordion-item-2" class="collapse" aria-labelledby="two-accordion-item-2" data-parent="#accordion-item-2">
                      <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                      </div>
                   </div>
                </div>
                <div class="card" style="border-bottom: 1px solid #a3a091;">
                   <div class="accordion-icon card-header" id="three-accordion-item-2">
                      <h6 class="mb-0">
                         <a href="#" class="btn collapsed d-flex" data-toggle="collapse" data-target="#collapse-three-accordion-item-2" aria-expanded="false" aria-controls="collapse-three-accordion-item-2">
                            <p style="width: 30px; height: 30px; border-radius: 5px; background-color: #FFE715; display: flex; align-items: center; justify-content: center;">03</p>
                            &nbsp; &nbsp; Lorem ipsum dolor sit amet?
                         </a>
                      </h6>
                   </div>
                   <div id="collapse-three-accordion-item-2" class="collapse" aria-labelledby="three-accordion-item-2" data-parent="#accordion-item-2">
                      <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                      </div>
                   </div>
                </div>
                <div class="card" style="border-bottom: 1px solid #a3a091;">
                   <div class="accordion-icon card-header" id="for-accordion-item-2">
                      <h6 class="mb-0">
                         <a href="#" class="btn collapsed d-flex" data-toggle="collapse" data-target="#collapse-for-accordion-item-2" aria-expanded="false" aria-controls="collapse-for-accordion-item-2">
                            <p style="width: 30px; height: 30px; border-radius: 5px; background-color: #FFE715; display: flex; align-items: center; justify-content: center;">04</p>
                            &nbsp; &nbsp; Lorem ipsum dolor sit amet?
                         </a>
                      </h6>
                   </div>
                   <div id="collapse-for-accordion-item-2" class="collapse" aria-labelledby="for-accordion-item-2" data-parent="#accordion-item-2">
                      <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                      </div>
                   </div>
                </div>
                <div class="card" style="border-bottom: 1px solid #a3a091;">
                   <div class="accordion-icon card-header" id="five-accordion-item-2">
                      <h6 class="mb-0">
                         <a href="#" class="btn collapsed d-flex" data-toggle="collapse" data-target="#collapse-five-accordion-item-2" aria-expanded="false" aria-controls="collapse-five-accordion-item-2">
                            <p style="width: 30px; height: 30px; border-radius: 5px; background-color: #FFE715; display: flex; align-items: center; justify-content: center;">05</p>
                            &nbsp; &nbsp; Lorem ipsum dolor sit amet?
                         </a>
                      </h6>
                   </div>
                   <div id="collapse-five-accordion-item-2" class="collapse" aria-labelledby="five-accordion-item-2" data-parent="#accordion-item-2">
                      <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                      </div>
                   </div>
                </div>
                <div class="card">
                   <div class="accordion-icon card-header" id="six-accordion-item-2">
                      <h6 class="mb-0">
                         <a href="#" class="btn collapsed d-flex " data-toggle="collapse" data-target="#collapse-six-accordion-item-2" aria-expanded="false" aria-controls="collapse-six-accordion-item-2">
                            <p style="width: 30px; height: 30px; border-radius: 5px; background-color: #FFE715; display: flex; align-items: center; justify-content: center;">06</p>
                            &nbsp; &nbsp; Lorem ipsum dolor sit amet?
                         </a>
                      </h6>
                   </div>
                   <div id="collapse-six-accordion-item-2" class="collapse" aria-labelledby="six-accordion-item-2" data-parent="#accordion-item-2">
                      <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                      </div>
                   </div>
                </div>
             </div>
             <div>
                <a href="" class="btn btn-success btn-sm">Ask More</a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--=================================
    Results -->
 <section class="space-pt mb-5" style = "background-color: #EBEBEB !important;">
    <div class="container">
       <div class="row justify-content-center mb-4">
          <div class="col-lg-7">
             <div class="section-title text-center">
                <h1  > Price & Plans </h1>
                <h5>Choose Your Perfect Plans</h5>
                <img src="images/Group 8151.png" alt="">
             </div>
          </div>
       </div>
       <div class="row " style="padding-bottom: 30px;">
          <div class="col-md-4">
            @foreach ($standerd as $stan)
             <div class="plan standard">
                <div class="plan-header">
                   <div>
                      <img src="images/G-1.png" alt="" class="images">
                      <h3>{{$stan->name}}</h3>
                   </div>
                   <div>
                      <img src="images/G-2.png" alt="" class="img-fluid img-fluids">
                   </div>
                   <div class="price">${{$stan->price}}</div>
                </div>
                <div class="plan-details text-center">
                   <h5>THIS IS <br> WHAT YOU GET</h5>
                   <p>{{$stan->service1}}</p>
                   <hr>
                   <p>{{$stan->service2}}</p>
                   <hr>
                   <p>{{$stan->service3}}</p>
                   <hr>
                   <p>{{$stan->service4}}</p>
                   <hr>
                   <p>{{$stan->service5}}</p>
                   <hr>
                   <p>{{$stan->service6}}</p>
                </div>
                <div class="d-flex justify-content-center">
                   <button class="sign-up ">Booking</button>
                </div>
             </div>
             @endforeach
          </div>
          <div class="col-md-4">
            @foreach ($Premium as $pre)
             <div class="plan premium" style="margin-top: -40px;">
                <div class="plan-header">
                   <div>
                      <img src="images/O-1.png" alt="" class="images">
                      <h3>{{$pre->name}}</h3>
                   </div>
                   <div>
                      <img src="images/O-2.png" alt="" class="img-fluid img-fluids">
                   </div>
                   <div class="price">{{$pre->price}}</div>
                </div>
                <div class="plan-details text-center">
                  <h5>THIS IS <br> WHAT YOU GET</h5>
                  <p>{{$pre->service1}}</p>
                  <hr>
                  <p>{{$pre->service2}}</p>
                  <hr>
                  <p>{{$pre->service3}}</p>
                  <hr>
                  <p>{{$pre->service4}}</p>
                  <hr>
                  <p>{{$pre->service5}}</p>
                  <hr>
                  <p>{{$pre->service6}}</p>
               </div>
                <div class="d-flex justify-content-center">
                   <button class="sign-up">Booking</button>
                </div>
             </div>
             @endforeach
          </div>
          <div class="col-md-4">
            @foreach ($Enterprise as $enter)
               
             <div class="plan enterprise">
                <div class="plan-header">
                   <div>
                      <img src="images/P-1.png" alt="" class="images">
                      <h3>{{$enter->name}}</h3>
                   </div>
                   <div>
                      <img src="images/P-2.png" alt="" class="img-fluid img-fluids" >
                   </div>
                   <div class="price">${{$enter->price}}</div>
                </div>
                <div class="plan-details text-center">
                   <h5>THIS IS <br> WHAT YOU GET</h5>
                   <p>{{$enter->service1}}</p>
                   <hr>
                   <p>{{$enter->service2}}</p>
                   <hr>
                   <p>{{$enter->service3}}</p>
                   <hr>
                   <p>{{$enter->service4}}</p>
                   <hr>
                   <p>{{$enter->service5}}</p>
                   <hr>
                   <p>{{$enter->service6}}</p>
                </div>
                <div class="d-flex justify-content-center">
                   <button class="sign-up">Booking</button>
                </div>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </section>
 <section class="space-ptb bg-holder bg-overlay-white-70 bg-white" style="background-image: url('');">
    <div class="container">
       <div class="row ">
          <div class="col-md-4 text-left">
             <div class="section-title text-center">
                <h2 >Client Review</h2>
                <h6>Client Says About Service</h6>
                <img src="images/Group 8169@2x.png" alt="">
                <br>
                <br>
                <a href="" class="btn btn-success btn-sm">Show All</a>
             </div>
          </div>
          <div class="col-md-8">
             <div class="owl-carousel testimonial testimonial-style-1 owl-nav-bottom-center" data-nav-dots="true" data-nav-arrow="false" data-items="2" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="30" data-autoheight="true">
                <div class="item">
                   <div class="testimonial-item">
                      <div class="testimonial-info">
                         <div class="testimonial-avatar-img">
                            <img class="img-fluid" style="border-radius: 50%;" src="images/avatar/01.jpg" alt="">
                         </div>
                         <div class="testimonial-author">
                            <h6 class="author-name"> - Josepha N.</h6>
                            <span class="author-designation">Web Developer</span>
                         </div>
                      </div>
                      <div class="testimonial-content">
                         <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                         </div>
                         <p class="mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem quisquam et excepturi ab aspernatur voluptates impedit in tenetur soluta!</p>
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="testimonial-item">
                      <div class="testimonial-info">
                         <div class="testimonial-avatar-img">
                            <img class="img-fluid" style="border-radius: 50%;" src="images/avatar/05.jpg" alt="">
                         </div>
                         <div class="testimonial-author">
                            <h6 class="author-name">- Obadias O.</h6>
                            <span class="author-designation">Project Manager</span>
                         </div>
                      </div>
                      <div class="testimonial-content">
                         <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                         </div>
                         <p class="mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem quisquam et excepturi ab aspernatur voluptates impedit in tenetur soluta!</p>
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="testimonial-item">
                      <div class="testimonial-info">
                         <div class="testimonial-avatar-img">
                            <img class="img-fluid" style="border-radius: 50%;" src="images/avatar/04.jpg" alt="">
                         </div>
                         <div class="testimonial-author">
                            <h6 class="author-name">- Fern W.</h6>
                            <span class="author-designation">Product Designer</span>
                         </div>
                      </div>
                      <div class="testimonial-content">
                         <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                         </div>
                         <p class="mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem quisquam et excepturi ab aspernatur voluptates impedit in tenetur soluta!</p>
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="testimonial-item">
                      <div class="testimonial-info">
                         <div class="testimonial-avatar-img">
                            <img class="img-fluid" style="border-radius: 50%;" src="images/avatar/01.jpg" alt="">
                         </div>
                         <div class="testimonial-author">
                            <h6 class="author-name"> - Fern W.</h6>
                            <span class="author-designation">Web Developer</span>
                         </div>
                      </div>
                      <div class="testimonial-content">
                         <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                         </div>
                         <p class="mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem quisquam et excepturi ab aspernatur voluptates impedit in tenetur soluta!</p>
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="testimonial-item">
                      <div class="testimonial-info">
                         <div class="testimonial-avatar-img">
                            <img class="img-fluid" style="border-radius: 50%;" src="images/avatar/05.jpg" alt="">
                         </div>
                         <div class="testimonial-author">
                            <h6 class="author-name">- Obadias O.</h6>
                            <span class="author-designation">Project Manager</span>
                         </div>
                      </div>
                      <div class="testimonial-content">
                         <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                         </div>
                         <p class="mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem quisquam et excepturi ab aspernatur voluptates impedit in tenetur soluta!</p>
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="testimonial-item">
                      <div class="testimonial-info">
                         <div class="testimonial-avatar-img">
                            <img class="img-fluid" style="border-radius: 50%;" src="images/avatar/04.jpg" alt="">
                         </div>
                         <div class="testimonial-author">
                            <h6 class="author-name">- Fern W.</h6>
                            <span class="author-designation">Product Designer</span>
                         </div>
                      </div>
                      <div class="testimonial-content">
                         <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                         </div>
                         <p class="mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem quisquam et excepturi ab aspernatur voluptates impedit in tenetur soluta!</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--=================================
          Client -->
       <!--=================================
          Client -->
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
                                   <div class="d-flex justify-content-center align-items-center" style=" width: 70px; height: 70px; border-radius: 5px; background-color: #fffef4; padding: 10px; border: 1px solid rgb(202, 202, 202);">
                                       <img src="${service.imageicons}" alt="">
                                   </div>
                                   &nbsp;&nbsp;  &nbsp;&nbsp;
                                   <div class="d-block">
                                       <h6 class=" text-dark">${service.title2}</h6>
                                       <p class="text-light">${service.details.substring(0, 100)}</p>
                                       <a class="btn btn-success  btn-sm">Book Now</a>
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
