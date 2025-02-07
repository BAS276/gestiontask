<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets</title>
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
    <h1>Mes Projets</h1>
    <a href="{{ route('projets.create') }}">Créer un projet</a>
    <ul>
        @foreach ($projets as $projet)
            <li>
                <a href="{{ route('projets.show', $projet) }}">{{ $projet->nom }}</a>
                <div>
                    <a href="{{ route('projets.edit', $projet) }}">Éditer</a>
                    <form action="{{ route('projets.destroy', $projet) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                        <a href="https://frontend-banboo.vercel.app/">GooProject</a>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>