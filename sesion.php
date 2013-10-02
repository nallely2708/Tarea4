<!DOCTYPE HTML>
<html>
  <head>
  </head>
  <body>
    <h2>¡¡¡Bienvenido!!!</h2>
  <?php
    
    $codigo= $_POST['codigo'];
    $pass = $_POST['password'];
   
    echo "Su "." codigo ". $codigo. " y ". " Contraseña ". $pass." han ingresado correctamente; Sesion Iniciada!"; 
    echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
  ?>

  </body>
</html>
   