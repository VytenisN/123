<?php

class salys
{
    function eilute() {


        $sab="<table> <td>%s</td><td>%s </td><td>%s</td></table>";

        return sprintf($sab, $_GET['salis'], $_GET['sost'], $_GET['gyv']);
        }
}
$rez= new salys();

if(isset($_GET['salis']) && isset($_GET['sost']) && isset($_GET['gyv']))
    echo $rez->eilute();
else echo 'Iveskite duomenis';
?>

</body>
</html>

