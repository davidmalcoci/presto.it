<x-layout>

<section class="mt-5">
    <div class="container">
        <div class="row mt-5">
                <h1>{{$announcement->title}}</h1>
                <h3>{{$announcement->description}}</h3>
                <h3>Categoria: {{$announcement->category->name}}</h3>
                <h3>Prezzo: {{$announcement->price}}€</h3>
                <h3>Pubblicato il: {{$announcement->created_at->format('l jS F Y')}}</h3>
                {{-- Aggiungere immagini di placeholder.com con carousell o altro (più dettagli su Trello) --}}
        </div>
    </div>
    </section>
</x-layout>