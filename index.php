<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once 'api/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css"
          integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/index.css">
    <title>H&B</title>
</head>

<body class="body-content">
<!-- esta es una prueba para crear una rama -->
    <header class="backgroung-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-3 pe-3">
                <a class="navbar-brand" href="#">Hábitat y Construcción</a>
                <div class="ml-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                              <a class="btn btn-outline-info"  href="public/views/index.php" target="_blank" rel="noopener noreferrer">Login</a>
                        </li>
                    </ul>
                </div>  
        </nav>
    </header>
    <div class="d-flex justify-content-center mt-3 pa-5 ">
        <div class="card text-center w-50">
            <div class="card-header">
                <strong>Iniciar Sesión</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">Habitat y Construcción</h5>
                <p class="card-text">Inicia sesión para continuar con el formulario</p>

                <div class="btn-group btn-lg">
                    <a class='btn btn-primary disabled'>
                        <i class="fa fa-facebook" style="width:16px; height:20px"></i>
                    </a>
                    <a class='btn btn-primary ' onclick="OnLogin()" style="width:12em">
                        Iniciar sesión con facebook
                    </a>
                </div>
                <br/><br/>
                <div class="btn-group btn-lg">
                    <a class='btn btn-danger disabled'>
                        <i class="fa fa-google-plus" style="width:20px; height:40px"></i>
                    </a>
                    <?php echo "<a class= 'btn btn-danger'href='".$client->createAuthUrl()."' style='width:12em;'>"; ?>
                        Iniciar sesión con Google
                    </a>
                </div>
                <!-- <br/><br/> -->
                <!-- <div class="btn-group btn-lg">
                    <a class='btn btn-info disabled'>
                        <i class="fa fa-instagram" style="width:16px; height:20px"></i>
                    </a>
                    <a class='btn btn-info' style="width:12em">
                        Iniciar sesión con Instagram
                    </a>
                </div> -->
            </div>
            <div class="card-footer text-muted">
                <strong id="fechaActual"></strong>
            </div>
        </div>
    </div>

    <!-- <div class="social-login">
        <button class="btn facebook-btn social-btn" type="button" ><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
        <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
    </div> -->

    <input type="hidden" name="id" id="id">
    <input type="hidden" name="nombre" id="nombre">
    <input type="hidden" name="correo" id="correo">
    <input type="hidden" name="imagen" id="imagen">


</body>
<script src="public/js/login.js"></script>
</html>
