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

echo ($html);