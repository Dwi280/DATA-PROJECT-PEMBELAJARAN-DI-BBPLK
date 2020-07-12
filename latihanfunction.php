<?php
// $x adalah variabel global bisa lebih dari satu dalam penulisan 
$x= 6;

function perkenalan(){
    echo "hallo perkenalkan nama saya budi <br>";
    echo "senang kenalan dengan anda <br>";
    echo "sampai berjumpa kembali";
    echo "<hr>";
}
// contoh function menggunakan parameter
// ketika pake parameter defaulf tinggal tambahkan $nama="joko" dan begitupun juga salam
function perkenalankedua ($nama="joko" ,$salam="hallo"){
    echo "$salam, perkenalan nama saya $nama <br>";
    echo "senang berkenalan dengan anda <br>";
    echo "sampai berjumpa lagi";
    echo "<hr>";
}

// function mengembalikan nilai (return)
function hitungumur($tahunlahir, $tahunsekarang){
    $umur = $tahunsekarang - $tahunlahir;
    return $umur;
}

function hitungluassegitiga($alas, $tinggi) {
    // $luas adalah variabel lokal
    $luas = $alas * $tinggi / 2;
    return $luas;
}

function hitungkelilingsegitiga($a, $b, $c) {
    global $x;
    $keliling = $a + $b + $x;
    return $keliling;
}

// script untuk memanggil / mengulang pada script sebelumnya
/*perkenalan();
perkenalankedua();*/
$tahunsekarang = date ('Y');
echo "umur saya adalah".hitungumur(2000, 2020)."<br>";
echo "luas segitiga dengan alas sebesar 3cm dan tinggi 4cm adalah :".hitungluassegitiga (3, 4)."<br>";
echo "keliling segitiga dengan sama sisi sebesar 6cm, 6cm, dan 6cm:".hitungkelilingsegitiga (6, 6, 6);
?>