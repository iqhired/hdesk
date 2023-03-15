<?php

namespace App\Controllers;

use App\Models\checkin_details;
use App\Models\checkout_detail;

class Home1 extends BaseController
{
    public function index()
    {
        return view('check/homepage');
    }

    public function checkin()
    {
        return view('check/check_in');
    }

    public function checkout()
    {
        return view('check/check_out');
    }
    public function homepage()
    {
        return view('check/homepage');
    }

    public function store()
    {
        $checkinn = new checkin_details();
        $data = [
            'f_name' => $this->request->getPost('f_name'),
            'l_name' => $this->request->getPost('l_name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'c_name' => $this->request->getPost('c_name'),
            'p_visit' => $this->request->getPost('p_visit'),
        ];
        $checkinn->save($data);
        return redirect()->to(base_url('homepage'))->with('status','User Checkin Succesfully');

    }

    public function storeout()
    {
        $checkoutt = new checkout_detail();
        $data = [
            'f_name' => $this->request->getPost('f_name'),

            'c_name' => $this->request->getPost('c_name'),

        ];
        $checkoutt->save($data);
        return redirect()->to(base_url('homepage'))->with('status','User checkout Succesfully');

    }








}


