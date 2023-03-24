<?php

namespace App\Controllers;

use App\Models\checkin_details;
use App\Models\checkout_detail;
use App\Models\login_detail;
use App\Models\user_login;

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

    public function checkin1()
    {

        return view('check/check_in1');


    }
    public function checkinmsg()
    {

        return view('check/checkin_msg');
    }

    public function checkout()
    {
        return view('check/check_out');
    }

    public function checkout1()
    {
        return view('check/check_out1');
    }
    public function checkoutmsg()
    {

        return view('check/checkout_msg');
    }
    public function homepage()
    {
        return view('check/homepage');
    }

    public function homepage1()
    {
        return view('check/homepage1');
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

        return redirect()->to(base_url('checkin_msg'))->with('status','User Checkin Succesfully');

    }

    public function storeout()
    {
        $checkoutt = new checkout_detail();
        $data = [
            'f_name' => $this->request->getPost('f_name'),

            'c_name' => $this->request->getPost('c_name'),

        ];
        $checkoutt->save($data);
        return redirect()->to(base_url('checkout_msg'))->with('status','User checkout Succesfully');

    }
    public function login()
    {

        return view('check/login');
    }
    public function userlogin()
    {

        return view('check/user_login');
    }
    public function userstore()
    {
        $user = new user_login();
        $data = [
            'u_name' => $this->request->getPost('u_name'),

            'pass' => $this->request->getPost('pass'),

        ];
        $user->save($data);
        return redirect()->to(base_url('homepage'))->with('status','User checkout Succesfully');
    }


    public function loginstore()
    {
        $loginn = new login_detail();
       $result = $loginn->where('u_name',$this->request ->getVar('u_name'))->first();
       if($result!=null)
       {
           if($result['pass']==$this->request->getVar('pass'))
           {
               return redirect()->to(base_url('homepage'))->with('status','User Login Successfully');
           }
           else{
               return redirect()->to(base_url('loginpage'))->with('status','User Login Successfully');


           }

       }
       else
       {
           return redirect()->to(base_url('loginpage'))->with('status','User Login Successfully');
       }


    }



    public function tablecheckin()
    {
        {
            $check = new checkin_details();
            $data['check'] = $check->findAll();
            return view('check/checkin_table',$data);
        }
    }

    public function editcheckin($id)
    {
        $check = new checkin_details();
        $data['check'] = $check->find($id);
        return view('check/edit_checkin',$data);

    }

    public function updatein($id)
    {
        $check = new checkin_details();
        $check->find($id);
        $data = [
            'f_name' => $this->request->getPost('f_name'),
            'l_name' => $this->request->getPost('l_name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'c_name' => $this->request->getPost('c_name'),
            'p_visit' => $this->request->getPost('p_visit'),
        ];
         $check->update($id,$data);
        return redirect()->to(base_url('checkintable'))->with('status','Check in details Updated  Successfully');

    }

    public function deletecheckin($id)
    {
        $check = new checkin_details();
        $check->delete($id);
        return redirect()->to(base_url('checkintable'))->with('status','Check in deleted  Successfully');

    }


    public function logintable()
    {
        {
            $user = new user_login();

            $data['user'] = $user->findAll();
            return view('check/user_table',$data);
        }
    }

    public function editlogin($id)
    {
        $user = new user_login();
        $data['user'] = $user->find($id);
        return view('check/edit_login',$data);

    }

    public function updatelogin($id)
    {
        $user = new user_login();
        $user->find($id);
        $data = [
            'u_name' => $this->request->getPost('u_name'),
            'pass' => $this->request->getPost('pass'),

        ];
        $user->update($id,$data);
        return redirect()->to(base_url('login_table'))->with('status','Check in details Updated  Successfully');

    }

    public function deletelogin($id)
    {
        $user = new user_login();
        $user->delete($id);
        return redirect()->to(base_url('login_table'))->with('status','Check in deleted  Successfully');

    }







}


