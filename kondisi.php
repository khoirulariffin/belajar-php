<?php

    $nomor1 = 10;

    //if
    if ($nomor1 < 10) {
        echo ("kurang dari 9");
    } elseif ($nomor1 > 10) {
        echo ("lebih dari 9");
    } elseif ($nomor1 == 10) {
        echo ("angka 10");
    } else {
        echo ("bukan angka");
    }

    //switch
    $warna = "merah";
    switch ($warna) {
        case 'merah':
            echo ("berhenti");
            break;

        case 'hijau':
            echo ("jalan");
            break;
        
        default:
            echo ("rusak");
            break;
    }
?>