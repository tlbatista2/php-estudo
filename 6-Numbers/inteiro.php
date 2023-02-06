<?php 

// Verifique se o tipo da variável é inteiro

$x = 5985;
var_dump(is_int($x)); // bool(true) 

$x = 59.85;
var_dump(is_int($x)); // bool(false)


?>