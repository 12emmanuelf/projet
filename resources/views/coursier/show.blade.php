
@extends('Dashbord.layouts.coursiers')


@section('angaman')

    <h1>Gestion des coursiers</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom :</th>
            <td>{{ $coursier->nom }}</td>
        </tr>

        <tr>

            <th>Prenom:</th>
            <td>{{ $coursier->prenom }}</td>

        </tr>

        <tr>

            <th>numero_telephone:</th>
            <td>{{ $coursier->numero_telephone}}</td>

        </tr>

        <tr>

            <th>numero_telephone_2:</th>
            <td>{{ $coursier->numero_telephone_2}}</td>

        </tr>

        <tr>
            <th>numero_permis_conduire:</th>
            <td>{{ $coursier->numero_permis_conduire }}</td>
        </tr>


        <tr>

            <th>salaire:</th>
            <td>{{ $coursier->salaire}}</td>

        </tr>

        <tr>
            <th>statut:</th>
            <td>{{ $coursier->statut }}</td>
        </tr>

        <tr>

            <th>type_vehicule:</th>
            <td>{{ $coursier->type_vehicule}}</td>

        </tr>

        <tr>

            <th>photo:</th>
            <td>{{ $coursier->photo}}</td>

        </tr>

        <tr>

            <th>email:</th>
            <td>{{ $coursier->email}}</td>

        </tr>

        <tr>

            <th>plaque_immatriculation :</th>
            <td>{{ $coursier->plaque_immatriculation }}</td>

        </tr>
    </table>

@endsection
