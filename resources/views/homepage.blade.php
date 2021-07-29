<x-layout>
    @push('title')
        Home | Presto.it
    @endpush


    {{-- /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/ --}}

    <section id="header" class="d-flex align-items-center">
        <header class="container-fluid p-0 bg-home-header col-8 justify-content-center ">
            <div class="row align-items-center ">
                <div class="col-12 col-lg-6 tc-gray justify-content-between px-4">
                    <h5 class="tc-main fw-black">Acquista subito e goditi i tuoi risparmi</h5>
                    <h2 class="display-4 tc-white fw-bold">Vendi i tuoi prodotti e acquista usato <span
                            class="display-4 tc-white fw-bold evidenziation">garantito</span> dal nostro team
                    </h2>
                    <p class="lead fs-5">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor nemo culpa ipsa temporibus
                        dolorem labore exercitationem? In perferendis nemo ex eligendi obcaecati aperiam consequatur
                    </p>
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12 align-self-top p-0 px-2 icon-header">
                                {{-- <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-product-card p-3">
                                    Annunci <i class="fas fa-arrow-right ms-2"></i></i></button></a> --}}
                                <h5 class="tc-main fw-black my-3">Main categories:</h5>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3"><i
                                            class="fas fa-tshirt fs-3"></i></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1"><i
                                            class="fas fa-home fs-3"></i></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1"><i
                                            class="fas fa-car-side fs-3"></i></i></button></a>
                                <a href="{{ route('homepage') }}"><button type="submit"
                                        class="btn btn-product-card p-3 ms-1"><i
                                            class="fas fa-briefcase fs-3"></i></i></button></a>


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

    <form action="{{ route('search.results') }}" method="get">
        <div class="row search-row p-3 m-0 justify-content-center text-center">

            <div class="col-10 col-lg-5 d-flex align-items-center ">
                <div class="input-group border rounded-pill p-1 icon-search">
                    <input type="text" name="query" placeholder="Cosa stai cercando?" aria-describedby="button-addon3"
                        class="form-control form-control-search bg-none border-0">
                    <div class="input-group-append  justify-content-center text-center align-self-center">
                        <button id="button-addon3" type="submit" class="btn btn-link"><i
                                class="fa fa-search "></i></button>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <!-- messaggio utente loggato -->
    @if (session('message'))
        {{-- <div class="alert alert-success">
            {{ session('message') }}
        </div> --}}
        <script>
            swal("Ben fatto!", "{{ session('message') }}", "success");
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


    {{-- /*--------------------------------------------------------------
    # Ultimi annunci
    --------------------------------------------------------------*/ --}}

    <section id="categories" class="categories section-category-header">
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
    </section>

    <section id="categories" class="categories section-category-header">
        <div class="container">
            <div class="section-title">
                <h2>Annunci</h2>
                <p>Scopri gli ultimi annunci</p>
            </div>
            <div class="row justify-content-around">
                @foreach ($announcements as $announcement)
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
                                        class="text-muted" data-abc="true"> {{ $announcement->category->name }}</a>
                                </div>
                                <h3 class="mb-0 font-weight-semibold">{{ $announcement->price }}€</h3>
                                <p class="description">{{ $announcement->description }}</p>
                                <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i
                                        class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                                <div class="text-muted mb-3">{{ $announcement->created_at->format('j F Y') }}</div>
                                <button type="button" class="btn btn-product-card"><i class="fa fa-cart-plus mr-2"></i>
                                    Add to cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- /*--------------------------------------------------------------
    # Categorie
    --------------------------------------------------------------*/ --}}

    <section id="categories" class="categories section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Categorie</h2>
                <p>Scopri tutte le nostre categorie</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-tshirt"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-home"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-car-side"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-briefcase"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis
                            praesentium voluptatum</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- /*--------------------------------------------------------------
    # Info section
    --------------------------------------------------------------*/ --}}

    <section id="section-info" class="d-flex align-items-center">
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
    </section>

    {{-- /*--------------------------------------------------------------
    # F.A.Q.
    --------------------------------------------------------------*/ --}}

    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div>

            <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat
                        nam at
                        lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
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
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                        consectetur
                        adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                            pulvinar
                            elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                            pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
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
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque
                        nec
                        nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
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
                            malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                            dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam
                            volutpat
                            commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non
                            blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>

</x-layout>
