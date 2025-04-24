<?php
function fact($n) {
    $f = 1;
    for ($i = 1; $i <= $n; $i++) {
        $f *= $i;
    }
    return $f;
}

$num = 5; 
echo "factorial of $num is " . fact($num);
?>
