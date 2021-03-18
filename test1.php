<?php

$var = $_GET['a'];
$html = "<img src='";

if ($mode) {
    $html .= 'http://';
    if ($foo) {
        $html .= $var;
    }
} else {
    $html .= 'https://' . $var;
}

echo $html;

/*//////////////////Patch////////////////*/

$var = $_GET['a'];
$b = $var;

if ($mode) {
    if ($foo) {
        $b = htmlentities($var);
    }
} else {
    $b = htmlentities($var);
}

echo $b;