<?php

namespace App\Controllers;

use App\Models\checkin_details;

class UsersController1 extends BaseController
{
    public function index(){

        // Get data
        $users = new checkin_details();
        $data['users'] = $users->select('*')->findAll();

        return view('index',$data);
    }

    public function exportData(){
        // file name
        $filename = 'users_'.date('Ymd').'.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");

        // get data
        $users = new checkin_details();
        $usersData = $users->select('*')->findAll();

        // file creation
        $file = fopen('php://output', 'w');

        $header = array("ID","First Name","Last Name","Email","Phone No.","Company Name","Purpose Of Visit","Check In","CheckOut","Total Time");
        fputcsv($file, $header);
        foreach ($usersData as $key=>$line){
            fputcsv($file,$line);
        }
        fclose($file);
        exit;
    }


}