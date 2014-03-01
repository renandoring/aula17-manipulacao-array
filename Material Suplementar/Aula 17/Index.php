<?php
	// Cria uma vetor contendo quatro nomes de pessoas
	$nomes[] = 'Maria';
	$nomes[] = 'José';
	$nomes[] = 'Pedro';
	$nomes[] = 'Paulo';
	
	// Percorre todo o vetor e exibe cada valor armazenado no mesmo
	foreach($nomes as $valor){
		echo $valor.'<br>';
	}
	// Cria um variável para armazenar a contagem de posições do vetor
	$contagem = count($nomes);
	// Exibe uma mensagem na tela contendo o valor da contagem de posições
	echo 'O Array contém '.$contagem.' Posições';

?>