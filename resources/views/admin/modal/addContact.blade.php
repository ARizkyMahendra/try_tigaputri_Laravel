<!-- Modal -->
<div class="modal fade" id="addContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('addDatacustomContact')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-body">
                    
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Contact</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" style="text-transform: capitalize;">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Url / number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="url" name="url" >
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