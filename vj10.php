<?php
// skripta.php
// varijable a i b poprimaju vrijednosti
$a = 3;
$b = 4;
?>
<?php
// index.php
// umećemo dokument skripta.php u index.php datoteku
// ove dvije datoteke postaju jedna datoteka
include('vj10.php');
$b = $a * $b;
?>