<?php

namespace App\Controllers;

use App\Models\user_login;

class Userscontroller extends BaseController
{
    public function index(){

        // Get data
        $users = new user_login();
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
        $users = new user_login();
        $usersData = $users->select('*')->findAll();

        // file creation
        $file = fopen('php://output', 'w');

        $header = array("ID","Name","Email","City");
        fputcsv($file, $header);
        foreach ($usersData as $key=>$line){
            fputcsv($file,$line);
        }
        fclose($file);
        exit;
    }

}