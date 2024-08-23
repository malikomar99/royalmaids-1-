<header class="header header-sticky default">
   <div class="topbar">
       <div class="container">
           <div class="topbar-inner">
               <div class="row">
                   <div class="col-12">
                       <div class="d-block d-md-flex align-items-center text-center">
                           <div class="mr-3 d-inline-block">
                               <a href="tel:1-800-555-1234">
                                   Phone no: +012 345 567 890
                               </a>
                           </div>
                           <div class="mr-auto d-inline-block">
                               <a href="mailto:info@example.com">
                                   email us: info@example.com
                               </a>
                           </div>
                           <div class="social d-inline-block">
                               <ul class="list-unstyled">
                                   <li><a href="#"><i class="fab fa-twitter" style="color: #ffe715;"></i></a></li>
                                   <li><a href="#"><i class="fab fa-facebook-f" style="color: #ffe715;"></i></a></li>
                                   <li><a href="#"><i class="fab fa-youtube" style="color: #ffe715;"></i></a></li>
                                   <li><a href="#"><i class="fab fa-instagram" style="color: #ffe715;"></i></a></li>
                                   <li><a href="#"><i class="fab fa-linkedin-in" style="color: #ffe715;"></i></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <nav class="container navbar navbar-static-top navbar-expand-xl">
       <div class="container position-relative">
           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
           <a class="navbar-brand" href="#">
               <img class="img-fluid" src="{{ asset('/images/logo.png') }}" alt="logo">
           </a>

           <div class="navbar-collapse collapse justify-content-end justify-content-xl-center">
               <div style="width: 600px !important; margin: auto; display: flex; flex-direction: column; justify-content: center;">
                   <div style="width:100%; margin: auto;">
                       <form action="" method="get" class="d-flex" data-toggle="modal" data-target="#exampleModalCenter">
                           <span><i class='fa fa-map-marker-alt'></i></span>
                           <input type="text" class="not-click form-control" name="search" placeholder="Business Bay, Dubai, UAE" autofocus>
                           <span class="text-success change">Change</span>
                       </form>
                   </div>
                   <div style="display:flex !important; justify-content: center;">
                       <ul class="nav navbar-nav">
                           <li class="nav-item active">
                               <a class="nav-link" href="{{ url('/') }}">Home</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('service') }}">Services</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('career') }}">Career</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>

           <div class="navbar-collapse collapse justify-content-end justify-content-xl-center">
               <ul class="nav navbar-nav">
                   <li class="dropdown nav-item">
                       <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">
                           <img style="width: 40px; height: 40px; border-radius: 50%;" src="/images/dubaiflag.png" alt=""> &nbsp; &nbsp;Dubai<i class="fas fa-chevron-down fa-xs"></i>
                       </a>
                       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="blog-classic-full-width.html"><span>Pakistan</span></a></li>
                           <li><a class="dropdown-item" href="blog-classic-left-sidebar.html"><span>India</span></a></li>
                           <li><a class="dropdown-item" href="blog-single.html"><span>Saudi Arabia</span></a></li>
                       </ul>
                   </li>
                   {{-- @guest
                       @if (Route::has('login'))
                           <li class="nav-item">
                               {{-- <a class="nav-link" href="" id="verifyphone">{{ __('Login') }}</a> --}}
                               {{-- <div class="modal fade" id="verifyphone" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" style="margin-top: 150px;">   --}}
                                {{-- <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#verifyphone"><i style="font-size: 30px;" class="fas fa-user"></i> &nbsp; &nbsp;verify phone</a> --}}


                           {{-- </li>
                       @endif
                       @if (Route::has('register'))
                           <li class="nav-item">
                               <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#signup"><i style="font-size: 30px;" class="fas fa-user"></i> &nbsp; &nbsp;SignUP</a>
                           </li>
                       @endif
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }}
                           </a>
                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>
                           </div>
                       </li>
                   @endguest

                   @guest  --}}
 
                   @guest
                   @if (Route::has('login'))
                       <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#login">
                               <i style="font-size: 30px;" class="fas fa-user"></i> &nbsp; &nbsp;Login
                           </a>
                       </li>
                   @endif
                   @if (Route::has('register'))
                       @php
                           // Check if the user is already registered with a verified mobile number
                           $alreadyRegistered = App\Models\MobileRegistration::where('mobile_number', session('mobile_number'))
                               ->where('status', 1)
                               ->exists();
                       @endphp
                       @if (!$alreadyRegistered)
                           <li class="nav-item">
                               <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#signup">
                                   <i style="font-size: 30px;" class="fas fa-user"></i> &nbsp; &nbsp;Sign Up
                               </a>
                           </li>
                       @endif
                   @endif
               @else
                   @php
                       // Check if the authenticated user's mobile number is verified
                       $mobileVerified = App\Models\MobileRegistration::where('mobile_number', Auth::user()->mobile_number)
                           ->where('status', 1)
                           ->exists();
                   @endphp
                   @if ($mobileVerified)
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->mobile_number }}
                           </a>
                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('settings') }}">Settings</a>
                               <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                           </div>
                       </li>
                   @else
                       <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#verify-mobile">
                               <i style="font-size: 30px;" class="fas fa-user"></i> &nbsp; &nbsp;Verify Mobile
                           </a>
                       </li>
                   @endif
               @endguest
               
               
               </ul>
           </div>
       </div>
   </nav>
</header>

<!-- Make sure you have this logout form somewhere in your layout -->
{{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   @csrf
</form> --}}
