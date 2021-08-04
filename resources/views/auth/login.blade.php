@push('title')
    Accedi | Presto.it
@endpush
<x-layout>
    <div class="container">
        <div class="row  div-login">
            <div id="header" class="col-12 col-md-6">
                <img src="./img/login-illustration.svg" class="img-fluid animated" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container sign-in-container">
                    <form class="form-login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="mb-3">Log in</h1>
                        <h6>ricevi offerte e novità</h6>
                        <div class="mb-3">
                            <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"
                                name="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <p>Non sei ancora registrato? <a href="{{ route('register') }}">Registrati adesso</a></p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="button-login">Accedi</button>
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
