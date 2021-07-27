<x-layout>


    <div class="container">
        <div class="row mt-5">
                <h1>{{$announcement->title}}</h1>
                <h3>{{$announcement->description}}</h3>
                <h3>{{$announcement->category->name}}</h3>
                <h3>{{$announcement->price}}€</h3>
                <h3>{{$announcement->created_at}}</h3>
                {{-- Aggiungere immagini di placeholder.com con carousell o altro (più dettagli su Trello) --}}
        </div>
    </div>

</x-layout>