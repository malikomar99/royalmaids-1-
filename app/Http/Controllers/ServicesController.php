<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Addonservice;
use App\Models\Gallery;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $services=Services::get();
     return view('admin.services.index',compact('services'));
    }
    public function loadMore(Request $request)
{
    $skip = $request->query('skip', 0);
    $services = Services::skip($skip)->take(4)->get();

    return response()->json($services);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view ('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'title2' => 'required',
            'details' => 'required',
            'services' => 'required',
            'details2' => 'required',
            'price' => 'required',
            'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'imageicons' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
           
            
        ]);
        $services = new Services();
        $services->title=$request->title;
        $services->title2=$request->title2;
        $services->details=$request->details;
        $services->services=$request->services;
        $services->details2=$request->details2;
        $services->price=$request->price;
      
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '1.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('services/');
            $file->move($path, $filename);
            $services->image = url('services/' . $filename);
        }
    
        if ($request->hasFile('imageicons')) {
            $file = $request->file('imageicons');
            $filename = time() . '2.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('services/');
            $file->move($path, $filename);
            $services->imageicons = url('services/' . $filename);
        }
    
       
       
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
       $services=services::find($id);
     
       return view('admin.services.edit',compact('services'));
    }
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services=Services::find($id);
        $services->title=$request->title;
        $services->title2=$request->title2;
        $services->details=$request->details;
        $services->services=$request->services;
        $services->details2=$request->details2;
        $services->price=$request->price;
      
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '1.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('services/');
            $file->move($path, $filename);
            $services->image = url('services/' . $filename);
        }
    
        if ($request->hasFile('imageicons')) {
            $file = $request->file('imageicons');
            $filename = time() . '2.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('services/');
            $file->move($path, $filename);
            $services->imageicons = url('services/' . $filename);
        }
    
       
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
    public function services(){
        $services = Services::take(6)->get();

        return view('service',compact('services'));
    }
    public function servicesdetails(string $id)
    {
        $services = Services::where('id', $id)->get();
        $addonServices = Addonservice::where('service_id', $id)->get();
        $gallery = Gallery::where('service_id', $id)->get();
        return view('pages.servicesdetails', compact('services','addonServices','gallery'));
    }
   
}
