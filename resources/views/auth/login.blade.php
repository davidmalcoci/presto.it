@push('title')
    Accedi
@endpush
<x-layout>
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
