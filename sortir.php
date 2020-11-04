<?php
// $str = 'In My Cart : 11 items';
// $int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);

// $str = 'In My Cart : 11 12 items';
// $str = preg_replace('/\D/', '', $str);
// echo $str;

// $s = "In My Cart : 11 items";
// preg_match("|\d+|", $s, $m);
// var_dump($m);

$str = 'In My Cart : 11 items';
$num = '';

for ($i = 0; $i < strlen($str); $i++) {

    if (is_numeric($str[$i])) {
        $num .= $str[$i];
    }
}

echo $num;
?>