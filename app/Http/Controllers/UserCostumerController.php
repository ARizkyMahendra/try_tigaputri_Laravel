<?php

namespace App\Http\Controllers;

use App\Models\userCostumer;
use App\Http\Requests\StoreuserCostumerRequest;
use App\Http\Requests\UpdateuserCostumerRequest;
use App\Models\userProfile;
use RealRashid\SweetAlert\Facades\Alert;

class UserCostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function usersCostumer()
    {
        $data = userCostumer::all();
        return view('admin.page.users.customer', [
            'title' => 'Admin Desk - addDataCostumer',
            'data' => $data,
        ]);
    }

    public function addModalCostumer()
    {
        $data = userProfile::where('posisi', 'driver')->get();
        return view('admin.modal.addDataCostumer', [
            'title' => 'Admin Desk - addDataCostumer',
            'data' => $data,
        ]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeController(StoreuserCostumerRequest $request)
    {
        $data = new userCostumer();
        $data->nama = $request->nama;
        $data->kurir = $request->kurir;
        $data->alamat = $request->alamat;
        $data->alergi = $request->alergi;
        $data->paket = $request->paket;
        $data->no_tlp = $request->no_tlp;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_selesai = $request->tgl_selesai;
        $data->keterangan = $request->keterangan;
        $data->save();

        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('usersCostumer');
    }

    /**
     * Display the specified resource.
     */
    public function show(userCostumer $userCostumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCustomer($id)
    {
        $data = userCostumer::findOrFail($id);
        $dataDriver = userProfile::where('posisi', 'driver')->get();
        return view('admin.modal.editDataCustomer', [
            'title' => 'Edit data user',
            'data' => $data,
            'dataDriver' => $dataDriver,
        ])->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCostumer(UpdateuserCostumerRequest $request, userCostumer $userCostumer, $id)
    {
        $data = userCostumer::findOrFail($id);

        $field = [

            'nama' => $request -> nama,
            'kurir' => $request -> kurir,
            'alamat' => $request -> alamat,
            'alergi' => $request -> alergi,
            'paket' => $request -> paket,
            'no_tlp' => $request -> no_tlp,
            'tgl_mulai' => $request -> tgl_mulai,
            'tgl_selesai' => $request -> tgl_selesai,
            'keterangan' => $request -> keterangan,

        ];

        $data::where('id', $id)->update($field);
        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('usersCostumer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = userCostumer::findOrFail($id);
        $user->delete();

        $json = [
            'success' => "Data berhasil dihapus"
        ];

        echo json_encode($json);
    }
}
