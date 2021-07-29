@push('title')
    Lavora con noi | Presto.it
@endpush
<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 div-login">
                <div class="form-container sign-in-container">
                    <form class="form-login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Diventa revisore</h1>
                        <span>Lavora con noi</span>
                        <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"
                            name="email">
                        <input type="text" placeholder="Nome" name="name">
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="button-login">Invia richiesta</button>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
