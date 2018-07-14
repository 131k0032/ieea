<?php 

class StatusController{
	
	/*==================================
	=            AddInstructor            =
	==================================*/
	
		public function newStatusController(){

		if(isset($_POST["nombreregistro"])
			){
			$datoController=array(
			"name"=>$_POST["nombreregistro"],
			"category_id"=>$_POST["categoriaregistro"]			
			);
				//Llamado de la función datos y el objeto registroUusarioModel Model del Modelo
				$respuesta = StatusModel::newStatusModel($datoController,"status");

		if($respuesta=="success"){
			// header("location:index.php?action=ok");
			  print "<script>alert(\"Registro exitoso.\");window.location='status';</script>";
			//var_dump($respuesta);
		}else{
			header("location:index.php");
		}
		}
	
	}
	
	/*=====  End of AddInstructor  ======*/
	

/*========================================
=            Get All Status            =
========================================*/
	public function getAllStatusController(){
		// clase del crud Datos y su parámetro tabla usuario
		$respuesta=StatusModel::getAllStatusModel("status");
		//Muestrame los datos en usuarios en el archivo usuarios.php
		//var_dump($respuesta);
		//var_dump($respuesta[2][3]);

		// respuesta como una fila sea un item
		foreach($respuesta as $fila=>$item){			
		echo '<tr>
	              <td>'.$item["status_name"].'</td>
	              <td>'.$item["category_name"].'</td>	              
	              <td style="width:130px;">
	                <a href="index.php?action=editstatus&id='.$item['status_id'].'" class="btn btn-warning btn-xs">Editar</a> 
	                <a href="index.php?action=status&idBorrar='.$item['status_id'].'" class="btn btn-danger btn-xs" >Eliminar</a>
                </td>
              </tr>';
		}	
	}

/*=====  End of Get All Status  ======*/


/*==========================================
=            Get All for Use id            =
==========================================*/

public function getAllStatusControllerForId(){
	$respuesta=StatusModel::getAllStatusModelForId("status");
	//var_dump($respuesta);
	foreach ($respuesta as $fila => $item) {
		echo '<option value="'.$item['id'].'" >'.$item['name'].'</option>';                                    
	}

}


/*=====  End of Get All for Use id  ======*/




/*=====================================
=            Edit Status            =
=====================================*/

	public function editStatusController(){
	
		$datosController=$_GET['id'];
		$respuesta=StatusModel::editStatusModel($datosController,"status");
		//var_dump($respuesta);

		echo '  <input type="hidden" value="'.$respuesta["status_id"].'" name="idEditar">

				<div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Name:</label>
                  <div class="col-sm-10"> 
                    <input type="text" value="'.$respuesta["status_name"].'" name="nombreEditar" class="form-control" id="pwd" placeholder="Enter name">
                  </div>
                </div>
               
	             <div class="form-group">
	              <label class="control-label col-sm-2" for="psw">Category:</label>
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
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>';



	}

/*=====  End of Edit Status  ======*/


	

/*=======================================
=            Update Status            =
=======================================*/
	
	public function updateStatusController(){
		if(isset($_POST["nombreEditar"])){
			$datosController=array(
				"id"=>$_POST["idEditar"],
				"name"=>$_POST["nombreEditar"],
				"category_id"=>$_POST["categoriaEditar"]				
				);
			$respuesta=StatusModel::updateStatusModel($datosController,"status");
			// echo $respuesta;
				
				if($respuesta=="success"){
					  print "<script>alert(\"Cambios guardados.\");window.location='status';</script>";					
				}else{
					echo "Error";

				}
		}

	}

/*=====  End of Update Status  ======*/



/*======================================
=            Delet Status            =
======================================*/

	public function delStatusController(){
		if(isset($_GET["idBorrar"])){
			$datosController=$_GET["idBorrar"];
			$respuesta=StatusModel::delStatusModel($datosController,"status");
			if ($respuesta=="success") {
				print "<script>alert(\"Eliminado.\");window.location='status';</script>";				
			}else{
				echo "error";
			}
		}

	}

}

/*=====  End of Delet Status  ======*/









 ?>