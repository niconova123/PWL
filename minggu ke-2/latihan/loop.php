<?php
// pake for //
for ($i = 1; $i <=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo $i;
    }
    echo "<br>";
}
// pake while //
$i= 1;
while ($i<=5){
    echo "<br>";
    $j=1;
    while ($j<=$i){
        echo $i;
        $j+=1;

    }
    $i+=1;
}
    
?>
