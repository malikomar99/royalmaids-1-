<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Expert;
use App\Models\Package;
use App\Models\Checkout;
use App\Models\Addonservice;
class PageController extends Controller
{
    public function home()
    {
        $services = Services::take(6)->get();
        $expert =Expert::get();
       $standerd =Package::where('name', 'standard')->get();
       $Premium =Package::where('name', 'Premium')->get();
       $Enterprise =Package::where('name', 'Enterprise')->get();
        return view('home',compact('services','expert','Enterprise','Premium','standerd'));
    }
    public function aboutus()
    {
        return view('pages.about_us');
    }

    public function address()
    {
        return view('pages.address');
    }

    public function canceling()
    {
        return view('pages.cancel_booking');
    }

    public function booking()
    {
        return view('pages.booking');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function checkout($id)
    {
     $expert=Expert::get();
   $services = Services::where('id', $id)->get();
      $addonServices = Addonservice::where('service_id', $id)->get();
        return view('pages.checkout',compact('services','addonServices','expert'));
    }

    public function checkout2($id)
    {
         $checkout = Checkout::find($id);

        return view('pages.checkout2', compact('checkout'));
    }

    public function cod($id)
    {
        $checkout = Checkout::find($id);
        return view('pages.cashondelivery',compact('checkout'));
    }
    public function figma()
    {
        return view('pages.figma');
    }

    public function incoming()
    {
        return view('pages.incoming');
    }

    public function nineteen()
    {
        return view('nineteen');
    }

    public function ordercancel()
    {
        return view('ordercancel');
    }

    public function orderplaced()
    {
        return view('orderplaced');
    }

    public function payment()
    {
        return view('payment');
    }

 
    public function contact()
    {
        return view('pages.contact');
    }


    public function service2()
    {
        return view('service2');
    }

    public function termsAndConditions()
    {
        return view('termes_and_conditions');
    }
  
}
