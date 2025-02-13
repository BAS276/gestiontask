<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $projet->nom }}</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif, Arial, sans-serif;
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
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            text-decoration: underline;
            color: #66bb6a;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: #1e1e1e;
            margin: 10px 0;
            padding: 14px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        li:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
        }

        button {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        button:hover {
            background-color: #e63946;
            transform: scale(1.07);
        }

        button:active {
            transform: scale(1);
            background-color: #c92a34;
        }
    </style>
</head>

<body>
    <h1>{{ $projet->nom }}</h1>
    <p>{{ $projet->description }}</p>
    <a href="{{ route('projets.taches.index', $projet) }}">Voir les tâches</a>
    <a href="{{ route('projets.edit', $projet) }}">Modifier</a>
</body>

</html>