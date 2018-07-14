<?php 
require_once "model/Conexion.php";

	class WelcomeModel {
		#REGISTRO DE ALUMNOS
		#--------------------------------------
		public function newWelcomeModel($datosModel, $tabla){
			$statement = Conexion::conectar()->prepare("INSERT INTO  $tabla (student_id,course_id,status_id) 
				VALUES 
				(:student_id,:course_id,:status_id)");

			$statement->bindParam(":student_id",$datosModel["student_id"],PDO::PARAM_INT);
			$statement->bindParam(":course_id",$datosModel["course_id"],PDO::PARAM_INT);
			$statement->bindParam(":status_id",$datosModel["status_id"],PDO::PARAM_INT);

			if($statement->execute()){
				return "success";
			}else{
				return "error";
			}

			// cierra las consultas
			$statement->close();
		}



		#VISUALIZAR DE ALUMNOS
		#--------------------------------------
		public function getAllWelcomeModel($tabla){
				$statement = Conexion::conectar()->prepare("													  
							  
							  SELECT 
							  -- Student_has course
							  student_has_course.id AS id_student_has_course,
							  -- Student table							  						 
							  student.name AS student_name, 
							  student.lastname AS student_lastname,
							  student.created_at,
							  -- course table
							  course.name AS course_name, 
							  -- category table
							  category.name AS category_name, 
							  -- status table
							  status.name AS status_name, 
							  -- instructor table
							  instructor.name  AS instructor_name,
							  instructor.email AS instructor_email
							  FROM $tabla
							  INNER JOIN student_has_course ON student_has_course.student_id=student.id
							  INNER JOIN course ON student_has_course.course_id=course.id
							  INNER JOIN status ON student_has_course.status_id=status.id
							  INNER JOIN category ON category.id = course.category_id 
							  INNER JOIN instructor_has_course ON  instructor_has_course.course_id=course.id
							  INNER JOIN instructor ON instructor.id =instructor_has_course.instructor_id
							  ORDER BY student_has_course.id ASC
							
		
							");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}



		public function getAllWelcomeStatusModel($tabla){
			$statement = Conexion::conectar()->prepare("SELECT id, name FROM $tabla");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();
		}


			#EDITAR ALUMNOS
		#--------------------------------------
		public function editWelcomeModel($idModel, $tabla){
				$statement = Conexion::conectar()->prepare("
					
					SELECT 
					status.id AS status_id,					
					status.name AS status_name
					FROM $tabla
					INNER JOIN student_has_course ON student_has_course.status_id=status.id 					
					WHERE student_has_course.id=:id	
					
			
					");
				$statement->bindParam(":id",$idModel,PDO::PARAM_INT);
				$statement->execute();
				
				return $statement->fetchAll();
				
			// cierra las consultas
			$statement->close();

		}





			#ACTUALIZAR ALUMNOS
		#--------------------------------------
		public function updateWelcomeModel($datosModel, $tabla){
				$statement = Conexion::conectar()->prepare("UPDATE $tabla SET status_id=:status_id WHERE id=:id");				
				$statement->bindParam(":status_id",$datosModel["status_id"],PDO::PARAM_INT);							
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



			#BORAR ALUMNOS
		#--------------------------------------
		public function delWelcomeModel($datosModel, $tabla){
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
