@extends('admin.layout.index')
@section('content')

<section class="section dashboard">
    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body ">
                    <h5 class="card-title">Info Alamat</h5>
                    <span>
                        <button type="button" class="btn btn-success mb-3" id="addDataAlamat">
                            <i class="bi bi-plus"></i>
                            <span>Tambah Alamat</span>
                        </button>
                    </span>
                    @foreach ($dataAlamat as $alamat)
                        <div class="col-xxl-12 col-md-12">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Action</h6>
                                        </li>
                                        <li><a class="dropdown-item editDataAlamat" data-id="{{$alamat->id}}">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item deletetDataAlamat" data-id="{{$alamat->id}}">Delete</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"><span>| Alamat</span></h5>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="team-member">
                                                <a href="{{$alamat->link_maps}}">
                                                    <img class="mx-auto rounded-circle"
                                                        src="{{asset('storage/address/' . $alamat->images)}}" alt="..." />
                                                </a>
                                                <h4>Jogja Utara</h4>
                                                <p class="text-muted">{{$alamat->address}}</p>
                                                <a class="btn btn-dark btn-social mx-3"
                                                    href="https://wa.me/{{$alamat->no_tlp}}?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i
                                                        class="fa-brands fa-whatsapp" style="height: 20px;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body ">
                    <h5 class="card-title">Info Contact</h5>
                    <span>
                        <button type="button" class="btn btn-success mb-3" id="addDataContact">
                            <i class="bi bi-plus"></i>
                            <span>Tambah Contact</span>
                        </button>
                    </span>
                    <div class="col-lg-12">

                        <!-- subHead Menu Card -->
                        @foreach ($dataContact as $item)
                            <div class="col-xxl-12 col-md-12">
                                <div class="card info-card sales-card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Action</h6>
                                            </li>
                                            <li><a class="dropdown-item editDataContact" data-id="{{$item->id}}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item deletetDataContact"
                                                    data-id="{{$item->id}}">Delete</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <div class="row mt-4">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">{{$item->name}}</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputText" placeholder="link"
                                                    readonly value="{{$item->url}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                        <!-- End subHead Menu Card -->

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="tampilData" style="display: none;"></div>
<div class="tampilEditData" style="display: none;"></div>
<script>
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    })

    $('#addDataContact').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "{{route('addcustomContact')}}",
            success: function (response) {
                $('.tampilData').html(response).show();
                $('#addContact').modal('show');
            }
        });
    });

    $('#addDataAlamat').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "{{route('addcustomAddress')}}",
            success: function (response) {
                $('.tampilData').html(response).show();
                $('#addAddress').modal('show');
            }
        });
    });

    $(document).ready(function () {
        $('.editDataAlamat').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "get",
                url: "{{route('editDatacustomAlamat', ['id' => ':id'])}}".replace(':id', id),
                success: function (response) {
                    $('.tampilEditData').html(response).show();
                    $('#editAlamat').modal('show');
                }
            });
        });
    });

    $(document).ready(function () {
        $('.editDataContact').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "get",
                url: "{{route('editDatacustomContact', ['id' => ':id'])}}".replace(':id', id),
                success: function (response) {
                    $('.tampilEditData').html(response).show();
                    $('#editContact').modal('show');
                }
            });
        });
    });

    $(document).ready(function () {
        $('.deletetDataContact').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);
                },
            });

            Swal.fire({
                title: 'Hapus data ?',
                text: "Kamu yakin untuk menghapus Contact ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('deleteDatacustomContact', ['id' => ':id']) }}".replace(':id', id),
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                Toast.fire({
                                    icon: "success",
                                    title: response.success,
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            // Tampilkan notifikasi error jika terjadi kesalahan
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data',
                                icon: 'error'
                            });
                        }
                    });
                }
            })
        });
    });

    $(document).ready(function () {
        $('.deletetDataAlamat').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);
                },
            });

            Swal.fire({
                title: 'Hapus data ?',
                text: "Kamu yakin untuk menghapus Contact ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('deleteDatacustomAlamat', ['id' => ':id']) }}".replace(':id', id),
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                Toast.fire({
                                    icon: "success",
                                    title: response.success,
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            // Tampilkan notifikasi error jika terjadi kesalahan
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data',
                                icon: 'error'
                            });
                        }
                    });
                }
            })
        });
    });
</script>
@endsection