<?php
error_reporting(0);
//Precargamos la libreria de composer
require_once 'vendor/autoload.php';
include '../public/views/admin/includes/conn.php';

// Configuracion de la Api de Google (Credenciales)
$clientID = '550939310506-nbjiqau5ckka3lemi37akjbbf6n8sis8.apps.googleusercontent.com';
$clientSecret = 'v6_Vd6pNLOAqUPG8icIIrhQg';
$redirectUri = 'http://localhost/HyC/sena-hyt/api/login.php';

//Creamos un metodo el cual asignamos los valores la Api y adicionamos la informacion del perfil
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
//$client->addScope("id");
$client->addScope("email");
$client->addScope("profile");

//Validamos el codigo obtenido
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);
  
    // Tomamos la informacion del perfil de Google
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $id = $google_account_info->id;
    $email =  $google_account_info->email;
    $name =  $google_account_info->name;
  
    // Estos datos son los que obtenemos y mostramos por pantalla....	
    //echo $id . '<br>';
    echo $email .'<br>';
    echo $name ;

    
    
		$sql = "INSERT INTO google_api_user_google (names,email) VALUES ('$name', '$email')";
    $query = $conn->query($sql);
    if ($query) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

		
  }  
  