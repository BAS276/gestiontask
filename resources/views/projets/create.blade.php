<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un projet</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #ffffff;
            text-align: center;
        }

        form {
            background: #1e1e1e;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            color: #bbbbbb;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px 0px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            background: #2c2c2c;
            color: #ffffff;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        input:focus,
        textarea:focus {
            background: #333333;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: 500;

        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Créer un projet</h1>
    <form action="{{ route('projets.store') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom du projet</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4"></textarea>
        </div>
        <button type="submit">Créer</button>
    </form>
</body>

</html>