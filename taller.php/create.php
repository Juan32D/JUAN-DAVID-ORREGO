<?php
include "conexion.php";

$conexion->query("INSERT INTO usuarios VALUES(
null,
'$_POST[first_name]',
'$_POST[second_name]',
'$_POST[first_surname]',
'$_POST[second_surname]',
'$_POST[email]',
'$_POST[password]',
'$_POST[phone]',
'$_POST[document]'
)
");