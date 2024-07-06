<!-- Modal -->
<div class="modal fade" id="addAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('addDatacustomAlamat')}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="modal-body">

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">link Maps</label>
                        <div class="col-sm-8">
                            <input type="url" class="form-control" id="link_maps" name="link_maps">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input  type="text" class="form-control"  id="address" name="address">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">No telephon</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="no_tlp" name="no_tlp" required>
                            <option selected>Select No Tlp</option>
                                @foreach ($dataNo_tlp as $y => $item)
                                    <option value="{{$item->url}}">{{$item->name}} {{$item->url}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-sm-4 col-form-label">Picture</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="formFile" value="">
                            <img src= "" class="mb-2 preview" style="width: 100px;">
                            <input class="form-control" type="file" id="formFile" accept=".png, .jpg, .jpeg" name="formFile" onchange="previewImg() ">
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