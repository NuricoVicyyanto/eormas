<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::user()->user_id);
    
        $user->userDetail()->updateOrCreate(
            [
                'user_id' => $user->user_id,
            ],
            [
                'email' => $request->email,
                'nama_organisasi' => $request->nama_organisasi,
                'jenis_organisasi' => $request->jenis_organisasi,
                'bidang_kegiatan' => $request->bidang_kegiatan,
                'alamat' => $request->alamat,
                'bukti_alamat' => $request->bukti_alamat,
                'no_hp' => $request->no_hp,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten' => $request->kabupaten,
                'nama_notaris' => $request->nama_notaris,
                'no_notaris' => $request->no_notaris,
                'sk_terdaftar' => $request->sk_terdaftar,
                'sk_pengurus' => $request->sk_pengurus,
                'nama_ketua' => $request->nama_ketua,
                'ttl_ketua' => $request->ttl_ketua,
                'no_ketua' => $request->no_ketua,
                'identitas_ketua' => $request->identitas_ketua,

                'nama_sekretaris' => $request->nama_sekretaris,
                'ttl_sekretaris' => $request->ttl_sekretaris,
                'no_sekretaris' => $request->no_sekretaris,
                'identitas_sekretaris' => $request->identitas_sekretaris,

                'nama_bendahara' => $request->nama_bendahara,
                'ttl_bendahara' => $request->ttl_bendahara,
                'no_bendahara' => $request->no_bendahara,
                'identitas_bendahara' => $request->identitas_bendahara,

                'status' => 'Pending',
            ]
        );
        return redirect()->back()->with('message', 'Profile Updated');
    }
}
