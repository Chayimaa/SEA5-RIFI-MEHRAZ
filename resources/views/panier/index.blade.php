<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier Bio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1 class="mb-4">🧺 Mon Panier Bio</h1>

    <form action="{{ route('panier.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row g-2">
            <div class="col-md-6">
                <select name="legume_id" class="form-select" required>
                    @foreach(\App\Models\Legume::all() as $legume)
                        <option value="{{ $legume->id }}">{{ $legume->nom }} - {{ number_format($legume->prix, 2) }} €</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <input type="number" name="quantite" class="form-control" value="1" min="1">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success w-100">Ajouter au panier</button>
            </div>
        </div>
    </form>

    <h2>🧾 Contenu du panier</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Légume</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
                <tr>
                    <td>{{ $item->legume->nom }}</td>
                    <td>{{ $item->quantite }}</td>
                    <td>{{ number_format($item->legume->prix, 2) }} €</td>
                    <td>{{ number_format($item->legume->prix * $item->quantite, 2) }} €</td>
                    <td>
                        <form action="{{ route('panier.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Ton panier est vide 😢</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
