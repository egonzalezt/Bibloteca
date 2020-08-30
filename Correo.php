<?php
  
  $to      = 'ticaspaspi@gmail.com';
  $subject = $_GET['Nombre'];
  $Correo =$_GET['correo'];
  $Asunto=$_GET['Asunto'];
  $message = 'David hijo mio recuerda la tarea de Maria Zea si quieres recuperar economia';
  
  $headers = 'From: Yisus@a.com' . "\r\n" .
      'Reply-To: Yisus@a.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
  
  mail($to, $subject,$Correo,$Asunto ,$message, $headers);
   echo "<script>alert('Correo enviado mi pex')</script>";
   echo "<script>setTimeout(Correo.php)</script>";
?>