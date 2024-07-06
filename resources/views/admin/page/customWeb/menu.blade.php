@extends('admin.layout.index')

@section('content')
<section class="section dashboard">
    <div class="row">

        <div class="col-lg-8">
            <div class="row">
                <h6 class="card-title">Head Menu minggu ini</h6>
                <!-- Head Menu Card -->
                @foreach ($dataHead as $item)
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Action</h6>
                                    </li>
                                    <li><a class="dropdown-item editDataMenu" data-id="{{$item->id}}">Edit</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Head <span>| Menu</span></h5>
                                <!-- Card with an image on top -->
                                <div class="card">
                                    <img src="{{asset('storage/menu/' . $item->images)}}">
                                </div><!-- End Card with an image on top -->
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Head Menu Card -->
            </div>
        </div>

        <div class="col-lg-12">
            <div class="row">
                <h6 class="card-title">SubHead Menu minggu ini</h6>
                <span>
                    <button type="button" class="btn btn-success mb-3" id="addData">
                        <i class="bi bi-plus"></i>
                        <span>Add pict</span>
                    </button>
                </span>
                <!-- subHead Menu Card -->
                @foreach ($dataSubhead as $item)
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Action</h6>
                                    </li>
                                    <li><a class="dropdown-item editDataMenu" data-id="{{$item->id}}">Edit</a></li>
                                    <li><a class="dropdown-item deletetDataMenu" data-id="{{$item->id}}">Delete</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">SubHead <span>| Menu</span></h5>
                                <!-- Card with an image on top -->
                                <div class="card ">
                                    <img src="{{asset('storage/menu/' . $item->images)}}">
                                </div><!-- End Card with an image on top -->
                            </div>

                        </div>
                    </div>
                @endforeach
                <!-- End subHead Menu Card -->
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
            url: "{{route('addcustomMenu')}}",
            success: function (response) {
                $('.tampilData').html(response).show();
                $('#addModal').modal('show');
            }
        });
    });

    $(document).ready(function () {
        $('.editDataMenu').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "get",
                url: "{{route('editDatacustomMenu', ['id' => ':id'])}}".replace(':id', id),
                success: function (response) {
                    $('.tampilEditData').html(response).show();
                    $('#editModal').modal('show');
                }
            });
        });
    });

    $(document).ready(function () {
        $('.deletetDataMenu').click(function (e) {
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
                text: "Kamu yakin untuk menghapus data ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('deletetacustomMenu', ['id' => ':id']) }}".replace(':id', id),
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