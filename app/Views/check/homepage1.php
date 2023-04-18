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
            background-image:url('public/assets/img/patternimg.avif');
        }
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
        p {
            margin-top: 220px;
            margin-bottom: 1rem;
        }
        .btn-primary {

            margin-top:200px;
            margin-left:240px;
            padding: 75px;
        }

        .btn-danger {

            margin-top:200px;
            margin-left:500px;
            padding: 75px;
        }
        .logo_img {
            height: auto;
            width: 124px;
            margin-left: 9px;
        }

        .logo_images {
            width: 25px;
            height: 25px;
            margin-top:-9px;
        }


        a {
            color: #142434;
            text-decoration: none;
            background-color: transparent;
        }


        body{
            font-size: 20px;
        }

        .pushable {
            background: hsl(340deg 100% 32%);
            border-radius: 12px;
            border: none;
            padding: 0;
            cursor: pointer;
            outline-offset: 4px;
            max-resolution: res;
            margin-top: 339px;
            margin-left: 496px;

        }

        .front {
            display: block;
            padding: 40px 60px;
            border-radius: 12px;
            font-size: 1.25rem;
            background: hsl(345deg 100% 47%);
            color: white;
            transform: translateY(-6px);

        }

        .pushable:active .front {
            transform: translateY(-2px);
        }


        @media (max-width: 800px) {

            .pushable {
                background: hsl(340deg 100% 32%);
                border-radius: 12px;
                border: none;
                padding: 0;
                cursor: pointer;
                outline-offset: 4px;
                max-resolution: res;
                margin-top: 200px;
                margin-left: 220px;
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
                width: 250px;
                margin-left: 10px;
            }
            .logo_images {
                width: 25px;
                height: 25px;
                margin-top: -12px;
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
                    <a class="nav-link" href="<?= base_url('user_login');?>">User<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('logs');?>">Logs<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('loginpage');?>">
                        <image class="logo_images" src="public/assets/img/logout.png" alt="logo">

                    </a>
                </li>
            </ul>
        </div>

    </nav>

<div class="row row-xs">
    <div class="col-lg-12" >

    <a href="<?= base_url('check_inn');?>">
        <button class="pushable "><span class="front " style="background-color:#2a7c4f;">CHECK-IN</span></button>

    </a>

        <a href="<?= base_url('check_outt');?>">
            <button class="pushable"><span class="front">CHECK-OUT</span></button>
    </a>
</div>
</div>
</br>

</body>
</html>


