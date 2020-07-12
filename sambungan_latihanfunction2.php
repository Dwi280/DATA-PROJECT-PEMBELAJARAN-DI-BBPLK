<?php 
include_once 'latihanfunction2.php';

if (isset($_GET['hitung'])){
    $panjang=$_GET['panjang'];
    $sisi=$_GET['sisi'];
    $LuasPersegiPanjang = HitungLuasPersegiPanjang($panjang);
    $KelilingPersegiPanjang = HitungKelilingPersegiPanjang($panjang);
    $LuasPersegi = HitungLuasPersegi($sisi);
    $KelilingPersegi = HitungKelilingPersegi($sisi);
    
}else {
    $LuasPersegiPanjang=0;
    $KelilingPersegiPanjang=0;
    $LuasPersegi=0;
    $KelilingPersegi=0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="" name="hitung">
        persegi panjang : <input type="number" name="panjang" require><br>
        persegi : <input type="number" name="sisi" require><br>
        <input type="submit" value="hitung">
    </form>
    <hr>
    LuasPersegiPanjang : <?=$LuasPersegiPanjang?>
    KelilingPersegiPanjang : <?=$KelilingPersegiPanjang?>
    LuasPersegi : <?=$LuasPersegi?>
    KelilingPersegi : <?=$KelilingPersegi?>
</body>
</html>