<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = menu::all();
        return view('menu.index', compact('menu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
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
            
            'nama_menu' => 'required',
            'harga' => 'required',
            'gambar_menu' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' =>'required',
        ]);

        // $image = $request->file('gambar_menu');
        // $name = $image->getClientOrigininalName();


        $menu = new Menu;
        $menu->nama_menu = $request->nama_menu;
        if ($request->hasFile('gambar_menu')) {
            $image = $request->file('gambar_menu');
            $name = rand(1000, 9999) . "" . $request->gambar_menu->getClientOriginalName();
            $image->move('images/', $name);
            $menu->gambar_menu = $name;
        }
        $menu->harga = $request->harga;
        $menu->deskripsi = $request->deskripsi;
       
        $menu->save();
        return redirect()->route('menu.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = menu::findOrFail($id);
        return view('menu.show', compact('menu'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.edit', compact('menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            
            'nama_menu' => 'required',
            'gambar_menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->nama_menu = $request->nama_menu;
        if ($request->hasFile('gambar_menu')) {
            $image = $request->file('gambar_menu');
            $name = rand(1000, 9999) . "" . $request->gambar_menu->getClientOriginalName();
            $image->move('image/', $name);
            $menu->gambar_menu = $name;
        }
        $menu->harga = $request->harga;
        $menu->harga = $request->deskripsi;
        // $menu->stock = $request->stock;
        $menu->save();
        return redirect()->route('menu.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index');

    }
}
