
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
                <li class="active">All registers</li>
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
      <div class="row">
        <div class="col-sm-6  col-sm-offset-5 col-xs-4 col-xs-offset-3">

          <div class="btn-group">
            <div class="btn-group">
            <a href="addwelcome"><button type="submit" class="btn btn-success">Add register</button></a><!-- .btn -->
          </div><!-- .btn-group -->



            <button type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
              Download report <span class="caret"></span>
            </button><!-- .btn -->
           
            <ul class="dropdown-menu" role="menu">
              <li><a href="view/report/welcome-report.php" target="_blank">Generate</a></li>
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
              <table id="welcome" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>                        
                        <th>Instructor name</th>
                        <th>Instructor email</th>
                        <th>Status course</th>
                        <th>Course name</th>
                        <th>Category name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                  <tbody>
                      
                      <?php 
                          $user = new WelcomeController();
                          $user->getAllWelcomeController();
                          $user->delWelcomeController();
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
        $('#welcome').DataTable();
        } );
    </script>


  </body>
</html>