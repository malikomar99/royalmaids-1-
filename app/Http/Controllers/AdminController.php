<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrier;
use App\Models\Contact;
class AdminController extends Controller
{
    public function admin(){
        return view ('admin.dashboard');
    }
    public function contactus(){
        $contact=Contact::get();
        return view ('admin.contact-index',compact('contact'));
    }
    public function contact(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'massage' => 'required',
           
           
            
        ]);
        
        $contact = new Contact();
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->massage=$request->massage;
        $contact->save();
        return redirect()->back()->with('success','contact add successfully');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
           
            'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            
        ]);
        
        $carrier = new carrier();
        $carrier->name=$request->name;
        $carrier->phone=$request->phone;
        $carrier->email=$request->email;
        if ($file = request()->hasFile('image')) {
            $file = request()->file('image');
            $id_proof = time() . '.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('carrier/');
            $file->move($path, $id_proof);
        
            $carrier->image = url('carrier/' . $id_proof);
        }
        $carrier->save();
        return redirect()->back()->with('success','carrier add successfully');
    }
    public function carrier(){
        $carrier=Carrier::get();
        return view ('admin.carrier',compact('carrier'));
    }
}
