<?php

//$m = ['bmw','audi','honda','lada'];

//echo json_encode($m).'<br>';

//sort($m); //rusiavimas didejimo tvarka
//json_encode( $m).'<br>';

//rsort($m) // pagal abecele mazejimo tvarka
//$m =array_slice($m,1,2);
//json_encode( $m2).'<br>';

//list ($auto1,$auto2,$auto3,$auto4)=$m;

$s=[1,3,6,2,10,12,44];

function vidurkis ($mas) {
    $sum =0;
    for ($i=0;$i<count($mas);$i++)
        $sum+=$mas[$i];
    return $sum/count($mas);

}
echo vidurkis($s).'<br>';
?>