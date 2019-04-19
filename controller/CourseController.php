<?php 

class CourseController{
	
	/*==================================
	=            AddCourse             =
	==================================*/
	
		public function newCourseController(){

		if(isset($_POST["nombreregistro"])
			){
			$datoController=array(
			"name"=>$_POST["nombreregistro"],
			"category_id"=>$_POST["categoriaregistro"]			
			);
				//Llamado de la función datos y el objeto registroUusarioModel Model del Modelo
				$respuesta = CourseModel::newCourseModel($datoController,"course");

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
						 						window.location="course";
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
						 						window.location="course";
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
	public function getAllCourseController(){
		// clase del crud Datos y su parámetro tabla usuario
		$respuesta=CourseModel::getAllCourseModel("course");
		//Muestrame los datos en usuarios en el archivo usuarios.php
		//var_dump($respuesta);
		//var_dump($respuesta[2][3]);

		// respuesta como una fila sea un item
		foreach($respuesta as $fila=>$item){			
		echo '<tr>
	              <td>'.$item["course_name"].'</td>
	              <td>'.$item["category_name"].'</td>	              
	              <td style="width:130px;">
	               	<a href="index.php?action=editcourse&id='.$item['course_id'].'" class="btn btn-warning btn-xs">Editar curso</a> 
                </td>
              </tr>';
		}	
	}

/*=====  End of Get All Instructors  ======*/


/*==========================================
=            Get All for Use id            =
==========================================*/

public function getAllCourseControllerForId(){
	$respuesta=CourseModel::getAllCourseModelForId("course");
	//var_dump($respuesta);
	foreach ($respuesta as $fila => $item) {
		echo '<option value="'.$item['id'].'" >'.$item['name'].'</option>';                                    
	}

}


/*=====  End of Get All for Use id  ======*/




/*=====================================
=            Edit Instructors            =
=====================================*/

	public function editCourseController(){
	
		$datosController=$_GET['id'];
		$respuesta=CourseModel::editCourseModel($datosController,"course");
		//var_dump($respuesta);

		echo '  <input type="hidden" value="'.$respuesta["course_id"].'" name="idEditar">

				<div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Nombre:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["course_name"].'" name="nombreEditar" class="form-control" id="pwd" placeholder="Enter name">
                  </div>
                </div>
               
	             <div class="form-group">
	              <label class="control-label col-sm-2" for="psw">Categoria:</label>
	              <div class="col-sm-10">               
	                <select class="form-control" name="categoriaEditar">';                             
	            			if($respuesta["category_id"]!=null && $respuesta["category_id"]==1){
	            				echo '<option value="1" >Primaria</option>';                    	
	            				echo 'selected'; 
	            				echo '<option value="2" >Secundaria</option>';                    	                				                   
	            			}elseif($respuesta["category_id"]!=null && $respuesta["category_id"]==2){
	            				echo '<option value="2" >Secundaria</option>';                    	
	            				echo 'selected'; 
	            				echo '<option value="1" >Primaria</option>';                    	                				
	            			}                                    			
	            	   echo '</select>
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
	
	public function updateCourseController(){
		if(isset($_POST["nombreEditar"])){
			$datosController=array(
				"id"=>$_POST["idEditar"],
				"name"=>$_POST["nombreEditar"],
				"category_id"=>$_POST["categoriaEditar"]				
				);
			$respuesta=CourseModel::updateCourseModel($datosController,"course");
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
				 						window.location="course";
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
				 						window.location="course";
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

	public function delCourseController(){
		if(isset($_GET["idBorrar"])){
			$datosController=$_GET["idBorrar"];
			$respuesta=CourseModel::delCourseModel($datosController,"course");
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
		 						window.location="course";
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
			 						window.location="course";
			 					}
			 				});
			 		</script>';
			}
		}

	}

}

/*=====  End of Delet Instructors  ======*/









?>