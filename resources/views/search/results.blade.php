<x-layout>
    <section class="mt-5">
        <div class="row d-flex align-items-center justify-content-center mt-3">

            @foreach ($announcements as $announcement)
            <div class="col-6 col-lg-2 mt-2 comp-product-card">
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
                        <div class="text-muted mb-3"></div>
                        <button type="button" class="btn btn-product-card"><i class="fa fa-cart-plus mr-2"></i>
                            Add to cart</button>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- @if(!$announcements)
                <h3>Nessun annuncio trovato</h3>
            @endif -->
        </div>
    </section>
</x-layout>