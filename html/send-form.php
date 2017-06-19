<?php
  
  $data = $_POST;

  // Vars
  $to  = $data['email'];
  $subject = 'Solicito información de carrera o diplomado';
  
  // body
  $message = '
    <html>
      <head>
        <title>Datos de solicitante</title>
      </head>
      <body>
        <p><label>Nombres: </label>' . $data['firstname'] . '</p>
        <p><label>Apellidos: </label>' . $data['lastname'] . '</p>
        <p><label>DNI: </label>' . $data['dni'] . '</p>
        <p><label>Edad: </label>' . $data['age'] . '</p>
        <p><label>Correo electrónico: </label>' . $data['email'] . '</p>
        <p><label>Celular: </label>' . $data['phone'] . '</p>
        <p><label>Departamento: </label>' . $data['department'] . '</p>
        <p><label>Sede: </label>' . $data['sede'] . '</p>
        <p><label>Taller: </label>' . $data['workshop'] . '</p>
      </body>
    </html>
  ';
  
  // Header Content-type
  $header  = 'MIME-Version: 1.0' . "\r\n";
  $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  // Header aditional
  $name = $data['firstname'] . ' ' . $data['lastname'];
  $header .= 'To: ' . $name . ' <' . $data['email'] . '>' . "\r\n";
  $header .= 'From: Administración <administración@somark.pe>' . "\r\n";
  $header .= 'Cc: Katthy Lizarbe <katty.lizarbe@somark.pe>' . "\r\n";

  // Send
  mail($to, $subject, $message, $header);

  // Redirect
  header("Location: index.php?page=confirmation");

?>