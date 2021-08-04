@push('title')
    Inserisci annuncio | Presto.it
@endpush  

<x-layout>
    <div class="container">
        <style>
            .div-login {
                height: 100%;
            }

        </style>
        <div id="create" class="row div-login user-create">
            <div id="header" class="col-12 col-md-6">
                <h1>Inserisci annuncio</h1>
                <h3>Ricevi offerte e novità</h3>
                <div class="d-flex mt-3 mb-3 align-items-center">
                    <span><i class="fas fa-university"></i></i></span>
                    <h6>Opportunità e finanziamenti per grandi acquisti</h6>
                </div>
                <div class="d-flex mt-3 mb-3 align-items-center">
                    <span><i class="fas fa-cash-register"></i></span>
                    <h6>Guadagna subito dalle cose che non usi più</h6>
                </div>
                <div class="d-flex mt-3 mb-3 align-items-center">
                    <span><i class="fas fa-credit-card"></i></span>
                    <h6>Ricevi tutto sulla tua carta</h6>
                </div>
                <img src="./img/create-illustration-01.svg" class="img-fluid animated" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container sign-in-container">
                    <form class="form-login" method="POST" action="{{ route('announcement.store') }}">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3 mt-5">
                            <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titolo"
                                name="title" value="{{ old('title') }}">
                        </div>
                        <div class="mb-3">
                            <textarea placeholder="Scrivi qualcosa..." name="description"
                                value="{{ old('description') }}"></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="number" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Prezzo" name="price" value="{{ old('price') }}">
                        </div>

                        <div class="mb-3">
                            <select name="category" class="form-select">
                                <option selected>Categoria annuncio</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" name="uniqueSecret" value="{{ $uniqueSecret }}">

                        <div class="form-group row">
                            <label for="images" class="col-md-12 col-form-label text-md-left">Immagini</label>
                            <div class="col-md-12">
                                <div class="dropzone" id="drophere"></div>
                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <button type="submit" class="button-login mb-5">Crea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
