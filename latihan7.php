<?php
    $nama= "Vita";
    $Nama= "Degus";
    $Jurusan= "Bisnis Digital";
    $NIM= "2502020340";

    $harga = 1500;
    $qty = 5;
    $subtotal = $harga * $qty;

    $diskon=0;
    // diskon diberikan apabila subtotal lebih dari 5000
    if($subtotal>5000){
        $diskon = 0.05;
    }
    $nDiskon = $subtotal * $diskon;
    $nTotal = $subtotal - $nDiskon;

    echo  $nama;
    echo "<br>harga :" . $harga;
    echo "<br>jumlah:" . $qty;
    echo "<br>Sub Total:" . $subtotal;
    echo "<br>Diskon:" . $nDiskon;
    echo "<br>Tota:" . $nTotal;

    
?>