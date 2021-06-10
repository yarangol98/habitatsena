<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:admin/home.php');
  }
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>H&B</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css"
          integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN"
          crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css">
    </head>
<body class="body-content">
    <header class="backgroung-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-3 pe-3">
                <a class="navbar-brand" href="#">Hábitat y Construcción</a>
                <div class="ms-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="btn btn-outline-info" href="#" target="_blank" rel="noopener noreferrer">Login</a>
                        </li>
                    </ul>
                </div>  
        </nav>
    </header>
    <div class="d-flex justify-content-center mt-3 pa-5 ">
        <div class="card text-center w-50" id="bg-card">
            <div class="card-header">
                <strong>Iniciar Sesión</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">Habitat y Construcción</h5>
                <p class="card-text">Administrador</p>
            	<form action="login.php" method="POST">
                    <div class="form-group mb-2">
                        <input type="text" class="form-control" placeholder="Nombre usuario" id="username"name="username" value=""/>
                    </div>
                    <div class="form-group mb-2">
                        <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password"  value=""/>
                    </div>

                  <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Ingresar</button>

                </form>
            </div>
            <div class="card-footer text-muted">
			<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
	
                <strong id="fechaActual"></strong>
            </div>
        </div>
    </div>

   


<script src="../../public/js/jquery.js"></script>
<script src="../../public/js/bootstrap.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>


 
</body>

<!-- Mirrored from www.ravijaiswal.com/Afro-v.1.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2017 03:30:10 GMT -->
</html>