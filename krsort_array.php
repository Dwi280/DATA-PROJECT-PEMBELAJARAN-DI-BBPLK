<?php
$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

// key atau kunci pada array diurutkan secara descending
krsort ($mobil);
foreach($mobil as $x => $nilai_x) {
    echo "kunci=" .$x .", Nilainya=" . $nilai_x;
    echo "<br/>";
}

?>  