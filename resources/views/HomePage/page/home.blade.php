@extends('HomePage.layout.index')
@section('content')

<!-- Masthead-->
<header class="masthead" id="page-top">
    <div class="container">
        <div class="masthead-heading text-uppercase">Catering Box 3 Putri</div>
        <div class="masthead-subheading">Juaranya Catering Harian Praktis, Enak, dan Bebas Ongkir.</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="/contact">
            <i class="fa-brands fa-whatsapp" style="height: 25px;"></i>
            <span>Pesan Sekarang</span>
        </a>
    </div>
    <img src="{{asset('assets/images/halal.png')}}" style="position: relative; top: 85px; width: 320px; height: 80px;"
        alt="">
</header>

<!-- About-->
<section id="about">
    <header class="masthead" style="padding-top: 1rem; padding-bottom: 2rem; background-image: none; color: black;">
        <div class="container">
            <!-- About-->
            <section class="page-section" id="about">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Tentang kami</h2>
                        <h3 class="section-subheading">Catering Box 3 Putri</h3>
                    </div>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-body">
                        <img class="rounded-circle img-fluid" src="{{asset('assets/images/icon.ico')}}" alt="..." />
                        <p><b>Catering Box 3 Putri</b> Berdiri sejak tahun 2016 hadir untuk memenuhi kebutuhan
                            Anda
                            akan layanan catering yang praktis, lezat, dan terpercaya. Dengan beragam pilihan
                            menu yang disiapkan oleh koki berpengalaman, kami siap melayani berbagai jenis acara
                            dengan kelezatan dan kualitas terbaik.</p>
                    </div>
                </div>
                <a class="btn btn-primary btn-xl text-uppercase" href="/about">
                    <span>Selengkapnya</span>
                    <i class="fa-solid fa-arrow-right" style="height: 20px;"></i>
                </a>
            </section>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="{{asset('assets/images/services/courier.png')}}" alt="">
                    </span>
                    <h4 class="my-3">Free Delivery & Ontime</h4>
                    <p class="text-muted">Dengan lebih dari 50+ Tim Kurir yang ada,
                        makanan kalian bisa sampai dengan tepat waktu sesuai jadwal pengantaran.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="{{asset('assets/images/services/customer.png')}}" alt="">
                    </span>
                    <h4 class="my-3">2000+ Customer</h4>
                    <p class="text-muted">Di Tahun 2024. Catering Box 3 Putri Memiliki Rata-rata 2000+
                        konsumen yang berlangganan setiap harinya.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="{{asset('assets/images/services/cook.png')}}" alt="">
                    </span>
                    <h4 class="my-3">Menu Yang Bervariasi</h4>
                    <p class="text-muted">Sudah lebih dari 200+ menu yang kita keluarkan.
                        Customer juga akan diajak dalam menyusun daftar menu mingguan.</p>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- Menu Grid-->
<section class="page-section bg-secondary bg-opacity-10" id="menu">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Menu</h2>
            @foreach ($dataHead as $item)
            <div class=" mb-5">
                <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('storage/menu/' . $item->images)}}" alt="..." />
                        </a>
                    </div>
                </div>
                @endforeach

        <div class="row">
            @foreach ($datasubHead as $item)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <img class="img-fluid" src="{{asset('storage/menu/' . $item->images)}}" alt="..." />
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn btn-primary btn-xl col-sm-12 text-uppercase mt-4"
            style="display: flex; justify-content: center; align-items: center;" href="/package">Paket Menu Lainnya</a>
    </div>
</section>

