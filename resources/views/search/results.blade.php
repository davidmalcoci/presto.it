<x-layout>

    @push('title')
        Risultati ricerca | Presto.it
    @endpush

    <section class="mt-5">
        <div class="row d-flex align-items-center justify-content-center m-0">
            <div class="app">

                <header class="section-header pb-4 m-0">
                    <section class="section-category-search border-bottom">
                        <div class="container">
                            <div class="section-title">
                                <h2>Risultati</h2>
                                <p>Scopri gli ultimi annunci</p>
                            </div>
                        </div>
                    </section>
                </header>

            </div>
            <!-- ---- -->
            <section class="section-content">
                <div class="container">
                    <div class="row m-0 p-0">
                        {{-- ---------- Side bar - Filters  ---------- --}}
                        <aside class="col-md-3 sticky">
                            <div class="aside-filter">
                                <article class="filter-group">
                                    <header class="card-header d-flex">
                                        <a href="#" data-toggle="collapse" data-target="#collapse_1"
                                            aria-expanded="true" class="">
                                            <div class="d-flex">
                                                <i class="icon-control fa fa-chevron-down pe-3"></i>
                                                <h6 class="title m-0">Categoria</h6>
                                            </div>
                                        </a>
                                    </header>
                                    <div class="filter-content collapse show card-body" id="collapse_1" style="">
                                        <div class="form-inline">
                                            <label class=" my-2">Categoria</label>
                                            <select class="mr-2 form-control" id="mySelect" value="Scegli categoria">
                                                <option value="Motori">Motori</option>
                                                <option value="Informatica">Informatica</option>
                                                <option value="Elettrodomestici">Elettrodomestici</option>
                                                <option value="Libri">Libri</option>
                                                <option value="Giochi">Giochi</option>
                                                <option value="Sport">Sport</option>
                                                <option value="Immobili">Immobili</option>
                                                <option value="Telefoni">Telefoni</option>
                                                <option value="Arredamento">Arredamento</option>
                                            </select>
                                            <label class=" mt-4 mb-2">Sub-category</label>
                                            <select class="mr-2 form-control" id="mySelect">
                                                <option value="Motori">Motori</option>
                                                <option value="Informatica">Informatica</option>
                                                <option value="Elettrodomestici">Elettrodomestici</option>
                                                <option value="Libri">Libri</option>
                                                <option value="Giochi">Giochi</option>
                                                <option value="Sport">Sport</option>
                                                <option value="Immobili">Immobili</option>
                                                <option value="Telefoni">Telefoni</option>
                                                <option value="Arredamento">Arredamento</option>
                                            </select>
                                            <div class="input-group-append my-4">
                                                <button type="button" class="btn btn-product-card"><i
                                                        class="fa-search fa mr-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article> <!-- filter-group  .// -->
                                <article class="filter-group">
                                    <header class="card-header d-flex">
                                        <a href="#" data-toggle="collapse" data-target="#collapse_3"
                                            aria-expanded="true" class="">
                                            <div class="d-flex">
                                                <i class="icon-control fa fa-chevron-down pe-3"></i>
                                                <h6 class="title m-0">Prezzo</h6>
                                            </div>
                                        </a>
                                    </header>
                                    <div class="filter-content collapse show" id="collapse_3" style="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Min</label>
                                                    <input class="form-control" placeholder="€0" type="number"
                                                        id="userInputFilterCostOne">
                                                </div>
                                                <div class="form-group text-right col-md-6">
                                                    <label>Max</label>
                                                    <input class="form-control" placeholder="€1,0000" type="number"
                                                        id="userInputFilterCostTwo">
                                                </div>
                                            </div>
                                            <div class="input-group-append my-4">
                                                <button type="button" class="btn btn-product-card"><i
                                                        class="fa-search fa mr-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="filter-group">
                                    <header class="card-header d-flex">
                                        <a href="#" data-toggle="collapse" data-target="#collapse_4"
                                            aria-expanded="true" class="">
                                            <div class="d-flex">
                                                <i class="icon-control fa fa-chevron-down pe-3"></i>
                                                <h6 class="title m-0">Luogo</h6>
                                            </div>
                                        </a>
                                    </header>
                                    <div class="filter-content collapse show card-body" id="collapse_4" style="">
                                        <div class="form-inline">
                                            <label class=" my-2">Paese</label>
                                            <input class="form-control" placeholder="es. Italy" type="text"
                                                id="userInputFilterCostTwo">
                                            <label class=" mt-4 mb-2">Regione</label>
                                            <input class="form-control" placeholder="es. Campania" type="text"
                                                id="userInputFilterCostTwo">
                                            <label class=" mt-4 mb-2">Città</label>
                                            <input class="form-control" placeholder="es. Salerno" type="text"
                                                id="userInputFilterCostTwo">

                                            <div class="input-group-append my-4">
                                                <button type="button" class="btn btn-product-card"><i
                                                        class="fa-search fa mr-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article> <!-- filter-group  .// -->
                            </div>
                        </aside>
                        {{-- ---------- Row on top  ---------- --}}
                        <main class="col-md-9">
                            <header class="border-bottom mb-4 pb-3">
                                <div class="form-inline">
                                    <span class="mr-md-auto" id="numberItems">Total Announcements: {{$announcements->count()}}</span>
                                </div>
                            </header>
                            {{-- ---------- Result - Card Product  ---------- --}}
                            <div class="row">
                                <div id="showProducts" class="container">
                                    @foreach ($announcements as $announcement)
                                    @foreach ($announcement->images as $image)
                                    @php
                                                $imagenum = $image->id - 1;
                                            @endphp
                                            @if ($imagenum < $image->id)
                                        <div class="card-product-search">
                                            <img class="card__image"
                                                src="{{ $image->getUrl(500, 500) }}" />
                                                @break;
                                        @endif
                                    @endforeach
                                            <main class="card__content">

                                                <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"
                                                    class="text-muted" data-abc="true"> <small
                                                        class="card__tag">{{ $announcement->category->name }}</small>
                                                </a>

                                                <h1 class="mb-2 card__head mt-2"> <a
                                                        href="{{ route('announcement.show', compact('announcement')) }}"
                                                        class="product-card-title mb-2"
                                                        data-abc="true">{{ $announcement->title }}</a>
                                                </h1>

                                                <span class="card__date">Creato il:
                                                    {{ $announcement->created_at }}</span>
                                                <p class="card__text">{{ $announcement->description }}</p>
                                                <h3 class="mb-0 font-weight-semibold mb-4">{{ $announcement->price }}€
                                                </h3>

                                                <button type="button" class="btn btn-product-card"><i
                                                        class="fa fa-cart-plus mr-2"></i>
                                                    Add to cart</button>


                                                <a href="{{ route('announcement.show', compact('announcement')) }}""><button
                                                        type="button" class="btn btn-product-card-show"><i
                                                            class="far fa-eye mr-2"></i>
                                                        Show more</button></a>
                                            </main>
                                        </div>
                                    @endforeach

                                    <!-- @if (!$announcements) <h3>Nessun annuncio trovato</h3> @endif -->
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </section>


            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
            </script>


        </div>
    </section>
</x-layout>
