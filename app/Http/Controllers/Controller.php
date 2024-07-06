<?php

namespace App\Http\Controllers;

use App\Models\userCostumer;
use App\Models\userProfile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('admin.layout.index',[
            'title' => 'Admin Desk - Tiga Putri',
        ]);
    }
    public function admin()
    {
        $dataPegawai = userProfile::all()->count();
        $dataCustomer = userCostumer::all()->count();
        return view('admin.page.adminHome',[
            'title' => 'Admin Desk - Tiga Putri',
            'dataPegawai' => $dataPegawai,
            'dataCustomer' => $dataCustomer,
        ]);
    }
    
}
