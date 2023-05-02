<?php

/**
 * implode — Join array elements with a string
 *
 * implode(string $separator, array $array): string
 */

$tags = ['php', 'javascript', 'python'];

// The separator is optional: 
// $str = implode($tags);
// phpjavascriptpython

$str = implode(', ', $tags);

echo $str;