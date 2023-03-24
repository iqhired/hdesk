<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        .w-50 {
            width: 64%!important;
        }
        p {
            margin-top: 80px;
            margin-bottom: 1rem;
        }
        .logo_img {
            height: auto;
            width: 135px;
            margin-left: 9px;
        }

        a {
            color: #142434;
            text-decoration: none;
            background-color: transparent;
        }

        .btn-danger {
            color: #fff;

            border-color: #28a745;
            padding: 6px 20px;
            margin-left: -5px;

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


        body{color: #000;overflow-x: hidden;height: 100%;background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg " style="background-color: #e8e7f9">
    <a class="navbar-brand" href="<?= base_url('homepage');?>">
        <image class="logo_img" src="public/assets/img/site_logo.png" alt="logo">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('homepage');?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                        <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
                        <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
                    </svg><span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>




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

<form action="<?= base_url('checkout_store');?>" method="post">

    <div class="container-fluid px-1 py-5 mx-auto">

        <div class="row d-flex justify-content-center">
            <div class="col-xl-5 col-lg-4 col-md-9 col-11 text-center">

                <div class="card">
                    <b><h5 class="text-center mb-4">CHECK-OUT</h5></b>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-10 flex-column d-flex">
                            <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="f_name" placeholder="Enter your first name" required >
                        </div>

                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-10 flex-column d-flex">
                            <label class="form-control-label px-3">Company Name<span class="text-danger"> *</span></label>
                            <input type="text" name="c_name" placeholder="Enter Company Name" required>
                        </div>
                    </div>

                    <div class="row justify-content">
                        <div class="form-group col-sm-4">
                            <button type="submit" class="btn btn-danger">CHECK-OUT</button>
                        </div>
                    </div>
</form>
</div>
</div>
</div>
</div>




</body>
</html>