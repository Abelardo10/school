<?
//Reanudamos la sesion
@session_start();

//Validamos si existe realmente una sesion activa o no
if($_SESSION["autentica"] != "TRUE"){
//Si no hay sesion activa, lo direccionamos al index.html (inicio de sesion)
header("Location: Login/Login.html");
exit();
}
?>

