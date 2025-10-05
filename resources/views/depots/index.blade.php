<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Dépôts</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:hover { background-color: #f9f9f9; }
    </style>
</head>
<body>
    <h1>Liste des Dépôts</h1>

    @if($depots->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($depots as $depot)
                    <tr>
                        <td>{{ $depot->id }}</td>
                        <td>{{ $depot->nom }}</td>
                        <td>{{ $depot->adresse }}</td>
                        <td>{{ $depot->capacite }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucun dépôt trouvé.</p>
    @endif
</body>
</html>
