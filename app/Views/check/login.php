<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        .bg-image
        {
            width:100%;
            height:998px;
            background-image:url('public/assets/img/istockphoto1.jpg');
            background-size:100%;
            background-repeat:no-repeat;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: 2.25rem;
        }
        .form-control {

            border-radius: 1.25rem;
        }
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;
            padding: 0.375rem 0.75rem;


            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            body {margin: 0; height: 100%; overflow: hidden}

            .mb-4, .my-4 {
                margin-bottom: 1.5rem!important;
                width: 113%;
                margin-left: -12px;
            }

            .mb-5, .my-4 {
                margin-bottom: 1.5rem!important;
                width: 70%;
                margin-left: 24px;
            }
            .justify-content-center {
                -ms-flex-pack: center!important;
                justify-content: center!important;
                margin-top: -756px;
            }
        }



        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
        p {
            margin-top: 30px;
            margin-bottom: 1rem;
        }
    </style>

</head>
<body>
<div class="bg-image"></div>

<section class="h-100 gradient-form" style="background-color: #ffffff;" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-5">
                <?php
                $session=\Config\Services::session();
                helper('form');
                if(!empty($session->getFlashdata('status'))){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $session->getFlashdata('status');?>

                    </div>
                    <?php
                }
                ?>
                <div class="card rounded-3 text-black" style="width: 21rem; margin-left: 61px; box-shadow: 0 12px 20px -10px rgb(59 149 163 / 28%), 0 4px 20px 0px rgb(0 0 0 / 12%), 0 7px 8px -5px rgb(59 149 163 / 20%);">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="card-body p-md-5 mx-md-4" >
                                <form action="<?= base_url('login_store');?>" method="post">
                                    <div class="text-center">
                                        <h5 class="mt-1 mb-4 pb-1"><b> Login to your account </b></h5>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="u_name" id="" class="form-control"
                                               placeholder="Username" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input class="form-control" type="password" placeholder="Password" name="pass" id="pass" required="required" >
                                        <span class="input-icon" onclick="myFunction()" style="cursor: pointer;float: right;margin-top: -30px;margin-right:7px"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                                            in</button>
                                        <a class="text-muted" href="#">Forgot password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>


