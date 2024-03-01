<?php

    include 'conexion_be.php';

    $Nombre_Completo = $_POST['Nombre_Completo'];
    $Email = $_POST['Email'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];

    //Encriptacion de contraseña
    $hash = password_hash($Contrasena, PASSWORD_DEFAULT,['cost' => 3]);
    //Ingreso de los datos a la DB
    $query = "INSERT INTO usuarios(Nombre_Completo, Email, Usuario, Contrasena) 
              VALUES('$Nombre_Completo', '$Email', '$Usuario', '$Contrasena')";
              
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado con exito");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo'
            <script>
                alert("Intentalo nuevamente, registro sin exito");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>