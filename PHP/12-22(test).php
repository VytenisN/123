<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="get">

    <label>Gamintojas</label> <input name ='gamintojas' type="text"><br>
    <label>Modelis</label> <input name ='modelis' type="text"><br>
    <label>Pagaminimo metai</label> <input name ='metai' type="number"><br>
    <input type="submit" value="Pateikti">

</form>


<?php

class klase
{
    function sablonas() {
        $sab='Automobilis yra gamintojo "%s", jo modelis "%s", o pagaminimo metai: %s. ';
        return sprintf($sab, $_GET['gamintojas'], $_GET['modelis'], $_GET['metai']);
    }
}
$rez= new klase();
if(isset($_GET['gamintojas']) && isset($_GET['modelis']) && isset($_GET['metai']))
    echo $rez->sablonas();
else echo 'Iveskite duomenis';
?>

</body>
</html>