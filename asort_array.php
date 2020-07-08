<?php 
$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

// nilai pada array diurutkan secara ascending 
asort ($mobil);

foreach($mobil as $x => $nilai_x) {
    echo "kunci=" .$x .", Nilainya=" . $nilai_x;
    echo "<br/>";
}

?>