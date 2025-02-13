<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets</title>
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
            font-size: 38px;
            font-weight: 600;
        }

        a {
            color: #ffffff;
            text-decoration: none;
            width: 100%;
            margin-top: 5px;
            margin-bottom: 5px
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
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 8px 8px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            width: 31%;
            margin-top: 5px;
            margin-bottom: 5px
        }

        button:hover {
            background-color: #29c04c;
        }

        button:active {
            background-color: #29c04c;
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
            <li><a href="{{ route('projets.create') }}">Crere Projet</a></li>
            <li><a href="{{ route('login') }}">Deconection</a></li>
        </ul>
    </aside>
    <div class="div">
        <h1>Mes Projets</h1>

        <ul>
            @foreach ($projets as $projet)
                <li>
                    <h4><a href="{{ route('projets.show', $projet) }}">{{ $projet->nom }}</a></h4>

                    <div>
                        <button><a href="{{ route('projets.edit', $projet) }}">Éditer</a></button>

                        <form action="{{ route('projets.destroy', $projet) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                            <button><a href="https://frontend-banboo.vercel.app/">GooProject</a></button>

                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>

</html>