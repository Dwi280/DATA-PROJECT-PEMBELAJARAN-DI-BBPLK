<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pembayaran</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php 
    $namabarang =$_POST['namabarang'];
    $hargabarang =$_POST['hargabarang'];
    $jumlahbarang =$_POST['jumlahbarang'];
    $totalharga = $hargabarang*$jumlahbarang;
        setcookie("totalharga", $totalharga);
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
                        <a class="nav-link" href="#"><h6>Form Pembayarn</h6></a>
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
        <h2 class="text-center"><b>FORM PEMBAYARAN</b></h2>
        <br>
            <form action="tempatkembali.php" method="POST">
            <div class="form-group row" min="0">
                <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="" class="form-control" value="<?= $namabarang; ?>">
                      </div>
                </div>
                <!-- <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10"> 
                    <select class="custom-select" name="namabarang">
                        <option selected="buku tulis">Buku Tulis</option>
                        <option value="pulpen">Pulpen</option>
                        <option value="penghapus">Penghapus</option>
                        <option value="pensil">Pensil</option>
                        <option value="penggaris">Penggaris</option>
                    </select>  
                    </div>
                </div> -->
                <div class="form-group row" min="0">
                <label for="" class="col-sm-2 col-form-label">Harga Barang</label>
                      <div class="col-sm-10">
                        <input type=""  class="form-control" value="<?= $hargabarang; ?>">
                      </div>
                </div>
                <div class="form-group row" min="0">
                <label for="" class="col-sm-2 col-form-label">Jumlah Barang</label>
                      <div class="col-sm-10">
                        <input type=""  class="form-control" value="<?= $jumlahbarang; ?>">
                      </div>
                </div>
                <div class="form-group row" min="0">
                <label for="" class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-10">
                        <input type="" name="totalharga" class="form-control" value="<?= $totalharga; ?>" id="totalharga">
                    </div>
                </div>
                <div class="form-group row" >
                <label for="bayar" class="col-sm-2 col-form-label">Uang Bayar</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" name="uangbayar" class="form-control" onchange="getkembali()" onkeyup="getkembali()" id="bayar"  required="">
                    </div>
                </div>
                <div class="form-group row" >
                <label for="kembali" class="col-sm-2 col-form-label">Uang Kembali</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" name="uangkembali" class="form-control" id="kembali" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Bayar</button> 
            </form>
        </div>
            <div class="col-12 col-md-4 col-lg-2 bg-info text-white text-center">Banner</div>
        <div class="col-12 bg-dark text-white text-center" style="min-height: 50px">Footer</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 

<script>
    function getkembali() {
    var totalharga = document.getElementById('totalharga').value
    var uangbayar = document.getElementById('bayar').value

    var uangkembali = uangbayar - totalharga
    document.getElementById('kembali').value = uangkembali
    console.log(kembali)
    }
</script>

</body>
</html>