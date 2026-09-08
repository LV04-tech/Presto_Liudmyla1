<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        
        <!-- LOGO HOMEPAGE (Resta fisso a sinistra) -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('homepage') }}"> 
            <span class="icon-circle-custom">
                <i class="fa-solid fa-house"></i>
            </span> 
            Presto.it
        </a>

        <!-- HAMBURGER BUTTON PER MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- CONTENITORE PRINCIPALE (Grazie a ms-auto spinge tutto a destra) -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- 1. I LINK DEL MENU (Spinti a destra tramite ms-auto) -->
            <ul class="navbar-nav ms-auto align-items-lg-center gap-3">
                
                @auth 
                    {{-- zona revisore --}}
                    @if(Auth::user()->is_revisor)
                        <li class="nav-item position-relative">
                            <a class="nav-link rev-btn" href="{{ route('revisor.index') }}"> 
                                {{__("ui.auditorArea")}}
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ \App\Models\Article::toBeRevisionedCount()}}
                                </span>
                            </a>
                        </li>
                    @endif
                    {{-- fine zona revisore --}}
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.index') }}">{{__("ui.allArticles")}}</a>
                    </li>
                    
                    {{-- categorie --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           {{__("ui.categories")}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item text-capitalize" href="{{ route('byCategory', ['category' => $category]) }}">
                                        {{__("ui.$category->name")}}
                                    </a>
                                </li>
                                @if (!$loop->last)
                                    <li><hr class="dropdown-divider"></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    {{-- fine categorie --}}
                    
                    {{-- dropdown utente loggato --}}
                    <li class="nav-item dropdown utente">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__("ui.hello")}}, {{ Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout')}}" method="post" class="d-none" id="form-logout">@csrf</form>
                        </ul>
                    </li>
                @else
                    {{-- dropdown utente ospite --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle utente" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__("ui.helloUser")}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('login') }}">{{__("ui.login")}}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">{{__("ui.signUp")}}</a></li>
                        </ul>      
                    </li>
                @endauth

                <!-- 2. SEZIONE SELEZIONE LINGUE (Allineata nel flusso di destra) -->
                <li class="nav-item d-flex gap-2 mx-lg-2 class-flags">
                    <x-_locale lang="it"/>
                    <x-_locale lang="uk"/>
                    <x-_locale lang="ua"/>
                </li>

                <!-- 3. BARRA DI RICERCA (Inserita nel flusso a destra, larghezza controllata) -->
                <li class="nav-item">
                    <form class="d-flex" role="search" action="{{ route('article.search') }}" method="GET" style="max-width: 250px;">
                        <div class="input-group">
                            <!-- Nota: modificato type="cerca" in type="search" per standard HTML -->
                            <input type="search" name="query" class="form-control" placeholder="{{__("ui.search")}}" aria-label="cerca">
                            <button type="submit" class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </li>

            </ul>
        </div>
        
    </div> 
</nav>
