<?php
$auto =[
  "Marca"=>"Ford",
  "Color"=>"Negro"
];
$autoCod=json_encode($auto);
echo $autoCod;
$autoDec=json_decode($autoCod,true);
var_dump ($autoDec);
 ?>
