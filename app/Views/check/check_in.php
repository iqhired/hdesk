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
    .container-fluid {
        margin-left: 35px;
        margin-right: 33px;
        padding-left: 15px;
        padding-right: 15px;
        width: 80%;
    }

    .card-header {
        border-bottom: 0;
        border-top-left-radius: 5px!important;
        border-top-right-radius: 5px!important;
        background-color: #d9d9d9;
    }
    .app-content {
        margin-bottom: 0!important;
        min-height: calc(100vh - 114px);
        transition: margin-left .32s ease;
        margin-top: 100px;
    }
    .logo_img {
        height: auto;
        width: 187px;
        margin-left: 845px;
    }
    @media (max-width: 1600px) {

        .card {
            padding: 30px 40px;
            margin-top: 1px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
        }



        .logo_img {
            height: auto;
            width: 134px;
            margin-left: 690px;
            margin-top: 22px;
            margin-bottom: -21px;
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
            margin-left: -67px;
            margin-right: 33px;
            padding-left: 15px;
            padding-right: 15px;
            width: 93%;
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
            width: 139px;
            margin-left: 227px;
            margin-top: 22px;
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
<body>
<a class="navbar-brand" href="<?= base_url('/');?>">
    <image class="logo_img" src="public/assets/img/site_logo.png" alt="logo">

</a>

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
                        <label class="form-label mg-b-0">Purpose Of Visit</label>
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
</form>
</body>


