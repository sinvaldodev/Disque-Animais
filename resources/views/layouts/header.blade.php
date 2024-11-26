<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('title') - Disque Animais</title>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <div>
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{ route('home') }}" class="nav-link px-2 text-secondary">Home</a></li>
                        <li><a href="{{ route('animals.index') }}" class="nav-link px-2 text-white">Animais Perdidos</a>
                        </li>
                        <li><a href="{{ route('news.index') }}" class="nav-link px-2 text-white">Notícias</a></li>
                    </ul>

                    {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                  <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form> --}}

                    @if (auth()->check())
                        <div>
                            <a href="{{ route('users.show', auth()->user()->id) }}"
                                class="btn btn-outline-light me-2">Perfil</a>
                            <form action="{{ route('login.destroy') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-outline-light me-2">Logout</button>
                            </form>
                        </div>
                    @else
                        <div class="text-end">
                            <button type="button" onclick="window.location.href='{{ route('login.index') }}'"
                                class="btn btn-outline-light me-2">Login</button>
                            <button type="button" onclick="window.location.href='{{ route('users.create') }}'"
                                class="btn btn-warning">Cadastrar-se</button>
                        </div>
                    @endif
                </div>
            </div>
    </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </div>
    <div>
        @yield('content')
    </div>
</body>

</html>
