<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAccountModel extends Model
{
    protected $table = 'user_account';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'kode_unique_user',
        'nama_sekolah_user',
        'nama_pengelola_user',
        'nama_pengguna_user',
        'email_user',
        'password_user',
        'created_date_user',
        'aktif_user'
    ];
    protected $useAutoIncrement = true;
}
