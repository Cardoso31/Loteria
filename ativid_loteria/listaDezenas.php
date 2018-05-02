<?php
include "funcoes.php";
include 'cabecalho.php';
print_r($_POST);
print_r($_SESSION);


$qntd=$_POST['apostas'];
$cod=$_GET['cod'];

echo"<pre>";
print_r(listaDezenas($cod,$qntd));
