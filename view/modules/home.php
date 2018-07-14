<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>IEEA</title>
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
            <h1>Controla quienes han finalizado un curso</h1>
            <p>Ayutade para ver la lista de alumnos, docentes, talleres, etc. para poder saber si todo anda perfecto con ellos en cuanto al curso</p>
            <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalLogin"> Accede ahora &raquo;</a>
        </div><!-- .container-fluid -->
      </div><!-- .jumbotron -->
    </section> <!-- #tittle-enroll    -->
    <!--====  End of Title and enroll  ====-->
    
    
    <!--=========================================
    =            what can i do                  =
    ==========================================-->
    <section class="wrap" id="what-can-i-do">
      <div class="container">
        <h2>¿Que podrá hacer en el sitio?</h2>        

        <div class="row">
            <div class="col-sm-4">
                <img src="view/assets/img/learn-3.png" class="img-circle" alt="">
                <h3>Alumnos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ducimus corporis blanditiis ullam magnam fuga at perferendis et! Quasi delectus, illo sequi repellendus placeat odit doloremque molestias, expedita cupiditate dolore.</p>
            </div>

              <div class="col-sm-4">
                <img src="view/assets/img/learn-3.png" class="img-circle" alt="">
                <h3>Talleres</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ducimus corporis blanditiis ullam magnam fuga at perferendis et! Quasi delectus, illo sequi repellendus placeat odit doloremque molestias, expedita cupiditate dolore.</p>
            </div>

              <div class="col-sm-4">
                <img src="view/assets/img/learn-3.png" class="img-circle" alt="">
                <h3>Docentes</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ducimus corporis blanditiis ullam magnam fuga at perferendis et! Quasi delectus, illo sequi repellendus placeat odit doloremque molestias, <em>expedita cupiditate dolore.</em></p>
            </div>


        </div><!-- .row -->
      

      </div><!-- .container -->
    </section>      
    <!--====  End of what can i do        ====-->


    <!--================================
    =            instructor            =
    =================================-->
    <section class="wrap" id="developer">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-offset-1"> 
            <h2>Tu instructor</h2>
            <div class="row">
              <div class="col-sm-4 left-side" >
                <img src="view/assets/img/instructor.png" class="img-circle" alt="">
                <p><h4>Juan perez cano</h4></p>
                <p>
                  <a href="https://wwww.twitter.con" target="blank_" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                  <a href="https://wwww.twitter.con" target="blank_" class="badge social linkedin"><i class="fa fa-linkedin"></i></a>
                  <a href="https://wwww.twitter.con" target="blank_" class="badge social blog"><i class="fa fa-globe"></i></a>
                </p>                
              </div>

              <div class="col-sm-8">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi officiis nulla illo ea harum quia enim repudiandae accusantium tenetur dicta nostrum ex, quo odio similique officia voluptatibus rem veritatis nobis.</p>
                <p class="lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum illo eaque sequi veniam iste tempora harum voluptatem veritatis! Ut eius, harum dolor cum velit totam veniam unde, error non consectetur.
                </p>
                <p class="lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi, debitis blanditiis similique? Totam soluta maiores eos aliquam, commodi rerum molestiae laudantium placeat quaerat modi? Aliquid aliquam, accusantium consequatur vero!
                </p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum labore, sunt, incidunt nobis nam eius minus similique voluptate nihil modi excepturi est vitae, molestiae animi consectetur inventore quos! Eum, illum.</p>
              </div>
            </div>
          </div><!-- .row -->
        </div>
      </div>
    </section>        
    <!--====  End of instructor  ====-->
    
    <!--=======================================
    =            Promotional video            =
    ========================================-->
    <section class="wrap" id="promo-video">
      <div class="container">
        <div class="header-section">
          <h2>Mira le video de presentacion</h2>
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="embed-responsive embed-responsive-16by9">
                <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w6fLubIJHs8" frameborder="0" allowfullscreen></iframe> -->
              </div>
            </div><!-- .col -->
          </div><!-- .row -->
        </div>
      </div><!-- .container -->
      
    </section>      
    <!--====  End of Promotional video  ====-->
    
    
    
    <!--============================
    =            Footer            =
    =============================-->
   <?php include 'view/modules/footer/footer.php'; ?>    
    <!--====  End of Footer  ====-->
    

    <!--========================================
    =            Hidden login modal            =
    =========================================-->
    <div class="modal fade" id="modalLogin">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">                  
                  <div class="modal-body">                    
                    <form action="" method="POST">
                      <div class="form-group">
                        <label for="inputEmail">Email:</label>
                        <input type="email" required  class="form-control" id="inputEmail" placeholder="Email" name="emailacceso">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword">Contraseña</label>
                        <input type="password" required class="form-control" id="inputPassword" placeholder="Contraseña" name="passwordacceso">
                      </div>
                      <button type="submit" class="btn btn-success btn-block">iniciar sesión</button>
                    </form>
                  </div><!-- .modal-body -->
                  <div class="modal-footer">
                    <p><a href="">¿Sin contraseña?</a></p>
                  </div><!-- .modal-footer -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal         -->
    <!--====  End of Hidden login modal  ====-->


        <?php
            $ingreso = new LoginController();
            $ingreso->loginUserController();
            if(isset($_GET["action"])){
              if($_GET["action"]=="fallo"){                
                echo '<script language="javascript">alert("Error deautentificación");</script>';
              }
            }else{
            }
        ?>


    


    <!--=========================================
    =            Hidden singup modal            =
    ==========================================-->
    <div class="modal fade" id="modalSignup">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-body">
            <p>o bien</p>
            <form action="">
              <div class="form-group">
                <label for="inputName">Usuario</label>
                <input type="text" class="form-control" id="inputName" placeholder="Usario">
              </div>

              <div class="form-group">
                <label for="nputEmailSignup">Email</label>
                <input type="text" class="form-control" id="inputEmailSignup" placeholder="Email">
              </div>

              <div class="form-group">
                <label for="inputPasswordSingup">Contraseña</label>
                <input type="password" class="form-control" id="inputPasswordSingup" placeholder="Constraseña">
              </div>

              <div class="form-group">
                <label for="inputPasswordSingupR">Confirma tu contraseña</label>
                <input type="password" class="form-control" id="inputPasswordSingupR" placeholder="Confirmar constraseña">
              </div>
              <button type="submit" class="btn btn-success btn-block">Regístrate</button>
            </form>
          </div><!-- .modal-body -->
          <div class="modal-footer">
            <p>Al regisrarme <a href="">Acepto los terminos de uso</a> y <a href="">la política de privacidad</a></p>
          </div><!-- .modal-footer -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!--====  End of Hidden singup modal  ====-->
    
    
   <?php include 'view/links/footer_common.php'; ?>
  </body>
</html>