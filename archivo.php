<?php
$archivo= fopen("datos.txt","r");
while (!feof($archivo)){
    $linea=fgets($archivo);
    echo $linea;
}
fclose($archivo);
$archivo=fopen("nuevo.txt","w");
fwrite($archivo,"hola mundo");
fclose($archivo);

?>