<?php
//Autor: Yuri Monroy
//El nombre por defecto es Mundo
require('HolaMundo.php');

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre\n";  