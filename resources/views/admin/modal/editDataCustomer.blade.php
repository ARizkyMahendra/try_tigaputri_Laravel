<!-- Modal -->
<div class="modal fade" id="editModalCostumer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('updateDataCostumer', $data->id)}}" enctype="multipart/form-data" method="post">
                @method('put')
                @csrf

                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kurir</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="kurir" name="kurir" value="{{$data->kurir}}"
                                required>
                                <option selected>Select Kurir</option>
                                @foreach ($dataDriver as $item)
                                    <option value="{{$item->nama}}" {{$data->kurir == $item->nama ? 'selected' : ''}}>
                                        {{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{$data->alamat}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alergi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="alergi" id="alergi"
                                required>{{$data->alergi}}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Paket</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="paket" name="paket"
                                value="{{$data->paket}}" required>
                                <option selected>Select Paket</option>
                                <option value="siang" {{$data->paket == 'siang' ? 'selected' : ''}}>Siang</option>
                                <option value="malam" {{$data->paket == 'malam' ? 'selected' : ''}}>Malam</option>
                                <option value="siang malam" {{$data->paket == 'siang malam' ? 'selected' : ''}}>Siang +
                                    Malam</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Telephon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_tlp" name="no_tlp"
                                value="{{$data->no_tlp}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tgl Mulai</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai"
                                value="{{$data->tgl_mulai}}" required>
                        </div>

                        <label for="inputText" class="col-sm-2 col-form-label">Tgl Selesai</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai"
                                value="{{$data->tgl_selesai}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">*Keterangan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="keterangan" id="keterangan"
                                required>{{$data->keterangan}}</textarea>
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