<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier {{ $tache->titre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Modifier {{ $tache->titre }}</h1>
    <form action="{{ route('projets.taches.update', [$projet, $tache]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titre">Titre de la tâche</label>
            <input type="text" name="titre" id="titre" value="{{ $tache->titre }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4">{{ $tache->description }}</textarea>
        </div>
        <div>
            <label for="statut">Statut</label>
            <select name="statut" id="statut" required>
                <option value="en_attente" {{ $tache->statut == 'en_attente' ? 'selected' : '' }}>En attente</option>
                <option value="en_cours" {{ $tache->statut == 'en_cours' ? 'selected' : '' }}>En cours</option>
                <option value="livree" {{ $tache->statut == 'livree' ? 'selected' : '' }}>Livrée</option>
            </select>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>