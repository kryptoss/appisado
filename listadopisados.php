
include("db_header");

usa el id de usuario a rtir de la cookie de sesion

lee cookie

//if($_COOKIE['session']!=null){
//
//$useremail=$mysqli->query("SELECT email_user from sesiones where cookie=$cookie")
//
//}else{
////error y salimos del todo
//
//}
//
//

if($_SESSION['id']!= null )
{
 $user = mysqli->query("Select nia in sesiones where id=$_SESSION['id']");
 if($user){

//Lee la titulación del usuario.
   $titulacion = msqli->query("Select titulacion in delegados where nia=$user");
//Lee todos los pisados de esa titulación y muestra los primeros caracteres de cada uno.
  $pisados = mysqli->query("Select * in pisados where titulacion = $titulacion");

echo "<table>"  
echo "<tr>id</tr><tr>asignatura</tr><tr>Texto</tr>"

foreach($pisados as $pisado){
echo "<span id=\"pisado-$pisado[0]\"><tr><a href="detallepisado.php?p=$pisado">$pisado[0]</a></tr><tr>$pisado[3]</tr><tr>substr($pisado[4],0,20)</tr></span>"
 }

echo "</table>"  

}






for(i=0; i< count($pisados);i++){



}



Permite seleccionar un pisado, esto hace una petición a detallepisado.php
