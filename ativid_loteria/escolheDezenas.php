<?php
include 'cabecalho.php';
include 'funcoes.php';
$cod=$_GET['cod'];
?>

<h1>Informe a quantidade de numeros a serem escolhidos</h1>
<br>
<form method="post" action="listaDezenas.php">

<select name="apostas">





<?php


$tipo=listaPorCod($cod);

foreach ($tipo as $key) {
	echo '
	<option>'.$key.'</option>
';	
	}
?>





</select>


<input type="submit" value="Sotear" />

</form>