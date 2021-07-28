<x-layout>
@push('title')
        Categoria {{ $name }}
    @endpush
    <section class="section-category-header">
        <div class="container">
            <div class="section-title">
                <h2>{{$name}}</h2>
                <p>Scopri gli ultimi annunci</p>
            </div>
        </div>
    </section>


    {{-- <section class="mt-5">
        @foreach ($announcements as $announcement)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $announcement->title }}</h5>
                    <p class="card-text">{{ $announcement->description }}</p>
                    <a href="{{ route('announcement.show', compact('announcement')) }}"
                        class="btn btn-primary">Dettagli..</a>
                </div>
            </div>
        @endforeach
    </section> --}}


    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($announcements as $announcement)
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
                                        type="button" class="btn btn-category-card"><i class="far fa-eye"></i></i>
                                        Scopri di più</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


</x-layout>
