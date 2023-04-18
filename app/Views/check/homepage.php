<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        .bg-image {
            width: 100%;
            height: 1014px;
            background-image: url(public/assets/img/istockphoto1.jpg);
            background-size: 135%;
            background-repeat: no-repeat;
        }
        .logo_img {
            height: auto;
            width: 187px;
            margin-left: 820px;
            margin-top: -2000px;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            margin-top: -1000px;
        }

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
            width: 187px;
            margin-left: 820px;
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
            margin-top: 336px;
            margin-left: 463px;

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
                margin-left: 180px;
                margin-top:60px;
            }
            a {
                color: #142434;
                text-decoration: none;
                background-color: transparent;
                margin-top: -55px;
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
                margin-top: 320px;
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
                margin-top: -1996px;
            }
            a {
                color: #142434;
                text-decoration: none;
                background-color: transparent;
                margin-top: -55px;
            }
        }


    </style>
</head>
<body>
<div class="bg-image"></div>



    <a class="navbar-brand" href="<?= base_url('/');?>">
        <image class="logo_img" src="public/assets/img/site_logo.png" alt="logo">
    </a>

<div class="col-lg-12" >

    <div class="row row-xs">
        <a href="<?= base_url('check_in');?>">
            <button class="pushable "><span class="front " style="background-color:#2a7c4f;">CHECK -IN</span></button>

        </a>

        <a href="<?= base_url('check_out');?>">
            <button class="pushable"><span class="front">CHECK-OUT</span></button>
        </a>
    </div>
</div>
</br>

</body>
</html>


