@push('title')
    Accedi
@endpush
<x-layout>
    {{-- <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mt-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>

                </form>
                <p>Non sei ancora registrto? <a href="{{ route('register') }}">Registrati adesso</a></p>
            </div>
        </div>
    </div> --}}


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 div-login">
                <div class="form-container sign-in-container">
                    <form class="form-login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Log in</h1>
                        <span>entra nella community</span>
                        <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"
                            name="email">
                        <input type="password" id="exampleInputPassword1" placeholder="Password" name="password">
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
