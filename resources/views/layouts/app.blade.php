<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="keywords" content="HTML5 Template" />
      <meta name="description" content="Consult - Agency & Services HTML5 template" />
      <meta name="author" content="potenzaglobalsolutions.com" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Royal Maids</title>
      <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}" />
      <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&amp;family=Roboto+Slab:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('asset/css/font-awesome/all.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('asset/css/flaticon/flaticon.css') }}" />
      <link rel="stylesheet" href="{{ asset('asset/css/bootstrap/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('asset/css/owl-carousel/owl.carousel.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('asset/css/swiper/swiper.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('asset/css/animate/animate.min.css') }}"/>
      <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup/magnific-popup.css') }}" />
      <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
      <style>
         .fa-map-marker-alt {
         position: relative;
         left: 1rem;
         top: 15px;
         color: #aaa;
         }
         .change {
         position: relative;
         left: -70px;
         top: 14px;
         color: #28a745;
         }
         .pricing-container {
         text-align: center;
         /* background-color: #fff; */
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
         }
         .plans {
         display: flex;
         justify-content: space-around;
         flex-wrap: wrap;
         margin-top: 20px;
         }
         .plan {
         background-color: #fff;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         padding: 20px;
         width: 20rem;
         margin: 10px;
         position: relative;
         }
         .plan-header {
         display: flex;
         justify-content: center;
         /* align-items: center; */
         flex-direction: column;
         background-color: #101920;
         color: #fff;
         border-radius: 10px 10px 0 0;
         padding: 10px 0;
         height: 200px;
         }
         .img-fluids{
         width: 50%;
         margin: auto;
         position: relative;
         top: 80px;
         display: flex;
         justify-content: center;
         }
         .images{
         width: 110%;
         position: absolute;
         margin-left: -35px;
         top: 60px;
         }
         .plan-header h3 {
         margin: 0;
         position: relative;
         /* margin-top: 10px; */
         font-size: x-large;
         text-align: center;
         color: white;
         top: 45px;
         }
         .price {
         font-size: 25px;
         /* position: absolute; */
         z-index: 999;
         text-align: center;
         /* left: 100px; */
         margin-top: 20px;
         }
         .plan-details {
         padding: 20px 0;
         }
         .plan-details p {
         margin: 10px 0;
         font-size: x-small;
         opacity: 40%;
         }
         .sign-up {
         background-color: #333;
         color: #fff;
         border: none;
         border-radius: 5px;
         padding: 10px 20px;
         cursor: pointer;
         font-size: 16px;
         }
         .plan.standard .sign-up {
         background-color: #3B6A80;
         }
         .plan.premium .sign-up {
         background-color: #D18F3F;
         }
         .plan.enterprise .sign-up {
         background-color: #8F4271;
         }
         hr{
         width: 40% !important;
         opacity: 30%;
         }
         h2{
         color: #3B6A80;
         font-weight: 500;
         }
         /* Responsive styles */
         @media (max-width: 768px) {
         .plans {
         flex-direction: column;
         align-items: center;
         }
         .plan {
         width: 80%;
         margin: 10px 0;
         }
         }
         .modal-body {
         position: relative;
         }
         .map-form {
         position: absolute;
         top: 40px;
         /* left: 20px; */
         /* background: rgba(255, 255, 255, 0.8); */
         border-radius: 5px;
         z-index: 1000;
         }
         input::placeholder {
         padding-left: 20px;
         }

         .abut-1 h4 {
            font-weight: bold;
        }

        .career_card{
            box-shadow: 2px 2px 3px 3px #b9b5b5;
        }
        /* input[type="text"] {
    font-size: 24px;
    font-family: monospace;
    letter-spacing: 20px;
    border: none;
    background-color: transparent;
    padding-left: 10px;
} */
      </style>
          <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   </head>
   <body>
      <!--=================================
         Header -->
      @include('include.header')
      <!--=================================
         Header -->
      <!--=================================
         Banner -->
       @yield('content')
      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="verifyphone" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" style="margin-top: 150px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Verify Phone Number</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(Session::has('massage'))
                <p class="alert alert-info">{{ Session::get('massage') }}</p>
                @endif
                    <form action="{{ route('verify-otp') }}" method="POST">
                        @csrf
                        <div class="row p-3">
                            <p>Please Enter the Code that was sent to</p>
                            <div class="col-md-12 px-1">
                                <label>
                                    <h5>+9234567899876</h5>
                                    <input type="text" name="mobile_number" value="+9234567899876">
                                </label>
                                <div class="form-group d-flex" style="column-gap: 20px;">
                                    <input type="text" name="otp[]" class="form-control" style="width: 10%;" maxlength="1" />
                                    <input type="text" name="otp[]" class="form-control" style="width: 10%;" maxlength="1" />
                                    <input type="text" name="otp[]" class="form-control" style="width: 10%;" maxlength="1" />
                                    <input type="text" name="otp[]" class="form-control" style="width: 10%;" maxlength="1" />
                                    <input type="text" name="otp[]" class="form-control" style="width: 10%;" maxlength="1" />
                                    <input type="text" name="otp[]" class="form-control" style="width: 10%;" maxlength="1" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>Resend Code in <b>00:20</b></p>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="btn btn-secondary btn-sm">Whatsapp</a>
                                <a href="#" class="btn btn-sm border-1" style="border: 1px solid rgb(226, 226, 226);">SMS</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-block">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" style="margin-top: 150px;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Sign Up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('otp-register') }}" method="post">
                                @csrf
                                <div class="row p-5">
                                    <div class="col-md-12 px-1">
                                        <label>Your Phone Number</label>
                                        <div class="form-group d-flex">
                                            {{-- <select name="r" class="form-control" style="width: 30%;">
                                                <option value="+1">+1</option>
                                                <option value="+7">+7</option>
                                                <option value="+20">+20</option>
                                                <option value="+92">+92</option>
                                            </select> --}}
                                            <input type="text" class="form-control" name="mobile_number" id="userPhone" placeholder="34567899876">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="sendOTP" class="btn btn-success btn-block">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Confirm Your Location </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form structure -->
                        <div class="map-form">
                            <form>
                                <div class="row g-0 p-5">
                                <div class="col-md-12 px-1">
                                    <div class="form-group">
                                        <span style="position: relative; left:15px; top: 40px;"><i id="searchicon" class="fa fa-search"></i></span>
                                        <input  type="text" class="form-control" onclick="document.getElementById('searchicon').style.visibility='hidden'" id="" placeholder="Search for your location">
                                    </div>
                                </div>
                                <div class="col-md-6 px-1 py-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Street #">
                                    </div>
                                </div>
                                <div class="col-md-6 px-1 py-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Building Name/ Tower Name">
                                    </div>
                                </div>
                                <div class="col-md-12 px-1 py-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Appartment/House/Villa">
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                        <!-- Google Map iframe -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14834447.03716656!2d-101.2578318960687!3d40.24314886392913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd6fbc9de3873%3A0x942d12839118c36c!2sAnaheim%2C%20CA%2092806%2C%20USA!5e0!3m2!1sen!2sin!4v1585741224526!5m2!1sen!2sin" style="border:0; width: 100%; height: 380px;" allowfullscreen=""></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div>
                    </div>
                </div>
            </div>


      @include('include.footer')

      <div id="back-to-top" class="back-to-top">
         <a href="#"><i class="fas fa-long-arrow-alt-up"></i> </a>
      </div>
      <script>
        $(document).ready(function() {
            $('input[type="text"]').on('keyup', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                if ($(this).val().length == 1) {
                    var nextInput = $(this).next('input[type="text"]');
                    if (nextInput.length) {
                        nextInput.focus();
                    }
                }
            });
        });
    </script>
      <script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('asset/js/popper/popper.min.js')}}"></script>
      <script src="{{asset('asset/js/bootstrap/bootstrap.min.js')}}"></script>
      <script src="{{asset('asset/js/jquery.appear.js')}}"></script>
      <script src="{{asset('asset/js/counter/jquery.countTo.js')}}"></script>
      <script src="{{asset('asset/js/owl-carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('asset/js/swiper/swiper.min.js')}}"></script>
      <script src="{{asset('asset/js/swiperanimation/SwiperAnimation.min.js')}}"></script>
      <script src="{{asset('asset/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('asset/js/shuffle/shuffle.min.js')}}"></script>
      <script src="{{asset('asset/js/easy-pie-chart/easy-pie-chart.js')}}"></script>
      <script src="{{asset('asset/js/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{asset('asset/js/apexcharts/charts.js')}}"></script>
      <script src="{{asset('asset/js/custom.js')}}"></script>
     
 
      <script>
        // $(document).ready(function() {
        //     $('#sendOTP').on('click', function(e) {
        //         var number = $('#userPhone').val();



        //         $.ajax({
        //             type:'POST',
        //             url:'/otp-register',
        //             data: number,
        //             success: function(data) {
        //                 console.log(data);
        //                 $('#signup').modal('hide').data('bs.modal', null);
        //                 $('#verifyphone').modal('show').data('bs.modal', null);
        //             },
        //             error: function(xhr, status, error) {
        //                 console.log('Error: ' + error);
        //             }
        //         });
        //     });
        // });

        $(document).ready(function() {
    $('#signup form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var form = $(this);
        $.ajax({
            url: form.attr('action'), // The action URL from the form
            method: form.attr('method'), // The method (POST)
            data: form.serialize(), // Serialize form data
            success: function(response) {
                // Assuming the OTP is sent successfully, close the signup modal
                $('#signup').modal('hide');

                // Open the verify phone modal
                $('#verifyphone').modal('show');
                
                // Optionally, populate the phone number in the verify modal
                $('input[name="mobile_number"]').val(form.find('input[name="mobile_number"]').val());
            },
            error: function(response) {
                // Handle any errors
                alert('There was an error processing your request.');
            }
        });
    });
});

    </script>
    

   </body>
</html>
