#!/usr/bin/php7.1
<?php

$fileName = $argv[1];
$fileNum = $argv[2];


$file    = file($fileName);
$content = array_slice($file, 0,$fileNum);

print_r($content);
