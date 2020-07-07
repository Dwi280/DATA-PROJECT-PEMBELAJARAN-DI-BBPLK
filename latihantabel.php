<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel php</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php 

    $Nama1 = "Mark";
    $Nama2 = "Siti";
    $Email1 = "@gmail.com";
    $Email2 = "@gmail.com";
    $Komentar1 = "Good nice";
    $Komentar2 = "Good nice";

    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12  bg-info text-white text-center" style="min-height:50px">Header</div>

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top container-fluid" style="min-height:50px">
                <a class="navbar-brand"><h3>Navigation</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><h6>Data Komentar</h6></a>
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

            <div class="c0l-12 col-md-8 col-lg-10 text-black mt-3" style="min-height: 800px">
                <h2 class="text-center"><b>DATA KOMENTAR</b></h2>
                <table class="table table-hover container">
                    <thead class="bg-warning">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Komentar</th>
                        </tr>
                    </thead>
                    <!-- cara agar terhubung dengan php -->
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $Nama1; ?></td>
                            <td><?php echo $Email1; ?></td>
                            <td><?php echo $Komentar1; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><?php echo $Nama2; ?></td>
                            <td><?php echo $Email2; ?></td>
                            <td><?php echo $Komentar2; ?></td>
                        </tr>
                    </tbody>   
                  </table>
            </div>
            <div class="col-12 col-md-4 col-lg-2 bg-info text-white text-center">Banner</div>
            <div class="col-12 bg-dark text-white text-center" style="min-height: 50px">Footer</div>
        </div>
     </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>