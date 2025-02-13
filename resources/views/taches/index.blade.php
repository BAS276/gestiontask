<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâches de {{ $projet->nom }}</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #ffffff;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
        }

        a {
            color: #4caf50;
            text-decoration: none;

        }

        a:hover {
            text-decoration: underline;
            color: #66bb6a;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center
        }

        li {
            background: #1e1e1e;
            margin: 12px 0;
            padding: 14px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            display: block;
            text-align: center;
            width: 300px;


        }

        li:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
        }

        .statut {
            padding: 6px 12px;
            border-radius: 6px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            margin: 20px
        }

        .statut-en_cours {
            background-color: #ffc107;
            width: 100%;
        }

        .statut-en_attente {
            background-color: #6c757d;
            width: 100%;
        }

        .statut-livree {
            background-color: #28a745;
            width: 100%;
        }

        button {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            width: 100%;
        }

        button:hover {
            background-color: #e63946;
        }

        button:active {
            background-color: #c92a34;
        }

        select {
            width: 100%;
            padding: 10px 0px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            background: #2c2c2c;
            color: #ffffff;
            font-size: 14px;
            outline: none;
        }

        .sidebar {
            width: 10%;
            background-color: #1e1e1e;
            color: #ecf0f1;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            background-color: #28a745;
        }

        .sidebar ul li a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 18px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .div {
            width: 85%;
            background-color: #1e1e1e;
            color: #ecf0f1;
            height: 100vh;
            position: fixed;
            top: 0;
            right: 0;
            padding: 20px
        }
    </style>
</head>

<body>


    <aside class="sidebar">
        <ul>
            <li><a href="{{ route('projets.index') }}">Mes Projets</a></li>
            <li><a href="{{ route('projets.create') }}">Créer un Projet</a></li>
            <li><a href="{{ route('projets.taches.create', $projet) }}">Créer une Tâche</a></li>
            <li><a href="{{ route('login') }}">Deconection</a></li>
        </ul>
    </aside>
    <div class="div">
        <h1>Tâches de {{ $projet->nom }}</h1>

        <ul>
            @foreach ($taches as $tache)
                <li>
                    <h1>{{ $tache->titre }}</h1>
                    <select name="statut" id="statut" required>
                        <option class="statut statut-en_attente" value="en_attente" {{ $tache->statut == 'en_attente' ? 'selected' : '' }}>En attente</option>
                        <option class="statut statut-en_cours" value="en_cours" {{ $tache->statut == 'en_cours' ? 'selected' : '' }}>En cours</option>
                        <option class="statut statut-livree" value="livree" {{ $tache->statut == 'livree' ? 'selected' : '' }}>Livrée</option>
                    </select>


                    <form action="{{ route('projets.taches.destroy', [$projet, $tache]) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>