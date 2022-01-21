<?php
if ($_POST['g-recaptcha-response'] == '') die('<script type="text/javascript">
    if(confirm("Nombre Vacio")){
        document.location = "https://decmarketing.mx/logotipos";
    }else{
        document.location = "https://decmarketing.mx/logotipos";
    }
    </script>');
$obj = new stdClass();
$obj->secret = "6LfOK90bAAAAAO3PJ7KYwdfGGf-RCUTJGtc86o69";
$obj->response = $_POST['g-recaptcha-response'];
$obj->remoteip = $_SERVER['REMOTE_ADDR'];
$url = 'https://www.google.com/recaptcha/api/siteverify';

$options = array(
'http' => array(
'header' => "Content-type: application/x-www-form-urlencoded\r\n",
'method' => 'POST',
'content' => http_build_query($obj)
)
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$validar = json_decode($result);

    $nombre=htmlspecialchars($_POST['nombre']);
    $correo=htmlspecialchars($_POST['correo']);
    $telefono=htmlspecialchars($_POST['telefono']);
    $sitio=htmlspecialchars($_POST['sitio']);
    $mensaje=htmlspecialchars($_POST['mensaje']);
    if($nombre == null || $nombre[0] == ' ') die('<script type="text/javascript">
    if(confirm("Nombre Vacio")){
        document.location = "https://decmarketing.mx/logotipos";
    }else{
        document.location = "https://decmarketing.mx/logotipos";
    }
    </script>');
    if($correo == null || $nombre[0] == ' ') die('<script type="text/javascript">
    if(confirm("Correo Vacio")){ 
        document.location = "https://decmarketing.mx/logotipos";
    }else{
        document.location = "https://decmarketing.mx/logotipos";
    }
    </script>');
    if($telefono == null || $telefono[0] == ' ') die('<script type="text/javascript">
    if(confirm("Telefono Vacio")){
        document.location = "https://decmarketing.mx/logotipos";
    }else{
        document.location = "https://decmarketing.mx/logotipos";
    }
    </script>');
    if($sitio == null || $sitio[0] == ' ') die('<script type="text/javascript">
    if(confirm("sitio Vacio")){
        document.location = "https://decmarketing.mx/logotipos";
    }else{
        document.location = "https://decmarketing.mx/logotipos";
    }
    </script>');
    $to = 'contacto@decmarketing.mx';
    $subjet = 'Informes Logotipo';
    $headers = 'From: '.$correo.'' . "\r\n" .
    'Reply-To: '.$correo.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $body = "";
    $body.= "Empresa o Sitio: ".$sitio."\n";
    $body.= "Telefono: ".$telefono."\n";
    $body .= "Mensaje: ".$mensaje."\n";
    if(@mail($to,$subjet,$body,$headers)) die ('<script type="text/javascript">
    if(confirm("Mensaje Enviado")){
        document.location = "https://decmarketing.mx/logotipos";
    }else{
        document.location = "https://decmarketing.mx/logotipos";
    }
    </script>');
				
?>
