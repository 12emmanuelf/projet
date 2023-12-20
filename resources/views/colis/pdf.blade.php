<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
        </div>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">expedition</th>
                    <th scope="col">adresse</th>
                    <th scope="col">ville </th>
                    <th scope="col">code_postale</th>
                    <th scope="col">n_colis</th>
                    <th scope="col">poids</th>
                    <th scope="col">reference</th>
                    <th scope="col">expediteur</th>

                </tr>

            </thead>
            <tbody>
                @foreach($colis ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->expedition }}</td>
                    <td>{{ $data->adresse }}</td>
                    <td>{{ $data->ville }}</td>
                    <td>{{ $data->code_postale }}</td>
                    <td>{{ $data->n_colis }}</td>
                    <td>{{ $data->poids }}</td>
                    <td>{{ $data->reference }}</td>
                    <td>{{ $data->expediteur }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
