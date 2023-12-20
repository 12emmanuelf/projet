<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Abonnement;
use App\Models\Souscription;
use Illuminate\Http\Request;
use App\Notifications\SouscriptionNotification;

class SouscriptionController extends Controller
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
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'type' => 'required', // Assurez-vous d'inclure le type d'abonnement dans le formulaire
            // ... autres champs de validation ...
        ]);

        // Enregistrement fictif du client
        $client = new Client([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
        ]);

        // Enregistrement fictif de l'abonnement
        $abonnement = new Abonnement([
            'prix' => $request->get('prix'),
            // ... autres champs de l'abonnement ...
        ]);

        // Enregistrement fictif de la souscription
        $souscription = new Souscription([
            // ... autres champs de la souscription ...
        ]);

        // Associer l'abonnement au client et à la souscription, puis sauvegarder
        $client->abonnements()->save($abonnement);
        $client->souscriptions()->save($souscription);

        // Envoi de la notification après avoir sauvegardé la souscription
        $client->notify(new SouscriptionNotification());

        return redirect('/abonnement.index')->with('success', 'Abonnement effectué avec succès');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function show(Souscription $souscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Souscription $souscription)
    {
        //
    }




}
