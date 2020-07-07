<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if (kondisi)</title>
</head>
<body>
    <?php 
    // untuk else
    /*$a = $_POST['angka1'];
    if ($a<10) {
        echo "variabel a lebih kecil dari 10";
    } else {
        echo "variabel a tidak lebih kecil dari 10";
    }; */

    // untuk else if
    $a = 100;
    if ($a>80) {
        echo "Grade A";
    } elseif ($a>70) {
        echo "Grade B";
    } elseif ($a>50) {
        echo "Grade C";
    } else {
        echo "Grade D";
    };
    
    ?>
    <a href="form_latihan4.php">Kembali</a>
</body> 
</html>