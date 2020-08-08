<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspiration Of People</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.css')?>">
    <style>
        body{
    background-image: url("<?php echo base_url('asset/img/background_home.jpg')?>");
    background-repeat: no-repeat;
    overflow: hidden;

    
}
.society{
    color: #292725;
    font-size: 100px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.for{
    color: #292725;
    font-size: 100px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
#community{
    color: #292725;
    font-size: 100px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.change{
    background-color: #292725;
    border: none;
    border-radius:10px;
    color: white;
     text-align: center;
    text-decoration: none;
     height: 50px;
    width: 200px;
    margin-top: 120%;
    margin-left: -32%;
}
.change:hover {
    background-color: #e9290f
}
.change:active{
    background-color: #e9290f;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}

.login{
    background-color: #292725;
    border: none;
    border-radius:20px;
    color: white;
    text-decoration: none;
     height: 35px;
    width: 100px;
    margin-top: 5%;
    margin-left: 60%;
}

.login:hover {
    background-color: #ff6107
}

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p>
                    <span class="society">Society </span><br>
                    <span class="for">For </span><br>
                    <span id="community"> Community</span>
                </p>
            </div>

            <div class="col-md-3">
                <button class="change">Change-over, NOW!!</button>
            </div>

            <div class="col-md-3">
                <a class="btn btn-dark login" href="<?php echo site_url('Controller/login');?>">Sign In</a>
            </div>

        </div>
    </div>
</body>

</html>