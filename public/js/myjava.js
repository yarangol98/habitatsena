$(document).ready(function(){
	alert();
	change_page('0');
});





function change_page(page_id){
     $(".flash").show();
     $(".flash").fadeIn(400).html('Cargando <img src="../img/ajax-loader.gif" />');
     var dataString = 'page_id='+ page_id;
     $.ajax({
           type: "POST",
           url: "../views/admin/phpformulario/load_data.php",
           data: dataString,
           cache: false,
           success: function(result){
           $(".flash").hide();
			     $("#page_data").html(result);
           }
      });
	  



	
	
$('select').on('change', function() {



})
	
	
	
}


