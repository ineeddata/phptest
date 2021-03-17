<?php

$var = $_GET['a'];
$b = $var;

if ($mode) {
    if ($foo) {
        $b = $var;
    }
} else {
    $b = $var;
}

echo $b;