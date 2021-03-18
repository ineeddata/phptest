<?php

$var = $_GET['a'];
$b = $var;

if ($mode) {
    if ($foo) {
        $b = test($var);
    }
} else {
    $b = test($var);
}

function test($abc) {
    return $abc . "test"
}

echo $b;
