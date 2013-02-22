Borra la cookie de sesión del navegador y de la BBDD


Una cookie se borra del navegador poniendo que expira en un momento anterior al actual.


function Delete_Cookie( name, path, domain ) {
if ( Get_Cookie( name ) ) document.cookie = name + "=" +
( ( path ) ? ";path=" + path : "") +
( ( domain ) ? ";domain=" + domain : "" ) +
";expires=Thu, 01-Jan-1970 00:00:01 GMT";
}
