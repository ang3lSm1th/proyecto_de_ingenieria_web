<?php
require '../modelo/conexion.php'; // Asegúrate de que esta ruta esté correcta

if(isset($_POST['registro'])) {
    // Obtener los valores enviados por el formulario
    $usuario = $_POST['nombre_user'];
    $contrasena = $_POST['contrasena_user']; // Asegúrate de que este nombre de campo sea correcto
    $correo = $_POST['correo_user'];

    // Insertamos los datos en la base de datos
    $sql = "INSERT INTO clientes (id_user, nombre_user, contrasena_user, correo_user) VALUES (null, '$usuario', '$contrasena', '$correo')";
    
    $resultado = mysqli_query($conexion, $sql);
    
    if($resultado) {
        // Inserción correcta
        echo "¡Se insertaron los datos correctamente!";
    } else {
        // Inserción fallida
        echo "¡No se puede insertar la información!"."<br>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}
?>