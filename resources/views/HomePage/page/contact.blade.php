@extends('HomePage.layout.index')

@section('content')

<!-- Contact-->
<header class="masthead" style="padding-top: 15rem;">
    <div class="container">
        <section class="page-section bg-light" style="color: black;">
            <div class="container">
            <h1 style="font-size: 40px;">Order Sekarang</h1><hr>
            <h6 class="mb-5">Hubungi admin dibawah sesuai dengan lokasi anda.</h6>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <a href="https://maps.app.goo.gl/d1KNgnVXue2m38k66">
                                <img class="mx-auto rounded-circle" src="{{asset('assets/images/location/jogja-utara.jpg')}}" alt="..." />
                            </a>
                            <h4>Jogja Utara</h4>
                            <p class="text-muted">Jl. Kaliurang No.Km 15, RW.5, Kledokan, Umbulmartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582</p>
                            <a class="btn btn-dark btn-social mx-3" href="https://wa.me/PHONENUMBER?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <a href="https://maps.app.goo.gl/kyJifrZjMgRJ2pBcA">
                                <img class="mx-auto rounded-circle" src="{{asset('assets/images/location/jogja-selatan.jpg')}}" alt="..." />
                            </a>
                            <h4>Jogja Selatan</h4>
                            <p class="text-muted">Jl. Parangtritis No.10, Saman, Bangunharjo, Kec. Mantrijeron, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188</p>
                            <a class="btn btn-dark btn-social mx-3" href="https://wa.me/PHONENUMBER?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <a href="https://maps.app.goo.gl/2jRCRa66YY55A2J8A">
                                <img class="mx-auto rounded-circle" src="{{asset('assets/images/location/solo.jpg')}}" alt="..." />
                            </a>
                            <h4>Solo</h4>
                            <p class="text-muted">Penumping, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141</p>
                            <a class="btn btn-dark btn-social mx-3" href="https://wa.me/PHONENUMBER?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <a href="https://maps.app.goo.gl/atPhdzXGMUMfUWE36">
                                <img class="mx-auto rounded-circle" src="{{asset('assets/images/location/semarang.webp')}}" alt="..." />
                            </a>
                            <h4>Semarang</h4>
                            <p class="text-muted">Jl. Jambu Raya No.1, Lamper Kidul, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249</p>
                            <a class="btn btn-dark btn-social mx-3" href="https://wa.me/PHONENUMBER?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>

@endsection

