<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâches de {{ $projet->nom }}</title>
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
        a {
            color: #28a745;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #fff;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .statut {
            padding: 5px 10px;
            border-radius: 4px;
            color: #fff;
        }
        .statut-en_cours {
            background-color: #ffc107;
        }
        .statut-en_attente {
            background-color: #6c757d;
        }
        .statut-livree {
            background-color: #28a745;
        }
        button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Tâches de {{ $projet->nom }}</h1>
    <a href="{{ route('projets.taches.create', $projet) }}">Créer une tâche</a>
    <ul>
        @foreach ($taches as $tache)
            <li>
                <div>
                    <a href="{{ route('projets.taches.show', [$projet, $tache]) }}">{{ $tache->titre }}</a>
                    <span class="statut statut-{{ $tache->statut }}">
                        {{ ucfirst(str_replace('_', ' ', $tache->statut)) }}
                    </span>
                </div>
                <div>
                    <a href="{{ route('projets.taches.edit', [$projet, $tache]) }}">Éditer</a>
                    <form action="{{ route('projets.taches.destroy', [$projet, $tache]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>