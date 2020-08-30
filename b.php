<html>
 <head>
 <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <title>Libreria don pacho</title>
    <link rel="stylesheet" href="d.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
 </head>
 <body>
 <h3>Error en los datos ingresados </h3>
 <li><a href="login.html">Volver al Login</a></li>

 <?php 

  $servername = "localhost:3306";
  $database = "PHP";
  $username = "root";
  $password = "new_password";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database) or die("Error en la conexion");
  $Nombre=$_GET['Nombre'];
  $correo=(string)$_GET['correo'];
  $pass=$_GET['pass'];
  $sql ="SELECT * FROM Usuario where  Nombre='$Nombre'
   and mail='$correo'and pass='$pass' ";
   $Resultado= mysqli_query($conn,$sql);

   $filas=mysqli_num_rows($Resultado);
   if($filas>0){
      header("Status: 301 Moved Permanently");
  header("Location: http://localhost:3000/a.html");
   exit;
           
   }
   else{
       echo("\n ");
       
   }
   
   
	
mysqli_close($conn);



?>
 </body>
</html>

