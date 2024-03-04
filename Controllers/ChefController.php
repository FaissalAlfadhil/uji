<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chef = Chef::all();
        return view('admin.page.chef.index', compact('chef'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.chef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'specialty'=> 'required',
            'image'=> 'required',
        ]);

        $imageName = $request->file('image')->hashName();
        $validated['image'] = $imageName;
        $chefDirectory = public_path() . '/chef-image';
        $request->file('image')->move($chefDirectory, $imageName);

        Chef::create($validated);
        return redirect()->to('chef')->with('succes, data berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        return view('admin.page.chef.index', compact('chef'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chef= Chef::findOrFail($id);
        return view('admin.page.chef.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chef= Chef::findOrFail($id);
        
        $validated = $request->validate([
            'name'=> 'required',
            'specialty'=> 'required',
            'image'=> 'required',
        ]);

        $chef = Chef::find($id);
        if($request->hasFile('image')) {

            File::delete(public_path() . "chef-image/$chef->image");

            $imageName = $request->file('image')->hashName();
            $validated['image'] = $imageName;
            $chefDirectory = public_path() . '/chef-image';
            $request->file('image')->move($chefDirectory, $imageName);
        }

        $chef->update($validated);
        return redirect()->to('chef')->with('succes, data berhasil ditambah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $chef=Chef::find($id);
        File::delete(public_path(). "/chef-image/$chef->image");
        $chef->delete();
        return redirect()->to('chef')->with('succes, data berhasil dihapus');

    }
}
