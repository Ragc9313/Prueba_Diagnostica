<?php

    include 'conexion_be.php';

    $Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];

    // Obtener la contraseña almacenada de la base de datos
    $query = "SELECT Contrasena FROM usuarios WHERE Email = '$Email'";
    $resultado = mysqli_query($conexion, $query);

    if ($fila = mysqli_fetch_assoc($resultado)) {
    $hashAlmacenado = $fila['Contrasena'];

    // Verificar la contraseña ingresada con la almacenada
    if (password_verify($Contrasena, $hashAlmacenado)) {
        echo '
            <script>
                alert("Inicio de sesión exitoso; Bienvenido");
                window.location = "../bienvenida.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Contraseña incorrecta");
                window.location = "../index.php";
            </script>
        ';
    }
    } else {
        echo '
        <script>
            alert("Usuario no encontrado");
            window.location = "../index.php";
        </script>
    '; 
}

mysqli_close($conexion); ?>

?>