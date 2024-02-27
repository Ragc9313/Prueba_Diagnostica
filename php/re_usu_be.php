<?php

    include 'conexion_be.php';

    $Nombre_Completo = $_POST['Nombre_Completo'];
    $Email = $_POST['Email'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];

    $query = "INSERT INTO usuarios(Nombre_Completo, Email, Usuario, Contrasena) 
              VALUES('$Nombre_Completo', '$Email', '$Usuario', '$Contrasena')";
              
    $ejecutar = mysqli_query($conexion, $query)
?>