<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRequestResetPasswordModel extends Model
{
    protected $table = 'user_request_reset_password';
    protected $primaryKey = 'id_user_request';
    protected $allowedFields = [
        'id_user',
        'email_user_request',
        'date_user_request',
        'date_accepted_request_by_user',
        'unique_code_user_request',
        'confirm_user_request'
    ];
    protected $useAutoIncrement = true;
}
