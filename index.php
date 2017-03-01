<html>
<head>


</head>
<body>

<h1>prueba php</h1>
<?php

include"Prueba.php";

$generador = new Prueba();

echo $generador->generarHtml();

$array = array();
$array2 = [];

array_push($array, "asdasjfd");
array_push($array, 3);
//$array[2] = $generador;

var_dump($array);

echo $array[1];

foreach ($array as $valor){
    echo $valor . "<br>";
}
foreach ($array as &$valor){
    echo $valor . "<br>";
}
foreach ($array as $key => &$valor){
    echo $key . "----" . $valor . "<br>";
    $array[$key]= $valor . "mod.";
}

echo "Hola";



?>

</body>

</html>
