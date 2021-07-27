<x-layout>
<div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 offset-md-3 mt-5">
            <h1 class="mt-5">Inserisci il tuo annuncio</h1>
            <h4>al resto ci pensiamo noi..</h4>
<form method="POST" action="{{route('announcement.store')}}">
    @csrf
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Titolo Annuncio</label>
    <input type="text" name="title" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descrizione annuncio</label>
    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prezzo</label>
    <input type="number" name="price" class="form-control" id="exampleInputPassword1">
  </div>
  
<div class="mb-3">
<label for="categories" class="form-label">Categoria annuncio</label>
<select name="category" class="form-select">
  <option selected>Categorie</option>
  @foreach ($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
</select>
</div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>
            </div>
        </div>
</div>
</x-layout>