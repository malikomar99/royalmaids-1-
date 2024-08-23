<?php
App\Http\Controllers;

use App\Models\MobileRegistration;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MobileRegistrationController extends Controller
{
    public function register(Request $request)
    {
        try {
            $sid = env('TWILIO_SID');
            $token = env('TWILIO_TOKEN');
            $twilioFrom = env('TWILIO_FROM');
            $mobileNumber = $request->input('mobile_number');
            $otp = mt_rand(100000, 999999); // Generate a 6-digit OTP

            // Send OTP via SMS using Twilio
            $twilio = new Client($sid, $token);
            $twilio->messages->create($mobileNumber, [
                'from' => $twilioFrom,
                'body' => 'Your OTP is: ' . $otp,
            ]);

            // Check if the mobile number already exists
            $registration = MobileRegistration::where('mobile_number', $mobileNumber)->first();

            if ($registration) {
                // If the number already exists, update the OTP
                $registration->otp = $otp;
                $registration->save();
            } else {
                // Otherwise, create a new registration entry
                $registration = new MobileRegistration();
                $registration->mobile_number = $mobileNumber;
                $registration->otp = $otp;
                $registration->save();
            }

            return redirect()->back()->with('message', 'OTP sent to your mobile.');
        } catch (\Exception $e) {
            Log::error('Error in OTP registration: ' . $e->getMessage());
            return redirect()->back()->with('message', 'Failed to send OTP');
        }
    }

    public function verifyOtp(Request $request)
    {
        // Retrieve mobile number and OTP from the request
        $mobileNumber = $request->input('mobile_number');
        $otp = implode('', $request->input('otp'));
    
        // Find the registration entry by mobile number
        $registration = MobileRegistration::where('mobile_number', $mobileNumber)->first();
    
        // Debugging: Log the retrieved OTP and the submitted OTP
        \Log::info('Stored OTP: ' . ($registration ? $registration->otp : 'No registration found'));
        \Log::info('Submitted OTP: ' . $otp);
    
        // Check if registration exists and the OTP matches
        if ($registration && trim($registration->otp) === trim($otp)) {
            // Update status to 1
            $registration->update(['status' => 1]);
    
            // Store the id, mobile_number, and status in the session
            session([
                'id' => $registration->id,
                'mobile_number' => $registration->mobile_number,
                'status' => $registration->status
            ]);
    
            // Log in the user after registration
            Auth::login($registration); // Assuming you have a User model associated
    
            return redirect()->route("home")->with('message', "User registered successfully");
        } else {
            return redirect()->back()->with('message', 'Invalid OTP');
        }
    }
    public function logout()
    {
        Auth::logout();  // Log the user out
        Session::flush();  // Clear the session

        return redirect('/')->with('message', 'You have been logged out successfully.');
    }
}