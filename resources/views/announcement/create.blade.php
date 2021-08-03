@push('title')
    Inserisci annuncio | Presto.it
@endpush

<x-layout>
    <div class="container">
        <style>
            .div-login{
                height: 100%;
            }
        </style>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 div-login">
                <div class="form-container sign-in-container">
                    <form class="form-login" method="POST" action="{{ route('announcement.store') }}">
                        @csrf
                        <h1>Inserisci annuncio</h1>
                        <span>al resto ci pensiamo noi</span>
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
                            <label for="">Titolo:</label>
                            <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="" name="title" value="{{old('title')}}">
                        </div>
                        <div class="mb-3">
                            <label for="">Descrizione:</label>
                            <textarea type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                               name="description" value="{{old('description')}}">
                            </textarea>    
                        </div>

                        <div class="mb-3">
                            <label for="">Prezzo:</label>
                            <input type="number" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="" name="price" value="{{old('price')}}">
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
                        
                        <input 
                            type="hidden"
                            name="uniqueSecret"
                            value="{{ $uniqueSecret }}">

                        <div class="form-group row">
                            <label for="images" class="col-md-12 col-form-label text-md-left">Immagini</label>
                            <div class="col-md-12">
                                <div class="dropzone" id="drophere"></div>
                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
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
