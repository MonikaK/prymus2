<?php
$x = 0;
$y = 0;
$op = 0;
$x = $_GET[x];
$y = $_GET[y];
$op = $_GET[op];


if ($op=='sum') {
    $wynik = $x + $y;
    echo "<h1>$x + $y= $wynik</h1>";
}
elseif ($op=='substract') {
    $wynik = $x - $y;
    echo "<h1>$x-$y= $wynik</h1>";
}
elseif ($op=='multiply') {
    $wynik = $x * $y;
    echo "<h1>$x * $y= $wynik</h1>";
}
elseif ($op=='divide')
{
    if ($y == 0)
        echo "<h1>Impossible operation</h1>";
    else {
        $wynik= $x / $y;
        echo "<h1>$x / $y= $wynik</h1>";}
}
else
    echo "<h1>Unrecognized operation: sth</h1>";