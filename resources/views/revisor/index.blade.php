<x-layout>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-3">
                <div class="rounded ">
                    <h1 class="scritta-rev text-center pb-2">
                        revisor dashboard
                    </h1>
                </div>
            </div>
        </div>
        @if ($article_to_check)
        <div class="row justify-content-center align-items-center pt-5">
            <div class="col-md-8">
               {{-- messaggio snipped --}}
                @if(session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-5 alert alert-success text-center shadow rounded">
                        {{ session('message') }}
                    </div>
                </div>
                @endif
                {{-- fine messaggio snipped --}}
                <div class="row justify-content-center">
                    @for($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-4 mb-4 text-center">
                        <img src="https://picsum.photos/300" 
                        class="img-fluid rounded shadow"
                        alt="immagine segnaposto"
                        >
                    </div>
                    @endfor
                </div>           
            </div>
            <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
            <div>
                <h1>{{ $article_to_check->title }}</h1>
                <h3>Autore: {{ $article_to_check->user->name }}</h3>
                <h4>{{ $article_to_check->price }} €</h4>
                <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                <p class="h6">{{ $article_to_check->description }}</p>
            </div>
            <div class="d-flex pb-4 justify-content-around">
                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button></form>
                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button  class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                </form>
            </div>
        </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center text-center ">
            <div class="col-12 py-5">
                <h1 class="fst-italic display-5">
                    Non ci sono articoli da revisionare
                </h1>
                </div>
                <div class="col-12 ">
                <a href="{{ route('homepage') }}" class="py-2 my-3 dett-btn">Torna alla homepage</a>
            </div>
        </div>
        @endif
    </div>
</x-layout>
