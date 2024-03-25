<?php
/*$edad =20;
if ($edad>= 18) {
   echo "Eres mayor de edad";
}else{
   echo "Eres menor de edad";
}

$opcion = 4;
switch ($opcion) {
   case '1':
      echo "Opcion 1 seleccionada";
      break;
   case '2':
      echo "Opcion 2 seleccionada";
      break;
   case '3':
      echo "Opcion 3 seleccionada";
      break; 
   default:
      echo "Opcion no valida";
      break;
}
for ($i=0; $i <5 ; $i++) { 
   echo " t/ hola mundo";
}
$i= 1;
while($i<=5){
   $i++;
}
$colores = array("rojo","verde","negro");
foreach($colores as $color){
   echo "Color: $color <br>";
}
for ($i=1; $i <=10 ; $i++) { 
   echo " numero: $i <br>";
}
funciones: 

function saludar($nombre){
   echo "hola, $nombre";
  
}
saludar("juan");

function sumar($a,$b){
   return $a * $b;
} 
$resultado= sumar(5,4);
echo "El resultado de la suma es : $resultado";
$longitud = strlen("Hola");
echo "$longitud<br>
"; // $longitud será 4
// Función definida por el usuario
function duplicar($numero) {
}

$resultado = duplicar(5); 
echo "duplicar: $resultado"; // $resultado será 10
$global = "variable global";
function mostrarGlobal(){
   global $global;
   echo $global;
}
mostrarGlobal();
function calcularAreaRectangulo($base,$altura){
   return $base*$altura;

}
$resultado=calcularAreaRectangulo(4,5);
echo "$resultado";

$cadena= "abc123xyz";
if(preg_match("/\d+/",$cadena)){
   echo " La cadena contiene al menos un digito";

}
$nueva_cadena= preg_replace("/\d+/","###",$cadena);
echo "<br>$nueva_cadena";
*/
$cadena="hola mundo como estan todos por hay el aciudad";
$nueva_cadena=strtoupper($cadena);
echo "$nueva_cadena";
?>