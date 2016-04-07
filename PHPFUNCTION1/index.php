<?php

$text = "\t\tIts PHP :) ";
$binary = "\x09PHP\x0A";
$hello  = "Hello, its my job";
var_dump($text, $binary, $hello);
$clean = ltrim($binary, "\x00..\x1F");


?>