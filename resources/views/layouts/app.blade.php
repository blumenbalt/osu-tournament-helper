<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Osu Tournament Helper</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'OTH') }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('musics.index')}}">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Teams
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('teams.index') }}">List of your teams</a></li>
                            <li><a class="dropdown-item" href="{{ route('teams.create') }}">Create Team</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                @auth
                <h5 class="my-2 me-2">
                    {{ auth()->user()->username }}
                </h5>
                <img src="https://a.ppy.sh/{{auth()->user()->osu_id}}" alt="osu user image" class="img-fluid rounded-circle avatar-sm me-2">
                @endauth
                @guest
                <a class="btn btn-outline-success my-2 my-sm-0" href="https://osu.ppy.sh/oauth/authorize?response_type=code&amp;client_id=6689&amp;scope=identify%20public&amp;redirect_uri=http://localhost:8000/callback" type="button">Register or Login</a>
                @else
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
                </form>
                @endguest
            </div>
        </div>
    </nav>
    <div class="container">

        @yield('content')
    </div>
</body>

</html>