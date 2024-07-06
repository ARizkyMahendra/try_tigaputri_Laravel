<!-- Modal -->
<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addData') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Ktp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ktp" name="ktp" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Posisi</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="posisi" name="posisi" required>
                                <option selected>Select Role</option>
                                <option value="manager">Manager</option>
                                <option value="admin">Admin</option>
                                <option value="driver">Driver</option>
                                <option value="cooker">Cooker</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Umur</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="umur" name="umur" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Agama</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="agama" name="agama" required>
                                <option selected>Select Role</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-sm-8">
                            <input type="notlp" class="form-control" id="no_tlp" name="no_tlp" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="status" name="status" required>
                                <option selected>Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-sm-4 col-form-label">Photos</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="foto">
                            <img class="mb-2 preview" style="width: 100px;">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="formFile"
                                name="formFile" onchange="previewImg()" required >
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
    function previewImg(){
        const fotoIn = document.querySelector('#formFile');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(fotoIn.files[0]);

        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
</script>