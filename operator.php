<?php
//operator

    //aritmatika
    $a = 10;
    $b = 20;
    $total = $a-$b;
    echo($total);

    //assigment
    $total1 = $total + $a;
    $total += $a;

    //pembanding
    $komparasi = $a == $b; //cek isi saja
    $komparasi = $a === $b; //cek isi & tipe data
    
    $komparasi = $a != $b; //cek isi saja
    $komparasi = $a !== $b; //cek isi & tipe data

    $komparasi = $a < $b; //lebih kecil
    $komparasi = $a > $b; //lebih besar

    //increment
    $a = $a + 1;
    $a++;

    //String
    $a = "hello";
    $b = "world";
    echo $a . $b;
?>