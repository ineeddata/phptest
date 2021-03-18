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

/*//////////////////Patch 1////////////////*/

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

/*/////////////////No Patch////////////////*/

$var = $_GET['a'];
$b = $_GET['b'];

if ($mode) {
    if ($foo) {
        $b .= htmlentities($var);
    }
} else {
    $b .= htmlentities($var);
}

echo $b;

/*////////////////Patch 2//////////////////*/

$var = $_GET['a'];
$b = $var;

if ($mode) {
    if ($foo) {
        $b = $var;
    }
} else {
    $b = $var;
}

echo htmlentities($b);
