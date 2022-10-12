<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
<?php

 /*
   *Descripcion: componente los datos de formulario
   *Autor: Jessica Gonzalez
   *Fecha: 12 de octubre
 */


//obtiene nombre de formulario
   $name = $_POST['Nombre'];
   $age = $_POST['edad'];
   $phone = $_POST['telefono'];

   echo "<h1>";
   echo "Hello $name <br>";
   echo "You have $age years old <br>";
   echo "Your phone is $phone";
   echo "</h1>";

   echo "<br><br><hr>";
   echo "<a href='../html/greetingForm.html'>Regresar</<a>";
   ?>

</body>

</html>