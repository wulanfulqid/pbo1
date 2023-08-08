<?php

//Membuat Class
class perhitungan{

    //property
    var $bil1, $bil2, $bil3;

    function luasPersegi($bil1){
        $sisi=$bil1;
        $luas=$sisi*$sisi;
        return "Sisi =" .$sisi. "<br> Luas =" .$sisi." x ".$sisi." <br> Hasil = ".$luas;
    }

    function luasPersegiPanjang($bil1,$bil2){
        $panjang=$bil1;
        $lebar=$bil2;
        $luas=$panjang*$lebar;
        return "Panjang =" .$panjang."<br> Lebar =" .$lebar."<br> Luas =".$panjang." x ".$lebar." <br> Hasil =".$luas;
    }

    function luasSegitiga($bil1,$bil2){
        $alas=$bil1;
        $tinggi=$bil2;
        $luas=$alas*$tinggi/2;
        return "Alas =" .$alas."<br> Tinggi =" .$tinggi."<br> Luas =".$alas." x ".$tinggi.":2 <br> Hasil =".$luas;    
    }
    
}

?>