<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$remitente = $_POST['email'];
$destinatario = ''; // en esta línea va el mail del destinatario.
$asunto = "Consulta BeSoft"; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{

	$message= "Consulta: " . $_POST["message"] . "\r\n";
    $headers= "From: \"".$_POST['fullName']." "."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $message, $headers);
    include "confirma.html"; //se debe crear un html que confirma el envío

}
?>
