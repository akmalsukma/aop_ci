<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>

<p>Nama : Akmal Permata Sukma</p>
<p>Kelas : XII RPL 1</p>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">No HP</th>
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
  </tbody>
        </table>
</body>
</html>