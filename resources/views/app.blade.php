<!DOCTYPE html>
<html lang="en" data-theme="emerald">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Application</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col justify-between">
<div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="{{ route('tickets.index') }}">Liste des tickets</a></li>
                    <li><a href="#">Administration (en cours)</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a href="/" class="btn btn-ghost text-xl">Support informatique</a>
        </div>
        <div class="navbar-end">
        </div>
    </div>

    <div class="container w-full my-8 mx-auto flex">
        @yield('content')
    </div>

    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded bottom-0 mt-auto">
        <nav class="grid grid-flow-col gap-4">
            <a href="/php/blog_php_poo/" class="link link-hover">Accueil</a>
            <a href="/php/blog_php_poo/posts" class="link link-hover">Articles</a>
        </nav>
        <aside>
            <p>Copyright © 2024 - Tous droits réservé.</p>
        </aside>
    </footer>

</body>
</html>