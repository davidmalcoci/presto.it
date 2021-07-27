<x-layout>
    <section class="mt-5">
    @foreach ($announcements as $announcement)
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$announcement->title}}</h5>
    <p class="card-text">{{$announcement->description}}</p>
    <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-primary">Dettagli..</a>
  </div>
</div>
@endforeach
</section>
</x-layout>