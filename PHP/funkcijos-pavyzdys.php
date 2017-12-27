<?php

$sveciai = [
    ['vardas'=> 'Jonas', 'pavarde'=>'Jonaitis','patiekalas'=>'mesa', 'issilavinimas'=>'dr.'],
    ['vardas'=> 'Jonas2', 'pavarde'=>'Jonaitis2','patiekalas'=>'mesa2'],
    ['vardas'=> 'Jonas3', 'pavarde'=>'Jonaitis3','patiekalas'=>'mesa3', 'issilavinimas'=>'bureja']
];

function info($e){
    $s= $e['vardas'].' '.$e['pavarde'].'patiekalas'.$e['patiekalas'];
    if (isset($e['issilavinimas'])) {
        $s.=' '.e['issilavinimas']);
return $s;
    }
}
echo 'Sveciu sarasas<br>';
echo '------------------<br>';

for ($i=0; $i<count($sveciai);$i)

?>