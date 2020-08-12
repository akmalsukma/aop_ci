<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.css')?>">
    <style>
        body {
        width: 100%;
        position: absolute;
        overflow: hidden;
        font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
    .divaop{
    background-color: #c40018;
    border-right: 6px solid;
    }

    .col-md-3 {
    background-color: #c40018;
    border-right: 6px solid;
    }

    .aop {
    margin-top: 20%;
    text-align: left;
    font-size: 55px;
    margin-bottom: 87%;
    }

    .signin {
    margin-left: 80%;
    margin-top: -8%;
    }

    .signup {
    margin-left: -5px;
    margin-top: -8%;
    }

    .title1{
    font-size:75px;
    margin-top:25px;
    margin-right: 70px;
    }
    .manfaat{
    font-size:20px;
    margin-right: 70px;
    font-family:Georgia;
    font-style:italic;
    }

    .mail {
    font-size: 20px;
    margin-top: 8%;
    margin-left: 25%;
    }

    #email {
    margin-left: 55px;
    width: 300px;
    }

    #password {
    width: 300px;
    margin-left: 20px;
    }

    .pw {
    font-size: 20px;
    margin-left: 25%;
    }

    .submit {
    border-radius:20px;
    width:200px;
    margin-top: 2%;
    margin-left: 36%;
    }

    .megaphone {
    margin-top: 5%;
    width: 150px;
    /* -webkit-transform: scaleX(-1);
    transform: scaleX(-1); */
    }
    .guy{
    margin-left:868px;
    margin-top: 22px;
    }

    .garisvertikal {
    margin-top: 6%;
    border-bottom: 4px solid;
    }

    .aspiration {
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin-left: 12%;
    }

    .of {
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin-left: 52%;
    }

    .people {
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin-left: 40%;
    }
    </style>

</head>

<body>
<div class="row">
        <div class="col-md-3" style="border-bottom: 4px solid;"></div>
        <div class="col-md-9 garisvertikal">
            <a href="<?php echo site_url('Controller/login');?>" class="btn btn-danger signin">Sign in</a>
            <a href="<?php echo site_url('Controller/register');?>" class="btn btn-outline-danger signup">Sign up</a>
        </div>
    </div>
    <?php $this->load->view('base_login');?>


        <div class="col-md-9">

            <center class="title">
                <p class="title1">Sign In</p>
                <p class="manfaat">A Place where your aspirations are heard</p>
            </center>    
            <form action="<?php echo site_url('Controller/check_signin');?>" method="post">
                <div class="form-group mail">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" id="email" name="Email">
                </div>
                <div class="form-group pw">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" id="password" name="pw">
                    <img src="eye.png" alt="" style="width: 30px;">
                </div>
                <button type="submit" class="btn btn-danger submit">Sign In</button>

            </form>
            <img src="<?php echo base_url('asset/img/megaphone.png');?>" alt="" class="megaphone">
            <img src="<?php echo base_url('asset/img/noun_rebellion_2409626-removebg-preview.png');?>" alt="" class="guy">
        </div>



    </div>

</body>

</html>