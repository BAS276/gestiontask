<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier {{ $projet->nom }}</title>
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
        input, textarea {
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
    <h1>Modifier {{ $projet->nom }}</h1>
    <form action="{{ route('projets.update', $projet) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nom">Nom du projet</label>
            <input type="text" name="nom" id="nom" value="{{ $projet->nom }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4">{{ $projet->description }}</textarea>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>