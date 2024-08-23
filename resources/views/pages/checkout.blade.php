@extends('layouts.app')
@section('content')
<style>
  .small-box {
    width: 30px;
    /* Width of the input box */
    height: 30px;
    /* Height of the input box */
    padding: 0;
    /* Remove padding */
    text-align: center;
    /* Center the text inside the box */
    font-size: 16px;
    /* Adjust font size */
    border: 1px solid #007bff;
    /* Border color */
    border-radius: 5px;
    /* Rounded corners */
    box-sizing: border-box;
    /* Ensure padding doesn't increase the size */
  }

  body {
    font-family: Arial, sans-serif;
  }

  .grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    width: 150px !important;
    height: 50px !important;
  }

  .grid-item {
    position: relative;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
  }

  .grid-item input[type="radio"] {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 100%;
    width: 100%;
    margin: 0;
  }

  .grid-item label {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #f85a14;
    padding: 20px;
    font-size: 20px;
    transition: background-color 0.3s, color 0.3s;
    background-color: #fff;
    color: #f85a14;
    width: 100%;
    height: 100%;
    border-radius: 10px;
  }

  .grid-item input[type="radio"]:checked+label {
    background-color: #f85a14;
    color: #fff;
  }

  .grid-item input[type="radio"]:checked+label:hover {
    background-color: #f85a14;
    color: #fff;
  }

  /* Background color change when any radio is checked */
  .grid-item input[type="radio"]:checked~body {
    background-color: #e0e0e0;
  }

  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
    /* Could be more or less, depending on screen size */
  }

  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  .form-card {
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .radio-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .radio-label {
    display: flex;
    align-items: center;
    cursor: pointer;
    font-size: 16px;
  }

  .radio-input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }

  .radio-custom {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #fefefe;
    border: 2px solid #ddd;
    border-radius: 50%;
    margin-right: 10px;
    transition: background-color 0.3s, border-color 0.3s;
  }

  .radio-input:checked+.radio-custom {
    background-color: #067236;
    border-color: #067236;
  }

  .radio-custom:after {
    content: "";
    position: absolute;
    display: none;
  }

  .radio-input:checked+.radio-custom:after {
    display: block;
    top: 50%;
    left: 50%;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: white;
    transform: translate(-50%, -50%);
  }

  .select-btn {
    background-color: #067236;
    color: #fffbd9;
    border: none;
    cursor: pointer;
    border-radius: 7px;
    width: 150px;
    height: 40px;
    font-size: 16px;
  }

  .select-btn {
    cursor: pointer !important;
  }
  .selected-card {
    background-color: #e0f7fa !important; /* Light cyan background color for selected card */
  }
</style>
<div class="inner-header">
  <div class="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb-list list-unstyled d-flex">
            <li class="breadcrumb-item"><a href><i class="fa fas-setting mr-1"></i></a></li>
            <li class="breadcrumb-item active"><span>Settings / Personal
                Details</span></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
Inner Header -->

<div class="container">
  <h4 style="color: #067236;font-weight: bold;font-size: 17px;">General Home
    Cleaning</h4>
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 col-12 p-2">
      <form action="{{route("checkoutdata")}}" method="post" id="payment-form">
        @csrf
        <div class="p-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       <div class="p-2" style="display: flex; border: 1px solid rgb(172, 172, 172); width: 100%; border-radius: 5px;">
    <div style="flex-grow: 1; display: flex; align-items: center;">
        <i class='fa fa-location-plus'></i>
        <input type="text" id="location-input" name="address" placeholder="Business Bay, Dubai, UAE" style="flex-grow: 1; border: none; padding: 0 8px; box-sizing: border-box;" readonly />
    </div>
    <div class="ml-auto" style="display: flex; align-items: center; float:right">
        <button type="button" id="change-location" style="color: #067236; font-weight: bold; margin: 0;" class="btn">Change</button>
    </div>
</div>

