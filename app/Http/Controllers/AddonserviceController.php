<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addonservice;
use App\Models\Services;

class AddonserviceController extends Controller
{
        
        public function index()
        {
          $services=Addonservice::get();
         return view('admin.addonservices.index',compact('services'));
        }
      
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $service=Services::get();
            return view ('admin.addonservices.create',compact('service'));
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $validated = $request->validate([
                'service_id'=>'required',
                'heading1' => 'required',
                'price1' => 'required',
                'index' => 'required',
                'addonservices1' => 'required',
                'image1' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

             
                
            ]);
            $services = new Addonservice();
          
            $services->service_id=$request->service_id;
            $services->index=$request->index;
            
            $services->heading1=$request->heading1;

            $services->price1=$request->price1;

            $services->addonservices1=$request->addonservices1;

            if ($request->hasFile('image1')) {
                $file = $request->file('image1');
                $filename = time() . '3.' . strtolower($file->getClientOriginalExtension());
                $path = public_path('services/');
                $file->move($path, $filename);
                $services->image1 = url('services/' . $filename);
            }
        
           
            // Save the updated service
            $services->save();
             return redirect()->back()->with('success','services add successfully');
        }
    
        /**
         * Display the specified resource.
         */
        // public function search(Request $request)
        // {
        //     $search = $request->get('search');
            
        //     if($search != ''){
        //         $services = services::where('slug', 'like', '%' . $search . '%')->paginate(2);
        //         $services->appends(['search' => $search]);
        
        //         if(count($services) > 0){
        //             return view('services-index', ['services' => $services]);
        //         }
        
        //         return back()->with('error', 'No results found');
        //     }
        
        //     return back()->with('error', 'Please enter a search term');
        // }
        public function show(string $id)
        {
            //
        }
    
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
           $services=Addonservice::find($id);
         
           return view('admin.addonservices.edit',compact('services'));
        }
       
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $services=Addonservice::find($id);
            $services->service_id=$request->service_id;
            $services->index=$request->index;
            $services->heading1=$request->heading1;
            $services->price1=$request->price1;


            if ($request->hasFile('image1')) {
                $file = $request->file('image1');
                $filename = time() . '3.' . strtolower($file->getClientOriginalExtension());
                $path = public_path('services/');
                $file->move($path, $filename);
                $services->image1 = url('services/' . $filename);
            }
        
           
            // Save the updated service
            $services->save();
            return redirect()->route('admin.dashboard')->with('success','services Update successfully');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function delete(string $id)
        {
            Services::find($id)->delete();
            return redirect()->back()->with('Success','services deleted successfully');
        }
      
       
    }
    

