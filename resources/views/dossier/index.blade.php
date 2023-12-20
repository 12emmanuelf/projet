<!-- resources/views/dossiers/index.blade.php -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dossiers</title>
    </head>
    <body>
        <h1>Liste des Dossiers</h1>
        <table>
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Abonnement ID</th>
                    <!-- Ajoutez d'autres colonnes ici -->
                </tr>
            </thead>
            <tbody>
                @foreach($dossiers as $dossier)
                    <tr>
                        <td>{{ $dossier->client_id }}</td>
                        <td>{{ $dossier->abonnement_id }}</td>
                        <!-- Ajoutez d'autres colonnes ici -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    </html>

