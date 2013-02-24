
include("db_header");

usa el id de usuario a rtir de la cookie de sesion

lee cookie

if($_COOKIE['session']!=null){

$useremail=$mysqli->query("SELECT email_user from sesiones where cookie=$cookie")

}else{
//error y salimos del todo

}


Lee la titulación del usuario.
$titulacion=$mysqli->query("SELECT titulacion from delegados where emailaddress=$useremail");

Lee todos los pisados de esa titulación y muestra los primeros caracteres de cada uno.

$pisados= mysqli->query("SELECT  * FROM pisados where titulacion=$titulacion");


echo "<tr>id</tr><tr>asignatura</tr><tr>Texto</tr>"

for(i=0; i< count($pisados);i++){

echo "<tr>$pisados[i][0]</tr><tr>$pisados[i][3]</tr><tr>substr($pisados[i][4],0,20)</tr>"


}



Permite seleccionar un pisado, esto hace una petición a detallepisado.php
