<x-layout>
    @push('title')
        Dashboard revisore
    @endpush
    <section id="product-show" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center offset-md-4 flex-column" style="border: 1px solid black; width: 300px, border-radius: 15px">
                @if ($announcement)
                    <img src="https://via.placeholder.com/150C/O https://placeholder.com/" alt="">
                    <h3>ID Utente:{{$announcement->user->id}}</h3>
                    <h2>Nome Utente:{{$announcement->user->name}}</h2>
                    <h5>Email Utente:{{$announcement->user->email}}</h5>
                    <h2>Titolo Annuncio:{{$announcement->title}}</h2>
                    <h4>Descrizione:{{$announcement->description}}</h4>
                    <h5>Data:{{$announcement->created_at->format('l jS F Y')}}</h5>

                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center offset-md-4 flex-column"
                    style="border: 1px solid black; width: 300px, border-radius: 15px">
                    <img src="https://via.placeholder.com/150C/O https://placeholder.com/" alt="">
                    <h3>{{ $announcement->user->id }}</h3>
                    <h2>{{ $announcement->user->name }}</h2>
                    <h5>{{ $announcement->user->email }}</h5>
                    <h2>{{ $announcement->title }}</h2>
                    <h4>{{ $announcement->description }}</h4>
                    <h5>{{ $announcement->created_at->format('l jS F Y') }}</h5>
                    <div class="d-flex justify-content-center">
                        <form action="{{route('revisor.accept', [$announcement->id])}}" method="post">
                        @csrf    
                            <button class="btn btn-success" style="width: 100px" type="submit">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="{{route('revisor.reject', [$announcement->id])}}" method="post">
                        @csrf    
                            <button class="btn btn-danger" style="width: 100px" type="submit">
                               
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
        <div>
 
         </div>
       
         @else 
         <h1>Non ci sono annunci da revisionare</h1>
         @endif
    </section>


</x-layout>
