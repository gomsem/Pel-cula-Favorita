<?php

    $destinatario = "roxana@bitlab.edu.sv";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $direccion = $_POST["direccion"];
    $minucipio = $_POST["municipio"];
    $departamento = $_POST["departamento"];
    $codpost = $_POST["codpost"];

    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nDireccion: " . $direccion . "\nMunicipio: " . $municipio . "\nDepartamento: " . $departamento . "\Codigo Postal: " . $codpost;
    mail($destinatario,"Correo de confirmación de edición coleccionista Blu-Ray de The Dark Knight Trilogy.", $contenido);
    header("Location:confirmation.html");

?>
