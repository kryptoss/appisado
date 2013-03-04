
La app tiene dos partes: aviso y seguimiento.

La parte de aviso funciona como:

nuevopisado.php -> Formulario que pide los datos del nuevo pisado
nuevorespuesta.php -> Guarda los datos del formulario y el entrega un ID unico al usuario
nuevorespuestaajax.php -> lo mismo que el de antes, pero para hacerlo con ajax.

La parte de suigmiento funciona como:

login.php, logout.php -> los delegados tienen que hacer login
listadopisados.php -> lista todo los pisado que un determinado delegado puede ver.
detallepisado.php -> muestra el pisado y todos los mensajes asociados a el. Permite al delegado dar una respuesta.

vistaestudiante.php -> Permite al estudiante ver el estado del pisado y los mensajes que haya podido dejar el delegado. Permite que el alumno conteste al delegado.
recibemensaje.php -> recibe el mensaje de un alumno sobre un pisado existente


Ademas, existen los archivos:

db.sql -> Modelo de datos. Se ejecuta este sql sobre la BBDD para prepararla
db_header y db_footer -> Codigo de apertura y cierre de la conexion a la BBDD para incluir en los archivos.

