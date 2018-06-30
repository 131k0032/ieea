
<?php 

/*==============================
=            Models            =
==============================*/
require_once 'model/GetModel.php';
require_once 'model/LoginModel.php';


/*=====  End of Models  ======*/


/*===================================
=            Controllers            =
===================================*/

require_once 'controller/GetController.php';
require_once 'controller/LoginController.php';

/*=====  End of Controllers  ======*/



$mvc = new GetController();
$mvc -> Get();


 ?>