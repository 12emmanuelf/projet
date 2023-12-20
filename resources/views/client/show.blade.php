
@extends('Dashbord.layouts.Clients')


@section('content')

    <h1>Gestion des Clients</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom :</th>
            <td>{{ $client->nom }}</td>
        </tr>

        <tr>

            <th>Prenom:</th>
            <td>{{ $client->prenom }}</td>

        </tr>

        <tr>

            <th>Telephone:</th>
            <td>{{ $client->telephone }}</td>

        </tr>

        <tr>

            <th>Email:</th>
            <td>{{ $client->email }}</td>

        </tr>


    </table>

@endsection
