<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$asmenys= [
    [
        'vardas'=>'Jonas',
        'pavarde'=>'Jonaitis',
        'maistas' => 'nevalgo',
        'lytis'=> 'vyras',
        'rase'=> 'neatsako',
    ],
    [
        'vardas'=>'Petras',
        'pavarde'=>'Ponaitis',
        'maistas' => 'valgo',
        'lytis'=> 'vyras',
        'rase'=> 'neatsako',
    ],
    [
        'vardas'=>'Zose',
        'pavarde'=>'Zonaitis',
        'maistas' => 'salota',
        'lytis'=> 'moteris',
        'rase'=> 'kaukazo',
    ],

];

function getInfo($zmones){

    //$s='<tr>'.'<td>'.$zmones['vardas'].'</td>'.'<td>'.$zmones['pavarde'].'</td>'.'<td>'.$zmones['maistas'].'</td>'.'<td>'.$zmones['lytis'].'</td>'.'<td>'.$zmones['rase'].'</td>';
    return $zmones['vardas'];
}
$n=1;
foreach($asmenys as $zmones) {
    echo '<tr>';
    echo $n++;
    echo getInfo($asmenys);
}

?>

</body>