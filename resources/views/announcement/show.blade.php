<x-layout>
    @push('title')
        Dettaglio {{ $announcement->title }}
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
                                <a href="" class="gallery__hero-enlarge ir" data-gallery="zoom">Zoom</a>
                
                                <img src="https://via.placeholder.com/600C/O https://placeholder.com">
                            </div>
                            <!--Gallery Hero-->
                
                            <!--Gallery Thumbs-->
                            <div class="gallery__thumbs">
                
                                <a href="https://via.placeholder.com/600C/O https://placeholder.com"
                                    data-gallery="thumb" class="is-active">
                                    <img
                                        src="https://via.placeholder.com/600C/O https://placeholder.com">
                                </a>
                
                                <a href="https://via.placeholder.com/600/0000FF/808080 ?Text=Digital.com"
                                    data-gallery="thumb">
                                    <img
                                        src="https://via.placeholder.com/600/0000FF/808080 ?Text=Digital.com">
                                </a>
                
                                <a href="https://via.placeholder.com/600/FF0000/FFFFFF?Text=Down.com"
                                    data-gallery="thumb">
                                    <img
                                        src="https://via.placeholder.com/600/FF0000/FFFFFF?Text=Down.com">
                                </a>
                
                                <a href="https://via.placeholder.com/600C/O https://placeholder.com"
                                data-gallery="thumb" class="is-active">
                                <img
                                    src="https://via.placeholder.com/600C/O https://placeholder.com">
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


</x-layout>
