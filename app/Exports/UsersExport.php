<?php

namespace App\Exports;

use App\Models\Profile;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Profile::select(
            "email",
            "nama_organisasi",
            "jenis_organisasi",
            "bidang_kegiatan",
            "alamat",
            "bukti_alamat",
            "no_hp",
            "kelurahan",
            "kecamatan",
            "kabupaten",
            "nama_notaris",
            "no_notaris",
            "sk_terdaftar",
            "sk_pengurus",
            "nama_ketua",
            "ttl_ketua",
            "no_ketua",
            "identitas_ketua",
            "nama_sekretaris",
            "ttl_sekretaris",
            "no_sekretaris",
            "identitas_sekretaris",
            "nama_bendahara",
            "ttl_bendahara",
            "no_bendahara",
            "identitas_bendahara",
            "status"
        )->get();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Email", "Nama Organisasi", "Jenis Organisasi", "Bidang Kegiatan", "Alamat", "Bukti Alamat", "No HP", "Kelurahan", "Kecamatan", "Kabupaten", "Nama Notaris", "No Notaris", "SK Terdaftar", "SK Pengurus", "Nama Ketua", "Tempat Tanggal Lahir Ketua", "NO HP Ketua", "Bukti Identitas Ketua", "Nama Sekretaris", "Tempat Tanggal Lahir Sekretaris", "No HP sekretaris", "Bukti Identitas Sekretaris", "Nama Bendahara", "tempat Tanggal Lahir Bendahara", "No HP bendahara", " Bukti Identitas Bendahara", "Status Persetujuan Ormas"];
    }
}
