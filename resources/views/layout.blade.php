<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpg') }}">
</head>
<body>
    <header>
        <h1>Fundacja Dobre Serce</h1>
        <nav>
            <ul>
                <li><a href="/">Strona Główna</a></li>

                <li class="relative">
                    <a href="/o-nas">
                        O Nas
                    </a>
                    <ul>
                        <li><a href="/statut">Statut Fundacji</a></li>
                        <li><a href="/zarzad">Zarząd Fundacji</a></li>
                        <li><a href="/cele">Cele i zasady działania</a></li>
                        <li><a href="/dzialalnosc">Działalność gospodarcza</a></li>
                        <li><a href="/sprawozdania">Sprawozdania</a></li>
                    </ul>
                </li>

                <li><a href="/projekty">Projekty</a></li>
                <li><a href="/galeria">Galeria</a></li>
                <li><a href="/kontakt">Kontakt</a></li>
                <li><a href="/opinie">Opinie</a></li>
            </ul>
        </nav>

    </header>

    <main style="flex-grow: 1;">
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Fundacja Dobre Serce. Pomagamy dzieciom!</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>


</body>
</html>
