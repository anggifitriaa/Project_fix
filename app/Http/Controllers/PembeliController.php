<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\Menu;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = pembeli::all();
        return view('pembeli.index', compact('pembeli'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        return view('pembeli.create' , compact('menu'));

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
        //     'nama_pembeli' => 'required',
            'id_menu' => 'required',
            // 'jumlah' => 'required',
            // 'harga' => 'required'
         ]);
        $pembeli = new Pembeli;
        // $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->id_menu = $request->id_menu;
        $pembeli->jumlah = $request->jumlah;
        $pembeli->harga = $request->harga;
        $pembeli->save();
        return redirect()->route('pembeli.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli = Menu::all();
        return view('pembeli.edit', compact('pembeli', 'menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'id' => 'required',
        //     'nama_pembeli' => 'required',
            //  'nama_paket' => 'required',
            //  'jumlah' => 'required',
            //  'menu_id' => 'required',

        // ]);
        $pembeli = Pembeli::findorFail($id);
        $pembeli->id = $request->id;
        // $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->nama_paket = $request->nama_paket;
        $pembeli->jumlah = $request->jumlah;
        $pembeli->menu_id = $request->menu_id;
        $pembeli->save();
        return redirect()->route('pembeli.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index');

    }
}
