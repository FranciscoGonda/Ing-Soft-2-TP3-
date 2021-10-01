<?php 
//se asignan las variables provenientes de $_POST
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

//Hago la operacion y se la asigno a una nueva variable
$multiplicacion = $n1 * $n2;
//agrego una nueva condicion
if ($n1 == 0 || $n2 == 0){
	echo 'No se puede multiplicar por 0';
}else{
echo 'El resultado es: '.($multiplicacion);
}
?>