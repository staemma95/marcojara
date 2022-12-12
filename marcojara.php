<!DOCTYPE html>
<html>
<head>
<title>
  TALLER INDIVIDUAL
</title>
</head>
<body>
<CENTER>
<h1>
  <u>
    TALLER 1
  </u>
</h1>
<?php
date_default_timezone_set("America/Santiago");
echo "La fecha de hoy es : " . date("m/d/Y") . "<br>";
echo " La hora es: " . date( "H:i:sa"). "<br>";
class misdatos{
  public static $maj = "Marco Antonio Jara";
  public static $asg = "Administracion de Servicios Web";
}
echo "Yo Soy " .misdatos::$maj."<br>";
echo " Y " .  "Esta Asignatura es: " .misdatos::$asg;
?>
</CENTER> 
</body>
</html>