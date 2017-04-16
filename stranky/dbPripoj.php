<?php
$server = 'localhost';
$login = 'root';
$heslo = 'root';
$databaza = 'blog';
$port = '8889';
$db = mysqli_connect($server,$login,$heslo,$databaza,$port) or die ('Neda se pripojit k serveru.');
/*
$server = 'hz-mysql4';
$login = 'mysql69022';
$heslo = 'kormanik11';
$databaza = 'mysql74982';
$db = mysqli_connect($server,$login,$heslo,$databaza) or die ('Neda se pripojit k serveru.');
*/


mysqli_query($db,'SET NAMES UTF8');
mysqli_query($db,'SET COLLATION_CONNECTION=utf8_czech_ci');
?>