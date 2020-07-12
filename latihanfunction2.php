<?php 
function HitungLuasPersegiPanjang($panjang){
    $LuasPersegiPanjang= $panjang*$lebar;
    return $LuasPersegiPanjang;
}

function HitungKelilingPersegiPanjang($panjang){
    $KelilingPersegiPanjang= ($panjang*2)+($lebar*2);
    return $LuasPersegiPanjang;
}

function HitungLuasPersegi($sisi){
    $LuasPersegi=$sisi*$sisi;
    return $LuasPersegi;
}

function HitungKelilingPersegi($sisi){
    $KelilingPersegi=$sisi*4;
    return $KelilingPersegi;
}
?>