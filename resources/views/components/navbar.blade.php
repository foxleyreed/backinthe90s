<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 w-100">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}"><span class="circle-pink"></span><span class="circle-yellow"></span>HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('article.index')}}">Articles</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.create')}}">Create</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('careers')}}">JOBs</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if(Auth::user()->is_admin)
                                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard (admin)</a></li>
                            @endif
                            @if(Auth::user()->is_revisor)
                                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard (revisor)</a></li>
                            @endif
                            @if(Auth::user()->is_writer)
                                <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard (writer)</a></li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Guest</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        </ul>
                    </li>
                @endguest
                <li class="nav-item nav-minimize">
                    <span class="nav-minimize-icon"></span>
                </li>
                <li class="nav-item nav-close">
                    <span class="nav-close-icon"><i class="bi bi-x fs-1"></i></span>
                </li>
            </ul>
        </div>
    </div>
</nav>
