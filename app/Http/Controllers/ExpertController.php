<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;
class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expert=Expert::get();
        return view ('admin.expert.index',compact('expert'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.expert.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'profession'=>'required',
           'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);
       
       
       
        $expert= new Expert();
        $expert->name=$request->name;
        $expert->profession=$request->profession;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '1.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('expert/');
            $file->move($path, $filename);
            $expert->image = url('expert/' . $filename);
        }
        $expert->save();
        return back()->with('success','expert create successfully');
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
        $expert= Expert::find($id);
        return view('admin.expert.edit', compact('expert'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expert=Expert::find($id);
        $expert->name=$request->name;
        $expert->profession=$request->profession;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '1.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('expert/');
            $file->move($path, $filename);
            $expert->image = url('expert/' . $filename);
        }
       $expert->save();
        return redirect()->route('admin.expert.index')->with('success','expert update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $expert=Expert::find($id);
        $expert->delete();
        return back()->with("success","expert remove succcessfully");
    }
   


}
