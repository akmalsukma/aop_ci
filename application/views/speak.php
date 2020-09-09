<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspiration Of People</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.css')?>">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>

    body{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        
    }
    .sidebar{
        background-color: #c40018;
        border-radius:50px;
        margin-top:10px;
        margin-left:5px;
        height: 750px;
        font-size:30px
    }

    .link-dashboard{
        text-decoration: none;
        margin-left:80px;
        color: black;
    }
    .dashboard-link{
        margin-left:55px;
    }

    .img-dashboard{
        margin-top:40px
    }

    .nav-dashboard{
        margin-top: 30%;
        
    }

    .cour{
        margin-top:50px;
        font-size:40px;
    }

    .nav-speak{
        margin-top: 30%;
        border-radius:20px;
        height: 200px;
        width: 300px;
        background-color: white;
    }

    .link-speak{
        text-decoration: none;
        margin-left:80px;
        color: black;
    }
    .speak-link{
        margin-left:55px;
    }

    .img-speak{
        margin-top: 15%;
    }

    .spe{
        font-size:60px;
        color: #E96F3A;
    }

    .input-speak{
        font-family: georgia;
        margin-left: 100px;
        margin-top: 50px;
    }


    .logout{
        border-radius:20px;
        margin-top: 20px;
        margin-left: 100px;
        width: 100px;
    }

    .megaphone {
    margin-top: 580px;
    margin-left: 90px;
    width: 120px;
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    }


    </style>

</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <center class="cour">Course </center> <br>
                
                <div class="nav-dashboard">
                    <a href="<?php echo site_url('Controller/Home') ?>" class="link-dashboard"><img src="<?php echo base_url('asset/img/dashboard.png')?>" alt="" width="60px" class="img-dashboard"> <br>
                    <span class="dashboard-link">Dashboard</span></a>
                    <br>
                </div>

                <div class="nav-speak">
                    <a href="<?php echo site_url('Controller/speak') ?>" class="link-speak"><img src="<?php echo base_url('asset/img/shout.png')?>" alt=""width="70px" class="img-speak" > <br>
                    <span class="speak-link">Speak-Up</span></a>
                    </div>
                
            </div>

            <div class="col-md-8">
                <center class="spe">
                    Speak Up!!
                </center>


        <div class="input-speak">
        <form action="" method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                </div>
                <input type="text" class="form-control" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nik</span>
                </div>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $user['nik'] ?>" disabled>
                </div>

            <div class="input-group mb-5">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Date</span>
                </div>
                <input type="date" class="form-control" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-5">
                <textarea class="form-control" aria-label="With textarea" style="height:200px;" placeholder="Aspiration"></textarea>
                </div>

                <div class="input-group mb-5">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Photo</span>
                </div>
                <input type="file" class="form-control" aria-describedby="basic-addon1">
                </div>

                <input class="btn btn-warning" type="submit" value="Submit" style="border-radius: 20px; width:150px;">

                </form>
            </div>

                
            </div>


            <div class="col-md-1">

            <a class='btn btn-danger logout' href="<?php echo site_url('Controller/logout');?>">Log out</a>

            <img src="<?php echo base_url('asset/img/megaphone.png');?>" alt="" class="megaphone">
            </div>

        </div>
</div>
</body>
</html>