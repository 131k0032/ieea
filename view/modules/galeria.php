

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
                <li class="active">Prueba ajax</li>
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
                                                                
            <div id="galeria">              

              <p><span class="fa fa-arrow-down"></span>  Arrastra aquí tu imagen (Tamaño recomendado: 1024px * 768px, peso permitido: 2Mb)</p>
                
                <ul id="lightbox">

    
                </ul>

                <button id="ordenarGaleria" class="btn btn-warning pull-right" style="margin:10px 30px">Ordenar Imágenes</button>

                <button id="guardarGaleria" class="btn btn-primary pull-right" style="margin:10px 30px; display:none">Guardar Orden Imágenes</button>

            </div>

                
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

  </body>
</html>