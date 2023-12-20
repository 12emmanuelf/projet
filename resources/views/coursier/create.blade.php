@extends('Dashbord.layouts.Clients')

@section('content')

    <h1>Ajouter un livreur</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('coursier') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>

        <div class="form-group mb-3">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrez un prénom" name="prenom">
        </div>

        <div class="form-group mb-3">
            <label for="numero_telephone">Numéro de téléphone :</label>
            <input type="text" class="form-control" id="numero_telephone" placeholder="Entrez un numéro" name="numero_telephone">
        </div>

        <div class="form-group mb-3">
            <label for="numero_telephone_2">Deuxième numéro de téléphone :</label>
            <input type="text" class="form-control" id="numero_telephone_2" placeholder="Entrez un deuxième numéro" name="numero_telephone_2">
        </div>

        <div class="form-group mb-3">
            <label for="numero_permis_conduire">Numéro de permis de conduire :</label>
            <input type="text" class="form-control" id="numero_permis_conduire" placeholder="Numéro de permis de conduire" name="numero_permis_conduire">
        </div>

        <div class="form-group mb-3">
            <label for="salaire">Salaire :</label>
            <input type="number" class="form-control" id="salaire" placeholder="Salaire" name="salaire">
        </div>

        <div class="form-group mb-3">
            <label for="statut_activite">Statut :</label>
            <select class="form-control" id="statut_activite" name="statut_activite">
                <option value="">Sélectionnez</option>
                <option value="actif">Actif</option>
                <option value="inactif">Inactif</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="nationalite">Nationalité :</label>
            <input type="text" class="form-control" id="nationalite" placeholder="Nationalité" name="nationalite">
        </div>

        <div class="form-group mb-3">
            <label for="type_vehicule">Type de véhicule :</label>
            <select class="form-control" id="type_vehicule" name="type_vehicule">
                <option value="">Sélectionnez</option>
                <option value="velo">Vélo</option>
                <option value="moto">Moto</option>
                <option value="voiture">Voiture</option>
                <option value="autre">Autre</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="photo">Photo :</label>
            <input type="text" class="form-control" id="photo" placeholder="URL de la photo" name="photo">
        </div>

        <div class="form-group mb-3">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>

        <div class="form-group mb-3">
            <label for="plaque_immatriculation">Plaque d'immatriculation :</label>
            <input type="text" class="form-control" id="plaque_immatriculation" placeholder="Plaque d'immatriculation" name="plaque_immatriculation">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

@endsection
