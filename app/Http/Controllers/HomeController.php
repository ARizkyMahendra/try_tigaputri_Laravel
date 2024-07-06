<?php

namespace App\Http\Controllers;

use App\Models\infoAlamat;
use App\Models\infoMenu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dataAlamat = infoAlamat::all();
        $dataHead = infoMenu::where('status', 'head')->get();
        $datasubHead = infoMenu::where('status', 'subhead')->get();
        
        return view('HomePage.page.home',[
            'title' => 'Catering Box 3 Putri – Catering Harian No 1 di Jogja, Solo, dan Semarang',
            'dataHead' => $dataHead,
            'datasubHead' => $datasubHead,
            'dataAlamat' => $dataAlamat,
        ]);
    }

    public function contact(){
        return view('HomePage.page.contact',[
            'title' => 'Hubungi Kami - Catering Box 3 Putri',
        ]);
    }

    public function about(){
        return view('HomePage.page.about',[
            'title' => 'Tentang Kami - Catering Box 3 Putri',
        ]);
    }

    public function package(){
        return view('HomePage.page.package',[
            'title' => 'Paket - Catering Box 3 Putri',
        ]);
    }
}
