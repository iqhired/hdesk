<?php

namespace App\Models;

use CodeIgniter\Model;

class checkout_detail extends Model
{
    protected $table = 'check_out';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'f_name',
        'c_name',


    ];

}