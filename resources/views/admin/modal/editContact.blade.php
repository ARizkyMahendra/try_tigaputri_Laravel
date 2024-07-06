<!-- Modal -->
<div class="modal fade" id="editContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('updateDatacustomContact', $data->id)}}" enctype="multipart/form-data" method="post">
                @method('put')
                @csrf
                <div class="modal-body">

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Contact</label>
                        <div class="col-sm-8">
                            <input type="text" style="text-transform: capitalize;" class="form-control" id="name"
                                name="name" value="{{ $data->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Url / number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="url" name="url" value="{{ $data->url }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editAlamat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('updateDatacustomAlamat', $data->id)}}" enctype="multipart/form-data" method="post">
                @method('put')
                @csrf
                <div class="modal-body">

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">link Maps</label>
                        <div class="col-sm-8">
                            <input type="url" class="form-control" id="link_maps" name="link_maps" value="{{ $data->link_maps }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="address" name="address" value="{{ $data->address }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">No Tlp</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="no_tlp" name="no_tlp" value="{{$data->no_tlp}}"
                                required>
                                <option selected>Select No Tlp</option>
                                @foreach ($dataNo_tlp as $item)
                                    <option value="{{$item->url}}" {{$data->no_tlp == $item->url ? 'selected' : ''}}>
                                        {{$item->url}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-sm-4 col-form-label">Picture</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="formFile" value="">
                            <img src="{{ asset('storage/address/' . $data->images) }}" class="mb-2 preview" style="width: 100px;">
                            <input class="form-control" type="file" id="formFile" accept=".png, .jpg, .jpeg"
                                name="formFile" onchange="previewImg()" value="{{ $data->images }}">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

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