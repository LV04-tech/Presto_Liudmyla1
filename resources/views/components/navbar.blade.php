<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        
        <a class="navbar-brand" href=" {{ route ('homepage')}}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
        
        <div class=" col-12 col-md-6 collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link home-custom" aria-current="page" href="{{ route ('homepage') }}">{{__("ui.homepage")}}</a>
                </li>
                @auth 
                
                {{-- zona revisore --}}
                @if(Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link rev-btn " href="{{ route('revisor.index') }}"> {{__("ui.auditorArea")}}
                        <span 
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ \App\Models\Article::toBeRevisionedCount()}}
                    </span>
                </a>
            </li>
            @endif
            {{-- fine zona revisore --}}
            
        </li>
        
        
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('article.index') }}">{{__("ui.allArticles")}}</a>
        </li>
        
        
        
        {{-- categorie  --}}
        <li class="nav-item dropdown">
            <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               {{__("ui.categories")}}
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item text-capitalize" href=" {{ route('byCategory', ['category' => $category]) }}"> {{__("ui.$category->name")}}</a>
                </li>
                @if (!$loop->last)
                <hr class="dropdown-divider">
                @endif
                @endforeach
            </ul>
        </li>
        {{-- fine categorie  --}}
        
        
        
        <li class="nav-item dropdown utente">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("ui.hello")}}, {{ Auth::user()->name}}
            </a>
            
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                </li>
                <form action="{{ route('logout')}}" method="post" class="d-none" id="form-logout">@csrf</form>
            </ul>
        </li>
        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle utente" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("ui.helloUser")}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href=" {{ route ('login')}}">{{__("ui.login")}}</a></li>
                <hr class="dropdown-divider">
                <li><a class="dropdown-item" href="{{ route ('register') }}">{{__("ui.signUp")}}</a></li>
            </ul>      
        </div>
        
        @endauth
    </div> 
    {{-- lang  --}}
    <x-_locale lang="it"/>
    <x-_locale lang="uk"/>
    <x-_locale lang="ua"/>

    {{-- fine lang  --}}
    
    {{-- search  --}}
    <div class="container">
            <div class="row">
                <div class="col-8">
            <form class="d-flex ms-auto" role="search" action="{{ route('article.search') }}" method="GET">
                
                <div class="input-group">
                    <input type="cerca" name="query" class="form-control" placeholder=" {{__("ui.search")}}" aria-label="cerca">
                    <button type="submit" class="input-group-text"  id="basic-addon2">
                 <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
            </div>
            </div>
        </div>
            {{-- fine search  --}}
        
</nav>