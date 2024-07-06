@extends('admin.layout.index')

@section('content')

<div class="pagetitle">
    <h1>General Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">

        <div class="col-lg-12  dashboard">
            <div class="row">
                <!-- Section Card -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Admin <span>| Total</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$dataAdmin}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End admin Card -->

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Driver<span> | Total</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-car-front"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$dataDriver}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Driver Card -->

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Cooker<span>| Total</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-fire"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$dataCooker}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Cooker Card -->

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card cooker-card">
                        <div class="card-body">
                            <h5 class="card-title">Staff<span>| Total</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$dataStaff}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Staff Card -->
                
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <button class="btn btn-success" id="addData">
                    <i class="bi bi-plus">
                        <span>Add User</span>
                    </i>
                </button>
                <div class="card-body">
                    <h5 class="card-title">Table Admin</h5>
                    <div class="table-responsive">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Photos</th>
                                    <th scope="col">Nomor Ktp</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">No telepon</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $y => $item)
                                    <tr>
                                        <th scope="row">{{++$y}}</th>
                                        <th><img src="{{asset('storage/pegawai/' . $item->images)}}"
                                                style="width: 100px; height: 110px;"></th>
                                        <th>{{$item->ktp}}</th>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->posisi}}</td>
                                        <td>{{$item->umur}}</td>
                                        <td>{{$item->agama}}</td>
                                        <td>{{$item->no_tlp}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <input type="hidden" id="nama" value="{{$item->nama}}">

                                            <a class="btn btn-info editModalUser" aria-label="edit" data-id="{{$item->id}}">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a class="btn btn-danger deleteData" aria-label="delete"
                                                data-id="{{$item->id}}">
                                                <i class=" bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- Table with hoverable rows -->

                    <!-- End Table with hoverable rows -->
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

    $('#addData').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "{{route('addModal')}}",
            success: function (response) {
                $('.tampilData').html(response).show();
                $('#addModal').modal('show');
            }
        });
    });

    $(document).ready(function () {
        $('.editModalUser').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "get",
                url: "{{route('editModalUser', ['id' => ':id'])}}".replace(':id', id),
                success: function (response) {
                    $('.tampilEditData').html(response).show();
                    $('#editModal').modal('show');
                }
            });
        });
    });

    $(document).ready(function () {
        $('.deleteData').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var nama = $('#nama').val();
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
                text: "Kamu yakin untuk menghapus pegawai " + nama + " ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('deleteData', ['id' => ':id']) }}".replace(':id', id),
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