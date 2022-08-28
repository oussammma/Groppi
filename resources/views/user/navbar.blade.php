<header class="bg-light w-100 py-0">
    <nav class="nav1 py-2">
        <div class="d-flex head-1">
            <a href="{{ route('magasin.index') }}">Nos magasins</a>
            <div class="appelez ms-4">Appelez-nous: <span>+212 655-181079</span></div>
        </div>
        <div class="head-2">
            <a href="{{ route('service.index') }}" class="me-4">Nos services</a>
            <a href="{{ route('contact.index') }}">Contactez-nous</a>
        </div>
    </nav>
    <nav class="nav2 row align-items-center justify-content-between">
        <div class="col-3 col-lx-6 logo text-end d-flex align-items-center">
            <div class="toggle">
                <button><i class="fa-solid fa-bars"></i></button>
            </div>
            <a href="{{ route('index') }}"><img src="/upload/logo.png" alt="Groppi" width="250px"></a>
        </div>
        <div class="col-8 searsh">
            <input type="search" name="search_user" id="search" placeholder="Rechercher" autocomplete="off">
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            <div id="countryList"></div>
        </div>
        {{-- {{ csrf_field() }} --}}
        </div>
        <div class="col-2 d-flex align-items-cente justify-content-around searsh-heart">
            <button class="get-searsh"><i class="fa-solid fa-magnifying-glass"></i></button>
            <div class="heart">
                <i class="fa-solid fa-heart fs-3"></i>
            </div>
        </div>
    </nav>
    <nav class="nav3">
        <ul class="categorie d-flex align-items-center justify-content-around w-100">
            <li class="categorie-name"><a class="categorie-link" href="{{ route('index') }}"><i
                        class="fa-solid fa-house"></i>Accueil</a>
            </li>
            <li class="categorie-name"><a class="categorie-link" href="{{ route('chien.index') }}"><i
                        class="fa-solid fa-dog"></i>chiens</a></li>
            <li class="categorie-name"><a class="categorie-link" href="{{ route('chat.index') }}"><i
                        class="fa-solid fa-cat"></i>chats</a>
            </li>
            <li class="categorie-name"><a class="categorie-link" href="{{ route('oiseaux.index') }}"><i
                        class="fa-solid fa-crow"></i>oiseaux</a></li>
            <li class="categorie-name"><a class="categorie-link" href="{{ route('med.index') }}"><i
                        class="fa-solid fa-house-medical"></i>médical</a></li>
            <li class="categorie-name"><a class="categorie-link" href="{{ route('noMar.index') }}">nos marques</a></li>
        </ul>
    </nav>

    {{-- phone nav --}}
    <div class="phone-nav bg-light w-75">
        <ul class="categorie d-flex flex-column w-100">
            <li class="categorie-name">
                <a href="{{ route('index') }}"><i class="fa-solid fa-house"></i>Accueil</a>
            </li>
            <li class="categorie-name">
                <a href="{{ route('chien.index') }}"><i class="fa-solid fa-dog"></i>chiens</a>
            </li>
            <li class="categorie-name">
                <a href="{{ route('chat.index') }}"><i class="fa-solid fa-cat"></i>chats</a>
            </li>
            <li class="categorie-name">
                <a href="{{ route('oiseaux.index') }}"><i class="fa-solid fa-crow"></i>oiseaux</a>
            </li>
            <li class="categorie-name">
                <a href="{{ route('med.index') }}"><i class="fa-solid fa-house-medical"></i>médical</a>
            </li>
            <li class="categorie-name">
                <a href="{{ route('noMar.index') }}">nos marques</a>
            </li>
        </ul>
    </div>
</header>
