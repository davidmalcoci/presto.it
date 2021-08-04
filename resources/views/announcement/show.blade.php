<x-layout>
    @push('title')
        {{ $announcement->title }} | Presto.it
    @endpush




    <section id="product-show" class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
            @if ($announcement)
                <div class="col-md-6">
                    {{-- <img class="card-img-top mb-5 mb-md-0" src="https://via.placeholder.com/600C/O https://placeholder.com/" alt="..." /> --}}
                    <div class="container-gallery">

                        <!-- Gallery -->
                        <div id="js-gallery" class="gallery">

                            <!--Gallery Hero-->
                            <div class="gallery__hero">
                            @foreach($announcement->images as $image)
                                @php
                                $imagenum = $image->id-1
                                @endphp
                               
                                @if ($imagenum < $image->id)
                                <a href="{{$image->getUrl(400, 500)}}" class="gallery__hero-enlarge ir" data-gallery="zoom"></a>
                                    <img src="{{$image->getUrl(400, 500)}}">
                                @break;
                                @endif
                                @endforeach
                            </div>
                            <!--Gallery Hero-->

                            <!--Gallery Thumbs-->
                            <div class="gallery__thumbs">
                                @foreach($announcement->images as $image)
                                    <a href="{{$image->getUrl(400, 500)}}"
                                        data-gallery="thumb" class="is-active">
                                        <img src="{{ $image->getUrl(80, 80)}}" alt="">
                                    </a>
                                    @endforeach
                                </div>
                            <!--Gallery Thumbs-->

                        </div>
                        <!--.gallery-->
                        <!-- Gallery -->

                    </div>

                </div>
                @endif

                <div class="col-lg-6 col-xl-4 pt-4 order-1 order-lg-2 ml-lg-auto">
                    <div class="sticky-top" style="top: 100px;">
                        <h1 class="display-5 fw-bolder mb-4">{{ $announcement->title }}</h1>
                        <div
                            class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <ul class="list-inline mb-2 mb-sm-0">
                                <li class="list-inline-item h4 font-weight-light mb-0">{{ $announcement->price }}€</li>
                                <li class="list-inline-item text-muted font-weight-light">
                                    <del>2000.00€</del>
                                </li>
                            </ul>                            
                        </div>

                        <div class="d-flex align-items-center text-sm">
                            <ul class="list-inline mr-2 mb-4">
                                <li class="list-inline-item mr-0"><i class="fa fa-star" style="color: var(--orange) !important;"></i></li>
                                <li class="list-inline-item mr-0"><i class="fa fa-star" style="color: var(--orange) !important;"></i></li>
                                <li class="list-inline-item mr-0"><i class="fa fa-star" style="color: var(--orange) !important;"></i></li>
                                <li class="list-inline-item mr-0"><i class="fa fa-star" style="color: var(--orange) !important;"></i></li>
                                <li class="list-inline-item mr-0"><i class="fa fa-star" style="color: var(--gray) !important;"></i></li>
                            </ul><span class="text-muted text-uppercase ms-3 mb-4">25 reviews</span>
                        </div>

                        <p class="mb-4 text-muted">{{ $announcement->description }}
                        </p>
                        <form id="buyForm" action="#">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-lg-6 detail-option mb-4">
                                    <h6 class="detail-option-heading">Quantità:</h6>
                                    <select class="selectpicker" name="size" data-style="btn-selectpicker">
                                        <option value="value_0">10</option>
                                        <option value="value_1">12</option>
                                        <option value="value_2">14</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-lg-6 detail-option mb-4">
                                    <h6 class="detail-option-heading">Pagamento:</h6>
                                    <label class="btn btn-product-card text-white"
                                        for="material_0" style="background-color: var(--orange) !important;"><i class="fas fa-university fs-4 p-1"></i>
                                    </label>
                                    <label class="btn btn-product-card text-white"
                                        for="material_1" style="background-color: var(--orange) !important;"><i class="fas fa-money-check-alt  fs-4 p-1"></i>
                                    </label>
                                </div>
                            </div>
                            <div class=" d-flex mb-5">
                                <button type="button" class="btn btn-product-cart"><i class="fa fa-cart-plus mr-2"></i>
                                    Add to cart </button>
                                </button>
                                {{-- <input class="form-control text-center ms-3" id="inputQuantity" type="num" value="1"
                                style="max-width: 3rem" />                             --}}
                            </div>
                            <div class="row mb-4 d-flex">
                                <div class="col-6"><i class="far fa-heart mr-2 fs-3"></i>
                                    <i class="fas fa-share-alt ms-4 fs-3"></i>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <div class="d-flex"><p class="me-1">Categoria:  </p> <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"><h5 class=" m-0">  {{ $announcement->category->name }}</h5></a></div>
                                Aggiunto il: <a class="text-muted" href="#">{{ $announcement->created_at->format('d F Y') }}</a>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 border-bottom">
        <div class="container">

            {{-- /* ------ Tab Header ------ */ --}}
            <ul class="nav nav-tabs flex-column flex-sm-row" role="tablist">
                <li class="nav-item"><a class="nav-link detail-nav-link active" data-toggle="tab" href="#description"
                        role="tab">Description</a></li>
                <li class="nav-item"><a class="nav-link detail-nav-link" data-toggle="tab"
                        href="#additional-information" role="tab">Additional Information</a></li>
                <li class="nav-item"><a class="nav-link detail-nav-link" data-toggle="tab" href="#reviews"
                        role="tab">Reviews</a></li>
            </ul>

            {{-- /* ------ Tab Content ------ */ --}}
            <div class="tab-content py-4 ">

                {{-- /* ------ 1 ------ */ --}}
                <div class="tab-pane fade show active px-3" id="description" role="tabpanel">
                    <div class="row">
                        <div class="col-md-9">
                            <h5>About</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi,
                                similique repudiandae numquam voluptate quia quam delectus aliquid! Quis minus
                                praesentium corrupti maiores inventore ullam nostrum itaque enim fugiat eos! Illum?</p>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus
                                quis ab unde reprehenderit omnis impedit cum ipsam earum! Beatae quos labore autem non
                                eius quod doloribus. Dignissimos adipisci id sit?</p>
                            <h5>Lorem ipsum</h5>
                            <ul class="text-muted">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                        {{-- <div class="col-md-5"><img class="img-fluid"
                                src="https://via.placeholder.com/600C/O https://placeholder.com" alt="">
                        </div> --}}
                    </div>
                </div>
                {{-- /* ------ 2 ------ */ --}}
                <div class="fade tab-pane" id="additional-information" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table text-sm">
                                <tbody>
                                    <tr>
                                        <th class="font-weight-normal border-0">Titolo</th>
                                        <td class="text-start text-muted border-0">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-normal ">Materiale</th>
                                        <td class="text-start text-muted ">LOLDuis aute irure dolor in reprehenderit
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-normal ">Peso</th>
                                        <td class="text-start text-muted ">dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-normal ">Dimensione</th>
                                        <td class="text-start text-muted ">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="table text-sm">
                                <tbody>
                                    <tr>
                                        <th class="font-weight-normal border-0">Colore</th>
                                        <td class="text-start text-muted border-0">dolor sit amet </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-normal ">Anno d'acquisto</th>
                                        <td class="text-start text-muted ">Lorem ipsum dolor sit amet </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-normal ">Impatto Ambientale</th>
                                        <td class="text-start text-muted ">Lorem ipsum dolor sit amet </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-normal ">Costo</th>
                                        <td class="text-start text-muted ">LOLDuis aute irure dolor in reprehenderit
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- /* ------ 3 ------ */ --}}
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="row mb-5">
                        <div class="col-lg-10 col-xl-9">
                            {{-- /* ------ Review ------ */ --}}
                            <div class="media review">
                                <div class="text-center mr-4 mr-xl-5"><img class="review-image"
                                        src="https://via.placeholder.com/600C/O https://placeholder.com"><span
                                        class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="ms-3 media-body">
                                    <h5 class="mt-2 mb-1">Han Solo</h5>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i>
                                    </div>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore temporibus nesciunt doloremque officia voluptatem molestiae ducimus, amet
                                        necessitatibus dicta quia qui cum incidunt debitis delectus. Culpa similique
                                        recusandae optio aliquam!</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form-container">
        <div class="container">

            <div class="py-5 px-3">
                <h5 class="mb-4">Lascia una recensione</h5>
                <form class="mb-4 form" id="reviewForm" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="" type="text" name="name" id="name" placeholder="Nome"
                                    required="required">
                            </div>
                        </div>
                        <div class="col-sm-6 text-center align-self-center">
                            <div class="form-group">
                                {{-- <label class="form-label" for="rating">Your rating *</label> --}}
                                <select class="custom-select focus-shadow-0" name="rating" id="rating">
                                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                                    <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                                    <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                                    <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                                    <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <input class="" type="email" name="email" id="emailReview" placeholder="Email"
                            required="required">
                    </div>
                    <div class="form-group">

                        <textarea class="form-control" rows="4" name="review" id="reviewReview"
                            placeholder="Scrivi qualcosa" required="required"></textarea>
                    </div>
                    <button type="button" class="btn btn-product-card mt-3">Invia</button>
                    </button>
                </form>
            </div>
        </div>
    </section>

</x-layout>
