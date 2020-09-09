<?php
$nombre=$_POST['name'];
$apellido=$_POST['lastname'];
$celular=$_POST['celular'];
$empresa=$_POST['organizacion'];
$direccion=$_POST['direccion'];
$email=$_POST['correo'];
$telefono=$_POST['telefono'];
$url=$_POST['url'];
$sizeqr=200;

$mensaje="BEGIN:VCARD\n";
$mensaje.="VERSION:2.1\n";
$mensaje.="N;CHARSET=UTF-8;ENCODING=QUOTED-PRINTABLE:".$apellido.";".$nombre."\n";
$mensaje.="FN;CHARSET=UTF-8;ENCODING=QUOTED-PRINTABLE:".$nombre." ".$apellido."\n";
$mensaje.="ORG:".$empresa."\n";
$mensaje.="TEL;CELL;VOICE:".$celular."\n";
$mensaje.="TEL;Office:".$telefono."\n";
$mensaje.="EMAIL:".$email."\n";
$mensaje.="ADR: ".$direccion."\n";
$mensaje.="URL:".$url."\n";
$mensaje.="END:VCARD";

include('vendor/autoload.php');
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($mensaje);
$qrCode->setSize($sizeqr);
$image= $qrCode->writeString();

 $imageData = base64_encode($image);

echo '<img src="data:image/png;base64,'.$imageData.'">';

?>

