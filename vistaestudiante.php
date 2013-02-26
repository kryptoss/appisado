Dado un id de pisado, recupera ese pisado y todos sus mensajes.

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
$pisado = $_POST['pisado'];


//Lo busca en BBDD. ojo al sql injection 
$pisado = $mysqli->real_escape_string($pisado);

$contenidopisado = $mysqli->query("SELECT * from pisados where id = $pisado");
//Los muestra ordenados cronológicamente.
$mensajespisado = $mysqli->query("SELECT * from mensajes where pisado = $pisado order by fecha");
$titulacion = $mysqli->query("SELECT nombre fron titulaciones where id = $contenidopisado[2]");
$asignatura = $contenidopisado[3];

}


echo "<p id="id_pisado">PISADO: #$pisado </p>"
echo "<p id="titulacion">Titulación: $titulacion</p>"
echo "<p id="Asignatura">Asignatura: $asignatura</p>"
echo "<table>";
echo "<tr><span class="fecha">Fecha</span></tr><span class="mensaje">Mensaje</span><tr>";

echo "<tr><span class="fecha">$pisado[1]</span></tr><span class="mensaje">$mensaje[4]</span><tr>";
foreach($mensajespisado as $mensaje){
if($mensaje[3]){
echo "<tr><span class="mensaje_checked"><span class="fecha">$mensaje[1]</span></tr><span class="mensaje">$mensaje[2]</span></span><tr>";
}else{
echo "<tr><span class="mensaje"><span class="fecha">$mensaje[1]</span></tr><span class="mensaje">$mensaje[2]</span></span><tr>";
}
}
echo "</table>";



//Permite enviar un mensaje de respuesta a recibemensaje.php

//Usa un catpcha para evitar spam.
