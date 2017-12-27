<?php
function race($v1, $v2, $g)
{

    if ($v1 >= $v2) {
        return;
    } else if ($v1 < $v2) {
        $val = $g / ($v2 - $v1);
        $hh = floor($val);
        $mm = floor(($val - (floor($val))) * 60);
        $ss = floor((($val * 60) - (floor($val * 60))) * 60);
        return array($hh, $mm, $ss);

    }
}
var_dump(race(820,850,550));
echo '<br>';
var_dump(race(80, 91, 37));
?>
