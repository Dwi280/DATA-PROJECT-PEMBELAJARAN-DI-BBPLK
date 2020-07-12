<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form penjualan</title>
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
        <div class="col-12 text-center carousel slide" id="demo" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/image/tempatsepatu.jpg">
                </div>
                <div class="carousel-item">
                    <img src="assets/image/nike.jpg">
                </div>
                <div class="carousel-item">
                    <img src="assets/image/puma.jpg">
                </div>
            </div>    
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top container-fluid" style="min-height:50px">
            <a class="navbar-brand"><h3>Navigation</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h6>Form Penjualan</h6></a>
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
        <h2 class="text-center"><b>FORM PENJUALAN</b></h2>
        <br>
            <form action="tempatbayar.php" method="POST" name="hitung">
                <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10"> 
                    <select class="custom-select" name="namabarang">
                        <option selected="Adidas">Adidas</option>
                        <option value="Nike">Nike</option>
                        <option value="New Balance">New Balance</option>
                        <option value="Puma">Puma</option>
                        <option value="Skechers">Skechers</option>
                    </select>  
                    </div>
                </div>
                <div class="form-group row" min="0">
                <label for="number" class="col-sm-2 col-form-label">Harga Barang</label>
                      <div class="col-sm-10">
                        <input type="number" name="hargabarang" class="form-control">
                      </div>
                </div>
                <div class="form-group row" min="0">
                <label for="number" class="col-sm-2 col-form-label">Jumlah Barang</label>
                      <div class="col-sm-10">
                        <input type="number" name="jumlahbarang" class="form-control">
                      </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Hitung</button> 
            </form>
        </div>
            <div class="col-12 col-md-4 col-lg-2 bg-info text-white">
                <h3 class="mt-2" align="center"><b>Kategori</b></h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Wanita (12786)</a>
                    <a href="#" class="list-group-item list-group-item-action">Pria (1567)</a>
                    <a href="#" class="list-group-item list-group-item-action">Anak (398)</a>
                </div>

            </div>
        <div class="col-12 bg-dark text-white text-center" style="min-height: 50px">Footer</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 

</body>
</html>
