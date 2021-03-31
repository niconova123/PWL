<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array dengan indexnya angka</title>
</head>

<body>
    <?php
        /*ingat! = array/ list (list adalah sebutan array di python)
        biasanya selalu dimulai dari 0 indexnya. */ 
        $arrayBuah=array("mangga","alpukat","pisang", "buah naga");
        echo $arrayBuah[0]; echo "<br>";
        echo $arrayBuah[3]; echo "<br>";
        
        /*tanpa diberikan index ketika
        memasukkan element ke array,
        index akan dibuat otomatis, namun dengan index angka/numerik */
        $arrayWarna=array();
        $arrayWarna[]="merah";
        $arrayWarna[]="cyan";
        $arrayWarna[]="kuning";
        $arrayWarna[]="biru";
        
        echo $arrayWarna[0]; echo "<br>";
        echo $arrayWarna[1]; echo "<br>";
        echo $arrayWarna[2]; echo "<br>";
        echo $arrayWarna[3]; echo "<br>";

    
    ?>
</body>

</html>