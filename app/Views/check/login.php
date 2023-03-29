<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
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
            margin-top: 30px;
            margin-bottom: 1rem;
        }
    </style>

</head>


<section class="h-100 gradient-form" style="background-color: #ffffff;" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-5">
                <div class="card rounded-3 text-black" style="box-shadow: 0 12px 20px -10px rgb(59 149 163 / 28%), 0 4px 20px 0px rgb(0 0 0 / 12%), 0 7px 8px -5px rgb(59 149 163 / 20%);">
                    <div class="row g-0">
                        <div class="col-lg-12" >

                            <div class="card-body p-md-5 mx-md-4" >
                                <form action="<?= base_url('login_store');?>" method="post">
                                    <div class="text-center">
                                        <h5 class="mt-1 mb-5 pb-1">Please login to your account</h5>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="u_name" id="" class="form-control"
                                               placeholder="Username" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="pass" id="" class="form-control" placeholder="Password" required />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                                            in</button>
                                        <a class="text-muted" href="#!">Forgot password?</a>
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

