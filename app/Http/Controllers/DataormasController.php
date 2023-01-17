<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class DataormasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtOrmas = Profile::all();
        return view('dashboard/data-ormas', compact('dtOrmas'));
    }

    public function pengajuan()
    {
        $dtOrmas = Profile::all();
        return view('dashboard/pengajuan-ormas', compact('dtOrmas'));
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
        $dtUser = Profile::find($id);

        $dtUser->userDetail()->delete();
        $dtUser->delete();
        return back();
    }

    public function approve($id)
    {
        $leave = Profile::findOrFail($id);
        $leave->status = 'Approve'; //Approved
        $leave->save();
        return redirect()->back(); //Redirect user somewhere
    }

    public function ejject($id)
    {
        $leave = Profile::findOrFail($id);
        $leave->status = 'Rejected'; //Approved
        $leave->save();
        return redirect()->back(); //Redirect user somewhere
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
