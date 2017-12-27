<?php
function spalvosKodas ($spalva) {
    switch ($spalva) {
        case 'raudona':$kodas ='red';break;
        case 'geltona':$kodas= 'yellow';break;
        case 'tamsus':$kodas= '#222222';break;
        default: $kodas='black';

    }
    return $kodas;
}

echo '<p style="color:'.spalvosKodas('geltona').'">labas</p>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$auto= [
    [
        'gamintojas'=>'bwm',
        'modelis'=>'320i',
        'variklis' => '2.0',
        'durys'=> 4,
        'metai'=> 2010,
    ],
    [
        'gamintojas'=>'audi',
        'modelis'=>'100',
        'variklis' => '2.4',
        'durys'=> 4,
        'metai'=> 1990,
    ],
    [
        'gamintojas'=>'honda',
        'modelis'=>'civic',
        'variklis' => '2.0',
        'durys'=> 3,
        'metai'=> 2007,
    ],

];
function getInfo($masina){
    $s='';
    $s='<tr>'
    $s='<td>'.$masina['gamintojas'].'</td>';
    $s='<td>'.$masina['gamintojas'].'</td>';
}

?>

</body>
</html>

