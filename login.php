
Autentica con la direccion de correo al delegado
Guarda en bbdd una id de sesión de la cookie asociado al usuari y le da la cookie al usuario.


function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}

