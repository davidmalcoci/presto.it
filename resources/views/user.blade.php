<x-layout>
    @push('title')
        Account {{ $user->name }} | Presto.it
    @endpush
    <style>
        .profile-wrapper {
            text-color: black;
        }

        .profile {
            box-shadow: 1px 3px 4px grey;
        }

    </style>
    {{-- <div class="container-fluid">
        <div class="row profile-wrapper mt-5">
            <div class="col-12 col-md-6 offset-md-3 user-profile mt-5">
                <h1 class="text-center fw-bold pt-5">Welcome {{ $user->name }}</h1>
                <img src="https://icon-library.com/images/anonymous-icon/anonymous-icon-3.jpg"
                    class="img-fluid rounded-circle d-block mx-auto profile" alt="">
                <h4 class=" pt-3 text-center mt-3">You signed up with the following information:</h4>
                <p class=" text-center pt-5">Email: {{ $user->email }}</p>
                <p class=" text-center">Username: {{ $user->name }}</p>
                <!-- @foreach ($announcements as $announcement) <p>{{ $announcement }}</p> @endforeach -->
                <!-- <p class=" text-center">Total Posts: {{ $announcements->count() }}</p> -->
                <p class=" text-center">Member since: {{ $user->created_at->format('d/m/y') }}</p>
                <p class=" text-center">Points: {{ $announcements->count() * 10 }}</p>
                @if ($announcements->count() * 10 <= 20)
                    <!-- <p class=" text-center">Rank status: <span class="text-warning">{{ $starter }}</span></p> -->
                    <!-- <p class="small  text-center">Your next rank is Veteran at 100 days</p> -->
                @else
                    <p class=" text-center">Rank status: <span class="text-warning">Veteran*</span></p>
                @endif

            </div>
            <div class="col-12 col-md-4 offset-md-4 pt-5">
                <!-- <h3 class=" mb-5 text-center summary">Summary of your posts:</h3> -->
            </div>
            <div class="col-12 cold-md-3 pb-4 d-flex align-items-center justify-content-center flex-wrap">
                @foreach ($announcements as $announcement)

                    <div class="card cards-summary  card-has-bg click-col"
                        style="background-image:url({{ Storage::url($announcement->img) }})">
                        <img class="card-img d-none" src="{{ Storage::url($article->img) }}"
                            alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">{{ $announcement->title }}</small>
                                <h4 class="card-title mt-0 "><a class=" article-decoration"
                                        href="{{ route('article.show', compact('article')) }}">{{ $article->description }}</a>
                                </h4>
                                <small><i class="far fa-clock"></i>
                                    {{ $announcement->created_at->format('d/m/y') }}</small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <img class="mr-3 rounded-circle"
                                        src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png"
                                        alt="Generic placeholder image" style="max-width:50px">
                                    <div class="media-body">
                                        <h6 class="my-0  d-block fw-bold">{{ $announcement->user_id }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}


    <div class="container light-style flex-grow-1 container-p-y container-user">
        <div class="row profile-wrapper ">
   
        <div id="user-card" class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content p-5">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="card-body media align-items-center">
                                <img src="https://icon-library.com/images/anonymous-icon/anonymous-icon-3.jpg" alt=""
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <button class="navbar-btn-annuncio pointer "><label class="m-0 pointer">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput">
                                        </label> &nbsp;
                                    </button>
                                    <button class="navbar-btn-annunciored pointer ">Reset</button>

                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">

                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="{{ $user->email }}">
                                    <div class="mt-3 mb-2">
                                        Member since: <br>
                                        <p href="javascript:void(0)"> {{ $user->created_at->format('d/m/y') }}</p>
                                    </div>
                                    <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div>
                                </div>
                                <hr class="border-light m-0 mt-5 mb-5">
                                <div class="form-group">
                                    Account type:
                                    @if (Auth::user()->is_revisor)
                                        <h5 class="text-secondary mb-1 mt-2">Revisor user</h5>
                                    @else
                                        <h5 class="text-secondary mb-1 mt-2">Default user</h5>
                                    @endif
                                </div>
                                <div class="d-flex">
                                    @if (Auth::user()->is_revisor)
                                        <div class="align-self-center">
                                            <a href="{{ route('revisor.home') }}">
                                                <button class="btn btn-user-card my-2 me-5">
                                                    <div lass="nav-link"> {{ __('ui.nav_revisor') }}</div>
                                                    {{-- <div class="revisore-badge">{{\App\Models\Announcement::ToBeRevisionedCount()}}</div> --}}
                                                </button>
                                            </a>
                                        </div>
                                    @endif

                                    <button class="btn btn-category-card my-2"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">{{ __('ui.nav_logout') }}</a>
                                        <form method="POST" action="{{ route('logout') }}" id="form-logout">
                                            @csrf
                                        </form>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control"
                                        rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="text" class="form-control" value="May 3, 1995">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="custom-select">
                                        <option>Lombardia</option>
                                        <option selected="">Basilicata</option>
                                        <option>Toscana</option>
                                        <option>Piemonte</option>
                                        <option>Lazio</option>
                                    </select>
                                </div>


                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">

                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+0 (123) 456 7891">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" value="">
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" value="https://twitter.com/user">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" value="https://www.facebook.com/user">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Discord</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value="https://www.instagram.com/user">
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <div class="card-body">
                                <h5 class="mb-2">
                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                            class="ion ion-md-close"></i> Remove</a>
                                    <i class="ion ion-logo-google text-google"></i>
                                    You are connected to Google:
                                </h5>
                                nmaxwell@mail.com
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-facebook">Connect to
                                    <strong>Facebook</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-instagram">Connect to
                                    <strong>Instagram</strong></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right m-3 row-btn-user">
            <button type="button" class="btn btn-user-card my-2 me-1">Save changes</button>&nbsp;
            <button type="button" class="btn navbar-btn-annunciored">Cancel</button>
        </div>

    </div>


</div>

</x-layout>
