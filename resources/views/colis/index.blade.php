
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
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

                            <h2>Gestion des colis</h2>

                        </div>

                        <div class="col-lg-1">
                            <a class="btn btn-success" href="{{ url('colis/create') }}">Ajouter</a>
                        </div>

                    </div>



                    @if ($message = Session::get('success'))

                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>

                    @endif



                    <table class="table table-bordered">

                        <tr>

                            <th>No</th>
                            <th>expedition</th>
                            <th>adresse</th>
                            <th>ville</th>
                            <th>code_postale</th>
                            <th>n_colis</th>
                            <th>poids</th>
                            <th>reference </th>
                            <th>expediteur</th>
                            {{-- <th>nature</th> --}}
                            <th>Actions</th>

                        </tr>

                        @foreach ($colis as $colisItem => $colis)

                            <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $colis->expedition}}</td>
                                    <td>{{ $colis->adresse}}</td>
                                    <td>{{$colis->ville}}</td>
                                    <td>{{ $colis->code_postale }}</td>
                                    <td>{{ $colis->n_colis}}</td>
                                    <td>{{$colis->poids}}</td>
                                    <td>{{ $colis->reference }}</td>
                                    {{-- <td>{{ $colis->nature}}</td> --}}
                                    <td>{{ $colis->expediteur}}</td>
                                <td>

                                    <form action="{{ url('colis/'. $colis->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-info" href="{{ url('colis/'. $colis->id) }}">Voir</a>
                                        <a class="btn btn-primary" href="{{ url('colis/'. $colis->id .'/edit') }}">Modifier</a>

                                        <button type="submit" class="btn btn-danger">Supprimer</button>
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
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
</body>

</html>