<!-- Hidden div for the map -->
<div id="map-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 9999;">
    <div style="width: 80%; height: 80%; margin: 5% auto; background: white; position: relative; z-index: 10000;">
        <div id="map" style="width: 100%; height: 100%;"></div>
        <button type="button" class="btn btn-secondary" id="select-location" style="position: absolute; bottom: 10px; right: 60px;">Select Location</button>
    </div>
</div> 
 {{-- @include('include.mapapi') --}}

        <div>
    <h6 class="mt-2" style="font-weight: bold; padding-left: 20px;">How many hours do you need your professional to stay?</h6>
    <div class="counting_btn" style="display: flex; column-gap:20px;">
        <div class="grid-container d-flex">
            @for ($i = 1; $i <= 9; $i++)
            <div class="grid-item">
                <input type="radio" class="small-box" name="hour" id="hour{{ $i }}" value="{{ $i }}">
                <label for="hour{{ $i }}">{{ $i }}</label>
            </div>
            @endfor
        </div>
    </div>
</div>
        <div>
          <h6 style="font-weight: bold;">How many professionals do you need?</h6>
          <br>
         <div class="counting_btn" style="display: flex; column-gap:20px;">
    <div class="grid-container d-flex">
        @for ($i = 1; $i <= 7; $i++)
        <div class="grid-item">
            <input type="radio" class="small-box" name="Professional" id="Professional{{ $i }}" value="{{ $i }}">
            <label for="Professional{{ $i }}">{{ $i }}</label>
        </div>
        @endfor
    </div>
</div>
      <div>
    <h5 style="font-weight: bold; padding-left: 20px;">Need cleaning materials?</h5>
    <br>
    <div class="cleaning_buttons">
        @php
        $materials = [
            'Yes, Please' => 'Yes, Please',
            'No, I Have Them' => 'No, I Have Them',
            'Only Vacuum' => 'Only Vacuum'
        ];
        @endphp
        <div class="grid-container d-flex">
            @foreach ($materials as $value => $label)
            <div class="grid-item text-nowrap">
                <input type="radio" class="small-box" name="material" id="material{{ $loop->index + 1 }}" value="{{ $value }}">
                <label for="material{{ $loop->index + 1 }}">{{ $label }}</label>
            </div>
            @endforeach
        </div>
    </div>
</div>
    </div>
  </div>
  <style>
    .owl-dots {
      display: none !important;
    }
  </style>
<div class="mt-5 cards p-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 5px;" >
    <h4 class="text-success">Popular Add-ons</h4>
    <div class="mt-4 mt-sm-5">
      <div class="card">
        <div class="owl-carousel" data-nav-arrow="false" data-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="30" data-autoheight="true" data-autospeed="6000">
          @foreach ($addonServices as $add)
          <div class="item">
            <div class="card text-center">
              <div class="card-img">
                <img src="{{$add->image1}}" style="width: 100% !important; height: 150px;" alt="Service Image">
              </div>
              <div class="card-body">
                <h6>{{$add->heading1}}</h6>
                <p>{{$add->addonservices1}}</p>
                <p>AED {{$add->price1}}</p>
                <button type="button" data-id="{{$add->id}}" data-price="{{$add->price1}}" data-heading="{{$add->heading1}}" class="add-service-btn" style="background-color: #067236; color: #fffbd9; border: none; cursor: pointer;">
                  Add+
                </button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- Hidden input to store selected services -->
      <input type="hidden" id="selectedServices" name="selected_services" value="">
    </div>
    <!-- Include jQuery if not already included -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function() {
        let selectedServices = [];

        function addService(button) {
          // Extract data attributes from the clicked button
          let serviceId = $(button).data('id');
          let servicePrice = $(button).data('price');
          let serviceHeading = $(button).data('heading');

          // Add the service details to the selectedServices array
          selectedServices.push({
            id: serviceId,
            price: servicePrice,
            heading: serviceHeading
          });

          // Update the hidden input with the JSON string of selected services
          $('#selectedServices').val(JSON.stringify(selectedServices));

          // Change background color of the card
          $(button).closest('.card').css('background-color', '#d4edda');

          // Show success alert
          alert('Popular Add-ons added successfully');

          console.log("Service Added:", {
            id: serviceId,
            price: servicePrice,
            heading: serviceHeading
          });
          console.log("Selected Services Array:", selectedServices);
        }

        // Attach click event listener to buttons with the class 'add-service-btn'
        $('.add-service-btn').on('click', function() {
          addService(this);
        });
        // Initialize the Owl Carousel
        $(".owl-carousel").owlCarousel();
      });
    </script>
 
 
    
    

 
  </div>


  <div class="row mt-5 p-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 5px;">
    <h4 style="color: #067236; ">Date & Time</h4>
    <div class="col-lg-12">
      <div >
        <div style="border-radius: 5px; background-color: #fffbd9; border: 1px solid #067236; border-radius: 5px;" class="p-3">
         <div class="d-flex justify-content-between align-items-center">
    <div>
        <h3 class="ms-3">Frequency</h3>
    </div>
    <div class="ms-auto">
        <button type="button" style="color: #067236; text-decoration: underline;" id="changeButton">Change</button>
    </div>
