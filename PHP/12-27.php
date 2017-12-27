<?php
/*$myfile = fopen("failas.txt", "w") or die("Unable to open file!");
$txt = "Labas rytas";
fwrite($myfile, $txt);
fclose($myfile); */

$cnn = new PDO('mysql:host=test.lt;dbname=testas','root');
$sql = "select count(*) as cnt from auto";
$res = $cnn->query($sql);
while ($row=$res->fetch()) {
    echo $row['cnt'];
}
$res ->closeCursor();

$sql = "select * from auto";
$res = $cnn->query($sql);
echo '<table>';
while ($row=$res->fetch()) {
    echo '<tr>';
    echo '<td>'.$row['aut_gamintojas'].'</td>';
    echo '<td>'.$row['aut_modelis'].'</td>';
    echo '<td>'.$row['aut_metai'].'</td>';
    echo '<td>'.$row['aut_kaina'].'</td>';
    echo '</tr>';
}
echo '</table>';
echo '<hr>';

$sql= 'SELECT aut_gamintojas, aut_modelis, aut_metai FROM auto WHERE aut_metai>1989';
$res = $cnn->query($sql);
while($row = $res->fetch()){
echo $row[0].' ';
echo $row[1].' ';
echo $row[2].' ';
echo '<br>';
}

?>