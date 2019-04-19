<?php 

class StudentController{
	
/*==================================
=            AddStudent            =
==================================*/

	public function newStudentController(){

	if(isset($_POST["usuarioregistro"])
		){
		$datoController=array(
		"name"=>$_POST["usuarioregistro"],
		"lastname"=>$_POST["apellidoregistro"],
		"created_at"=>$date=date("Y-m-d H:i:s")
		);
			//Llamado de la función datos y el objeto registroUusarioModel Model del Modelo
			$respuesta = StudentModel::newStudentModel($datoController,"student");

				if($respuesta=="success"){
					// header("location:index.php?action=ok");
					  // print "<script>alert(\"Registro exitoso.\");window.location='welcome';</script>";
					  echo '<script>							
				 			swal({
				 					title: "Success",
										text:"Info added successfully",
										type:"success",
										confirmButtonText:"Ok",
				 					closeOnConfirm:false
				 				},
				 				function(isConfirm){
				 					if(isConfirm){
				 						window.location="student";
				 					}
				 				});
				 		</script>';

				}else{
					  echo '<script>							
				 			swal({
				 					title: "Success",
										text:"Error please try again",
										type:"error",
										confirmButtonText:"Ok",
				 					closeOnConfirm:false
				 				},
				 				function(isConfirm){
				 					if(isConfirm){
				 						window.location="student";
				 					}
				 				});
				 		</script>';
				}




	}

}

/*=====  End of AddStudent  ======*/
	

/*========================================
=            Get All students            =
========================================*/
	public function getAllStudentController(){
		// clase del crud Datos y su parámetro tabla usuario
		$respuesta=StudentModel::getAllStudentModel("student");
		//Muestrame los datos en usuarios en el archivo usuarios.php
		// var_dump($respuesta);
		//var_dump($respuesta[2][3]);

		// respuesta como una fila sea un item
		foreach($respuesta as $fila=>$item){			
		echo '<tr>
	              <td>'.$item["name"].'</td>
	              <td>'.$item["lastname"].'</td>	              
	              <td>'.$item["created_at"].'</td>	
	              <td style="width:130px;">
	               	<a href="index.php?action=editstudent&id='.$item['id'].'" class="btn btn-warning btn-xs">Editar</a> 
                </td>
              </tr>';
		}	
	}

/*=====  End of Get All students  ======*/


/*==========================================
=            Get All for use id            =
==========================================*/

public function getAllStudentControllerForId(){
	$respuesta=StudentModel::getAllStudentModelForId("student");
	
	foreach ($respuesta as $fila => $item) {		
		echo '<option value="'.$item['id'].'" >'.$item['lastname']. " " .$item['name'].'</option>';		                                   
	}

}



/*=====  End of Get All for use id  ======*/






/*=====================================
=            Edit Students            =
=====================================*/

	public function editStudentController(){
	
		$datosController=$_GET['id'];
		$respuesta=StudentModel::editStudentModel($datosController,"student");
		//var_dump($respuesta);

		echo '  <input type="hidden" value="'.$respuesta["id"].'" name="idEditar">

				<div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Nombre:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["name"].'" name="nombreEditar" class="form-control" id="pwd" placeholder="Enter name">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Apellidos:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["lastname"].'" name="apellidoEditar" class="form-control" id="pwd" placeholder="Enter lastname">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Fecha registro:</label>
                  <div class="col-sm-10"> 
                    <input type="text" readonly value="'.$respuesta["created_at"].'" name="creadoEl" class="form-control" id="pwd" placeholder="Fecha de creación">
                  </div>
                </div> 

                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                  </div>
                </div>';



	}

/*=====  End of Edit Students  ======*/


	

/*=======================================
=            Update Students            =
=======================================*/
	
	public function updateStudentController(){
		if(isset($_POST["nombreEditar"])){
			$datosController=array(
				"id"=>$_POST["idEditar"],
				"name"=>$_POST["nombreEditar"],
				"lastname"=>$_POST["apellidoEditar"]				
				);
			$respuesta=StudentModel::updateStudentModel($datosController,"student");
			// echo $respuesta;
				if($respuesta=="success"){
					// header("location:index.php?action=ok");
					  // print "<script>alert(\"Registro exitoso.\");window.location='welcome';</script>";
					  echo '<script>							
				 			swal({
				 					title: "Success",
										text:"Info updated successfully",
										type:"success",
										confirmButtonText:"Ok",
				 					closeOnConfirm:false
				 				},
				 				function(isConfirm){
				 					if(isConfirm){
				 						window.location="student";
				 					}
				 				});
				 		</script>';

				}else{
					  echo '<script>							
				 			swal({
				 					title: "Success",
										text:"Error please try again",
										type:"error",
										confirmButtonText:"Ok",
				 					closeOnConfirm:false
				 				},
				 				function(isConfirm){
				 					if(isConfirm){
				 						window.location="student";
				 					}
				 				});
				 		</script>';
				}
		}

	}

/*=====  End of Update Students  ======*/



/*======================================
=            Delet Students            =
======================================*/

/*	public function delStudentController(){
		if(isset($_GET["idBorrar"])){
			$datosController=$_GET["idBorrar"];
			$respuesta=StudentModel::delStudentModel($datosController,"student");
			if ($respuesta=="success") {
			  echo '<script>							
		 			swal({
		 					title: "Success",
								text:"Info deleted successfully",
								type:"success",
								confirmButtonText:"Ok",
		 					closeOnConfirm:false
		 				},
		 				function(isConfirm){
		 					if(isConfirm){
		 						window.location="student";
		 					}
		 				});
		 		</script>';		
			}else{
				 echo '<script>							
			 			swal({
			 					title: "Success",
									text:"Error please try again",
									type:"error",
									confirmButtonText:"Ok",
			 					closeOnConfirm:false
			 				},
			 				function(isConfirm){
			 					if(isConfirm){
			 						window.location="student";
			 					}
			 				});
			 		</script>';
			}
		}

	}*/

}

/*=====  End of Delet Students  ======*/









?>