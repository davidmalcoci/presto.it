<x-layout>
    @push('title')
        {{ __('ui.welcome') }}
    @endpush

    <!-- ===============================================-->
    <!--    Messaggi POPUP -->
    <!-- ===============================================-->

    <!-- messaggio utente loggato -->
    @if (session('message'))
        {{-- <div class="alert alert-success">
            {{ session('message') }}
        </div> --}}
        <script>
            swal("{{ session('message') }}", "Adesso è in fase di revisione, ti avviseremo appena sarà pubblico", "success");
        </script>
    @endif

    {{-- messaggio richiesta revisore --}}
    @if (session('mailMessage'))
        {{-- <div class="alert alert-success">
            {{ session('mailMessage') }}
        </div> --}}
        <script>
            swal("{{ session('mailMessage') }}");
        </script>
    @endif

    <script>
        $('#myCarousel').carousel({
            interval: 2,
        })
    </script>

    {{-- /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/ --}}

    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

    <div id="myCarousel" class="carousel slide carousel-fade pt-5 row-header" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center pt-5 justify-content-center">
                            <div class="col-9 col-lg-6 tc-gray justify-content-between px-4  order-md-1 order-2">
                                <h4 class="tc-main fw-black">{{ __('ui.acquista_subito') }}</h4>
                                {{-- <h2 class="display-4 tc-white fw-bold">Vendi i tuoi prodotti e acquista usato <span
                                        class="display-4 tc-white fw-bold evidenziation">garantito</span> dal nostro team
                                </h2> --}}
                                <h4 class="display-4 tc-white fw-bold">{{ __('ui.vendi_subito') }}</h4>
                                <p class="lead fs-5">
                                    Lorem ipsumm, dolor sit amet consectetur adipisicing elit. Dolor nemo culpa ipsa
                                    temporibus.
                                </p>
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-12 align-self-top p-0 px-2 icon-header">
                                            {{-- <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-product-card p-3">
                                                Annunci <i class="fas fa-arrow-right ms-2"></i></i></button></a> --}}
                                            <h4 class="tc-main fw-black my-3">{{ __('ui.categorie') }}</h4>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 button-header"><i
                                                        class="fas fa-tshirt"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-home"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-car-side"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-briefcase"></i></button></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="./img/famele-illustration.svg"
                                    class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center pt-5 justify-content-center">
                            <div class="col-9 col-lg-6 tc-gray justify-content-between px-4  order-md-1 order-2">
                                <h4 class="tc-main fw-black">{{ __('ui.acquista_subito') }}</h4>
                                {{-- <h2 class="display-4 tc-white fw-bold">Vendi i tuoi prodotti e acquista usato <span
                                        class="display-4 tc-white fw-bold evidenziation">garantito</span> dal nostro team
                                </h2> --}}
                                <h4 class="display-4 tc-white fw-bold">{{ __('ui.vendi_subito') }}</h4>
                                <p class="lead fs-5">
                                    Lorem ipsumm, dolor sit amet consectetur adipisicing elit. Dolor nemo culpa ipsa
                                    temporibus.
                                </p>
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-12 align-self-top p-0 px-2 icon-header">
                                            {{-- <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-product-card p-3">
                                                Annunci <i class="fas fa-arrow-right ms-2"></i></i></button></a> --}}
                                            <h4 class="tc-main fw-black my-3">{{ __('ui.categorie') }}</h4>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 button-header"><i
                                                        class="fas fa-tshirt"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-home"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-car-side"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-briefcase"></i></button></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="./img/dream-illustration.svg"
                                    class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center pt-5 justify-content-center">
                            <div class="col-9 col-lg-6 tc-gray justify-content-between px-4  order-md-1 order-2">
                                <h4 class="tc-main fw-black">{{ __('ui.acquista_subito') }}</h4>
                                {{-- <h2 class="display-4 tc-white fw-bold">Vendi i tuoi prodotti e acquista usato <span
                                        class="display-4 tc-white fw-bold evidenziation">garantito</span> dal nostro team
                                </h2> --}}
                                <h4 class="display-4 tc-white fw-bold">{{ __('ui.vendi_subito') }}</h4>
                                <p class="lead fs-5">
                                    Lorem ipsumm, dolor sit amet consectetur adipisicing elit. Dolor nemo culpa ipsa
                                    temporibus.
                                </p>
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-12 align-self-top p-0 px-2 icon-header">
                                            {{-- <a href="{{ route('homepage') }}"><button type="submit" class="btn p-3">
                                                Annunci <i class="fas fa-arrow-right ms-2"></i></i></button></a> --}}
                                            <h4 class="tc-main fw-black my-3">{{ __('ui.categorie') }}</h4>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 button-header"><i
                                                        class="fas fa-tshirt"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-home"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-car-side"></i></button></a>
                                            <a href="{{ route('homepage') }}"><button type="submit"
                                                    class="btn p-3 ms-1 button-header"><i
                                                        class="fas fa-briefcase"></i></button></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="./img/family-illustration.svg"
                                    class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span
                class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>

    <!--slide end-->




    {{-- <section id="header" class="d-flex align-items-center">
        <header class="container-fluid p-0 bg-home-header col-8 justify-content-center">
            <div class="row align-items-center ">
                <div class="col-12 col-lg-6 tc-gray justify-content-between px-4">
                    <h5 class="tc-main fw-black">{{ __('ui.acquista_subito') }}</h5>
                    <h2 class="display-4 tc-white fw-bold">{{ __('ui.vendi_subito') }}</h2>
                    <p class="lead fs-5">
                        Lorem ipsumm, dolor sit amet consectetur adipisicing elit. Dolor nemo culpa ipsa temporibus.
                    </p>
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12 align-self-top p-0 px-2 icon-header">
                                <h5 class="tc-main fw-black my-3">{{ __('ui.categorie') }}</h5>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 button-header"><i
                                            class="fas fa-tshirt"></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1 button-header"><i
                                            class="fas fa-home"></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1 button-header"><i
                                            class="fas fa-car-side"></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1 button-header"><i
                                            class="fas fa-briefcase"></i></button></a>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 img-fluid text-center">
                    <img src="./img/header.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </header>
    </section> --}}


    {{-- /*--------------------------------------------------------------
    # Search bar
    --------------------------------------------------------------*/ --}}
    <style>
        .searcher {
            background-color: #eaeced;
        }

    </style>
    <form action="{{ route('search.results') }}" method="get">
        <div class="row justify-content-center m-0 searcher">
            <div class="col-12 col-md-6  search-row  m-0 justify-content-center text-center">
                <div class="row justify-content-center text-center  mx-1">
                    <div class=" col-12 d-flex align-items-center justify-content-center">
                        <div class="input-group border rounded-pill p-1 icon-search">
                            <input type="text" name="query" placeholder="{{ __('ui.search') }}"
                                aria-describedby="button-addon3"
                                class="form-control form-control-search bg-none border-0">
                            <div class="input-group-append  justify-content-center text-center align-self-center">
                                <button id="button-addon3" type="submit" class="btn btn-link"><i
                                        class="fa fa-search "></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- /*--------------------------------------------------------------
    # Categorie
    --------------------------------------------------------------*/ --}}


    <!-- <section id="categories" class="categories section-category-header">
        <div class="container">
            <div class="section-title">
                <h2>Annunci</h2>
                <p>Scopri gli ultimi annunci</p>
            </div>
            <div class="row justify-content-around">
                @foreach ($announcements as $announcement)
                    @if ($announcement->is_accepted == true)
                        <div class="col-6 col-lg-2 mt-2 comp-product-card ">
                            <div class="product-card">
                                <div class="product-card-body">
                                    <div class="card-img-actions"> <img
                                            src="https://via.placeholder.com/150C/O https://placeholder.com/"
                                            class="card-img img-fluid" width="96" height="350" alt=""> </div>
                                </div>
                                <div class="product-card-body text-center m-2">
                                    <div class="mb-2">
                                        <h6 class="mb-2"> <a
                                                href="{{ route('announcement.show', compact('announcement')) }}"
                                                class="product-card-title mb-2"
                                                data-abc="true">{{ $announcement->title }}</a></h6>
                                        <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"
                                            class="text-muted" data-abc="true">
                                            {{ $announcement->category->name }}</a>
                                    </div>
                                    <h3 class="mb-0 font-weight-semibold">{{ $announcement->price }}€</h3>
                                    <p class="description">{{ $announcement->description }}</p>
                                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i
                                            class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                                    <div class="text-muted mb-3">{{ $announcement->created_at->format('j F Y') }}
                                    </div>
                                    <button type="button" class="btn btn-product-card"><i
                                            class="fa fa-cart-plus mr-2"></i>
                                        Add to cart</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section> -->

    {{-- <section id="categories" class="categories section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Annunci</h2>
                <p>Scopri gli ultimi annunci</p>
            </div>
            <div class="row justify-content-around">
                <div class="gallery js-flickity"
                    data-flickity-options='{ "freeScroll": true, "wrapAround": true,  "cellAlign": "left", "contain": false  }'>
                    @foreach ($announcements as $announcement)
                        @if ($announcement->is_accepted == true)
                            <div class="col-6 col-lg-2 mt-2 comp-product-card gallery-cell">
                                <div class="product-card">
                                    <div class="product-card-body">
                                        <div class="card-img-actions"> <img
                                                src="https://via.placeholder.com/150C/O https://placeholder.com/"
                                                class="card-img img-fluid" width="96" height="350" alt=""> </div>
                                    </div>
                                    <div class="product-card-body text-center m-2" style="height:300px;">
                                        <div class="mb-2">
                                            <h6 class="mb-2"> <a
                                                    href="{{ route('announcement.show', compact('announcement')) }}"
                                                    class="product-card-title mb-2"
                                                    data-abc="true">{{ $announcement->title }}</a></h6>
                                            <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"
                                                class="text-muted" data-abc="true">
                                                {{ $announcement->category->name }}</a>
                                        </div>
                                        <h3 class="mb-0 font-weight-semibold">{{ $announcement->price }}€</h3>
                                        <p class="description">{{ substr($announcement->description, 0, 10) . '..' }}
                                        </p>
                                        <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i
                                                class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                                        <div class="text-muted mb-3">{{ $announcement->created_at->format('j F Y') }}
                                        </div>
                                        <button type="button" class="btn btn-product-card"><i
                                                class="fa fa-cart-plus mr-2"></i>
                                            Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section id="categories" class="categories section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Annunci</h2>
                <p>Scopri gli ultimi annunci</p>
            </div>
            <div class="row justify-content-around">
                @foreach ($announcements as $announcement)
                    @if ($announcement->is_accepted == true)
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="col-8 offset-2 mt-2 comp-product-card gallery-cell">
                                    <div class="product-card">
                                        <div class="product-card-body">
                                            <div class="card-img-actions"> <img
                                                    src="https://via.placeholder.com/150C/O https://placeholder.com/"
                                                    class="card-img img-fluid" width="96" height="350" alt="">
                                            </div>
                                        </div>
                                        <div class="product-card-body text-center m-2" style="height:300px;">
                                            <div class="mb-2">
                                                <h6 class="mb-2"> <a
                                                        href="{{ route('announcement.show', compact('announcement')) }}"
                                                        class="product-card-title mb-2"
                                                        data-abc="true">{{ $announcement->title }}</a></h6>
                                                <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"
                                                    class="text-muted" data-abc="true">
                                                    {{ $announcement->category->name }}</a>
                                            </div>
                                            <h3 class="mb-0 font-weight-semibold">{{ $announcement->price }}€
                                            </h3>
                                            <p class="description">
                                                {{ substr($announcement->description, 0, 10) . '..' }}
                                            </p>
                                            <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i
                                                    class="fa fa-star star"></i> <i class="fa fa-star star"></i>
                                            </div>
                                            <div class="text-muted mb-3">
                                                {{ $announcement->created_at->format('j F Y') }}
                                            </div>
                                            <button type="button" class="btn btn-product-card"><i
                                                    class="fa fa-cart-plus mr-2"></i>
                                                Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                @endforeach
            </div>
        </div>
        </div>
    </section> --}}

    {{-- <section id="categories" class="categories section-category-header">
        <div class="container">
            <div class="section-title">
                <h2>{{__('ui.annunci')}}</h2>
                <p>{{__('ui.scopri')}}</p>
            </div>
            <div class="row justify-content-around">
                <div class="gallery js-flickity"
                    data-flickity-options='{ "freeScroll": true, "wrapAround": true,  "cellAlign": "left", "contain": false  }'>
                    @foreach ($announcements as $announcement)
                        @if ($announcement->is_accepted == true)
                        @foreach ($announcement->images as $image)
                        @php
                        $imagenum = $image->id-1
                        @endphp
                        <div class="col-6 col-lg-2 mt-2 comp-product-card gallery-cell">
                                @if ($imagenum < $image->id)
                                <div class="product-card">
                                    <div class="product-card-body">
                                        <div class="card-img-actions"> <img
                                                src="{{ $image->getUrl(400, 500) }}"
                                                class="card-img img-fluid" width="96" height="350" alt=""> </div>
                                    </div>
                                    @break;
                                    @endif
                                    @endforeach
                                    <div class="product-card-body text-center m-2" style="height:300px;">
                                        <div class="mb-2">
                                            <h6 class="mb-2"> <a
                                                    href="{{ route('announcement.show', compact('announcement')) }}"
                                                    class="product-card-title mb-2"
                                                    data-abc="true">{{ $announcement->title }}</a></h6>
                                            <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"
                                                class="text-muted" data-abc="true">
                                                {{ $announcement->category->name }}</a>
                                        </div>
                                        <h3 class="mb-0 font-weight-semibold">{{ $announcement->price }}€</h3>
                                        <p class="description">{{ substr($announcement->description, 0, 10) . '..' }}
                                        </p>
                                        <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i
                                                class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                                        <div class="text-muted mb-3">{{ $announcement->created_at->format('j F Y') }}
                                        </div>
                                        <button type="button" class="btn btn-product-card"><i
                                                class="fa fa-cart-plus mr-2"></i>
                                            Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}

    <section id="categories" class="categories section-bg categories-add-pb">
        <div class="container p-0">

            <div class="section-title">
                <h2>{{ __('ui.categorie') }}</h2>
                <p>{{ __('ui.scopri_categorie') }}</p>
            </div>

            <div class="row">
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-tshirt"></i></div>

                        <h4 class="title"><a href="">{{ __('ui.clothes') }}</a></h4>


                        {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate</p> --}}
                    </div>
                </div>

                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-home"></i></div>
                        <h4 class="title"><a href="">{{ __('ui.properties') }}</a></h4>
                        {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla</p> --}}
                    </div>
                </div>

                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-car-side"></i></div>
                        <h4 class="title"><a href="">{{ __('ui.autos') }}</a></h4>
                        {{-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim</p> --}}
                    </div>
                </div>

                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-briefcase"></i></div>
                        <h4 class="title"><a href="">{{ __('ui.office') }}</a></h4>
                        {{-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis
                            praesentium voluptatum</p> --}}
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- /*--------------------------------------------------------------
    # Ultimi annunci
    --------------------------------------------------------------*/ --}}

    <section id="" class="categories section-bg categories-add-pt">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('ui.annunci') }}</h2>
                <p>{{ __('ui.scopri') }}</p>
            </div>
            <div class="row justify-content-around m-0">
                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($announcements as $announcement)
                            @if ($announcement->is_accepted == true)
                                <div class="swiper-slide">
                                    <div class="col-8 mt-2 comp-product-card">
                                        <div class="product-card">
                                            <div class="product-card-body">
                                                <div class="card-img-actions">
                                                    @foreach ($announcement->images as $image)
                                                        @php
                                                            $imagenum = $image->id - 1;
                                                        @endphp
                                                        @if ($imagenum < $image->id)
                                                            <img src="{{ $image->getUrl(400, 500) }}"
                                                                class="card-img img-fluid" width="96" height="350"
                                                                alt="">
                                                        @break;
                                                    @endif
                            @endforeach
                    </div>
                </div>
                <div class="product-card-body text-center m-2">
                    <div class="mb-2">
                        <h6 class="mb-2"> <a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="product-card-title mb-2" data-abc="true">{{ $announcement->title }}</a></h6>
                        <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"
                            class="text-muted" data-abc="true">
                            {{ $announcement->category->name }}</a>
                    </div>
                    <h3 class="mb-0 font-weight-semibold">{{ $announcement->price }}€
                    </h3>
                    {{-- <p class="description">
                        {{ substr($announcement->description, 0, 10) . '..' }}
                    </p>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i
                            class="fa fa-star star"></i> <i class="fa fa-star star"></i>
                    </div>
                    <div class="text-muted mb-3">
                        {{ $announcement->created_at->format('j F Y') }}
                    </div> --}}
                    <a href="{{ route('announcement.show', compact('announcement')) }}" class="text-muted"
                        data-abc="true">
                        <button type="button" class="btn btn-product-card mt-3"><i class="fa fa-cart-plus mr-2"></i>
                            Show more</button></a>

                </div>
            </div>
        </div>
        </div>
        @endif
        @endforeach
        </div>

        {{-- <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div> --}}

        {{-- <!-- If we need pagination -->
                    <div class="swiper-pagination"></div> --}}

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        {{-- <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div> --}}
        </div>
        </div>
        </div>
    </section>

    {{-- /*--------------------------------------------------------------
    # Info section
    --------------------------------------------------------------*/ --}}

    {{-- <section id="section-info" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column justify-content-center">
                    <h1>Vendi il tuo usato o diventa un revisore</h1>
                    <h2>Nuove opportunità e tante offerte</h2>
                    <div>
                        <a href="#about" class="btn-get-started">Scopri</a>
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-1 section-info-img">
                    <img src="./img/header.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section> --}}

    <section id="section-info">
        <div class="container">
            <div class="row align-items-center g-2">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100"
                        src="/img/section-info.gif" alt="hero-header" /></div> 
                    <div class="col-md-7 col-lg-6 py-6 tc-gray justify-content-between px-4  order-md-1 order-2">
                        <h4 class="tc-main fw-black">{{ __('ui.acquista_subito') }}</h4>
                        {{-- <h2 class="display-4 tc-white fw-bold">Vendi i tuoi prodotti e acquista usato <span
                                class="display-4 tc-white fw-bold evidenziation">garantito</span> dal nostro team
                        </h2> --}}
                        <h4 class="display-4 tc-white fw-bold">{{ __('ui.vendi_subito') }}</h4>
                        <p class="lead fs-5">
                            Lorem ipsumm, dolor sit amet consectetur adipisicing elit. Dolor nemo culpa ipsa
                            temporibus.
                        </p>
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-12 align-self-top p-0 px-2 icon-header">
                                    {{-- <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-product-card p-3">
                                        Annunci <i class="fas fa-arrow-right ms-2"></i></i></button></a> --}}
                                    <h4 class="tc-main fw-black my-3">{{ __('ui.categorie') }}</h4>
                                    <a href="{{ route('homepage') }}"><button type="submit"
                                            class="btn p-3 button-header"><i
                                                class="fas fa-tshirt"></i></button></a>
                                    <a href="{{ route('homepage') }}"><button type="submit"
                                            class="btn p-3 ms-1 button-header"><i
                                                class="fas fa-home"></i></button></a>
                                    <a href="{{ route('homepage') }}"><button type="submit"
                                            class="btn p-3 ms-1 button-header"><i
                                                class="fas fa-car-side"></i></button></a>
                                    <a href="{{ route('homepage') }}"><button type="submit"
                                            class="btn p-3 ms-1 button-header"><i
                                                class="fas fa-briefcase"></i></button></a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>

    {{-- /*--------------------------------------------------------------
    # F.A.Q.
    --------------------------------------------------------------*/ --}}

    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div>

            <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a
                        erat
                        nam at
                        lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                            non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                            purus
                            non.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque
                        varius
                        morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                            velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                            pretium.
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis
                            massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                        consectetur
                        adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                            pulvinar
                            elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                            tellus
                            pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                            molestie at
                            elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci
                        dapibus.
                        Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                            velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                            pretium.
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis
                            massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                        pellentesque
                        nec
                        nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                            est
                            ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                            adipiscing
                            bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus
                        faucibus
                        ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                            class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                            integer
                            malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget
                            lorem
                            dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam
                            volutpat
                            commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc
                            non
                            blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>

    {{-- /*--------------------------------------------------------------
    # Row
    --------------------------------------------------------------*/ --}}

    <section id="header" class="d-flex align-items-center">
        <header class="container-fluid p-0 bg-home-header col-8 justify-content-center">
            <div class="row align-items-center ">
                <div class="col-12 col-lg-6 tc-gray justify-content-between px-4">
                    <h5 class="tc-main fw-black">{{ __('ui.acquista_subito') }}</h5>
                    {{-- <h2 class="display-4 tc-white fw-bold">Vendi i tuoi prodotti e acquista usato <span
                            class="display-4 tc-white fw-bold evidenziation">garantito</span> dal nostro team
                    </h2> --}}
                    <h2 class="display-4 tc-white fw-bold">{{ __('ui.vendi_subito') }}</h2>
                    <p class="lead fs-5">
                        Lorem ipsumm, dolor sit amet consectetur adipisicing elit. Dolor nemo culpa ipsa temporibus.
                    </p>
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12 align-self-top p-0 px-2 icon-header">
                                {{-- <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-product-card p-3">
                                    Annunci <i class="fas fa-arrow-right ms-2"></i></i></button></a> --}}
                                <h5 class="tc-main fw-black my-3">{{ __('ui.categorie') }}</h5>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 button-header"><i
                                            class="fas fa-tshirt"></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1 button-header"><i
                                            class="fas fa-home"></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1 button-header"><i
                                            class="fas fa-car-side"></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1 button-header"><i
                                            class="fas fa-briefcase"></i></button></a>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 img-fluid text-center">
                    <img src="./img/header.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </header>
    </section>


</x-layout>
