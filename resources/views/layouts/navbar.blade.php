<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#128247;</span> AlbunFot</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if (Auth::check())
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    @if (auth()->user()->rol == 'admin')
                        <li
                            class="nav-item {{ Request::is('fotos') && !Request::is('fotos/create') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('indexFoto') }}">Fotos</a>
                        </li>
                    @endif
                    <li class="nav-item {{ Request::is('albun') && !Request::is('albun/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('indexAlbun') }}">Albunes</a>
                    </li>
                    <li class="nav-item {{ Request::is('albun/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('createAlbun') }}">
                            <span>&#10010;</span> Nuevo albun
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('foto/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('createFoto') }}">
                            <span>&#10010;</span> Nueva foto
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('perfil') }}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesi??n
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
