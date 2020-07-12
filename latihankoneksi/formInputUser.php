<?php require_once "koneksi.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
          width: 100%;
          height: 500px;
        }
    </style>
</head>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center carousel slide bg-info" id="demo" data-ride="carousel" style="min-height: 100px">Header</div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top container-fluid" style="min-height:50px">
            <a class="navbar-brand"><h3>Navigation</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="formInputUser"><h6>Form Input Data User</h6></a>
                    </li>    
                </ul>
                <!-- memberikan jarak/space antara navbar collapse pada navbar form -->
                <ul class="navbar-nav mr-auto"></ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
                </form>
            </div>
        </nav>

        <div class="c0l-12 col-md-8 col-lg-10 text-black mt-3" style="min-height: 900px">
        <h2 class="text-center"><b>FORM INPUT DATA USER</b></h2>
        <br>
            <form action="prosesinsert.php" method="POST">
                <div class="form-group row" >
                <label for="name" class="col-sm-2 col-form-label">Name :</label>
                      <div class="col-sm-10">
                        <input type="name" name="namaUser" class="form-control" placeholder="Masukkan Nama Anda" required>
                      </div>
                </div>
                <div class="form-group row" >
                <label for="email" class="col-sm-2 col-form-label">Email :</label>
                      <div class="col-sm-10">
                        <input type="email" name="emailUser" class="form-control" placeholder="Masukkan Email Anda" required>
                      </div>
                </div>
                <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password :</label>
                      <div class="col-sm-10">
                        <input type="password" name="passwordUser" class="form-control" placeholder="Masukkan Kata Sandi Anda" required>
                      </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Send</button> 
            </form>
            <!-- tabel data -->
            <table class="table mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT*FROM tb_users";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            // akan dijalankan jika record atau barisnya ada
                            while($row = $result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?=$row['id_user']?></td>
                                    <td><?=$row['nama_user']?></td>
                                    <td><?=$row['email_user']?></td>
                                    <td>
                                    <!-- ?id itu adalah nama -->
                                        <a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger" href="prosesDeleteUser.php?id=<?=$row['id_user']?>"> 
                                            Delete 
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            // akan dijalankan jika recordnya dalam keadaan kosong
                            echo "<tr><td colspan='3'>Record masih kosong</td></tr>";
                        }
                    ?>
                </tbody>
            </table>

        </div>
            <div class="col-12 col-md-4 col-lg-2 bg-info text-white text-center">Benner</div>
        <div class="col-12 bg-dark text-white text-center" style="min-height: 50px">Footer</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 

</body>
</html>
  