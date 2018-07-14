<?php 
require_once "model/Conexion.php";

	class CourseModel {
		#REGISTRO DE TALLERES
		#--------------------------------------
		public function newCourseModel($datosModel, $tabla){
			$statement = Conexion::conectar()->prepare("INSERT INTO  $tabla (name,category_id) 
				VALUES 
				(:name,:category_id)");

			$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
			$statement->bindParam(":category_id",$datosModel["category_id"],PDO::PARAM_INT);			

			if($statement->execute()){
				return "success";
			}else{
				return "error";
			}

			// cierra las consultas
			$statement->close();
		}



		#VISUALIZAR DE TALLERES
		#--------------------------------------
		public function getAllCourseModel($tabla){
				$statement = Conexion::conectar()->prepare("SELECT 
							   
								course.id as course_id,
								course.name as course_name,
								course.category_id ,
								category.id,
								category.name as category_name
								FROM $tabla course 
								INNER JOIN category category
								ON course.category_id=category.id");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}


		#VISUALIZAR  PARA USO DE IDS
		public function getAllCourseModelForId($tabla){
			$statement=Conexion::conectar()->prepare("SELECT id, name FROM $tabla");
			$statement->execute();

			return $statement->fetchAll();
		}



			#EDITAR TALLERES
		#--------------------------------------
		public function editCourseModel($idModel, $tabla){
				$statement = Conexion::conectar()->prepare("
					SELECT
					category.id as category_id,
					category.name category_name,
					course.id as course_id,
					course.name as course_name
					FROM category
					INNER JOIN course ON course.category_id=category.id
					WHERE course.id=:id

					");
				$statement->bindParam(":id",$idModel,PDO::PARAM_INT);
				$statement->execute();
				
				return $statement->fetch();
				
			// cierra las consultas
			$statement->close();

		}




			#ACTUALIZAR TALLERES
		#--------------------------------------
		public function updateCourseModel($datosModel, $tabla){
				$statement = Conexion::conectar()->prepare("UPDATE $tabla SET name=:name,category_id=:category_id WHERE id=:id");				
				$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
				$statement->bindParam(":category_id",$datosModel["category_id"],PDO::PARAM_INT);				
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



			#BORAR TALLERES
		#--------------------------------------
		public function delCourseModel($datosModel, $tabla){
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
