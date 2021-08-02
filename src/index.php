<?php

$a = microtime();

foreach (range(100, 103) as $i) {
    $s = "Line num # $i\n";
    echo $s;
}

phpinfo();

