<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'user_detail';
    protected $fillable = [
        'email',
        'nama_organisasi',
        'jenis_organisasi',
        'bidang_kegiatan',
        'alamat',
        'bukti_alamat',
        'no_hp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'nama_notaris',
        'no_notaris',
        'sk_terdaftar',
        'sk_pengurus',
        'nama_ketua',
        'ttl_ketua',
        'no_ketua',
        'identitas_ketua',
        'nama_sekretaris',
        'ttl_sekretaris',
        'no_sekretaris',
        'identitas_sekretaris',
        'nama_bendahara',
        'ttl_bendahara',
        'no_bendahara',
        'identitas_bendahara',
        'status'
    ];

    function image($real_size = false)
    {
        $thumbnail = $real_size ? '' : 'small_';

        if ($this->image && file_exists(public_path('images/post/' . $thumbnail . $this->image)))
            return asset('images/post/' . $thumbnail  . $this->image);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            unlink(public_path('images/post/' . $this->image));
        if ($this->image && file_exists(public_path('images/post/small_' . $this->image)))
            unlink(public_path('images/post/small_' . $this->image));
    }
}
