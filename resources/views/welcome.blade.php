<x-layout>
    <div class="container-fluid text-center welcome">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-4 wel-scritta ">Welcome to Presto.it</h1>
                <div class="my-3">
                    
                    <a class="welcome-btn" href="{{ route ('create.article')}}">Publica un articolo</a>   
                    
                </div>
                
                <div class="row d-flex justify-content-center align-items-center py-5 ">
                    @forelse ($articles as $article)
                    <div class="col-12 col-md-3 card-shape">
                        <x-card :article="$article" />
                    </div>
                    @empty
                    <div class="col-12">
                        <h3 class="text-center text-white">
                            Non sono ancora stati creati articoli
                        </h3>
                    </div>
                    @endforelse
                </div>
            </div>
            </div>
        
    </div>
</x-layout>