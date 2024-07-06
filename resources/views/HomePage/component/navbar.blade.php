<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <img src="{{asset('assets/images/icon.ico')}}" width="50" alt="" srcset="" style="margin-right: 15px;">
        <a class="navbar-brand" href="/#page-top">Catering Box 3 Putri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/#page-top">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/#menu">Menu</a></li>
                <li class="nav-item">
                    <a class="nav-link  {{Request::path() == 'package' ? 'active' : ''}}" href="/package">Paket</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/#contact">kontak</a></li>
                <li class="nav-item">
                    <a class="btn nav-link" href="/#faq">
                        <i class="fa-solid fa-circle-question">faq</i>
                    </a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>

                        </li>                 
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- floating button -->
<div class="floating-container">
    <div class="floating-button">+</div>
    <div class="element-container">
        <span class="float-element">
            <a href="https://www.tiktok.com/@cateringbox_3putri" style="color: white;">
                <i class="fa-brands fa-tiktok" style="height: 25px;">tiktok</i>
            </a>
        </span>
        <span class="float-element">
            <a href="mailto:cateringbox3putri@gmail.com" style="color: white;">
                <i class="fa-solid fa-envelope" style="height: 25px;">email</i>
            </a>
        </span>
        <span class="float-element">
            <a href="/contact" style="color: white;">
                <i class="fa-brands fa-whatsapp" style="height: 25px;">whatsapp</i>
            </a>
        </span>
        <span class="float-element">
            <a href="https://www.instagram.com/cateringbox_3putri/" style="color: white;">
                <i class="fa-brands fa-instagram" style="height: 25px;">instagram</i>
            </a>
        </span>
    </div>
</div>