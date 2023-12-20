
@extends("Dashbord.layouts.clients")
@section("content")
<div class="container mt-5">



    <h1>Modifier Client</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('client/'. $client->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nomComplet" value="{{ $client->nom }}">

        </div>

        <div class="form-group mb-3">

            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrer une prenom" name="Prenom" value="{{ $client->prenom }}">

        </div>

        <div class="form-group mb-3">

            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone" placeholder="Entrer Telephone" name="telephone" value="{{ $client->telephone}}">

        </div>


        <div class="form-group mb-3">

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Entrer Email" name="email" value="{{ $client->email }}">

        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>
@endsection
