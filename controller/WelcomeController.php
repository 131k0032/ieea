<?php 

class WelcomeController{
	
	/*==================================
	=            AddStudent            =
	==================================*/
	
		public function newWelcomeController(){

		if(isset($_POST["idalumno"])
			){
			$datoController=array(
			"student_id"=>$_POST["idalumno"],
			"course_id"=>$_POST["idcurso"],
			"status_id"=>$_POST["idstatus"]
			);
				//Llamado de la función datos y el objeto registroUusarioModel Model del Modelo
				$respuesta = WelcomeModel::newWelcomeModel($datoController,"student_has_course");

		if($respuesta=="success"){
			// header("location:index.php?action=ok");
			  print "<script>alert(\"Registro exitoso.\");window.location='welcome';</script>";
		}else{
			 print "<script>alert(\"Error.\");window.location='addwelcome';</script>";
		}
		}
	
	}
	
	/*=====  End of AddStudent  ======*/
	

/*========================================
=            Get All students            =
========================================*/
	public function getAllWelcomeController(){
		// clase del crud Datos y su parámetro tabla usuario
		$respuesta=WelcomeModel::getAllWelcomeModel("student");
		//Muestrame los datos en usuarios en el archivo usuarios.php
		// var_dump($respuesta);
		//var_dump($respuesta[2][3]);

		// respuesta como una fila sea un item
		foreach($respuesta as $fila=>$item){			
		echo '<tr>
	              <td>'.$item["student_name"].'</td>
	              <td>'.$item["student_lastname"].'</td>	              
	              <td>'.$item["instructor_name"].'</td>
	              <td>'.$item["instructor_email"].'</td>
	              <td>'.$item["status_name"].'</td>
	              <td>'.$item["course_name"].'</td>
	              <td>'.$item["category_name"].'</td>
	              <td style="width:130px;">
	                <a href="index.php?action=editwelcome&id='.$item['id_student_has_course'].'" class="btn btn-warning btn-xs">Change status</a> 
	                <a href="index.php?action=welcome&idBorrar='.$item['id_student_has_course'].'" class="btn btn-danger btn-xs" >Delete</a>
                </td>
              </tr>';
		}	
	}

/*=====  End of Get All students  ======*/





/*======================================
=            Get All Status            =
======================================*/

public function editWelcomeController(){
	$datosController=$_GET['id'];
	$respuesta=WelcomeModel::editWelcomeModel($datosController,"status");
	// var_dump($respuesta);
		
                 echo '<div class="form-group">
              <label class="control-label col-sm-2" for="psw">Status:</label>
              <div class="col-sm-10">
               	
				<input type="hidden" value="'.$datosController.'" name="idEditarStatus">
                <select class="form-control" name="status_id_Editar">';
                	foreach ($respuesta as $fila => $item) {               
                			if($item["status_id"]!=null && $item["status_id"]==1){
                				echo '<option value="1" >Cursando</option>';                    	
                				echo 'selected'; 
                				echo '<option value="2" >Finalizado</option>';                    	
                				echo '<option value="3" >Desertado</option>';                    	
                			}elseif($item["status_id"]!=null && $item["status_id"]==2){
                				echo '<option value="2" >Finalizado</option>';                    	
                				echo 'selected'; 
                				echo '<option value="1" >Cursando</option>';                    	
                				echo '<option value="3" >Desertado</option>';                    	
                			}elseif($item["status_id"]!=null && $item["status_id"]==3){
                				echo '<option value="3" >Desertado</option>';                    	
                				echo 'selected'; 
                				echo '<option value="1" >Cursando</option>';                    	
                				echo '<option value="2" >Finalizado</option>';                    	
                			}                			                                    			

                		}                    		                     	
                   
               echo '</select>
              </div>                  
            </div>
            
            <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
                ';
        



}

/*=====  End of Get All Status  ======*/



	

/*=======================================
=            Update Students            =
=======================================*/
	
	public function updateWelcomeController(){
		if(isset($_POST["status_id_Editar"])){
			$datosController=array(
				"id"=>$_POST["idEditarStatus"],
				"status_id"=>$_POST["status_id_Editar"]							
				);
			$respuesta=WelcomeModel::updateWelcomeModel($datosController,"student_has_course");
			 
				
				if($respuesta=="success"){
					 print "<script>alert(\"Cambios guardados.\");window.location='welcome';</script>";					
					//echo $respuesta;
					//var_dump($respuesta);
				}else{
					echo "Error";

				}
		}

	}

/*=====  End of Update Students  ======*/



/*======================================
=            Delet Students            =
======================================*/

	public function delWelcomeController(){
		if(isset($_GET["idBorrar"])){
			$datosController=$_GET["idBorrar"];
			$respuesta=WelcomeModel::delWelcomeModel($datosController,"student_has_course");
			if ($respuesta=="success") {
				print "<script>alert(\"Eliminado.\");window.location='welcome';</script>";				
			}else{
				echo "error";
			}
		}

	}

}

/*=====  End of Delet Students  ======*/









 ?>