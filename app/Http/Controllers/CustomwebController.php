<?php

namespace App\Http\Controllers;

use App\Models\customweb;
use App\Http\Requests\StorecustomwebRequest;
use App\Http\Requests\UpdatecustomwebRequest;
use App\Models\infoAlamat;
use App\Models\infoContact;
use App\Models\infoMenu;
use RealRashid\SweetAlert\Facades\Alert;

class CustomwebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexMenu()
    {
        $dataHead = infoMenu::where('status', 'head')->get();
        $dataSubhead = infoMenu::where('status', 'subhead')->get();
        return view('admin.page.customWeb.menu', [
            'title' => 'Admin Desk - Custom web Menu',
            'dataHead' => $dataHead,
            'dataSubhead' => $dataSubhead,
        ]);
    }

    public function indexContact()
    {
        $dataContact = infoContact::all();
        $dataAlamat = infoAlamat::all();
        // $dataSubhead = infoMenu::where('status', 'subhead')->get();
        return view('admin.page.customWeb.contact', [
            'title' => 'Admin Desk - Custom web Contact',
            'dataContact' => $dataContact,
            'dataAlamat' => $dataAlamat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addMenu()
    {
        return view('admin.modal.addMenuInfo', [
            'title' => 'Admin Desk - add Custom Menu',
        ]);
    }

    public function addContact()
    {
        return view('admin.modal.addContact', [
            'title' => 'Admin Desk - add Custom Menu',
        ]);
    }

    public function addAddress()
    {
        $dataNo_tlp = infoContact::select('url','name')->get();
        return view('admin.modal.addDataAddress', [
            'title' => 'Admin Desk - add Custom Alamat',
            'dataNo_tlp' => $dataNo_tlp,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeMenu(StorecustomwebRequest $request)
    {
        $data = new infoMenu();
        $data->status = $request->status;

        if ($request->hasFile('formFile')) {
            $photo = $request->file('formFile');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/menu'), $filename);
            $data->images = $filename;
        }
        $data->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('customMenu');
    }
    
    public function storeContact(StorecustomwebRequest $request)
    {
        $data = new infoContact();
        $data->name = $request->name;
        $data->url = $request->url;
        
        $data->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('customContact');
    }
    
    public function storeAlamat(StorecustomwebRequest $request)
    {
        $data = new infoAlamat();
        $data->link_maps = $request->link_maps;
        $data->name = $request->name;
        $data->address = $request->address;
        $data->no_tlp = $request->no_tlp;

        if ($request->hasFile('formFile')) {
            $photo = $request->file('formFile');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/address'), $filename);
            $data->images = $filename;
        }
        $data->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('customContact');
    }
    /**
     * Display the specified resource.
     */
    public function show(customweb $customweb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editMenu($id)
    {
        $data = infoMenu::findOrFail($id);
        return view('admin.modal.editMenuInfo',[
            'title' => 'Edit data user',
            'data' => $data,
        ])->render();
    }

    public function editAlamat($id)
    {
        $data = infoAlamat::findOrFail($id);
        $dataNo_tlp = infoContact::select('url','name')->get();
        return view('admin.modal.editContact',[
            'title' => 'Edit data user',
            'data' => $data,
            'dataNo_tlp' => $dataNo_tlp,
        ])->render();
    }

    public function editContact($id)
    {
        $data = infoContact::findOrFail($id);
        return view('admin.modal.editContact',[
            'title' => 'Edit data user',
            'data' => $data,
        ])->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateMenu(UpdatecustomwebRequest $request, customweb $customweb, $id)
    {
        $data = infoMenu::findOrFail($id);

        if($request -> file('formFile')){
            $photo = $request->file('formFile');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/menu'), $filename);
            $data->images = $filename;
        }else{
            $filename = $request->images;
        }

        $field = [

            'status' => $request->status,
            'images' => $filename,

        ];

        $data::where('id',$id)->update($field);
        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('customMenu');
    }

    public function updateAlamat(UpdatecustomwebRequest $request, customweb $customweb, $id)
    {
        $data = infoAlamat::findOrFail($id);

        if($request -> file('formFile')){
            $photo = $request->file('formFile');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/address'), $filename);
            $data->images = $filename;
        }else{
            $filename = $request->images;
        }

        $field = [

            'link_maps' => $request->link_maps,
            'name' => $request->name,
            'address' => $request->address,
            'no_tlp' => $request->no_tlp,
            'images' => $filename,

        ];

        $data::where('id',$id)->update($field);
        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('customContact');
    }

    public function updateContact(UpdatecustomwebRequest $request, customweb $customweb, $id)
    {
        $data = infoContact::findOrFail($id);

        $field = [

            'name' => $request->name,
            'url' => $request->url,

        ];

        $data::where('id',$id)->update($field);
        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('customContact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyMenu($id)
    {
        $user = infoMenu::findOrFail($id);
        $user->delete();
        
        $json = [
            'success' => "Data berhasil dihapus"
        ];

        echo json_encode($json);
    }

    public function destroyContact($id)
    {
        $user = infoContact::findOrFail($id);
        $user->delete();
        
        $json = [
            'success' => "Data berhasil dihapus"
        ];

        echo json_encode($json);
    }

    public function destroyAlamat($id)
    {
        $user = infoAlamat::findOrFail($id);
        $user->delete();
        
        $json = [
            'success' => "Data berhasil dihapus"
        ];

        echo json_encode($json);
    }
}
