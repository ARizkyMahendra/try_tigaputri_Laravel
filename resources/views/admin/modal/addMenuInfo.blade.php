<!-- Modal -->
<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addDatacustomMenu') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="status" name="status" required>
                                <option selected>Select Status</option>
                                <option value="head">Head</option>
                                <option value="subhead">Subhead</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-sm-3 col-form-label">Menu Photos</label>
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