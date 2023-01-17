<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Console\View\Components\Info;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtInformasi = Information::all();
        return view('dashboard/data-informasi', compact('dtInformasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/create-informasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->data;
        $namaFile = "http://127.0.0.1:8000/data/" . $nm->getClientOriginalName();

        $dtUpload = new Information;
        $dtUpload->judul = $request->judul;
        $dtUpload->konten = $request->konten;
        $dtUpload->data = $namaFile;

        $nm->move(public_path() . '/data', $namaFile);
        $dtUpload->save();

        return redirect('create-informasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dok = Information::findorfail($id);
        return view('dashboard.edit-informasi', compact('dok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Information::findorfail($id);
        $awal = $ubah->data;

        $dt = [
            'judul' => $request['judul'],
            'konten' => $request['konten'],
            'data' => $awal,


        ];

        $request->data->move(public_path() . '/data', $awal);
        $ubah->update($dt);
        return redirect('data-informasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dok = Information::findorfail($id);
        $file = public_path('data') . $dok->data;

        if (file_exists($file)) {
            @unlink($file);
        }

        $dok->delete();
        return back();
    }
}
