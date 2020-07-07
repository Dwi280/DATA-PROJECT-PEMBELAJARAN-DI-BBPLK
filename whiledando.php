<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while dan do</title>
</head>
<body>
    <?php 
    // contoh while muncul kata benar ada 9, jika tidak ditambahkan $a=$a+1 akan muncul benar yang banyak sehingga terus loading
    /*$a = 1;
    while ($a<12){
        if ($a!=5) {
            echo $a;  
        };
        $a= $a+2;
        
    };*/
    
    // contoh do akan muncul kata benar hanya satu kali
    /*$a = 5;
    do {
        echo "benar";
    } while ($a<4); */

    // contoh untuk for
    $number = $_POST['number'];
    for ($a=1; $a<=$number; $a++) {
        for ($b=1; $b<=$a; $b++) {    
            echo "*"; 
        }   echo "<br>"; 
    };

    
    ?>
    <a href="form_for.php"></a>
</body>
</html>