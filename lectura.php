<?php
$xml = simplexml_load_file('mensajes.xml');

foreach ($xml->mensaje as $mensaje) {
  echo "ID: " . $mensaje->id . ", Texto: " . $mensaje->texto . "<br>";
}
?>