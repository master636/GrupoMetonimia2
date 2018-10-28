<?php
    $destino="grupometonimia@gmail.com";
    $nombre=$_POST["ContactoNombre"];
    $correo=$_POST["ContactoCorreo"];
    $telefono=$_POST["ContactoTelefono"];
    $mensaje=$_POST["ContactoMensaje"];
    $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
    mail($destino,"www.grupometonimia.com",$contenido);
    header("location:html\gracias.html");

?> 