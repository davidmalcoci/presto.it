<x-layout>
    @push('title')
         {{ $announcement->title }} | Presto.it
    @endpush




    <section id="product-show" class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
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

                <div class="col-md-6">

                    <a
                        href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}">
                        <h4 class=" mb-1">{{ $announcement->category->name }}</h4>
                    </a>
                    <div class="small mb-1">{{ $announcement->created_at->format('l jS F Y') }}</div>
                    <h1 class="display-5 fw-bolder">{{ $announcement->title }}</h1>
                    <div class="fs-5 mb-5">
                        <h2>{{ $announcement->price }}€</h2>
                    </div>
                    <p class="lead">{{ $announcement->description }}</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                            style="max-width: 3rem" />
                        <button type="button" class="btn btn-product-card"><i class="fa fa-cart-plus mr-2"></i>
                            Add to cart</button>
                        </button>
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
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, similique repudiandae numquam voluptate quia quam delectus aliquid! Quis minus praesentium corrupti maiores inventore ullam nostrum itaque enim fugiat eos! Illum?</p>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus quis ab unde reprehenderit omnis impedit cum ipsam earum! Beatae quos labore autem non eius quod doloribus. Dignissimos adipisci id sit?</p>
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
                                        src="https://via.placeholder.com/600C/O https://placeholder.com"><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="ms-3 media-body">
                                    <h5 class="mt-2 mb-1">Han Solo</h5>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i><i
                                            class="fa fa-xs fa-star text-warning"></i>
                                    </div>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore temporibus nesciunt doloremque officia voluptatem molestiae ducimus, amet necessitatibus dicta quia qui cum incidunt debitis delectus. Culpa similique recusandae optio aliquam!</p>
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
                              
                                <input class="" type="text" name="name" id="name"
                                    placeholder="Nome" required="required">
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

                        <input class="" type="email" name="email" id="emailReview"
                            placeholder="Email" required="required">
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
