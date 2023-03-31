<?php

namespace App\Models;
use CodeIgniter\Model;

class login_detail extends Model
{
    protected $table = 'login_info';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'u_name',
        'pass',
    ];


}