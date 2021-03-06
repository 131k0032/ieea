
<?php 

/*==============================
=            Models            =
==============================*/
require_once 'model/GetModel.php';
require_once 'model/LoginModel.php';
require_once 'model/StudentModel.php';
require_once 'model/InstructorModel.php';
require_once 'model/CourseModel.php';
require_once 'model/WelcomeModel.php';
require_once 'model/StatusModel.php';
require_once 'model/SettingModel.php';
require_once 'model/gestorGaleria.php';
require_once 'model/ReportModelTCPDF.php';



/*=====  End of Models  ======*/


/*===================================
=            Controllers            =
===================================*/

require_once 'controller/GetController.php';
require_once 'controller/LoginController.php';
require_once 'controller/StudentController.php';
require_once 'controller/InstructorController.php';
require_once 'controller/CourseController.php';
require_once 'controller/WelcomeController.php';
require_once 'controller/StatusController.php';
require_once 'controller/SettingController.php';
require_once 'controller/gestorGaleria.php';
require_once 'controller/ReportControllerTCPDF.php';
/*=====  End of Controllers  ======*/



$mvc = new GetController();
$mvc -> Get();


 ?>