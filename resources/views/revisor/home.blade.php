<x-layout>
    @push('title')
        Dashboard revisore
    @endpush
    <section class="section-category-revisor">
        <div class="container">
            <div class="section-title">
                <h2>Area revisore</h2>
                <p>Benvenuto {{ Auth::user()->name }}</p>
                <h3>Hai <span>{{ \App\Models\Announcement::ToBeRevisionedCount() }}</span> annunci da revisionare</h3>
            </div>
        </div>
    </section>

    <div class="row icon-revisor">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <i class="fas fa-arrow-down px-3"></i>
            <i class="fas fa-arrow-down px-3"></i>
            <i class="fas fa-arrow-down px-3"></i>
        </div>
    </div>


    <section id="revisor-show" class="py-5">

        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-start">

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
                            <div class="small mb-0"><span>Date:</span>{{ $announcement->created_at->format('j F Y') }}
                            </div>
                        </div>
                    </div>
                    <h1 class="display-5 fw-bolder">{{ $announcement->title }}</h1>
                    <div class="fs-5 mb-2 price">
                        <h2>{{ $announcement->price }}<span>€</span></h2>
                    </div>
                    <p class="lead">{{ $announcement->description }}</p>
                    <div class="d-flex pt-3">
                        <button type="button" class="btn btn-product-card">
                            Approva <i class="fa fa-check ms-2"></i></button>
                        </button>
                        <button type="button" class="btn2 btn-product-card ms-3">
                            Rifiuta <i class="fas fa-times ms-2"></i></i></button>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section id="product-show" class="py-5">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center offset-md-4 flex-column"
                    style="border: 1px solid black; width: 300px, border-radius: 15px">
                    <img src="https://via.placeholder.com/150C/O https://placeholder.com/" alt="">
                    <h3>{{ $announcement->user->id }}</h3>
                    <h2>{{ $announcement->user->name }}</h2>
                    <h5>{{ $announcement->user->email }}</h5>
                    <h2>{{ $announcement->title }}</h2>
                    <h4>{{ $announcement->description }}</h4>
                    <h5>{{ $announcement->created_at->format('l jS F Y') }}</h5>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('revisor.accept', [$announcement->id]) }}" method="post">
                            @csrf
                            <button type="submit">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>
                        <form action="{{ route('revisor.reject', [$announcement->id]) }}" method="post">
                            @csrf
                            <button type="submit">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>



            </div>
    </section>


</x-layout>
