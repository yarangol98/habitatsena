<?php
require_once('admin/includes/conn.php');
session_start();
// comprobar si tenemos los parametros id en la URL
//se pueden comprobar todas las que se deseen
if (isset($_GET["id"]) && isset($_GET["name"]) && isset($_GET["email"])) {
    // initialize session variables
    $_SESSION['id'] = $_GET["id"];
    $_SESSION['name'] = $_GET["name"];
    $_SESSION['email'] = $_GET["email"];
    $_SESSION['picture'] = $_GET["picture"];
    $_SESSION['social'] = $_GET["social"];

    $query = "INSERT INTO `Facebook_API_user_facebook` (`id`, `identifier`, `name`, `email`, `picture`, `social`) VALUES (NULL,'".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['email']."','".$_SESSION['picture']."','".$_SESSION['social']."')";
    if($result = mysqli_query($conn,$query)){  
   }else{
       echo "Error al guardar la informacion";
   }

} 



?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H&B</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css" integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <header class="backgroung-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-3 pe-3">
            <a class="navbar-brand" href="#">Hábitat y Construcción</a>
            <?php
             if($_SESSION['social']=="Facebook"){
                 echo "Bienvenido ",$_SESSION['name']," haz iniciado sesion usando tu FACEBOOK";
                //  echo($_SESSION['email']);
                //  echo($_SESSION['name']);
                //  echo($_SESSION['id']);
                // echo($_SESSION['social']);

            }elseif($_SESSION['social']=="Google"){

                echo"Bienvenido ",$_SESSION['name']," haz iniciado sesion usando tu cuenta de GOOGLE";
                // echo($_SESSION['email']);
                // echo($_SESSION['name']);
                // echo($_SESSION['id']);
                // echo($_SESSION['social']);
                
            }else{
                echo("No podemos identificar la red de la que inicio sesion, vuelva al iniciar");
            }  
            ?>

            <div class="ml-auto">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-info" href="#" target="_blank" rel="noopener noreferrer">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="d-flex justify-content-center mt-3 pa-5 ">
        <div class="card text-white bg-secondary mb-3" style="max-width: 50rem;">
            <div class="card-header">
                <h3>
                    Campañas
                </h3>
            </div>
            <div class="card-body">
                <div class="alert alert-dismissible alert-light">
                    <strong>Campaña</strong>
                    <p class="card-text">
                        ejemplo
                    </p>
                    <a href="#" class="btn btn-info">
                        Ingresar al formulario
                    </a>
                </div>

                <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Atención!</strong> Lista Vacia
                </div>

                <p class="card-text">Seleccione cualquiera de las encuestas disponibles.</p>
            </div>
        </div>
    </div>
</body>

</html>