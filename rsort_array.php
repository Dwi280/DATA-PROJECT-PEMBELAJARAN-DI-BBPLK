<?php
$mobil=array ("Volvo", "BMW", "Toyota");

// array diurutkan secara descending/ kebalikan dari ascending yang diawali dari volvo
rsort($mobil);

$length=count($mobil);
for($x=0; $x<$length; $x++) {
    echo $mobil [$x];
    echo "<br/>";
}

?>