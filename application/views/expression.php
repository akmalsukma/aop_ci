<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experssion</title>
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
        margin-top:5px;
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
        margin-top: 50%;
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
        margin-top: 40%;
    }

    .logout{
        border-radius:20px;
        margin-top: 0px;
        margin-left: 320px;
        width: 100px;
    }

    .pdf{
        border-radius:20px;
        margin-top: 20px;
        margin-left: 850px;
        margin-bottom: 20px;
        width: 100px;
    }

    .xls{
        border-radius:20px;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100px;
    }


    </style>

</head>
<body>
    <div class="container-fluid">
    <a class='btn btn-outline-danger pdf' href="<?php echo site_url('Controller/print_pdf');?>">Export PDF</a>
    <a class='btn btn-success xls' href="<?php echo site_url('Controller/print_xls');?>">Export XLS</a>

    <a class='btn btn-danger logout' href="<?php echo site_url('Controller/logout');?>">Log out</a> 
        <div class="row">
        
            <div class="col-md-9">
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">No HP</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        if ($c_masyarakat>0) {
            $no = 1;
            foreach ($masyarakat as $data) {
                
                ?>
                <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data ->nik ?></td>
                <td><?php echo $data ->username ?></td>
                <td><?php echo $data ->email ?></td>
                <td><?php echo $data ->no_hp ?></td>
                <td><?php echo $data ->password ?></td>
                <td><a  href="<?php echo site_url('Controller/edit/'.$data->nik)?>" class="btn btn-warning">
                           Edit</a>
                           <?php echo anchor('Controller/delete/'.$data->nik,'Hapus'); ?>	
                      
                            </td>
                </tr>

                <?php
            }      
        }
        else{

            ?>
            <tr>
            <td><center>Data Kosong</center></td>
            </tr>
            <?php
        }
        ?>
    </tr>
  </tbody>
        </table>

            </div>
        </div>
        </div>

        
</body>
</html>