<!-- Modal -->
<div class="modal fade" id="addModalCostumer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('addDataCustomer')}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" style="text-transform: capitalize;" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kurir</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="kurir" name="kurir" required>
                            <option selected>Select Kurir</option>
                                @foreach ($data as $y => $item)
                                    <option value="{{$item->nama}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" style="text-transform: capitalize;" required> 
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alergi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="alergi" id="alergi" required></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Paket</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="paket" name="paket" required>
                                <option selected>Select Paket</option>
                                <option value="siang">Siang</option>
                                <option value="malam">Malam</option>
                                <option value="siang malam">Siang + Malam</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Telephon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_tlp" name="no_tlp" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tgl Mulai</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" required>
                        </div>

                        <label for="inputText" class="col-sm-2 col-form-label">Tgl Selesai</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">*Keterangan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="keterangan" id="keterangan" required></textarea>
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