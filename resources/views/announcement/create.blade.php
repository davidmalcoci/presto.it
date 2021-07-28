@push('title')
    Inserisci annuncio | Presto.it
@endpush

<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 div-login">
                <div class="form-container sign-in-container">
                    <form class="form-login" method="POST" action="{{ route('announcement.store') }}">
                        @csrf
                        <h1>Inserisci annuncio</h1>
                        <span>al resto ci pensiamo noi</span>
                        <div class="mb-3 mt-5">
                            <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Titolo Annuncio" name="title">
                        </div>
                        <div class="mb-3">
                            <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Descrizione annuncio" name="description">
                        </div>

                        <div class="mb-3">
                            <input type="number" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Prezzo" name="price">
                        </div>

                        <div class="mb-3">
                            <label for="categories" class="form-label">Categoria annuncio</label>
                            <select name="category" class="form-select">
                                <option selected>Categorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="button-login">Crea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
