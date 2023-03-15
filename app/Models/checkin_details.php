<?php namespace App\Models;

use CodeIgniter\Model;

class checkin_details extends Model{
    protected $table = 'check_in';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'f_name',
        'l_name',
        'email',
        'mobile',
        'c_name',
        'p_visit',

    ];

}
