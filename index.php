
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice PHP-2</title>
</head>
<body>
    <ul>
        <li><a href="pag1.php">form</a></li>
        <li><a href="cookies.php">cookies</a></li>
        <li><a href="calculadora.php">Calculadora</a></li>
        <li><a href="encuesta.php">Encuesta</a></li>
        <li><a href="resultados.php">Resultados</a></li>
        <li><a href="orden.php">Orden</a></li>
        <li><a href="menu.php">Menu</a></li>
    </ul>
</body>
</html>


<?php
  function imprimirMensaje($mensaje) {
    echo $mensaje;
  }

  imprimirMensaje("Hola, mundo!"); 
?>

<?php
  function sumar($a, $b) {
    return $a + $b;
  }

  $resultado = sumar(2, 3); 
  echo $resultado;
?>

<?php
  function suma($a, $b) { 
    $c = $a + $b;
    return $c;  
  }
  echo suma(3, 7);
?>

<?php
  function foo(&$var) {
    $var++;
  }

  $a=5;
  foo($a);
  echo $a; 
?>


<?php
//Array 

$mes[0] = "enero";
  $mes[1] = "febrero";
  $mes[2] = "marzo";
  $mes[3] = "abril";
  $mes[4] = "mayo";
  $mes[5] = "junio";
  $mes[6] = "julio";
  
  for($i=0; $i < 7; $i++) {
    echo ($mes[$i] . "<br>");
  }
?>


<?php
  $persona = array(
    'nombre' => 'Juan',
    'apellido' => 'perez',
    'pais' => 'venezuela'
  );
?>


<?php 
  $personas = array(
    "pepe" => "Mexico",
    "john" => "USA",
    "maria" => "venezuela"
  );
  foreach($personas as $persona => $pais) { 
    print "$persona es de $pais<br>"; 
  }
?>

<?php
  $semana = array("lunes", "martes",  "miercoles",  "jueves", "viernes", "sabado", "domingo");
  list($lu,$ma,$mi,$ju,$vi,$sa,$do) = $semana;
  echo $lu; 
  echo $ma; 
  echo $mi; 
  echo $ju; 
  echo $vi; 
  echo $sa; 
  echo $do; 
?>








