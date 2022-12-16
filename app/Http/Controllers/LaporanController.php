<?php

namespace App\Http\Controllers;

use App\Models\pemecatan;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index(){
        $pmc = pemecatan::all();
        return view('pemecatan',['pemecatan'=>$pmc]);

    }

    public function cetak_pdf(){
        $logo_image = base64_encode(file_get_contents(public_path('template/dist/img/LOGO_UPH.jpg')));
        $pmc = pemecatan::all();
        $pdf = PDF::loadview('pemecatanpdf',['logo_image'=> $logo_image]);

        return $pdf->download('pemecatan.pdf');
    }
}