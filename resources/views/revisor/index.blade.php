<x-layout>

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-3">
                <div class="rounded ">
                    <h1 class="scritta-rev text-center pb-2">
                       {{__("ui.revisorDashboard")}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
     @if($article_to_check)
     <div class="row justify-content-center align-items-center py-5">
    {{-- Sezione Immagini dell'articolo --}}
        @if($article_to_check->images->count() )
             @foreach ($article_to_check->images as $key => $image)
               <div class="col-6 col-md-4 mb-4 text-center">
                  <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow" alt="Immagine {{$key +1}} dell'articolo {{ $article_to_check->title }}">
               </div>
            @endforeach
        @else
        {{-- Segnaposto se l'articolo non ha immagini caricate --}}
            @for($i = 0; $i < 6; $i++)
               <div class="col-12 col-md-4 mb-4 text-center">
                        <img src="https://picsum.photos/100" 
                        class="img-fluid rounded shadow"
                        alt="immagine segnaposto">
                </div>
            @endfor
        @endif
              {{-- Dettagli dell'articolo --}}
            <div class="col-md-8 ps-4 d-flex flex-column justify-content-between">
                <h1> {{ $article_to_check->title }}</h1>
                <h3>Autore: {{ $article_to_check->user->name }}</h3>
                <h4>{{ $article_to_check->price }} €</h4>
                <h4 class="fst-italic text-muted">#{{$article_to_check->category->name }}</h4>
                <p class="h6">{{ $article_to_check->description }}</p>
            </div>

             {{-- Pulsanti di approvazione/rifiuto --}}
            <div class="d-flex pb-4 justify-content-around">
                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold">{{__("ui.decline")}}</button></form>
                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button  class="btn btn-success py-2 px-5 fw-bold">{{__("ui.admit")}}</button>
                </form>
            </div>
         </div>   
          {{-- fine Pulsanti di approvazione/rifiuto --}}
    @else
    {{-- BLOCCO B: La coda è vuota --}}
    <div class="row justify-content-center align-items-centertext-center ">
            <div class="col-12 py-5 align-items-center text-center">
                <h1 class="fst-italic display-5">
                   {{__("ui.nothingToCheck")}}
                </h1>
                <p class="text-muted"> La coda di revisione è vuota</p>
                <a href="{{ route('homepage') }}" class="py-2 my-3 dett-btn"> {{__("ui.backHome")}}</a>
            </div>
    </div>
    
   @endif

</x-layout>   
