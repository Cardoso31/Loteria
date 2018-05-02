<?php
include 'funcoes.php';

include 'cabecalho.php';
$cod=$_GET['cod'];

?>

<h1>Informe a quantidade de numeros a serem escolhidos</h1>
<br>
<form method="post" action="listaDezenas.php">

<select name="apostas">


<form method="post" action="listaDezenas.php?cod=$cod">

<?php
$tipo=listaPorCod($cod);

foreach ($tipo as $key) {
	echo '
	<option>'.$key.'</option>
';	
	}
?>



</form>

</select>


<input type="submit" value="Sotear"/>

</form>


