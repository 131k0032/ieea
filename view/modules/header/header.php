<!-- If not exists session vars -->
<?php if (!isset($_SESSION['usuario'])) { ?>
    <header>      
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button><!-- .navbar-toggle -->

            <a href="#" class="navbar-brand">
              <img src="view/assets/img/logo.png" alt="Aprende Bootstrap 3 y Codeigniter">
            </a><!-- .navbar-brand -->
          </div><!-- .navbar-header -->

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="" data-toggle="modal" data-target="#modalLogin">Accede</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalSignup">Regístrate</a></li>
            </ul>
          </div><!-- .collapse -->

        </div><!-- .container -->
      </nav><!-- .navbar -->

    </header>  

<!-- If exists session vars -->
<?php } else { ?>
    
    <header>      
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button><!-- .navbar-toggle -->

            <a href="#" class="navbar-brand">
              <img src="view/assets/img/logo.png" alt="Aprende Bootstrap 3 y Codeigniter">
            </a><!-- .navbar-brand -->
          </div><!-- .navbar-header -->

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['usuario']; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="welcome"><i class="fa fa-home"> </i> Inicio</a></li>
                  <li><a href="student"><i class="fa fa-user"> </i> Alumnos</a></li>
                  <li><a href="instructor"><i class="fa fa-graduation-cap"> </i> Docentes</a></li>
                  <li><a href="course"><i class="fa fa-list"> </i> Talleres</a></li>
                  <li><a href="setting"><i class="fa fa-cog"> </i> Configuración</a></li>
                  <li><a href="exit"><i class="fa fa-sign-out"> </i> Salir</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- .collapse -->

        </div><!-- .container -->
      </nav><!-- .navbar -->

    </header>  

<?php } ?>
   



  



