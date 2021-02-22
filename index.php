<?php
    echo("hai");
    echo("<br>"); //ini untuk menampilkan output

    //variabel
    $teks = "ini adalah contoh variable";

    //tipe data
    $a = "ini adalah String"; //string
    $b = 10; //integer
    $c = 12.5; //float
    $d = false; //boolean
    $e = [
        'satu', 'dua', 'tiga'
    ]; //array
    $f = NULL; //null

    echo var_dump($e);


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