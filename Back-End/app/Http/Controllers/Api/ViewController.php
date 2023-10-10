<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Route;
use App\Models\View;
use App\Models\Apartment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ora puoi utilizzare $apartmentId per ottenere l'appartamento associato all'ID
        $apartmentId = $request->input('apartmentId');
        
        // Otteni l'appartamento associato all'ID
        $apartment = Apartment::find($apartmentId);

        // Verifica se l'appartamento è stato trovato
        if (!$apartment) {
            return response()->json(['error' => 'Appartamento non trovato'], 404);
        }

        // Registra la visualizzazione nella tabella views associandola all'appartamento
        $apartment->views()->create([
            'ip_address' => $_SERVER['REMOTE_ADDR'],
        ]);
    
        return response()->json(['message' => 'Visualizzazione registrata con successo']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function show(View $view)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function edit(View $view)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, View $view)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function destroy(View $view)
    {
        //
    }
}
