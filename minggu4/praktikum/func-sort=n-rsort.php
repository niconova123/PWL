<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- tags <pre> berarti menampilkan teks di dalamnya
        dengan tampilan ala komputer jadul.
    dimana tampilan font akan menghemat space dan line   -->

    <!-- 
        Also look at:
        Tag 	Description
        <code> 	Defines a piece of computer code
        <samp> 	Defines sample output from a computer program
        <kbd> 	Defines keyboard input
        <var> 	Defines a variable 
    -->
    <?php
        $arrayNilai=array("john"=>70,"deanne"=>67,"max"=>78,"tony"=>55);
        
        echo"<b>array sebelum pengurutan</b>";
        echo "<pre>";
        print_r($arrayNilai);
        echo "</pre>";

        echo "<br>";
        sort($arrayNilai);
        reset($arrayNilai);

        echo"<b>array setelah pengurutan dengan fungsi sort() </b>";
        echo "<pre>";
        print_r($arrayNilai);
        echo "</pre>";

        echo "<br>";
        rsort($arrayNilai);
        echo"<b>array setelah pengurutan dengan fungsi rsort()</b>";
        echo "<pre>";
        print_r($arrayNilai);
        echo "</pre>";
        ?>
</body>
</html>