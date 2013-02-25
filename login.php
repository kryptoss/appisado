
Autentica con la direccion de correo al delegado
Guarda en bbdd una id de sesión de la cookie asociado al usuari y le da la cookie al usuario.

function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}


<?php
/**
 * login.php
 * @version 1.0
 * 
 * Página de autenticación.
 * Controla la solicitud de los datos de identificación al usuario.
 */
require (dirname(__FILE__) . '/bootstrap.php');
require_once 'includes/ldap_gateway.php';
require_once 'includes/db_gateway.php';
// Recicla cualquier sesion existente.
session_start();
session_regenerate_id(true);
/**
 * Muestra los errores si los hay.
 */
function mostrarErrores ($strerror)
{
    if (! empty($strerror)) {
        ?>
<span class="recuadroError">
<?php
        echo $strerror;
        ?>
</span>
<?php
    }
}
/**
 * Filtra y sanea los campos recibidos del formulario.
 * 
 * @return Un array con los valores del resultado del filtrado.
 */
function filtrarFormulario ()
{
    $filtrosCampos = array('username' => array('filter' => FILTER_VALIDATE_INT), 
    'password' => array());
    return filter_input_array(INPUT_POST, $filtrosCampos);
}
$strerror = '';
if (isset($_POST['username'])) {
    $formulario = filtrarFormulario();
    if ($formulario['username'] && $formulario['password']) {
        try {
            $user1 = LDAP_Gateway::login($formulario['username'], 
            $formulario['password']);
            if ($user1) {
                $delegados = mysqli->query(select nia in delegados);
                if(in_array($formulario['username'], $delegados)){

                //set cookie
                //guardar sesion
                $id_session = uniqid();
                $_SESSION['id'] = $id_session;
                mysqli->query("INSERT into sesiones values($id_session,$formulario['username'] )");
                } else {
                    
                         $strerror = "No es un delegado";
                }
                header('Location: listadopisado.php');
            } else {
                $strerror = "Usuario o contrase&ntilde;a incorrectos.";
            }
        } catch (Exception $e) {
            $strerror = "No ha sido posible validarse con el servidor de autenticaci&oacute;n. Int&eacute;ntelo de nuevo m&aacute;s tarde.";
        }
    } else {
        $strerror = "Debe de introducir su usuario y su contrase&ntilde;a.";
    }
}
if (! empty($strerror)) {
    header("HTTP/1.1 403 Forbidden");
}
// Renderizado de la página
include 'tmpl/header.php';
include 'tmpl/loginform.php';
include 'tmpl/footer.php';
?>


