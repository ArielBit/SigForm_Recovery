<?php

namespace App\Http\Controllers;

use App\Models\Sigr;
use Illuminate\Http\Request;

class SigrController extends Controller
{
    #Page d'accueil
    public function accueil()
    { 
        return view('sig_a.accueil');
    }

    #Page Inscription
    public function inscrire(){
        return view('sig_a.inscrire');
    }

    #Page Connexion
    public function connexion(){
        return view('sig_a.connexion');
    }

    public function form1(Request $request)
    {
        $validated = $request->validate([
          'ok' => 'required|string',
          'moi' => 'requiered|string',                              
        ]);

        Sigr::create($validated);

        return redirect()->route('confirm1');
    }

    public function form(){            
        return view('sig_a.confirm');
    }
    
    /*public function showform1(){
        $sigr = Sigr::all();
        return view('show.form1', compact('sigr');
    }*/

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
    public function destroy($id)
    {
        Sigr::findOrFail($id)->delete();
        return redirect->route('confirm1');
    }
}
