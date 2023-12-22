<?php

namespace App\Http\Controllers;
use App\Models\Commune;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communes = Commune::all();
        $clients = Client::all();
        return view('client.index', compact('clients', 'communes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create', compact('clients','communes'));
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
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=> 'required',
            'email' => 'required',
            'commune' => 'required',
        ]);
        $commune = Commune::where('nom', $request->get('commune'))->first();
        if (!$commune) {
            $commune = new Commune(['nom' => $request->get('commune')]);
            $commune->save();
        }


        $client = new client([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
            'commune_id' => $commune->id,
        ]);
        $client->save();

        return redirect('/client.index')->with('success', 'Client Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            $client = client::findOrFail($id);
            $communes = Commune::all();
            return view('client.edit', compact('client', 'communes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = client::findOrFail($id);
        $commune = Commune::all();
        return view('client.edit', compact('client', 'zones'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

            $request->validate([

                'nom'=>'required',
                'prenom'=> 'required',
                'telephone' => 'required',
                'email'=> 'required',
                'commune_id' => 'required'
            ]);

            $client = client::findOrFail($id);
            $client->nom = $request->get('nom');
            $client->prenom = $request->get('prenom');
            $client->telephone = $request->get('telephone');
            $client->email = $request->get('email');
            $client->commune_id = $request->get('commune_id');


            $client->update();

            return redirect('/client.index')->with('success', 'Client Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = client::findOrFail($id);
        $client->delete();

        return redirect('/client.index')->with('success', 'Client Supprime avec succès');
    }

}