<section class="page-section" id="faq">
    <div class="container">
        <div class="text-center">
            <h3 class="section-heading text-uppercase">Pertanyaan Umum</h3>
        </div>
        <ul class="faq">
            <li>
                <div class="q">
                    <span class="arrow"></span>
                    <span>Harganya berapa kak?</span>
                </div>
                <div class="a">
                    <p>Untuk langganan per 1 minggu Senin-Sabtu Lunch dan Dinner harganya Rp190.000 jumlahnya 12 kali
                        makan</p>
                </div>
            </li>
            <li>
                <div class="q">
                    <span class="arrow"></span>
                    <span>Minimal order buat berapa orang?</span>
                </div>
                <div class="a">
                    <p>Mulai dari 1 orang saja, kalian sudah bisa berlangganan lho</p>
                </div>
            </li>
            <li>
                <div class="q">
                    <span class="arrow"></span>
                    <span>Tapi kak aku punya alergi makanan, gimana dong?</span>
                </div>
                <div class="a">
                    <p>Tenang aja karena di Catering Box 3 Putri permintaanmu seperti alergi ikan, seafood, dsb bisa
                        minta ganti menu dan free biaya</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- Contact-->
<section class="page-section bg-light" id="contact" style="color: black;">
    <div class="container">
        <h1 style="font-size: 40px; text-align: center;">Order Sekarang</h1>
        <hr>
        <h6 class="mb-5 text-center">Hubungi admin dibawah sesuai dengan lokasi anda.</h6>
        <div class="row">
            @foreach ($dataAlamat as $alamat)
            <div class="col-lg-3">
                <div class="team-member">
                    <a href="{{ $alamat -> link_maps }}">
                        <img class="mx-auto rounded-circle" src="{{asset('storage/address/' . $alamat->images)}}"
                            alt="..." />
                    </a>
                    <h4>{{ $alamat -> name }}</h4>
                    <p class="text-muted">{{ $alamat -> address }}</p>
                    <a class="btn btn-dark btn-social mx-3"
                        href="https://wa.me/{{ $alamat -> no_tlp }}?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i
                            class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                </div>
            </div>
            @endforeach
            
            <!-- <div class="col-lg-3">
                <div class="team-member">
                    <a href="https://maps.app.goo.gl/kyJifrZjMgRJ2pBcA">
                        <img class="mx-auto rounded-circle" src="{{asset('assets/images/location/jogja-selatan.jpg')}}"
                            alt="..." />
                    </a>
                    <h4>Jogja Selatan</h4>
                    <p class="text-muted">Jl. Parangtritis No.10, Saman, Bangunharjo, Kec. Mantrijeron, Kabupaten
                        Bantul, Daerah Istimewa Yogyakarta 55188</p>
                    <a class="btn btn-dark btn-social mx-3"
                        href="https://wa.me/PHONENUMBER?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i
                            class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <a href="https://maps.app.goo.gl/2jRCRa66YY55A2J8A">
                        <img class="mx-auto rounded-circle" src="{{asset('assets/images/location/solo.jpg')}}"
                            alt="..." />
                    </a>
                    <h4>Solo</h4>
                    <p class="text-muted">Penumping, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141</p>
                    <a class="btn btn-dark btn-social mx-3"
                        href="https://wa.me/PHONENUMBER?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i
                            class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <a href="https://maps.app.goo.gl/atPhdzXGMUMfUWE36">
                        <img class="mx-auto rounded-circle" src="{{asset('assets/images/location/semarang.webp')}}"
                            alt="..." />
                    </a>
                    <h4>Semarang</h4>
                    <p class="text-muted">Jl. Jambu Raya No.1, Lamper Kidul, Kec. Semarang Sel., Kota Semarang, Jawa
                        Tengah 50249</p>
                    <a class="btn btn-dark btn-social mx-3"
                        href="https://wa.me/PHONENUMBER?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i
                            class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            @foreach ($dataHead as $item)
                                <!-- Project details-->
                                <h2 class="text-uppercase">MENU</h2>
                                <p class="item-intro text-muted">10-15 june</p>
                                <img class="img-fluid d-block mx-auto w-75" src="{{asset('storage/menu/' . $item->images)}}"
                                    alt="..." />
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection