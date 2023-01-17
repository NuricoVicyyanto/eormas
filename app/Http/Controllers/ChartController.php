<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Kecamatan
        $Binakal = Profile::where([['kecamatan', 'Binakal'],['status', 'Approve']])->get();
        $Bondowoso = Profile::where([['kecamatan', 'Bondowoso'],['status', 'Approve']])->get();
        $Botolinggo = Profile::where([['kecamatan', 'Botolinggo'],['status', 'Approve']])->get();
        $Cermee = Profile::where([['kecamatan', 'Cermee'],['status', 'Approve']])->get();
        $Curahdami = Profile::where([['kecamatan', 'Curahdami'],['status', 'Approve']])->get();
        $Grujugan = Profile::where([['kecamatan', 'Grujugan'],['status', 'Approve']])->get();
        $Jambesari = Profile::where([['kecamatan', 'Jambesari'],['status', 'Approve']])->get();
        $Klabang = Profile::where([['kecamatan', 'Klabang'],['status', 'Approve']])->get();
        $Maesan = Profile::where([['kecamatan', 'Maesan'],['status', 'Approve']])->get();
        $Pakem = Profile::where([['kecamatan', 'Pakem'],['status', 'Approve']])->get();
        $Prajekan = Profile::where([['kecamatan', 'Prajekan'],['status', 'Approve']])->get();
        $Pujer = Profile::where([['kecamatan', 'Pujer'],['status', 'Approve']])->get();
        $Ijen = Profile::where([['kecamatan', 'Ijen'],['status', 'Approve']])->get();
        $Sukosari = Profile::where([['kecamatan', 'Sukosari'],['status', 'Approve']])->get();
        $Sumberwringin = Profile::where([['kecamatan', 'Sumberwringin'],['status', 'Approve']])->get();
        $Taman_krocok = Profile::where([['kecamatan', 'Taman Krocok'],['status', 'Approve']])->get();
        $Tamanan = Profile::where([['kecamatan', 'Tamanan'],['status', 'Approve']])->get();
        $Tapen = Profile::where([['kecamatan', 'Tapen'],['status', 'Approve']])->get();
        $Tegalampel = Profile::where([['kecamatan', 'Tegalampel'],['status', 'Approve']])->get();
        $Tenggarang = Profile::where([['kecamatan', 'Tenggarang'],['status', 'Approve']])->get();
        $Tlogosari = Profile::where([['kecamatan', 'Tlogosari'],['status', 'Approve']])->get();
        $Wringin = Profile::where([['kecamatan', 'Wringin'],['status', 'Approve']])->get();
        $Wonosari = Profile::where([['kecamatan', 'Wonosari'],['status', 'Approve']])->get();

        $binakal_count = count($Binakal);
        $bondowoso_count = count($Bondowoso);
        $botolinggo_count = count($Bondowoso);
        $cermee_count = count($Cermee);
        $curahdami_count = count($Curahdami);
        $grujugan_count = count($Grujugan);
        $jambesari_count = count($Jambesari);
        $klabang_count = count($Klabang);
        $maesan_count = count($Maesan);
        $pakem_count = count($Pakem);
        $prajekan_count = count($Prajekan);
        $pujer_count = count($Pujer);
        $ijen_count = count($Ijen);
        $sukosari_count = count($Sukosari);
        $sumberwringin_count = count($Sumberwringin);
        $tamankrocok_count = count($Taman_krocok);
        $tamanan_count = count($Tamanan);
        $tapen_count = count($Tapen);
        $tegalampel_count = count($Tegalampel);
        $tenggarang_count = count($Tenggarang);
        $tlogosari_count = count($Tlogosari);
        $wringin_count = count($Wringin);
        $wonosari_count = count($Wonosari);


        //Kabupaten
        $Kabupaten = Profile::where([['kabupaten', 'Bondowoso'],['status', 'Approve']])->get();
        $kabupaten_count = count($Kabupaten);

        return view('homepage/chart-ormas', compact('binakal_count', 'bondowoso_count', 'botolinggo_count', 'cermee_count', 'curahdami_count', 'grujugan_count', 'jambesari_count', 'klabang_count', 'maesan_count', 'pakem_count', 'prajekan_count', 'pujer_count', 'ijen_count', 'sukosari_count', 'sumberwringin_count', 'tamankrocok_count', 'tamanan_count', 'tapen_count', 'tegalampel_count', 'tenggarang_count', 'tlogosari_count', 'wringin_count', 'wonosari_count', 'kabupaten_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
