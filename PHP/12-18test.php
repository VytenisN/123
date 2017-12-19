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
        'rase'=> 'neatsake',
    ],
    [
        'vardas'=>'Petras',
        'pavarde'=>'Ponaitis',
        'maistas' => 'valgo',
        'lytis'=> 'vyras',
        'rase'=> 'neatsake',
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

    $s='<td>'.$zmones['vardas'].'</td>'.'<td>'.$zmones['pavarde'].'</td>'.'<td>'.$zmones['maistas'].'</td>'.'<td>'.$zmones['lytis'].'</td>'.'<td>'.$zmones['rase'].'</td>';
    return $s;
}


?>

<table>
    <tr>
        <th>Nr</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>maistas</th>
        <th>Lytis</th>
        <th>Rase</th>
    </tr>
    <?php
    $nr = 1;
    foreach($asmenys as $zmones){
        echo '<tr>'.'<td>' . $nr++ . '</td>'.getInfo($zmones);
    }
    ?>
</table>


</body>
</html>