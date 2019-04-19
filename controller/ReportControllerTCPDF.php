<?php 

/*=================================================================
=            Only for use sweetalert or js validations            =
=================================================================*/
// if you add it from head_common and footer_common the file generate error by the styles and other scripts
// Don't try it the thing up

include "view/links/head_sweetalert.php";
include "view/links/footer_sweetalert.php";

/*=====================================
=            TCPDF Library            =
=====================================*/
require './view/tcpdf/tcpdf/tcpdf.php';
/*=====  End of TCPDF Library  ======*/

include './view/tcpdf/links.php';

class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        // $image_file = './view/tcpdf/img/logo.jpg';
        // $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 10);
        // Title
        $this->Cell(0, 60, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().' de '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}



class ReportControllerTCPDF{
	
	

/*========================================
=            Get All students            =
========================================*/
	public function getAllWelcomeControllerTCPDF(){
		// clase del crud Datos y su parámetro tabla usuario
		$respuesta=ReportModelTCPDF::getAllReportModelTCPDF("student");
		//Muestrame los datos en usuarios en el archivo usuarios.php
		//var_dump($respuesta);
		// var_dump($respuesta[2][3]);
		// respuesta como una fila sea un item

		// $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf = new MYPDF('P', 'mm', 'A4', true, 'UTF-8', false);
		// $pdf->AliasNbPages();
		$pdf->SetCreator(PDF_CREATOR);
		// $pdf->SetAuthor('Miguel Caro');
		$pdf->SetTitle('Reprte genral estadístico');
		$pdf->setPrintHeader(false); 
		$pdf->setPrintFooter(true);
		$pdf->SetMargins(20, 20, 20, false); 
		$pdf->SetAutoPageBreak(true, 20); 		
		$pdf->SetFont('Helvetica', '', 10);
		$pdf->addPage();


		/*----------  Details all students  ----------*/
		
		$content = '';
		$content .= '		
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
			<div class="row">
		      <div class="col-md-12">
		        <h4 style="text-align:center;">Reporte general estadístico</h4>		   	
				  <table border="1" cellpadding="3">
				    <thead>
				      <tr>
				      	<th style="background-color:grey;">N.</th>		        
				        <th style="background-color:grey;">ALUMNO</th>		        
				        <th style="background-color:grey;">DOCENTE</th>		        
				        <th style="background-color:grey;">CURSO</th>	
				        <th style="background-color:grey;" >CATEGORIA</th>	
				        <th style="background-color:grey;">STATUS</th>	
				      </tr>
				    </thead>
			';

		$n=1;
		foreach ($respuesta as $fila=>$item) { 				

			$content .= '
				<tr>
					<td style="font-size:20px; text-align:center;">'.$n++.'</td>
	            	<td style="font-size:20px;">'.$item['student_name']. ' '.$item['student_lastname'].'</td>
	            	<td style="font-size:20px;">'.$item['instructor_name']. ' '.$item['instructor_lastname'].'</td>
	            	<td style="font-size:20px;">'.$item['course_name'].'</td>
	            	<td style="font-size:20px;">'.$item['category_name'].'</td>
	            	<td style="font-size:20px;">'.$item['status_name'].'</td>
	        	</tr>
			';
		}
		
		$content .= '</table>';
		


		/*----------  Details students with status 1,2 and 3  ----------*/				
		$content .= '		
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
			<div class="row">
		      <div class="col-md-12">		        
				  <table border="1" cellpadding="5">
				    <thead class="table-report">
				      <tr class="text-center">
				      	<th style="background-color:grey;">ESTATUS</th>		      
				      	<th style="background-color:grey;">TOTAL</th>		      				      
				      </tr>
				    </thead>
			';
			$respuestados=ReportModelTCPDF::getAllOnCourseReportModelTCPDF("student");	
			$respuestatres=ReportModelTCPDF::getAllFinalizedCourseReportModelTCPDF("student");	
			$respuestacuatro=ReportModelTCPDF::getAllDesertedCourseReportModelTCPDF("student");	
			$respuestacinco=ReportModelTCPDF::getAllCountStatusCourseReportModelTCPDF("student");	
			
			
			foreach ($respuestados as $filados=>$itemdos) { 

				$content .= '
					<tr>
						<td style="background-color:grey">Cursando</td>		            			            								            
		            	<td>'.$itemdos['status_id'].'</td>		            			            
		        	</tr>
				';

			}

			foreach ($respuestatres as $filatres=>$itemtres) { 				
				$content .= '
					<tr>
						<td style="background-color:grey">Finalizado</td>		            			            							            
		            	<td>'.$itemtres['status_id'].'</td>		            			            
		        	</tr>
				';
			}

			foreach ($respuestacuatro as $filacuatro=>$itemcuatro) { 				
				$content .= '
					<tr>
						<td style="background-color:grey">Desertao</td>		            			            							            
		            	<td>'.$itemcuatro['status_id'].'</td>		            			            
		        	</tr>
				';
			}
			
			foreach ($respuestacinco as $filacinco=>$itemcinco) { 				
				$content .= '
					<tr>
						<td style="background-color:grey">Suma total</td>		            			            							            
		            	<td>'.$itemcinco['status_id'].'</td>		            			            
		        	</tr>
				';
			}


			
			
			$content .= '</table>';
		
	

		$pdf->writeHTML($content, true, 0, true, 0);
		$pdf->lastPage();
		ob_end_clean();
		$pdf->output('Reporte.pdf', 'I');

/*=====  End of Get All students  ======*/


	}


}


?>