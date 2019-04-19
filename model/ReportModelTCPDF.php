<?php 
require_once "model/Conexion.php";

	class ReportModelTCPDF {

		#VISUALIZAR ALUMNOS EN CURSOS
		#--------------------------------------
		public function getAllReportModelTCPDF($tabla){
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
							status.id  AS status_id,
							status.name AS status_name, 
							-- instructor table
							instructor.name  AS instructor_name,
							instructor.lastname  AS instructor_lastname,
							instructor.email AS instructor_email
							FROM student
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



		#VISUALIZAR ALUMNOS EN CURSOS
		#--------------------------------------
		public function getAllOnCourseReportModelTCPDF($tabla){
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
							count(status.id)  AS status_id,
							status.name AS status_name, 
							-- instructor table
							instructor.name  AS instructor_name,
							instructor.lastname  AS instructor_lastname,
							instructor.email AS instructor_email
							FROM student
							INNER JOIN student_has_course ON student_has_course.student_id=student.id
							INNER JOIN course ON student_has_course.course_id=course.id
							INNER JOIN status ON student_has_course.status_id=status.id
							INNER JOIN category ON category.id = course.category_id 
							INNER JOIN instructor_has_course ON  instructor_has_course.course_id=course.id
							INNER JOIN instructor ON instructor.id =instructor_has_course.instructor_id WHERE status.id=1
							ORDER BY student_has_course.id ASC								
							");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}


		#VISUALIZAR ALUMNOS EN CURSOS
		#--------------------------------------
		public function getAllFinalizedCourseReportModelTCPDF($tabla){
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
							count(status.id)  AS status_id,
							status.name AS status_name, 
							-- instructor table
							instructor.name  AS instructor_name,
							instructor.lastname  AS instructor_lastname,
							instructor.email AS instructor_email
							FROM student
							INNER JOIN student_has_course ON student_has_course.student_id=student.id
							INNER JOIN course ON student_has_course.course_id=course.id
							INNER JOIN status ON student_has_course.status_id=status.id
							INNER JOIN category ON category.id = course.category_id 
							INNER JOIN instructor_has_course ON  instructor_has_course.course_id=course.id
							INNER JOIN instructor ON instructor.id =instructor_has_course.instructor_id WHERE status.id=2
							ORDER BY student_has_course.id ASC								
							");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}

		#VISUALIZAR ALUMNOS EN CURSOS
		#--------------------------------------
		public function getAllDesertedCourseReportModelTCPDF($tabla){
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
							count(status.id)  AS status_id,
							status.name AS status_name, 
							-- instructor table
							instructor.name  AS instructor_name,
							instructor.lastname  AS instructor_lastname,
							instructor.email AS instructor_email
							FROM student
							INNER JOIN student_has_course ON student_has_course.student_id=student.id
							INNER JOIN course ON student_has_course.course_id=course.id
							INNER JOIN status ON student_has_course.status_id=status.id
							INNER JOIN category ON category.id = course.category_id 
							INNER JOIN instructor_has_course ON  instructor_has_course.course_id=course.id
							INNER JOIN instructor ON instructor.id =instructor_has_course.instructor_id WHERE status.id=3
							ORDER BY student_has_course.id ASC								
							");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}


		#VISUALIZAR ALUMNOS EN CURSOS
		#--------------------------------------
		public function getAllCountStatusCourseReportModelTCPDF($tabla){
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
						    count(status.id)  AS status_id,
						    status.name AS status_name, 
						    -- instructor table
						    instructor.name  AS instructor_name,
						    instructor.lastname  AS instructor_lastname,
						    instructor.email AS instructor_email
						    FROM student
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
	}
?>
