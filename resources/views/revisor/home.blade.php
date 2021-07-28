<x-layout>
    @push('title')
        Dashboard revisore 
    @endpush
    
    <section id="product-show" class="py-5">
        <h1 class="mt-5">Area revisore</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center offset-md-4 flex-column" style="border: 1px solid black; width: 300px, border-radius: 15px">
                    
                    <img src="https://via.placeholder.com/150C/O https://placeholder.com/" alt="">
                    <h3>{{$announcement->user->id}}</h3>
                    <h2>{{$announcement->user->name}}</h2>
                    <h5>{{$announcement->user->email}}</h5>
                    <h2>{{$announcement->title}}</h2>
                    <h4>{{$announcement->description}}</h4>
                    <h5>{{$announcement->created_at->format('l jS F Y')}}</h5>

                    <div class="d-flex justify-content-center">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-times"></i>

                    </div>

                </div>
              
            </div>

        </div>

        <div>
 
         </div>
       
    </section>
    

</x-layout>