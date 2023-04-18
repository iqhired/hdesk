<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>

        @media (max-width: 2000px) {
            .logo_images {
                width: 29%;
                margin-left: 150px;
            }
            .logo_imag{
                width: 29%;
                margin-left: 152px;
            }
            .card {
                padding: 30px 40px;
                margin-top: 60px;
                margin-bottom: 60px;
                border: none !important;
                box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
                margin-left: 268px;
            }
            .container-fluid {
                width: 100%;
                padding-right: 15px;
                padding-left: 12px;
                margin-right: auto;
                margin-left: -138px;
                margin-top: 196px;
            }

        }

        @media (max-width: 800px) {
            .logo_images {
                width: 58%;
                margin-left: 41px;
            }

            .logo_imag{
                width: 29%;
                margin-left: 152px;
            }

            .card {
                padding: 30px 40px;
                margin-top: 60px;
                margin-bottom: 60px;
                border: none !important;
                box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
                margin-left: 268px;
            }
            .container-fluid {
                width: 100%;
                padding-right: 15px;
                padding-left: 12px;
                margin-right: auto;
                margin-left: -138px;
                margin-top: 196px;
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