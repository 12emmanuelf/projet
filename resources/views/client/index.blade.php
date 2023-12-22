<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset ('img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
        @include('Dashbord.partials.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('Dashbord.partials.header')

        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">


            <div>
                    <div class="row">

                        <div class="col-lg-11">

                            <h1 style="font-weight: bold;">Gestion des Clients</h1>

                        </div>

                        <div class="col-lg-1">
                            <a class="btn btn-success" href="{{ url('client/create') }}">Ajouter</a>
                        </div>

                    </div>



                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                            <script>
                                setTimeout(function(){
                                    window.location.href = '{{ url('/client.index') }}';
                                }, {{ session('delay', 3) * 1000 }});
                            </script>
                        </div>
                    @endif

                    <table class="table table-bordered">

                        <tr>

                            <th>No</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Commune</th>
                            <th>Actions</th>

                        </tr>

                        @foreach ($clients as $index => $client)

                            <tr>
                                <td>{{ $index }}</td>
                                <td>{{ $client->nom }}</td>
                                <td>{{ $client->prenom}}</td>
                                <td>{{ $client->telephone}}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ optional($client->commune)->nom }}</td>
                                <td>

                                    <form action="{{ url('client/'. $client->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-info" href="{{ url('client/'. $client->id) }}">
                                            <i class="bi bi-eye text-dark"></i> Voir
                                        </a>

                                        <a class="btn btn-primary" href="{{ url('client/'. $client->id .'/edit') }}">
                                            <i class="bi bi-pencil text-dark"></i> Modifier
                                        </a>

                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash text-dark"></i> Supprimer
                                        </button>

                                        <a class="btn btn-secondary" href="{{ route('abonn') }}" style="background-color: rgb(4, 0, 255);">
                                            <i class="bi bi-bookmark text-dark"></i> Abonnement
                                        </a>


                                    </form>

                                </td>

                            </tr>

                        @endforeach
                    </table>

            </div>
            <!-- Modal Logout -->


          </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('Dashbord.partials.footer')

      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->

  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
</body>

</html>
