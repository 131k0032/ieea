<?php 

class SettingController{
	
	/*==================================
	=            AddInstructor            =
	==================================*/
	
		public function newSettingController(){

		if(isset($_POST["nombreregistro"])
			){
			$encriptar = crypt($_POST['passwordregistro'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');		
			$datoController=array(
			"name"=>$_POST["nombreregistro"],
			"lastname"=>$_POST["apellidoregistro"],
			"password"=>$encriptar,
			"email"=>$_POST["emailregistro"],						
			"created_at"=>$date=date("Y-m-d H:i:s"),
			"is_active"=>$_POST["is_active_value"],
			"is_admin"=>$_POST["is_active_value"]
			);
				//Llamado de la función datos y el objeto registroUusarioModel Model del Modelo
				$respuesta = SettingModel::newSettingModel($datoController,"user");

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
				 						window.location="setting";
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
				 						window.location="setting";
				 					}
				 				});
				 		</script>';
				}
		}
	
	}
	
	/*=====  End of AddInstructor  ======*/
	

/*========================================
=            Get All Instructors            =
========================================*/
	public function getAllSettingController(){
		// clase del crud Datos y su parámetro tabla usuario
		$respuesta=SettingModel::getAllSettingModel("user");
		//Muestrame los datos en usuarios en el archivo usuarios.php
		// var_dump($respuesta);
		// var_dump($respuesta[2][3]);

		// respuesta como una fila sea un item
		foreach($respuesta as $fila=>$item){			
		echo '<tr>
	              <td>'.$item["name"].'</td>
	              <td>'.$item["lastname"].'</td>	              
	              <td>'.$item["email"].'</td>
	              <td>'.$item["created_at"].'</td>	              
	              <td>';	              		
	              		if($item["is_admin"]==1){
	              			// echo "Administrator";
	              			echo '<i class="fa fa-toggle-on"></i>';
	              		}else{
	              			echo '<i class="fa fa-toggle-off"></i>';
	              		}
	              	echo '
	              </td>
	              <td>';	              		
	              		if($item["is_active"]==1){	              			
	              			echo '<i class="fa fa-toggle-on"></i>';
	              		}else{
	              			echo '<i class="fa fa-toggle-off"></i>';
	              		}
	              	echo '
	              </td>	              
	              <td style="width:130px;">

	                 <form action="index.php?action=setting&idBorrar='.$item['id'].'" method="POST">		
							<a href="index.php?action=editsetting&id='.$item['id'].'" class="btn btn-warning btn-xs">Editar usuario</a> 

					        <button class="btn btn-danger btn-xs" type="submit" onclick="confirmDelete()">Eliminar
					        </button>
					</form>


                </td>
              </tr>';
		}	
	}

/*=====  End of Get All Instructors  ======*/



/*=====================================
=            Edit Instructors            =
=====================================*/

	public function editSettingController(){
	
		$datosController=$_GET['id'];
		$respuesta=SettingModel::editSettingModel($datosController,"user");
		//var_dump($respuesta);

		echo '  <input type="hidden" value="'.$respuesta["id"].'" name="idEditar">

				<div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Nombre:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["name"].'" name="nombreEditar" class="form-control" id="pwd" placeholder="Enter name">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Apellido:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["lastname"].'" name="apellidoEditar" class="form-control" id="pwd" placeholder="Enter lastname">
                  </div>
                </div> 
                
                 <input type="hidden" value="'.$respuesta["password"].'" name="passwordAnteriorEditar" class="form-control" id="pwd" placeholder="Enter password">

                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Contraseña anterior:</label>
                  <div class="col-sm-10"> 
                    <input type="password" required name="nuevoPasswordEditar" class="form-control" id="pwd" placeholder="Enter old password">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Nueva contraseña:</label>
                  <div class="col-sm-10"> 
                    <input type="password" required name="nuevoPassword" class="form-control" id="pwd" placeholder="Enter old password">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Confirma contraseña:</label>
                  <div class="col-sm-10"> 
                    <input type="password" required name="nuevoPasswordConfirmar" class="form-control" id="pwd" placeholder="Enter old password">
                  </div>
                </div> 

				
				 <div class="form-group">
		              <label class="control-label col-sm-2" for="psw">Es admin:</label>
		              <div class="col-sm-10">		               							
		                <select class="form-control" name="adminEditar">';		                            
		                			if($respuesta["is_admin"]!=null && $respuesta["is_admin"]==1){
		                				echo '<option value="1" >Administrator</option>';                    	
		                				echo 'selected'; 
		                				echo '<option value="0" >Non administrator</option>';                    			                				                  
		                			}elseif($respuesta["is_admin"]!=null && $respuesta["is_admin"]==0){
		                				echo '<option value="0" >Non administrator</option>';                    	
		                				echo 'selected'; 
		                				echo '<option value="1" >Administrator</option>';                    			                				
		                			}
		               echo '</select>
		              </div>                  
		            </div>

		            <div class="form-group">
		              <label class="control-label col-sm-2" for="psw">Es activo:</label>
		              <div class="col-sm-10">		               							
		                <select class="form-control" name="activoEditar">';		                            
		                			if($respuesta["is_admin"]!=null && $respuesta["is_admin"]==1){
		                				echo '<option value="1" >Activo</option>';                    	
		                				echo 'selected'; 
		                				echo '<option value="0" >No activo</option>';                    			                				                  
		                			}elseif($respuesta["is_admin"]!=null && $respuesta["is_admin"]==0){
		                				echo '<option value="0" >Non active</option>';                    	
		                				echo 'selected'; 
		                				echo '<option value="1" >Active</option>';                    			                				
		                			}
		               echo '</select>
		              </div>                  
		            </div>

		         <div class="form-group">
                    <label class="control-label col-sm-2" for="psw">Info</label>
                    <div class="col-sm-10">                        
                      <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Importante!</strong> Si no deseas cambiar de contraseña, solo escribe tu contraseña actual en los campos: contraseña anterior, nueva contraseña y confirma contraseña.                         
                    </div>
                    </div>                  
                  </div>


                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                  </div>
                </div>';



	}

