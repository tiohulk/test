<?php
$xml = new SimpleXMLElement('<root></root>');

$mensaje = $xml->addChild('mensaje');
$mensaje->addChild('id', 3);
$mensaje->addChild('texto', 'Mensaje 3');

$xml->asXML('mensajes.xml');
?>