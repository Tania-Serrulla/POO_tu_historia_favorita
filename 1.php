<!doctype html>
<html>
<head>
<title>planeta_tania</title>
<style type="text/css">
html,body{
margin:0px;
padding:0px;
width:100%;
height:100%;
background-color: black;
font-family: Arial;
font-size: 30px;
color: yellow;
}
</style>
</head>
<body>

<?php

function funsion(){

class taniana{

  public int $patas;
  public ?string $nombre;
  public function __construct(int $patas, ?string $nombre){
  $this->patas = $patas;
  $this->nombre = $nombre;
  }

}

$tania_humana = new taniana(2, "Tania Serrulla");
$tania_bicho = new taniana(8, "Spider-tania");


$a = $tania_humana->nombre;
$b = " tiene ";
$c = $tania_humana->patas;
$d = " patas.";
$e = " <br>";
$f =" hace uso de motosierra y se queda con ";
$a2 = $tania_bicho->nombre;
$b2 = $tania_bicho->patas;

echo($a.$b.$c.$d.$e);
echo($a2.$b.$b2.$d.$e);

$c = $c - 1;
echo($a.$f.$c.$d);

}

funsion();

?>
</body>
</html>