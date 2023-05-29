<?php
// Iniciar la sesión
session_start();

// Función para obtener la dirección IP del usuario
function obtenerDireccionIP() {
    $ip = '';

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Obtener la dirección IP del usuario
    $ip = obtenerDireccionIP();

    // Verificar si se ha enviado una solicitud para bloquear la IP
    if (isset($_POST['bloquear'])) {
        // Aquí puedes agregar tu lógica para bloquear la dirección IP, como guardarla en una base de datos o en un archivo
        // Por simplicidad, mostraremos un mensaje de confirmación
        echo "La dirección IP $ip ha sido bloqueada.";
    }
    ?>
    <!-- Formulario para bloquear la IP -->
    <form method="post" action="">
        <input type="submit" name="bloquear" value="Bloquear IP">
    </form>
    <?php
} else {
    // Si el usuario no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header("Location: ../ChatApp/login.php");
    exit;
}
?>