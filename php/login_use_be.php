<?php

    include 'conexion_be.php';

    $Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];

    if(isset($_POST['button'])){
        $val_login = mysqli_query($conexion, "SELECT*FROM usuarios WHERE Email='$Email' and Contrasena='$Contrasena'");
        $nr = mysqli_num_rows($Email,);
        $bcontra = mysqli_fetch_array($Contrasena);
    }
       
    if(($nr == 1)&&(password_verify($Contrasena, $bcontra['Contrasena']))){
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no encontrado, por favor verifica los datos ingresados");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }


?>