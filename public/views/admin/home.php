<?php include 'includes/session.php'; ?>
   <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H&B</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css"
          integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN"
          crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<script src="../../css/bootstrap.css"></script>
<script src="../../css/bootstrap.min.css"></script>
	
	


 
 

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Hábitat y Construcción</a>



        <div class="ml-auto">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="FacebookUser.php">Facebook API</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Resultados.php">Resultados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Registrar formularios</a>
                </li>
                &nbsp;
                <li class="nav-item">
                    <a class="btn btn-outline-success my-2 my-sm-0"  href="logout.php" >salir <i
                            class="fa fa-sign-out"></i></a>
                </li>
            </ul>
        </div>


</nav>
<div class="d-flex justify-content-center mt-3 pa-5 ">
    <div class="card text-center w-50">
        <div class="card-header d-flex justify-content-between">
            <h3>
                Campañas
            </h3>

            <button type="button" class="btn btn-primary" id="ButtonModal"
                    data-toggle="modal"
                    data-target="#exampleModal">
                <i class="fa fa-plus"></i>
            </button>
        </div>
        <div class="card-body">

  
            <div class="col" id="Habilitados">
              
				
				
	<div >
		
		<div id="records_content"></div>
	</div>
                
            </div>
      

        </div>
        <div class="card-footer text-muted">
            <a onclick="CambioPestaña('Habilitados')" class="btn btn-success">Activos</a>
            <a onclick="CambioPestaña('Inhabilitados')" class="btn btn-info">Inactivos</a>
            <strong id="fechaActual"></strong>
        </div>
    </div>
</div>






   
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo formulario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Campaña</label>
                        <input type="text" id="nombreFormulario" name="nombreFormulario" class="form-control">
                        <small class="form-text text-muted">Ingresa el nombre del formulario</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Url del Formulario</label>
                        <input type="text" id="urlFormulario"  name="urlFormulario" class="form-control">
                        <small class="form-text text-muted">Ingresa url del formulario</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Url de los Resultados</label>
                        <input type="text" id="urlRespuestas" name="urlRespuestas"  class="form-control">
                        <small class="form-text text-muted">Ingresa la url de los resultados</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Descripción</label>
                        <textarea class="form-control" id="descripcion"  name="descripcion" rows="3"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>
                </div>
            
        </div>
    </div>
</div>




<div class="modal fade" id="update_user_modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
                   <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Campaña</label>
                        <input type="text" id="nombreFormularioe" name="nombreFormularioe" class="form-control">
                        <small class="form-text text-muted">Ingresa el nombre del formulario</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Url del Formulario</label>
                        <input type="text" id="urlFormularioe"  name="urlFormularioe" class="form-control">
                        <small class="form-text text-muted">Ingresa url del formulario</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Url de los Resultados</label>
                        <input type="text" id="urlRespuestase" name="urlRespuestase"  class="form-control">
                        <small class="form-text text-muted">Ingresa la url de los resultados</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Descripción</label>
                        <textarea class="form-control" id="descripcione"  name="descripcione" rows="3"></textarea>
                    </div>

                </div>

      <!-- Modal footer -->
     <div class="modal-footer">
	                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Update</button>
	                <input type="text" id="hidden_user_id" style="border: 1px solid black">
	 </div>

    </div>
  </div>
</div>





<script>
	
$(document).ready(function () {
    readRecords(); 
	});

	function addRecord(){

		var nombreFormulario =  $("#nombreFormulario").val();
		var urlFormulario =  $("#urlFormulario").val();
		var urlRespuestas =  $("#urlRespuestas").val();
		var descripcion =  $("#descripcion").val();

		$.ajax({

			url:"backend.php",
			type:'POST',
			data: {
				nombreFormulario:nombreFormulario,
				urlFormulario:urlFormulario,
				urlRespuestas:urlRespuestas,
				descripcion:descripcion,
			},
			success:function(data, status){
				readRecords();
			},

		});

	}

//////////////////Display Records
	function readRecords(){
		$("#nombreFormulario").val("");
            $("#urlFormulario").val("");
            $("#urlRespuestas").val("");
            $("#descripcion").val("");
		var readrecords = "readrecords";
		$.ajax({
			url:"backend.php",
			type:"POST",
			data:{readrecords:readrecords},
			success:function(data,status){
				$('#records_content').html(data);
			},

		});
	}



//=============Delete Userdetails============
function DeleteUser(deleteid){

	var conf = confirm("Ba ha eliminar el registro");
	if(conf == true) {
	$.ajax({
		url:"backend.php",
		type:'POST',
		data: {  deleteid : deleteid},

		success:function(data, status){
			readRecords();
		}
	});
	}
}

//=============Updatation Part===============
function GetUserDetails(id){
	$("#nombreFormularioe").val("");
            $("#urlFormularioe").val("");
            $("#urlRespuestase").val("");
            $("#descripcione").val("");
	  $("#hidden_user_id").val(id);
	  $.post("backend.php", {
            id: id
        },
        function (data, status) {
            //alert(data);
            //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
            var datosfor = JSON.parse(data); 
           //.log(user);
            //alert(user);

            $("#nombreFormularioe").val(datosfor.nombreFormulario);
            $("#urlFormularioe").val(datosfor.urlFormulario);
            $("#urlRespuestase").val(datosfor.urlRespuestas);
            $("#descripcione").val(datosfor.descripcion);
            
        }
    );
    $("#update_user_modal").modal("show");
}


function UpdateUserDetails() {
    var nombreFormularioe = $("#nombreFormularioe").val();
    var urlFormularioe = $("#urlFormularioe").val();
    var urlRespuestase= $("#urlRespuestase").val();
    var descripcione = $("#descripcione").val();
    var hidden_user_idupd = $("#hidden_user_id").val();
    $.post("backend.php", {
            hidden_user_idupd : hidden_user_idupd,
            nombreFormularioe : nombreFormularioe,
            urlFormularioe : urlFormularioe,
            urlRespuestase : urlRespuestase,
            descripcione : descripcione 
        },
        function (data, status) {
            $("#update_user_modal").modal("hide");
            readRecords();
        }
    );
}

</script>
<script type="text/javascript" src="bootstrap.min.js"></script>
















<script>
//Abrir modal
$('#ButtonModal').on('click', () => {
    $('#modalForm').modal('show');
});

</script>





</body>
</html>

