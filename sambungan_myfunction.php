<?php 
include_once 'myfunction.php';

if (isset($_GET['jari'])){
    $r=$_GET['jari'];
    $luas = hitungluaslingkaran($r);
    $keliling =hitungkelilinglingkaran($r);
}else {
    $luas = 0;
    $keliling = 0;
}

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my function</title>
</head>
<body>
    <form action="" method="">
        jari-jari lingkaran : <input type="number" name="jari" require><br>
        <button type="submit" class="btn btn-success btn-lg btn-block" value="hitung">Hitung</button> 
    </form>
    <hr>
    luas lingkaran : <?=$luas?> <br>
    keliling lingkaran : <?=$keliling?>
</body>
</html>