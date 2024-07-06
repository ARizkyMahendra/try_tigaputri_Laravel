<?php

namespace App\Http\Controllers;

use App\Models\userProfile;
use App\Http\Requests\StoreuserProfileRequest;
use App\Http\Requests\UpdateuserProfileRequest;
use RealRashid\SweetAlert\Facades\Alert;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function usersAdmin()
    {
        $data = userProfile::all();
        $dataDriver = userProfile::where('posisi','driver')->count();
        $dataAdmin = userProfile::where('posisi','admin')->count();
        $dataCooker = userProfile::where('posisi','cooker')->count();
        $dataStaff = userProfile::where('posisi','Staff')->count();
        return view('admin.page.users.admin', [
            'title' => 'Admin Desk - users/admin',
            'data' => $data,
            'dataDriver' => $dataDriver,
            'dataAdmin' => $dataAdmin,
            'dataCooker' => $dataCooker,
            'dataStaff' => $dataStaff,
        ]);
    }


    public function addModal()
    {
        return view('admin.modal.addDataUser', [
            'title' => 'Admin Desk - addData',
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
    public function storeUser(StoreuserProfileRequest $request)
    {
        
        $nomorktp = $request->ktp;
        $ktp = userProfile::where('ktp', $nomorktp)->first();

        if ($ktp) {
            Alert::info('Error', 'Nomor KTP sudah digunakan');
            return redirect()->route('usersAdmin');
        } else {
            $data = new userProfile();
            $data->ktp = $request->ktp;
            $data->nama = $request->nama;
            $data->posisi = $request->posisi;
            $data->umur = $request->umur;
            $data->agama = $request->agama;
            $data->no_tlp = $request->no_tlp;
            $data->status = $request->status;

            if ($request->hasFile('formFile')) {
                $photo = $request->file('formFile');
                $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('storage/Pegawai'), $filename);
                $data->images = $filename;
            }
            $data->save(); 
            Alert::toast('Data berhasil ditambahkan', 'success');
            return redirect()->route('usersAdmin');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(userProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editUser($id)
    {
        $data = userProfile::findOrFail($id);
        return view('admin.modal.editDataUser',[
            'title' => 'Edit data user',
            'data' => $data,
        ])->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUser(UpdateuserProfileRequest $request, userProfile $userProfile, $id)
    {
        $data = userProfile::findOrFail($id);

        if($request -> file('formFile')){
            $photo = $request->file('formFile');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/pegawai'), $filename);
            $data->images = $filename;
        }else{
            $filename = $request->images;
        }

        $field = [

            'ktp' => $request->ktp,
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'umur' => $request->umur,
            'agama' => $request->agama,
            'no_tlp' => $request->no_tlp,
            'status' => $request->status,
            'images' => $filename,

        ];

        $data::where('id',$id)->update($field);
        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('usersAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = userProfile::findOrFail($id);
        $user->delete();
        
        $json = [
            'success' => "Data berhasil dihapus"
        ];

        echo json_encode($json);
    }
}
