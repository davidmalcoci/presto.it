<script>
    $(document).ready(function() {
        $(".dropdown, .dropdown-active").hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
        });
    });

    $(document).ready(function() {
        $("#change").click(function() {
            $("#search").toggle(500);
            $("i", this).toggleClass("fa fa-search fa fa-times");
        });
    });
</script>


<nav id="navbar-presto" class="navbar navbar-expand-lg fixed-top px-4">

    <div class="container-fluid justify-content-between d-flex pe-3">

        <a class="navbar-brand col-10 col-lg-1" href="{{ route('homepage') }}"><img id="logo-presto logo-img-color'"
                class="logo-img img-fluid" src="/img/graph/logo-ex.svg" alt=""></a>

        <button id="navbar-toggler" class="navbar-toggler tc-main fs-3 col-lg-6 bg-main text-end" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i id="icon-menu" class="fas fa-stream"></i>
            <i id="icon-ics" class="fas fa-times d-none"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4 text-center">
                <li class=" nav-item">
                    <a class="nav-link d-inline-block pointer" aria-current="page"
                        href="{{ route('homepage') }}">Home</a>
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

                {{-- <li class="nav-item pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Chi siamo</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">team</a>
                                <a class="dropdown-item" href="#">mission</a>
                            </div>
                        </li> --}}

                {{-- <div class="align-self-center">
                    <a href="{{ route('announcement.create') }}"><button class="navbar-btn-annuncio">Inserisci
                            Annuncio <i class="fas fa-plus-circle"></i></button></a>
                </div> --}}





                @if (Auth::user())
                    @if (Auth::user()->is_revisor)

                        <div class="align-self-center">
                            <a href="{{ route('revisor.home') }}">
                                <button class="navbar-btn-revisore d-flex">
                                    <div lass="nav-link"> Dashboard revisore</div>
                                    <div class="unseen-count" id="unseen_count">
                                        {{ \App\Models\Announcement::ToBeRevisionedCount() }}</div>
                                    {{-- <div class="revisore-badge">{{\App\Models\Announcement::ToBeRevisionedCount()}}</div> --}}
                                </button>
                            </a>
                        </div>
                    @else
                        <div class="align-self-center">
                            <a href="{{ route('work') }}">
                                <button class="navbar-btn-revisore d-flex">
                                    <div lass="nav-link"> Diventa revisore</div>
                                </button>
                            </a>
                        </div>
                    @endif
                @endif
            </ul>

            <div class="align-self-center text-center px-4">
                <a href="{{ route('announcement.create') }}"><button class="navbar-btn-annuncio">Inserisci
                        Annuncio <i class="fas fa-plus-circle"></i></button></a>
            </div>

            <li class="nav-item">
                @include('components.locale', ['lang' => 'it', 'nation' => 'it'])
            </li>
            <li class="nav-item">
                @include('components.locale', ['lang' => 'gb', 'nation' => 'gb'])
            </li>
            <li class="nav-item">
                @include('components.locale', ['lang' => 'es', 'nation' => 'es'])
            </li>


           


            <ul class="d-flex  navbar-nav  mb-2 mb-lg-0 px-4 text-center">
                <li class="nav-item nav-link dropdown align-self-center">
                    <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Auth::user())
                            <i class="fas fa-user-circle"></i>
                            {{ Auth::user()->name }}
                        @else
                            Account
                        @endif
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if (Auth::user() == false)
                            <li class="nav-item nav-link dropdown align-self-center"><a class="dropdown-item"
                                    href="{{ route('login') }}">Accedi</a></li>
                            {{-- <li>
                                <hr class="dropdown-divider">
                            </li> --}}
                            <li class="nav-item nav-link dropdown align-self-center"><a class="dropdown-item"
                                    href="{{ route('register') }}">Registrati</a></li>
                        @else
                            <li class="nav-item nav-link dropdown align-self-center"><a class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                                <form method="POST" action="{{ route('logout') }}" id="form-logout">
                                    @csrf
                                </form>
                            </li>
                    </ul>
                    @endif
                </li>



            </ul>
            <li id="#sidebarCart" class="nav-item d-flex justify-content-center me-5">
                <a class="nav-link d-inline-block px-2 pointer" href=""><i class="fas fa-shopping-cart cart"></i></a>
            </li>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->

            <form action="{{ route('search.results') }}" method="get">
                <div class="contSearch">
                    <div class="contIcon" id="change">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <div class="contForm" id="search">
                        <nav class="navbar navbar-light ">
                            <form class="form-inline">
                                <input type="text" name="query" placeholder="Cosa stai cercando?"
                                    class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>
                    </div>
                </div>
            </form>






        </div>
    </div>
</nav>


{{-- <div class="container">

    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div>
    
    
  </div> --}}
