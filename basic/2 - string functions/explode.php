<?php

/**
 * explode — Split a string by a string
 *
 * explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
 */

$str = 'mensaje de ejemplo';
$array = explode(' ', $str);

var_dump($array);

echo $array[0];
echo $array[1];
echo $array[2];