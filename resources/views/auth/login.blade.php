@push('title')
Accedi
@endpush
<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mt-5">

                    <form method="POST" action="{{route('login')}}">
                        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
            </div>
        </div>
    </div>
</x-layout>