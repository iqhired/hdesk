<?php

namespace App\Models;
use CodeIgniter\Model;

class user_login extends Model
{
    protected $table = 'login_info';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'u_name',
        'pass',
    ];

}