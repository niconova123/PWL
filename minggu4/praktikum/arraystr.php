<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array indeksnya tipe string</title>
</head>

<body>
    <?php
        /*array dibawah namanya : asosiatif array.
        yang dikelompokkan apa? pasangan key dan value masing masing (misal: key "ani", pasangannya value "80",begitu seterusnya)*/

        /*ada key (seperti : "ani", "otim",dst) dan value (seperti :80,90,dst)*/
        $arrayNilai=array("ani"=>80, "otim"=>90,"ana"=>75,"budi"=>85);

        echo "nilai=".$arrayNilai['ani'];echo"<br>";
        echo $arrayNilai['otim'];echo"<br>";

        $arrayNilai_2=array();
        $arrayNilai_2['ami']=80;
        $arrayNilai_2['atsma']=75;
        $arrayNilai_2['sri']=90;

        echo $arrayNilai_2['atsma'];echo"<br>";
        echo $arrayNilai_2['ami'];echo"<br>";
        /*output 
        
        nilai=80
        90
        75
        80
        */
    ?>
</body>

</html>