<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapdataOrmas extends Controller
{
    public function rekapDesa()
    {
        return view('dashboard/rekap-desa');
    }

    public function rekapKecamatan()
    {
        return view('dashboard/rekap-kecamatan');
    }
    
    public function rekapKabupaten()
    {
        return view('dashboard/rekap-kabupaten');
    }
}
