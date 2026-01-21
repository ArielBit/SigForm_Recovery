<?php

namespace App\Http\Controllers;

use App\Models\Sigr;
use Illuminate\Http\Request;

class SigrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sig_a.inscription');
    }

    public function form1(Request $request)
    {
        $validated = $request->validate([
          'ok' => 'required|string',
          'moi' => 'requiered|string',                              
        ]);

        Article::create($validated);

        return redirect()->route('confirm1');
    }

    public function form1(){
        return view('confirm');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sigr $sigr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sigr $sigr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sigr $sigr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sigr $sigr)
    {
        //
    }
}
