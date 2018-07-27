
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
                <li><a href="setting">configuración</a></li>               
                <li class="active">Añadir Usuario</li>
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
      <hr>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">                         
              <form class="form-horizontal" method="post">                
               <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Nombre:</label>
                  <div class="col-sm-10"> 
                    <input type="text" required  name="nombreregistro" class="form-control" id="pwd" placeholder="Enter name">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Apellido:</label>
                  <div class="col-sm-10"> 
                    <input type="text" required name="apellidoregistro" class="form-control" id="pwd" placeholder="Enter lastname">
                  </div>
                </div> 

                  <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
                  <div class="col-sm-10"> 
                    <input type="password" required name="passwordregistro" class="form-control" id="pwd" placeholder="Enter password">
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Email:</label>
                  <div class="col-sm-10"> 
                    <input type="email" required name="emailregistro" class="form-control" id="pwd" placeholder="Enter email">
                  </div>
                </div> 

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="psw">Es admin:</label>
                    <div class="col-sm-10">                        
                      <select class="form-control" required name="is_admin_value">';
                             <option value="" >Elige</option>                                        
                             <option value="1" >Administrator</option>
                             <option value="0" >No administrator</option>
                        </select>
                    </div>                  
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="psw">Es activo:</label>
                    <div class="col-sm-10">                        
                      <select class="form-control" required name="is_active_value">';
                             <option value="" >Elige</option>                                        
                             <option value="1" >Activo</option>
                             <option value="0" >Inactivo</option>
                        </select>
                    </div>                  
                  </div>


                 
            


             
                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Añadir</button>
                  </div>
                </div>
               


               <!-- Call methods here -->   

               <?php 
                  $user = new SettingController();
                  $user->newSettingController();                
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
        $('#students').DataTable();
        } );
    </script>


  </body>
</html>