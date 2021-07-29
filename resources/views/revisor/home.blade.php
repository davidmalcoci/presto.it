<x-layout>
    @push('title')
        Dashboard revisore
    @endpush

    <section class="section-category-revisor">
        <div class="container">
            <div class="section-title">
                <h2>Area revisore</h2>
                <p>Benvenuto {{ Auth::user()->name }}</p>
                @if (!$announcement)
                    <h3>Non ci sono annunci da revisionare</h3>
                    <div class="row justify-content-center">
                        <div id="sprites" class="col-4"></div>
                    </div>
                    <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-product-card p-3 mt-5">
                            Torna alla home <i class="fas fa-arrow-right ms-2"></i></i></button></a>

                @else
                    <h3>Hai <span>{{ \App\Models\Announcement::ToBeRevisionedCount() }}</span> annunci da revisionare
                    </h3>
                @endif
            </div>
        </div>
    </section>

    {{-- style="background-image: url('{{asset('assets/img/graph/animation-smile.jpg')}}');" --}}

    <!-- <div class="row icon-revisor">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <i class="fas fa-arrow-down px-3"></i>
            <i class="fas fa-arrow-down px-3"></i>
            <i class="fas fa-arrow-down px-3"></i>
        </div>
    </div> -->


    <div id="revisor-show" class="">

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-start">

                @if ($announcement)
                    <div class="col-md-6">
                        {{-- <img class="card-img-top mb-5 mb-md-0" src="https://via.placeholder.com/600C/O https://placeholder.com/" alt="..." /> --}}
                        <div class="container-gallery">

                            <!-- Gallery -->
                            <div id="js-gallery" class="gallery">

                                <!--Gallery Hero-->
                                <div class="gallery__hero">
                                    {{-- <a href="" class="gallery__hero-enlarge ir" data-gallery="zoom">Zoom</a> --}}

                                    <img src="https://via.placeholder.com/600C/O https://placeholder.com">
                                </div>
                                <!--Gallery Hero-->

                                <!--Gallery Thumbs-->
                                <div class="gallery__thumbs">

                                    <a href="https://via.placeholder.com/600C/O https://placeholder.com"
                                        data-gallery="thumb" class="is-active">
                                        <img src="https://via.placeholder.com/600C/O https://placeholder.com">
                                    </a>

                                    <a href="https://via.placeholder.com/600/0000FF/808080 ?Text=Digital.com"
                                        data-gallery="thumb">
                                        <img src="https://via.placeholder.com/600/0000FF/808080 ?Text=Digital.com">
                                    </a>

                                    <a href="https://via.placeholder.com/600/FF0000/FFFFFF?Text=Down.com"
                                        data-gallery="thumb">
                                        <img src="https://via.placeholder.com/600/FF0000/FFFFFF?Text=Down.com">
                                    </a>

                                    <a href="https://via.placeholder.com/600C/O https://placeholder.com"
                                        data-gallery="thumb" class="is-active">
                                        <img src="https://via.placeholder.com/600C/O https://placeholder.com">
                                    </a>

                                </div>
                                <!--Gallery Thumbs-->

                            </div>
                            <!--.gallery-->
                            <!-- Gallery -->

                        </div>

                    </div>

                    <div class="col-md-6 mt-5">
                        <div class="user-revisor d-flex">
                            <div class="col-3 justify-content-center align-self-center text-center">
                                <i class="fas fa-user-circle fs-1"></i>
                            </div>
                            <div class=" col-9 my-3">
                                <div class="d-flex align-items-end">
                                    <h4 class=" mb-0"><span>Utente:</span>{{ $announcement->user->name }}</h4>
                                </div>

                                <h6 class=" mb-0"><span>Id:</span>{{ $announcement->user->id }}</h6>
                                <div class="small mb-0"><span>Email:</span>{{ $announcement->user->email }}</div>
                                <div class="small mb-0">
                                    <span>Date:</span>{{ $announcement->created_at->format('j F Y') }}
                                </div>
                            </div>
                        </div>
                        <h1 class="display-5 fw-bolder">{{ $announcement->title }}</h1>
                        <div class="fs-5 mb-2 price">
                            <h2>{{ $announcement->price }}<span>€</span></h2>
                        </div>
                        <p class="lead">{{ $announcement->description }}</p>
                        <div class="d-flex pt-3">


                            <form action="{{ route('revisor.accept', [$announcement->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-product-card">
                                    Approva <i class="fa fa-check ms-2"></i></button>
                            </form>

                            <form action="{{ route('revisor.reject', [$announcement->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn2 btn-product-card ms-3">
                                    Rifiuta <i class="fas fa-times ms-2"></i></button>
                            </form>


                        </div>
                    </div>

                @endif

            </div>
        </div>

    </div>

    <section class="py-5 container-trash">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div id="card-product-category" class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://via.placeholder.com/300C/O https://placeholder.com/"
                                alt="{{ $announcement->title }}" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div id="badge" class="badge"">Offerta</div>
                                    <h3 class="fw-bolder">{{ $announcement->title }}</h3>
                                    <h4 class="">{{ $announcement->price }}€</h4>
                                </div>
                                <p class="card-text">{{ $announcement->description }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <a href="{{ route('announcement.show', compact('announcement')) }}"><button
                                        type="button" class="btn btn-category-card"><i class="fas fa-undo ms-2"></i>
                                        Scopri di più</button></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>


    @foreach ($announcements as $single)
        @if ($single->is_accepted === 0)
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    {{ $single->title }}
                    <form action="{{ route('revisor.nullify', [$single->id]) }}" method="post">
                        @csrf
                        <button type="submit" class="btn2 btn-product-card ms-3">
                            Redo <i class="fas fa-undo ms-2"></i></button>
                    </form>
                </div>
            </div>

        @endif
    @endforeach


</x-layout>
