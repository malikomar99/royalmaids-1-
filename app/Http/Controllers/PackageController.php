<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package=Package::get();
        return view ('admin.package.index',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.package.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'price'=>'required',
            'service1'=>'required',
            'service2'=>'required',
            'service3'=>'required',
            'service4'=>'required',
            'service5'=>'required',
            'service6'=>'required',
            
        ]);
       
       
       
        $package= new Package();
        $package->name=$request->name;
        $package->price=$request->price;
        $package->service1=$request->service1;
        $package->service2=$request->service2;
        $package->service3=$request->service3;
        $package->service4=$request->service4;
        $package->service5=$request->service5;
        $package->service6=$request->service6;
        $package->save();
        return back()->with('success','package create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package= Package::find($id);
        return view('admin.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $package=Package::find($id);
        $package->name=$request->name;
        $package->price=$request->price;
        $package->service1=$request->service1;
        $package->service2=$request->service2;
        $package->service3=$request->service3;
        $package->service4=$request->service4;
        $package->service5=$request->service5;
        $package->service6=$request->service6;
       
       $package->save();
        return redirect()->route('admin.package.index')->with('success','package update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $package=Package::find($id);
        $package->delete();
        return back()->with("success","package remove succcessfully");
    }
  
   
}
