<x-layout>
@push('title')
        User Profile: {{$user->name}}
    @endpush
    <style>
        .profile-wrapper{
            text-color:black;
        }
        </style>
<div class="container-fluid">
        <div class="row profile-wrapper mt-5">
            <div class="col-12 col-md-6 offset-md-3 user-profile mt-5">
                <h1 class="text-center fw-bold pt-5">Welcome {{$user->name}}</h1>
                <img src="https://icon-library.com/images/anonymous-icon/anonymous-icon-3.jpg" class="img-fluid rounded-circle d-block mx-auto" alt="">
                <h4 class=" pt-3 text-center mt-3">You signed up with the following information:</h4>
                <p class=" text-center pt-5">Email: {{$user->email}}</p>
                <p class=" text-center">Username: {{$user->name}}</p>
                <!-- @foreach($announcements as $announcement)
                <p>{{$announcement}}</p>
                @endforeach -->
                <!-- <p class=" text-center">Total Posts: {{$announcements->count()}}</p> -->
                <p class=" text-center">Member since: {{$user->created_at->format('d/m/y')}}</p>
                <p class=" text-center">Points: {{$announcements->count() * 10}}</p>
                @if($announcements->count() * 10 <= 20)
                <!-- <p class=" text-center">Rank status: <span class="text-warning">{{$starter}}</span></p> -->
                <!-- <p class="small  text-center">Your next rank is Veteran at 100 days</p> -->
                @else 
                <p class=" text-center">Rank status: <span class="text-warning">Veteran*</span></p>
                @endif

            </div>
            <div class="col-12 col-md-4 offset-md-4 pt-5">
                <!-- <h3 class=" mb-5 text-center summary">Summary of your posts:</h3> -->
                </div>
                <div class="col-12 cold-md-3 pb-4 d-flex align-items-center justify-content-center flex-wrap">
                @foreach($announcements as $announcement)

                    <div class="card cards-summary  card-has-bg click-col" style="background-image:url({{Storage::url($announcement->img)}})">
                        <img class="card-img d-none" src="{{Storage::url($article->img)}}" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">{{$announcement->title}}</small>
                                <h4 class="card-title mt-0 "><a class=" article-decoration" href="{{route('article.show', compact('article'))}}">{{$article->description}}</a></h4>
                                <small><i class="far fa-clock"></i> {{$announcement->created_at->format('d/m/y')}}</small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <img class="mr-3 rounded-circle" src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="Generic placeholder image" style="max-width:50px">
                                    <div class="media-body">
                                        <h6 class="my-0  d-block fw-bold">{{$announcement->user_id}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    </x-layout>