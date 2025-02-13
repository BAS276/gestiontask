<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de Projet</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
        }

        .bg-dots-lighter {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
        }

        .bg-center {
            background-position: center;
        }

        .bg-gray-100 {
            background-color: #181818;
        }

        .dark:bg-gray-900 {
            background-color: #111827;
        }

        .selection:bg-red-500::selection {
            background-color: #ef4444;
            color: white;
        }

        .selection:text-white::selection {
            color: white;
        }

        .sm:flex {
            display: flex;
        }

        .sm:justify-center {
            justify-content: center;
        }

        .sm:items-center {
            align-items: center;
        }

        .sm:fixed {
            position: fixed;
        }

        .sm:top-0 {
            top: 0;
        }

        .sm:right-0 {
            right: 0;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .text-right {
            text-align: right;
        }

        .z-10 {
            z-index: 10;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-gray-600 {
            color: #4b5563;
        }

        .hover:text-gray-900:hover {
            color: #1f2937;
        }

        .dark:text-gray-400 {
            color: #9ca3af;
        }

        .dark:hover:text-white:hover {
            color: #ffffff;
        }

        .focus:outline:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .focus:outline-2:focus {
            outline-width: 2px;
        }

        .focus:rounded-sm:focus {
            border-radius: 0.125rem;
        }

        .focus:outline-red-500:focus {
            outline-color: #ef4444;
        }

        .ml-4 {
            margin-left: 1rem;
        }

        .max-w-7xl {
            max-width: 80rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .lg:p-8 {
            padding: 2rem;
        }

        .bg-gray-100 {
            background-color: #121212;
        }

        .dark:bg-gray-900 {
            background-color: #bbbbbb;
        }

        .text-gray-600 {
            color: #d1d1d1;
        }

        .dark:text-gray-400 {
            color: #9ca3af;
        }

        .text-white {
            color: #ffffff;
        }

        .bg-red-500 {
            background-color: #ef4444;
        }

        .text-white {
            color: #ffffff;
        }

        .max-w-7xl {
            max-width: 80rem;
            /* Largeur maximale du conteneur */
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
            /* Centrage horizontal */
        }

        .p-6 {
            padding: 5.5rem;
            /* Espacement interne */
        }

        .lg\:p-8 {
            padding: 2rem;
            /* Espacement interne plus grand sur les grands écrans */
        }

        .text-center {
            text-align: center;
            /* Centrage du texte */
        }

        .bg-gradient-to-r {
            background-image: linear-gradient(to right, var(--tw-gradient-from), var(--tw-gradient-to));
            /* Dégradé */
        }

        .from-blue-500 {
            --tw-gradient-from: #3b82f6;
            /* Couleur de départ du dégradé */
        }

        .to-purple-600 {
            --tw-gradient-to: #9333ea;
            /* Couleur de fin du dégradé */
        }

        .rounded-lg {
            border-radius: 0.5rem;
            /* Bordures arrondies */
        }

        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            /* Ombre */
        }

        .text-lg {
            font-size: 1.125rem;
            /* Taille de police */
            line-height: 1.75rem;
            /* Hauteur de ligne */
        }

        .text-gray-600 {
            color: #4b5563;
            /* Couleur du texte en mode clair */
        }

        .dark\:text-gray-400 {
            color: #9ca3af;
            /* Couleur du texte en mode sombre */
        }

        a {
            text-decoration: none;
            /* Supprimer le soulignement des liens */
        }

        button {
            background-color: #ffffff;
            /* Fond du bouton */
            color: #686868;
            /* Couleur du texte du bouton */
            padding: 0.5rem 1rem;
            /* Espacement interne du bouton */
            border-radius: 0.375rem;
            /* Bordures arrondies du bouton */
            font-weight: 600;
            /* Texte en gras */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Transition fluide */
            border: 2px solid transparent;
            /* Bordure transparente */
        }

        button:hover {
            background-color: #686868;
            /* Fond du bouton au survol */
            color: #ffffff;
            /* Couleur du texte au survol */
            border-color: #ffffff;
            /* Bordure blanche au survol */
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Connexion</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inscription</a>
                @endif
            </div>
        @endif
        <div
            class="max-w-7xl mx-auto p-6 lg:p-8 text-center bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg shadow-lg">
            <h1 class="text-lg text-gray-600 dark:text-gray-400">
                Welcome to My Project
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                A modern solution for managing your tasks and projects efficiently.
            </p>
            <a href="{{ route('register') }}" class="text-lg text-gray-600 dark:text-gray-400">
                <button> Started</button>
            </a>
        </div>
    </div>
</body>

</html>