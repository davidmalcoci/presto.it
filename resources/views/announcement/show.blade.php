<x-layout>
@push('title')
        Dettaglio {{ $announcement->title }}
    @endpush
    {{-- <section class="mt-5">
        <div class="container">
            <div class="row mt-5">
                <h1>{{ $announcement->title }}</h1>
                <h3>{{ $announcement->description }}</h3>
                <h3>Categoria: {{ $announcement->category->name }}</h3>
                <h3>Prezzo: {{ $announcement->price }}€</h3>
                <h3>Pubblicato il: {{ $announcement->created_at->format('l jS F Y') }}</h3>
            </div>
        </div>
    </section> --}}

    <section id="product-show" class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="https://via.placeholder.com/600C/O https://placeholder.com/" alt="..." /></div>
                <div class="col-md-6">
                    <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"><h4 class=" mb-1">{{ $announcement->category->name }}</h4></a>
                    <div class="small mb-1">{{ $announcement->created_at->format('l jS F Y') }}</div>
                    <h1 class="display-5 fw-bolder">{{ $announcement->title }}</h1>
                    <div class="fs-5 mb-5">
                        <h2>{{ $announcement->price }}€</h2>
                    </div>
                    <p class="lead">{{ $announcement->description }}</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                            style="max-width: 3rem" />
                        {{-- <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart --}}

                        <button type="button" class="btn btn-product-card"><i class="fa fa-cart-plus mr-2"></i>
                            Add to cart</button>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
