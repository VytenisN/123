<?php /*
try {
    $cnn = new PDO('mysql:host=test.lt;dbname=testas', 'root');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
    $res = $cnn->query("select aut_gamintojas from auto");
    while ($a = $res->fetch()) {
        echo $a['aut_gamintojas'] . '<br>';
    }
}
catch(PDOException $err) {
    echo $err->getMessage();

}
echo '<hr>'
?>
*/

// forma pildo duombaze
$cnn = new PDO('mysql:host=test.lt;dbname=testas', 'root');
$res = $cnn->prepare("insert into auto (aut_gamintojas,aut_modelis,aut_metai,aut_kaina) values(:gamintojas,:modelis,:metai,:kaina)");
$x = $res->execute([
    ':gamintojas' => $_POST['gamintojas'],
    ':modelis' => $_POST['modelis'],
    ':metai' => $_POST['metai'],
    ':kaina' => $_POST['kaina']
]);
$sql = "select * from auto";
$res = $cnn->query($sql);
echo '<table>';
while ($row=$res->fetch()){
    echo '<tr>';
    echo '<td>' . $row['aut_gamintojas'].'</td>';
    echo '<td>' . $row['aut_modelis'].'</td>';
    echo '<td>' . $row['aut_metai'].'</td>';
    echo '<td>' . $row['aut_kaina'].'</td>';
    echo '</tr>';
}
echo '</table>';
echo '<a href="pdo-form-frontend.html">Grizti i forma</a>';
echo '<hr>'
?>


