<!-- Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('updateDataUser', $data->id)}}" enctype="multipart/form-data" method="post">
                @method('put')
                @csrf

                <div class="modal-body">

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">No KTP</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="ktp" name="ktp" value="{{$data -> ktp}}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$data -> nama}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Posisi</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="posisi" name="posisi" value="{{$data -> posisi}}">
                                <option selected>Pilih Posisi</option>
                                <option value="manager" {{$data->posisi == 'manager' ? 'selected' : ''}}>Manager</option>
                                <option value="admin" {{$data->posisi == 'admin' ? 'selected' : ''}}>Admin</option>
                                <option value="driver" {{$data->posisi == 'driver' ? 'selected' : ''}}>Driver</option>
                                <option value="cooker" {{$data->posisi == 'cooker' ? 'selected' : ''}}>Cooker</option>
                                <option value="staff" {{$data->posisi == 'staff' ? 'selected' : ''}}>Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Umur</label>
                        <div class="col-sm-8">
                            <input  type="number" class="form-control"  id="umur" name="umur" value="{{$data->umur}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Agama</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="agama" name="agama" value="{{$data -> agama}}">
                                <option selected>Pilih Agama</option>
                                <option value="islam" {{$data->agama == 'islam' ? 'selected' : ''}}>Islam</option>
                                <option value="kristen" {{$data->agama == 'kristen' ? 'selected' : ''}}>Kristen</option>
                                <option value="katolik" {{$data->agama == 'katolik' ? 'selected' : ''}}>Katolik</option>
                                <option value="hindu" {{$data->agama == 'hindu' ? 'selected' : ''}}>Hindu</option>
                                <option value="budha" {{$data->agama == 'budha' ? 'selected' : ''}}>Budha</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">No Tlp</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="no_tlp" name="no_tlp" value="{{$data->no_tlp}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="status" name="status" value="{{$data -> status}}">
                                <option selected>Pilih Status</option>
                                <option value="active" {{$data->status == 'active' ? 'selected' : ''}}>Active</option>
                                <option value="inactive" {{$data->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-sm-4 col-form-label">Picture</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="formFile" value="">
                            <img src= "{{ asset('storage/pegawai/' . $data->images) }}" class="mb-2 preview" style="width: 100px;">
                            <input class="form-control" type="file" id="formFile" accept=".png, .jpg, .jpeg" name="formFile" onchange="previewImg() " value="{{ $data->images}}" required>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImg() {

        const foto = document.querySelector('#formFile');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto.files[0]);
        oFReader.onload = function(ofReven) {
            preview.src = ofReven.target.result;
        }
    }
</script>