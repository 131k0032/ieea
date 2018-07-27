<?php 		

require_once('../mpdf/app/lib/pdf/mpdf.php');

/*=================================
=            Date vars            =
=================================*/
date_default_timezone_set('America/Cancun');
$dia= array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$mes= array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$dia[date('w')]." ".date('d')." de ".$mes[date('n')-1]." del ".date('Y');
$hora=date("g:i A"); 
$hash=md5("alloperations");
$hash2=sha1(md5("alloperations"));

/*=====  End of Date vars  ======*/


/*==================================
=            Query vars            =
==================================*/

	$servidor="localhost";
    $usuario="root";
    $contrasenia="";
    $basededatos="ieea";
    $conexion=mysqli_connect($servidor,$usuario,$contrasenia,$basededatos);
    mysqli_set_charset($conexion,"utf8");


     $query="SELECT 
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
    ORDER BY student_has_course.id ASC";


/*=====  End of Query vars  ======*/


/*=======================================
=            Query on course            =
=======================================*/

    $queryOnCourse="SELECT 
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
    ORDER BY student_has_course.id ASC";


/*=====  End of Query on course  ======*/

/*===========================================
=            Query non finalized            =
===========================================*/

 $queryFinalized="SELECT 
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
    ORDER BY student_has_course.id ASC";

/*=====  End of Query non finalized  ======*/


/*======================================
=            Query deserted            =
======================================*/


 $queryDeserted="SELECT 
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
    ORDER BY student_has_course.id ASC";

/*=====  End of Query deserted  ======*/


/*==================================
=            AllCourse            =
==================================*/

 $queryAllCourse="SELECT 
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
    ORDER BY student_has_course.id ASC";

/*=====  End of AllCourse  ======*/


	
/*===========================================
=            General information            =
===========================================*/

 
$html.='<header class="clearfix">';
      // <div id="logo">
      //   <img src="img/logo.png">
      // </div>
      $html.='<h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span>'." ".$dia[date('w')].', '.date('d').' de '.$mes[date('n')-1].' del año '.date('Y').' a las '.$hora.'</div>        
      </div>
    </header>
    <main>
    <h3>GENERAL INFORMATION</h3>
      <table>
        <thead>
          <tr>
            <th class="">No.</th>
            <th class="">STUDENT</th>
            <th class="">INSTRUCTOR</th>
            <th>COURSE</th>
            <th>CATEGORY</th>
            <th>STATUS</th>            
          </tr>
        </thead>
        <tbody>';
        $resultado= mysqli_query($conexion,$query);
        if (mysqli_num_rows($resultado)>0) {
        $n=1;
        while($row=$resultado->fetch_assoc()){
          // var_dump($resultado);                      
            $html.='<tr>
                        <td class="">'.$n++.'</td>
                        <td class="">'.$row["student_lastname"]." ".$row["student_name"].'</td>
                        <td class="">'.$row["instructor_lastname"]." ".$row["instructor_name"].'</td>
                        <td class="">'.$row["course_name"].'</td>
                        <td class="">'.$row["category_name"].'</td>
                        <td class="">'.$row["status_name"].'</td>
                    </tr>';
                }
            }else{ 

            $html.='';
  
        }                                                               
          $html.='
          <tr>
            <td colspan="5" class="grand total" >CURSANDO</td>';  
                $resultadoOnCourse= mysqli_query($conexion,$queryOnCourse);
                if($rowOnCourse=$resultadoOnCourse->fetch_assoc()){
                    $html.='<td class="grand total">'.$rowOnCourse["status_id"].'</td>';
                }else{
                    $html.='<td class="grand total">No hay registros</td>';
                }            
          $html.='
          </tr>
          <tr>
            <td colspan="5" class="grand total" >FINALIZADO</td>';
            $resultadoFinalized= mysqli_query($conexion,$queryFinalized);
            if($rowFinalized=$resultadoFinalized->fetch_assoc()){
                    $html.='<td class="grand total">'.$rowFinalized["status_id"].'</td>';
                }else{
                    $html.='<td class="grand total">No hay registros</td>';
                }            
          $html.='
          </tr>
           <tr>
            <td colspan="5" class="grand total" >DESERTADO</td>';
            $resultadoDeserted= mysqli_query($conexion,$queryDeserted);
            if($rowDeserted=$resultadoDeserted->fetch_assoc()){
                    $html.='<td class="grand total">'.$rowDeserted["status_id"].'</td>';
                }else{
                    $html.='<td class="grand total">No hay registros</td>';
                }             
          $html.='</tr>
          <tr>
            <td colspan="5" class="grand total">TOTAL</td>';
             $resultadoAllCourse= mysqli_query($conexion,$queryAllCourse);
            if($rowAllCourse=$resultadoAllCourse->fetch_assoc()){
                    $html.='<td class="grand total">'.$rowAllCourse["status_id"].'</td>';
                }else{
                    $html.='<td class="grand total">No hay registros</td>';
                } 
            $html.='
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>';


/*=====  End of General information  ======*/








/*----------  Format print  ----------*/

$mpdf = new mPDF('c','A4');	
$css=file_get_contents('../report/css/style.css');
$mpdf->writeHTML($css,1);	
$mpdf->writeHTML($html);
$mpdf->Output('reporte.pdf','I');

/*----------  Format print  ----------*/


 ?>