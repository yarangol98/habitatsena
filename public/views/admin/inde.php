<!DOCTYPE html>
<html>
<head>
	 <title>Ajax Curd Operation</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.js" charset="utf-8"></script>
</head>
<body>

<h1 class="text-center text-uppercase display-4 font-weight-bold"> Ajax crud Operation 2020 </h1>
<div class="container">
	<div class="d-flex flex-row justify-content-end ">
		<button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#myModal">
		 Click To Insert
		</button>
	</div>

	<div >
		<h2> All Records </h2>
		<div id="records_content"></div>
	</div>
  

</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
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
      		<label>  User Name: </label>
      		<input type="text" name="firstname" id="firstname" placeholder="First Name" class="form-control">
      	</div>

      	<div class="form-group">
      		<label> Last Name </label>
      		<input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control">
      	</div>

      	<div class="form-group">
      		<label> Email Id </label>
      		<input type="text" name="email" id="email" placeholder="Email Id" class="form-control">
      	</div>

      	<div class="form-group">
      		<label> Mobile No. </label>
      		<input type="text" name="mobile" id="mobile" placeholder="Mobile No." class="form-control">
      	</div>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- //////////////// update model////////////////// -->
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
      		<label> User Name </label>
      		<input type="text" name="firstname" id="update_firstname" placeholder="First Name" class="form-control">
      	</div>

      	<div class="form-group">
      		<label> Last Name </label>
      		<input type="text" name="lastname" id="update_lastname" placeholder="Last Name" class="form-control">
      	</div>

      	<div class="form-group">
      		<label> Email Id </label>
      		<input type="text" name="email" id="update_email" placeholder="Email Id" class="form-control">
      	</div>

      	<div class="form-group">
      		<label> Mobile No. </label>
      		<input type="text" name="mobile" id="update_mobile" placeholder="Mobile No." class="form-control">
      	</div>

      </div>

      <!-- Modal footer -->
     <div class="modal-footer">
	                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Update</button>
	                <input type="hidden" id="hidden_user_id" style="border: 1px solid black">
	 </div>

    </div>
  </div>
</div>

<script>
	
$(document).ready(function () {
    readRecords(); 
	});

	function addRecord(){

		var firstname =  $("#firstname").val();
		var lastname =  $("#lastname").val();
		var email =  $("#email").val();
		var mobile =  $("#mobile").val();

		$.ajax({

			url:"backend.php",
			type:'POST',
			data: {
				firstname:firstname,
				lastname:lastname,
				email:email,
				mobile:mobile,
			},
			success:function(data, status){
				readRecords();
			},

		});

	}

//////////////////Display Records
	function readRecords(){
		
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

	var conf = confirm("are u sure");
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
	  $("#hidden_user_id").val(id);
	  $.post("backend.php", {
            id: id
        },
        function (data, status) {
            //alert(data);
            //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
            var user = JSON.parse(data); 
           console.log(user);
            //alert(user);

            $("#update_firstname").val(user.firstname);
            $("#update_lastname").val(user.lastname);
            $("#update_email").val(user.email);
            $("#update_mobile").val(user.mobile);
            
        }
    );
    $("#update_user_modal").modal("show");
}


function UpdateUserDetails() {
    var firstnameupd = $("#update_firstname").val();
    var lastnameupd = $("#update_lastname").val();
    var emailupd = $("#update_email").val();
    var mobileupd = $("#update_mobile").val();
    var hidden_user_idupd = $("#hidden_user_id").val();
    $.post("backend.php", {
            hidden_user_idupd : hidden_user_idupd,
            firstnameupd : firstnameupd,
            lastnameupd : lastnameupd,
            emailupd : emailupd,
            mobileupd : mobileupd 
        },
        function (data, status) {
            $("#update_user_modal").modal("hide");
            readRecords();
        }
    );
}

</script>
<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>