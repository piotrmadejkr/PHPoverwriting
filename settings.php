<?php
error_reporting(0);
session_start();

$rejestrTab= Array();
$rejestrTab=$_SESSION['rejestrTab'];   // tutaj w rejestrTab wsadzamy poprzednie elementy (session)
$rejestrTab[$_GET['miejsce']]=['numer'=>$_GET['rejestracja'],'data'=> time()];
$_SESSION['rejestrTab'] = $rejestrTab; // zapisujemy aktualną tablię  - tutaj $rejestrTab wsadzemy w $_SESSIOn..



echo '<pre>';
print_r($rejestrTab);
echo '</pre>';



?>