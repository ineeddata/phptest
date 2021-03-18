<?php

$var = $_GET['a'];
$html = "<img src='";

if ($mode) {
    $html .= 'http://' . $var;
} else {
    $html .= 'https://' . $var;
}

echo $html;

/*//////////////////Patch////////////////*/

$var = $_GET['a'];
$html = "<img src='";

if ($mode) {
    $html .= 'http://' . htmlentities($var);
} else {
    $html .= 'https://' . htmlentities($var);
}

echo $html;