<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Order;

use Stripe\Stripe;
use Stripe\Charge;
class CheckoutController extends Controller
{
    public function checkoutdata(Request $request)
    {
        // return $request;

        \Log::info('Request Data:', $request->all());

        if (!$request->has('address')) {
            return response()->json(['error' => 'Address is required'], 400);
        }

        $checkout = new Checkout();
        $checkout->address = $request->address;
        $checkout->title = $request->title;
        $checkout->title2 = $request->title2;
       $checkout->hour = $request->hour;

        $services = json_decode($request->selected_services, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Invalid selected_services data'], 400);
        }

        $selected_experts = json_decode($request->selected_experts, true);
        $checkout->expert_details = json_encode($selected_experts);
        $checkout->add_on_services = json_encode($services);

        $checkout->material = $request->material;
       $checkout->frequency = $request->frequency;
        $checkout->select_day = $request->select_day;
       $checkout->Professional = $request->Professional;
        $checkout->date = $request->date;
        $checkout->time = $request->time;
        $checkout->instruction = $request->instruction;

        // Store subtotal, gst, and total in the database
        $checkout->subtotal = $request->subtotal;
        $checkout->gst = $request->gst;
        $checkout->total = $request->total;

       $checkout->save();

        return redirect()->route('checkout2', $checkout->id);
    }

    public function payment(Request $request){

        // $input=$request->input();
        // dd($input);
                        // Set your secret key. Remember to switch to your live secret key in production.
                // See your keys here: https://dashboard.stripe.com/apikeys
                \Stripe\Stripe::setApiKey(env('SK_STRIPE'));

                // Token is created using Stripe Checkout or Elements!
                // Get the payment token ID submitted by the form:
                $token = $_POST['stripeToken'];
                $charge = \Stripe\Charge::create([
                'amount' =>$request->input('total') * 100,
                'currency' => 'AED',
                'description' => 'New Order Received Successfully',
                'source' => $request->stripeToken,
                ]);
         
                $order= new order;
                $order->checkout_id	 = $request->id;
                $order->subtotal	 = $request->subtotal;
                $order->address	 = $request->address;
                $order->address	 = $request->address;
                $order->gst	 = $request->gst;
                $order->total	 = $request->total;
                $order->charge_id = $charge->id;
                $order->trx_id = $charge->balance_transaction;
                $order->payment_status = $charge->status;
                $order->payment_type = ($request->payment_type == "card") ? "card" : "cod";
                $order->save();

              return redirect('/')->with('massage',"Order place successfully");
    }

    public function cod(Request $request){
        $order= new Order;
        $order->checkout_id	 = $request->id;
        $order->subtotal	 = $request->subtotal;
        $order->address	 = $request->address;
        $order->address	 = $request->address;
        $order->gst	 = $request->gst;
        $order->total	 = $request->total;
        $order->charge_id = $request->id;
        $order->trx_id = $request->balance_transaction;
        $order->payment_status = $request->payment_status;
        $order->payment_type = ($request->payment_type == "card") ? "card" : "cod";
        $order->save();

      return redirect('/')->with('massage',"Order place successfully");
    }




//     public function payment(Request $request)
// {
//     // Set your secret key
//     Stripe::setApiKey(config('services.stripe.secret'));

//     // Get the payment token ID submitted by the form:
//     $token = $request->input('stripeToken');

//     try {
//         $charge = Charge::create([
//             'amount' => 1 * 100, // Amount in cents
//             'currency' => 'usd',
//             'description' => 'royal maid',
//             'source' => $token,
//         ]);

//         // Handle the response, e.g., redirect or return success message
//         return response()->json($charge);
//     } catch (\Exception $e) {
//         // Handle error
//         return response()->json(['error' => $e->getMessage()], 500);
//     }
// }
}
