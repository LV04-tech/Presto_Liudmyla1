<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 py-5">
                <h1 class="index-custom">TUTTI GLI ARTICOLI</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
            <div class="col-12 col-md-3 card-shape">
                <x-card :article="$article" />
            </div>
        @empty
                <div class="col-12">
                    <h3 class="text-center text">
                        Non sono ancora stati creati articoli
                    </h3>
                </div> 
        @endforelse     
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>