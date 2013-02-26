
include('db_header.php');

<script>

function sendajax(){
 var request = new XMLHttpRequest();
 request.open('POST', 'http://$domain/nuevorespuestaajax.php', true);
 request.setRequestHeader('Content-Type', 'multipart/form-data');a
 request.onreadystatechange=onLoad; 
 request.send(); 
}

function onLoad(){

var marco_codigo= Document.getElementById("marco_codigo");
marco_codigo.appendChild();

}

</script>
//pide un id de pisado y llama a vistaestudiante.php
//Usa un captcha para evitar spam.

//formulario para titulacion, asignatura y contenido.
echo "<form method=\"post\" action=\"http://$domain/vistaestudiante.php\"  onsubmit=\"sendajax()\" name=\"verpisado\">";


$fields=mysqli->query("Select id from pisados where id=0");
$fields_sizes=fields->fetch_fields();
echo "PISADO ID: <input type=\"text\" name=\"pisado\" maxlength=\"".$fields_sizes[0]->max_length."\"><br>";


//Meter captcha para evitar spam
          require_once('recaptchalib.php');
          $publickey = "your_public_key"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        <input type="submit" />

</form>



include('db_footer.php');
