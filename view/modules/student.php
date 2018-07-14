
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
                <li class="active">Students</li>
            </ul><!-- .breadcrumb -->
           </div><!-- .col    -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section>        
    <!--====  End of Breadcrumb  ====-->
    

<!--==============================
=            Students            =
===============================-->

    <section class="wrap" id="tableStudent">
      <div class="container">
      <div class="row">
        <div class="col-sm-5  col-sm-offset-4 col-xs-4 col-xs-offset-3">


          <div class="btn-group">
            <a href="addstudent"><button type="submit" class="btn btn-success">Add student</button></a><!-- .btn -->
          </div><!-- .btn-group -->


          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
              Download report <span class="caret"></span>
            </button><!-- .btn -->
           
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Acción #1</a></li>
              <li><a href="#">Acción #2</a></li>
              <li><a href="#">Acción #3</a></li>
              <li class="divider"></li>
              <li><a href="#">Acción #4</a></li>
            </ul><!-- .dropdown-menu -->
          </div><!-- .btn-group -->

        </div><!-- .cols -->
      </div><!-- .row -->
      <hr>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">                       
              <table id="student" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>                        
                        <th>Created at</th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                  <tbody>
                      
                      <?php 
                          $user = new StudentController();
                          $user->getAllStudentController();
                          $user->delStudentController();
                       ?>
                  </tbody>
              </table><!-- .table-->                         
          </div><!-- .col -->          
        </div><!-- .row -->
        <hr>
      </div><!-- .container -->     
    </section>

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
        $('#student').DataTable();
        } );
    </script>


  </body>
</html>