</div>

<!-- The Modal -->
<div id="frequencyModal" class="modal">
    <div class="modal-content">
        <div class="d-flex justify-content-between mb-3">
            <h3>Choose your frequency</h3>
            <span class="close">&times;</span>
        </div>
        <div class="radio-group">
            <div class="form-card">
                <label class="radio-label d-flex justify-content-between">
                    Weekly
                    <input type="radio" id="weekly" name="frequency" value="Weekly" class="radio-input">
                    <span class="radio-custom"></span>
                </label>
            </div>
            <div class="form-card">
                <label class="radio-label d-flex justify-content-between">
                    Every 2 Weeks
                    <input type="radio" id="every2Weeks" name="frequency" value="Every 2 Weeks" class="radio-input">
                    <span class="radio-custom"></span>
                </label>
            </div>
            <div class="form-card mb-3">
                <label class="radio-label d-flex justify-content-between">
                    One Time
                    <input type="radio" id="oneTime" name="frequency" value="One Time" class="radio-input">
                    <span class="radio-custom"></span>
                </label>
            </div>
        </div>
        <button type="button" class="btn btn-success btn-block" id="selectFrequency" style="cursor: pointer !important">Save</button>
    </div>
</div>

<p id="selectedFrequency" style="background-color: #067236; color: #fffbd9; border: none; cursor: pointer; border-radius: 7px; max-width: 250px; height: 40px;" class="ms-2 d-flex justify-content-center align-items-center text">One Time Service</p>

<!--<div class="d-flex justify-content-between">-->
<!--    <div>-->
<!--        <p class="ms-2">Frequency</p>-->
<!--    </div>-->
<!--    <div class="ms-auto">-->
<!--        <p id="frequencyDisplay" style="font-weight: bold; padding-right: 10px;">One Time</p>-->
<!--    </div>-->
<!--</div>-->

<script>
    const modal = document.getElementById("frequencyModal");
    const btn = document.getElementById("changeButton");
    const span = document.getElementsByClassName("close")[0];
    const selectButton = document.getElementById("selectFrequency");
    const selectedFrequency = document.getElementById("selectedFrequency");
    const frequencyDisplay = document.getElementById("frequencyDisplay");

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    selectButton.onclick = function() {
        const radios = document.getElementsByName('frequency');
        let selectedValue;
        for (const radio of radios) {
            if (radio.checked) {
                selectedValue = radio.value;
                break;
            }
        }
        
        // Update the frequency in both the p tags
        selectedFrequency.textContent = ` ${selectedValue || 'One Time Service'}`;
        frequencyDisplay.textContent = selectedValue || 'One Time';
        
        modal.style.display = "none";
    }
