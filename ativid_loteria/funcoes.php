<?php
/*
nDA => numero de apostas
Qna => quantidadde de numeros apostados
*/

function listaPorCod($cod){
	$lista=[];
	
	switch ($cod) {
		case 1:
			for ($i=6; $i <=15 ; $i++) { 
				$lista[]=$i;
			}
			break;
		
		case 2:
			for ($i=5; $i <=15 ; $i++) { 
				$lista[]=$i;
			}
			break;

		case 3:
			for ($i=0; $i <=20 ; $i++) { 
				$lista[]=$i;
			}
			break;

		case 4:
			for ($i=15; $i <=18 ; $i++) { 
				$lista[]=$i;
			}
			break;
	}
	return $lista;
}

function buscaDezenas($cod,$quant){
	$sort=[];
	switch ($cod) {

		case 1:
			$nMega=[];

			for ($i=1; $i <=60 ; $i++) { 
			 	$nMega[]=$i;
			 } 

			 shuffle($nMega);

			for ($i=0; $i <$quant ; $i++) { 
				$sort[]=$nMega[$i];
			}
			break;


			case 2: 

				for ($i=1; $i <=80 ; $i++) { 
			 	$nQuina[]=$i;
			 } 

			 shuffle($nQuina);

			for ($i=0; $i <$quant ; $i++) { 
				$sort[]=$nQuina[$i];
			}
			break;

		case 3:

				for ($i=1; $i <=50 ; $i++) { 
			 	$nMania[]=$i;
			 } 

			 shuffle($nMania);

			for ($i=0; $i <$quant ; $i++) { 
				$sort[]=$nMania[$i];
			}
				
			break;	

		case 4:

				for ($i=1; $i <=25 ; $i++) { 
			 	$nFacil[]=$i;
			 } 

			 shuffle($nFacil);

			for ($i=0; $i <$quant ; $i++) { 
				$sort[]=$nFacil[$i];
			}
				
			break;	

	}
	



	return $sort;
}

// print_r(buscaDezenas(3,9));

