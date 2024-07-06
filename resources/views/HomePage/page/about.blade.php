@extends('HomePage.layout.index')

@section('content')

<header class="masthead" style="padding-top: 10rem; padding-bottom: 2rem;">
    <div class="container">
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang kami</h2>
                    <h3 class="section-subheading">Catering Box 3 Putri</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/images/icon.ico')}}"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">
                                <p><b>Catering Box 3 Putri</b> Berdiri sejak tahun 2016 hadir untuk memenuhi kebutuhan
                                    Anda
                                    akan layanan catering yang praktis, lezat, dan terpercaya. Dengan beragam pilihan
                                    menu yang disiapkan oleh koki berpengalaman, kami siap melayani berbagai jenis acara
                                    dengan kelezatan dan kualitas terbaik.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">
                                <p><b>Keunggulan Catering Box 3 Putri</b><br><br>
                                    1. <b>Pilihan Menu Beragam</b><br>
                                    Kami menawarkan berbagai macam hidangan, mulai dari masakan tradisional Indonesia
                                    hingga hidangan internasional. Anda bisa memilih menu yang sesuai dengan tema acara
                                    atau selera tamu Anda.
                                    <br><br>
                                    2. <b>Kualitas Terjamin</b><br>
                                    Kami selalu menggunakan bahan baku segar dan berkualitas tinggi. Setiap hidangan
                                    disiapkan dengan standar kebersihan yang ketat untuk memastikan keamanan dan
                                    kesehatan makanan.
                                    <br><br>
                                    3. <b>Porsi Pas dan Mengenyangkan</b><br>
                                    Setiap kotak catering kami dirancang untuk memberikan porsi yang cukup dan seimbang.
                                    Kami memastikan setiap kotak berisi hidangan yang tidak hanya lezat tapi juga
                                    mengenyangkan.
                                    <br><br>
                                    4. <b>Proses Higienis</b><br>
                                    Kami menerapkan standar kebersihan yang tinggi dalam setiap tahap persiapan makanan,
                                    mulai dari pemilihan bahan baku hingga pengemasan. Makanan kami dikemas secara
                                    higienis untuk menjaga kesegaran dan kualitas.
                                    <br><br>
                                    5. <b>Pelayanan Ramah dan Profesional</b><br>
                                    Tim kami siap melayani Anda dengan sepenuh hati. Kami berkomitmen untuk memberikan
                                    pelayanan terbaik mulai dari proses pemesanan hingga pengiriman.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">
                                <p><b>Langkah Mudah Memesan</b><br><br>
                                    1. <b>Pilih Menu</b><br>
                                    Kunjungi situs web kami atau hubungi tim kami untuk memilih menu yang sesuai dengan
                                    kebutuhan Anda.
                                    <br><br>
                                    2. <b>Pesan</b><br>
                                    Sampaikan pesanan Anda melalui Instgram atau WhatsApp di nomor [XXX-XXX-XXXX]
                                    <br><br>
                                    3. <b>Konfirmasi</b><br>
                                    Setelah memilih menu, kami akan mengkonfirmasi pesanan Anda dan memastikan semua
                                    detail termasuk waktu dan lokasi pengiriman.
                                    <br><br>
                                    4. <b>Nikmati Hidangan</b><br>
                                    Kami akan mengantar catering box Anda tepat waktu ke lokasi yang Anda tentukan.
                                    Nikmati hidangan lezat dan berkualitas dari Catering Box 3 Putri.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="timeline-panel">
                <div class="timeline-body">
                    <p><b>Catering Box 3 Putri</b> adalah pilihan ideal untuk berbagai acara seperti rapat, seminar,
                        acara
                        keluarga, hingga pesta besar. Percayakan kebutuhan catering Anda kepada kami dan nikmati
                        kemudahan serta kelezatan yang kami tawarkan.
                        Hubungi kami sekarang dan rasakan pengalaman catering terbaik dengan Catering Box 3 Putri!</p>
                </div>
            </div>
            <a class="btn btn-primary btn-xl text-uppercase" href="/contact">
                <i class="fa-brands fa-whatsapp" style="height: 25px;"></i>
                <span>Pesan Sekarang</span>
            </a>
        </section>
    </div>
</header>

<!-- About-->
<!-- <section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                        alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                        alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                        alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2015</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                        alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2020</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</section> -->

@endsection