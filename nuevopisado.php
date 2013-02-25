
include("db_header.php");


//formulario para titulacion, asignatura y contenido.
echo "<form method=\"post\" action=\"http://$domain/nuevorespuesta.php\"  onsubmit=\"sendajax()\" name=\"nuevopisado\">";


echo " TitulaciÃ³n: <select nam=\"titulacion\">";
echo "<option value=\"noselect\" selected> Elija titulaciÃn</option>";

$titulaciones=mysqli->query("Select * from titulaciones");

for($titulacion=0;$titulacion<length($titulaciones);$titulacion++){

echo "<option value=\"$titulaciones[$titulacion][0]\">$titulaciones[$titulacion][1]</option>";

}
echo "</select>"

$fields=mysqli->query("Select asignatura,contenido from pisados where id=0");
$fields_sizes=fields->fetch_fields();
echo "Asignatura: <input type=\"text\" name=\"asignatura\" maxlength=\"".$fields_sizes[0]->max_length."\"><br>";

echo "ExposiciÃn: <input type=\"text\" name=\"contenido\" maxlength=\"".$fields_sizes[1]->max_length."\"><br>";

//Si la titulacion es noselect no dejar enviar y mostrar un mensaje

//Meter captcha para evitar spam
          require_once('recaptchalib.php');
          $publickey = "your_public_key"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        <input type="submit" />

</form>

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


<div id="marco_codigo" />



//Meter captcha para evitar spam

include("db_footer.php");
