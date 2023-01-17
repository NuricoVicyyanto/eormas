<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tb_user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'username',
        'level',
        'password',
    ];

    public function userDetail()
    {
        return $this->hasOne(Profile::class, 'user_id', 'user_id');
    }
}