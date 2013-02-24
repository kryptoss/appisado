
$mysqli = new mysqli("localhost", "mi_usuario", "mi_contraseña", "world");
/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
