<?php 
	function xpto(){
		
		echo "hello world!";
		
	};
	
	/*
	
	exemplo de uma constante simbolica
	
	*/
	
	define ("PI",3.1415);
	define (
	"CREATE_BD",
	"create schema minha_nd;"
	);
	
	/*
	fraca tipificação
	
	*/
	$i = 10; //int 
	echo $i.PHP_EOL; //é operador concatenação
	$i = 10.2; //float
	echo $i.PHP_EOL; //PHP_EOL 
	$i = "Artur"; //string avaliativa 
	echo $i.PHP_EOL;
	$i = 'Artur'; //string Literal 
	echo $i.PHP_EOL;
	$i = true; //string boolean
	echo $i.PHP_EOL;
	$i = xpto; //function 
	echo $i.PHP_EOL;
	$i = new Date(); //objecto instancia de Date
	echo $i.PHP_EOL;
	xPTo(); //não há sensibilidade ao tamanho da letra para os nomes de função
	echo PI;
?>