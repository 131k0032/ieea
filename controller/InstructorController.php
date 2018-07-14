<?php 

class InstructorController{
	
	/*==================================
	=            AddInstructor            =
	==================================*/
	
		public function newInstructorController(){

		if(isset($_POST["nombreregistro"])
			){
			$datoController=array(
			"name"=>$_POST["nombreregistro"],
			"lastname"=>$_POST["apellidoregistro"],
			"email"=>$_POST["emailregistro"],
			"age"=>$_POST["edadregistro"],
			"address"=>$_POST["direccionregistro"],
			"created_at"=>$date=date("Y-m-d H:i:s"),
			"is_active"=>$boolean=1
			);
				//Llamado de la función datos y el objeto registroUusarioModel Model del Modelo
				$respuesta = InstructorModel::newInstructorModel($datoController,"instructor");

		if($respuesta=="success"){
			// header("location:index.php?action=ok");
			  print "<script>alert(\"Registro exitoso.\");window.location='instructor';</script>";
		}else{
			header("location:index.php");
		}
		}
	
	}
	
	/*=====  End of AddInstructor  ======*/
	

/*========================================
=            Get All Instructors            =
========================================*/
	public function getAllInstructorController(){
		// clase del crud Datos y su parámetro tabla usuario
		$respuesta=InstructorModel::getAllInstructorModel("instructor");
		//Muestrame los datos en usuarios en el archivo usuarios.php
		//var_dump($respuesta);
		//var_dump($respuesta[2][3]);

		// respuesta como una fila sea un item
		foreach($respuesta as $fila=>$item){			
		echo '<tr>
	              <td>'.$item["name"].'</td>
	              <td>'.$item["lastname"].'</td>	              
	              <td>'.$item["email"].'</td>
	              <td>'.$item["age"].'</td>
	              <td>'.$item["address"].'</td>
	              <td>';	              		
	              		if($item["is_active"]==1){
	              			echo "Active";
	              		}else{
	              			echo "Inactive";
	              		}
	              echo '</td>
	              <td>'.$item["created_at"].'</td>
	              <td style="width:130px;">
	                <a href="index.php?action=editinstructor&id='.$item['id'].'" class="btn btn-warning btn-xs">Editar</a> 
	                <a href="index.php?action=instructor&idBorrar='.$item['id'].'" class="btn btn-danger btn-xs" >Eliminar</a>
                </td>
              </tr>';
		}	
	}

/*=====  End of Get All Instructors  ======*/



/*=====================================
=            Edit Instructors            =
=====================================*/

	public function editInstructorController(){
	
		$datosController=$_GET['id'];
		$respuesta=InstructorModel::editInstructorModel($datosController,"instructor");
		//var_dump($respuesta);

		echo '  <input type="hidden" value="'.$respuesta["id"].'" name="idEditar">

				<div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Name:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["name"].'" name="nombreEditar" class="form-control" id="pwd" placeholder="Enter name">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Lastname:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["lastname"].'" name="apellidoEditar" class="form-control" id="pwd" placeholder="Enter lastname">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Email:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["email"].'" name="emailEditar" class="form-control" id="pwd" placeholder="Enter email">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Age:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["age"].'" name="edadEditar" class="form-control" id="pwd" placeholder="Enter age">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Address:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["address"].'" name="direccionEditar" class="form-control" id="pwd" placeholder="Enter address">
                  </div>
                </div> 

                <div class="form-group">
		              <label class="control-label col-sm-2" for="psw">Is active:</label>
		              <div class="col-sm-10">		               							
		                <select class="form-control" name="activoEditar">';		                            
		                			if($respuesta["is_active"]!=null && $respuesta["is_active"]==1){
		                				echo '<option value="1" >Activo</option>';                    	
		                				echo 'selected'; 
		                				echo '<option value="2" >Inactivo</option>';                    			                				                  
		                			}elseif($respuesta["is_active"]!=null && $respuesta["is_active"]==2){
		                				echo '<option value="2" >Inactivo</option>';                    	
		                				echo 'selected'; 
		                				echo '<option value="1" >Activo</option>';                    			                				
		                			}
		               echo '</select>
		              </div>                  
		            </div>



                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Created at:</label>
                  <div class="col-sm-10"> 
                    <input type="text" readonly value="'.$respuesta["created_at"].'" name="fechaEditar" class="form-control" id="pwd" placeholder="Created at">
                  </div>
                </div> 

                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>';



	}

/*=====  End of Edit Instructors  ======*/


	

/*=======================================
=            Update Instructors            =
=======================================*/
	
	public function updateInstructorController(){
		if(isset($_POST["nombreEditar"])){
			$datosController=array(
				"id"=>$_POST["idEditar"],
				"name"=>$_POST["nombreEditar"],
				"lastname"=>$_POST["apellidoEditar"],				
				"email"=>$_POST["emailEditar"],
				"age"=>$_POST["edadEditar"],
				"address"=>$_POST["direccionEditar"],
				"is_active"=>$_POST["activoEditar"],
				"created_at"=>$_POST["fechaEditar"]
				);
			$respuesta=InstructorModel::updateInstructorModel($datosController,"instructor");
			// echo $respuesta;
				
				if($respuesta=="success"){
					  print "<script>alert(\"Cambios guardados.\");window.location='instructor';</script>";					
				}else{
					echo "Error";

				}
		}

	}

/*=====  End of Update Instructors  ======*/



/*======================================
=            Delet Instructors            =
======================================*/

	public function delInstructorController(){
		if(isset($_GET["idBorrar"])){
			$datosController=$_GET["idBorrar"];
			$respuesta=InstructorModel::delInstructorModel($datosController,"instructor");
			if ($respuesta=="success") {
				print "<script>alert(\"Eliminado.\");window.location='instructor';</script>";				
			}else{
				echo "error";
			}
		}

	}

}

/*=====  End of Delet Instructors  ======*/









 ?>