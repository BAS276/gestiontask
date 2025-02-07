<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la tâche : {{ $tache->titre }}</title>
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
        p {
            background: #fff;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        a {
            color: #28a745;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Détails de la tâche : {{ $tache->titre }}</h1>
    <p><strong>Description :</strong> {{ $tache->description }}</p>
    <p><strong>Statut :</strong> {{ $tache->terminee ? 'Terminée' : 'En cours' }}</p>
    <a href="{{ route('projets.taches.index', $projet) }}">Retour à la liste des tâches</a>
</body>
</html>