@push('title')
    Registra account | Presto.it
@endpush
<x-layout>
    <div class="container ">
        <div class="row  div-login">
            <div id="header" class="col-12 col-md-6">
                <img src="./img/register-illustration.svg" class="img-fluid animated" alt="">
            </div>
            <div class="col-12 col-md-6 ">
                <div class="form-container sign-in-container">
                    <form class="form-login" method="POST" action="{{ route('register') }}">
                        @csrf

                        <h1>Registrati</h1>
                        <h6>ricevi offerte e novità</h6>
                        <div class="mb-3">
                            <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"
                                name="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password_confirmation" id="exampleInputPassword1"
                                placeholder="Conferma password">
                        </div>
                        <p>Già registrato? <a href="{{ route('login') }}">{{__('ui.nav_login')}}</a></p>
                        <button type="submit" class="button-login">Registrati</button>
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
