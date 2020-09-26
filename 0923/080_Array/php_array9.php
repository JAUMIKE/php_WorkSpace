<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    //倆倆相比，若前面<後面，放左邊
    return ($a < $b) ? -1 : 1;
}

$dataList = array(3, 2, 5, 6, 1);
//以字串呼叫cmp function
usort($dataList, "cmp");
foreach ($dataList as $key => $value) {
    echo "$key: $value <br />";
}

?>