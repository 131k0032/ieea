
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
    <?php include 'view/modules/header/header.php'; ?>
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
    

    

<!--==============================
=            Students            =
===============================-->

    <section class="wrap" id="tableStudents">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2"> 
          <h3>Alumnos</h3>           
              <table id="students" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Extn.</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                  <tbody>
                      <tr>
                          <td>Tiger</td>
                          <td>Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>5421</td>
                          <td>t.nixon@datatables.net</td>
                      </tr>
                      <tr>
                          <td>Garrett</td>
                          <td>Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                          <td>8422</td>
                          <td>g.winters@datatables.net</td>
                      </tr>
                      <tr>
                          <td>Ashton</td>
                          <td>Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                          <td>1562</td>
                          <td>a.cox@datatables.net</td>
                      </tr>
                      <tr>
                          <td>Cedric</td>
                          <td>Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                          <td>6224</td>
                          <td>c.kelly@datatables.net</td>
                      </tr>
                      <tr>
                          <td>Airi</td>
                          <td>Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                          <td>5407</td>
                          <td>a.satou@datatables.net</td>
                      </tr>
                  </tbody>
              </table>                    
          </div>
        </div>
      </div>
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
        $('#students').DataTable();
        } );
    </script>


  </body>
</html>