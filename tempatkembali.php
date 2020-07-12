<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php
    $uangbayar = $_POST['uangbayar'];
    $totalharga = $_COOKIE['totalharga'];
    $uangkembali = number_format ($uangbayar - $totalharga,0,",",".");

    if ($totalharga>$uangbayar){
        echo "<script>alert('maaf uang bayar anda kurang')</script>" ;
        echo "<script>window.location.assign('tempatbayar.php')</script>";
    } elseif ($totalharga<$uangbayar) {    
        echo "<script>alert('Terima kasih, uang anda kembali sebesar Rp.$uangkembali')</script>" ;
        echo "<script>window.location.assign('formpenjualanbarang.php')</script>"; 
    } else {
        echo "<script>alert('Terima kasih uang anda pas' $uangkembali)</script>"; 
        echo "<script>window.location.assign('formpenjualanbarang.php')</script>";
    };
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 

</body>
</html>