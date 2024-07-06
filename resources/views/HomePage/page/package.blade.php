@extends('HomePage.layout.index')
@section('content')

<!-- Projects-->

<header class="masthead" style="padding-top: 1rem; padding-bottom: 1rem;">
    <div class="container">
        <section class="projects-section" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Project One Row-->
                <div class="row gx-0 mb-lg-2 justify-content-center">
                    <div class="col-lg-6 bg-warning bg-opacity-50"><img class="img-fluid w-75"
                            src="{{asset('assets/images/package/image2.png')}}" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Paket Reguler</h4>
                                    <h5 class="text-white">Untuk Personal 1 orang</h5>
                                    <p class="mb-0 text-white-50">Mulai dari harga 15.000 /pax* nya kalian sudah bisa
                                        order Nasi Box untuk acara kalian</p><br>

                                    <h6 class="text-white">*Syarat dan ketentuan berlaku</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 mb-lg-2 justify-content-center">
                    <div class="col-lg-6 bg-warning bg-opacity-50"><img class="img-fluid w-75"
                            src="{{asset('assets/images/package/image3.png')}}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Paket Lauk Praktis</h4>
                                    <h5 class="text-white">Untuk Keluarga</h5>
                                    <p class="mb-0 text-white-50">Buat kalian yang sudah berkeluarga dan mau order lauk
                                        saja, bisa ambil Paket Lauk Praktis
                                        Mulai dari 2 – 5 Porsi, dan dengan isian Lauk Utama, Lauk Pendamping, dan Sayur.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-lg-2 justify-content-center">
                    <div class="col-lg-6 bg-warning bg-opacity-50"><img class="img-fluid w-75"
                            src="assets/images/package/image5.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Nasi Dus Kotak</h4>
                                    <h5 class="text-white">Untuk Acara / Event</h5>
                                    <p class="mb-0 text-white-50">Mulai dari harga 15.000 /pax* nya kalian sudah bisa
                                        order Nasi Box untuk acara kalian
                                    </p><br>
                                    <h6 class="text-white">*Syarat dan ketentuan berlaku</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 mb-lg-2 justify-content-center">
                    <div class="col-lg-6 bg-warning bg-opacity-50"><img class="img-fluid w-75"
                            src="{{asset('assets/images/package/image6.jpg')}}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Prasmanan</h4>
                                    <h5 class="text-white">Untuk Hajatana</h5>
                                    <p class="mb-0 text-white-50">Rayakan acara kalian dengan Paket Prasmanan kami untuk
                                        acara di kantor, rumah, dan sebagainya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>


@endsection