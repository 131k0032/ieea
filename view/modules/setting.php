

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
                <li><a href="welcome">Inicio</a></li>                
                <li class="active">Configuración</li>
            </ul><!-- .breadcrumb -->
           </div><!-- .col    -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section>        
    <!--====  End of Breadcrumb  ====-->
    


<!--==============================
=            Students            =
===============================-->

    <section class="wrap" id="tableSetting">
      <div class="container">
      <div class="row">
        <div class="col-sm-5  col-sm-offset-5 col-xs-5 col-xs-offset-4">


          <div class="btn-group">
            <a href="addsetting"><button type="submit" class="btn btn-success">Añadir usuario</button></a><!-- .btn -->
          </div><!-- .btn-group -->


        <!--   <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
              Descargar reporte <span class="caret"></span>
            </button>
           
            <ul class="dropdown-menu" role="menu">
              <li><a href="view/report/welcome-report.php" target="_blank">User report</a></li>
             <li><a href="#">Acción #2</a></li>
              <li><a href="#">Acción #3</a></li>
              <li class="divider"></li>
              <li><a href="#">Acción #4</a></li> 
            </ul>
          </div> -->

        </div><!-- .cols -->
      </div><!-- .row -->
      <hr>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">                       
              <table id="setting" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>                                                
                        <th>Email</th>
                        <th>Fecha registro</th>
                        <th>Es admin</th>
                        <th>es activo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                  <tbody>
                      
                      <?php 
                          $user = new SettingController();
                          $user->getAllSettingController();
                          $user->delSettingController();
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
        $('#setting').DataTable();
        } );
    </script>


  </body>
</html>