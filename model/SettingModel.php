<?php 
require_once "model/Conexion.php";

	class SettingModel {
		#REGISTRO DE USUARIOS
		#--------------------------------------
		public function newSettingModel($datosModel, $tabla){
			$statement = Conexion::conectar()->prepare("INSERT INTO  $tabla (name,lastname,password, email,created_at,is_admin,is_active) 
				VALUES 
				(:name,:lastname,:password,:email,:created_at,:is_admin,:is_active)");

			$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
			$statement->bindParam(":lastname",$datosModel["lastname"],PDO::PARAM_STR);
			$statement->bindParam(":password",$datosModel["password"],PDO::PARAM_STR);
			$statement->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);
			$statement->bindParam(":created_at",$datosModel["created_at"],PDO::PARAM_STR);			
			$statement->bindParam(":is_admin",$datosModel["is_admin"],PDO::PARAM_STR);
			$statement->bindParam(":is_active",$datosModel["is_active"],PDO::PARAM_STR);

			if($statement->execute()){
				return "success";
			}else{
				return "error";
			}

			// cierra las consultas
			$statement->close();
		}



		#VISUALIZAR DE USUARIOS
		#--------------------------------------
		public function getAllSettingModel($tabla){
				$statement = Conexion::conectar()->prepare("SELECT id, name, lastname, password,  email, created_at, is_admin, is_active FROM $tabla");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}



			#EDITAR USUARIOS
		#--------------------------------------
		public function editSettingModel($idModel, $tabla){
				$statement = Conexion::conectar()->prepare("SELECT id, name, lastname, password, is_admin, is_active FROM $tabla where id=:id");
				$statement->bindParam(":id",$idModel,PDO::PARAM_INT);
				$statement->execute();
				
				return $statement->fetch();
				
			// cierra las consultas
			$statement->close();

		}




			#ACTUALIZAR USUARIOS
		#--------------------------------------
		public function updateSettingModel($datosModel, $tabla){
				$statement = Conexion::conectar()->prepare("UPDATE $tabla SET name=:name,lastname=:lastname,password=:password,is_admin=:is_admin,is_active=:is_active WHERE id=:id");				

				$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
				$statement->bindParam(":lastname",$datosModel["lastname"],PDO::PARAM_STR);							
				$statement->bindParam(":password",$datosModel["password"],PDO::PARAM_STR);				
				$statement->bindParam(":is_admin",$datosModel["is_admin"],PDO::PARAM_INT);				
				$statement->bindParam(":is_active",$datosModel["is_active"],PDO::PARAM_INT);				
				$statement->bindParam(":id",$datosModel["id"],PDO::PARAM_INT);
				$statement->execute();
				

				if($statement->execute()){
				return "success";
			}else{
				return "error";
			}



				return $statement->fetch();
				
			// cierra las consultas
			$statement->close();

		}



			#BORAR USUARIOS
		#--------------------------------------
		public function delSettingModel($datosModel, $tabla){
			$statement = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
			$statement->bindParam(":id",$datosModel,PDO::PARAM_INT);

			if($statement->execute()){
				return "success";
			}else{
				return "error";
			}

					
			// cierra las consultas
			$statement->close();

			}




	}

 ?>
