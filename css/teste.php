<?php 
//esse é um comentário de uma linha
/* esse  
é multi-
linhas 


var_dump($_GET); //[um => 'Luis', dois => 123]
$arraison = array("Caio"=>"16x", "Luis"=>"18", "Careca"=>"34");
echo $arraison['Careca'];
*/

#echo $_GET['um']; // vai sair Luis
#echo $_GET['dois']; // vai sair 123
if($_GET['op'] == 'add'){ // adição
	$resultado = $_GET['um']+$_GET['dois'];
	echo "A soma é: {$resultado}";
}

//subtração
if($_GET['op'] == 'sub'){ // subtração
	$resultado = $_GET['um']-$_GET['dois'];
	echo "A diferença é: {$resultado}";
}
//divisao
if($_GET['op'] == 'div'){ // divisão
	$resultado = $_GET['um']/$_GET['dois'];
	echo "a divisão é: {$resultado}";
}
//multiplicação
if($_GET['op'] == 'mult'){ // divisão
	$resultado = $_GET['um'] * $_GET['dois'];
	echo "o produto é: {$resultado}";
}
/*
$numero1 = 3;
$numero2 = 9;

$resultado = $numero1+$numero2;
echo "A soma é: {$resultado}<br>";
$resultado = $numero2-$numero1;
echo "A subtração é: {$resultado}<br>";
$resultado = $numero2/$numero1;
echo "A divisão é: {$resultado}<br>";
$resultado = $numero2*$numero1;
echo "A Multiplicação é: {$resultado}<br>";

$resultado = 3 > 9; //false
$resultado = 3 < 9; //true

if(3 == 3){
	echo "vou fazer o que o careca mandou";
}
if(3 == 9){
	echo "nao vou fazer nada";
}

*/
die();



 // array , sequencia de valores $key => $value
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
$nome = ''; // $-> define a variavel e termina com o ;
       //<------ nessa ordem e, ese tá definindo $nome como uma string
var_dump($nome);
echo "<br>";
$nome = false; // Booleano pode ser verdadeiro ou falso
var_dump($nome);
echo "<br>";
$nome = 112331231; // Inteiro pode ser qualquer numero inteiro positivo ou negativo
var_dump($nome);
echo "<br>";

$nome = 3.141516; // float pode ser qualquer número decimal
var_dump($nome);
echo "<br>";

$nome = "Waldhircleyssonn, o lindo"; // String , ou sequência de letras/caracteres.
var_dump($nome);
echo "<br>";
echo $nome;


?>