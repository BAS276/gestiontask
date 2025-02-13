<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-form {
            background: #1e1e1e;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 320px;
            text-align: center;
        }

        .register-form h1 {
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
            color: #ffffff;
        }

        .register-form label {
            display: block;
            text-align: left;
            font-size: 14px;
            margin-bottom: 6px;
            color: #bbbbbb;
        }

        .register-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            background: #2c2c2c;
            color: #ffffff;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        .register-form input:focus {
            background: #333333;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
        }

        .register-form button {
            width: 100%;
            padding: 12px;
            background: #4c7daf;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .register-form button:hover {
            background: #4c7daf;
            transform: scale(1.02);
        }

        .register-form .error {
            color: #ff4d4d;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .register-form a {
            display: block;
            margin-top: 15px;
            color: #4c7daf;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .register-form a:hover {
            color: #66bb6a;
        }
    </style>
</head>

<body>
    <div class="register-form">
        <h1>Inscription</h1>
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
        <p>Déjà un compte ? <a href="{{ route('login') }}">Se connecter</a></p>
    </div>
</body>

</html>