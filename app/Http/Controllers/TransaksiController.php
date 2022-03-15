<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\pembeli;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::With('menu', 'pembeli')->get();
        // $menu = Menu::all();
        // $pembeli = Pembeli::all();
        return view('transaksi.index', compact('transaksi'));
    }
    public function laporan()
    {
        $laporan = Transaksi::all();
        return view('transaksi.laporan', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = Menu::all();
        // $pembeli = Pembeli::all();
        return view('transaksi.create', compact('menu',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         $request->validate([
//     'nama' => 'required', 
//     'id_pembeli' => 'required', 
//     'menu_id' => 'required',
// ]);
$transaksi = new Transaksi;
$transaksi->nama = $request->nama;
// $transaksi->id_pembeli = $request->id_pembeli;
$transaksi->menu_id = $request->menu_id;
$transaksi->jumlah = $request->jumlah;
$transaksi->uang = $request->uang;

$price = Menu::findOrFail($request->menu_id);
$transaksi->total = $request->harga * $transaksi->jumlah;
$transaksi->kembalian = $transaksi->uang - $transaksi->total;
$transaksi->save();
return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $transaksi = Transaksi::findOrFail($id);
        $menu = Menu::findOrFail($id);
        return view('transaksi.edit', compact('transaksi', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $transaksi = new Transaksi;
        $transaksi->nama = $request->nama;
        $transaksi->menu_id = $request->menu_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->uang = $request->uang;
        
        $price = Menu::findOrFail($request->menu_id);
        $transaksi->total = $request->harga * $transaksi->jumlah;
        $transaksi->kembalian = $transaksi->uang - $transaksi->total;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
