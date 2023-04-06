<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        .w-50 {
            width: 64%!important;
        }
        .modal-footer {

            border-top: 0px solid #dee2e6;

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

        .btn-danger {
            color: #fff;

            border-color: #28a745;
            padding: 6px 20px;
            margin-left: -167px;

        }
        .form-label {
            margin-bottom: 0.5rem;
            margin-top: 11%;
        }


        @media (max-width: 800px) {


            .logo_img {
                height: auto;
                width: 250px;
                margin-left: 180px;
            }
            .btn-danger {
                color: #fff;

                border-color: #28a745;
                padding: 6px 20px;
                margin-left: -12px;

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





<?php
if(isset($_SESSION['status']))
{
    ?>
    <div class = "alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    unset($_SESSION['status']);
}
?>


<div class="container-fluid px-1 py-1 mx-auto">

    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card">
                <b><h5 class="text-center mb-4">CHECK-OUT</h5></b>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-12 flex-column d-flex">
                        <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label>
                        <input type="text"  name="f_name"  placeholder="Enter your first name" required >
                    </div>

                </div>

                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-12 flex-column d-flex">
                        <label class="form-control-label px-3">Company Name<span class="text-danger"> *</span></label>
                        <input type="text" name="c_name" placeholder="Enter Company Name" required>
                    </div>
                </div>

                <div class="row justify-content">
                    <div class="form-group col-sm-4">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">CHECK-OUT</button>
                        <div class ="modal" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">CHECK IN DETAILS</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('check/updatein/'.$check['id']);?>" method="post">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="pd-30 pd-sm-20">
                                                        <div class="row row-xs">
                                                            <div class="col-md-4">
                                                                <label class="form-label mg-b-0">First Name</label>
                                                            </div>
                                                            <div class="col-md-8 mg-t-10 mg-md-t-0">
                                                                <input type="text" id="fname" name="f_name" value="<?=$check['f_name']?>" placeholder="Enter your first name" required >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label mg-b-0">Last Name</label>
                                                            </div>
                                                            <div class="col-md-8 mg-t-10 mg-md-t-0">
                                                                <input type="text" id="fname" name="f_name" value="<?=$check['l_name']?>" placeholder="Enter your first name" required >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label mg-b-0">Email</label>
                                                            </div>
                                                            <div class="col-md-8 mg-t-10 mg-md-t-0">
                                                                <input type="text" name="email" value="<?=$check['email']?>" placeholder="Enter Email" >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label mg-b-0">Phone No</label>
                                                            </div>
                                                            <div class="col-md-8 mg-t-10 mg-md-t-0">
                                                                <input type="text"  name="mobile" value="<?=$check['mobile']?>" placeholder="Enter Phone number" >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label mg-b-0">Company Name</label>
                                                            </div>
                                                            <div class="col-md-8 mg-t-10 mg-md-t-0">
                                                                <input type="text"  name="c_name" value="<?=$check['c_name']?>" placeholder="Enter your first name" required >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label mg-b-0">Purpose of Visit</label>
                                                            </div>
                                                            <div class="col-md-8 mg-t-10 mg-md-t-0">
                                                                <textarea  name="p_visit" value="<?=$check['p_visit']?>" placeholder="Enter Purpose of Visit" required> </textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary">OK</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





</body>
</html>