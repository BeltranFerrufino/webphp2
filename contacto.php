<?php

if (isset($_POST["enviarconsulta"])){
    if (!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["telefono"]) && !empty($_POST["asunto"]) && !empty($_POST["mensaje"])  ) {

        /*
        $email = $_POST["email"];*/
        $enviaramail = "jp3270207@gmail.com";
        $asunto = "Consulta de " . $_POST["nombre"];
        $demail = $_POST["email"];

        $mensaje = "Asunto: " . $_POST["asunto"] . "\r\n";
        $mensaje .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
        $mensaje .= "Nombre: " . $_POST["nombre"] . "\r\n";
        $mensaje .= "Telefono: " . $_POST["telefono"] . "\r\n";
        $mensaje .= "Email: " . $_POST["email"] . "\r\n";

        $header = "From: <$demail>" . "\r\n";

        $mail = mail($enviaramail, $asunto, $mensaje, $header);

        header ("Location: https://google.com ");

        
    }
    
    
};



?>