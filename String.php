<?php
$str = "Hi, This is Divya";
$count = 0;  

if (strlen($str) > 0) {
    $count = 1;  

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == ' ' && $i + 1 < strlen($str) && $str[$i + 1] != ' ') {
            $count++;
        }
    }
}

echo "Total words: $count";
?>
