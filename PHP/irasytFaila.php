<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<form method="get">

    <label>Salies pavadinimas</label> <input name ='salis' type="text"><br>
    <label>Sostine</label> <input name ='sost' type="text"><br>
    <label>Gyventoju skaicius</label> <input name ='gyv' type="number"><br>
    <input type="submit" value="Fiksuoti">

</form>

<?php

function write()
{
    $f = fopen('failai/forma-post-parms.txt', 'w') or die("Unable to open file!");
    fwrite($f,$_GET['gyv']);
    fclose($f);
}
echo write();
?>

</body>
</html>

