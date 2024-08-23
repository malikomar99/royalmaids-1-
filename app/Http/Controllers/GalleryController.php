<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Services;

class GalleryController extends Controller
{
    public function index()
    {
      $gallery=Gallery::get();
     return view('admin.gallery.index',compact('gallery'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service=Services::get();
        return view ('admin.gallery.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'service_id'=>'required',
            'image1' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image2' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image3' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image4' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image5' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image6' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image7' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            
        ]);
        $gallery = new Gallery();
        $gallery->service_id=$request->service_id;
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filename = time() . '3.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image1 = url('gallery/' . $filename);
        }
    
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filename = time() . '4.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image2 = url('gallery/' . $filename);
        }
    
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $filename = time() . '5.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image3 = url('gallery/' . $filename);
        }
    
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $filename = time() . '6.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image4 = url('gallery/' . $filename);
        }
        if ($request->hasFile('image5')) {
            $file = $request->file('image5');
            $filename = time() . '7.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image5 = url('gallery/' . $filename);
        }
        if ($request->hasFile('image6')) {
            $file = $request->file('image6');
            $filename = time() . '8.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image6 = url('gallery/' . $filename);
        }
        if ($request->hasFile('image7')) {
            $file = $request->file('image7');
            $filename = time() . '9.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image7 = url('gallery/' . $filename);
        }
    
        // Save the updated service
        $gallery->save();
         return redirect()->back()->with('success','gallery add successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
        
    //     if($search != ''){
    //         $gallery = gallery::where('slug', 'like', '%' . $search . '%')->paginate(2);
    //         $gallery->appends(['search' => $search]);
    
    //         if(count($gallery) > 0){
    //             return view('gallery-index', ['gallery' => $gallery]);
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
       $gallery=Gallery::find($id);
     
       return view('admin.gallery.edit',compact('gallery'));
    }
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery=Gallery::find($id);
        $services->service_id=$request->service_id;
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filename = time() . '3.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image1 = url('gallery/' . $filename);
        }
    
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filename = time() . '4.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image2 = url('gallery/' . $filename);
        }
    
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $filename = time() . '5.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image3 = url('gallery/' . $filename);
        }
    
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $filename = time() . '6.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image4 = url('gallery/' . $filename);
        }
        if ($request->hasFile('image5')) {
            $file = $request->file('image5');
            $filename = time() . '7.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image5 = url('gallery/' . $filename);
        }
        if ($request->hasFile('image6')) {
            $file = $request->file('image6');
            $filename = time() . '8.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image6 = url('gallery/' . $filename);
        }
        if ($request->hasFile('image7')) {
            $file = $request->file('image7');
            $filename = time() . '9.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('gallery/');
            $file->move($path, $filename);
            $gallery->image7 = url('gallery/' . $filename);
        }
    
        // Save the updated service
        $gallery->save();
        return redirect()->route('admin.dashboard')->with('success','gallery Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        gallery::find($id)->delete();
        return redirect()->back()->with('Success','gallery deleted successfully');
    }
}
