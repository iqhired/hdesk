<?php
session_start();
?>
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


        body{color: #000;overflow-x: hidden;height: 100%;background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url('/');?>">
        <image class="logo_img" src="public/assets/img/site_logo.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/');?>">Home Page <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('checkintable');?>">Check-in Details <span class="sr-only">(current)</span></a>
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

<form action="<?= base_url('check/updatein/'.$check['id']);?>" method="post">

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <b><h5 class="text-center mb-4">UPDATE CHECK-IN</h5></b>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="f_name" value="<?=$check['f_name']?>" placeholder="Enter your first name" required >
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Last name<span class="text-danger"></span></label>
                            <input type="text" id="lname" name="l_name" value="<?=$check['l_name']?>" placeholder="Enter your last name" >
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Email<span class="text-danger"> </span></label>
                            <input type="text" name="email" value="<?=$check['email']?>" placeholder="Enter Email" >
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Phone number<span class="text-danger"> </span></label>
                            <input type="text"  name="mobile" value="<?=$check['mobile']?>" placeholder="Enter Phone number" >
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex">
                            <label class="form-control-label px-3">Company Name<span class="text-danger"> *</span></label>
                            <input type="text" name="c_name" value="<?=$check['c_name']?>" placeholder="Enter Company Name" required>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Purpose of Visit<span class="text-danger"> *</span></label>
                            <textarea  name="p_visit" value="<?=$check['p_visit']?>" placeholder="Enter Purpose of Visit" required> </textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-4">
                            <button type="submit" class="btn-block btn-primary">UPDATE CHECK-IN</button>

                        </div>
                    </div>
</form>
</div>
</div>
</div>
</div>




<footer>
    <p class="p-3 bg-dark text-white text-center">@company.com</p>
</footer>

</body>
</html>