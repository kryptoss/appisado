<?php

include("db_header.php");

include("header.php");

//Recibe los par�metros enviados desde nuevo.php

  require_once('recaptchalib.php');
  $privatekey = "your_private_key";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
$titulacion = $_POST['titulacion'];
$contenido = $_POST['contenido'];
$asignatura = $_POST['asignatura'];


//Lo mete en BBDD. ojo al sql injection 
$contenido = $mysqli->real_escape_string($contenido);
$asignatura = $mysqli->real_escape_string($asignatura);
$titulacion = $mysqli->real_escape_string($titulacion);


$nombre_titulacion= $mysqli.query("Select nombre from titulaciones where id=$titulacion" );//pedir si existe la titulacion
if($nombre_titulacion!=null){
//error, la titulacion no existe

}

 

  }






if (!$mysqli->query("INSERT into pisados values (NOW(),$titulacion,$asignatura,$contenido)"){
//error al insertar fila

}



//Lee el id asignado al pisado.

$pisado_id = mysqli_insert_id($mysqli);
if(pisado_id == 0){

//error

}


echo "<div id=codigo_respuesta>";
echo "<p>El código de registro asociado a este PISADO es: </p>"
echo "<h1>$pisado_id<h1>"
echo "<p id=aviso_pisado>Es muy importante guardar este código, ya es ques la unica forma de poder realizar un seguimiento sobre el estado del pisado</p>";
echo "</div>";


//Lo muestra por pantalla con un mensaje sobre su importancia.

include("db_footer.php");
include("footer.php");

?>
