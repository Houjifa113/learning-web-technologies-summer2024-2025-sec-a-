<?php
$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;

foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $search found in array";
} else {
    echo "Element $search not found in array";
}
?>