/*=====  End of Edit Instructors  ======*/


	

/*=======================================
=            Update Instructors            =
=======================================*/
	
	public function updateSettingController(){


		if(isset($_POST["nombreEditar"]) || isset($_POST["nuevoPasswordEditar"])){
			
			$encriptar = crypt($_POST['nuevoPasswordEditar'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			$contraseniaanterior=$_POST['passwordAnteriorEditar'];
			$contrasenianueva=crypt($_POST['nuevoPassword'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			$contraseniaconfirmar=crypt($_POST['nuevoPasswordConfirmar'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$datosController=array(				
				"id"=>$_POST["idEditar"],
				"name"=>$_POST["nombreEditar"],
				"lastname"=>$_POST["apellidoEditar"],															
				"password"=>$contrasenianueva,
				"is_admin"=>$_POST["adminEditar"],												
				"is_active"=>$_POST["activoEditar"]				
				);

			if($contraseniaanterior==$encriptar && $contrasenianueva==$contraseniaconfirmar){
				$respuesta=SettingModel::updateSettingModel($datosController,"user");

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
						 						window.location="setting";
						 					}
						 				});
						 		</script>';

						}else{
							  echo '<script>							
						 			swal({
						 					title: "Error of data",
												text:"Error please try again",
												type:"error",
												confirmButtonText:"Ok",
						 					closeOnConfirm:false
						 				},
						 				function(isConfirm){
						 					if(isConfirm){
						 						window.location="setting";
						 					}
						 				});
						 		</script>';
						}
			}elseif($contrasenianueva!=$contraseniaconfirmar){
				echo '<script>							
						 			swal({
						 					title: "Error",
												text:"Error new pass no matches with de confirmation password",
												type:"error",
												confirmButtonText:"Ok",
						 					closeOnConfirm:false
						 				},
						 				function(isConfirm){
						 					if(isConfirm){
						 						window.location="setting";
						 					}
						 				});
						 		</script>';
			}else{
				echo '<script>							
						 			swal({
						 					title: "Error",
												text:"Error, old password no matches with the actual password ",
												type:"error",
												confirmButtonText:"Ok",
						 					closeOnConfirm:false
						 				},
						 				function(isConfirm){
						 					if(isConfirm){
						 						window.location="setting";
						 					}
						 				});
						 		</script>';
			}
				
				
		}

	}

/*=====  End of Update Instructors  ======*/



/*======================================
=            Delet Instructors            =
======================================*/

	public function delSettingController(){
		if(isset($_GET["idBorrar"])){
			$datosController=$_GET["idBorrar"];
			$respuesta=SettingModel::delSettingModel($datosController,"user");
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
		 						window.location="setting";
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
			 						window.location="setting";
			 					}
			 				});
			 		</script>';
			}
		}

	}

}

/*=====  End of Delet Instructors  ======*/









 ?>