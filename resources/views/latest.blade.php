<x-layout>
@push('title')
        Tutti gli annunci
    @endpush
<div class="row mt-5">
                                <div id="showProducts" class="container mt-5">
                                    @foreach ($announcements as $announcement)
                                    @foreach($announcement->images as $image)
                                    @php
                                $imagenum = $image->id-1
                                @endphp
                                @if ($imagenum < $image->id)
                                        <div class="card-product-search">
                                            <img class="card__image"
                                                src="{{Storage::url($image->file)}}" />
                                                @break;
                                @endif
                                @endforeach
                                            <main class="card__content">
{{-- 
                                                <a href="{{ route('category.show', [$announcement->category->name, $announcement->category->id]) }}"
                                                    class="text-muted" data-abc="true"> <small
                                                        class="card__tag">{{ $announcement->category->name }}</small>
                                                </a> --}}

                                                <h1 class="mb-2 card__head mt-2"> <a
                                                        href="{{ route('announcement.show', compact('announcement')) }}"
                                                        class="product-card-title mb-2"
                                                        data-abc="true">{{ $announcement->title }}</a>
                                                </h1>

                                                <span class="card__date">Creato il:
                                                    {{ $announcement->created_at->format('d/m/y') }}</span>
                                                <p class="card__text">{{ $announcement->description }}</p>
                                                <h3 class="mb-0 font-weight-semibold mb-4">{{ $announcement->price }}€
                                                </h3>

                                                <button type="button" class="btn btn-product-card"><i
                                                        class="fa fa-cart-plus mr-2"></i>
                                                    Add to cart</button>


                                                <button type="button" class="btn btn-product-card-show"><i
                                                        class="far fa-eye mr-2"></i>
                                                    Show more</button>
                                            </main>
                                        </div>
                                    @endforeach

                                    <!-- @if (!$announcements) <h3>Nessun annuncio trovato</h3> @endif -->
                                </div>
                            </div>
</x-layout>