<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Nowa – Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template"/>

    <!-- Title -->
    <title> Check in</title>

    <!-- FAVICON -->


    <!-- ICONS CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/plugins/icons/icons.css" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- RIGHT-SIDEMENU CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-SCROLL BAR CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />


    <!--- Internal Select2 css-->
    <link href="https://laravel8.spruko.com/nowa/assets/plugins/select2/css/select2.min.css" rel="stylesheet">


    <!-- STYLES CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/css/style.css" rel="stylesheet">
    <link href="https://laravel8.spruko.com/nowa/assets/css/style-dark.css" rel="stylesheet">
    <link href="https://laravel8.spruko.com/nowa/assets/css/style-transparent.css" rel="stylesheet">


    <!-- SKIN-MODES CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/css/skin-modes.css" rel="stylesheet" />

    <!-- ANIMATION CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/css/animate.css" rel="stylesheet">

    <!-- SWITCHER CSS -->
    <link href="https://laravel8.spruko.com/nowa/assets/switcher/css/switcher.css" rel="stylesheet"/>
    <link href="https://laravel8.spruko.com/nowa/assets/switcher/demo.css" rel="stylesheet"/>

</head>
<style>
    @media (max-width: 2000px) {


        .logo_img{
            width:30%;
        }
        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
            margin-left: 1393px;
        }
        .card-header {
            border-bottom: 0;
            border-top-left-radius: 5px!important;
            border-top-right-radius: 5px!important;
            background-color:#69a2ab;
        }
        .container-fluid {
            margin-left: -61px;
            margin-right: 33px;

            width: 93%;
            margin-top: 207px;
        }



    }
    @media (max-width: 1600px) {

        .logo_img{
            width:30%;
        }
        .card-header {
            border-bottom: 0;
            border-top-left-radius: 5px!important;
            border-top-right-radius: 5px!important;
            background-color:#69a2ab;
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            list-style: none;
            margin-bottom: 0;
            padding-left: 0;
            margin-left: 995px;
        }
        .card {
            padding: 30px 40px;
            margin-top: 121px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
        }

        .container-fluid {
            margin-left: -61px;
            margin-right: 33px;
            padding-left: 15px;
            padding-right: 15px;
            width: 93%;
        }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            color: black;
        }
    }

    @media (max-width: 800px) {

        .card {
            padding: 30px 40px;
            margin-top: -52px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
        }
        .logo_img {
            height: auto;
            width: 134px;
            margin-left: -6px;
            margin-top: 16px;
            margin-bottom: 16px;
        }
        a {
            color: #142434;
            text-decoration: none;
            background-color: transparent;
            margin-top: -19px;
            margin-bottom: -16px;
        }

        .btn-success {
            color: #fff;
            background-color: #3d7e4c;
            border-color: #28a745;
            padding: 6px 20px;
            margin-left: -111px;
        }

        .container-fluid {
            margin-left: 25px;
            margin-right: 33px;
            padding-left: 15px;
            padding-right: 15px;
            width: 93%;
        }
    }


    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg " style="background-color:#d7e8ee;">
    <a class="navbar-brand" href="<?= base_url('homepage');?>">
        <image class="logo_img" src="public/assets/img/site_logo.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('checkintable');?>"> Details <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('homepage');?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                        <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
                        <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
                    </svg><span class="sr-only">(current)</span>
                </a>
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

<div class="main-content app-content">
    <!-- container -->
    <div class="main-container container-fluid">
        <!-- breadcrumb -->
        <form action="<?= base_url('checkin_store');?>" method="post">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">CHECK IN</h6>
                        </div>
                        <div class="pd-30 pd-sm-20">
                            <div class="row row-xs">
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">First Name</label>
                                </div>
                                <div class="col-md-4 mg-t-10 mg-md-t-0">
                                    <input type="text" class="form-control" name="f_name" id="name" placeholder="Enter First Name" required>
                                </div>

                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">Last Name</label>
                                </div>
                                <div class="col-md-4 mg-t-10 mg-md-t-0">
                                    <input type="text" class="form-control" name="l_name"  placeholder="Enter Last Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="pd-30 pd-sm-20">
                            <div class="row row-xs">
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">Email</label>
                                </div>
                                <div class="col-md-4 mg-t-10 mg-md-t-0">
                                    <input type="text" class="form-control" name="email" id="name" placeholder="Enter Email" required>
                                </div>

                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">Mobile No.</label>
                                </div>
                                <div class="col-md-4 mg-t-10 mg-md-t-0">
                                    <input type="text" class="form-control" name="mobile"  placeholder="Enter Mobile No.." required>
                                </div>
                            </div>
                        </div>

                        <div class="pd-30 pd-sm-20">
                            <div class="row row-xs">
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">Company Name</label>
                                </div>
                                <div class="col-md-4 mg-t-10 mg-md-t-0">
                                    <input type="text" class="form-control" name="c_name" id="name" placeholder="Enter Company Name" required>
                                </div>

                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <label class="form-label mg-b-0">Purpose of Visit</label>
                                </div>
                                <div class="col-md-4 mg-t-10 mg-md-t-0">
                                    <input type="text" class="form-control" name="p_visit" id="description" placeholder="Enter Purpose of Visit" required>
                                </div>
                            </div>
                        </div>




                        <div class="card-body pt-0">

                            <button type="submit" class="btn btn-primary pd-x-30 mg-r-5 mg-t-5 submit_btn">SUBMIT</button>
                        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>





</body>
</html>