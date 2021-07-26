        <nav id="navbar-presto" class="navbar navbar-expand-lg fixed-top px-4 py-3">

            <div class="container-fluid justify-content-between d-flex pe-3">

                <a class="navbar-brand col-10 col-lg-3" href="{{route('homepage')}}"><img id="logo-presto logo-img-color'"
                        class="logo-img img-fluid" src="./img/graph/logo-ex.svg" alt=""></a>

                <button id="navbar-toggler" class="navbar-toggler tc-main fs-3 col-lg-6 bg-main text-white text-end"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i id="icon-menu" class="fas fa-stream"></i>
                    <i id="icon-ics" class="fas fa-times d-none"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-4 text-center">
                        <li class=" nav-item">
                            <a class="nav-link d-inline-block px-2 mx-3 pointer" aria-current="page"
                                href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-inline-block pointer" href="#">Categorie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-inline-block pointer" href="./articles.html">Tutti gli
                                annunci</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-inline-block pointer" href="#">Profilo</a>
                        </li>

                        <li class="nav-item pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Chi siamo</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">team</a>
                                <a class="dropdown-item" href="#">mission</a>
                            </div>
                        </li>

                        <div class="align-self-center">
                            <button class="navbar-btn-revisore">Inserisci Annuncio</button>
                        </div>

                        <li class="nav-item d-flex justify-content-center">
                            <a class="nav-link d-inline-block px-2 pointer" href="./user_profile.html"><i
                                    class="fas fa-user-circle"></i></a>
                            <a class="nav-link d-inline-block px-2 pointer" href="./user_profile.html"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @if (Auth::user())
                                    Hello, {{ Auth::user()->name }}
                                @else
                                    Account
                                @endif
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (Auth::user() == false)
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>

                                @else

                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                                        <form method="POST" action="{{ route('logout') }}" id="form-logout">
                                            @csrf
                                        </form>
                                    </li>
                            </ul>
                    </ul>
                    @endif

                    </ul>
                    <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
                </div>

            </div>

        </nav>
    </div>

</nav>

