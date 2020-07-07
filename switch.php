<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
    $day = date ('l');
    switch ($day) {
        case "Sunday";
            $hari ="minggu";
            break;
        case "Monday";
            $hari ="senin";
            break;
        case "Tuesday";   
            $hari ="selasa";
            break;
        case "Wednesday";  
           $hari ="rabu";
            break;
        case "Thursday";   
           $hari ="kamis";
            break;
        case "Friday";  
            $hari ="jumat";
             break;
        case "Satuday";   
            $hari ="sabtu";
            break;
    } ;
    echo $day."<br>";
    echo $hari."<br>";

    $month = date ('F');
    switch ($month) {
        case "January";
            $bulan ="januari";
            break;
        case "February";
            $bulan ="februari";
            break;
        case "March";   
            $bulan ="maret";
            break;
        case "April";  
           $bulan ="april";
            break;
        case "May";   
           $bulan ="mei";
            break;
        case "June";  
            $bulan ="juni";
             break;
        case "July";   
            $bulan ="juli";
            break;
        case "August";   
            $bulan ="agustus";
            break;
        case "September";   
            $bulan ="september";
            break;
        case "October";   
            $bulan ="oktober";
            break;
        case "November";   
            $bulan ="november";
            break;
        case "December";   
            $bulan ="desember";
            break;
    } ;
    echo $month . "<br>";
    echo $bulan . "<br>";

    date_default_timezone_set('Asia/Jakarta') . "<br>";
    echo date ('H:i:s') . ", ".$hari." ".$bulan." ".date('Y');
     ?>
</body>
</html>