<x-layout>
    @push('title')
        Dashboard revisore
    @endpush

    <section class="section-category-revisor">
        <header class="section-header pb-4 m-0">
            <section class="section-category-search">
                <div class="container">
                    <div class="section-title">
                        <h2>Area revisore</h2>
                        <p>Benvenuto {{ Auth::user()->name }}</p>
                        <h6 class="text-muted">In questa area, puoi revisionare gli annunci inviati dai nostri utenti.
                            Se hai problemi, <a href="contact.html">contattaci</a>.</h6>
                    </div>
                </div>
            </section>
        </header>
    </section>


    <div class="row section-smile pt-5 m-0">
        <div class="section-title">
            @if (!$announcement)
                <h3>Non ci sono annunci da revisionare</h3>
                <div class="row justify-content-center">
                    <div class="col-4"><img style="max-height:300px; margin:30px;" src="/img/smile.gif" alt=""></div>
                </div>
                <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-product-card p-3 mt-5">
                        Torna alla home <i class="fas fa-arrow-right ms-2"></i></i></button></a>

            @else
                <h3>Hai <span>{{ \App\Models\Announcement::ToBeRevisionedCount() }}</span> annunci da revisionare
                </h3>
            @endif
        </div>
    </div>


    <div id="revisor-show" class="row justify-content-center align-items-center border-bottom pb-5">

        <div class=" col-12 col-md-8 px-4 px-lg-5 ">
            <div class="row gx-4 gx-lg-5 align-items-start">

                @if ($announcement)
                    <div class="col-md-6">
                        {{-- <img class="card-img-top mb-5 mb-md-0" src="https://via.placeholder.com/600C/O https://placeholder.com/" alt="..." /> --}}
                        <div class="container-gallery">

                            <!-- Gallery -->
                            <div id="js-gallery" class="gallery">
                                <!--Gallery Hero-->
                                <div class="gallery__hero">
                                    @foreach ($announcement->images as $image)
                                        @php
                                            $imagenum = $image->id - 1;
                                        @endphp
                                        @if ($imagenum < $image->id)
                                            <a href="{{ $image->getUrl(500, 500) }}" class="gallery__hero-enlarge ir"
                                                data-gallery="zoom"></a>
                                            <img src="{{ $image->getUrl(500, 500) }}">
                                        @break;
                                    @endif
                @endforeach
            </div>
            <!--Gallery Hero-->

            <!--Gallery Thumbs-->
            <div class="gallery__thumbs">
                @foreach ($announcement->images as $image)
                    <a href="{{ $image->getUrl(500, 500) }}" data-gallery="thumb" class="is-active">
                        <img src="{{ $image->getUrl(500, 500) }}" alt="">
                    </a>
                @endforeach
            </div>
            <!--Gallery Thumbs-->
        </div>
        <!--.gallery-->
        <!-- Gallery -->

    </div>

    </div>

    <div class="col-md-6 mt-5 ">
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

        <div class="d-flex pt-3 mb-5 border-bottom">

            <form class="mb-5" action="{{ route('revisor.accept', [$announcement->id]) }}" method="post">
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

        <div id="check-image" class="row mt-5 mb-5 justify-content-start">
            <h2>Controllo immagini</h2>
            <p class="text-muted text-left">Qui troverai i controlli per le immagini che hai caricato. Se hai problemi, <a
                    href="contact.html">contattaci</a>.</p>
            @php
                $i = 0;
                $i = 'a';
                $x = 0;
    
            @endphp
            @foreach ($announcement->images as $image)
                @php
                    $i++;
                    $x++;
                @endphp
                <div class="col-lg-8 col-10 p-0 justify-content-center">
                    <p>
                        <a class="btn-accordion" data-bs-toggle="collapse" href="#<?php echo $i; ?>" role="button"
                            aria-expanded="false" aria-controls="{{ $i }}">
                            <i class="fas fa-chevron-down me-5"></i> Image {{ $x }} 
                        </a>
                    </p>
                    <div class="collapse" id="{{ $i }}">
                        <div class="row d-flex ">
                            <div class="col-6 me-5">
                                <h4>Photos Summary:</h4>                            
                                    <p>Adult : <span>{{ $image->adult }}</span></p>
                                    <p>Spoof:  <span>{{ $image->spoof }}</span></p>
                                    <p>Medical:  <span>{{ $image->medical }}</span></p>
                                    <p>Violence:  <span>{{ $image->violence }}</span></p>
                                    <p>Racy:  <span>{{ $image->racy }}</span></p>                            
                            </div>
                            <div class="col-3 pb-5">
                                @if ($image->labels)
                                <h4>Image tags:</h4>          
                                    @foreach ($image->labels as $label)
                                        <p class="m-0">- {{ $label }}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>



    </div>

    @endif

</div>
    </div>

    </div>


    <section class="p-0 container-trash">
        {{-- @if ($announcements = !0) --}}
        <section class="section-category-revisortrash">
            <div class="container">
                <div class="section-title">
                    <h2>Ripristina stato</h2>
                    <p>Il tuo cestino</p>
                </div>
            </div>
        </section>
        {{-- @endif --}}

        <div id="content ">
            <div class="container mb-5">
                <div class="row bar mb-0">
                    <div id="customer-orders" class="col-md-12">
                        <p class="text-muted text-center mb-5">Qui visualizzerai il tuo cestino, puoi ripristinare lo
                            stato degli annunci
                            rifiutati. Se hai problemi, <a href="contact.html">contattaci</a>.</p>
                        <div class="box mt-0 mb-lg-0">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titolo</th>
                                            <th>Prezzo</th>
                                            <th>Descrizione</th>
                                            <th>Stato</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($announcements as $single)
                                            @if ($single->is_accepted === 0)
                                                <tr>
                                                    <th>{{ $single->id }}</th>
                                                    <td class="text-start">{{ $single->title }}</td>
                                                    <td class="text-start">{{ $single->price }}€</td>
                                                    <td class="text-start "> {{ $single->description }}
                                                    </td>
                                                    <td class="text-start"><span
                                                            class="badge badge-danger">Rifiutato</span></td>
                                                    <td class="col-1 text-start">
                                                        <form action="{{ route('revisor.nullify', [$single->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-category-card d-flex align-items-center">
                                                                <i class="fas fa-undo me-2"></i> Redo</button></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-layout>
