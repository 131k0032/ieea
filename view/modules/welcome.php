
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
    <title>Aprende Bootstrap 3 y Codeigniter</title>

    <?php include 'view/links/head_common.php'; ?>
  </head>
  <body>
    
    <!--============================
    =            Header            =
    =============================-->    
    <?php  include 'view/modules/header/header.php';?>
    <!--====  End of Header  ====-->

    <!--======================================
    =            Title and enroll            =
    =======================================-->
    <section id="title-enroll">
      <div class="jumbotron">
        <div class="container-fluid">
            <h1>Aprende Bootstrap 3 y Codeigniter</h1>
            <p>Aprende paso a paso a crear tus propias <strong>Aplicaciones web</strong> y conviertete en un <strong>Ninja Developer</strong></p>            
        </div><!-- .container-fluid -->
      </div><!-- .jumbotron -->
    </section> <!-- #tittle-enroll    -->
    <!--====  End of Title and enroll  ====-->

    <!--====================================
    =            Tutorial video            =
    =====================================-->
    
    <section class="wrap" id="tutorial-video">
      <div class="container">
        <h1>Clase 1:Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas laudantium quo, iusto cum, reiciendis sed ab aperiam necessitatibus a quia quod, iure sit voluptate atque laboriosam perspiciatis quaerat dolores. Assumenda.</p>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w6fLubIJHs8" frameborder="0" allowfullscreen></iframe>
            </div>
          </div><!-- col -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .wrap -->
    
    <!--====  End of Tutorial video  ====-->
    

    <!--=================================
    =            Discussions            =
    ==================================-->
    
    <section class="wrap" id="discussions">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h2>Comentarios:</h2>
            <form action="">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Comentarios..."></textarea>
              <p id="btn-form">
                <button type="submit" class="btn btn-danger btn-lg">Publicar</button>
              </p>
            </form>
          </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2"><!-- Espaciado de 2 a la izquierda -->
            <div class="panel panel-default">
              <div class="panel-body">
                <!-- COMENNT -->
                <div class="media">
                  <div class="media-left">
                    <img src="view/assets/img/user.png" class="media-object img-circle" width="64" height="64" alt="">
                  </div><!-- .media-left -->
                                  
                  <div class="media-body">
                    <h4 class="media-heading">Juan eperes <small class="text-muted">hace 2 horas</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis dicta, eum rerum explicabo est temporibus perferendis soluta delectus accusantium tenetur, quo maxime deserunt harum nemo ex iusto saepe reiciendis fuga.</p>
                        <p><button class="btn btn-primary btn-xs" type="submit" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm">Responder</button></p>

                        <!-- FORM ANSWER -->
                        <form action="" class="colapse" id="collapseForm">
                          <textarea name="" id="" cols="30" rows="3" placeholder="Respuesta..." class="form-control"></textarea>
                          <p id="btn-form-answer">
                            <button type="submit" class="btn btn-danger btn-xs">Enviar</button>
                          </p>
                        </form>
                          
                        <!-- END OF FORM ANSWER -->

                         <!-- ANSWER -->
                          <div class="media">
                            <div class="media-left">
                              <img src="view/assets/img/user.png" class="media-object img-circle" width="64" height="64" alt="">
                            </div><!-- .media-left -->
                                            
                            <div class="media-body">
                              <h4 class="media-heading">Juan eperes <small class="text-muted">hace 2 horas</small></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis dicta, eum rerum explicabo est temporibus perferendis soluta delectus accusantium tenetur, quo maxime deserunt harum nemo ex iusto saepe reiciendis fuga.</p>
                            </div><!-- .media-body -->

                          </div><!-- .media -->
                          <!-- END ANSWER -->

                  </div><!-- .media-body -->

                </div><!-- .media -->
                <!-- END COMENNT -->

              </div><!-- .panel-body -->
            </div><!-- .panel -->
          </div><!-- .col -->
        </div><!-- .row -->

      </div><!-- .container -->
    </section><!-- .wrap -->
    
    <!--====  End of Discussions  ====-->
    



    <!--============================
    =            Footer            =
    =============================-->
   <?php include 'view/modules/footer/footer.php'; ?>       
    <!--====  End of Footer  ====-->
        
    <!-- Scripts -->
    <?php include 'view/links/footer_common.php'; ?>

  </body>
</html>