<?php
    $user="";
    /*dalam contoh ini,jika TRUE
    diwakili oleh kondisi if yang mencetak 
    kalimat 'variabel belum terbentuk */
    if (!isset($user)) {
        echo "variabel belum terbentuk";
    }
    
    /*sebaliknya, kita lihat pada kondisi else.
    kondisi else mewakili yang FALSE (berarti $user 
    sudah di deklarasikan DAN tidak NULL). */
    else {
        echo "variabel sudah ada";
    }


?>