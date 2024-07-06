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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kurir</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Alergi</th>
                                    <th scope="col">Paket</th>
                                    <th scope="col">No telepon</th>
                                    <th scope="col">Tgl Mulai</th>
                                    <th scope="col">Tgl Selesai</th>
                                    <th scope="col">keterangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $y => $item)
                                    <tr>
                                        <th scope="row">{{++$y}}</th>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->kurir}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->alergi}}</td>
                                        <td>{{$item->paket}}</td>
                                        <td>{{$item->no_tlp}}</td>
                                        <td>{{$item->tgl_mulai}}</td>
                                        <td>{{$item->tgl_selesai}}</td>
                                        <td>{{$item->keterangan}}</td>
                                        <td>
                                            <input type="hidden" id="nama" value="{{$item->nama}}">

                                            <a class="btn btn-info editModalCustomer" aria-label="edit" data-id="{{$item->id}}">
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

    $('#addData').click(function () {
        // e.preventDefault();
        $.ajax({
            url: "{{route('addModalCostumer')}}",
            success: function (response) {
                $('.tampilData').html(response).show();
                $('#addModalCostumer').modal('show');
            }
        });
    });

    $(document).ready(function () {
        $('.editModalCustomer').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "get",
                url: "{{route('editModalCustomer', ['id' => ':id'])}}".replace(':id', id),
                success: function (response) {
                    $('.tampilEditData').html(response).show();
                    $('#editModalCostumer').modal('show');
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
                text: "Kamu yakin untuk menghapus Customer " + nama + " ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('deleteDataCustomer', ['id' => ':id']) }}".replace(':id', id),
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