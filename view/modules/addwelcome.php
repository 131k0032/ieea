
 <?php  
     session_start();
        if(!$_SESSION['validar']){
          header("location:home");
          exit();
        }
   ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="view/assets/img/favicon.ico">
    <title>IEEA</title>

   <?php include 'view/links/head_common.php'; ?>

  </head>
  <body>
    
    <!--============================
    =            Header            =
    =============================-->    
    <?php include 'view/modules/header/header.php'; ?>
    <!--====  End of Header  ====-->

 
     <!--================================
    =            Breadcrumb            =
    =================================-->
    <section class="wrap" id="breadcrumb">
      <div class="container">
        <div class="row">
           <div class="col-sm-12">
             <ul class="breadcrumb">
                <li><a href="welcome">Welcome</a></li>                                         
                <li class="active">Add welcome</li>
            </ul><!-- .breadcrumb -->
           </div><!-- .col    -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section>        
    <!--====  End of Breadcrumb  ====-->


    

<!--==============================
=            Students            =
===============================-->

    <section class="wrap" id="tableWelcome">
      <div class="container">
      <hr>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">                         
              <form class="form-horizontal" method="post">                

                <div class="form-group">
                    <label class="control-label col-sm-2" for="psw">Student:</label>
                    <div class="col-sm-10">                        
                      <select class="form-control" size="5" required name="idalumno">';
                            <option value="" >Choose</option>
                              <?php
                                $getStudenId = new StudentController();
                                $getStudenId -> getAllStudentControllerForId();
                                ?>                   
                        </select>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="psw">Course:</label>
                    <div class="col-sm-10">                        
                      <select class="form-control" size="5"  required name="idcurso">';
                             <option value="" >Choose</option>
                             <?php 
                              $getCourseId = new CourseController();
                              $getCourseId -> getAllCourseControllerForId();
                              ?>               
                        </select>
                    </div>                  
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="psw">Status:</label>
                    <div class="col-sm-10">                        
                      <select class="form-control" required name="idstatus">';
                             <option value="" >Choose</option>
                            <?php 
                              $getStatusId = new StatusController();
                              $getStatusId->getAllStatusControllerForId();
                             ?>                   
                        </select>
                    </div>                  
                  </div>
                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>              
                   <!-- Calling final methods here -->   

                   <?php 
                      $student = new WelcomeController();
                      $student->newWelcomeController();                
                    ?>                          
              </form><!-- .form-horizontal-->
          </div><!-- .col -->
        </div><!-- .row -->
      <hr>
      </div><!-- .container -->
    </section><!-- .wrap -->

<!--====  End of Students  ====-->


    <!--============================
    =            Footer            =
    =============================-->
    <?php include 'view/modules/footer/footer.php'; ?>        
    <!--====  End of Footer  ====-->
    

    <!-- Scripts -->
    <?php include 'view/links/footer_common.php'; ?>

    <script>
      $(document).ready(function() {
        $('#addwelcome').DataTable();
        } );
    </script>


  </body>
</html>