</script>


        </div>

        <div class="p-3">
          <h6 style="font-weight: bold;">Which professional do
            you prefer?</h6>
          <div class="owl-carousel" data-nav-arrow="false" data-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="30" data-autoheight="true" data-autospeed="6000">
            @foreach ($expert as $exp)
            <div class="item">
              <div class="team team-style-1">
                <div class="team-img">
                  <img src="{{ $exp->image }}" height="250px" width="99%" alt="">
                </div>
                <div class="team-info text-center" style="background-image: url('images/cardcarve.png'); background-repeat: no-repeat; width: 100%; background-size: cover; height: 200px; position: relative; top: -55px;">
                  <div style="position: relative; top: 60px;">
                    <h6 class="team-title"><a href="#">{{ $exp->name }}</a></h6>
                    <span class="team-designation">{{ $exp->profession }}</span>
                    <div>
                      <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                      <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                      <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                      <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                      <span><i style="color: #ffe715;" class="fas fa-star"></i></span>
                    </div>
                    <p>16 reviews</p>
                    <button type="button" style="background-color: #067236; color: #fffbd9; border: none; cursor: pointer;" onclick="addExpert({{ $exp->id }}, '{{ $exp->name }}', '{{ $exp->profession }}')">
                      Add+
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <!-- Hidden input to store selected experts -->
          <input type="hidden" id="selectedExperts" name="selected_experts" value="">
          <script>
            $(document).ready(function() {
                    let selectedExperts = [];

                    window.addExpert = function(id, name, profession) {
                        console.log("Add button clicked for expert:", name);

                        // Check if the expert is already in the list
                        const expertExists = selectedExperts.find(expert => expert.id === id);

                        if (!expertExists) {
                        // Add the expert details to the selectedExperts array
                        selectedExperts.push({
                            id: id,
                            name: name,
                            profession: profession
                        });

                        // Update the hidden input with the JSON string of selected experts
                        $('#selectedExperts').val(JSON.stringify(selectedExperts));
                        // Change the background color of the selected card
                        $(`button[onclick="addExpert(${id}, '${name}', '${profession}')"]`).closest('.team-info').addClass('selected-card');
                        // Show success alert
                        alert('Popular Add-ons added successfully');
                        console.log("Selected Experts:", selectedExperts); // Log the updated array
                        } else {
                        console.log("Expert already added.");
                        }
                    };
                    });
          </script>
          <h6 style="font-weight: bold;">When would you like your service?</h6>
          <div class="grid-container d-flex">
            @foreach(['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] as $index => $day)
            <div class="grid-item">
              <input type="radio" class="small-box" name="select_day" id="select_day{{ $index }}" value="{{ $index + 1 }}">
              <label for="select_day{{ $index }}">{{ $day }}</label>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    @foreach ($services as $services)
      
   
    <div class="ms-auto">
      {{-- <p style="font-weight: bold;padding-right: 10px;">{{$services->title}}</p> --}}
      <input type="hidden" name="title" value="{{$services->title}}">
    </div>
    <div class="ms-auto">
      {{-- <p style="font-weight: bold;padding-right: 10px;">{{$services->title2}}</p> --}}
      <input type="hidden" name="title2" value="{{$services->title2}}">
    </div>
    @endforeach
  </div>
  <div class="row mt-3 p-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 5px;" >
  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <h4 class="p-3" style="color: #067236;">Date & Time</h4>
    <div>
        <div>
            <h6 class="mt-2" style="font-weight: bold; padding-left: 20px;">Date</h6>
            <div class="counting_btn" style="display: flex; column-gap:20px;">
                <input type="date" name="date" id="date-input" class="form-control">
            </div>
        </div>
        <br>
        <div>
            <h6 class="mt-2" style="font-weight: bold; padding-left: 20px;">Time</h6>
            <div class="counting_btn" style="display: flex; column-gap:20px;">
                <input type="time" name="time" id="time-input" class="form-control">
            </div>
        </div> 
        <br>
        <h6 style="font-weight: bold;" class="ms-2">Any instructions or special requirements?</h6>
        <div class="card" style="border: 2px solid #067236;height: 70px;">
          <p style="color: #e5e6e5;">
            <textarea style="height: 66px; width: 100%;" name="instruction"> Keys under Door Matt.</textarea>
          </p>
        </div>
        <br>
      </div>
      <br>
      <input type="hidden" id="subtotal" name="subtotal" value="0">
<input type="hidden" id="gst" name="gst" value="0">
<input type="hidden" id="total" name="total" value="0">
      <div class="text-center">
        <!-- Button trigger modal -->
        <button type="submit" class="btn btn-success" >
          Add to Pay
        </button>
        </form>
      </div>
      <br>
    </div>
  </div>
</div>
<div class="col-lg-5 col-md-5 col-sm-12 col-12">
  <div class="p-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 5px;">
    <div>
      <h6 style="font-weight: bold;" class="ms-2">Booking Details</h6>
    </div>
   <div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">Address</p>
    </div>
    <div class="ms-auto">
        <p id="location-display" style="font-weight: bold; padding-left: 10px;"></p>
    </div>
</div>

    <br>
<!--<p id="selectedFrequency" style="background-color: #067236; color: #fffbd9; border: none; cursor: pointer; border-radius: 7px; max-width: 250px; height: 40px;" class="ms-2 d-flex justify-content-center align-items-center text">One Time Service</p>-->

<div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">Frequency</p>
    </div>
    <div class="ms-auto">
        <p id="frequencyDisplay" style="font-weight: bold; padding-right: 10px;">One Time</p>
    </div>
</div>
    <br>
    <div class=" d-flex justify-content-between">
      <div>
        <p class="ms-2">Service</p>
      </div>
      <div class="ms-auto">
        <p style="font-weight: bold;padding-right: 10px;">{{$services->title}}</p>
        {{-- <input type="text" name="title" value="{{$services->title}}"> --}}
      </div>
    </div>
    <br>
    <div class="d-flex justify-content-between">
      <div>
        <p class="ms-2">Service Details</p>
      </div>
      <div class="ms-auto">
        <p style="font-weight: bold;padding-right: 10px;">{{$services->title2}}</p>
        {{-- <input type="text" name="title2" value="{{$services->title2}}"> --}}
      </div>
    </div>

    <br>

  <div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">Duration</p>
    </div>
    <div class="ms-auto">
        <p style="font-weight: bold; padding-right: 10px;"><span id="selected-hour"></span></p>
    </div>
</div>
    <!--<div class="d-flex justify-content-between mb-3">-->
    <!--  <div>-->
    <!--    <p class="ms-2">Add-On Service</p>-->
    <!--  </div>-->
    <!--  <div class="ms-auto">-->
    <!--    <p id="add-on-service-display" style="font-weight: bold; padding-right: 10px;"></p>-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="d-flex justify-content-between">-->
    <!--  <div>-->
    <!--    <p class="ms-2">Preferred professional</p>-->
    <!--  </div>-->
    <!--</div>-->
    <br>
      <div class="d-flex justify-content-between">
            <div>
                <p class="ms-2">Date & Start Time</p>
            </div>
            <div class="ms-auto">
                <p id="date-time-display" style="font-weight: bold; padding-right: 10px;">12 Apr 2024, 17:00</p>
            </div>
        </div>
    <!--</div>-->
<!--</div>-->
    <br>
   <div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">Preferred professional</p>
    </div>
    <div class="ms-auto">
        <p style="font-weight: bold; padding-right: 10px;"><span id="selected-professional"></span></p>
    </div>
</div>
    <br>
   <div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">Material</p>
    </div>
    <div class="ms-auto">
        <p id="selected-material" style="font-weight: bold; padding-right: 10px;"></p>
    </div>
</div>
    <!--<div class="d-flex justify-content-between">-->
    <!--  <div>-->
    <!--    <p class="ms-2">Select Day</p>-->
    <!--  </div>-->
    <!--  <div class="ms-auto">-->
    <!--    <p id="selected-day" style="font-weight: bold; padding-right: 10px;"></p>-->
    <!--    {{-- <input type="text" name="select_day" id="select-day-input"> --}}-->
    <!--  </div>-->
    <!--</div>-->
    <div class="card mt-4 p-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 5px;">
      <h6>Payment Summary</h6>
    <!-- HTML for displaying the prices -->
<div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">Subtotal</p>
    </div>
    <div class="ms-auto">
        <p id="subtotal-price" style="font-weight: bold;">AED 0.00</p>
    </div>
</div>

<div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">GST</p>
    </div>
    <div class="ms-auto">
        <p id="gst-price" style="font-weight: bold;">AED 0.00</p>
    </div>
</div>

<div class="d-flex justify-content-between">
    <div>
        <p class="ms-2">Total</p>
    </div>
    <div class="ms-auto">
        <p id="total-price" style="font-weight: bold;">AED 0.00</p>
    </div>
</div>

<!-- Hidden inputs to store calculated values -->


<!-- JavaScript to calculate prices -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const pricePerService = {{$services->price}};
        let selectedHours = 1;
        let selectedProfessionals = 1;

        function calculateSubtotal() {
            return pricePerService * selectedHours * selectedProfessionals;
        }

        function calculateGST(subtotal) {
            return subtotal * 0.05; // Assuming 5% GST
        }

        function updatePrices() {
            const subtotal = calculateSubtotal();
            const gst = calculateGST(subtotal);
            const total = subtotal + gst;

            document.getElementById('subtotal-price').innerText = `AED ${subtotal.toFixed(2)}`;
            document.getElementById('gst-price').innerText = `AED ${gst.toFixed(2)}`;
            document.getElementById('total-price').innerText = `AED ${total.toFixed(2)}`;

            document.getElementById('subtotal').value = subtotal.toFixed(2);
            document.getElementById('gst').value = gst.toFixed(2);
            document.getElementById('total').value = total.toFixed(2);
        }
 


        // Event listeners for hour and professional selection
        document.querySelectorAll('input[name="hour"]').forEach(function (radio) {
            radio.addEventListener('change', function () {
                selectedHours = parseInt(this.value);
                updatePrices();
            });
        });

        document.querySelectorAll('input[name="Professional"]').forEach(function (radio) {
            radio.addEventListener('change', function () {
                selectedProfessionals = parseInt(this.value);
                updatePrices();
            });
        });

        // Initialize with default values
        updatePrices();
    });
    
     const radioButtons = document.querySelectorAll('input[name="hour"]');
    const selectedHour = document.getElementById('selected-hour');

    // Add event listener for each radio button
    radioButtons.forEach(button => {
        button.addEventListener('change', () => {
            // Update the selected hour in the span
            selectedHour.textContent = button.value;
        });
    });
    
      document.querySelectorAll('input[name="Professional"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            // Update the "Preferred professional" span with the selected value
            document.getElementById('selected-professional').textContent = this.value;
        });
    });
    
    document.querySelectorAll('input[name="material"]').forEach(function(element) {
    element.addEventListener('change', function() {
        document.getElementById('selected-material').textContent = this.value;
    });
});

