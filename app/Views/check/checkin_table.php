<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap4.min.css')?>">


    <link rel="stylesheet"  href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>


    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        .w-50 {
            width: 64%!important;
        }
        p {
            margin-top: 80px;
            margin-bottom: 1rem;
        }
        .card {
            width: max-content;
        }
        .card {
            padding: 30px 40px;
            margin-top: 60px;
            margin-bottom: 60px;
            border: none !important;
            margin-left: -17%;
            box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
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
        .btn-primary {
            color: #fff;
            background-color: #4c5292;
            border-color: #007bff;
            margin-left: 192%;
            margin-top: -65px;
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
                    </svg>
                    <span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>

<div class="container">
        <div class="col-md-12 mt-5">
            <div class="row-sm">
            <div class="card">
                <div class="card-header">
                    <h4>CHECK IN DETAILS</h4>
                    <div class="col-md-6">
                        <a href="<?php echo base_url('exportData1');?>" class="btn btn-primary">EXPORT
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="check" style="width:100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Company Name</th>
                            <th>Purpose of visit</th>
                            <th>Check In </th>
                            <th>Check Out</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if($check): ?>
                        <?php foreach($check as $row) : ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['f_name'] ?></td>
                            <td><?= $row['l_name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['mobile'] ?></td>
                            <td><?= $row['c_name'] ?></td>
                            <td><?= $row['p_visit'] ?></td>
                            <td><?= $row['checkin_time'] ?></td>
                            <td></td>


                            <td>

                                <a href="<?= base_url('editcheckin/'.$row['id'])?>" class="btn btn-success btn-sm" style="background-color:#1c6c2a "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg></a>
                                <a href="<?= base_url('deletecheckin/'.$row['id'])?>" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg></a>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

                <script>
                    $(document).ready( function () {
                        $('#check').DataTable();
                    } );
                </script>

        </div>
        </div>
    </div>

</body>


