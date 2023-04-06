<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-size: 20px;
        }
        .card{
            background-image:url('public/assets/img/blue.jpeg');
        }
        .w-50 {
            width: 64%!important;
        }
        p {
            margin-top: 80px;
            margin-bottom: 1rem;
        }
        .logo_img{
            height:auto;
            width:150px;
        }

        a {
            color: #142434;
            text-decoration: none;
            background-color: transparent;
        }
        .logo_img {
            height: auto;
            width: 187px;
            margin-left: 845px;
        }
        .btn-success {
            color: #fff;
            background-color: #3d7e4c;
            border-color: #28a745;
            padding: 6px 20px;
            margin-left: -180px;

        }

        @media (max-width: 800px) {


            .logo_img {
                height: auto;
                width: 250px;
                margin-left: 180px;
            }
        }

        @media (max-width: 1600px) {

            .pushable {
                background: hsl(340deg 100% 32%);
                border-radius: 12px;
                border: none;
                padding: 0;
                cursor: pointer;
                outline-offset: 4px;
                max-resolution: res;
                margin-top: 260px;
                margin-left: 400px;
            }

            .front {
                display: block;
                padding: 40px 30px;
                border-radius: 12px;
                font-size: 1.25rem;
                background: hsl(345deg 100% 47%);
                color: white;
                transform: translateY(-6px);

            }

            .pushable:active .front {
                transform: translateY(-2px);
            }

            .logo_img {

                height: auto;
                width: 200px;
                margin-left: 694px;
                margin-top:60px;
            }


            a {
                color: #142434;
                text-decoration: none;
                background-color: transparent;
                margin-top: -55px;
            }
        }



        body{color: #000;overflow-x: hidden;height: 100%;background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>

</head>
<body>
    <a class="navbar-brand" href="<?= base_url('/');?>">
        <image class="logo_img" src="public/assets/img/site_logo.png" alt="logo">

    </a>
<form action="<?= base_url('checkin_store');?>" method="post">
    <div class="container-fluid px-1 py-1 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card" >
                    <b><h5 class="text-center mb-4">CHECK-IN</h5></b>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="f_name" placeholder="Enter your first name" required >
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Last name<span class="text-danger"></span></label>
                            <input type="text" id="lname" name="l_name" placeholder="Enter your last name" >
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Email<span class="text-danger"> </span></label>
                            <input type="email" name="email" placeholder="Enter Email" >
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Phone number<span class="text-danger"> </span></label>
                            <input type="text"  name="mobile" placeholder="Enter Phone number"  pattern="[0-9]{5}-[0-9]{5}" >
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex">
                            <label class="form-control-label px-3">Company Name<span class="text-danger"> *</span></label>
                            <input type="text" name="c_name" placeholder="Enter Company Name" required>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Purpose of Visit<span class="text-danger"> *</span></label>
                            <input type="text" name="p_visit" placeholder="Enter Purpose of Visit" required> </textarea></div>
                    </div>
                    <div class="row justify-content">
                        <div class="form-group col-sm-4">
                            <button type="submit" class="btn btn-success">CHECK-IN</button>

                        </div>
                    </div>
                 </form>
              </div>
            </div>
        </div>
    </div>






</body>
</html>