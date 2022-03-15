<?php

namespace App\Http\Controllers;

use App\Models\bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank = Bank::all();
        return view('bank.index', compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bank = new Bank;
        $bank->bank = $request->bank;
        $bank->rekening = $request->rekening;
        $bank->save();
        return redirect()->route('bank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(bank $bank)
    {
        $bank = bank::findOrFail($id);
        return view('bank.show', compact('bank'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(bank $bank)
    {
        $bank = bank::findOrFail($id);
        return view('bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bank $bank)
    {
        $validated = $request->validate([
        'bank' => 'required',
        'rekening' => 'required',
    ]);
        $bank = bank::findOrFail($id);
        $bank->bank = $request->bank;
        $bank->save();
        return redirect()->route('bank.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(bank $bank)
    {
        $bank = Bank::findOrFail($id);
        $bank->delete();
        return redirect()->route('bank.index');
    }
}