document.getElementById('change-location').addEventListener('click', function() {
        document.getElementById('map-modal').style.display = 'block';
    });

    document.getElementById('select-location').addEventListener('click', function() {
        // Assume we get the selected location from the map
        const selectedLocation = 'Selected Address, City, Country';
        document.getElementById('location-input').value = selectedLocation;
        document.getElementById('location-display').textContent = selectedLocation;
        document.getElementById('map-modal').style.display = 'none';
    });
    
      const dateInput = document.getElementById('date-input');
    const timeInput = document.getElementById('time-input');
    const dateTimeDisplay = document.getElementById('date-time-display');

    function updateDateTimeDisplay() {
        const dateValue = dateInput.value;
        const timeValue = timeInput.value;
        
        if (dateValue && timeValue) {
            // Create a Date object from the date and time values
            const date = new Date(dateValue + 'T' + timeValue);
            
            // Format the date and time (e.g., '12 Apr 2024, 17:00')
            const options = { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' };
            const formattedDate = date.toLocaleDateString('en-GB', options);
            
            // Update the <p> tag with the formatted date and time
            dateTimeDisplay.textContent = formattedDate;
        } else {
            // Reset the display if either input is empty
            dateTimeDisplay.textContent = 'Please select date and time';
        }
    }

    // Add event listeners to update the display when inputs change
    dateInput.addEventListener('change', updateDateTimeDisplay);
    timeInput.addEventListener('change', updateDateTimeDisplay);
</script>



    </div>
  </div>
</div>
</div>
</div>
@endsection
