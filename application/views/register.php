<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.css')?>">
    <style>
body {
    width: 100%;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    position: absolute;
    overflow: hidden;
}

.col-md-3 {
    background-color: #c40018;
    border-right: 6px solid;
}

.aop {
    margin-top: 20%;
    text-align: left;
    font-size: 55px;
    /* height: 569px; */
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
    margin-top:20px;
    margin-right: 70px;
    }
    .manfaat{
    font-size:20px;
    margin-right: 70px;
    font-family:Georgia;
    font-style:italic;
    }

.nik{
    font-size: 20px;
    margin-top: 0;
    margin-left: 25%;
}
.name{
    font-size: 20px;
    margin-left: 25%;
}
.nohp{
    font-size: 20px;
    margin-left: 25%;
}

.mail {
    font-size: 20px;
    margin-left: 25%;
}

#form_nik{
    margin-left:70px;
    width:300px;
}
#name{
    margin-left:20px;
    width:300px;
}

#nohp{
    margin-left:10px;
    width:300px;
}
#form_email {
    margin-left: 58px;
    width: 300px;
}

#form_password {
    margin-left: 20px;
    width: 300px;
}

.pw {
    font-size: 20px;
    margin-left: 25%;
}

.submit {
    border-radius:20px;
    width: 200px;
    margin-top: 2%;
    margin-left: 35%;
}

.megaphone {
    margin-top: -35px;
    width: 150px;

}
.guy{
    margin-left:1010px;
    margin-top: -208px;
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
<div class="container-fluid">
<div class="row">
        <div class="col-md-3" style="border-bottom: 4px solid;"></div>
        <div class="col-md-9 garisvertikal">
            <a href="<?php echo site_url('Controller/login');?>" class="btn btn-outline-danger signin">Sign in</a>
            <a href="<?php echo site_url('Controller/register');?>" class="btn btn-danger signup">Sign up</a>
        </div>
    </div>
<?php $this->load->view('base_login');?>



        <div class="col-md-9">
        <center class="title">
                <p class="title1">Join now!!</p>
                <p class="manfaat">A Place where your aspirations are heard</p>
            </center>    

            <form action="<?php echo site_url('Controller/simpan_data');?>" method="post">
            <div class="form-group nik">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" id="form_nik" name="Nik" value="<?php echo set_value('Nik');?>">
                    <?php echo form_error('Nik' , '<small class="text-danger">', '</small>');?>
                </div>
                <div class="form-group name">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" id="name" name="name" value="<?php echo set_value('name')?>">
                    <?php echo form_error('name' , '<small class="text-danger">', '</small>');?>
                </div>
                <div class="form-group nohp">
                    <label for="exampleInputEmail1">Handphone</label>
                    <input type="number" id="nohp" name="nohp" value="<?php echo set_value('nohp')?>">
                    <?php echo form_error('nohp' , '<small class="text-danger">', '</small>');?>
                </div>
                <div class="form-group mail">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" id="form_email" name="Email" value="<?php echo set_value('Email')?>">
                    <?php echo form_error('Email' , '<small class="text-danger">', '</small>');?>
                </div>
                <div class="form-group pw">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" id="form_password" name="pw">
                    <?php echo form_error('pw' , '<small class="text-danger">', '</small>');?>
                    
                </div>
                <button type="submit" class="btn btn-danger submit">Sign Up</button>

            </form>




            
            <img src="<?php echo base_url('asset/img/megaphone.png');?>" alt="" class="megaphone">
            <img src="<?php echo base_url('asset/img/noun_rebellion_2409626-removebg-preview.png');?>" alt="" class="guy">
        </div>



    </div>
    </div>
</body>

</html>