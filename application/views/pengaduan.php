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
        border-radius:20px;
        height: 200px;
        width: 300px;
        margin-top: 30%;
        background-color: white;
        
    }

    .cour{
        margin-top:50px;
        font-size:40px;
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
        margin-top: 40%;
    }

    .exper{
        font-size:60px;
        color:#c40018;
        margin-left: 30%;

    }

    .asp{
        font-size:60px;
        color: #E96F3A;
        margin-left: 50%;
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
                    <a href="<?php echo site_url('Controller/Home') ;?>" class="link-dashboard"><img src="<?php echo base_url('asset/img/dashboard.png')?>" alt="" width="60px" class="img-dashboard"> <br>
                    <span class="dashboard-link">Dashboard</span></a>
                    <br>
                </div>

                <div class="nav-speak">
                    <a href="<?php echo site_url('Controller/speak') ?>" class="link-speak"><img src="<?php echo base_url('asset/img/shout.png')?>" alt=""width="70px" class="img-speak" > <br>
                    <span class="speak-link">Speak-Up</span></a>
                    </div>
                
            </div>

            <div class="col-md-8">
               
                <span class="exper">Expressed</span> <br>
                <span class="asp">Aspiration</span>

                <p>
                <?php echo $user['username'] ?> <br>
                <?php echo $user['status'] ?> 
                </p>

                <!-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=F2Qt60oJqnA" allowfullscreen></iframe>
                </div> -->

            </div>


            <div class="col-md-1">
            
            <!-- <ul class="navbar-nav ml-auto">

        

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <!-- <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">php echo $user['username']?></span>
              </a> -->
              <!-- Dropdown - User Information -->
              <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> -->
              <a class='btn btn-danger logout' href="<?php echo site_url('Controller/logout/'.$user['nik']);?>">Log out</a>
              <!-- </div>
            </li>

          </ul> --> 
            

            <img src="<?php echo base_url('asset/img/megaphone.png');?>" alt="" class="megaphone">
            </div>

        </div>
</div>
</body>
</html>