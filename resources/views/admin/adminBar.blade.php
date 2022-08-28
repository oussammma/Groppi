<nav>
    <div class="logo-name">
        <div class="logo-image">
            <a href="{{ route('index') }}"><img src="/upload/logo.png" alt="" width="200px"></a>
        </div>
    </div>
    <div class="menu-items">
        <ul class="nav-links ps-0">
            <li><a href="{{ route('home') }}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Accueil</span>
                </a></li>
            <li><a href="{{ route('misePro.index') }}">
                    <i class="uil uil-box"></i>
                    <span class="link-name">Produits</span>
                </a></li>
            <li><a href="{{ route('miseMar.index') }}">
                    <i class="uil uil-building"></i>
                    <span class="link-name">Marques</span>
                </a></li>
            <li><a href="{{ route('miseCat.index') }}">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Categories</span>
                </a></li>
            <li><a href="{{ route('profile.index') }}">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Profile</span>
                </a></li>
        </ul>

        <ul class="logout-mode ps-0">
            <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</nav>

<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <div class="user d-flex align-items-center">
            <i class="fa-solid fa-user me-2 fs-5 p-2 rounded-circle text-white"></i>
            <span class="fs-5 text-capitalize">{{ Auth::user()->name }}</span>
        </div>
    </div>

    <div class="dash-content">
        <main>
            @yield('admin_content')
        </main>
    </div>
</section>
