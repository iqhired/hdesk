<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        .container-fluid {
            width: 100%;
            padding-right: 69px;
            padding-left: 80px;
            margin-right: 50px;
            margin-left: -129px;
        }


        .card {
            padding: 49px 40px;
            margin-top: 157px;
            margin-bottom: 76px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
            margin-left: 208px;
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
            margin-left: 650px;
        }

        .logo_images {
            height: auto;
            width: 200px;
            margin-left: 108px;
        }

        .logo_imag {
            height: auto;
            width: 150px;
            margin-left: 170px;
            margin-left: 150px;
        }

        .card {
            padding: 24px 40px;
            margin-top: 100px;

            box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
        }

        .container-fluid.px-7.py-md-5 {
            margin-top: 70px;
        }

        @media (max-width: 800px) {


            .logo_imag {
                height: auto;
                width: 150px;
                margin-left: 100px;
            }
            .container-fluid.px-7.py-md-5 {
                margin-top: 165px;
            }
            .logo_images {
                height: auto;
                width: 200px;
                margin-left: 80px;


            }
        }


        body{color: #000;overflow-x: hidden;height: 100%;background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>

</head>
<body>
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

<div class="container-fluid px-7 py-md-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-5 col-lg-12 col-md-9 col-11 text-center">
            <div class="card">
                <image class="logo_images" src="public/assets/img/tick1.gif" alt="logo">
                    <h2><b>  WELCOME  TO SAARGUMMI GROUP </b></h2>
                    <image class="logo_imag" src="public/assets/img/site_logo.png" alt="logo">
            </div>
        </div>
    </div>
</div>
</body>
</html>