<?php
include"includes/conn.php";

extract($_POST);

if(isset($_POST['readrecords'])){

	$data =  '<table  id="datatable"  name="datatable" class="table table-bordered table-striped ">
						<tr class="bg-dark text-white">
							<th>No.</th>
							<th>Nombre Campaña</th>
							<th>Url Formulario</th>
							<th>Url Resultados</th>
							<th>id</th> 
							<th>Descripccion</th> 
							<th>Estado</th> 
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>'; 

	$displayquery = " SELECT * FROM `Facebook_API_formularios` order by id desc"; 
	$result = mysqli_query($conn,$displayquery);

	if(mysqli_num_rows($result) > 0){
// 				"6"=>($number)?'<span >Activado</span>':'<span >Desactivado</span>'

		$number = 1;
		while ($row = mysqli_fetch_array($result)) {
			
			$data .= '<tr>  
				<td>'.$number.'</td>
				<td>'.$row['nombreFormulario'].'</td>
				<td> <a  href="'.$row['urlFormulario'].'"class="btn btn-warning btn-lg active"
                                           role="button"
                                           aria-pressed="true" data-toggle="tooltip" data-placement="right"
                                           title="Ir al formulario"><i class="fa fa-eye"></i>
                                        </a></td>
				<td><a href="'.$row['urlRespuestas'].'" class="btn btn-success btn-lg active"
                                           role="button"
                                           aria-pressed="true" data-toggle="tooltip" data-placement="right"
                                           title="Ver Resultados"><i class="fa fa-table"></i>
                                        </a></td>
				<td>'.$row['id'].'</td>
				<td>'.$row['descripcion'].'</td>
						<td>'.$row['estado'].'</td>
						
						
						
						
				<td><button onclick="GetUserDetails('.$row['id'].')"  class="btn btn-outline-info btn-lg" id="BtnEditar"
                                                value="editar">
                                            <i class="fa fa-edit"></i>
                                        </button>
					
				</td>
				<td>
				 <button onclick="DeleteUser('.$row['id'].')"  class="btn btn-outline-danger btn-lg" id="BtnInhablitar"
                                              >
                                            <i class="fa fa-trash-o"></i>
                                        </button>
			
				</td>
    		</tr>';
    		$number++;

		}
	} 
	 $data .= '</table>';
    	echo $data;

}

//adding records in database
if(isset($_POST['nombreFormulario']) &&  isset($_POST['urlFormulario']) && isset($_POST['urlRespuestas']) && isset($_POST['descripcion']) )
	{
		$query = " INSERT INTO `Facebook_API_formularios`( `urlFormulario`, `urlRespuestas`, `nombreFormulario`, `descripcion`, `estado`) VALUES('$nombreFormulario', '$urlFormulario', '$urlRespuestas', '$descripcion', '1' )   ";

		if($result = mysqli_query($conn,$query)){
			exit(mysqli_error());
		}else{
			echo "1 record added";
		}
	}


// pass id on modal
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    $user_id = $_POST['id'];
    $query = "SELECT * FROM Facebook_API_formularios WHERE id = '$user_id'";
    if (!$result = mysqli_query($conn,$query)) {
        exit(mysqli_error());
    }
    
    $response = array();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
       
            $response = $row;
        }
    }
  // agar ek bhi value nai milta hai tho data not found no. of rows 0 hai tho
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
   //     PHP has some built-in functions to handle JSON.
// Objects in PHP can be converted into JSON by using the PHP function json_encode(): 

    echo json_encode($response);
}
// ye top wala id jo humhe mil raha hai uska hai jaha wo id check karega sahi hai ya nai agar nai tho invalid req boldega...
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
//////////////// update table//////////////

if(isset($_POST['hidden_user_id']))
{
    // get values
	
	        //    nombreFormularioe : nombreFormularioe,
          // urlFormularioe : urlFormularioe,
         //   urlRespuestase : urlRespuestase,
          //  descripcione : descripcione 
	
	
	
    $hidden_user_id = $_POST['hidden_user_id'];
    $nombreFormularioe = $_POST['nombreFormularioe'];
    $urlFormularioe = $_POST['urlFormularioe'];
    $urlRespuestase = $_POST['urlRespuestase'];
    $descripcione = $_POST['descripcione'];
    $query = "UPDATE Facebook_API_formularios SET urlFormulario = '$urlFormularioe', urlRespuestas = '$urlRespuestase', nombreFormulario = '$nombreFormularioe', descripcion = '$descripcione'  WHERE id = '$hidden_user_id'";
	// `urlFormulario`, `urlRespuestas`, `nombreFormulario`, `descripcion`, `estado`
    if (!$result = mysqli_query($conn,$query)) {
        exit(mysqli_error());
    }
}
/////////////Delete user record /////////

if(isset($_POST['deleteid']))
{

	$user_id = $_POST['deleteid']; 

	$deletequery = " delete from Facebook_API_formularios where id ='$user_id' ";
	if (!$result = mysqli_query($conn,$deletequery)) {
        exit(mysqli_error());

}

}

?>

