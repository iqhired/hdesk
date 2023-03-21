<?php

namespace App\Models;

use CodeIgniter\Model;

class checkout_detail extends Model
{
    protected $table = 'hdesk_entry';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'f_name',
        'c_name',

    ];

}